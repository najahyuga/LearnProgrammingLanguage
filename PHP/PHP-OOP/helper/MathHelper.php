<?php
namespace Helper;

/**
 * Static Keyword OOP
 * bisa digunakan untuk membuat properties/function diclass, bisa diakses secara langsung tanpa menginstansiasi class terlebih dahulu
 * perlu diingat, pada saat membuat static, secara otomatis tidak akan berhubungan lagi dengan class instance(wujud dari class)
 * cara mengaksesnya menggunakan operator :: (lihat file static.php)
 * perlu diingar static digunakan unutk bikin function/properties yg tujuannya itu 
 */
class MathHelper{
    static public string $name = "MathHelper" . PHP_EOL;

    static public function sum(int... $numbers): int{
        $total = 0;

        foreach ($numbers as $number) {
            $total += $number;
        }
        return $total;
    }
}