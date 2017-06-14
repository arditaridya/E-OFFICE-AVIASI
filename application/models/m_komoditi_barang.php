<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_komoditi_barang extends CI_Model {

	public function list_komoditi_barang(){
		
		$asd = $this->input->post('MATRA');
		if($asd != NULL){
			$idkes = "WHERE idkesatuan = '$asd'";
		} else {
			$idkes = "";
		}
		
		$query = $this->db->query('
			SELECT 
				* 
			FROM 
				komoditi_barang 
			'.$idkes.'
			ORDER BY 
				id ASC
		');
		return $query->result();
	}
	
	public function get_matra(){
		$query = $this->db->query('
			SELECT 
				* 
			FROM 
				kesatuan
			WHERE 
				idinduk = 0
			ORDER BY 
				id ASC
		');
		return $query->result();
	}
	
	public function tambah_komoditi_barang(){
		
		$data = array(
            'kode' 	   		=> $this->input->post('KODE'),
            'komoditi' 		=> $this->input->post('KOMODITI_BARANG'),
            'idkesatuan'	=> $this->input->post('MATRA')
        );
        $this->db->insert('komoditi_barang', $data);
				
	}
	
	public function edit_komoditi_barang($id){
		
		$this->db->where('id', $id);
        $data = $this->db->get('komoditi_barang');
        return $data->result();
		
	}
	
	public function update_komoditi_barang($id){
		
		$data = array(
            //'kode' 	   		=> $this->input->post('KODE'),
            'komoditi' 		=> $this->input->post('KOMODITI_BARANG')
            //'idkesatuan'	=> $this->input->post('MATRA')
        );
		$this->db->where('id', $id);
        $this->db->update('komoditi_barang', $data);
		
	}
	
	public function delete_komoditi_barang($id){
		
		$this->db->where('id', $id);
        $this->db->delete('komoditi_barang', array('id' => $id));
		
	}
}

?>