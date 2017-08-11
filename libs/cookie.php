<?php

class Cookie implements iWorkData{

        public function saveData($cookie_name, $cookie_value){
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
        }
        public function getData($cookie_name){
            return $_COOKIE[$cookie_name];
        }
        public function deleteData($cookie_name){
            setcookie($cookie_name, "", time() - 3600);
        }
}

