<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Data_eo extends CI_Controller {

    public function __construct() {
    	parent::__construct();
    	session_start();
    }

    public function index(){
    	$data['link_open_wilayah'] = 'class="start active open"';
        $data['link_aktif_wilayah2'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		$data['title'] = "Master Data";
		$query = $this->db->query("SELECT a.nama_jenisbarang,b.nama_jenismaterial,c.* 
									FROM jenis_barang a, jenis_material b, data_inventory c 
									where a.id_jenismaterial = b.id_jenismaterial and b.id_jenismaterial = c.id_jenismaterial 
									and a.id_jenisbarang = c.id_jenisbarang order by c.nama_barang asc")->result();
        $data['model'] = $query;
    	$this->load->view('data_eo/index',$data);
    }
	
	public function tambahdata(){
    	$data['link_open_wilayah'] = 'class="start active open"';
        $data['link_aktif_wilayah2'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		$data['title'] = "Tambah Data";
		$query = $this->db->query("SELECT * FROM jenis_material order by nama_jenismaterial asc")->result();
		$data['material'] = $query;
		$query = $this->db->query("SELECT * FROM jenis_barang order by nama_jenisbarang asc")->result();
		$data['barang'] = $query;
        $query = $this->db->query("SELECT * FROM jenis_satuan order by nama_jenissatuan asc")->result();
        $data['satuan'] = $query;

    	$this->load->view('data_eo/tambah',$data);
    }
	
	public function getbarang($material='') {   
		$query = $this->db->query("SELECT 
					*
				FROM 
					jenis_barang
				WHERE
					id_jenismaterial='$material'
				")->result();
		$data['barang'] = $query;
		$this->load->view('data_eo/barang',$data);
	
	}
	
	public function simpandata(){
        $jumlah = $_POST['jumlah'];
        for ($i = 0; $i < $jumlah; $i++) {
            $kodeind = $_POST['kode'];
            $y = $i + 1;
            $jmlk = strlen($y);
            // echo $y."-".$jmlk;die();
            if($jmlk == 1){
                $nll = "00";
            }else if($jmlk == 2){
                $nll = "0";
            }else if($jmlk == 3){
                $nll = "";
            }
            $kodeasli = $kodeind.".".$nll."".$y;
            //echo $kodeasli;die();
            $this->db->query("insert into data_inventory (nama_barang,kode,type_model,merk,id_jenisbarang,id_jenismaterial,id_jenissatuan) values 
			('".$_POST['nama_barang']."','".$kodeasli."','".$_POST['type_model']."','".$_POST['merk']."','".$_POST['id_jenisbarang']."','".$_POST['id_jenismaterial']."','".$_POST['id_jenissatuan']."')");

        }
        redirect('data_eo', 'refresh');

    }

    public function editinventory($id){
        $data['link_open_wilayah'] = 'class="start active open"';
        $data['link_aktif_wilayah'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
        $data['title'] = "Edit Data Inventory";
        $query = $this->db->query("SELECT a.id_datainventory, a.nama_barang, a.kode, b.nama_jenismaterial, c.nama_jenisbarang,
                                  d.nama_jenissatuan, a.type_model, a.merk FROM data_inventory a, jenis_material b, jenis_barang c, jenis_satuan d
                                  where a.id_jenismaterial = b.id_jenismaterial and a.id_jenisbarang = c.id_jenisbarang and
                                  a.id_jenissatuan = d.id_jenissatuan and a.id_datainventory ='$id'")->result();

        $data['dataper'] = $query;
        $this->load->view('data_eo/edit',$data);
    }
	
	public function simpanedit(){
	    //print_r($_POST);
    	$this->db->query("update data_inventory set serial_number='".$_POST['serial_number']."',kondisi_baik='".$_POST['kondisi_baik']."',kondisi_buruk='".$_POST['kondisi_buruk']."',lokasi='".$_POST['lokasi']."' where id_datainventory='".$_POST['id_datainventory']."'");
		redirect('data_eo', 'refresh');
    }
	
	public function hapus($id){
    	$this->db->query("delete from data_inventory where id_datainventory='$id'");
		redirect('data_eo', 'refresh');
    }
}