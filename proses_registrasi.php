<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Hasil Registrasi</title>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Hasil Registrasi</h2>
        <table class="table table-bordered table-striped">
            <thead class="table-dark text-center">
                <tr>
                    <th scope="col">Field</th>
                    <th scope="col">Value</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nim = $_POST['nim'] ?? '';
                $namaLengkap = $_POST['namaLengkap'] ?? '';
                $jenisKelamin = $_POST['jenisKelamin'] ?? '';
                $programStudi = $_POST['programStudi'] ?? '';
                $skills = $_POST['skill'] ?? [];
                $domisili = $_POST['domisili'] ?? '';
                $email = $_POST['email'] ?? '';

                $ar_skill = [
                    "HTML" => 10,
                    "CSS" => 10,
                    "JavaScript" => 20,
                    "RWD Boostrap" => 20,
                    "PHP" => 30,
                    "Python" => 30,
                    "Java" => 50,
                ];

                $totalScore = 0;
                foreach ($skills as $skill) {
                    $totalScore += $ar_skill[$skill] ?? 0;
                }
                ?>
                <tr><td><strong>NIM</strong></td><td><?php echo htmlspecialchars($nim); ?></td></tr>
                <tr><td><strong>Nama Lengkap</strong></td><td><?php echo htmlspecialchars($namaLengkap); ?></td></tr>
                <tr><td><strong>Jenis Kelamin</strong></td><td><?php echo htmlspecialchars($jenisKelamin); ?></td></tr>
                <tr><td><strong>Program Studi</strong></td><td><?php echo htmlspecialchars($programStudi); ?></td></tr>
                <tr><td><strong>Skill</strong></td><td><?php echo htmlspecialchars(implode(", ", $skills)); ?></td></tr>
                <tr><td><strong>Total Score</strong></td><td><?php echo $totalScore; ?></td></tr>
                <tr><td><strong>Domisili</strong></td><td><?php echo htmlspecialchars($domisili); ?></td></tr>
                <tr><td><strong>Email</strong></td><td><?php echo htmlspecialchars($email); ?></td></tr>
            </tbody>
        </table>
    </div>
</body>
</html>