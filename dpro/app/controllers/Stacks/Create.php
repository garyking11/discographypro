<?php

namespace Stacks;
use m;


class Create extends \AuthController
{

    /**
     * 
     * @return type
     */
    public function get()
    {
        
        $input = m\m::session()->getFlashed('input', array());
        $errors = m\m::session()->getFlashed('errors', array());
        
        $form = m\m::form();
        $form->setField('name', new m\Html\Fields\InputField('name', 'text'));
        $form->setField('submit', new m\Html\Fields\InputField('submit', 'submit', array('value'=>'Create Stack')));
        $form->update($input);

        return m\m::view('backend/stacks/create')
                ->pass('form', $form->render())
                ->pass('errors', $errors);
        
    }

    /**
     * 
     * @param type $subject
     * @return type
     */
    public function post()
    {

        $validator = m\m::validator(array(
           'name' => 'required' 
        ));

        // On success
        if ($validator->check($_POST)) {
            
            $stack = \ORM::for_table('stacks')
                    ->create(array(
                        'name'  => $_POST['name']
                    ));
            
            $id = $stack->save();
            
            return m\m::redirect("/admin/stacks/{$id}/edit");
        }

        // On fail
        return m\m::redirect('/admin/stacks/create')
                ->pass('errors', $validator->errors())
                ->pass('input', $_POST);
        
    }

}