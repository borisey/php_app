<?php

use App\Greeter;
use PHPUnit\Framework\TestCase;

final class HelloWorldTest extends TestCase
{
    public function testGreeterSaysHello() {
        $greeter = new Greeter();
        self::assertStringContainsString(
            "Hello",
            $greeter->greet()
        );
    }
//
//    public function testGreeterUsesName() {
//        $greeter = new Greeter();
//
//        self::assertStringContainsString(
//            "Hello, Cody",
//            $greeter->greet("Cody")
//        );
//        self::assertStringContainsString(
//            "Hello, Sarah",
//            $greeter->greet("Sarah")
//        );
//    }
}