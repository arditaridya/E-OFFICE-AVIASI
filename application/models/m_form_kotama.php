<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_form_kotama extends CI_Model {
	function kelompok_barang(){
		$q = $this->db->query("SELECT * FROM kelompok_barang WHERE kode='2'");
		return $q;
	}

	function komoditi_barang(){
		$q = $this->db->query("SELECT * FROM komoditi_barang WHERE kelompok_barang_kode='2'");
		return $q;
	}

	function get_komoditi_barang(){
		$kelompok_barang_id = $this->input->post('klmpk_barang_id');
		$q = $this->db->query("SELECT * FROM komoditi_barang WHERE kelompok_barang_kode='".$kelompok_barang_id."'");
		return $q;
	}
	
	function get_data_pesawat_ad(){
		$q = $this->db->query("select * from pesawat_ad");
		return $q;
	}
}
?>