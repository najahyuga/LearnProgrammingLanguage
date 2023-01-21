<?php
$nama = ["najah", "yuga"];

for ($i=0; $i < count($nama); $i++) { 
    echo "Data ke $i = $nama[$i]" . PHP_EOL;
}

foreach ($nama as $name) {
    echo "Data $name" . PHP_EOL;
}

foreach ($nama as $index => $name) {
    echo "Data ke $index = $name" . PHP_EOL;
}

$person = [
    "first_name" => "najah",
    "last_name" => "yuga"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}