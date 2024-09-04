<?php
// class mobil {
//     public $merk = "Toyota";
//     public $tahun = 2022;
//     public $warna = "Hitam";
// }

// $Mobil = new mobil();

// foreach($Mobil as $kendaraan => $value){
//     echo "$kendaraan : $value";
// }
$angka1 = [80, 77, 65, 89, 55, 12, 90, 86];
$angka2 = [77, 99, 55, 81, 45, 90, 91, 98];

$angkaKe1 = array_intersect($angka1, $angka2);

foreach($angkaKe1 as $no1){
    echo "$no1";
}
?>
