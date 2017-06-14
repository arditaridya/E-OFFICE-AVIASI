<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_ranpur_al extends CI_Model {

    function __construct() {
        parent::__construct();
		
    }
	
	public function data_ranpur_al(){
		
		$query = $this->db->query("
			SELECT 
				ran.*,
				kes.kesatuan,
				jen.jenis,
				fun.fungsi,
				bar.barang
			FROM
				ranpur_al ran,
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
	
	public function tambah_ranpur_al(){
		
		$x = explode("-",$this->input->post('tglx'));
		$data = array(
            'kesatuan' 	   			=> (int) $this->input->post('kesatuan'),
            'jenis_barang' 			=> $this->input->post('jenis'),
            'fungsi'		 		=> $this->input->post('fungsi'),
            'barang' 				=> $this->input->post('barang'),
			'lokasi' 				=> $this->input->post('lokasi'),
			'sat_hara_tki_ii_op' 	=> $this->input->post('kesatuan_pel1'),
			'sat_hara_tkiii_iv_op' 	=> $this->input->post('kesatuan_pel3'),
			'b' 					=> (int) $this->input->post('b'),
			'rr' 					=> (int) $this->input->post('rr'),
			'rb' 					=> (int) $this->input->post('rb'),
			'sat_hara_tki_ii_nop' 	=> $this->input->post('kesatuan_no1'),
			'sat_hara_tkiii_iv_nop' => $this->input->post('kesatuan_no3'),
			'kons' 					=> (int) $this->input->post('kons'),
			'rbe' 					=> (int) $this->input->post('rb2'),
			'tl' 					=> (int) $this->input->post('tila'),
			'reran' 				=> (int) $this->input->post('rehab'),
			'ket' 					=> $this->input->post('ket'),
			'tgl_input' 			=> date("Y-m-d"),
			'tgl' 					=> $x[2]."-".$x[1]."-".$x[0]
        );
        $this->db->insert('ranpur_al', $data);
		
	}
	
	public function edit_ranpur_al($id){
		
		$this->db->where('id', $id);
        $data = $this->db->get('ranpur_al');
        return $data->result();
		
	}
	
	public function kesatuan_al(){
		
		$query = $this->db->query("
			SELECT 
				*
			FROM 
				kesatuan
			WHERE
				idinduk='3'
		");
		return $query->result();
		
	}
	
	public function jenis_ranpur_al(){
		
		$query = $this->db->query("
			SELECT 
				*
			FROM 
				jenis_barang 
			WHERE 
				idkomoditi='15'
		");
		return $query->result();
		
	}
	
	public function update_ranpur_al($id){
		//$x = explode("-",$this->input->post('tglx'));
		$data = array(
            'kesatuan' 	   			=> (int) $this->input->post('kesatuan'),
            'jenis_barang' 			=> $this->input->post('jenis'),
            'fungsi'		 		=> $this->input->post('zzz'),
            'barang' 				=> $this->input->post('sss'),
			'lokasi' 				=> $this->input->post('lokasi'),
			'sat_hara_tki_ii_op' 	=> $this->input->post('kesatuan_pel1'),
			'sat_hara_tkiii_iv_op' 	=> $this->input->post('kesatuan_pel3'),
			'b' 					=> (int) $this->input->post('b'),
			'rr' 					=> (int) $this->input->post('rr'),
			'rb' 					=> (int) $this->input->post('rb'),
			'sat_hara_tki_ii_nop' 	=> $this->input->post('kesatuan_no1'),
			'sat_hara_tkiii_iv_nop' => $this->input->post('kesatuan_no3'),
			'kons' 					=> (int) $this->input->post('kons'),
			'rbe' 					=> (int) $this->input->post('rb2'),
			'tl' 					=> (int) $this->input->post('tila'),
			'reran' 				=> (int) $this->input->post('rehab'),
			'ket' 					=> $this->input->post('ket'),
			'tgl_input' 			=> date("Y-m-d"),
			'tgl'					=> $this->input->post('tglx')
			//'tgl' 				=> $x[2]."-".$x[1]."-".$x[0]
        );
		$this->db->where('id', $id);
        $this->db->update('ranpur_al', $data);
		
	}
	
	public function delete_ranpur_al($id){
		
		$this->db->where('id', $id);
        $this->db->delete('ranpur_al', array('id' => $id));
	}
	
}