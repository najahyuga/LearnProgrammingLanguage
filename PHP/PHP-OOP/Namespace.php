<?php
require_once "data/Conflict.php";
require_once "data/Helper.php";

//cara memanggil namespace di ikuti dengan nama dari namespacenya
$conflict1 = new \Data\One\Conflict();
$conflict2 = new \Data\Two\Conflict();

//cara memanggil function dan const di namespace di ikuti dengan nama dari namespacenya
echo Helper\helpMe() . PHP_EOL;
echo Helper\APP;