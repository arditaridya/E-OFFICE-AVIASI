<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_pesawat_ad extends CI_Model {

    function __construct() {
        parent::__construct();
		
    }
	
	public function data_pesawat_ad(){
		
		$query = $this->db->query("
			SELECT 
				pes.*,
				kes.kesatuan,
				jen.jenis,
				fun.fungsi,
				bar.barang
			FROM
				pesawat_ad pes,
				kesatuan kes,
				jenis_barang jen,
				fungsi_barang fun,
				barang bar
			WHERE
				pes.kesatuan = kes.id AND
				pes.jenis_barang = jen.id AND
				pes.fungsi = fun.id AND
				pes.barang = bar.id 
			ORDER BY
				pes.id
		");
		return $query->result();
		
	}
	
	public function edit_pesawat_ad($id){
		
		$this->db->where('id', $id);
        $data = $this->db->get('pesawat_ad');
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
	
	public function jenis_pesawat_ad(){
		
		$query = $this->db->query("
			SELECT 
				*
			FROM 
				jenis_barang 
			WHERE 
				idkomoditi='3'
		");
		return $query->result();
		
	}
	
	public function update_pesawat_ad($id){
		//$x = explode("-",$this->input->post('tglx'));
		$data = array(
            'kesatuan' 	   		=> (int) $this->input->post('kesatuan'),
            'jenis_barang' 		=> $this->input->post('jenis'),
            'fungsi'		 	=> $this->input->post('fungsi'),
            'barang' 			=> $this->input->post('alutsista'),
			'serial' 			=> $this->input->post('serial'),
			'lokasi' 			=> $this->input->post('lokasi'),
			'kondisi_op' 		=> $this->input->post('op'),
			'jml_op' 			=> (int) $this->input->post('jml_op'),
			'kondisi_non_op' 	=> $this->input->post('nop'),
			'jml_non_op' 		=> (int) $this->input->post('jml_nop'),
			'ket' 				=> $this->input->post('keterangan'),
			'tgl_input' 		=> date("Y-m-d"),
			'tgl'				=> $this->input->post('tglx')
			//'tgl' 				=> $x[2]."-".$x[1]."-".$x[0]
        );
		$this->db->where('id', $id);
        $this->db->update('pesawat_ad', $data);
		
	}
	
	public function delete_pesawat_ad($id){
		
		$this->db->where('id', $id);
        $this->db->delete('pesawat_ad', array('id' => $id));
	}
	
}
	
?>