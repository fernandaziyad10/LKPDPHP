<?php
// Mendefinisikan sebuah array bernama $data yang berisi beberapa nilai numerik
$data = [80, 90, 75, 100, 85, 100, 66];

// Menetapkan nilai yang ingin dicari jumlah kemunculannya dalam array
$cari = 100;

// Menggunakan fungsi array_count_values() untuk menghitung jumlah kemunculan setiap nilai dalam array $data
// Fungsi ini mengembalikan array asosiatif di mana kunci adalah nilai-nilai dari array $data,
// dan nilai dari kunci tersebut adalah jumlah kemunculannya di dalam array
$hitung = array_count_values($data)[$cari];

// Menampilkan hasil jumlah kemunculan nilai yang dicari
echo $hitung;
?>
