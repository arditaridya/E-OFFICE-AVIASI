<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_amunisi_pesawat_ad extends CI_Model {

    function __construct() {
        parent::__construct();
		
    }
	
	public function data_amunisi_pesawat_ad(){
		
		$query = $this->db->query("
			SELECT 
				amu_pes.*,
				kes.kesatuan,
				jen.jenis,
				fun.fungsi,
				bar.barang
			FROM
				amunisi_pesawat_ad amu_pes,
				kesatuan kes,
				jenis_barang jen,
				fungsi_barang fun,
				barang bar
			WHERE
				amu_pes.kesatuan = kes.id AND
				amu_pes.jenis_barang = jen.id AND
				amu_pes.fungsi = fun.id AND
				amu_pes.barang = bar.id 
			ORDER BY
				amu_pes.id
		");
		return $query->result();
		
	}
	
	public function edit_amunisi_pesawat_ad($id){
		
		$this->db->where('id', $id);
        $data = $this->db->get('amunisi_pesawat_ad');
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
	
	public function jenis_amunisi_pesawat_ad(){
		
		$query = $this->db->query("
			SELECT 
				*
			FROM 
				jenis_barang 
			WHERE 
				idkomoditi='10'
		");
		return $query->result();
		
	}
	
	public function update_amunisi_pesawat_ad($id){
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
        $this->db->update('amunisi_pesawat_ad', $data);
		
	}
	
	public function delete_amunisi_pesawat_ad($id){
		
		$this->db->where('id', $id);
        $this->db->delete('amunisi_pesawat_ad', array('id' => $id));
	}
	
}