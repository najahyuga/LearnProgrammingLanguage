<?php
class Person{

    //Properties dengan kata kunci var
    //Properties dengan type declaration setelah kata kunci var, diikuti dengan tipe data
    
    var string $name;
    var ?string $address = null;//Properties dengan nullable properties dengan menambahkan tanda ?
    var string $country = "Indonesia";//Properties dengan default value


    /**
     * Menambahkan function sayHello
     * Menambahkan this keyword ($this->name "mengakses object di class Person"),
     * sedangkan $name mengakses param di function
     */
    function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "Hi, My name is $this->name" . PHP_EOL;
        }else{
            echo "Hi $name, My name is $this->name" . PHP_EOL;
        }
    }
}