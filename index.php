<?php

require __DIR__ . "/src/Greeter.php";
use src\Greeter;

$greeter = new Greeter;
echo $greeter->greet();
