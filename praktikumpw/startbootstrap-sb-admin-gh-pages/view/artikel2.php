<?php
include '../layout/header.php';
?>
<h1>Welcome To Website</h1>
<p>Ini adalah Artikel 2</p>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, intial-scale=1.0"> 
    <title>from</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>

<form action="artikel2.php" method="GET">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="DDP">Dasar Dasar Pemrograman</option>
        <option value="BDI">Basis Data</option>
        <option value="WEB1">Pemrograman Web</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label> 
    <div class="col-8">
      <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
     <input type="submit" value="SIMPAN" name="proses">
    </div>
  </div>
</form>

<!-- Kode PHP -->
<?php

// Menangkap Data User
$proses = $_GET["proses"];
$nama = $_GET["nama"];
$matkul = $_GET["matkul"];
$nilai_uts = $_GET["nilai_uts"];
$nilai_uas = $_GET["nilai_uas"];
$nilai_tugas = $_GET["nilai_tugas"];

echo 'Proses :' .$proses;
echo '<br> Nama :' .$nama;
echo '<br> Mata Kuliah :' .$matkul;
echo '<br> Nilai UTS :' .$nilai_uts;
echo '<br> Nilai UAS :' .$nilai_uas;
echo '<br> Nilai Tugas :' .$nilai_tugas;
?>
</body>
</html>

<?php
include '../layout/footer.php';
?>