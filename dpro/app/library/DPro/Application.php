<?php

namespace DPro;

class Application {

    // TODO houses config
    protected $config = array();
    
    // TODO houses hooks
    protected $hooks = array();
    
    /*
     * @var \DPro\View
     */
    protected $view;
    
    public function __construct()
    {
        $this->view = new \DPro\View();
    }
    
    public function getView()
    {
        return $this->view;
    }
    
    public function setView(\DPro\View $view)
    {
        $this->view = $view;
    }
    
    /**
     * Sets a new hook and callback.
     * 
     * @param string $name
     * @param callable $callable
     */
    public function setHook($name, $callable)
    {
        if (!is_callable($callable)) {
            throw new \InvalidArgumentException('setHook was not given a callable argument.');
        }
        
        if (!isset($this->hooks[$name])) {
            $this->hooks[$name] = array();
        }
        
        $this->hooks[$name][] = $callable;
        
    }
    
    /**
     * Calls the stored callbacks for the given hook.
     * 
     * @param string $name
     * @param array $args
     * @return null
     */
    public function callHook($name, array $args = array())
    {
        if (!isset($this->hooks[$name])) return;
        
        foreach($this->hooks[$name] as $hook) {
            call_user_func_array($hook, $args);
        }
    }

}