<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    

<h2>Form Prodi</h2>
<form method="post" action="proses_prodi.php">
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="kode" name="kode" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="namaprodi" class="col-4 col-form-label">Nama Prodi</label> 
    <div class="col-8">
      <input id="namaprodi" name="namaprodi" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="kepalaprodi" class="col-4 col-form-label">Kepala Prodi</label> 
    <div class="col-8">
      <input id="kepalaprodi" name="kepalaprodi" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input name="proses" type="submit" value="simpan" class="btn btn-primary">
    </div>
  </div>
</form>

</body>
</html>