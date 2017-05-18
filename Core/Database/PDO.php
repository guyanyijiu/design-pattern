<?php

namespace Core\Database;

class PDO implements IDatabase {
    protected $conn;

    public function connect($host, $username, $password, $dbname){
        try{
            $this->conn = new \PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        }
        catch (\PDOException $e){
            echo $e->getMessage();
        }
    }

    public function query($sql){
        $result = $this->conn->query($sql);
        return $result;
    }

    public function close(){
        unset($this->conn);
    }
}
