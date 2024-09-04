<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
          body {
  font-family: Arial, sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin: 0;
  background-color: black;
}

h1 {
  color: white;
  margin-bottom: 20px;
}

form {
  background-color: #444;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
  width: 400px;
}

form div {
  margin-bottom: 15px;
}

input[type="number"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
}

input[type="submit"] {
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 5px;
  background-color: #ff7f50;
  color: white;
  font-size: 16px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #ff6347;
}

.hasil{
    margin: 5px;
  color: white;
  font-family: Arial, sans-serif;
  text-align: start;
}


    </style>
</head>
<body>
    <form action="" method="POST">
        <h1>Masukan Uang</h1>
        <div>
            <input type="number" name="inputuang" placeholder="masukan uang">
        </div>
        <div>
            <input type="submit" value="cari pecahan">
        </div>

        <div class="hasil">
        <?php


$uang = @$_POST['inputuang'];

// Daftar pecahan uang
$pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 200, 100];
$hasil = []; // Array untuk menyimpan hasil

// Hitung pecahan uang
foreach ($pecahan as $nilai) {
    $hasil[$nilai] = intdiv($uang, $nilai); // Hitung jumlah pecahan untuk nilai saat ini
    $uang %= $nilai; // Sisa uang setelah dikurangi pecahan saat ini
}


echo "<br>";
echo "<br>";
echo "Lembar Rupiah";
echo "<br>";

// Tampilkan hasil pecahan
foreach ($hasil as $nilai => $lembar) {
    echo "Rp " . number_format($nilai, 0, ',', '.') . ": " . $lembar . "<br>";
}
?>

?>
        </div>
    </form>
</body>
</html>

