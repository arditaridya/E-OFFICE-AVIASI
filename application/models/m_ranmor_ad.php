<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_ranmor_ad extends CI_Model {

    function __construct() {
        parent::__construct();
		
    }
	
	public function data_ranmor_ad(){
		
		$query = $this->db->query("
			SELECT 
				ran.*,
				kes.kesatuan,
				jen.jenis,
				fun.fungsi,
				bar.barang
			FROM
				ranmor_ad ran,
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
	
	public function edit_ranmor_ad($id){
		
		$this->db->where('id', $id);
        $data = $this->db->get('ranmor_ad');
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
	
	public function jenis_ranmor_ad(){
		
		$query = $this->db->query("
			SELECT 
				*
			FROM 
				jenis_barang 
			WHERE 
				idkomoditi='6'
		");
		return $query->result();
		
	}
	
	public function update_ranmor_ad($id){
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
        $this->db->update('ranmor_ad', $data);
		
	}
	
	public function delete_ranmor_ad($id){
		
		$this->db->where('id', $id);
        $this->db->delete('ranmor_ad', array('id' => $id));
	}
	
}