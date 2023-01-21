<?php
$name = "Najah";
$name = null;//variable tanpa nilai

$age = null;

echo "Name : ";  
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

//is_null untuk mengecek variable null atau tidak
echo "Is Name Null : ";
var_dump(is_null($name));
echo "\n";

echo "Is Age Null : ";
var_dump(is_null($age));
echo "\n";

$contoh = "Najah";
unset($contoh);//untuk menghapus variable

$contoh = "Yuga";
$contoh = null;

var_dump(isset($contoh)); //lebih recommended