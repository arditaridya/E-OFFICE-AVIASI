<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class master_fungsi_barang extends CI_Model {

	public function list_fungsi_barang(){
		$query = $this->db->query('select * from fungsi_barang order by kode asc');
		return $query->result();
	}
	
	public function komoditi() {
        $kelompok_barang_kode = $this->input->post('kode_kelompok');
        $this->db->select('*');
        $this->db->from('komoditi_barang');
        $this->db->where('kelompok_barang_kode', $kelompok_barang_kode);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }
}

?>