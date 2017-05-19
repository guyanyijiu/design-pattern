<?php
define('BASEDIR', __DIR__);
require BASEDIR . '/Core/Loader.php';

spl_autoload_register('\\Core\\Loader::load');

//\Core\Object::test();
//\App\Controller\Home\Index::test();


//$db0 = \Core\Database::getInstance();
//var_dump($db0);
//
//$db1 = \Core\Factory::getDatabase();
//var_dump($db1);
//
//$db2 = \Core\Register::get('db1');
//var_dump($db2);

//$mysql = \Core\Factory::getMysql('pdo');
//$mysql->connect('127.0.0.1', 'root', 'liuchao', 'guyanyijiu');
//var_dump($mysql);
//$result = $mysql->query('show tables;');
//var_dump($result);

if(isset($_GET['female'])){
    $strategy = new \Core\Strategy\MaleUserStrategy();
}else{
    $strategy = new \Core\Strategy\FemaleUserStrategy();
}
\App\Controller\Home\Index::ad($strategy);
