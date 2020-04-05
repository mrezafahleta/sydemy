<?php 
    include "database.php";
    $db = new Database();
    $data_pegawai = $db->tampil_data();
?>
<a href="tambahdata.php">Tambah Data</a>
<table border="1" width='100%'>
    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Alamat</td>
        <td>Usia</td>
        <td>Action</td>
    </tr>
    <?php 
    $no = 1;
    foreach($data_pegawai as $result){
    ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $result['nama'] ?></td>
        <td><?= $result['alamat'] ?></td>
        <td><?= $result['usia'] ?></td>
        <td><a href="updatedata.php?id=<?= $result['id'] ?>">Edit Data</a> | 
        <a href="prosesdata.php?act=del&id=<?= $result['id'] ?>">Delete</a></td>
    </tr>
    <?php }?>
</table>
