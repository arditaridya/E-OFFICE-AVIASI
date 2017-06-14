<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jenis_barang extends CI_Controller {

    public function __construct() {
    	parent::__construct();
    	session_start();
    }

    public function index(){
    	$data['link_open_wilayah'] = 'class="start active open"';
        $data['link_aktif_wilayah2'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		$data['title'] = "Master Jenis Barang";
		$query = $this->db->query("SELECT a.*,b.nama_jenismaterial FROM jenis_barang a, jenis_material b where a.id_jenismaterial = b.id_jenismaterial order by nama_jenisbarang asc")->result();
        $data['model'] = $query;
    	$this->load->view('jenis_barang/index',$data);
    }
	
	public function tambahjenisbarang(){
    	$data['link_open_wilayah'] = 'class="start active open"';
        $data['link_aktif_wilayah2'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		$data['title'] = "Tambah Jenis Barang";
		$query = $this->db->query("SELECT * FROM jenis_material order by nama_jenismaterial asc")->result();
		$data['material'] = $query;
    	$this->load->view('jenis_barang/tambah',$data);
    }
	
	public function simpanjenisbarang(){
    	$this->db->query("insert into jenis_barang (id_jenismaterial,nama_jenisbarang,keterangan) values ('".$_POST['id_jenismaterial']."','".$_POST['nama_jenisbarang']."','".$_POST['keterangan']."')");
		redirect('jenis_barang', 'refresh');
    }
	
	 public function editjenisbarang($id){
    	$data['link_open_wilayah'] = 'class="start active open"';
        $data['link_aktif_wilayah2'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		$data['title'] = "Edit Jenis Barang";
		$query = $this->db->query("SELECT * FROM jenis_barang where id_jenisbarang='$id'")->result();
		$query2 = $this->db->query("SELECT * FROM jenis_material order by nama_jenismaterial asc")->result();
		$data['material'] = $query2;
        $data['dataper'] = $query;
    	$this->load->view('jenis_barang/edit',$data);
    }
	
	public function simpanedit(){
    	$this->db->query("update jenis_barang set id_jenismaterial='".$_POST['id_jenismaterial']."',nama_jenisbarang='".$_POST['nama_jenisbarang']."',keterangan='".$_POST['keterangan']."' where id_jenisbarang='".$_POST['id_jenisbarang']."'");
		redirect('jenis_barang', 'refresh');
    }
	
	public function hapus($id){
    	$this->db->query("delete from jenis_barang where id_jenisbarang='$id'");
		redirect('jenis_barang', 'refresh');
    }

	
}