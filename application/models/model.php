<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model extends CI_Model {
	
	public function __construct(){
		parent::__construct();
	}
	
	public function search($table,$key,$val){
		$query = $this->db->select('*')->from($table)->like('LOWER('.$key.')',strtolower($val));
		return $query->get()->result();
	}
	
	public function get_table($param){
		$query = $this->db->select('*')->from('GIS_LAYER')->where($param);
		return $query->get()->result();
	}
	
	public function get_detail($table){
		$query = $this->db->select('*')->from($table);
		return $query->get()->result();
	}
	
	public function get_list_thematic($table){
		$query = $this->db->select('*')->from($table);
		return $query->get()->result();
	}
	
	public function get_data_thematic($constanTable,$constanLat,$constanLon,$constanKey,$key,$table)
	{
		$nama = 'KODAM';
		$string = 'SELECT a.'.$constanKey.', a.'.$constanLat.',a.'.$constanLon.',a.'.$nama.',b.'.$key.' , COUNT(a.'.$constanKey.') AS jumlah FROM '.$constanTable.' AS a INNER JOIN '.$table.' AS b ON a.'.$constanKey.' = b.'.$key.' GROUP BY a.'.$constanKey.', a.'.$constanLat.',a.'.$constanLon.',a.'.$nama.',b.'.$key.' ORDER BY jumlah DESC';
		$query = $this->db->query($string);
		return $query->result();
	}
	
	public function get_data_operasi($table,$field){
		$query = $this->db->select($field)->from($table);
		return $query->get()->result();
	}
	
	public function get_sebaran_operasi($table,$key,$val){
			
		$string = 'SELECT * FROM '.$table.' WHERE nama_operasi like "%'.$key.'%" AND nama_satgas like "%'.$val.'%"';
		$query = $this->db->query($string);
		return $query->result();
	}


	public function get_fasilitas($val, $value)
	{
		if($val !== "" && $value != "Semua Jenis")
		{			
			$string = "SELECT * FROM view_fasilitas WHERE LOWER(nama_provinsi) like LOWER('%".$val."%') AND LOWER(jenis_fasilitas) like LOWER('%".$value."%')";
		}
		elseif($val != "" && $value == "Semua Jenis")
		{
			$string = "SELECT * FROM view_fasilitas WHERE LOWER(nama_provinsi) like LOWER('%".$val."%')";
		}
		elseif($val == "" && $value != "Semua Jenis")
		{
			$string = "SELECT * FROM view_fasilitas WHERE LOWER(jenis_fasilitas) like LOWER('%".$value."%')";
		}
		elseif($val == "" && $value == "Semua Jenis")
		{
			$string = "SELECT * FROM view_fasilitas";
		}
		
		$query = $this->db->query($string);
		return $query->result();
	}
	
}