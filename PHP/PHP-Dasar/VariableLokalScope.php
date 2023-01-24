<?php
function createName(){
    $name = "najah"; //lokal scope
}

createName();
// echo $name;//tidak bisa akses ke lokal scope