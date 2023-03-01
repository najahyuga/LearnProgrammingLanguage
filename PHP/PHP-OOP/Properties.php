<?php
require_once "data/Person.php";

/**
 * manipulasi string dengan kata kunci ->
 * Person("yuga", "SBY") param/argumen yang diambil dari __construct dari class Person
 */
$person1 = new Person("yuga", "SBY");
$person1->name = "yuga";
$person1->address = "SBY";
$person1->country = "Indonesia";

var_dump($person1);

echo "name : $person1->name" . PHP_EOL;
echo "address : $person1->address" . PHP_EOL;
echo "country : $person1->country" . PHP_EOL;

$person2 = new Person("najah", "Surabaya");
$person2->name = "najah";
$person2->address = "Surabaya";
$person2->country;

var_dump($person2);