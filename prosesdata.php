<?php
include "database.php";
$konek = new Database();

if($_GET['act'] == 'tambah'){
    if($_POST['usia'] <= 10){
        echo "Usia tidak memenuhi syarat
        <br>
        <a href='tampildata.php'>Kembali</a>
        ";
    }else{
        $konek->insert_data($_POST['nama'],$_POST['alamat'],$_POST['usia']);
        echo "file berhasil disimpan
        <br>
        <a href='tampildata.php'>Kembali</a>
        ";
    }
}elseif($_GET['act'] == 'del'){
    $konek->delete_data($_GET['id']);
    echo "file berhasil didelete
    <br>
    <a href='tampildata.php'>Kembali</a>
    ";
}elseif($_GET['act'] == 'edit'){
    $konek->edit_data($_POST['id'],$_POST['nama'],$_POST['alamat'],$_POST['usia']);
    echo "file berhasil diupdate
    <br>
    <a href='tampildata.php'>Kembali</a>
    ";
}else{
    echo "Fungsi tidak diizinkan
    <br>
    <a href='tampildata.php'>Kembali</a>
    ";
}