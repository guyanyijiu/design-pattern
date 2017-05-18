<?php

namespace Core;

class Database{
    private function __construct(){}
    private function __clone(){}
    private static $instance;
    public static function getInstance(){
        if(self::$instance instanceof self){
            return self::$instance;
        }else{
            self::$instance = new self();
            return self::$instance;
        }
    }
    public function where($where){
        echo "$where\n";
        return $this;
    }
}
