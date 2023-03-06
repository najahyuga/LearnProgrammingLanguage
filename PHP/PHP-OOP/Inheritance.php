<?php
require_once "data/Manager.php";

$manager = new Manager();
$manager -> name = "najah";
$manager -> sayHello("yuga");

$vp = new VicePresident();
$vp -> name = "yuga";
$vp -> sayHello("syalwa");