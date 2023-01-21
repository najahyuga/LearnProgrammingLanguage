<?php
function sayHello(string $name, callable $filter){
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Najah", "strtoupper");
sayHello("Najah", "strtolower");
sayHello("Najah", function (string $name) :string{
    return strtolower($name);
});//anonymous function
sayHello("Najah", fn ($name) => strtoupper($name));//arrow function