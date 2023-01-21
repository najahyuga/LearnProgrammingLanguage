<?php
$values = array(1, "Muhammad", 2, "Najah", 3, "Yuga", 4, "Desyalwa");
var_dump($values);

$names = ["Muhammad", "Najah Yuga", "Desyalwa"];
//var_dump($names);

//akses data array berdasarkan index
echo "Values : ";
echo $values[1];
echo "\n";

echo "Names : ";
echo $names[2];
echo "\n";

//ubah data array berdasarkan index
echo "Names : ";
echo $names[2] = 2;
echo "\n";

//tambah data array pada posisi paling belakang
echo "Tambah Data Array : ";
echo $names[] = "Halo Bro";
echo "\n"; 

//hapus data array
echo "Hapus Data Array : ";
unset($values[7]);
echo $values[6];
echo "\n";
//tambah data array pada posisi paling belakang
echo "Tambah Data Array : ";
echo $values[] = "Hai Bro";
echo "\n"; 

//ambil total data di array
var_dump(count($values));
var_dump(count($names));
echo "\n"; 
echo "\n"; 

//array sebagai Map
$najah = array(
    "id" => "1201202003",
    "names" => "najah yuga",
    "age" => 22
);

var_dump($najah);

var_dump($najah["names"]);
echo "\n"; 

$yuga = [
    "id" => "1201202003",
    "names" => "yuga",
    "age" => 22
];

var_dump($yuga);

var_dump($yuga["names"]);
echo "\n";

//array dalam array
$tes = array(
    "id" => "1201202003",
    "names" => "najah yuga",
    "age" => 22,
    "addres" => [
        "city" => "Surabaya",
        "country" => "Indonesia"
    ]
);

var_dump($tes);

var_dump($tes["names"]);
var_dump($tes["addres"]["city"]);
echo "\n"; 