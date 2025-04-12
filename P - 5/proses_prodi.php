<?php
require_once 'dbkoneksi.php';

//4. Tangkap request form
$_kode = $_POST['kode'];
$_nama = $_POST['nama'];
$_kepalaprodi = $_POST['kepalaprodi'];
$_proses = $_POST['proses'];

// simpan dalam array data
$ar_data = [$_kode, $_nama, $_kepalaprodi];

//5. Definisikan query mysql
if($_proses == "Simpan") {
    $sql = "INSERT INTO prodi(kode, nama, kepalaprodi) VALUES (?,?,?)";
}elseif ($_proses == "Update") {
    $sql = "UPDATE prodi SET nama=?, kepalaprodi=? WHERE kode=?";
    $id_edit = $_POST['id_edit'];
    $ar_data[] = $id_edit; //4
}elseif ($_proses == "Hapus") {
    $sql = "DELETE FROM prodi WHERE kode=?";
    unset($ar_data);
    $id_delete = $_POST['id_delete'];
    $ar_data = [$id_delete];//1
}

//6. Siapkan statement query
$stmt = $dbh->prepare(query: $sql);
//7. Eksekuse query
$stmt->execute($ar_data);

header('Location: form_prodi.php');
    

?>