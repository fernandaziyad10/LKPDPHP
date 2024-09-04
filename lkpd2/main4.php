<?php

// Looping pertama untuk nilai $x dari 1 hingga 2
for ($x = 1; $x <= 2; $x++) {
   
    echo "<br>";

    // Looping kedua untuk nilai $j dari 10 hingga 1 (pengurangan)
    for ($j = 10; $j >= 1; $j--) {
        // Menghitung hasil perkalian $x dengan $j
        $ja = $x * $j;
        
        // Mencetak hasil perkalian dalam format "j x x = hasil"
        echo $j . "x" . $x . "=" . $ja . "<br>";
    }
}
?>
