<?php

define('ROOT', dirname(__FILE__).'/');
define('PIXODO', dirname(__FILE__).'/Pixodo/');
define('APP', dirname(__FILE__).'/application/');
require_once PIXODO.'framework.php';
App::gi()->start();
