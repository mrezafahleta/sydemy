<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	public function index()
	{
        $data['judul'] = "Beranda | Halaman Utama";
        $data['namalogo'] = "Palugada";    
        $this->load->view('template/header',$data);
        $this->load->view('pages/front/Beranda');
        $this->load->view('template/footer');
    }
    public function about($id = '',$kode = ''){
        $data = array(
                'judul'     => 'About | Halaman About',
                'namalogo'  => 'Palugada',
                'nomor'     => $id,
                'kode'      => $kode,
                'judulabout'=> 'Halaman Tentang Saya'
        );
        $this->load->view('template/header',$data);
        $this->load->view('pages/front/Tentang');
        $this->load->view('template/footer');
    }
    public function service(){
        $data['judul'] = "Service | Halaman Service";
        $data['namalogo'] = "Palugada";
        $this->load->view('template/header',$data);
        $this->load->view('pages/front/Service');
        $this->load->view('template/footer');
    }
}