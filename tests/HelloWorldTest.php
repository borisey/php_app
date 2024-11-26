<?php

use PHPUnit\Framework\TestCase;

final class HelloWorldTest extends TestCase
{
    public function testResponseCode()
    {
        $this->assertEquals(200, http_response_code());
    }

    public function testGreeting()
    {

        $greeting = "Hello world";
        $requiredGreeting = "Hello world";

        $this->assertEquals($greeting, $requiredGreeting);
    }
}