<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dasar_perolehan extends CI_Controller {

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
    	
        $data['link_aktif_daper'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		$data['title'] = "Dasar Perolehan";
		$query = $this->db->query("SELECT 

                   * FROM dasar_perolehan

                    

                    

                    ")->result();

        $data['model'] = $query;
    	$this->load->view('dasar_perolehan/index',$data);
    }
	
	public function tambahdaper(){
    	$data['link_aktif_daper'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		$data['title'] = "Tambah Dasar Perolehan";
    	$this->load->view('dasar_perolehan/tambah',$data);
    }
	
	public function simpandaper(){
    	
		$this->db->query("insert into dasar_perolehan (dasar_perolehan,keterangan) values ('".$_POST['dasar_perolehan']."','".$_POST['keterangan']."')");
	
				
			redirect('dasar_perolehan', 'refresh');
    }
	
	 public function editdaper($id){
    	$data['link_aktif_daper'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		$data['title'] = "Provinsi";
		$query = $this->db->query("SELECT 

                   * FROM dasar_perolehan 
				   where id='$id'

                    

                    

                    ")->result();

        $data['dataper'] = $query;
    	$this->load->view('dasar_perolehan/edit',$data);
    }
	
	public function simpanedit(){
    	
		$this->db->query("update dasar_perolehan set dasar_perolehan='".$_POST['dasar_perolehan']."',keterangan='".$_POST['keterangan']."' where id='".$_POST['id']."'");
	
				
			redirect('dasar_perolehan', 'refresh');
    }
	
	public function hapus($id){
    	
		$this->db->query("delete from dasar_perolehan where id='$id'");
	
				
			redirect('dasar_perolehan', 'refresh');
    }

	
}