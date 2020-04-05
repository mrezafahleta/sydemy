<?php
class Database{
	// variable / property puclic
    var $host = "localhost", $username = "root", $pass = "", $db = "oop", $koneksi="";
	//method
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->pass,$this->db);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}

	function tampil_data(){
		$data = mysqli_query($this->koneksi,"SELECT id,nama,alamat,usia FROM pegawai");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function insert_data($nama,$alamat,$usia){
		mysqli_query($this->koneksi,"INSERT INTO pegawai value('','$nama','$alamat','$usia')");
	}

	function edit_data($id,$nama,$alamat,$usia){
		mysqli_query($this->koneksi,"UPDATE PEGAWAI SET
		nama = '$nama',
		alamat = '$alamat',
		usia = $usia where 
		id = $id 
		");
	}

	function get_data($id){
		$query = mysqli_query($this->koneksi,"SELECT id,nama,alamat,usia FROM pegawai where id = $id");
		return mysqli_fetch_array($query);
	}

	function delete_data($id){
		mysqli_query($this->koneksi,"DELETE FROM pegawai where id='$id'");
	}

}