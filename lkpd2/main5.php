<?php
// Mendefinisikan dua array $angka1 dan $angka2 dengan beberapa nilai
$angka1 = [80, 77, 65, 89, 55, 12, 90, 86];
$angka2 = [77, 99, 55, 81, 45, 90, 91, 98];


echo "yang ada di kedua variabel : ";
echo "<br>";

// Menggunakan fungsi array_intersect untuk mendapatkan nilai yang sama dalam suatu array
$membandingkan = array_intersect($angka1, $angka2);

// Menggunakan loop foreach untuk mencetak setiap elemen yang ditemukan di kedua array
foreach ($membandingkan as $membandingkan1) {
    echo $membandingkan1 . ","; 
}

echo "<br>"; 

// Menggunakan fungsi array_diff untuk mendapatkan nilai yang berbeda di dalam array
$membandingkan2 = array_diff($angka1, $angka2);

// Menampilkan judul untuk hasil angka yang tidak ada di kedua variabel
echo "yang tidak ada di kedua variabel : ";
echo "<br>";

// Menggunakan loop foreach untuk mencetak setiap elemen yang hanya ada di $angka1
foreach ($membandingkan2 as $membandingkan22) {
    echo $membandingkan22 . ","; 
}

?>
