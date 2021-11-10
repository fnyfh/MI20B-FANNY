<?php

include '../Database.php';
include '../model/Anggota_model.php';

class Anggota {
	public $model;

	function __construct(){
		$db = new Database();
		$conn = $db->DBConnect();
		$this->model = new Anggota_model($conn);
	}

	function index(){

		$hasil = $this->model->tampil_data();

	return $hasil;
	}
}

?>