<?php

/**
 * Parent Keyword OOP
 * untuk mengakses function yang ada pada class parent
 */
namespace Data;
class Shape{
    public function getCorner(): int
    {
        return 0;
    }
}

class Rectangle extends Shape{
    public function getCorner(): int
    {
        return 4;
    }

    public function getParentCorner()
    {
        return parent::getCorner();
    }
}