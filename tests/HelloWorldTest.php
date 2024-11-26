<?php

use PHPUnit\Framework\TestCase;

final class HelloWorldTest extends TestCase
{
    public function testGreeting() {

        $greeting = "Hello world";
        $requiredGreeting = "Hello world";

        $this->assertEquals($greeting, $requiredGreeting);
    }
}