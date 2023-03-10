<?php
require_once "data/Product.php";

$product = new Product("Buku", 5_000);

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$productDummy = new ProductDummy("dummy", 10000);
$productDummy->info();