<?php

$usia = [12, 15, 17, 20, 25, 30, 35, 40, 45, 50];

// Variabel untuk menghitung jumlah dewasa dan anak-anak
$dewasa = 0;
$AnakAnak = 0;

// Loop untuk memproses setiap usia dalam array
foreach ($usia as $umur) {
    // Cek apakah umur lebih dari atau sama dengan 17
    if ($umur >= 17) {
        $dewasa++; // Jika ya, increment jumlah dewasa
    } else {
        $AnakAnak++; // Jika tidak, increment jumlah anak-anak
    }
}

// Tampilkan list usia
echo "list usia "; 
foreach ($usia as $umur2) {
    echo $umur2 . ","; // Tampilkan setiap umur diikuti dengan koma
}
echo "<br>"; // Line break untuk pemisah
// Tampilkan jumlah kategori Dewasa
echo "Jumlah kategori Dewasa :" . $dewasa;
echo "<br>"; // Line break untuk pemisah
// Tampilkan jumlah kategori Anak-Anak
echo "Jumlah kategori Anak Anak :" . $AnakAnak;
?>