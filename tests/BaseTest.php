<?php

use Carloscsrm\Sharelaravel\Sharelaravel;

class BaseTest extends \PHPUnit_Framework_TestCase
{

    public function setUp()
    {
    }

    public function testConstructs()
    {
        $instance = new Sharelaravel;
        $this->assertInstanceOf('Carloscsrm\Sharelaravel\Sharelaravel', $instance);
    }
}
