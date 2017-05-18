<?php

namespace Core;

class Factory{
    static function getDatabase(){
        $db =  \Core\Database::getInstance();
        Register::set('db1', $db);
        return $db;
    }
    static function getMysql($type = 'pdo'){
        if($type == 'mysql'){
            $db = new \Core\Database\Mysql();
        }elseif($type == 'mysqli'){
            $db = new \Core\Database\Mysqli();
        }else{
            $db = new \Core\Database\PDO();
        }
        return $db;
    }

}
