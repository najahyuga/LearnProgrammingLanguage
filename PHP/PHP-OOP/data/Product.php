<?php

/**
 * Visibility/Access Modifier untuk mengakses propertis, function dan constant dari mana saja
 * Public dapat di akses dimana saja
 * Protected dapat diakses didalam kelasnya sendiri, dapat diakses dikelas child, dan
 * tidak dapat diakses di luar classnya
 * Private hanya dapat diakses di dalam kelasnya sendiri
 */
class Product
{
    protected string $name;
    protected int $price;

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    function getName(): string
    {
        return $this->name;
    }

    function getPrice(): int
    {
        return $this->price;
    }
}

class ProductDummy extends Product{
    public function info(){
        echo "Name Protected $this->name" . PHP_EOL;
        echo "Price Protected $this->price" . PHP_EOL;
    }
}