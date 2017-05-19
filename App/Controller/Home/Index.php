<?php

namespace App\Controller\Home;

use Core\Strategy\IStrategy;

class Index{
    public static function ad(IStrategy $strategy){
        echo 'AD:';
        $strategy->showAd();
        echo "\n";
        echo '类目:';
        $strategy->showCategory();
    }
}
