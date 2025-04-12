<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Nilai Mahasiswa</title>
</head>
<body>
 
<fieldset style="board">
    <legend>isi Form Di bawah</legend>
<?php
    $data_matkul = [
    'WEB1' => 'web1',
    'WEB2' => 'web2',
    'WEB3' => 'web3',
    ];
?>

<form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">

      <?php foreach ($data_matkul as key => value) {?> 
      <option value='<?= key ?>'><?= value ?></option>
      <?php } 
      ?>

      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilaiuts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="nilaiuts" name="nilaiuts" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilaiuas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="nilaiuas" name="nilaiuas" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilaipraktikum" class="col-4 col-form-label">Nilai Praktikum</label> 
    <div class="col-8">
      <input id="nilaipraktikum" name="nilaipraktikum" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</fieldset>

<?php
if (isset($_GET['submit'])) {
$_nama = $_GET['nama_lengkap'];
$_matkul = $_GET['matkul'];
$_nilai_uts = $_GET['nilai_uts'];
$_nilai_uas = $_GET['nilai_uas'];
$_nilai_praktikum = $_GET['nilai_praktikum'];

?>

<h2>Hasil Perhitungan Nilai Mahasiswa</h2>
Nama Mahasiswa: <?=$_nama?><br>
Mata Kuliah: <?=$_matkul?><br>
Nilai UTS: <?=$_nilai_uts?><br>
NIlai UAS: <?=$_nilai_uas?><br>
Nilai Praktikum: <?=$_nilai_praktimum?><br>
<?php } ?>

<?php

include_once 'daftar_nilai.php';

?>

</body>
</html>