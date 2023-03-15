<?php
namespace Data;

/**
 * OOP Abstract Function
 * pada saat membuat Abstract Function, tidak boleh membuat block function
 * Wajib di overrride pada class child
 * Tidak boleh memiliki access modifier private
 */
abstract class Animal{
    public string $name;
    
    abstract function run() : void;
}

class Cat extends Animal{
    function run(): void
    {
        echo "Cat $this->name is running" . PHP_EOL;
    }
}

class Cow extends Animal{
    function run(): void
    {
        echo "Cow $this->name is running" . PHP_EOL;
    }
}