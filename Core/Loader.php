<?php

namespace Core;

class Loader{
    static function load($class){
        require BASEDIR . '/' . str_replace('\\', '/', $class) . '.php';
    }
}
