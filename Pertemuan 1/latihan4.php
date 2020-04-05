<?php
//pembuatan class
class Coba{
    //pembuatan property
    var $nama,
        $tempatlahir,
        $tgllahir;

    public function __construct($nm = "Jumansyah", $tmptlhr = "Palembang", $tgllhr = "2020-02-02"){
            $this->nama         = $nm;
            $this->tempatlahir  = $tmptlhr;
            $this->tgllahir     = $tgllhr;
    }
    public function printdata($nm = "Jumansyah", $tmptlhr = "Palembang", $tgllhr = "2020-02-02"){
        $this->nama         = $nm;
        $this->tempatlahir  = $tmptlhr;
        $this->tgllahir     = $tgllhr;
        return "$this->nama, $this->tempatlahir, $this->tgllahir";
    }
    //pembuatan method
    public function getdata(){
        return "$this->nama, $this->tempatlahir, $this->tgllahir";
    }
}
//pembuatan object
$a = new Coba("Sasuke","lahat","2020-01-01");
echo $a->getdata();
$b = new Coba();
echo $b->printdata("Adi Wijawa","Palembang");