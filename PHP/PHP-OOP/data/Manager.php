<?php
/**
 * OOP Inheritance atau biasa disebut pewarisan dari parent ke child
 * extends lalu di ikuti dengan parentnya(digunakan untuk mewariskan dari class parent)
 * menambahkan function overriding oop pada class child
 */
class Manager{
    var string $name;

    function sayHello(string $name) :void{
        echo "Hi $name, my name is Manager $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager{
    function sayHello(string $name) :void{
        echo "Hi $name, my name is VP $this->name" . PHP_EOL;
    }
}