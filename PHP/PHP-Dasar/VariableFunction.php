<?php
function foo(){
    echo "foo" . PHP_EOL;
}

function bar(){
    echo "bar" . PHP_EOL;
}

//Varible Function
$functionName = "foo";
$functionName();

//Varible Function
$functionName = "bar";
$functionName();

function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name): string{
    return "Sample $name";
}

sayHello("Najah", "sampleFunction");
sayHello("Najah", "strtoupper");
sayHello("Najah", "strtolower");