<?php
$data = [1, 2, 3, 4, 5];

$dataResult = array_map(fn(int $value) => $value * 10, $data);
var_dump($dataResult);

rsort($data);
var_dump($data);

var_dump(array_keys($data));
var_dump(array_values($data));

$person = [
    "first_name" => "najah",
    "last_name" => "yuga"
];

var_dump(array_keys($person));
var_dump(array_values($person));