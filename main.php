<?php

include 'header.php';

echo "Diketahui ?\n\n";
echo "1. Luas Segitiga \n";
echo "2. Keliling Segitiga \n";
$pilihan = readline("Pilih: ");

switch ($pilihan) {
    case '1':
        $luas = readline("\nMasukkan Luas: ");
        $tinggi = readline("Masukkan Tinggi: ");
        $hasil = ($luas * 2) / $tinggi;
        echo "\n== Hasil ==";
        echo "\nAlas Segitiga adalah: $hasil \n";
        break;
    case '2':
        $keliling = readline("Masukkan Keliling: ");
        $sisimiring = readline("Masukkan Sisi miring: ");
        $hasil = $keliling - ($sisimiring * 2);
        echo "\n== Hasil ==";
        echo "\nAlas Segitiga adalah: $hasil \n";
    default:
        echo "Pilihan tidak ada";
        break;
}
