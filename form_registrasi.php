<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Form Registrasi</title>
</head>
<body>
    <h2>Form Registrasi</h2>
    <div class="container px-5 my-5">
        <form method="POST" action="proses_registrasi.php">
            <div class="mb-3">
                <label class="form-label" for="nim">NIM</label>
                <input class="form-control" id="nim" name="nim" type="text" placeholder="NIM" required />
            </div>
            <div class="mb-3">
                <label class="form-label" for="namaLengkap">Nama Lengkap</label>
                <input class="form-control" id="namaLengkap" name="namaLengkap" type="text" placeholder="Nama Lengkap" required />
            </div>
            <div class="mb-3">
                <label class="form-label d-block">Jenis Kelamin</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="pria" type="radio" name="jenisKelamin" value="Pria" required />
                    <label class="form-check-label" for="pria">Pria</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="wanita" type="radio" name="jenisKelamin" value="Wanita" required />
                    <label class="form-check-label" for="wanita">Wanita</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="sigma" type="radio" name="jenisKelamin" value="Sigma" required />
                    <label class="form-check-label" for="sigma">Sigma</label>
                </div>
            </div>

            <?php
                $ar_prodi = ["TI" => "Teknik Informatika", "SI" => "Sistem Informasi", "BD" => "Bisnis Digital"];
            ?>
            <div class="mb-3">
                <label class="form-label" for="programStudi">Program Studi</label>
                <select class="form-select" id="programStudi" name="programStudi" required>
                    <option value="">Pilih Program Studi</option>
                    <?php foreach ($ar_prodi as $k => $v) {
                        echo "<option value='$k'>$v</option>";
                    } ?>
                </select>
            </div>

            <?php
                $ar_skill = ["HTML" => 10, "CSS" => 10, "JavaScript" => 20, "RWD Boostrap" => 20, "PHP" => 30, "Python" => 30, "Java" => 50];
            ?> 
            <div class="mb-3">
                <label class="form-label d-block">Skill Web Programming</label>
                <?php
                    foreach ($ar_skill as $k => $v) {
                        echo "<input type='checkbox' name='skill[]' value='$k'> $k ";
                    }
                ?>
            </div>
            
            <div class="mb-3">
                <label class="form-label" for="domisili">Domisili</label>
                <input class="form-control" id="domisili" name="domisili" type="text" placeholder="Domisili" required />
            </div>
            <div class="mb-3">
                <label class="form-label" for="email">Email</label>
                <input class="form-control" id="email" name="email" type="email" placeholder="Email" required />
            </div>
            <div class="d-grid">
                <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
