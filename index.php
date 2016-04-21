<?php
header('Content-Type: text/html; charset=utf-8');
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

define('ROOT', dirname(__FILE__).'/');
define('PIXODO', dirname(__FILE__).'/Pixodo/');
define('APP', dirname(__FILE__).'/application/');
require_once PIXODO.'framework.php';

if (php_sapi_name() == 'cli') {
    $config = require APP.'console.php';
    App::gi()->console($config);
}else{
    App::gI()->start();
}