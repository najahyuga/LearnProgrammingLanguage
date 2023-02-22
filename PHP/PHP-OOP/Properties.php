<?php
require_once "data/Person.php";

//manipulasi string dengan kata kunci ->
$person1 = new Person();
$person1->name = "yuga";
$person1->address = "Surabaya";
$person1->country = "Indonesia";

var_dump($person1);

echo "name : $person1->name" . PHP_EOL;
echo "address : $person1->address" . PHP_EOL;
echo "country : $person1->country" . PHP_EOL;

$person2 = new Person();
$person2->name = "najah";
$person2->address = "Surabaya";
$person2->country;

var_dump($person2);