<?php
require_once "data/Animal.php";

use Data\{Cat, Cow};

$cat = new Cat();
$cat->name = "Caty";
$cat->run();

$cow= new Cow();
$cow->name = "Cowy";
$cow->run();