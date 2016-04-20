<?php
class AppTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        define('PIXODO', dirname(__FILE__).'/../Pixodo/');
        define('APP', dirname(__FILE__).'/../application/');
        include PIXODO.'framework.php';
        $_SERVER['REQUEST_URI'] = "/";
    }

    public function testApp()
    {
        App::gi()->start();
    }
}