<?php
require_once "data/Conflict.php";
require_once "data/Helper.php";

/**
 * import alias (as)
 * kemampuan untuk membuat nama lain dari class, function dan constant yg sudah ada.
 * untuk mengatasi apabila ada kesamaan pada namespacenya.
 */
use Data\One\Conflict as Conflict1;
use Data\Two\Conflict as Conflict2;
use function Helper\helpMe as Help;
use const Helper\APP as APK;

$conflict1 = new Conflict1;
$conflict2 = new Conflict2;
Help();
echo APK;