<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_alutsista_ad extends CI_Model {

    function __construct() {
        parent::__construct();
		
    }

   public function data_users(){
	   
	   $query = $this->db->query('
	   
		SELECT * FROM users
	   
	   ');
	   return $query->result();
	   
	   
   }
   
   	public function get_table($table){
		$query = $this->db->select('*')->from($table);
		return $query->get()->result();
	}
   
  

}

?>