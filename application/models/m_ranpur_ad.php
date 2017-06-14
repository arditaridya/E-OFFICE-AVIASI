<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_ranpur_ad extends CI_Model {

    function __construct() {
        parent::__construct();
		
    }
	
	public function data_ranpur_ad(){
		
		$query = $this->db->query("
			SELECT 
				ran.*,
				kes.kesatuan,
				jen.jenis,
				fun.fungsi,
				bar.barang
			FROM
				ranpur_ad ran,
				kesatuan kes,
				jenis_barang jen,
				fungsi_barang fun,
				barang bar
			WHERE
				ran.kesatuan = kes.id AND
				ran.jenis_barang = jen.id AND
				ran.fungsi = fun.id AND
				ran.barang = bar.id 
			ORDER BY
				ran.id
		");
		return $query->result();
		
	}
	
	public function edit_ranpur_ad($id){
		
		$this->db->where('id', $id);
        $data = $this->db->get('ranpur_ad');
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
	
	public function jenis_ranpur_ad(){
		
		$query = $this->db->query("
			SELECT 
				*
			FROM 
				jenis_barang 
			WHERE 
				idkomoditi='5'
		");
		return $query->result();
		
	}
	
	public function update_ranpur_ad($id){
		//$x = explode("-",$this->input->post('tglx'));
		$data = array(
            'kesatuan' 	   		=> (int) $this->input->post('kesatuan'),
            'jenis_barang' 		=> $this->input->post('jenis'),
            'fungsi'		 	=> $this->input->post('fungsi'),
            'barang' 			=> $this->input->post('alutsista'),
			'lokasi' 			=> $this->input->post('lokasi'),
			's_op' 				=> (int) $this->input->post('s'),
			'ts_op' 			=> (int) $this->input->post('ts'),
			'kons_nop' 			=> (int) $this->input->post('kons'),
			'rb_nop' 			=> (int) $this->input->post('rb'),
			'tl_nop' 			=> (int) $this->input->post('tl'),
			'ket' 				=> $this->input->post('keterangan'),
			'tgl_input' 		=> date("Y-m-d"),
			'tgl'				=> $this->input->post('tglx')
			//'tgl' 				=> $x[2]."-".$x[1]."-".$x[0]
        );
		$this->db->where('id', $id);
        $this->db->update('ranpur_ad', $data);
		
	}
	
	public function delete_ranpur_ad($id){
		
		$this->db->where('id', $id);
        $this->db->delete('ranpur_ad', array('id' => $id));
	}
	
}