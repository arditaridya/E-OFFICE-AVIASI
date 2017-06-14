<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class master_ket_kesatuan extends CI_Model {

	public function list_ket_kesatuan(){
		$query = $this->db->query('select * from keterangan_kesatuan order by id asc');
		return $query->result();
	}
	
	


}

?>	
	