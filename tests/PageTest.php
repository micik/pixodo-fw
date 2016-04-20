<?php
define('PIXODO', dirname(__FILE__).'/../Pixodo/');
define('APP', dirname(__FILE__).'/../application/');

class PageTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        require_once PIXODO.'framework.php';
    }

    public function testPageIndex()
    {
        $page = new PageController();
        $page->actionRead();
    }

    public function testPageAbout()
    {
        $page = new PageController();
        $page->actionRead("about");
    }

    public function testPageTest()
    {
        $page = new PageController();
        $page->actionRead("test");
    }
}