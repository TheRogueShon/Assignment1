<?php
class Session
{
    protected $access = ['profile'=>['testuser']];

    public static function create(){
        if(session_status() === PHP_SESSION_ACTIVE){
            session_start();
        } 
    }

    public function destroy(){
        session_destroy();
    }

    public function add($name, $value){
        $_SESSION[$name] = $value;
    }

    public function getAdd($name){
        return $_SESSION[$name];
    }

    public function remove($name){
        if(isset($_SESSION[$name])){
            unset($_SESSION[$name]);
        }
    }

    public function see($name){
        if(isset($_SESSION[$name])){
            return $_SESSION[$name];
        }
        return null;
    }

    public function accessible($user, $page) : bool{
        if(in_array($user, $this->access[$page])){
            return true;
        }
        return false;
    }
}