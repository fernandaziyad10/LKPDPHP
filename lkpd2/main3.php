<?php
// Looping pertama untuk nilai $x dari 1 hingga 11
for ($x = 1; $x <= 11; $x++) {
    // Mengecek apakah $x adalah bilangan ganjil
    if ($x % 2 == 1) {
        // Jika $x ganjil, maka looping kedua untuk nilai $j dari 1 hingga 11
        for ($j = 1; $j <= 11; $j++) {
            // Mengecek apakah nilai $j sama dengan 5
            if ($j == 5) {
                // Jika $j sama dengan 5, cetak hasil perkalian $x dan $j
                echo $x . "x" . $j . "=" . $x * $j . "<br>";     
            }
        }
    }
}
?>
