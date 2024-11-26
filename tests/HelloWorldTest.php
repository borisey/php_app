<?php

require __DIR__ . '/..' . "/src/Greeter.php";

use PHPUnit\Framework\TestCase;
use src\Greeter;

final class HelloWorldTest extends TestCase
{
    public function testGreeterSaysHello() {
        $greeter = new Greeter();
        self::assertStringContainsString(
            "Hello",
            $greeter->greet()
        );
    }

    public function testGreeterUsesName() {
        $greeter = new Greeter();

        self::assertStringContainsString(
            "Hello, Alex",
            $greeter->greet("Alex")
        );
        self::assertStringContainsString(
            "Hello, Sarah",
            $greeter->greet("Sarah")
        );
    }
}