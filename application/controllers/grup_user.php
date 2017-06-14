<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Grup_user extends CI_Controller {
	
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
		$data['title'] = "Grup User";
		$query = $this->db->query("SELECT 

                   * FROM grup_user
				order by id asc
                    

                    

                    ")->result();

        $data['model'] = $query;
    	$this->load->view('grup_user/index',$data);
		
	}
	
	public function tambah(){
    	//$data['link_aset_tanah'] = 'open';
        //$data['link_data_aset'] = 'class="active"';
        //$data['link_data_1'] = 'class="start active open"';
		$data['title'] = "Tambah Grup User";
		//$userz = $this->session->userdata('user_name');
		
    	$this->load->view('grup_user/tambah',$data);
    }
	
	
	public function simpan(){
    	
			$this->db->query("insert into grup_user (nama,keterangan) values ('".$_POST['nama']."','".$_POST['keterangan']."')");
			
			redirect('grup_user', 'refresh');
    }
	
	
	
	public function hapus($id){
		$this->db->query("delete from grup_user where id='".$id."'");
	
		redirect('grup_user', 'refresh');
    }
	
	public function Edit($id){
		//$x = explode("_",$id);
    	//$data['link_aset_tanah'] = 'open';
        //$data['link_data_aset'] = 'class="active"';
        //$data['link_data_1'] = 'class="start active open"';
		$data['title'] = "Edit Grup User";
		//$userz = $this->session->userdata('user_name');
		
		$query = $this->db->query("SELECT 
					*
				FROM 
					grup_user
				WHERE 
					id='".$id."'
				")->result();
		$data['datanya']=$query;
    	$this->load->view('grup_user/edit',$data);
    }
	
	
	public function update(){
    	$this->db->query("update grup_user set nama='".$_POST['nama']."', keterangan='".$_POST['keterangan']."' where id='".$_POST['id']."'");
	
		redirect('grup_user', 'refresh');
    }
	
	

	
	
}

?>