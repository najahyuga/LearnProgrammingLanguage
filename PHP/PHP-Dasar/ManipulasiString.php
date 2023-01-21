<?php
//dot operator
$name = "Najah Yuga";

echo "Name : " . $name . PHP_EOL;
echo "Value : " . 100 . PHP_EOL;

//konversi ke number dan sebaliknya
$valueString = (string)100;
var_dump($valueString);
$valueInteger = (int)"100";
var_dump($valueInteger);
$valueFloat = (float)"1.111";
var_dump($valueFloat);

//mengakses karakter
$names = "Najah";
echo $names[0] . PHP_EOL;
echo $names[1] . PHP_EOL;
echo $names[2] . PHP_EOL;
echo $names[3] . PHP_EOL;
echo $names[4] . PHP_EOL;

//variable string
echo "Hello $names, Welcome Back" . PHP_EOL;

//curly brace
$var = "var";

echo "This is {$var}s" . PHP_EOL;