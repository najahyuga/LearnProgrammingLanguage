<?php
require_once "data/Conflict.php";
require_once "data/Helper.php";

/**
 * import use keyword
 * jika terlalu sering menggunakan class, function dan constant yg sama, maka akan terlalu
 * banyak duplikasi dengan menyebut namespacenya.
 * tidak bisa import dengan nama class yg sama dan akan terjadi error{
 * use Data\One\Conflict;
 * use Data\Two\Conflict; <- ini akan error
 * }.
 */
use Data\One\Conflict;
use function Helper\helpMe;
use const Helper\APP;

$conflict1 = new Conflict;
$conflict2 = new Data\Two\Conflict;
helpMe();
echo APP;