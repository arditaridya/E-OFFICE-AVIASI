<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Alutsista_al extends CI_Controller {
	
	 public function __construct() {
        parent::__construct();
        session_start();

        if ($this->session->userdata('level') == null or $this->session->userdata('level') == '3') {
            $this->session->set_flashdata('session_expired', TRUE);
            redirect('login');
        }
		
		//$this->load->model('m_users');
		$this->load->model('m_alutsista_al');
		

    }
	
///////////////////////////////////////////////SENJATA///////////////////////////////////////////////////////////////////////////
	
	public function index(){
		
		$data['title'] = 'Senjata TNI AL - Index';
		$data['judul'] = 'Senjata TNI AL - Index';
		$query = $this->db->query("SELECT 
					a.*,
					a.id as idsenjataal,
					b.*,
					c.*,
					d.*,
					e.*
				FROM 
					senjata_al a,
					kesatuan b,
					jenis_barang c,
					fungsi_barang d,
					barang e
				WHERE
					a.id_kesatuan=b.id and
					a.id_jenis=c.id and
					a.id_fungsi=d.id and
					a.id_barang=e.id
					
					
					")->result();
		$data['model'] = $query;
		$this->load->view('alutsista_al/senjata_tni_al/index',$data);
	}
	
	public function tambahsenjata(){
		
		$data['title'] = 'Senjata TNI AL - Tambah';
		$data['judul'] = 'Senjata TNI AL - Tambah';
		$query = $this->db->query("SELECT 
					*
				FROM 
					kesatuan
				WHERE
					idinduk='3'")->result();
					
		$query2 = $this->db->query("SELECT 
					*
				FROM 
					jenis_barang
				WHERE
					idkomoditi='11'")->result();
		$data['kesatuan']=$query;
		$data['jenis']=$query2;
		$this->load->view('alutsista_al/senjata_tni_al/tambah', $data);
		
	}
	public function fungsieun($jenis=''){
		$sql = "
				SELECT 
					*
				FROM 
					fungsi_barang
				WHERE
					idjenis='$jenis'
				
					";
		//echo $sql;die();
		$query = $this->db->query("SELECT 
					*
				FROM 
					fungsi_barang
				WHERE
					idjenis='$jenis'")->result();
		$data['fungsi'] = $query;
		$this->load->view('alutsista_al/senjata_tni_al/fungsi',$data);
		//echo $query;die();
		
		
	}
	
	public function barangeun($fungsi=''){
		$doffy = $this->db->query("SELECT 
					*
				FROM 
					barang
				WHERE
					idfungsi='$fungsi'")->result();
		//echo $doffy;die();
		$data['barang'] = $doffy;
		$this->load->view('alutsista_al/senjata_tni_al/barang',$data);
	
		
	}
	
	public function simpansenjata_al(){
	$tgl=date('Y-m-d');
		$this->db->query("insert into senjata_al (id_kesatuan,id_jenis,id_fungsi,id_barang,pemakaian_sp,pemakaian_tsp,persediaan_sp,persediaan_tsp,tanggal,tanggal_input) values ('".$_POST['kesatuan']."','".$_POST['jenis']."','".$_POST['fungsi']."','".$_POST['barang']."','".$_POST['sp']."','".$_POST['tsp']."','".$_POST['psp']."','".$_POST['ptsp']."','".$_POST['tanggal']."','".$tgl."')");
		//echo $tgl;die();
	redirect('alutsista_al', 'refresh');
	}
	
	public function hapussenjata($id=''){
		$doffy = $this->db->query("DELETE 
				FROM 
					senjata_al
				WHERE
					id='$id'");
		redirect('alutsista_al', 'refresh');
	
		
	}
	
	
///////////////////////////////////////////////PESAWAT///////////////////////////////////////////////////////////////////////////
	public function indexpesawat(){
		
		$data['title'] = 'Pesawat TNI AL - index';
		$data['judul'] = 'PESAWAT TNI AL - index';
		$data['model'] = $this->m_alutsista_al->data_users();
		$this->load->view('alutsista_al/pesawat_al/index',$data);
	}
	
	public function tambahpesawat(){
		
		$data['title'] = 'Pesawat TNI AL - Tambah';
		$data['judul'] = 'PESAWAT TNI AL - Tambah';
		$query = $this->db->query("SELECT 
					*
				FROM 
					kesatuan
				WHERE
					idinduk='3'")->result();
					
		$query2 = $this->db->query("SELECT 
					*
				FROM 
					jenis_barang
				WHERE
					idkomoditi='13'")->result();
		$data['kesatuan']=$query;
		$data['jenis']=$query2;
		$this->load->view('alutsista_al/pesawat_al/tambahpesawat', $data);
		
	}
	
	public function fungsipesawat($jenis=''){
		$sql = "
				SELECT 
					*
				FROM 
					fungsi_barang
				WHERE
					jenis_barang_kode='$jenis'
				
					";
		//echo $sql;die();
		$query = $this->db->query("SELECT 
					*
				FROM 
					fungsi_barang
				WHERE
					idjenis='$jenis'")->result();
		$data['fungsi'] = $query;
		$this->load->view('alutsista_al/pesawat_al/fungsipesawat',$data);
		
		
	}
	
	public function barangpesawat($fungsi=''){
		$doffy = $this->db->query("SELECT 
					*
				FROM 
					barang
				WHERE
					fungsi_barang_kode='$fungsi'")->result();
		//echo $doffy;die();
		$data['barang'] = $doffy;
		$this->load->view('alutsista_al/pesawat_al/barangpesawat',$data);
	
		
	}
	
////////////////////////////////////////////////////////RANPUR/////////////////////////////////////////////////////////////

	public function indexranpur(){
		
		$data['title'] = 'Ranpur TNI AL - index';
		$data['judul'] = 'RANPUR TNI AL - index';
		$data['model'] = $this->m_alutsista_al->data_users();
		$this->load->view('alutsista_al/ranpur_al/index',$data);
	}
	
	public function tambahranpur(){
		
		$data['title'] = 'Ranpur TNI AL - Tambah';
		$data['judul'] = 'RANPUR TNI AL - Tambah';
		$query = $this->db->query("SELECT 
					*
				FROM 
					kesatuan
				WHERE
					induk_kode='5332'")->result();
		$data['kesatuan']=$query;
		$data['jenis']=$this->m_alutsista_al->get_table('jenis_barang');
		$this->load->view('alutsista_al/ranpur_al/tambahranpur', $data);
		
	}
	
	public function fungsiranpur($jenis=''){
		$sql = "
				SELECT 
					*
				FROM 
					fungsi_barang
				WHERE
					jenis_barang_kode='$jenis'
				
					";
		//echo $sql;die();
		$query = $this->db->query("SELECT 
					*
				FROM 
					fungsi_barang
				WHERE
					jenis_barang_kode='$jenis'")->result();
		$data['fungsi'] = $query;
		$this->load->view('alutsista_al/ranpur_al/fungsiranpur',$data);
		
		
	}
	
	public function barangranpur($fungsi=''){
		$doffy = $this->db->query("SELECT 
					*
				FROM 
					barang
				WHERE
					fungsi_barang_kode='$fungsi'")->result();
		//echo $doffy;die();
		$data['barang'] = $doffy;
		$this->load->view('alutsista_al/ranpur_al/barangranpur',$data);
	
		
	}
	
	
//////////////////////////////////////////////////////KAPAL//////////////////////////////////////////////////////


	
	
}

?>