<?php

namespace Core\Strategy;

/**
 * Class FemaleUserStrategy
 *
 * @package \Core\Strategy
 */
class FemaleUserStrategy implements IStrategy
{
    public function showAd(){
        echo '女性广告。。。';
    }

    public function showCategory(){
        echo '裙子。。。';
    }
}
