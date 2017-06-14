<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_permasalahan extends CI_Model {

    function __construct() {
        parent::__construct();
    }
	

    function lookup($keyword){
        //$this->db->('*')->from('KPN_PERUMAHAN');
		
		  
		$this->db->select('*')->from('data_aset');
        $this->db->like('SIMAK',$keyword);
        $query = $this->db->get(); 
			echo $query."asdasda";die();
         
        return $query->result();
    }
	 public function getData($bahasa)
    {
        $this->db->select('*');
        $this->db->like('simak', $bahasa);
           $query = $this->db->get('data_aset');
        return $query->result();
    }

}

?>