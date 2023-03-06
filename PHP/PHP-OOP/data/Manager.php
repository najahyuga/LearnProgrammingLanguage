<?php
/**
 * OOP Inheritance atau biasa disebut pewarisan dari parent ke child
 * extends lalu di ikuti dengan parentnya(digunakan untuk mewariskan dari class parent)
 */
class Manager{
    var string $name;

    function sayHello(string $name) :void{
        echo "Hi $name, my name is $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager{}