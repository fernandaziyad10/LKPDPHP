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
  color: white;
  font-family: Arial, sans-serif;
  text-align: center;
  background-color: #021526;
  border-radius: 10px;
  padding: 15px;
}


  </style>
</head>
<body>
  
  <form action="" method="POST">
  <h1>Hitung kompensasi</h1>
    <div>
      <input type="number" name="Inputjamkerja" id="Inputjamkerja" placeholder="jam kerja" required>
    </div>
    <div>
      <input type="submit" value="hitung kompensasi">
    </div>
    <div class="hasil">
    <?php

//Membuat variabel
$jamnormal=8;
$lembur= @$_POST['Inputjamkerja']-$jamnormal;
$jamPertama = 50000;
$jamselanjutnya = 25000;
$kompensasi = $jamPertama+($jamselanjutnya *$lembur)-25000;


//mengecek jam kerja apakah lebih dari 8 jam atau tidak
  if(@$_POST['Inputjamkerja'] > 8) {
    //if ini merupakan hasil, jika bekerja lebih dari 8 jam

    echo "Jam kerja = ". $_POST['Inputjamkerja']. " Jam"."</h1>";
    echo "<br>";
    echo "jam lebih = " .$lembur;
    echo "<br>";
    echo "Kompensi = " . "Rp " . number_format($kompensasi, 0, ',', '.') ;
  }else{
    //else merupakan hasil yang tidak bekerja lebih dari 8 jam
    echo "tidak ada kompensasi";
  }
  
?>
    </div>
  </form>
</body>
</html>

