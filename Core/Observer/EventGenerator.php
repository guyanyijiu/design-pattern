<?php

namespace Core\Observer;

abstract class EventGenerator{
    private $observers = [];
    public function addObserver(IObserver $observer){
        $this->observers[] = $observer;
    }
    public function notify(){
        foreach($this->observers as $observer){
            $observer->update();
        }
    }
//    public function __destruct(){
//        $this->notify();
//    }
}
