<?php
//pembuatan class
class Coba{

    //pembuatan property visibility
    /*    
    Public / var
    Private
    Protected
    */
    var $nama = "Jumansyah", $tempatlahir = "Palembang", $tgllahir = "2020-02-02";
}
//pembuatan object
$a = new Coba();
$a->nama        = "Naufal";
$a->tempatlahir = "Lahat";
$a->tgllahir    = "2019-01-01";

echo '
nama            : '.$a->nama.',<br>
Tempat Lahir    : '.$a->tempatlahir.',<br>
Tanggal Lahir   : '.$a->tgllahir.'
';

//menampilkan data array
//var_dump($a);