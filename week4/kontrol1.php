<?php

$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$totalNilai = 0;  

echo "Nilai asli: ";
foreach ($nilaiSiswa as $nilai) {
    echo "{$nilai} ";  
}
echo "<br>";

for ($i = 0; $i < count($nilaiSiswa) - 1; $i++) {
    for ($j = $i + 1; $j < count($nilaiSiswa); $j++) {
        if ($nilaiSiswa[$i] > $nilaiSiswa[$j]) {
            $temp = $nilaiSiswa[$i];
            $nilaiSiswa[$i] = $nilaiSiswa[$j];
            $nilaiSiswa[$j] = $temp;
        }
    }
}

echo "Nilai setelah diurutkan: ";
foreach ($nilaiSiswa as $nilai) {
    echo "{$nilai} ";
}
echo "<br>";

echo "Nilai yang digunakan: ";
for ($i = 2; $i < count($nilaiSiswa) - 2; $i++) {
    echo "{$nilaiSiswa[$i]} "; 
    $totalNilai += $nilaiSiswa[$i];  
}
echo "<br>";

echo "Total nilai yang digunakan: {$totalNilai} <br>";

$rataRata = $totalNilai / (count($nilaiSiswa) - 4);
echo "Rata-rata nilai: {$rataRata} <br>";

?>