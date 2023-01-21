<?php
//Default Argumen Value
function sayHello($first_name, $last_name = ""){
    echo "Hello $first_name $last_name" . PHP_EOL;
}
sayHello("yuga");//Default Argumen Value
sayHello("najah", "yuga");

//Default Argumen Value
function sayHai($name = "defaultArgumenValue"){
    echo "Hello $name" . PHP_EOL;
}
sayHai("yuga");
sayHai();

//Type Declaration
function sum(int $first, int $last){
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

sum(100,100);
sum("10", 10);
sum(true, false);

//Variable-Length Argumen List
function sumAll(...$values){
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }

    echo "Total " . implode(" + ", $values) . " = $total" . PHP_EOL;
}

sumAll(1,2,3,4,5);