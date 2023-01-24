<?php
/**
 * Assign by Reference
 */
$name = "najah";

$otherName = &$name;
$otherName = "yuga";

echo $name . PHP_EOL;

/**
 * Pass by Reference
 */
function increment(int &$value){
    $value++;
}

$counter = 10;
increment($counter);

echo $counter . PHP_EOL;

/**
 * Returning Reference
 */
function &getValue(){
    static $value = 100;
    return $value;
}
$a = &getValue();
$a = 200;

$b = &getValue();
echo $b . PHP_EOL;