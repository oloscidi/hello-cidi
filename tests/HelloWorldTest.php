<?php
require_once 'src/HelloWorld.php';

class HelloWorldTest extends PHPUnit_Framework_TestCase {

    public function testShouldRespondWithHello() {
        $helloWorld = new HelloWorld();
        $this->assertEquals("hello", $helloWorld->greet());
    }

}
