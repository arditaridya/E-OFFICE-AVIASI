<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_senjata_pesawat_ad extends CI_Model {

    function __construct() {
        parent::__construct();
		
    }
	
	public function data_senjata_pesawat_ad(){
		
		$query = $this->db->query("
			SELECT 
				sen_pes.*,
				kes.kesatuan,
				jen.jenis,
				fun.fungsi,
				bar.barang
			FROM
				senjata_pesawat_ad sen_pes,
				kesatuan kes,
				jenis_barang jen,
				fungsi_barang fun,
				barang bar
			WHERE
				sen_pes.kesatuan = kes.id AND
				sen_pes.jenis_barang = jen.id AND
				sen_pes.fungsi = fun.id AND
				sen_pes.barang = bar.id 
			ORDER BY
				sen_pes.id
		");
		return $query->result();
		
	}
	
	public function edit_senjata_pesawat_ad($id){
		
		$this->db->where('id', $id);
        $data = $this->db->get('senjata_pesawat_ad');
        return $data->result();
		
	}
	
	public function kesatuan_ad(){
		
		$query = $this->db->query("
			SELECT 
				*
			FROM 
				kesatuan
			WHERE
				idinduk='2'
		");
		return $query->result();
		
	}
	
	public function jenis_senjata_pesawat_ad(){
		
		$query = $this->db->query("
			SELECT 
				*
			FROM 
				jenis_barang 
			WHERE 
				idkomoditi='9'
		");
		return $query->result();
		
	}
	
	public function update_senjata_pesawat_ad($id){
		//$x = explode("-",$this->input->post('tglx'));
		$data = array(
            'kesatuan' 	   		=> (int) $this->input->post('kesatuan'),
            'jenis_barang' 		=> $this->input->post('jenis'),
            'fungsi'		 	=> $this->input->post('fungsi'),
            'barang' 			=> $this->input->post('alutsista'),
			'b' 				=> (int) $this->input->post('b'),
			'rr' 				=> (int) $this->input->post('rr'),
			'rb' 				=> (int) $this->input->post('rb'),
			'jml' 				=> (int) $this->input->post('jml'),
			'ket' 				=> $this->input->post('keterangan'),
			'tgl_input' 		=> date("Y-m-d"),
			'tgl'				=> $this->input->post('tglx')
			//'tgl' 				=> $x[2]."-".$x[1]."-".$x[0]
        );
		$this->db->where('id', $id);
        $this->db->update('senjata_pesawat_ad', $data);
		
	}
	
	public function delete_senjata_pesawat_ad($id){
		
		$this->db->where('id', $id);
        $this->db->delete('senjata_pesawat_ad', array('id' => $id));
	}
	
}