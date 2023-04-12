<?php

/**
 * Trait Conflict OOP
 * apabila membuat function yg sama pada trait yg berbeda, maka akan terjadi konflik
 * cara mengatasinya menggunakan kata kunci insteadof(bisa memilih function mana yg akan diambil)
 */
trait A{
    function doA():void{
        echo "a" . PHP_EOL;
    }

    function doB():void{
        echo "b" . PHP_EOL;
    }
}
trait B{
    function doA():void{
        echo "A" . PHP_EOL;
    }

    function doB():void{
        echo "B" . PHP_EOL;
    }
}

class Sample{
    use A, B{
        A::doA insteadof B;
        B::doB insteadof A;
    }
}

$sample = new Sample();
$sample->doA();
$sample->doB();