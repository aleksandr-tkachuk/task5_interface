<?php

class Msql implements iWorkData{

    protected $dbName = 'user1';
    protected $dataName = 'MY_TEST';
    
    protected $dblink = null;
    
        public function __construct($host,$user,$pass) {
            
        $this->dblink = mysql_connect($host, $user,$pass); 
        if(!$this->dblink){
            throw new Exception('Failed to connect: ' . mysql_error());
        }
        $dbConnect = mysql_select_db($this->dbName,$this->dblink);
        if(!$dbConnect){
            throw new Exception('Failed to select base'.$this->dbName.': ' . mysql_error());
        }
        mysql_query("SET NAMES utf8");
        }

        public function saveData($key, $val){
          $query = "INSERT INTO `$this->dataName` (`key`, `data`) VALUES ('$key', '$val')"
                  . "ON DUPLICATE KEY UPDATE `data` = '$val'";
          $result = mysql_query($query);
          if (!$result) "Added to database.";
        }
            
        
        public function getData($key){            
            $query = "SELECT * FROM `$this->dataName` WHERE `key`='$key'";
            $result = mysql_query($query);
            $row = mysql_fetch_array($result);
            return $row['data'];
        }
        
        public function deleteData($key){            
            $sql = "DELETE FROM `$this->dataName` WHERE `key`='$key'";
            mysql_query($sql) or die ("Error in line recovery from the database");
        }
}

 
