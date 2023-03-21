<?php
namespace Data;

/**
 * OOP Interface
 * mirip seperti abstract class yang membedakan semua method otomatis abstract,tidak memiliki block
 * berbeda dengan class, bisa implements lebih dari satu interface
 * Interface Inhertitance
 * bisa implements child class lebih dari satu interface
 * bahkan interface pun bisa implements interface lain, namun apabila ingin mewarisinya,
 * bisa menggunakan extends, bukan implements
 */

interface hasBrand{
    function getBrandh(): string;
}

interface isMaintenance{
    function isMaintenance(): bool;
}

interface Car extends hasBrand{//Interface Inhertitance
    function drive(): void;
    function getTire(): int;
}

class Avanza implements Car, isMaintenance{ //implements lebih dari satu interface
    
	/**
	 */
	public function drive(): void {
        echo "Drive Avanza";
	}
	
	/**
	 * @return int
	 */
	public function getTire(): int {
        return 4;
	}
	/**
	 * @return string
	 */
	public function getBrandh(): string {
        return "TOYOTA";
	}
	
	/**
	 * @return bool
	 */
	public function isMaintenance(): bool {
        return false;
	}
}