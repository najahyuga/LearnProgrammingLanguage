<?php

namespace data;

/**
 * pada saat membuat class, sebenarnya bisa dijadikan abstract class.
 * OOP Abstract Class Tidak bisa di buat sebagai object secara langsung, hanya bisa diturunkan
 */
abstract class Location
{
    public string $name;
}

class City extends Location{}
class Province extends Location{}
class Country extends Location{}