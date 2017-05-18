<?php

namespace Core;

class Factory{
    static function getDatabase(){
        $db =  \Core\Database::getInstance();
        Register::set('db1', $db);
        return $db;
    }
}
