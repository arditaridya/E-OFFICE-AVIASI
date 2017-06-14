<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Status_tanah extends CI_Controller {
	
	 public function __construct() {
        parent::__construct();
        session_start();

        if ($this->session->userdata('level') == null or $this->session->userdata('level') == '3') {
            $this->session->set_flashdata('session_expired', TRUE);
            redirect('login');
        }
		
		//$this->load->model('m_users');
		//$this->load->model('m_senjata_tni_al');
		

    }
	
	
	public function index(){
		//$data['link_open_wilayah'] = 'class="start active open"';
        //$data['link_aktif_wilayah'] = 'class="active"';
        //$data['link_data_master'] = 'class="start active open"';
		$data['title'] = "Status Tanah";
		$query = $this->db->query("SELECT 

                   * FROM status_tanah
                    

                    

                    ")->result();

        $data['model'] = $query;
    	$this->load->view('status_tanah/index',$data);
		
	}
	
	public function tambah(){
    	//$data['link_aset_tanah'] = 'open';
        //$data['link_data_aset'] = 'class="active"';
        //$data['link_data_1'] = 'class="start active open"';
		$data['title'] = "Tambah Status Tanah";
		//$userz = $this->session->userdata('user_name');
		
    	$this->load->view('status_tanah/tambah',$data);
    }
	
	
	public function simpan(){
    	
			$this->db->query("insert into status_tanah (status_tanah,keterangan) values ('".$_POST['status_tanah']."','".$_POST['keterangan']."')");
			
			redirect('status_tanah', 'refresh');
    }
	
	
	
	public function hapus($id){
		$this->db->query("delete from status_tanah where id='".$id."'");
	
		redirect('status_tanah', 'refresh');
    }
	
	public function Edit($id){
		//$x = explode("_",$id);
    	//$data['link_aset_tanah'] = 'open';
        //$data['link_data_aset'] = 'class="active"';
        //$data['link_data_1'] = 'class="start active open"';
		$data['title'] = "Edit Status Tanah";
		//$userz = $this->session->userdata('user_name');
		
		$query = $this->db->query("SELECT 
					*
				FROM 
					status_tanah
				WHERE 
					id='".$id."'
				")->result();
		$data['datanya']=$query;
    	$this->load->view('status_tanah/edit',$data);
    }
	
	
	public function update(){
    	$this->db->query("update status_tanah set status_tanah='".$_POST['status_tanah']."', keterangan='".$_POST['keterangan']."' where id='".$_POST['id']."'");
	
		redirect('status_tanah', 'refresh');
    }
	
	

	
	
}

?>