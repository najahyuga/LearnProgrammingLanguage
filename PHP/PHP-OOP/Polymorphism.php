<?php
require_once "data/Progammer.php";

$company = new Company();
$company->programmer = new Progammer("Najah");
var_dump($company);

$company->programmer = new BackendProgrammer("Najah");
var_dump($company);

$company->programmer = new FrontendProgrammer("Najah");
var_dump($company);

sayHelloProgrammer(new Progammer("Yuga"));
sayHelloProgrammer(new BackendProgrammer("Yuga"));
sayHelloProgrammer(new FrontendProgrammer("Yuga"));