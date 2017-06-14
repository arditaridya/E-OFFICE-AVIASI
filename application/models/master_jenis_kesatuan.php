<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class master_jenis_kesatuan extends CI_Model {

	public function list_jenis_kesatuan(){
		$query = $this->db->query('select * from jenis_kesatuan order by id asc');
		return $query->result();
	}
}

?>