<?php

class PostgreSql implements iWorkData{

    protected $dbh = 'user1';
    protected $dataName = 'newbookshop';
    
    protected $dbconn = null;

    public function __construct($host,$user,$pass) {

        $this->dbconn = pg_connect(
                  "host=$host "
                . "dbname=$this->dataName "
                . "user=$user "
                . "password=$pass ");
        if(!$this->dbconn){
            throw new Exception('Failed to connect: ' . pg_last_error());
        }
    }

    public function saveData($key, $val){
        $query = "INSERT INTO $this->dataName('$key') VALUES ('$val')";
        $result = pg_query($this->dbconn,$query);
    }
    
    public function getData($key){
        $query = "SELECT * FROM `$this->dataName` WHERE `name`='$key'";
        $result = pg_query($this->dbconn,$query);
        if(!$result){
            throw new Exception('Failed to connect: ' . pg_last_error());
        }
        return $result;
    }
        
        public function deleteData($key){
            $query ="DELETE FROM $this->dbh WHERE `name` = '$key'";
        }
}


 
