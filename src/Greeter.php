<?php

namespace src;

class Greeter {
    public function greet(string $name = null): string
    {
        if ($name) {
            return "Hello, $name!";
        }

        return "Hello!";
    }
}