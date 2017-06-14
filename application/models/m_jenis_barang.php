<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_jenis_barang extends CI_Model {

	public function list_jenis_barang(){
		
		// $asd = $this->input->post('KOMODITI');
		// if($asd != NULL){
			// $idkom = "WHERE idkomoditi ='$asd'";
		// } else {
			// $idkom = "";
		// }
		
		// $query = $this->db->query('
		// SELECT 
			// * 
		// FROM 
			// jenis_barang
		// '.$idkom.'
		// ORDER BY 
			// id ASC
		// ');
		// return $query->result();
		
		
		$idkes = $this->input->post('KESATUAN');
		if($idkes != NULL){
			$idkesatuan = " AND kom.idkesatuan = '$idkes'";
		}else{
			$idkesatuan = "";
		}
		
		$idk = $this->input->post('KOMODITI');
		if($idk != NULL){
			$idkomoditi = " AND jen.idkomoditi = '$idk'";
		}else{
			$idkomoditi = "";
		}
				
		
		$query = $this->db->query("
		SELECT
			jen.*,
			kom.komoditi
		FROM
			jenis_barang jen,
			komoditi_barang kom,
			kesatuan kes
		WHERE
			jen.idkomoditi = kom.id AND
			kom.idkesatuan = kes.id
			".$idkesatuan."
			".$idkomoditi."
		");
		return $query->result();
		
	}
	
	// public function get_komoditi(){
		
		// $query = $this->db->query("
		// SELECT 
			// * 
		// FROM 
			// komoditi_barang
		// ORDER BY 
			// id ASC
		// ");
		// return $query->result();
		
	// }
	
	public function tambah_jenis_barang(){
		
		$data = array(
            'kode' 	   		=> $this->input->post('KODE'),
            'jenis' 		=> $this->input->post('JENIS_BARANG'),
            'idkomoditi'	=> $this->input->post('KOMODITI')
        );
        $this->db->insert('jenis_barang', $data);
				
	}
	
	public function komoditi(){
	
		$kesatuan = $this->input->post('KESATUAN');
        $this->db->select('*');
        $this->db->from('komoditi_barang');
        $this->db->where('idkesatuan', $kesatuan);
        $query = $this->db->get();
        return $query;
	
	}
	
	public function kode_komoditi(){
		
		$qwe = $this->input->post('KOMODITI');
		$query = $this->db->query("SELECT kode FROM komoditi_barang WHERE id= '$qwe'");
		return $query->result();
	}
	
	public function edit_jenis_barang($id){
		
		$this->db->where('id', $id);
        $data = $this->db->get('jenis_barang');
        return $data->result();
		
	}
	
	public function update_jenis_barang($id){
		
		$data = array(
            //'kode' 	   		=> $this->input->post('KODE'),
            'jenis' 		=> $this->input->post('JENIS_BARANG')
            //'idkomoditi'	=> $this->input->post('komoditi')
        );
		$this->db->where('id', $id);
        $this->db->update('jenis_barang', $data);
		
	}
	
	public function delete_jenis_barang($id){
		
		$this->db->where('id', $id);
        $this->db->delete('jenis_barang', array('id' => $id));
		
	}
	
}

?>