<?php
$first =  [
    "firsname" => "Najah"
];

$last = [
    "lastname" => "Yuga"
];

$full = $first + $last;
var_dump($full);

$a = [
    "firsname" => "Najah",
    "lastname" => "Yuga"
];

$b = [
    "lastname" => "Yuga",    
    "firsname" => "Najah"
];

var_dump($a == $b);
var_dump($a === $b);
var_dump($a != $b);
var_dump($a !== $b);