<?php
define('PIXODO', dirname(__FILE__).'/../Pixodo/');
define('APP', dirname(__FILE__).'/../application/');

class AppTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        require_once PIXODO.'framework.php';
    }

    public function testApp()
    {
        $_SERVER['REQUEST_URI'] = "/";
        App::gi()->start();
    }
}