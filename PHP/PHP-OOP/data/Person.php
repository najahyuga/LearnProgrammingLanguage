<?php
class Person{

    //Properties dengan kata kunci var
    //Properties dengan type declaration setelah kata kunci var, diikuti dengan tipe data
    
    var string $name;
    var ?string $address = null;//Properties dengan nullable properties dengan menambahkan tanda ?
    var string $country = "Indonesia";//Properties dengan default value
}