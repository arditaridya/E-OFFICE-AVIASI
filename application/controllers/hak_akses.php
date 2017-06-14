<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Hak_akses extends CI_Controller {
	
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
		$data['title'] = "Hak Akses";
		$query = $this->db->query("SELECT 

						* 
					FROM 
						grup_user
					order by id asc

                    ")->result();

        $data['model'] = $query;
    	$this->load->view('hak_akses/index',$data);
		
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
		$this->db->query("delete from hak_akses where grup_user='".$id."'");
	
		redirect('hak_akses', 'refresh');
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
					grup_user
				WHERE 
					id='".$id."'
				")->result();
		$data['datanya']=$query;
		
		$query2 = $this->db->query("SELECT 
					*
				FROM 
					modul
				order by parent asc, urutan asc
				")->result();
		$data['menunya']=$query2;
		
		$query3 = $this->db->query("SELECT 
					*
				FROM 
					hak_akses
				
				")->result();
		$data['aksesnya']=$query3;
		
    	$this->load->view('hak_akses/edit',$data);
    }
	
	
	public function update(){
		$idgrup = $_POST['idgrup'];
		$this->db->query("delete from hak_akses where grup_user='".$idgrup."'");
    	$jumlah = count($_POST["ceko"]);
		//echo $idgrup."jumlah";die();
		for($i=0; $i < $jumlah; $i++) 
		{
			
			$noreko=$_POST["ceko"][$i];
			//$nomenu=$_POST["idmenu"][$i];
			
			$this->db->query("insert into hak_akses (grup_user,modul,status) values ('".$idgrup."','".$noreko."','1')");
			
			
			
		}
		//var_dump($_POST["ceko"]);die();
		//echo $noreko."".$nomenu."asdsa";die();
		redirect('hak_akses', 'refresh');
    }
	
	

	
	
}

?>