<?php 
    include "database.php";
    $ambil = new Database();
    $ambildata = $ambil->get_data($_GET['id']);
?>
<html>
<title></title>
<head></head>
<body>
<h1>Edit Data Pegawai</h1>
<form action="prosesdata.php?act=edit" method="POST">
<table>
<tr>
<td>Nama</td>
<td>
<input type="hidden" name="id" value="<?= $ambildata['id'] ?>"/>
<input type="text" placeholder="Nama Pegawai" name="nama" required value="<?= $ambildata['nama'] ?>"></td>
</tr>
<tr>
<td>Alamat</td>
<td><textarea name="alamat" placeholder="Alamat Pegawai" required><?= $ambildata['alamat'] ?></textarea></td>
</tr>
<tr>
<td>Usia</td>
<td><input type="text" name="usia" placeholder="Masukan Usia" required value="<?= $ambildata['usia'] ?>"></td>
</tr>
<tr>
<td><button type="submit" name="simpan">Simpan</button></td>
</tr>
</table>

</form>
</body>
</html>