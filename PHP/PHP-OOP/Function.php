<?php
require_once "data/Person.php";

//Object dengan kata kunci new
$person1 = new Person();
$person1->name = "najah";//untuk di akses this keyword

$person1->sayHello(null);//memanggil function