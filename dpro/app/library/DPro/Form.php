<?php

namespace DPro;

class Form
{
    
    protected $attr = array();
    
    protected $fields = array();
    
    protected $input = array();
    
    protected $message = null;
    
    public function __construct()
    {
        
        $this->attr = array(
            'action' => '',
            'method' => 'post',
						'id'		 => '',
						'name'	 => '' 
        );
        
        // Merge given fields with defaults

    }
    
    public function addFields(array $fields)
    {
        foreach ($fields as $name => $field) {
            
            if (!is_array($field)) {
                $this->fields[] = RawField($field);
            }
            
            if (!isset($field['type'])) {
                continue;
            }
            
            switch($field['type']) {
                
                case 'text':
                case 'phone':
                case 'email':
                case 'hidden':
                case 'submit':
                    $f = new InputField($name, $field);
                    break;
                
                case 'select':
                case 'dropdown':
                    $f = new SelectField($name, $field);
                    break;
                
                case 'textarea':
                    $f = new TextareaField($name, $field);
                    break;
                
                default:
                    break;
            }
            
            $this->fields[] = $f;
            
        }
        
        return $this;
        
    }
    
    public function getInput()
    {
        return $this->input;
    }
    
    public function setInput(array $input)
    {
        $this->input = $input;
        return $this;
    }
    
    public function validate()
    {
        foreach ($this->fields as $field) {
            
            $aid   = $field->get('aid');
						$artist   = $field->get('artist');
						$agency   = $field->get('agency');
						$studio   = $field->get('studio');
						$name   = $field->get('name');
            $input  = isset($this->input[$name]) ? $this->input[$name] : null;
            
            // Check if field is required
            if (!$input && $field->isRequired()) {
                $this->message = $name.' can not be blank';
                break;
            }
            
            // Validate input against
            
            
        }
        
        return $this;
        
    }
    
    public function render()
    {
        
        $output = '';
        
        if ($this->message) {
            $output .= $this->message;
        }
        
        $output .= '<form ';
        foreach($this->attr as $key => $value) {
            $output .= $key.'="'.$value.'" ';
        }
        $output .= '>';
        
        foreach($this->fields as $field) {
            
            $name = $field->get('name');
            
            if (isset($this->input[$name])) {
                $field->set('value', $this->input[$name]);
            }
            
            $output .= $field->render();
        }
        
        $output .= '</form>';
        
        return $output;
        
    }
    
    public function __toString()
    {
        return $this->render();
    }
    
}

abstract class Field {
    
    protected $attr = array();
    
    public function __construct($name, array $attr = array())
    {
        $this->attr = $attr;
        $this->attr['name'] = $name;
				$this->attr['id'] = $id;
    }
    
    public function set($key, $value)
    {
        $this->attr[$key] = $value;
        return $this;
    }
    
    public function get($key)
    {
        return isset($this->attr[$key]) ? $this->attr[$key] : null;
    }

    public function has($key)
    {
        return array_key_exists($key, $this->attr);
    }
    
    public function clear($key)
    {
        unset($this->attr[$key]);
    }
    
    public function isRequired()
    {
        return isset($this->attr['required']) && $this->attr['required'] === true;
    }
    
    protected function renderAttributes()
    {
        $output = '';
        foreach($this->attr as $key => $value) {
            $output .= $key.'="'.$value.'" ';
        }
        return $output;
    }
    
    abstract public function render();
    
} 

class RawField
{
    
    protected $value;
    
    public function __construct($value)
    {
        $this->value = $value;
    }
    
    public function render()
    {
        return $this->value;
    }
    
}

class Button extends Field
{
    
    public function render()
    {
    }
    
}

class InputField extends Field
{
    public function render()
    {
        return '<li><label for="">' .ucwords($this->attr['name']). ' <br /><input '.$this->renderAttributes().' /></li></label>';/* .$this->attr['id'].*/
    }
}

class SelectField extends Field
{
    
    protected $options = array();
    
    public function __construct($name, array $attr = array())
    {
        
        if (isset($attr['options'])) {
            $this->options = (array) $attr['options'];
            unset($attr['options']);
        }
        
        parent::__construct($name, $attr);
        
    }
    
    public function render()
    {
        $output = '<li><select '.$this->renderAttributes().'></li>';
        
        foreach ($this->options as $option) {
            
            $output .= '<option value="'.$option['value'].'"'
                        .(isset($option['selected']) ? ' selected="selected"' : '')
                        .'>'.$option['display'].'</option>';
            
        }
        
        $output .= '</select>';
        
        return $output;
    }
}

class TextareaField extends Field
{
    public function render()
    {
        return '<li><textarea '.$this->renderAttributes().' ></textarea></li>';
    }  
}