<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kabupaten extends CI_Controller {

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
        $data['link_aktif_wilayah2'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		$data['title'] = "Kabupaten";
		$query = $this->db->query("SELECT 

                   a.*,a.id as id_kabupaten,b.* FROM kabupaten a, provinsi b
				   where a.provinsi = b.id

                    

                    

                    ")->result();

        $data['model'] = $query;
    	$this->load->view('kabupaten/index',$data);
    }
	
	public function tambahkabupaten(){
    	$data['link_open_wilayah'] = 'class="start active open"';
        $data['link_aktif_wilayah2'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		$data['title'] = "Tambah Kabupaten";
		$query = $this->db->query("SELECT 
					*
				FROM 
					provinsi
				order by nama_provinsi asc
					")->result();
		$data['provinsi'] = $query;
    	$this->load->view('kabupaten/tambah',$data);
    }
	
	public function simpankabupaten(){
    	
		$this->db->query("insert into kabupaten (provinsi,nama_kabupaten) values ('".$_POST['provinsi']."','".$_POST['nama_kabupaten']."')");
	
				
			redirect('kabupaten', 'refresh');
    }
	
	 public function editkabupaten($id){
    	$data['link_open_wilayah'] = 'class="start active open"';
        $data['link_aktif_wilayah2'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		$data['title'] = "Edit Kabupaten";
		$query = $this->db->query("SELECT 

                   * FROM kabupaten 
				   where id='$id'

                    

                    

                    ")->result();
		$query2 = $this->db->query("SELECT 
					*
				FROM 
					provinsi
					
					")->result();
		$data['provinsi'] = $query2;
        $data['dataper'] = $query;
    	$this->load->view('kabupaten/edit',$data);
    }
	
	public function simpanedit(){
    	
		$this->db->query("update kabupaten set provinsi='".$_POST['provinsi']."',nama_kabupaten='".$_POST['nama_kabupaten']."' where id='".$_POST['id']."'");
	
				
			redirect('kabupaten', 'refresh');
    }
	
	public function hapus($id){
    	
		$this->db->query("delete from kabupaten where id='$id'");
	
				
			redirect('kabupaten', 'refresh');
    }

	
}