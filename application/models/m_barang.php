<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_barang extends CI_Model {
	
	public function list_barang(){
		
		// $asd = $this->input->post('FUNGSI');
		// if($asd != NULL){
			// $idfungsi = "WHERE idfungsi = '$asd'";
		// }else{
			// $idfungsi = "";
		// }
		
		// $query = $this->db->query("
		// SELECT 
			// * 
		// FROM 
			// barang
		// ".$idfungsi."
		// ORDER BY 
			// id ASC
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
		
		$idf = $this->input->post('FUNGSI');
		if($idf != NULL){
			$idfungsi = " AND bar.idfungsi = '$idf'";
		}else{
			$idfungsi = "";
		}	
		
		$query = $this->db->query("
		SELECT 
			bar.*,
			fun.fungsi,
			jen.jenis,
			kom.komoditi
		FROM
			barang bar,
			fungsi_barang fun,
			jenis_barang jen,
			komoditi_barang kom,
			kesatuan kes
		WHERE
			bar.idfungsi = fun.id AND
			fun.idjenis = jen.id AND 
			jen.idkomoditi = kom.id AND
			kom.idkesatuan = kes.id
			".$idkesatuan."
			".$idkomoditi."
			".$idjenis."
			".$idfungsi."
		");
		return $query->result();
		
	}
	
	public function fungsi(){
		
		$jenis = $this->input->post('JENIS');
        $this->db->select('*');
        $this->db->from('fungsi_barang');
        $this->db->where('idjenis', $jenis);
        $query = $this->db->get();
        return $query;
		
	}
	
	public function kode_fungsi(){
		
		$qwe = $this->input->post('FUNGSI');
		$query = $this->db->query("SELECT kode FROM fungsi_barang WHERE id= '$qwe'");
		return $query->result();
		
	}
	
	public function tambah_barang(){
		
		$data = array(
            'kode' 	   		=> $this->input->post('KODE'),
            'barang' 		=> $this->input->post('BARANG'),
			'negara_asal'	=> $this->input->post('NEGARA_ASAL'),
			'tahun_buat'	=> $this->input->post('TAHUN_BUAT'),
            'idfungsi'		=> $this->input->post('FUNGSI')

        );
        $this->db->insert('barang', $data);
				
	}
	
	public function edit_barang($id){
		
		$this->db->where('id', $id);
        $data = $this->db->get('barang');
        return $data->result();
		
	}
	
	public function update_barang($id){
		
		$data = array(
            //'kode' 	   	=> $this->input->post('KODE'),
            'barang' 		=> $this->input->post('BARANG'),
            'negara_asal' 	=> $this->input->post('NEGARA_ASAL'),
            'tahun_buat' 	=> $this->input->post('TAHUN_BUAT')
            //'idfungsi'		=> $this->input->post('FUNGSI')
        );
		$this->db->where('id', $id);
        $this->db->update('barang', $data);
		
	}
	
	public function delete_barang($id){
		
		$this->db->where('id', $id);
        $this->db->delete('barang', array('id' => $id));
	}
	
}

?>