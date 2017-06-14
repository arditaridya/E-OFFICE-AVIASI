<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Aset_tanah extends CI_Controller {
	
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
	
	
	public function permasalahan(){
		$groupz = $this->session->userdata('grup_user');
		//$data['link_open_wilayah'] = 'class="start active open"';
        //$data['link_aktif_wilayah'] = 'class="active"';
        //$data['link_data_master'] = 'class="start active open"';
		$data['title'] = "Daftar Permasalahan Aset Tanah";
		if($groupz == '1'){
		
		$query = $this->db->query("SELECT 
					a.*,a.id as idper,b.*,b.lanud as namlad
				FROM 
					permasalahan a, m_lanud b
				WHERE 
					a.lanud=b.id
				
				")->result();
		$data['datanya']=$query;

    	$this->load->view('aset_tanah/indexpermasalahan',$data);
		}else if($groupz == '2'){
		$this->load->view('aset_tanah/indexpermasalahan2',$data);
		}
		
	}
	
	public function hapuspermasalahan($id){
		$this->db->query("delete from permasalahan where id='".$id."'");
	
		redirect('aset_tanah/permasalahan', 'refresh');
    }
	
	public function tambahpermasalahan(){
		$groupz = $this->session->userdata('grup_user');
		//$data['link_open_wilayah'] = 'class="start active open"';
        //$data['link_aktif_wilayah'] = 'class="active"';
        //$data['link_data_master'] = 'class="start active open"';
		$data['title'] = "Daftar Permasalahan Aset Tanah";
		if($groupz == '1'){
		
		
		$query2 = $this->db->query("SELECT 
					*
				FROM 
					m_lanud
				
					
					")->result();
					
		foreach ($query2 as $ruk)
				{
				$nama_lanud = $ruk->lanud;
				$id_lanud = $ruk->id;
				}	
				//echo $id_lanud."zzzzzzz";die();
		$data['nama_lanud'] = $nama_lanud;
		$data['id_lanud'] = $id_lanud;
		$query = $this->db->query("SELECT 
					*
				FROM 
					dasar_perolehan
				
				")->result();
		$data['daper']=$query;
    	$this->load->view('aset_tanah/tambahpermasalahan',$data);
		}else if($groupz == '2'){
			echo "zzzzzzz";
		}
    }
	
	public function tambah(){
    	//$data['link_aset_tanah'] = 'open';
        //$data['link_data_aset'] = 'class="active"';
        //$data['link_data_1'] = 'class="start active open"';
		$data['title'] = "Tambah Lanud";
		//$userz = $this->session->userdata('user_name');
		$query = $this->db->query("SELECT 

                   * FROM kotama

                    

                    

                    ")->result();

        $data['kotama'] = $query;
    	$this->load->view('lanud/tambah',$data);
    }
	
	
	public function simpan(){
    	
			$this->db->query("insert into m_lanud (kotama,lanud,latitut,longitut,detillanud) values ('".$_POST['kotama']."','".$_POST['lanud']."','".$_POST['latitut']."','".$_POST['longitut']."','".$_POST['detillanud']."')");
			
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
		$data['title'] = "Edit Lanud";
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
    	$this->db->query("update m_lanud set lanud='".$_POST['lanud']."',kotama='".$_POST['kotama']."',latitut='".$_POST['latitut']."',longitut='".$_POST['longitut']."',detillanud='".$_POST['detillanud']."' where id='".$_POST['id']."'");
	
		redirect('lanud', 'refresh');
    }
	
	

	
	
}

?>