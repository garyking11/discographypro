<?php

namespace DPro;

class User {
    
    /**
     * Starts the session for our auth class.
     */
    public function __construct()
    {
        if (session_id() == '') {
            session_start();
        }
    }
    
    /**
     * Returns true if the user is logged in.
     * 
     * @return bool
     */
    public function isLoggedIn()
    {
        return isset($_SESSION['user']);
    }
    
    /**
     * Attempts to login the user.
     * 
     * @param string $user
     * @param string $pass
     * @return bool
     */
    public function attemptLogin($user, $pass)
    {
        $row = \ORM::for_table('users')->where('username', $user)->find_one();
        if ($row) {
            $check_password = hash('sha256', $pass . $row['salt']);
            for($round = 0; $round < 65536; $round++)
            {
                $check_password = hash('sha256', $check_password . $row['salt']);
            }
            
            if($check_password === $row['password'])
            {
                unset($row['salt']);
                unset($row['password']);
                $_SESSION['user'] = $row;
                return true;
            }
        }
        return false;
    }
    
}