<?php

namespace Core;

use Core\Observer\EventGenerator;

class Event extends EventGenerator {
    public function trigger(){
        echo 'event occur 。。。';
        $this->notify();
    }

//    public function __destruct()
//    {
//        $this->notify();
//    }
}
