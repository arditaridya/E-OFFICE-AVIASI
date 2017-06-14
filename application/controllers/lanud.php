<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Lanud extends CI_Controller {
	
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
		$data['title'] = "Daftar Satker";
		$query = $this->db->query("select a.*,a.id as idnyo,b.*
						from m_lanud a, kotama b
						where
						a.kotama=b.id
						order by b.id asc, a.id asc

                    ")->result();

        $data['model'] = $query;
    	$this->load->view('lanud/index',$data);
		
	}
	
	public function tambah(){
    	//$data['link_aset_tanah'] = 'open';
        //$data['link_data_aset'] = 'class="active"';
        //$data['link_data_1'] = 'class="start active open"';
		$data['title'] = "Tambah Satker";
		//$userz = $this->session->userdata('user_name');
		$query = $this->db->query("SELECT 

                   * FROM kotama

                    

                    

                    ")->result();

        $data['kotama'] = $query;
    	$this->load->view('lanud/tambah',$data);
    }
	
	
	public function simpan(){
			if (isset($_FILES['photolanud']) && !empty($_FILES['photolanud']['tmp_name']))
					{
						
						$namafile = $_FILES['photolanud']['name'];
						move_uploaded_file($_FILES['photolanud']['tmp_name'],BASEPATH."/../assets/upload/lanud/".$namafile);
					}
					$namaphoto = $_FILES['photolanud']['name'];
					
			$this->db->query("insert into m_lanud (kotama,lanud,latitut,longitut,detillanud,photolanud) values ('".$_POST['kotama']."','".$_POST['lanud']."','".$_POST['latitut']."','".$_POST['longitut']."','".$_POST['detillanud']."','".$namaphoto."')");
			
			redirect('lanud', 'refresh');
    }
	
	
	
	public function hapus($id){
		$this->db->query("delete from m_lanud where id='".$id."'");
	
		redirect('lanud', 'refresh');
    }
	
	public function Edit($id){
		//$x = explode("_",$id);
    	//$data['link_aset_tanah'] = 'open';
        //$data['link_data_aset'] = 'class="active"';
        //$data['link_data_1'] = 'class="start active open"';
		$data['title'] = "Edit Satker";
		//$userz = $this->session->userdata('user_name');
		
		$query = $this->db->query("SELECT 
					*
				FROM 
					m_lanud
				WHERE 
					id='".$id."'
				")->result();
		$data['datanya']=$query;
		$query2 = $this->db->query("SELECT 

                   * FROM kotama

                    

                    

                    ")->result();

        $data['kotama'] = $query2;
    	$this->load->view('lanud/edit',$data);
    }
	
	
	public function update(){
		if(!empty($_POST['photolanud'])){
			//echo "photo lama";
			$this->db->query("update m_lanud set lanud='".$_POST['lanud']."',kotama='".$_POST['kotama']."',latitut='".$_POST['latitut']."',longitut='".$_POST['longitut']."',detillanud='".$_POST['detillanud']."' where id='".$_POST['id']."'");
	
		}else{
			//echo "photo baru";
			
			if (isset($_FILES['photolanud']) && !empty($_FILES['photolanud']['tmp_name']))
					{
						
						$namafile = $_FILES['photolanud']['name'];
						move_uploaded_file($_FILES['photolanud']['tmp_name'],BASEPATH."/../assets/upload/lanud/".$namafile);
					}
					$namaphoto = $_FILES['photolanud']['name'];
					$this->db->query("update m_lanud set lanud='".$_POST['lanud']."',kotama='".$_POST['kotama']."',latitut='".$_POST['latitut']."',longitut='".$_POST['longitut']."',detillanud='".$_POST['detillanud']."',photolanud='".$namaphoto."' where id='".$_POST['id']."'");
		}
    	
		redirect('lanud', 'refresh');
    }
	
	

	
	
}

?>