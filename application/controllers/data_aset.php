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
		$this->load->library('Excel_generator');
		

    }
	
	
	public function index($lanud_id){
		$lanud_id = substr($lanud_id,9,strlen($lanud_id));
		//echo $lanud_id."z";die();
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
		}else if($lanud_id != null && is_numeric($lanud_id)){
			
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
        $data['link_data_aset'] = 'class="active"';
        $data['link_data_1'] = 'class="start active open"';
		
		$data['title'] = 'Data Aset';
		$data['judul'] = 'Data Aset - Index';
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
				$kutkot = $ruk->kotama;
				$nama_lanud = $ruk->lanud;				
				}	
		
		$queryqq = $this->db->query("SELECT 
					*
				FROM 
					kotama
				WHERE
					id='".$kutkot."'
					
					")->result();
					
		foreach ($queryqq as $ruk)
				{
				$nama_kot = $ruk->kotama;				
				}	
				
		$data['nama_lanud'] = $nama_lanud;
		$data['lanlad'] = $lanud_id;
		$data['kutkot'] = $kutkot;
		$data['nama_kot'] = $nama_kot;
		$querydap = $this->db->query("SELECT 
					*
				FROM 
					
					dasar_perolehan 
				")->result();
		$data['datadap']=$querydap;
		
		$query3 = $this->db->query("SELECT 
					a.*,a.id as iddaas
				FROM 
					data_aset a
				WHERE 
					a.lanud='".$lanud_id."' 
				order by a.id desc
				")->result();
		$data['datanya']=$query3;
		
		$this->load->view('data_aset/view',$data);
		}
		else{
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
        $data['link_data_aset'] = 'class="active"';
        $data['link_data_1'] = 'class="start active open"';
		
		$data['title'] = 'Data Aset';
		$data['judul'] = 'Data Aset - Index';
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
				$kutkot = $ruk->kotama;
				$nama_lanud = $ruk->lanud;				
				}	
		
		$queryqq = $this->db->query("SELECT 
					*
				FROM 
					kotama
				WHERE
					id='".$kutkot."'
					
					")->result();
					
		foreach ($queryqq as $ruk)
				{
				$nama_kot = $ruk->kotama;				
				}	
				
		$data['nama_lanud'] = $nama_lanud;
		$data['lanlad'] = $lanud_id;
		$data['kutkot'] = $kutkot;
		$data['nama_kot'] = $nama_kot;
				
		$querydap = $this->db->query("SELECT 
					*
				FROM 
					
					dasar_perolehan 
				")->result();
		$data['datadap']=$querydap;
		
		$query3 = $this->db->query("SELECT 
					a.*,a.id as iddaas
				FROM 
					data_aset a
				WHERE 
					a.lanud='".$lanud_id."' 
				order by a.id desc
				")->result();
		$data['datanya']=$query3;
		
		$this->load->view('data_aset/view',$data);
		}else{
			redirect('c_kesatuan/lanud/'.$kotamaz, 'refresh');
		}
					
					
				}
				else if($groupz == 3){
					$data['link_aset_tanah'] = 'open';
        $data['link_data_aset'] = 'class="active"';
        $data['link_data_1'] = 'class="start active open"';
		
		$data['title'] = 'Data Aset';
		$data['judul'] = 'Data Aset - Index';
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
				$kutkot = $ruk->kotama;
				$nama_lanud = $ruk->lanud;				
				}	
		
		$queryqq = $this->db->query("SELECT 
					*
				FROM 
					kotama
				WHERE
					id='".$kutkot."'
					
					")->result();
					
		foreach ($queryqq as $ruk)
				{
				$nama_kot = $ruk->kotama;				
				}	
				
		$data['nama_lanud'] = $nama_lanud;
		$data['lanlad'] = $lanud_id;
		$data['kutkot'] = $kutkot;
		$data['nama_kot'] = $nama_kot;
				
		$querydap = $this->db->query("SELECT 
					*
				FROM 
					
					dasar_perolehan 
				")->result();
		$data['datadap']=$querydap;
		
		$query3 = $this->db->query("SELECT 
					a.*,a.id as iddaas
				FROM 
					data_aset a
				WHERE 
					a.lanud='".$lanud_id."' 
				order by a.id desc
				")->result();
		$data['datanya']=$query3;
		
		$this->load->view('data_aset/view',$data);
					
				}
		}else{
			//echo "ho o ya o yao ya bongkar";die();
			redirect('c_kesatuan', 'refresh');
		}
	}
	
	public function bg(){
		//echo "select bg from m_lanud where id='".substr($_POST['id_lanud'],9,strlen($_POST['id_lanud']))."'";die();
		$q_bg_lanud = $this->db->query("select bg from m_lanud where id='".substr($_POST['id_lanud'],9,strlen($_POST['id_lanud']))."'")->result();
		$bg = "empty";
		foreach($q_bg_lanud as $dataBgLanud){
			$bg = $dataBgLanud->bg;
		}
		
		echo json_encode(array("img"=>$bg));
	}
	
	public function tambah($lanud_id){
		$lanud_id = substr($lanud_id,9,strlen($lanud_id));
    	$data['link_aset_tanah'] = 'open';
        $data['link_data_aset'] = 'class="active"';
        $data['link_data_1'] = 'class="start active open"';
		$data['title'] = "Tambah Data Aset";
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
		$this->load->view('data_aset/tambah',$data);
		
    }
	
	public function getkabupaten($provinsi='') 
    {   
		//echo $provinsi."asasasas";die();
		$query = $this->db->query("SELECT 
					*
				FROM 
					kabupaten
				WHERE
					provinsi='$provinsi'
				")->result();
		$data['kabupaten'] = $query;
		$this->load->view('data_aset/kabupaten',$data);
	
	}
	
	public function getkecamatan($kabupaten='') 
    {   
		//echo $kabupaten."asasasas";die();
		$query = $this->db->query("SELECT 
					*
				FROM 
					kecamatan
				WHERE
					kabupaten='$kabupaten'
				")->result();
		$data['kecamatan'] = $query;
		$this->load->view('data_aset/kecamatan',$data);
	
	}
	
	public function getkelurahan($kecamatan='') 
    {   
		//echo $kabupaten."asasasas";die();
		$query = $this->db->query("SELECT 
					*
				FROM 
					kelurahan
				WHERE
					kecamatan='$kecamatan'
				")->result();
		$data['kelurahan'] = $query;
		$this->load->view('data_aset/kelurahan',$data);
	
	}
	
	public function saveflag($id){
		
		//echo $id."asdada";die();
		$userz = $this->session->userdata('user_name');
		$this->db->query("update lanud_flag set lanudnya='$id' where username='$userz'");
		redirect('data_aset', 'refresh');
		
	}
	
	public function simpan($lanud_id){
    	$img_error2 = '0';
		$fill_img_count2 = '0';
		//if(isset($_POST['submit']))
		//{
		$img_count3 = count($_FILES['kib']);
		
				for ($i=0 ; $i<=$img_count3 ; $i++)
				{
					
					if (isset($_FILES['kib']) && !empty($_FILES['kib']['tmp_name'][$i]))
					{
						$fill_img_count2++;
						$namafile = $_FILES['kib']['name'][$i];
						move_uploaded_file($_FILES['kib']['tmp_name'][$i],BASEPATH."/../assets/upload/kib/".$namafile);
					}
					
				
					
					
				}
		$kibkib = implode(',', $_FILES['kib']['name']);
				
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
						move_uploaded_file($_FILES['userfile']['tmp_name'][$i],BASEPATH."/../assets/upload/denah/".$namafile);
					}
					
				
					
					
				}
				$namanama = implode(',', $_FILES['userfile']['name']);
				//echo $namanama."asasasa";die();
				if (empty($_POST['nilai'])){
					$jyoz = 0;
				}else{
					$jyoz = $_POST['nilai'];
				}
				$zzzo= preg_replace("/[^0-9]/", "", $jyoz);
				//echo "insert into data_aset (lanud,ikn,simak,lokasi,luas,dasar_perolehan,tahun_perolehan,nilai,keterangan,denah,provinsi,kabupaten,kecamatan,kelurahan,status_tanah,kib) values ('".$_POST['lanud']."','".$_POST['ikn']."','".$_POST['simak']."','".$_POST['lokasi']."','".$_POST['luas']."','".$_POST['dasar_perolehan']."','".$_POST['tahun_perolehan']."','".$zzzo."','".$_POST['keterangan']."','".$namanama."','".$_POST['provinsi']."','".$_POST['kabupaten']."','".$_POST['kecamatan']."','".$_POST['kelurahan']."','".$_POST['status_tanah']."','".$kibkib."')";die();
				//echo "insert into data_aset (lanud,ikn,simak,lokasi,luas,dasar_perolehan,tahun_perolehan,nilai,keterangan,denah) values ('".$_POST['lanud']."','".$_POST['ikn']."','".$_POST['simak']."','".$_POST['lokasi']."','".$_POST['luas']."','".$_POST['dasar_perolehan']."','".$_POST['tahun_perolehan']."','".$_POST['nilai']."','".$_POST['keterangan']."','".$namanama."')";die();
				$this->db->query("insert into data_aset (lanud,ikn,simak,lokasi,luas,dasar_perolehan,tahun_perolehan,nilai,keterangan,denah,provinsi,kabupaten,kecamatan,kelurahan,status_tanah,kib,peruntukan,keadaan_tanah,batas_utara,batas_timur,batas_selatan,batas_barat) values ('".$_POST['lanud']."','".$_POST['ikn']."','".$_POST['simak']."','".$_POST['lokasi']."','".$_POST['luas']."','".$_POST['dasar_perolehan']."','".$_POST['tahun_perolehan']."','".$zzzo."','".$_POST['keterangan']."','".$namanama."','".$_POST['provinsi']."','".$_POST['kabupaten']."','".$_POST['kecamatan']."','".$_POST['kelurahan']."','".$_POST['status_tanah']."','".$kibkib."','".$_POST['peruntukan']."','".$_POST['keadaan_tanah']."','".$_POST['batas_utara']."','".$_POST['batas_timur']."','".$_POST['batas_selatan']."','".$_POST['batas_barat']."')");
				$query = $this->db->query("SELECT 
										MAX(id) as maxd
										FROM data_aset

                    

                    

                    ")->result();
					
				foreach ($query as $ris)
					{
						$maxd = $ris->maxd;
					}
				
				if(empty($_POST['no_sertifikat']) && empty($_POST['sert_luaz'])) {
					$this->db->query("insert into detil_dataaset (jenis,luas,dataaset) values ('2','".$_POST['sert_luas']."','".$maxd."')");
					
				}else{
				
				$img_count2 = count($_POST['sert_luaz']);
				//echo $img_count."sdfsdfs";die();  
				for ($k=0 ; $k<=$img_count2 ; $k++)
				{
					if (!empty($_POST['sert_luaz'][$k]))
					{
					$this->db->query("insert into detil_dataaset (jenis,no_sertifikat,luas,dataaset) values ('1','".$_POST['no_sertifikat'][$k]."','".$_POST['sert_luaz'][$k]."','".$maxd."')");
					}
				}
				$qwp = $_POST['sert_luas'];
				
				$queryll = $this->db->query("SELECT 
										sum(cast(luas as bigint)) as sumlu
										FROM detil_dataaset
										where 
										dataaset = '$maxd' and
										jenis = '1'

                    

                    

                    ")->result();
					
				foreach ($queryll as $rbs)
					{
						$sumlu = $rbs->sumlu;
					}
				if($qwp != 0){
				$this->db->query("insert into detil_dataaset (jenis,luas,dataaset) values ('2','".$_POST['sert_luas']."','".$maxd."')");
				}
				}
			redirect('data_aset/index/'.$lanud_id, 'refresh');
    }
	
	
	
	public function hapus($id){
    	$x = explode("_",$id);
		$this->db->query("delete from data_aset where id='".$x[0]."'");
		$this->db->query("delete from detil_dataaset where dataaset='".$x[0]."'");
	
				
			redirect('data_aset/index/'.$x[1]."_".$x[2]."_".$x[3], 'refresh');
    }
	
	public function Edit($id){
		$x = explode("_",$id);
    	$data['link_aset_tanah'] = 'open';
        $data['link_data_aset'] = 'class="active"';
        $data['link_data_1'] = 'class="start active open"';
		$data['title'] = "Edit Data Aset";
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
					dasar_perolehan
				
				")->result();
		$data['daper']=$query;
		
		$query4 = $this->db->query("SELECT 
					*
				FROM 
					data_aset
				where id='".$x[0]."'
				
				")->result();
		$data['datzz']=$query4;
		$query5 = $this->db->query("SELECT 
					*
				FROM 
					detil_dataaset
				where dataaset='".$x[0]."'
				
				")->result();
		$data['detdat']=$query5;
		
		$queryjoker = $this->db->query("SELECT 
					count(*) as jokerz
				FROM 
					detil_dataaset
				where dataaset='".$x[0]."' and 
				jenis = '2'
					
					")->result();
					
		foreach ($queryjoker as $rpk)
				{
				$kdsdua = $rpk->jokerz;
				
				}	
				//echo $id_lanud."zzzzzzz";die();
		$data['pastidua'] = $kdsdua;
		
		
		$query6 = $this->db->query("SELECT 
					*
				FROM 
					status_tanah
				
				")->result();
		$data['statan']=$query6;
		$query7 = $this->db->query("SELECT 
					*
				FROM 
					provinsi
				
				")->result();
		$data['provinsi']=$query7;
		$query8 = $this->db->query("SELECT 
					*
				FROM 
					data_aset
				WHERE
					id='".$x[0]."'
					
					")->result();
					
		foreach ($query8 as $rpw)
				{
				$provinsi = $rpw->provinsi;
				$kabupaten = $rpw->kabupaten;
				$kecamatan = $rpw->kecamatan;
				$kelurahan = $rpw->kelurahan;
				}
		$query9 = $this->db->query("SELECT 
					*
				FROM 
					kabupaten
				WHERE
					provinsi='".$provinsi."'
				
				")->result();
		$data['kabupaten']=$query9;
		$query10 = $this->db->query("SELECT 
					*
				FROM 
					kecamatan
				WHERE
					kabupaten='".$kabupaten."'
				
				")->result();
		$data['kecamatan']=$query10;
		$query11 = $this->db->query("SELECT 
					*
				FROM 
					kelurahan
				WHERE
					kecamatan='".$kecamatan."'
				
				")->result();
		$data['kelurahan']=$query11;
		
    	$this->load->view('data_aset/edit',$data);
    }
	
	
	public function detil($id){
		$x = explode("_",$id);
    	$data['link_aset_tanah'] = 'open';
        $data['link_data_aset'] = 'class="active"';
        $data['link_data_1'] = 'class="start active open"';
		$data['title'] = "Edit Data Aset";
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
					dasar_perolehan
				
				")->result();
		$data['daper']=$query;
		
		$query4 = $this->db->query("SELECT 
					*
				FROM 
					data_aset
				where id='".$x[0]."'
				
				")->result();
		$data['datzz']=$query4;
		$query5 = $this->db->query("SELECT 
					*
				FROM 
					detil_dataaset
				where dataaset='".$x[0]."'
				
				")->result();
		$data['detdat']=$query5;
    	$this->load->view('data_aset/detil',$data);
    }
	
	
	public function update($lanud_id){
		$idupdate = $_POST['idupdate'];
		$x = explode("_",$lanud_id);
		$linknyap = $x[1]."_".$x[2]."_".$x[3];
		///////////////////////DETIL DATA ASET///////////////////////////////////////////////
		
		$x = explode("_",$lanud_id);
		$lanudtea = $x[0];
		//echo $lanudtea."asdad";die();
		$this->db->query("delete from detil_dataaset where dataaset = '".$lanudtea."'");
				
				$img_count2 = count($_POST['sert_luaz']);
				//echo $img_count."sdfsdfs";die();  
				for ($k=0 ; $k<=$img_count2 ; $k++)
				{
					if (!empty($_POST['sert_luaz'][$k]))
					{
					$this->db->query("insert into detil_dataaset (jenis,no_sertifikat,luas,dataaset) values ('1','".$_POST['no_sertifikat'][$k]."','".$_POST['sert_luaz'][$k]."','".$lanudtea."')");
					}
				}
		$ziop = $_POST['sert_luas'];	
		if($ziop != 0 || !empty($ziop)) {
		$this->db->query("insert into detil_dataaset (jenis,luas,dataaset) values ('2','".$_POST['sert_luas']."','".$lanudtea."')");
		}
		
		/////////////////////////////////////////////////////////////////////////////////////


		////////////////////////////KIB//////////////////////////////////////////////////////
		if(empty($_POST['asalkib'])){
			$card1 = '';
		}else{
		$gambarlama = count($_POST['asalkib']);
			$card1 = '';
				for ($h=0 ; $h<$gambarlama ; $h++)
				{
					if (!empty($_POST['asalkib'][$h]))
					{
					$dergbr = $_POST['asalkib'][$h];
					$card1 = $card1."".$dergbr.",";
					}
				}
		}
		//echo $card1;die();
		if(empty($_FILES['kib'])){
			$hiang = strlen($card1);
			$huaz = $hiang - 1;
			$jadikib = substr($card1,0,$huaz);
		
		}else{
			$img_error2 = '0';
			$fill_img_count2 = '0';
			$img_count3 = count($_FILES['kib']);
			
					for ($i=0 ; $i<=$img_count3 ; $i++)
					{
						
						if (isset($_FILES['kib']) && !empty($_FILES['kib']['tmp_name'][$i]))
						{
							$fill_img_count2++;
							$namafile = $_FILES['kib']['name'][$i];
							move_uploaded_file($_FILES['kib']['tmp_name'][$i],BASEPATH."/../assets/upload/kib/".$namafile);
						}
						
					
						
						
					}
			$kibkib = implode(',', $_FILES['kib']['name']);
					if ($kibkib == null) {
						//echo "kosongasdasd";die();
						$hiang = strlen($card1);
						$huaz = $hiang - 1;
						
						$jadikib = substr($card1,0,$huaz);
						//echo $jadigambar;die();
					}else{
						$jadikib = $card1."".$kibkib;
					}
			
		}
		
		/////////////////////////////////////////////////////////////////////////////////////////////
		
		////////////////////////////DENAH///////////////////////////////////////////////////////////
		if(empty($_POST['asaldenah'])){
			$card2 = '';
		}else{
		$gambarlama2 = count($_POST['asaldenah']);
			$card2 = '';
				for ($p=0 ; $p<$gambarlama2 ; $p++)
				{
					if (!empty($_POST['asaldenah'][$p]))
					{
					$dergbr2 = $_POST['asaldenah'][$p];
					$card2 = $card2."".$dergbr2.",";
					}
				}
		}
		//echo $card2;die();
		if(empty($_FILES['userfile'])){
			$hiang2 = strlen($card2);
			$huaz2 = $hiang2 - 1;
			$jadidenah = substr($card2,0,$huaz2);
		
		}else{
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
							move_uploaded_file($_FILES['userfile']['tmp_name'][$i],BASEPATH."/../assets/upload/denah/".$namafile);
						}
						
					
						
						
					}
				$namanama = implode(',', $_FILES['userfile']['name']);
					if ($namanama == null) {
						//echo "kosongasdasd";die();
						$hiang2 = strlen($card2);
						$huaz2 = $hiang2 - 1;
						
						$jadidenah = substr($card2,0,$huaz2);
						//echo $jadigambar;die();
					}else{
						$jadidenah = $card2."".$namanama;
					}
			
		}
		
		//echo $jadidenah;die();
		$zzzo= preg_replace("/[^0-9]/", "", $_POST['nilai']);
		//echo "update data_aset set kib='".$jadikib."', denah='".$jadidenah."', ikn='".$_POST['ikn']."', simak='".$_POST['simak']."', lokasi='".$_POST['lokasi']."', luas='".$_POST['luas']."', status_tanah='".$_POST['status_tanah']."', dasar_perolehan='".$_POST['dasar_perolehan']."', tahun_perolehan='".$_POST['tahun_perolehan']."', nilai='".$zzzo."', keterangan='".$_POST['keterangan']."', provinsi='".$_POST['provinsi']."', kabupaten='".$_POST['kabupaten']."', kecamatan='".$_POST['kecamatan']."', kelurahan='".$_POST['kelurahan']."' where id='".$idupdate."'";die();
		$this->db->query("update data_aset set kib='".$jadikib."', denah='".$jadidenah."', ikn='".$_POST['ikn']."', simak='".$_POST['simak']."', lokasi='".$_POST['lokasi']."', luas='".$_POST['luas']."', status_tanah='".$_POST['status_tanah']."', dasar_perolehan='".$_POST['dasar_perolehan']."', tahun_perolehan='".$_POST['tahun_perolehan']."', nilai='".$zzzo."', keterangan='".$_POST['keterangan']."', provinsi='".$_POST['provinsi']."', kabupaten='".$_POST['kabupaten']."', kecamatan='".$_POST['kecamatan']."', kelurahan='".$_POST['kelurahan']."', peruntukan='".$_POST['peruntukan']."',keadaan_tanah='".$_POST['keadaan_tanah']."',batas_utara='".$_POST['batas_utara']."',batas_timur='".$_POST['batas_timur']."',batas_selatan='".$_POST['batas_selatan']."',batas_barat='".$_POST['batas_barat']."' where id='".$idupdate."'");
			redirect('data_aset/index/'.$linknyap, 'refresh');
    }
	
	public function denah($lanud_id){
		$data['title'] = "Denah Data Aset";
		$x = explode("_",$lanud_id);
		//echo $x[0];die();
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
		$data['nama_lanud'] = $nama_lanud;
		$query = $this->db->query("SELECT 
					*
				FROM 
					data_aset
				where id='".$x[0]."'
				
				")->result();
		$data['dataper']=$query;
		$this->load->view('data_aset/denah',$data);
	}
	public function aturcetak($lanud_id){
		$lanud_id = substr($lanud_id,9,strlen($lanud_id));
    	$data['link_aset_tanah'] = 'open';
        $data['link_data_aset'] = 'class="active"';
        $data['link_data_1'] = 'class="start active open"';
		$data['title'] = "Atur Cetak Data Aset";
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
		$this->load->view('data_aset/aturcetak',$data);
		
    }
	
	public function cetakdataaset($lanud_id='',$ru2='',$ru3='',$ru4='',$ru5='',$ru6=''){
		//echo "ASDASDA".$_POST['penanggungjwb'];die();
		$lanud_id = substr($lanud_id,9,strlen($lanud_id));
		//echo $lanud_id;die();
		$data['title'] = "Cetak Data Aset";
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
		if($ru4 == "c"){
			$jop = date('Y');
			$jdbesr = strtoupper($nama_lanud);
			$yoa3 = "DATA TANAH ".$jdbesr." TAHUN ".$jop;
		}else{
			$yoa3 = str_replace("%20"," ",$ru4);
		}
		$data['judul'] = $yoa3;
		$data['footera'] = "Laporan Data Aset (".$nama_lanud.")";
		if($ru5 == "d"){
			$yoa4 = "";
		}else{
			$yoa4 = str_replace("%20"," ",$ru5);
		}
		if($ru6 == "MPDF"){
			$yoa5 = "";
		}else{
			$yoa5 = str_replace("%20"," ",$ru6);
		}
		
		$query = $this->db->query("SELECT 
					*
				FROM 
					data_aset
				WHERE
					lanud = '$lanud_id'
				")->result();
		$data['jojo']=$query;
		$data['pena']=$yoa2;
		//$data['judul']=$pegjw2;
		$data['ttc']=$yoa1;
		$data['jabatan']=$yoa4;
		$data['nrp']=$yoa5;
		$this->load->view('data_aset/cetakaset',$data);
		
	}
	public function getform(){
		$dat1 = $_GET['urinya'];
		$dat2 = $_GET['pow1'];
		$dat3 = $_GET['pow2'];
		$dat4 = $_GET['pow3'];
		$dat5 = $_GET['pow4'];
		$dat6 = $_GET['pow5'];
		
		$data['ru1']=$dat1;
		$data['ru2']=$dat2;
		$data['ru3']=$dat3;
		$data['ru4']=$dat4;
		$data['ru5']=$dat5;
		$data['ru6']=$dat6;
		
		$this->load->view('data_aset/frame',$data);
	
	}
	
	public function getword($lanud_id=''){
		//$data['judul']="asdasdasd";
		$lanud_id = substr($lanud_id,9,strlen($lanud_id));
		//echo $lanud_id;die();
		$query = $this->db->query("SELECT 
					a.*,a.id as iddaas
				FROM 
					data_aset a
				WHERE 
					a.lanud='".$lanud_id."'
				order by a.id desc
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
		$jdbesar = strtoupper($nama_lanud);
		$jop = date('Y');
		$data['judulnya']="DATA TANAH ".$jdbesar." TAHUN ".$jop;
		//$joul = $_POST['judul'];
		
		//echo $joul."asdasd";die();
		
		$this->load->view('data_aset/word',$data);
	
	}
	
	public function getexcel($lanud_id=''){
		$lanud_id = substr($lanud_id,9,strlen($lanud_id));
		//echo $lanud_id;die();
		$query = $this->db->query("SELECT 
					a.*,a.id as iddaas
				FROM 
					data_aset a
				WHERE 
					a.lanud='".$lanud_id."'
				order by a.id desc
				");
		 //$query = $this->db->query("select * from status_tanah");
        $this->excel_generator->set_query($query);
        $this->excel_generator->set_header(array('SIMAK', 'IKN', 'LOKASI', 'LUAS TANAH', 'NILAI', 'KETERANGAN'));
        $this->excel_generator->set_column(array('simak', 'ikn', 'lokasi', 'luas', 'nilai', 'keterangan'));
        $this->excel_generator->set_width(array(25, 15, 30, 15));
        $this->excel_generator->exportTo2007('Laporan Users');
	}
	
}

?>