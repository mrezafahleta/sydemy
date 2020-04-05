<?php
//pembuatan class
class Coba{
    //pembuatan property
    var $nama = "Jumansyah", 
        $tempatlahir = "Palembang",
        $tgllahir = "2020-02-02";

    //pembuatan method
    public function getdata(){
        return "$this->nama, $this->tempatlahir, $this->tgllahir";
    }

    public function CetakData(){
        return "$this->nama, $this->tempatlahir, $this->tgllahir";
    }

}
//pembuatan object
$c = new Coba();
//mengirim data ke property
$c->nama = "Rendra";
$c->tempatlahir = "Lahat";

echo $c->CetakData();
