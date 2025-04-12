<?php
require_once 'dbkoneksi.php';

//4. Query data mahasiswa
$sql = "SELECT * FROM mahasiswa";

//5. Eksekusi query
$rs = $dbh->query($sql);

//6. Ambil semua data mahasiswa
foreach($rs as $row){
    echo '<br>'.$row->nim.' - '.$row->nama;
}

?>