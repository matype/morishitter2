<?php

class Session
{
 
    static private $_ins = null;
    static private $session_started = false;

    static public function getInstance()
    {
        if (self::$_ins === null) {
            self::$_ins = new self();
        }

        self::sessionStart();
        return self::$_ins;
    }

    function __construct()
    {

    }
    
    static function sessionStart($life_time = 0)
    {
        if (self::$session_started == false) {
            self::$session_started = true;

            $http_host = $_SERVER['HTTP_HOST'];

            session_set_cookie_params(0, '/', $http_host);
            session_start();

            if ($life_time == 0) {
                setcookie(session_name(), session_id(), 0, '/', $http_host);
            } else {
                setcookie(session_name(), session_id(), time() + $life_time, '/', $http_host);
            }
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }
    
    function get($key)
    {
        return $_SESSION[$key];
    }
    
    function delete($key)
    {
        unset($_SESSION[$key]);
    }
    
    function notEmpty($key)
    {
        return isset($_SESSION[$key]);
    }

    function destory()
    {
        session_destroy();
    }
}
