<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Report extends CI_Controller {
	
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
	
	
	public function data_aset(){
		//$data['link_open_wilayah'] = 'class="start active open"';
        //$data['link_aktif_wilayah'] = 'class="active"';
        //$data['link_data_master'] = 'class="start active open"';
		$data['title'] = "Data Tanah Per No Registrasi";
		$query2 = $this->db->query("SELECT 

                   * FROM kotama

                    

                    

                    ")->result();

        $data['kotama'] = $query2;
		
		$query3 = $this->db->query("SELECT 

                   * FROM m_lanud

                    

                    

                    ")->result();

        $data['lanud'] = $query3;
    	$this->load->view('report/indexdataaset',$data);
		
	}
	
	public function preview_aset(){
		$jela = $_GET['jela'];
		$ttc = $_GET['pow1'];
		$penanggungjwb = $_GET['pow2'];
		$judul = $_GET['pow3'];
		$jabatan = $_GET['pow4'];
		$nrp = $_GET['pow5'];
		//echo $judul."yayayaya";die();
		if($ttc == "a"){
			$yoa1 = "";
		}else{
			$yoa1 = $ttc;
		}
		$data['ttcw'] = $yoa1;
		
		if($penanggungjwb == "b"){
			$yoa2 = "";
		}else{
			$yoa2 = $penanggungjwb;
		}
		$data['penaw'] = $yoa2;
		
		if($judul == "c"){
			$jop = date('Y');
			$yoa3 = "DATA TANAH TAHUN ".$jop;
		}else{
			$yoa3 = $judul;
		}
		$data['judulw'] = $yoa3;
		
		if($jabatan == "d"){
			$yoa4 = "";
		}else{
			$yoa4 = $jabatan;
		}
		$data['jabatanw'] = $yoa4;
		
		if($nrp == "MPDF"){
			$yoa5 = "";
		}else{
			$yoa5 = $nrp;
		}
		$data['nrpw'] = $yoa5;
		$queryzz = $this->db->query("SELECT 
										*
										FROM kotama
										

                    

                    

                    ")->result();
					
				
					$data['datanyax'] = $queryzz;
		$this->load->view('report/view_aset',$data);
	
	}
	
	public function preview_aset2(){
		$jela = $_GET['jela'];
		$kotamaw = $_GET['powkot'];
		$ttc = $_GET['pow1'];
		$penanggungjwb = $_GET['pow2'];
		$judul = $_GET['pow3'];
		$jabatan = $_GET['pow4'];
		$nrp = $_GET['pow5'];
		//echo $judul."yayayaya";die();
		$querypas = $this->db->query("SELECT 
					*
				FROM 
					kotama
				WHERE
					id='".$kotamaw."' 
					
					")->result();
					
		foreach ($querypas as $rpk)
				{
				$nama_kot = $rpk->kotama;		
				}	
		if($ttc == "a"){
			$yoa1 = "";
		}else{
			$yoa1 = $ttc;
		}
		$data['ttcw'] = $yoa1;
		
		if($penanggungjwb == "b"){
			$yoa2 = "";
		}else{
			$yoa2 = $penanggungjwb;
		}
		$data['penaw'] = $yoa2;
		
		if($judul == "c"){
			$jop = date('Y');
			$yoa3 = "DATA TANAH KOTAMA ".$nama_kot." TAHUN ".$jop;
		}else{
			$yoa3 = $judul;
		}
		$data['judulw'] = $yoa3;
		
		if($jabatan == "d"){
			$yoa4 = "";
		}else{
			$yoa4 = $jabatan;
		}
		$data['jabatanw'] = $yoa4;
		
		if($nrp == "MPDF"){
			$yoa5 = "";
		}else{
			$yoa5 = $nrp;
		}
		$data['nrpw'] = $yoa5;
		
		$queryzz = $this->db->query("SELECT 
										*
										FROM kotama
									WHERE
										id='$kotamaw'

                    

                    

                    ")->result();
					
				
					$data['datanyax'] = $queryzz;
		$this->load->view('report/view_aset2',$data);
	
	}
	
	
	public function preview_aset3(){
		$jela = $_GET['jela'];
		$kotamaw = $_GET['powkot'];
		$lanudw = $_GET['powkot2'];
		$ttc = $_GET['pow1'];
		$penanggungjwb = $_GET['pow2'];
		$judul = $_GET['pow3'];
		$jabatan = $_GET['pow4'];
		$nrp = $_GET['pow5'];
		//echo $judul."yayayaya";die();
		$querypas = $this->db->query("SELECT 
					*
				FROM 
					m_lanud
				WHERE
					id='".$lanudw."' 
					
					")->result();
					
		foreach ($querypas as $rpk)
				{
				$nama_lad = $rpk->lanud;		
				}	
		//$data['nama_lad'] = $nama_lad;
		$data['halolanud'] = $lanudw;
		if($ttc == "a"){
			$yoa1 = "";
		}else{
			$yoa1 = $ttc;
		}
		$data['ttcw'] = $yoa1;
		
		if($penanggungjwb == "b"){
			$yoa2 = "";
		}else{
			$yoa2 = $penanggungjwb;
		}
		$data['penaw'] = $yoa2;
		
		if($judul == "c"){
			$jop = date('Y');
			$yoa3 = "DATA TANAH ".$nama_lad." TAHUN ".$jop ;
		}else{
			$yoa3 = $judul;
		}
		$data['judulw'] = $yoa3;
		
		if($jabatan == "d"){
			$yoa4 = "";
		}else{
			$yoa4 = $jabatan;
		}
		$data['jabatanw'] = $yoa4;
		
		if($nrp == "MPDF"){
			$yoa5 = "";
		}else{
			$yoa5 = $nrp;
		}
		$data['nrpw'] = $yoa5;
		
		$queryzz = $this->db->query("SELECT 
										*
										FROM kotama
									WHERE
										id='$kotamaw'

                    

                    

                    ")->result();
					
				
					$data['datanyax'] = $queryzz;
		$this->load->view('report/view_aset3',$data);
	
	}
	
/////////////////////////////////////////////////////////////// DATA TANAH PERMASALAHAN////////////////////////////////////////////////////////////////////
public function data_tanah_permasalahan(){
		
		$data['title'] = "Data Tanah Permasalahan";
		$query2 = $this->db->query("SELECT 

                   * FROM kotama

                    

                    

                    ")->result();

        $data['kotama'] = $query2;
		
		$query3 = $this->db->query("SELECT 

                   * FROM m_lanud

                    

                    

                    ")->result();

        $data['lanud'] = $query3;
    	$this->load->view('report/indextanahpermasalahan',$data);
		
	}
	
	public function preview_permasalahan(){
		$jela = $_GET['jela'];
		$ttc = $_GET['pow1'];
		$penanggungjwb = $_GET['pow2'];
		$judul = $_GET['pow3'];
		$jabatan = $_GET['pow4'];
		$nrp = $_GET['pow5'];
		//echo $judul."yayayaya";die();
		if($ttc == "a"){
			$yoa1 = "";
		}else{
			$yoa1 = $ttc;
		}
		$data['ttcw'] = $yoa1;
		
		if($penanggungjwb == "b"){
			$yoa2 = "";
		}else{
			$yoa2 = $penanggungjwb;
		}
		$data['penaw'] = $yoa2;
		
		if($judul == "c"){
			$jop = date('Y');
			$yoa3 = "DATA TANAH PERMASALAHAN TAHUN ".$jop;
		}else{
			$yoa3 = $judul;
		}
		$data['judulw'] = $yoa3;
		
		if($jabatan == "d"){
			$yoa4 = "";
		}else{
			$yoa4 = $jabatan;
		}
		$data['jabatanw'] = $yoa4;
		
		if($nrp == "MPDF"){
			$yoa5 = "";
		}else{
			$yoa5 = $nrp;
		}
		$data['nrpw'] = $yoa5;
		$queryzz = $this->db->query("SELECT 
										*
										FROM kotama
										

                    

                    

                    ")->result();
					
				
					$data['datanyax'] = $queryzz;
		$this->load->view('report/view_permasalahan',$data);
	
	}
	
	
	public function preview_permasalahan2(){
		
		$jela = $_GET['jela'];
		$ttc = $_GET['pow1'];
		$kotamaw = $_GET['powkot'];
		$penanggungjwb = $_GET['pow2'];
		$judul = $_GET['pow3'];
		$jabatan = $_GET['pow4'];
		$nrp = $_GET['pow5'];
		
		$querypas = $this->db->query("SELECT 
					*
				FROM 
					kotama
				WHERE
					id='".$kotamaw."' 
					
					")->result();
					
		foreach ($querypas as $rpk)
				{
				$nama_kot = $rpk->kotama;		
				}	
		//echo $judul."yayayaya";die();
		if($ttc == "a"){
			$yoa1 = "";
		}else{
			$yoa1 = $ttc;
		}
		$data['ttcw'] = $yoa1;
		
		if($penanggungjwb == "b"){
			$yoa2 = "";
		}else{
			$yoa2 = $penanggungjwb;
		}
		$data['penaw'] = $yoa2;
		
		if($judul == "c"){
			$jop = date('Y');
			$yoa3 = "DATA TANAH PERMASALAHAN KOTAMA ".$nama_kot." TAHUN ".$jop;
		}else{
			$yoa3 = $judul;
		}
		$data['judulw'] = $yoa3;
		
		if($jabatan == "d"){
			$yoa4 = "";
		}else{
			$yoa4 = $jabatan;
		}
		$data['jabatanw'] = $yoa4;
		
		if($nrp == "MPDF"){
			$yoa5 = "";
		}else{
			$yoa5 = $nrp;
		}
		$data['nrpw'] = $yoa5;
		$queryzz = $this->db->query("SELECT 
										*
										FROM kotama
									WHERE
										id='$kotamaw'

                    

                    

                    ")->result();
					
				
					$data['datanyax'] = $queryzz;
		$this->load->view('report/view_permasalahan2',$data);
	
	}
	
	
	public function preview_permasalahan3(){
		$jela = $_GET['jela'];
		$kotamaw = $_GET['powkot'];
		$lanudw = $_GET['powkot2'];
		$ttc = $_GET['pow1'];
		$penanggungjwb = $_GET['pow2'];
		$judul = $_GET['pow3'];
		$jabatan = $_GET['pow4'];
		$nrp = $_GET['pow5'];
		//echo $judul."yayayaya";die();
		$querypas = $this->db->query("SELECT 
					*
				FROM 
					m_lanud
				WHERE
					id='".$lanudw."' 
					
					")->result();
					
		foreach ($querypas as $rpk)
				{
				$nama_lad = $rpk->lanud;		
				}	
		//$data['nama_lad'] = $nama_lad;
		$data['halolanud'] = $lanudw;
		if($ttc == "a"){
			$yoa1 = "";
		}else{
			$yoa1 = $ttc;
		}
		$data['ttcw'] = $yoa1;
		
		if($penanggungjwb == "b"){
			$yoa2 = "";
		}else{
			$yoa2 = $penanggungjwb;
		}
		$data['penaw'] = $yoa2;
		
		if($judul == "c"){
			$jop = date('Y');
			$yoa3 = "DATA TANAH ".$nama_lad." TAHUN ".$jop ;
		}else{
			$yoa3 = $judul;
		}
		$data['judulw'] = $yoa3;
		
		if($jabatan == "d"){
			$yoa4 = "";
		}else{
			$yoa4 = $jabatan;
		}
		$data['jabatanw'] = $yoa4;
		
		if($nrp == "MPDF"){
			$yoa5 = "";
		}else{
			$yoa5 = $nrp;
		}
		$data['nrpw'] = $yoa5;
		
		$queryzz = $this->db->query("SELECT 
										*
										FROM kotama
									WHERE
										id='$kotamaw'

                    

                    

                    ")->result();
					
				
					$data['datanyax'] = $queryzz;
		$this->load->view('report/view_permasalahan3',$data);
	
	}
	
	
	/////////////////////////////////////////////////////////////// DATA TANAH PERSATKER////////////////////////////////////////////////////////////////////
public function data_tanah_per2(){
		
		$data['title'] = "Data Tanah Per Satker";
		$query2 = $this->db->query("SELECT 

                   * FROM kotama

                    

                    

                    ")->result();

        $data['kotama'] = $query2;
		
		$query3 = $this->db->query("SELECT 

                   * FROM m_lanud

                    

                    

                    ")->result();

        $data['lanud'] = $query3;
    	$this->load->view('report/indextanahper2',$data);
		
	}
	
	public function preview_tanper2(){
		
		$kotamaw = $_GET['powkot'];
		$lanudw = $_GET['powkot2'];
		$ttc = $_GET['pow1'];
		$penanggungjwb = $_GET['pow2'];
		$judul = $_GET['pow3'];
		$jabatan = $_GET['pow4'];
		$nrp = $_GET['pow5'];
		//echo $judul."yayayaya";die();
		$querypas = $this->db->query("SELECT 
					*
				FROM 
					m_lanud
				WHERE
					id='".$lanudw."' 
					
					")->result();
					
		foreach ($querypas as $rpk)
				{
				$nama_lad = $rpk->lanud;		
				}	
		//$data['nama_lad'] = $nama_lad;
		$data['halolanud'] = $lanudw;
		if($ttc == "a"){
			$yoa1 = "";
		}else{
			$yoa1 = $ttc;
		}
		$data['ttcw'] = $yoa1;
		
		if($penanggungjwb == "b"){
			$yoa2 = "";
		}else{
			$yoa2 = $penanggungjwb;
		}
		$data['penaw'] = $yoa2;
		
		if($judul == "c"){
			$jop = date('Y');
			$yoa3 = "DATA TANAH ".$nama_lad." TAHUN ".$jop ;
		}else{
			$yoa3 = $judul;
		}
		$data['judulw'] = $yoa3;
		
		if($jabatan == "d"){
			$yoa4 = "";
		}else{
			$yoa4 = $jabatan;
		}
		$data['jabatanw'] = $yoa4;
		
		if($nrp == "MPDF"){
			$yoa5 = "";
		}else{
			$yoa5 = $nrp;
		}
		$data['nrpw'] = $yoa5;
		
		$queryzz = $this->db->query("SELECT 
										*
										FROM kotama
									WHERE
										id='$kotamaw'

                    

                    

                    ")->result();
					
				
					$data['datanyax'] = $queryzz;
		$this->load->view('report/intaper2',$data);
	
	}
	
	
	public function data_asetinventaris(){
		$data['title'] = "Data Inventaris Tanah";
		$data['kotama'] = $this->db->query("select id,kotama from kotama")->result();
		
		$this->load->view('report/data_inventaris',$data);
	}
	
	public function satker_from_kotama(){
		$q = $this->db->query("select id,lanud from m_lanud where kotama='".$_POST['val']."'")->result();
		
		echo json_encode(array("satker"=>$q));
	}
	
	public function preview_inventaris(){
		//echo $_POST['jenis']." * ".$_POST['kotama']." * ".$_POST['satker'];die();
		/*
		$q = $this->db->query("select a.jenis,sum(cast(a.luas as bigint)) as luas,c.id as id_lanud,c.lanud,
			d.id as id_kotama,d.kotama from detil_dataaset a,data_aset b,m_lanud c,kotama d where a.dataaset=b.id and
			c.id=b.lanud and d.id=c.kotama group by a.jenis,c.lanud,d.kotama,c.id,d.id order by d.kotama,c.lanud")->result();
		*/
		
		$q_add_kotama = "";
		if($_POST['jenis'] != '1'){
			$q_add_kotama = " where id='".$_POST['kotama']."'";
		}
		
		$q_add_lanud = "";
		if($_POST['jenis'] == '3'){
			$q_add_lanud = " and b.id='".$_POST['satker']."'";
		}
			
		$q_per_lanud = $this->db->query("select a.id as id_kotama,a.kotama,b.id as id_lanud,b.lanud from kotama a,m_lanud b
			where a.id=b.kotama".$q_add_lanud." order by a.id,b.id")->result();
			
		$q_kotama = $this->db->query("select id,kotama from kotama".$q_add_kotama)->result();
		
		$q_detail = $this->db->query("select a.jenis,a.luas,b.lanud from detil_dataaset a,data_aset b where a.dataaset=b.id")->result();
		
		echo json_encode(array(
			//"info"=>$q,
			"per_lanud"=>$q_per_lanud,
			"kotama"=>$q_kotama,
			"detail"=>$q_detail
		));
	}
	
	public function for_data(){
		//echo "select a.luas,a.jenis from detil_dataaset a,data_aset b where a.dataaset=b.id and
			//b.lanud='".$_POST['id']."'";
		$q = $this->db->query("select a.luas,a.jenis from detil_dataaset a,data_aset b where a.dataaset=b.id and
			b.lanud='".$_POST['id']."'")->result();
			
		echo json_encode(array("forx"=>$q));
	}
	
	public function data_asetperbidang(){
		$data['title'] = "Data Inventaris Tanah";
		$data['kotama'] = $this->db->query("select id,kotama from kotama")->result();
		
		$this->load->view('report/data_per_bidang',$data);
	}
	
	public function preview_per_bidang(){
		$q_add_lanud = "";
		if($_POST['jenis'] == '3'){
			$q_add_lanud = " and id='".$_POST['satker']."'";
		}
		
		$q_lanud = $this->db->query("select id,lanud from m_lanud where kotama='".$_POST['kotama']."'".$q_add_lanud)->result();
		
		$q_bidang = $this->db->query("select a.jenis,a.luas,b.lanud from detil_dataaset a,data_aset b
			where a.dataaset=b.id")->result();
		
		echo json_encode(array("lanud"=>$q_lanud,"bidang"=>$q_bidang));
	}
	

	
	
}

?>