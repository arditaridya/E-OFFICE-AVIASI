<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class master_kelompok_barang extends CI_Model {

	public function list_kelompok_barang(){
		$query = $this->db->query('select * from kelompok_barang order by kode asc');
		return $query->result();
	}
}

?>