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

/**
 * trait abstract function
 */
trait CanRun
{
    public abstract function run():void;
}

class ParentPerson
{
    public function goodBye(?string $name): void
    {
        echo "Good Bye in Person" . PHP_EOL;   
    }

    public function sayHello(?string $name): void
    {
        echo "Hello in Person" . PHP_EOL;
    }
}

// contoh penggunaan trait di class person
class Person extends ParentPerson
{
    use SayGoodBye, SayHello, HasName, CanRun;

    public function run(): void
    {
        //trait abstract function
        echo "Person $this->name is running" . PHP_EOL;
    }

   
}