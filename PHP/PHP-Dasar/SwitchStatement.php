<?php
$nilai = "F";

switch ($nilai) {
    case 'A':
        echo "Anda Lulus Cumlaude" . PHP_EOL;
        break;
    case 'B':
        echo "Anda Lulus Dengan Baik" . PHP_EOL;
        break;

    case 'C':
    case 'D':
        echo "Anda Lulus" . PHP_EOL;
        break;
    case 'D';
        echo "Anda Tidak Lulus" . PHP_EOL;
    default:
        echo "Anda Mungkin Salah Jurusan" . PHP_EOL;
        break;
}