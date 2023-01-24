<?php
$name = "najah"; //global scope

function sayHello(){
    global $name; //global keyword untuk akses global scope ke dalam function
    echo $name . PHP_EOL;//tidak bisa akses ke global scope

    echo $GLOBALS["name"];//$global variable
}
sayHello();