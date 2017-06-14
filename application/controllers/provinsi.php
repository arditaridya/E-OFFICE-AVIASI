<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Provinsi extends CI_Controller {

    public function __construct() {
    	parent::__construct();
    	//$this->load->model('provinsi_model');
    	session_start();
    	/*if ($this->session->userdata('level')== null) {
    		$this->session->set_flashdata('session_expired', TRUE);
    		redirect('login');
    	}*/
    }

    public function index(){
    	$data['link_open_wilayah'] = 'class="start active open"';
        $data['link_aktif_wilayah'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		$data['title'] = "Provinsi";
		$query = $this->db->query("SELECT 

                   * FROM provinsi

                    order by id asc

                    

                    ")->result();

        $data['model'] = $query;
    	$this->load->view('provinsi/index',$data);
    }
	
	public function tambahprovinsi(){
    	$data['link_open_wilayah'] = 'class="start active open"';
        $data['link_aktif_wilayah'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		$data['title'] = "Tambah Provinsi";
    	$this->load->view('provinsi/tambah',$data);
    }
	
	public function simpanprovinsi(){
    	
		$this->db->query("insert into provinsi (nama_provinsi) values ('".$_POST['nama_provinsi']."')");
	
				
			redirect('provinsi', 'refresh');
    }
	
	 public function editprovinsi($id){
    	$data['link_open_wilayah'] = 'class="start active open"';
        $data['link_aktif_wilayah'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		$data['title'] = "Provinsi";
		$query = $this->db->query("SELECT 

                   * FROM provinsi 
				   where id='$id'

                    

                    

                    ")->result();

        $data['dataper'] = $query;
    	$this->load->view('provinsi/edit',$data);
    }
	
	public function simpanedit(){
    	
		$this->db->query("update provinsi set nama_provinsi='".$_POST['nama_provinsi']."' where id='".$_POST['id']."'");
	
				
			redirect('provinsi', 'refresh');
    }
	
	public function hapus($id){
    	
		$this->db->query("delete from provinsi where id='$id'");
	
				
			redirect('provinsi', 'refresh');
    }

	
}