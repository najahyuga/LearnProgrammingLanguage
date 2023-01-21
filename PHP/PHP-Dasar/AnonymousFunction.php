<?php
$sayHai = function (string $name){
    echo "Hello $name" . PHP_EOL;
};

$sayHai("yug");

function sayGoodBye(string $name, $filter){
    $finalName = $filter($name);
    echo "Hello $finalName". PHP_EOL;
}

sayGoodBye("najah", function(string $name): string{
    return strtoupper($name);
});

$filterFunction = function(string $name){
    return strtoupper($name);
};

sayGoodBye("Yuga", $filterFunction);

//Akses Variable diluar Anonymous Function
$firstName = "Najah";
$lastName = "Yuga";

$sayHelloYuga = function() use ($firstName, $lastName){
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloYuga();