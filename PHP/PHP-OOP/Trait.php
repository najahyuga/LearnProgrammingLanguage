<?php

require_once("data/SayGoodBye.php");

use Data\Traits\{Person, SayGoodBye, SayHello, HasName};

$person = new Person();
$person->goodBye("Byee");
$person->sayHello("Hello");
$person->name = "Najah";
var_dump($person);