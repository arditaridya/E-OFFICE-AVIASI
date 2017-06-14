<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Permasalahan extends CI_Controller {
	
	 public function __construct() {
        parent::__construct();
        session_start();

        if ($this->session->userdata('level') == null or $this->session->userdata('level') == '3') {
            $this->session->set_flashdata('session_expired', TRUE);
            redirect('login');
        }
		
		$this->load->model('m_permasalahan');
		//$this->load->model('m_senjata_tni_al');
		

    }
	
	
	public function index(){
		
		$data['link_aset_tanah'] = 'open';
        $data['link_permasalahan'] = 'class="active"';
        $data['link_data_1'] = 'class="start active open"';
		
		$data['title'] = 'Permasalahan';
		$data['judul'] = 'Permasalahan - Index';
		$userz = $this->session->userdata('user_name');
		$query = $this->db->query("SELECT 
					*
				FROM 
					lanud_flag
				WHERE
					username='$userz'
					
					")->result();
					
		foreach ($query as $ris)
				{
				$lanudnya = $ris->lanudnya;				
				}
				
		$query2 = $this->db->query("SELECT 
					*
				FROM 
					m_lanud
				WHERE
					id='$lanudnya'
					
					")->result();
					
		foreach ($query2 as $ruk)
				{
				$nama_lanud = $ruk->lanud;				
				}	
				
		$data['nama_lanud'] = $nama_lanud;		
				
		$query3 = $this->db->query("SELECT 
					*
				FROM 
					permasalahan
				WHERE 
					lanud='$lanudnya'
				")->result();
		$data['datanya']=$query3;
		
		$this->load->view('permasalahan/view',$data);
		
	}
	
	public function tambah(){
		//echo base_url()."assets/halo/jquery.min.js";die();
    	$data['link_aset_tanah'] = 'open';
        $data['link_permasalahan'] = 'class="active"';
        $data['link_data_1'] = 'class="start active open"';
		$data['title'] = "Tambah Permasalahan";
		$userz = $this->session->userdata('user_name');
		$query3 = $this->db->query("SELECT 
					*
				FROM 
					lanud_flag
				WHERE
					username='$userz'
					
					")->result();
					
		foreach ($query3 as $ris)
				{
				$lanudnya = $ris->lanudnya;				
				}
				
		$query2 = $this->db->query("SELECT 
					*
				FROM 
					m_lanud
				WHERE
					id='$lanudnya'
					
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
    	$this->load->view('permasalahan/tambah',$data);
    }
	
	function lookup(){
        $bahasa = $this->input->post('bahasa',TRUE);
        $rows = $this->m_permasalahan->getData($bahasa);
        $json_array = array();
        foreach ($rows as $row)
            $json_array[]=$row->simak;
        echo json_encode($json_array);
	}
	
	public function saveflag($id){
		
		//echo $id."asdada";die();
		$userz = $this->session->userdata('user_name');
		$this->db->query("update lanud_flag set lanudnya='$id' where username='$userz'");
		redirect('data_aset', 'refresh');
		
	}
	
	public function simpan(){
    	$this->db->query("insert into permasalahan (lanud,simak,permasalahan,upaya_penyelesaian,perkembangan_terakhir) values ('".$_POST['lanud']."','".$_POST['SIMAK']."','".$_POST['permasalahan']."','".$_POST['upaya_penyelesaian']."','".$_POST['perkembangan_terakhir']."')");
			
			redirect('permasalahan', 'refresh');
    }
	
	public function edit($id){
		//echo $id."asasa";die();
		//echo base_url()."assets/halo/jquery.min.js";die();
    	$data['link_aset_tanah'] = 'open';
        $data['link_permasalahan'] = 'class="active"';
        $data['link_data_1'] = 'class="start active open"';
		$data['title'] = "Tambah Permasalahan";
		$userz = $this->session->userdata('user_name');
		$query3 = $this->db->query("SELECT 
					*
				FROM 
					lanud_flag
				WHERE
					username='$userz'
					
					")->result();
					
		foreach ($query3 as $ris)
				{
				$lanudnya = $ris->lanudnya;				
				}
				
		$query2 = $this->db->query("SELECT 
					*
				FROM 
					m_lanud
				WHERE
					id='$lanudnya'
					
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
					permasalahan
				where id ='$id'
				
				")->result();
		$data['daper']=$query;
    	$this->load->view('permasalahan/edit',$data);
    }
	
	public function update(){
    	$this->db->query("update permasalahan set simak='".$_POST['SIMAK']."', permasalahan='".$_POST['permasalahan']."', upaya_penyelesaian='".$_POST['upaya_penyelesaian']."', perkembangan_terakhir='".$_POST['perkembangan_terakhir']."' WHERE id='".$_POST['idnya']."'");
			
			redirect('permasalahan', 'refresh');
    }
	
	public function hapus($id){
    	
		$this->db->query("delete from permasalahan where id='$id'");
	
				
			redirect('permasalahan', 'refresh');
    }
	
	

	
	
}

?>