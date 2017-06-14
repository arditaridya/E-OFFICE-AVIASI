<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class master_kesatuan extends CI_Model {

	public function list_kesatuan(){
		$query = $this->db->query('select * from kesatuan order by id asc');
		return $query->result();
	}
}

?>