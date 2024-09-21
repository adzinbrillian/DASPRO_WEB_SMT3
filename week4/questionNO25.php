<?php

$siswa = [
    ["Alice", 85],
    ["Bob", 92],
    ["Charlie", 78],
    ["David", 64],
    ["Eva", 90]
];

$totalNilai = 0;
$jumlahSiswa = count($siswa);

foreach ($siswa as $dataSiswa) {
    $totalNilai += $dataSiswa[1]; 
}

$rataRata = $totalNilai / $jumlahSiswa;

echo "Total nilai: {$totalNilai} <br>"; 
echo "Jumlah siswa: {$jumlahSiswa} <br>"; 
echo "Rata-rata kelas: {$rataRata} <br><br>"; 

echo "Daftar siswa yang mendapatkan nilai di atas rata-rata kelas:<br>";

foreach ($siswa as $dataSiswa) {
    $nama = $dataSiswa[0]; 
    $nilai = $dataSiswa[1]; 
    
    if ($nilai > $rataRata) {
        echo "Nama: {$nama}, Nilai: {$nilai} <br>";
    }
}

?>