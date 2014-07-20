<?php

class NewItemController extends AuthController
{

    public function get($subject)
    {
        return m\m::view($subject.'_add.php');
    }
    
    public function post($subject)
    {
        
        // Find the model name
        $modelName = '\Model\\'.ucfirst($subject);
        
        // Get the model
        $model = new $modelName();
        
        // Pass the data and get result
        $result = $model->add($_POST);
        
        // If query suceeded, proceed to edit page
        if ($result !== false) {
            return m\m::redirect('/admin/'.$subject.'/edit/'.$result);
        }
        
        // Query failed, show form again
        return $this->get($subject);

    }
    
}