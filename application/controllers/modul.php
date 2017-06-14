<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Modul extends CI_Controller {
	
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
		$data['title'] = "Modul";
		$query = $this->db->query("SELECT 

                   * FROM modul

                    

                    

                    ")->result();

        $data['model'] = $query;
    	$this->load->view('modul/index',$data);
		
	}
	
	public function tambah(){
    	//$data['link_aset_tanah'] = 'open';
        //$data['link_data_aset'] = 'class="active"';
        //$data['link_data_1'] = 'class="start active open"';
		$data['title'] = "Tambah Modul";
		//$userz = $this->session->userdata('user_name');
		$query = $this->db->query("SELECT 

                   * FROM modul

                    

                    

                    ")->result();

        $data['parnud'] = $query;
    	$this->load->view('modul/tambah',$data);
    }
	
	
	public function simpan(){
    	
			$this->db->query("insert into modul (nama_modul,parent,url,urutan) values ('".$_POST['nama_modul']."','".$_POST['parent']."','".$_POST['url']."','".$_POST['urutan']."')");
			
			redirect('modul', 'refresh');
    }
	
	
	
	public function hapus($id){
		$this->db->query("delete from modul where id='".$id."'");
	
		redirect('modul', 'refresh');
    }
	
	public function Edit($id){
		//$x = explode("_",$id);
    	//$data['link_aset_tanah'] = 'open';
        //$data['link_data_aset'] = 'class="active"';
        //$data['link_data_1'] = 'class="start active open"';
		$data['title'] = "Edit Modul";
		//$userz = $this->session->userdata('user_name');
		
		$query = $this->db->query("SELECT 
					*
				FROM 
					modul
				WHERE 
					id='".$id."'
				")->result();
		$data['datanya']=$query;
		$query2 = $this->db->query("SELECT 

                   * FROM modul

                    

                    

                    ")->result();

        $data['parnud'] = $query2;
    	$this->load->view('modul/edit',$data);
    }
	
	
	public function update(){
    	$this->db->query("update modul set nama_modul='".$_POST['nama_modul']."',parent='".$_POST['parent']."',url='".$_POST['url']."',urutan='".$_POST['urutan']."' where id='".$_POST['id']."'");
	
		redirect('modul', 'refresh');
    }
	
	

	
	
}

?>