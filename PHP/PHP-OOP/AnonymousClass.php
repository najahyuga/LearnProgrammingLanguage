<?php

/**
 * Anonymous Class OOP
 * kemampuan mendeklarasikan class, sekaligus meng-instansiasi objctnya secara langsung
 * sangat cocok apabila membuat constructor atau interface sederhana, 
 * tanpa harus membuat implementasi classnya
 */
interface HelloWorld{
    public function sayHello(): void;
}

$helloWorld = new class("yuga") implements HelloWorld{
    
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
    
    public function sayHello(): void{
        echo "Hello $this->name" . PHP_EOL;
    }
};
$helloWorld->sayHello();