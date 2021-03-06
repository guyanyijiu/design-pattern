<?php

namespace Core;

class Register{
    protected static $objects;
    public static function set($alias, $object){
        self::$objects[$alias] = $object;
    }
    public static function get($alias){
        return self::$objects[$alias];
    }
    public function _unset($alias){
        unset(self::$objects[$alias]);
    }
}
