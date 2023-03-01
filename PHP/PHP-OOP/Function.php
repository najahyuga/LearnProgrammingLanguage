<?php
require_once "data/Person.php";

/**
 * Object dengan kata kunci new
 * Person("yuga", "SBY") param/argumen yang diambil dari __construct dari class Person
 */
$person1 = new Person("yuga", "SBY");
$person1->name = "najah";//untuk di akses this keyword

$person1->sayHello(null);//memanggil function

//memanggil constant di dalam class menggunakan function(self keyword)
$person1->info();