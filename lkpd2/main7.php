<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // Nyiapin dua nama yang mau dibandingin
    $nama1 = "Alek ";
    $nama2 = "Tubagus";
    // Fungsi buat ngitung selisih jumlah karakter antara dua nama
    function hitungSelisihKarakter($nama1, $nama2)
    {
        // Hitung jumlah karakter di masing-masing nama
        $jumlahnama1 = strlen($nama1); // Ngambil panjang nama1 // strlen = untuk ngambil berapa banyak karakter
        $jumlahnama2 = strlen($nama2); // Ngambil panjang nama2
        // Cari selisih karakter antara dua nama, ambil nilai mutlaknya
        $selisihkarakter = abs($jumlahnama1 - $jumlahnama2); // abs = digunakan untuk mengembalikan nilai absolut dari suatu bilangan. Nilai absolut adalah nilai tanpa tanda, artinya selalu positif atau nol.
        return $selisihkarakter; // Kembaliin selisihnya
    }
    // Panggil fungsi dan simpan hasilnya di $selisihkarakter
    $selisihkarakter = hitungSelisihKarakter($nama1, $nama2);
    // Tampilkan hasilnya
    echo "$nama1 memiliki jumlah karakter lebih banyak dari $nama2: selisih " . $selisihkarakter . " karakter";
    ?>
</body>
</html>