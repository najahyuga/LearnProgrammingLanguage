<?php


/**
 * OOP Pholymorphism sebuah kemampuan objek berubah bentuk menjadi bentuk lainnya
 * ada hubungan dengan Inheritance OOP
 */
class Progammer{
    public string $name;

    public function __construct(string $name){
        $this->name = $name;
    }
}

class BackendProgrammer extends Progammer{}

class FrontendProgrammer extends Progammer{}

class Company{
    public Progammer $programmer;
}

/**
 * OOP Type Check and Casts
 * instanceof digunakan sebagai pengecekan tipe data
 * hasil dari instanceof adalah boolean, true jika tipe data sesuai, false jika tidak sesuai
 */
function sayHelloProgrammer(Progammer $name){
    if ($name instanceof BackendProgrammer) {
        echo "Hello Backend Programmer $name->name" . PHP_EOL;
    } elseif ($name instanceof FrontendProgrammer) {
        echo "Hello Frontend Programmer $name->name" . PHP_EOL;
    } elseif ($name instanceof Progammer) {
        echo "Hello Programmer $name->name" . PHP_EOL;
    }
}