<?php

namespace Core;

use Core\Observer\IObserver;

class Observer implements IObserver {
    public function update($event_info = null){
        echo 'Observer 1 updated...';
    }
}
