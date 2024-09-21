<?php

$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A <br>";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B <br>";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C <br>";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D <br>";
}

echo "<br>"; 

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

echo "Jarak target: {$jarakTarget} km <br>";
echo "Peningkatan harian: {$peningkatanHarian} km/hari <br>";

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan {$hari} hari untuk mencapai jarak 500 kilometer.<br>";

echo "<br>"; 

$jumlahLahan = 10;           
$tanamanPerLahan = 5;       
$buahPerTanaman = 10;        
$jumlahBuah = 0;            

echo "Jumlah lahan: {$jumlahLahan} <br>";
echo "Jumlah tanaman per lahan: {$tanamanPerLahan} <br>";
echo "Jumlah buah per tanaman: {$buahPerTanaman} <br>";

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: {$jumlahBuah} buah.<br>";

echo "<br>"; 

$skorUjian = [85, 92, 78, 96, 88]; 
$totalSkor = 0;                   

echo "Skor ujian: ";
foreach ($skorUjian as $skor) {
    echo "{$skor} "; 
    $totalSkor += $skor; 
}

echo "<br>Total skor ujian adalah: {$totalSkor}<br>";

echo "<br>"; 

$nilaiMahasiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96]; 

foreach ($nilaiMahasiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: {$nilai} (Tidak Lulus) <br>";
        continue; 
    }
    echo "Nilai: {$nilai} (Lulus) <br>";
}

?>
