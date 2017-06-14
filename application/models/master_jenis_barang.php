<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class master_jenis_barang extends CI_Model {

	public function list_jenis_barang(){
		$query = $this->db->query('select * from jenis_barang order by kode asc');
		return $query->result();
	}
}

?>