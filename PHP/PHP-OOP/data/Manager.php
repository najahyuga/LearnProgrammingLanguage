<?php
/**
 * OOP Inheritance atau biasa disebut pewarisan dari parent ke child
 * extends lalu di ikuti dengan parentnya(digunakan untuk mewariskan dari class parent)
 * menambahkan function overriding oop pada class child
 */
class Manager{
    var string $name;
    var string $title;

    /**
     * OOP Constructor Overriding bisa meng-override dengan mengubah argumennya,
     * namun disarankan untuk memanggil parent constructor
     */
    function __construct(string $name = "", string $title = "Manager")
    {
        $this->name = $name;
        $this->title = $title;
    }

    function sayHello(string $name) :void{
        echo "Hi $name, my name is Manager $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager{

    /**
     * OOP Constructor Overriding
     */
    function __construct(string $name = "")
    {
        parent::__construct($name, "VP");// Tidak wajib, Namun di Rekomendasikan
    }

    function sayHello(string $name) :void{
        echo "Hi $name, my name is VP $this->name" . PHP_EOL;
    }
}