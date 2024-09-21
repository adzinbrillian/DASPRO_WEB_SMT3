<?php

$hargaProduk = 120000;

$diskon = 0;  

echo "Harga produk sebelum diskon: Rp {$hargaProduk} <br>";

if ($hargaProduk > 100000) {
    $diskon = 20;  
    echo "Karena harga produk lebih dari Rp 100.000, pelanggan berhak mendapatkan diskon 20%.<br>";
} else {
    echo "Tidak ada diskon karena harga produk kurang dari Rp 100.000.<br>";
}

echo "Diskon yang diberikan: {$diskon}% <br>";

$jumlahDiskon = ($hargaProduk * $diskon) / 100;
echo "Perhitungan jumlah diskon: ({$hargaProduk} * {$diskon}) / 100 = Rp {$jumlahDiskon} <br>";

$hargaSetelahDiskon = $hargaProduk - $jumlahDiskon;
echo "Perhitungan harga setelah diskon: {$hargaProduk} - {$jumlahDiskon} = Rp {$hargaSetelahDiskon} <br>";

echo "Harga yang harus dibayar setelah diskon: Rp {$hargaSetelahDiskon} <br>";

?>