<?php

echo 'Name : ';
echo 'Farel mercys putra thona';

echo "Name : ";
echo "Farel\t Mercys\t Putra\t Thona\n";

echo <<<FAREL
Selamat belajar PHP
sekarang, kita belajar tipe data string
ini adalah cara ke-3 membuat string
bisa menggunakan heredoc
FAREL;

echo <<<'FAREL'
Ini adlaah contoh string yang sangat panjang long sangat,
dan juga gak perlu ngetuk ENTER secara manual, "bisa quote" juga
FAREL;

