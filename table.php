<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <h1>Nilai IPK</h1>
        <table class="table">
  <thead class= "table-dark">
    <tr>
      <th scope="col">NO</th>
      <th scope="col">NIM</th>
      <th scope="col">NAMA</th>
      <th scope="col">TUGAS</th>
      <th scope="col">UTS</th>
      <th scope="col">UAS</th>
      <th scope="col">TOTAL</th>
      <th scope="col">PREDIKAT</th>
    </tr>
  </thead>
  <?php
      $nilai = ["nim" => 110224044, "nama" => "Icy Diamond",
      "tugas" => 50,
      "uts" => 90,
      "uas" => 80,];
      $nilai2 = ["nim" => 110224044, "nama" => "Rarrken",
      "tugas" => 60,
      "uts" => 70,
      "uas" => 80,];
      $nilai3 = ["nim" => 110224044, "nama" => "Draka",
      "tugas" => 70,
      "uts" => 100,
      "uas" => 100
    ];

      $mhs = [$nilai,$nilai2,$nilai3]
  ?>
  <tbody>
    <?php foreach ($mhs as $key => $item) { ?>
    <?php 

    // Mengatur persentase setiap nilai dalam perhitungan Total
    $persentase = [
      'tugas' => 40,
      'uts' => 30,
      'uas' => 30,
    ];

    // Menghitung total nilai dengan perbandingan persentase
    $total = 
      ($item['tugas'] * $persentase['tugas'] / 100) +
      ($item['uts'] * $persentase['uts'] / 100) +
      ($item['uas'] * $persentase['uas'] / 100);

    // Menghitung predikat
    if ($total >= 80) {
      $predikat = 'A';
    } else if ($total >= 75) {
        $predikat = 'B+';
    } else if ($total >= 70) {
        $predikat = 'B';
    } else if ($total >= 65) {
        $predikat = 'C+';
    } else if ($total >= 60) {
        $predikat = 'C';
    } else if ($total >= 50) {
        $predikat = 'D';
    } else {
        $predikat = 'E';
    }
    ?>

    <tr>
      <td scope="col"><?= $key + 1 ?></td>
      <td scope="col"><?= $item ['nim']?></td>
      <td scope="col"><?= $item ['nama']?></td>
      <td scope="col"><?= $item ['tugas']?></td>
      <td scope="col"><?= $item ['uts']?></td>
      <td scope="col"><?= $item ['uas']?></td>
      <td scope="col"><?= $total ?></td>
      <td scope="col"><?= $predikat ?></td>
    </tr>
    <?php }?>
    
  </tbody>
</table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
     </body>
</html>