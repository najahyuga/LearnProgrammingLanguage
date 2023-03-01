<?php
require_once "data/Person.php";

/**
 * Object dengan kata kunci new
 * Person("yuga", "SBY") param/argumen yang diambil dari __construct dari class Person
 */
$person1 = new Person("yuga", "SBY");
$person2 = new Person("najah", "Surabaya");

var_dump($person1);