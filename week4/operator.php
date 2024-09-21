<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;  
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Tambah (a + b) = {$hasilTambah} <br>";
echo "Hasil Kurang (a - b) = {$hasilKurang} <br>";
echo "Hasil Kali (a * b) = {$hasilKali} <br>";
echo "Hasil Bagi (a / b) = {$hasilBagi} <br>";
echo "Sisa Bagi (a % b) = {$sisaBagi} <br>";
echo "Hasil Pangkat (a ** b) = {$pangkat} <br><br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Apakah a == b? : " . ($hasilSama ? 'true' : 'false') . "<br>";
echo "Apakah a != b? : " . ($hasilTidakSama ? 'true' : 'false') . "<br>";
echo "Apakah a < b? : " . ($hasilLebihKecil ? 'true' : 'false') . "<br>";
echo "Apakah a > b? : " . ($hasilLebihBesar ? 'true' : 'false') . "<br>";
echo "Apakah a <= b? : " . ($hasilLebihKecilSama ? 'true' : 'false') . "<br>";
echo "Apakah a >= b? : " . ($hasilLebihBesarSama ? 'true' : 'false') . "<br><br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil AND (a && b) = " . ($hasilAnd ? 'true' : 'false') . "<br>";
echo "Hasil OR (a || b) = " . ($hasilOr ? 'true' : 'false') . "<br>";
echo "Hasil NOT (a) = " . ($hasilNotA ? 'true' : 'false') . "<br>";
echo "Hasil NOT (b) = " . ($hasilNotB ? 'true' : 'false') . "<br><br>";

echo "Nilai awal a = {$a}, b = {$b} <br>";

$a += $b;
echo "Hasil (a += b) = {$a} <br>";

$a -= $b;
echo "Hasil (a -= b) = {$a} <br>";

$a *= $b;
echo "Hasil (a *= b) = {$a} <br>";

$a /= $b;
echo "Hasil (a /= b) = {$a} <br>";

$a %= $b;
echo "Hasil (a %= b) = {$a} <br><br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Apakah a identik dengan b? : " . ($hasilIdentik ? 'true' : 'false') . "<br>";
echo "Apakah a tidak identik dengan b? : " . ($hasilTidakIdentik ? 'true' : 'false') . "<br>";
?>