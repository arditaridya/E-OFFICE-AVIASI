<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jenis_material extends CI_Controller {

    public function __construct() {
    	parent::__construct();
    	session_start();
    }

    public function index(){
    	$data['link_open_wilayah'] = 'class="start active open"';
        $data['link_aktif_wilayah'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		$data['title'] = "Master Jenis Material";
		$query = $this->db->query("SELECT * FROM jenis_material order by id_jenismaterial asc ")->result();
        $data['model'] = $query;
    	$this->load->view('jenis_material/index',$data);
    }
	
	public function tambahmaterial(){
    	$data['link_open_wilayah'] = 'class="start active open"';
        $data['link_aktif_wilayah'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		$data['title'] = "Tambah Jenis Material";
    	$this->load->view('jenis_material/tambah',$data);
    }
	
	public function simpanjenismaterial(){
		$this->db->query("insert into jenis_material (nama_jenismaterial,keterangan) values ('".$_POST['nama_jenismaterial']."','".$_POST['keterangan']."')");
		redirect('jenis_material', 'refresh');
    }
	
	 public function editjenismaterial($id){
    	$data['link_open_wilayah'] = 'class="start active open"';
        $data['link_aktif_wilayah'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		$data['title'] = "Provinsi";
		$query = $this->db->query("SELECT * FROM jenis_material where id_jenismaterial='$id'")->result();

        $data['dataper'] = $query;
    	$this->load->view('jenis_material/edit',$data);
    }
	
	public function simpanedit(){
		$this->db->query("update jenis_material set nama_jenismaterial='".$_POST['nama_jenismaterial']."',keterangan='".$_POST['keterangan']."' where id_jenismaterial='".$_POST['id_jenismaterial']."'");
		redirect('jenis_material', 'refresh');
    }
	
	public function hapus($id){
    	
		$this->db->query("delete from jenis_material where id_jenismaterial='$id'");
		redirect('jenis_material', 'refresh');
    }

	
}