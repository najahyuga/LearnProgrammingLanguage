<?php
require_once "data/Person.php";

//memanggil constant sebelum php 7.4
define('APP', 'Belajar PHP OOP');
//constant (harus menggunakan case sensitive agar tau kalau itu constant)
const APP_VERSION = "1.0.0";

echo APP . PHP_EOL;
echo APP_VERSION. PHP_EOL;//memanggil consant secara langsung

echo Person::AUTHOR . PHP_EOL;//memanggil consant di dalam class

