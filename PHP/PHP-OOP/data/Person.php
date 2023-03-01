<?php
class Person{


    const AUTHOR = "M Najah Yuga D";//constant
    
    //Properties dengan kata kunci var
    //Properties dengan type declaration setelah kata kunci var, diikuti dengan tipe data
    
    var string $name;
    var ?string $address = null;//Properties dengan nullable properties dengan menambahkan tanda ?
    var string $country = "Indonesia";//Properties dengan default value


    /**
     * Menambahkan function sayHello
     * Menambahkan this keyword ($this->name "mengakses object di class Person"),
     * sedangkan $name mengakses param di function
     */
    function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "Hi, My name is $this->name" . PHP_EOL;
        }else{
            echo "Hi $name, My name is $this->name" . PHP_EOL;
        }
    }

    /**
     * self keyword
     * untuk mengakses constant didalam class yang sama
     */
    function info()
    {
        echo "AUTHOR info: " . self::AUTHOR . PHP_EOL;
    }

    /**
     * OOP Constructor adalah function yg akan dipanggil pertama kali saat object dibuat
     * kata kunci __construct(bisa diberi param/argumen)
     * tapi pada saat memanggilnya harus disertakan param/argumen berdasarkan __construct()
     */
    public function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }
}