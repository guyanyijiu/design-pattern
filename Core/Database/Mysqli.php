<?php

namespace Core\Database;

class Mysqli implements IDatabase{
    protected $conn;

    public function connect($host, $username, $password, $dbname){
        $conn = mysqli_connect($host, $username, $password, $dbname);
        if($conn){
            $this->conn = $conn;
        }else{
            throw new \Exception('connect mysql failed');
        }

    }

    public function query($sql){
        return mysqli_query($this->conn, $sql);
    }

    public function close(){
        mysqli_close($this->conn);
    }
}
