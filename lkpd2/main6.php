<?php
// Mendefinisikan array multimensi $siswa yang berisi data siswa dan nilai-nilai mereka
$siswa = [
    [
        'nama' => 'andi',
        'nilai'=> [80, 78, 82, 78, 88],
    ],
    [
        'nama' => 'Beni',
        'nilai'=> [86, 70, 80, 85, 81],
    ],
    [
        'nama' => 'Dani',
        'nilai'=> [83, 91, 70, 73, 81],      
    ],
    [
        'nama' => 'Eko',
        'nilai'=> [89, 85, 84, 86, 88],      
    ],
];

// Menggunakan loop foreach untuk mengakses setiap siswa dan nilai mereka
foreach($siswa as $i => $student) {
    // Menghitung jumlah total dari nilai-nilai siswa menggunakan fungsi array_sum()
    $menhitungnilai = array_sum($student['nilai']);
    
    // Menghitung jumlah nilai yang ada di dalam array 'nilai' menggunakan fungsi count()
    $banyaknilai = count($student['nilai']);
    
    // Menghitung rata-rata nilai siswa dengan membagi total nilai dengan jumlah nilai
    $rataRata = $menhitungnilai / $banyaknilai;
    
    // Mengubah indeks $i dari 0-based (mulai dari 0) menjadi 1-based (mulai dari 1)
    $i = $i + 1;
    
    // Mencetak nomor urut siswa, nama siswa, dan rata-rata nilai mereka
    echo $i . $student['nama'] . " : " . $rataRata . "<br>";
}
?>
