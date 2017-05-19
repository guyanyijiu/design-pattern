<?php

namespace Core\Observer;

interface IObserver{
    public function update($event_info = null);
}
