<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Data_aset extends CI_Controller {
	
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
		
		$data['link_aset_tanah'] = 'open';
        $data['link_data_aset'] = 'class="active"';
        $data['link_data_1'] = 'class="start active open"';
		
		$data['title'] = 'Data Aset';
		$data['judul'] = 'Data Aset - Index';
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
					a.*,a.id as iddaas,b.*,b.dasar_perolehan as daper
				FROM 
					data_aset a,
					dasar_perolehan b
				WHERE 
					a.lanud='$lanudnya' and
					a.dasar_perolehan = b.id
				")->result();
		$data['datanya']=$query3;
		
		$this->load->view('data_aset/view',$data);
		
	}
	
	public function tambah(){
    	$data['link_aset_tanah'] = 'open';
        $data['link_data_aset'] = 'class="active"';
        $data['link_data_1'] = 'class="start active open"';
		$data['title'] = "Tambah Data Aset";
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
    	$this->load->view('data_aset/tambah',$data);
    }
	
	public function saveflag($id){
		
		//echo $id."asdada";die();
		$userz = $this->session->userdata('user_name');
		$this->db->query("update lanud_flag set lanudnya='$id' where username='$userz'");
		redirect('data_aset', 'refresh');
		
	}
	
	public function simpan(){
    	$img_error = '0';
		$fill_img_count = '0';
		//if(isset($_POST['submit']))
		//{
		$img_count = count($_FILES['userfile']);
		
				for ($i=0 ; $i<=$img_count ; $i++)
				{
					
					if (isset($_FILES['userfile']) && !empty($_FILES['userfile']['tmp_name'][$i]))
					{
						$fill_img_count++;
						$namafile = $_FILES['userfile']['name'][$i];
						move_uploaded_file($_FILES['userfile']['tmp_name'][$i],BASEPATH."/../assets/upload_denah/".$namafile);
					}
					
				
					
					
				}
				$namanama = implode(',', $_FILES['userfile']['name']);
				//echo $namanama."asasasa";die();
				//echo "insert into data_aset (lanud,ikn,simak,lokasi,luas,dasar_perolehan,tahun_perolehan,nilai,keterangan,denah) values ('".$_POST['lanud']."','".$_POST['ikn']."','".$_POST['simak']."','".$_POST['lokasi']."','".$_POST['luas']."','".$_POST['dasar_perolehan']."','".$_POST['tahun_perolehan']."','".$_POST['nilai']."','".$_POST['keterangan']."','".$namanama."')";die();
				$this->db->query("insert into data_aset (lanud,ikn,simak,lokasi,luas,dasar_perolehan,tahun_perolehan,nilai,keterangan,denah) values ('".$_POST['lanud']."','".$_POST['ikn']."','".$_POST['simak']."','".$_POST['lokasi']."','".$_POST['luas']."','".$_POST['dasar_perolehan']."','".$_POST['tahun_perolehan']."','".$_POST['nilai']."','".$_POST['keterangan']."','".$namanama."')");
				$query = $this->db->query("SELECT 
										MAX(id) as maxd
										FROM data_aset

                    

                    

                    ")->result();
					
				foreach ($query as $ris)
					{
						$maxd = $ris->maxd;
					}
				$this->db->query("insert into detil_dataaset (jenis,luas,dataaset) values ('2','".$_POST['sert_luas']."','".$maxd."')");
				
				$img_count2 = count($_POST['no_sertifikat']);
				//echo $img_count."sdfsdfs";die();  
				for ($k=0 ; $k<=$img_count2 ; $k++)
				{
					if (!empty($_POST['no_sertifikat'][$k]))
					{
					$this->db->query("insert into detil_dataaset (jenis,no_sertifikat,luas,dataaset) values ('1','".$_POST['no_sertifikat'][$k]."','".$_POST['sert_luaz'][$k]."','".$maxd."')");
					}
				}
				
			redirect('data_aset', 'refresh');
    }
	
	
	
	public function hapus($id){
    	
		$this->db->query("delete from data_aset where id='$id'");
		$this->db->query("delete from detil_dataaset where dataaset='$id'");
	
				
			redirect('data_aset', 'refresh');
    }
	
	public function Edit($id){
    	$data['link_aset_tanah'] = 'open';
        $data['link_data_aset'] = 'class="active"';
        $data['link_data_1'] = 'class="start active open"';
		$data['title'] = "Edit Data Aset";
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
		
		$query = $this->db->query("SELECT 
					*
				FROM 
					data_aset
				where id='$id'
				
				")->result();
		$data['datzz']=$query;
    	$this->load->view('data_aset/edit',$data);
    }
	
	

	
	
}

?>