<?php
require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Najah";
$manager->sayHello("Syalwa");

$vp = new VicePresident();
$vp->name = "Yuga";
$vp->sayHello("Syalwa");