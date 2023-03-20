<?php

/**
 * OOP Getter & Setter
 * bertujuan untuk bisa menjaga data sebuah objek agar tetap baik dan valid
 * perlu menggunakan access modifier private agar tidak bisa diakses atau diubah dari luar
 * getter yaitu function yang dibuat untuk mengambil data field
 * setter yaitu function untuk mengubah data field
 * untuk tipe data bool menggunakan is(untuk getter) dan untuk setter sama seperti tipedata lainnya
 */
class Category
{
    private string $name;
    private bool $expensive;


    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        //validation setter 
        if (trim($name) != "") {
            $this->name = $name;
        }
    }

    public function isExpensive(): bool//tipe data bool
    {
        return $this->expensive;
    }

    public function setExpensive(bool $expensive): void
    {
        $this->expensive = $expensive;
    }
}
