<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class master_komoditi_barang extends CI_Model {

	public function list_komoditi_barang(){
		$query = $this->db->query('select * from komoditi_barang order by kode asc');
		return $query->result();
	}
}

?>