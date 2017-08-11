<?php

class Session implements iWorkData{
    
    public function __construct() {
        session_start();
    }
    
    public function saveData($sessionName, $sessionValue){

        return $_SESSION[$sessionName] = $sessionValue;
    }
    public function getData($sessionName){
        return $_SESSION[$sessionName];
    }
    public function deleteData($sessionName){

        unset($_SESSION[$sessionName]);
        session_unregister($sessionName);
    }

}


