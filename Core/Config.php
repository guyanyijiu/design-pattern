<?php

namespace Core;

class Config implements \ArrayAccess{

    private $path;
    private $configs = [];

    public function __construct($path){
        $this->path = $path;
    }

    public function offsetGet($offset)
    {
        if(array_key_exists($this->configs[$offset])){
            return $this->configs[$offset];
        }else{
            $full_path = $this->path . '/' . $offset . '.php';
            $configs = require $full_path;
            $this->configs[$offset] = $configs;
            return $configs;
        }
    }

    public function offsetSet($offset, $value)
    {
        // TODO: Implement offsetSet() method.
    }

    public function offsetUnset($offset)
    {
        // TODO: Implement offsetUnset() method.
    }
    public function offsetExists($offset)
    {

    }


}
