<?php
$nilai = 70;
$absen = 50;

if ($nilai >= 80 && $absen >= 80) {
    echo "Selamat Nilai Anda A" . PHP_EOL;
}else if ($nilai >= 70 && $absen >= 70) {
    echo "Selamat Nilai Anda B" . PHP_EOL;
}elseif ($nilai >= 60 && $absen >= 60) {
    echo "Selamat Nilai Anda C" . PHP_EOL;
}elseif ($nilai >= 50 && $absen >= 50) {
    echo "Selamat Nilai Anda D" . PHP_EOL;
}else{
    echo "Selamat Nilai Anda E" . PHP_EOL;
}

if ($nilai >= 80 && $absen >= 80) :
    echo "Selamat Nilai Anda A". PHP_EOL;
elseif ($nilai >= 70 && $absen >= 70) :
    echo "Selamat Nilai Anda B" . PHP_EOL;
elseif ($nilai >= 60 && $absen >= 60) :
    echo "Selamat Nilai Anda C" . PHP_EOL;
elseif ($nilai >= 50 && $absen >= 50) :
    echo "Selamat Nilai Anda D" . PHP_EOL;
else :
    echo "Selamat Nilai Anda E" . PHP_EOL;
endif;
