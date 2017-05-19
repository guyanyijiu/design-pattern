<?php

namespace Core\Strategy;

class MaleUserStrategy implements IStrategy {
    public function showAd(){
        echo '男性广告。。。';
    }

    public function showCategory(){
        echo '电子产品';
    }
}
