<html>
<title></title>
<head></head>
<body>
<h1>Tambah Data Pegawai</h1>
<form action="prosesdata.php?act=tambah" method="POST">
<table>
<tr>
<td>Nama</td>
<td><input type="text" placeholder="Nama Pegawai" name="nama" required></td>
</tr>
<tr>
<td>Alamat</td>
<td><textarea name="alamat" placeholder="Alamat Pegawai" required></textarea></td>
</tr>
<tr>
<td>Usia</td>
<td><input type="text" name="usia" placeholder="Masukan Usia" required></td>
</tr>
<tr>
<td><button type="submit" name="simpan">Simpan</button></td>
</tr>
</table>

</form>
</body>
</html>