<?php
class Session
{
    public static function create(){
        if(session_status() === PHP_SESSION_ACTIVE){
            session_destroy();
            session_start();
        }
        
    }

    public function destroy(){
        session_destroy();
    }

    public function add($name, $value){
        $_SESSION[$name] = $value;
        return $_SESSION[$name];
    }

    public function remove($name){
        unset($_SESSION[$name]);
        return $_SESSION[$name];
    }

    public function accessible($user, $page) : bool{

    }
}