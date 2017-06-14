<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_alutsista_al extends CI_Model {

    function __construct() {
        parent::__construct();
		
    }

   public function list_pesawat_al(){
	   
	   $query = $this->db->query('
	   
		SELECT 
			pswt.* ,
			pswt.id as idpswt,
			kes.*,
			jen.*,
			fun.*,	
			brg.*
			
		FROM 
			pesawat_al as pswt,
			kesatuan as kes,
			jenis_barang as jen,
			fungsi_barang as fun,	
			barang as brg
			
		WHERE
			pswt.id_pesawat = brg.id AND
			pswt.id_kesatuan = kes.id AND
			pswt.id_jenis = jen.id AND
			pswt.id_fungsi = fun.id AND
			pswt.id_pesawat = brg.id
	   
	   ');
	   return $query->result();
	   
	   
   }
   
   public function edit_pesawat_al($id){
		
		$this->db->where('id', $id);
        $data = $this->db->get('pesawat_al');
        return $data->result();
		
	}
   
   	public function get_table($table){
		$query = $this->db->select('*')->from($table);
		return $query->get()->result();
	}
   
  

}

?>