<?php
namespace Data\Traits;

/**
 * Trait OOP mirip seperti abstarct class/seperti extension
 * perbedaannya bisa menambakan class lebih dari satu
 * secera sederhana bisa digunakan untuk menyimpan function-function yg bisa digunakan ulang
 * dibeberapa class
 */
trait SayGoodBye
{
    public function goodBye(?string $name): void
    {
        if(is_null($name)){
            echo "Good Bye" . PHP_EOL;
        }else {
            echo "Good Bye $name" . PHP_EOL;
        }
    }
}

trait SayHello
{
    public function sayHello(?string $name): void
    {
        if(is_null($name)){
            echo "Say Hello" . PHP_EOL;
        }else {
            echo "Say Hello $name" . PHP_EOL;
        }
    }
}

trait HasName
{
    public string $name;
}

// contoh penggunaan trait di class person
class Person
{
    use SayGoodBye, SayHello, HasName;
}