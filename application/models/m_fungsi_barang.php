<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_fungsi_barang extends CI_Model {

	public function list_fungsi_barang(){
		
		// $asd = $this->input->post('JENIS');
		// if($asd != NULL){
			// $idjenis ="WHERE idjenis = '$asd' ";
		// }else{
			// $idjenis ="";
		// }
		
		// $query = $this->db->query("
		// SELECT 
			// * 
		// FROM 
			// fungsi_barang
		// ".$idjenis."
		// ORDER BY 
			// id asc
		// ");
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
		
		$idj = $this->input->post('JENIS');
		if($idj != NULL){
			$idjenis = " AND fun.idjenis = '$idj'";
		}else{
			$idjenis = "";
		}
		
		
		$query = $this->db->query("
		SELECT
			fun.*,
			jen.jenis,
			kom.komoditi
		FROM
			fungsi_barang fun,
			jenis_barang jen,
			komoditi_barang kom,
			kesatuan kes
		WHERE
			fun.idjenis = jen.id AND 
			jen.idkomoditi = kom.id AND
			kom.idkesatuan = kes.id
			".$idkesatuan."
			".$idkomoditi."
			".$idjenis."
		");
		return $query->result();
		
	}
	
	// public function komoditi() {
        // $kelompok_barang_kode = $this->input->post('kode_kelompok');
        // $this->db->select('*');
        // $this->db->from('komoditi_barang');
        // $this->db->where('kelompok_barang_kode', $kelompok_barang_kode);
        // $query = $this->db->get();
        // if ($query->num_rows() > 0) {
            // return $query;
        // } else {
            // return false;
        // }
    // }
	
	public function jenis(){
	
		$komoditi = $this->input->post('KOMODITI');
        $this->db->select('*');
        $this->db->from('jenis_barang');
        $this->db->where('idkomoditi', $komoditi);
        $query = $this->db->get();
        return $query;
	
	}
	
	public function kode_jenis(){
		
		$qwe = $this->input->post('JENIS');
		$query = $this->db->query("SELECT kode FROM jenis_barang WHERE id= '$qwe'");
		return $query->result();
		
	}
	
	public function tambah_fungsi_barang(){
		
		$data = array(
            'kode' 	   		=> $this->input->post('KODE'),
            'fungsi' 		=> $this->input->post('FUNGSI_BARANG'),
            'idjenis'		=> $this->input->post('JENIS')
        );
        $this->db->insert('fungsi_barang', $data);
				
	}
	
	public function edit_fungsi_barang($id){
		
		$this->db->where('id', $id);
        $data = $this->db->get('fungsi_barang');
        return $data->result();
		
	}
	
	public function update_fungsi_barang($id){
		
		$data = array(
            //'kode' 	   	=> $this->input->post('KODE'),
            'fungsi' 		=> $this->input->post('FUNGSI_BARANG')
            //'idjenis'		=> $this->input->post('JENIS')
        );
		$this->db->where('id', $id);
        $this->db->update('fungsi_barang', $data);
		
	}
	
	public function delete_fungsi_barang($id){
		
		$this->db->where('id', $id);
        $this->db->delete('fungsi_barang', array('id' => $id));
	}
	
}

?>