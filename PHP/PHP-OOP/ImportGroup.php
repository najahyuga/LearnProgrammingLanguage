<?php
require_once "data/Conflict.php";
require_once "data/Helper.php";

/**
 * import group
 * untuk menginport beberapa class, function dan constant dalam perintah use.
 * dengan menggunakan tanda {kurung kurawal dan diikuti class, function dan constant}
 */
use Data\One\{Conflict as Conflict1, Sample, Dummy};
use function Helper\helpMe;
use const Helper\APP as APPLICATION;

$conflict1 = new Conflict1();
$sample = new Sample();
$dummy = new Dummy();

helpMe();
echo APPLICATION . PHP_EOL;