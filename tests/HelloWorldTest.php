<?php
require_once 'src/HelloWorld.php';

class HelloWorldTest extends PHPUnit_Framework_TestCase {

    public function testShouldRespondWithHelloWorld() {
        $helloWorld = new HelloWorld();
        $this->assertEquals("hello, world", $helloWorld->greet());
    }

}
