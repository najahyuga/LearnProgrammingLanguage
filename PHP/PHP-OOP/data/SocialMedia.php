<?php

/**
 * Final Class OOP
 * jika menggunakan final class, maka class tersebut tidak bisa diwariskan lagi
 * secara otomatis semua class childnya akan error
 */
class SocialMedia{
    public string $name;
}

// error karena ada kata kunci final
// final class Facebook extends SocialMedia{

// }

// class FakeFacebook extends Facebook{

// }


/**
 * Final Function OOP
 * jika menggunakan final function, maka function tersebut tidak bisa di override lagi
 */
class Facebook extends SocialMedia{
    // error karena ada final
    // final public function login(string $username, string $password){
    //     return true;
    // }

    public function login(string $username, string $password){
        return true;
    }
}
    
class FakeFacebook extends Facebook{

    //error karena ada kata kunci final pada function parentnya
    public function login(string $username, string $password){
        return false;
    }
}