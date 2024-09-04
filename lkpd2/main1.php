<?php
// menyiapkan variabel untuk di ubah
$text = "Selamat ulang tahun yang ke-17";

// Menggunakan fungsi preg_replace untuk menghapus semua karakter non-numerik
// dari $text dan hanya menyisakan angka
$number = preg_replace('/[^0-9]/', '', $text);

// Mengecek apakah variabel $number memiliki nilai (tidak kosong)
if($number){
    // Jika $number memiliki nilai, maka angka-angka tersebut akan dipecah
    // menjadi array dengan setiap elemen berupa digit tunggal
    // Kemudian, array tersebut akan digabung menjadi string yang dipisahkan oleh koma
    // Implode untuk mengubah nilai array menjadi string
    echo "Text mengandung : ". implode(',', str_split($number, 1));
}else {
    // Jika $number kosong (tidak ada angka dalam teks), tampilkan pesan ini
    echo "Text tidak mengandung angka";
}
?>
