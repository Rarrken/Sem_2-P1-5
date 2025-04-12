<?php
// require_once 'dbkoneksi.php';

// //4. Query data mahasiswa
// $sql = "SELECT * FROM mahasiswa";

// //5. Eksekusi query
// $rs = $dbh->query($sql);

// //6. Ambil semua data mahasiswa
// foreach($rs as $row){
//     echo '<br>'.$row->nim.' - '.$row->nama;
// }

?>
<table border="1" width="100%">
    <tr>
        <th>Nomor</th>
        <th>Kode</th>
        <th>nama</th>
        <th>kepalaprodi</th>

        <?php
        $nomor = 1;
        foreach ($rs as $row)?>
        <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $row->kode; ?></td>
            <td><?php echo $row->nama; ?></td>
            <td><?php echo $row->kepalaprodi; ?></td>
            <td>
                <a href="form_prodi.php?id_edit=<?php echo $row->kode; ?>">Edit</a>
                <a href="proses_prodi.php?id_delete=<?php echo $row->kode; ?>">Hapus</a>
            </td>
    </tr>
</table>