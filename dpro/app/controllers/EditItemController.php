<?php

class EditItemController extends AuthController
{

    /**
     * @var string Success/Error Message 
     */
    protected $_message = null;
    
    /**
     * Get the related item fields.
     * 
     * @param int $id
     * @param string $subject
     * @return \ORM
     */
    protected function fields($subject, $id)
    {
        return \ORM::for_table('fields')
                ->where('subject_id', $id)
                ->where('subject_type', $subject);
    }
    
    /**
     * Get the item entry to edit.
     * 
     * @param int $subject
     * @param string $id
     * @return string
     */
    function get($subject, $id)
    {
       
        // Get the single entry item
        $entry = \ORM::for_table($subject)->find_one($id);
        
        // Get the custom fields
        $fields = $this->fields($subject, $id)
                ->order_by_asc('id')
                ->find_many();
        
        // Get the associated standard set
        //$set    = getConfig('forms/standard-set');
        
        $session = m\m::session();

        $token = $session->getToken();
        
        $view =  m\m::view('backend/'.$subject.'_edit')
                ->pass('errors', $session->getFlashed('errors', array()))
                ->pass('token', $token);
                
        $view->fetchWrite('backend/'.$subject.'_edit.php');
                
        return $view;
        
        // Define custom fields
        $custom = array();
        
        foreach($fields as $field) {
            $custom[$field->key] = $field;
        }

        // Define categorized details
        $details = array();
        
        // Loop through detail categories
        foreach($set['fields'] as $category => $keys) {
            
            $details[$category] = array();
            
            foreach($keys as $key) {
                $details[$category][$key] = isset($custom[$key]) ? $custom[$key]->value : '';
                unset($custom[$key]);
            }
            
        }

        
        // Pass data to view file
        return $this->view  ->set($subject, $entry)
                            ->set('details', $details)
                            ->set('custom', $custom)
                            ->set('message', $this->_message)
                            ->fetch($subject.'_edit');
        
    }
    
    function post($subject, $id)
    {

        $validator = m\m::validator();
        
        $validator->setRulesFor('name', 'required|min:4');
        
        $messages = array(
            'required' => 'Fill in the :key field you dummy!',
            'min.name'  => 'Album name must contain a minimum of :min characters'
        );
        
        if (!$validator->check($_POST, $messages)) {
            
            $errors = $validator->errors(false);

            return m\m::redirect('/admin/'.$subject.'/edit/'.$id.'/')
                ->pass('errors', $errors);
            
        }
        
        return m\m::response('SUCCESS');
        
        //echo '<pre>'.print_r($_POST, true).'</pre>';
        
        // Get the entry to edit
        $entry = \ORM::for_table($subject)->find_one($id);
        
        // Stash the field post data
        $cf = $_POST['fields'];
        unset($_POST['fields']);
        
        // Set some backend information
        $_POST['modified_by'] = 0; //$_SESSION['user_id'];
        $_POST['modified_time'] = time();
        
        // Set the entry data
        $entry->set($_POST);
        
        // Save the entry
        $result = $entry->save();

        // Continue if we successfully saved our entry
        if ($result) {
        
            // Clear out all the previous fields
            $result = $this->fields($subject, $id)->delete_many();

            // Add the modified fields
            $fields = \ORM::for_table('fields');

            for($i=0;$i<count($cf['k']);$i++) {

                // A key MUST be supplied
                if (!$cf['k'][$i])
                    continue;

                $fields->create(array(
                    'key'   => $cf['k'][$i],
                    'value' => $cf['v'][$i],
                    'subject_id' => $id,
                    'subject_type'  => $subject
                ))->save();

            }        

            // Set the success message
            $this->_message = 'Successfully updated '.$subject.'!';
        
        }
            
        // Show the form again
        return $this->get($subject, $id);
        
    }
    
}