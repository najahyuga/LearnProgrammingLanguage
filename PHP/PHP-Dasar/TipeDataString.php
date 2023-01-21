<?php
//Single Quote
echo 'Nama : ';
echo 'Najah Yuga';
echo '\n'; //tidak bisa
echo "\n";

//Double Quote
//kelebihan bisa menggunakan escape sequence(\n untuk ENTER, \t untuk tab, dll)
echo "Nama : ";
echo "Najah \t Yuga \n";

//HEREDOC
echo <<<BEBAS
Hai Bro!
Welcome back
Learn DataType String
Heredoc
\n
BEBAS;

//NOWDOC
echo <<<'BEBAS'
Hai Bro!
Welcome back
Learn DataType String
Nowdoc
\n
BEBAS;

