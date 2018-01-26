<?php
namespace UnitTestDemo;
 
 
class DemoTest extends \PHPUnit_Framework_TestCase
{
 
    public function test_demo_get_option()
    {
        $this->assertEquals('demo_foo', UnitTestDemo::demo_get_option('foo'));
    }
}
