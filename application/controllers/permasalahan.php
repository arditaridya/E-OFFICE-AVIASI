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
	
	
	public function index($lanud_id){
		$lanud_id = substr($lanud_id,9,strlen($lanud_id));
		$groupz = $this->session->userdata('grup_user');
		$kotamaz = $this->session->userdata('kotama');
		if($lanud_id == null){
			if($groupz == 1){
			redirect('c_kesatuan', 'refresh');
			}else if ($groupz == 2){
			redirect('c_kesatuan/lanud/'.$kotamaz, 'refresh');
			}else{
				echo "Hallo";die();
			}
		}else{
			if($groupz == 1){
			
			$querypas = $this->db->query("SELECT 
					count(*) as kepast
				FROM 
					m_lanud
				WHERE
					id='".$lanud_id."' 
					
					")->result();
					
		foreach ($querypas as $rpk)
				{
				$kepast = $rpk->kepast;		
				}	
		//echo $kepast;die();
			
		if($kepast != 0) {
		$data['link_aset_tanah'] = 'open';
        $data['link_permasalahan'] = 'class="active"';
        $data['link_data_1'] = 'class="start active open"';
		
		$data['title'] = 'Permasalahan';
		$data['judul'] = 'Permasalahan - Index';
		$userz = $this->session->userdata('user_name');
		/* 20160606
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
		*/
		
		$query2 = $this->db->query("SELECT 
					*
				FROM 
					m_lanud
				WHERE
					id='".$lanud_id."'
					
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
					lanud='".$lanud_id."'
				")->result();
		$data['datanya']=$query3;
		
		$this->load->view('permasalahan/view',$data);
		
			}else{
			redirect('c_kesatuan', 'refresh');
		}
				}else if($groupz == 2){
					$querypas = $this->db->query("SELECT 
					count(*) as kepast2
				FROM 
					m_lanud
				WHERE
					id='".$lanud_id."' and
					kotama = '".$kotamaz."'
					
					")->result();
					
				foreach ($querypas as $rpk)
						{
						$kepast2 = $rpk->kepast2;		
						}	
						
						if($kepast2 != 0) {
							$data['link_aset_tanah'] = 'open';
        $data['link_permasalahan'] = 'class="active"';
        $data['link_data_1'] = 'class="start active open"';
		
		$data['title'] = 'Permasalahan';
		$data['judul'] = 'Permasalahan - Index';
		$userz = $this->session->userdata('user_name');
		/* 20160606
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
		*/
		
		$query2 = $this->db->query("SELECT 
					*
				FROM 
					m_lanud
				WHERE
					id='".$lanud_id."'
					
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
					lanud='".$lanud_id."'
				")->result();
		$data['datanya']=$query3;
		
		$this->load->view('permasalahan/view',$data);
							
							
						}
						else{
			redirect('c_kesatuan/lanud/'.$kotamaz, 'refresh');
		}
					
					
				}
				else if($groupz == 3){
					$data['link_aset_tanah'] = 'open';
        $data['link_permasalahan'] = 'class="active"';
        $data['link_data_1'] = 'class="start active open"';
		
		$data['title'] = 'Permasalahan';
		$data['judul'] = 'Permasalahan - Index';
		$userz = $this->session->userdata('user_name');
		/* 20160606
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
		*/
		
		$query2 = $this->db->query("SELECT 
					*
				FROM 
					m_lanud
				WHERE
					id='".$lanud_id."'
					
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
					lanud='".$lanud_id."'
				")->result();
		$data['datanya']=$query3;
		
		$this->load->view('permasalahan/view',$data);
					
		}
	}}
	
	public function tambah($lanud_id){
		$lanud_id = substr($lanud_id,9,strlen($lanud_id));
		//echo base_url()."assets/halo/jquery.min.js";die();
    	$data['link_aset_tanah'] = 'open';
        $data['link_permasalahan'] = 'class="active"';
        $data['link_data_1'] = 'class="start active open"';
		$data['title'] = "Tambah Permasalahan";
		$userz = $this->session->userdata('user_name');
		
		
		/* 20160606
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
		*/
		
		$query2 = $this->db->query("SELECT 
					*
				FROM 
					m_lanud
				WHERE
					id='".$lanud_id."'
					
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
		$query4 = $this->db->query("SELECT 
					*
				FROM 
					provinsi
				order by nama_provinsi asc
				")->result();
		$data['provinsi']=$query4;
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
	
	public function simpan($lanud_id){
		//echo $_POST['permasalahan'];die();
		//echo "insert into permasalahan (lanud,simak,permasalahan,hasil_klarifikasi,tindak_lanjut) values ('".$_POST['lanud']."','".$_POST['SIMAK']."','".trim($_POST['permasalahan'])."','".trim($_POST['hasil_klarifikasi'])."','".trim($_POST['tindak_lanjut'])."')";die();
    	$this->db->query("insert into permasalahan (lanud,provinsi,alamat,nilai,luas,permasalahan,hasil_klarifikasi,tindak_lanjut) values ('".$_POST['lanud']."','".$_POST['provinsi']."','".$_POST['alamat']."','".$_POST['nilai']."','".$_POST['luas']."','".$_POST['permasalahan']."','".$_POST['hasil_klarifikasi']."','".$_POST['tindak_lanjut']."')");
			
			redirect('permasalahan/index/'.$lanud_id, 'refresh');
    }
	
	public function edit($id){
		$x = explode("_",$id);
		//echo $id."asasa";die();
		//echo base_url()."assets/halo/jquery.min.js";die();
    	$data['link_aset_tanah'] = 'open';
        $data['link_permasalahan'] = 'class="active"';
        $data['link_data_1'] = 'class="start active open"';
		$data['title'] = "Tambah Permasalahan";
		$userz = $this->session->userdata('user_name');
		/* 20160606
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
		*/
		
		$query2 = $this->db->query("SELECT 
					*
				FROM 
					m_lanud
				WHERE
					id='".$x[3]."'
					
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
				where id ='".$x[0]."'
				
				")->result();
		$data['daper']=$query;
		$query7 = $this->db->query("SELECT 
					*
				FROM 
					provinsi
				order by nama_provinsi asc
				")->result();
		$data['provinsi']=$query7;
    	$this->load->view('permasalahan/edit',$data);
    }
	
	public function update($id){
		$x = explode("_",$id);
		
    	$this->db->query("update permasalahan set provinsi='".$_POST['provinsi']."', alamat='".$_POST['alamat']."', nilai='".$_POST['nilai']."', luas='".$_POST['luas']."', permasalahan='".$_POST['permasalahan']."', hasil_klarifikasi='".$_POST['hasil_klarifikasi']."', tindak_lanjut='".$_POST['tindak_lanjut']."' WHERE id='".$_POST['idnya']."'");
			
			redirect('permasalahan/index/'.$x[1]."_".$x[2]."_".$x[3], 'refresh');
    }
	
	public function hapus($id){
    	$x = explode("_",$id);
		$this->db->query("delete from permasalahan where id='".$x[0]."'");
	
				
			redirect('permasalahan/index/'.$x[1]."_".$x[2]."_".$x[3], 'refresh');
    }
	
	
	public function aturcetak($lanud_id){
		$lanud_id = substr($lanud_id,9,strlen($lanud_id));
    	$data['link_aset_tanah'] = 'open';
        $data['link_data_aset'] = 'class="active"';
        $data['link_data_1'] = 'class="start active open"';
		$data['title'] = "Atur Cetak Permasalahan";
		$userz = $this->session->userdata('user_name');
		/* 20160606
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
		*/
		
		$query2 = $this->db->query("SELECT 
					*
				FROM 
					m_lanud
				WHERE
					id='".$lanud_id."'
					
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
		$query3 = $this->db->query("SELECT 
					*
				FROM 
					status_tanah
				
				")->result();
		$data['statan']=$query3;
    	$query4 = $this->db->query("SELECT 
					*
				FROM 
					provinsi
				
				")->result();
		$data['provinsi']=$query4;
		$this->load->view('permasalahan/aturcetak',$data);
		
    }
	
	public function cetakdataaset($lanud_id='',$ru2='',$ru3='',$ru4=''){
		//echo "ASDASDA".$_POST['penanggungjwb'];die();
		$lanud_id = substr($lanud_id,9,strlen($lanud_id));
		//echo $ru2;die();
		
		$data['title'] = "Cetak Data Aset";
		if($ru2 == "a"){
			$yoa1 = "";
		}else{
			$yoa1 = str_replace("%20"," ",$ru2);
		}
		//echo $yoa1;die();
		
		if($ru3 == "b"){
			$yoa2 = "";
		}else{
			$yoa2 = str_replace("%20"," ",$ru3);
		}
		
		$query2 = $this->db->query("SELECT 
					*
				FROM 
					m_lanud
				WHERE
					id='".$lanud_id."'
					
					")->result();
					
		foreach ($query2 as $ruk)
				{
				$nama_lanud = $ruk->lanud;
				$id_lanud = $ruk->id;
				}	
				//echo $id_lanud."zzzzzzz";die();
		if($ru4 == "MPDF"){
			$yoa3 = "Laporan Permasalahan (".$nama_lanud.")";
		}else{
			$yoa3 = str_replace("%20"," ",$ru4);
		}
		$data['judul'] = $yoa3;
		$data['footera'] = "Laporan Permasalahan (".$nama_lanud.")";
		$query = $this->db->query("SELECT 
					*
				FROM 
					permasalahan
				WHERE
					lanud = '$lanud_id'
				")->result();
		$data['jojo']=$query;
		$data['pena']=$yoa2;
		//$data['judul']=$pegjw2;
		$data['ttc']=$yoa1;
		$this->load->view('permasalahan/cetakaset',$data);
		
	}
	
	public function getform(){
		$dat1 = $_GET['urinya'];
		$dat2 = $_GET['pow1'];
		$dat3 = $_GET['pow2'];
		$dat4 = $_GET['pow3'];
		
		$data['ru1']=$dat1;
		$data['ru2']=$dat2;
		$data['ru3']=$dat3;
		$data['ru4']=$dat4;
		
		$this->load->view('permasalahan/frame',$data);
	
	}
	
	public function getword($lanud_id=''){
		//$data['judul']="asdasdasd";
		$lanud_id = substr($lanud_id,9,strlen($lanud_id));
		//echo $lanud_id;die();
		$query = $this->db->query("SELECT 
					*
				FROM 
					permasalahan
				WHERE
					lanud = '$lanud_id'
				")->result();
		$data['datanya']=$query;
		$query2 = $this->db->query("SELECT 
					*
				FROM 
					m_lanud
				WHERE
					id='".$lanud_id."'
					
					")->result();
					
		foreach ($query2 as $ruk)
				{
				$nama_lanud = $ruk->lanud;
				$id_lanud = $ruk->id;
				}	
		$data['judulnya']="Laporan Permasalahan (".$nama_lanud.")";
		//$joul = $_POST['judul'];
		
		//echo $joul."asdasd";die();
		
		$this->load->view('permasalahan/cetakword',$data);
	
	}
	
	public function getexcel($lanud_id=''){
		$data['judul']="asdasdasd";
		$this->load->view('permasalahan/excel',$data);
	}

	
	
}

?>