<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kotama extends CI_Controller {
	
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
		$data['title'] = "Kotama";
		$query = $this->db->query("SELECT 

                   * FROM kotama
                    

                    

                    ")->result();

        $data['model'] = $query;
    	$this->load->view('kotama/index',$data);
		
	}
	
	
	
	
	public function hapus($id){
		$this->db->query("delete from kotama where id='".$id."'");
	
		redirect('kotama', 'refresh');
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
					kotama
				WHERE 
					id='".$id."'
				")->result();
		$data['datanya']=$query;
    	$this->load->view('kotama/edit',$data);
    }
	
	
	public function update(){
		
		if(!empty($_POST['photo'])){
			//echo "photo lama";
			$this->db->query("update kotama set kotama='".$_POST['kotama']."',detilkotama='".$_POST['detilkotama']."' where id='".$_POST['id']."'");
	
		}else{
			//echo "photo baru";
			
			if (isset($_FILES['photo']) && !empty($_FILES['photo']['tmp_name']))
					{
						
						$namafile = $_FILES['photo']['name'];
						move_uploaded_file($_FILES['photo']['tmp_name'],BASEPATH."/../assets/upload/kotama/".$namafile);
					}
					$namaphoto = $_FILES['photo']['name'];
					$this->db->query("update kotama set kotama='".$_POST['kotama']."',detilkotama='".$_POST['detilkotama']."',photo='".$namaphoto."' where id='".$_POST['id']."'");
		}
    	
		redirect('kotama', 'refresh');
    }
	
	

	
	
}

?>