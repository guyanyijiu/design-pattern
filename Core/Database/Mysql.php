<?php

namespace Core\Database;

class Mysql implements IDatabase {
    protected $conn;
    public function connect($host, $username, $password, $dbname){
        $conn = mysql_connect($host, $username, $password, $dbname);
        if($conn){
            $this->conn = $conn;
        }else{
            throw new \Exception('connect mysql failed');
        }
    }

    public function query($sql){
        $result = mysql_query($sql, $this->conn);
        return $result;
    }

    public function close(){
        mysql_close($this->conn);
    }
}
