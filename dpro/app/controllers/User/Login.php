<?php

class Page_User_Login extends Page_Common
{
    
    protected $user;
    
    protected function before()
    {
        $this->user = new \DPro\User();
    }
    
    function get($message = '')
    {
        
        if ($this->user->isLoggedIn()) {
            header('Location: /dashboard');
        }
        
        $username = isset($_POST['username']) ? $_POST['username'] : '';
        
        include __DIR__.'/../../components/Security/login.php';
        
    }
    
    function post()
    {
        
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $result = $this->user->attemptLogin($user, $pass);
        
        if ($result) {
            header('Location: /dashboard');
        }
     
        $message = 'Could not log in.';
        $this->get($message);
    }
    
}