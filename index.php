<?php
define('BASEDIR', __DIR__);
require BASEDIR . '/Core/Loader.php';

spl_autoload_register('\\Core\\Loader::load');

//\Core\Object::test();
//\App\Controller\Home\Index::test();


$db0 = \Core\Database::getInstance();
var_dump($db0);

$db1 = \Core\Factory::getDatabase();
var_dump($db1);

$db2 = \Core\Register::get('db1');
var_dump($db2);
