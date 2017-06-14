<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Senjata_tni_al extends CI_Controller {
	
	 public function __construct() {
        parent::__construct();
        session_start();

        if ($this->session->userdata('level') == null or $this->session->userdata('level') == '3') {
            $this->session->set_flashdata('session_expired', TRUE);
            redirect('login');
        }
		
		//$this->load->model('m_users');
		$this->load->model('m_senjata_tni_al');
		

    }
	
	
	public function index(){
		
		$data['title'] = 'Senjata TNI AL - index';
		$data['judul'] = 'Senjata TNI AL - index';
		$data['model'] = $this->m_senjata_tni_al->data_users();
		$this->load->view('senjata_tni_al/index',$data);
	}
	
	public function tambah(){
		
		$data['title'] = 'Senjata TNI AL - Tambah';
		$data['judul'] = 'Senjata TNI AL - Tambah';
		$query = $this->db->query("SELECT 
					*
				FROM 
					kesatuan
				WHERE
					induk_kode='5332'")->result();
		$data['kesatuan']=$query;
		$data['jenis']=$this->m_senjata_tni_al->get_table('jenis_barang');
		$this->load->view('senjata_tni_al/tambah', $data);
		
	}
	public function fungsieun($jenis=''){
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
		$this->load->view('senjata_tni_al/fungsi',$data);
		
		
	}
	
	public function barangeun($fungsi=''){
		$doffy = $this->db->query("SELECT 
					*
				FROM 
					barang
				WHERE
					fungsi_barang_kode='$fungsi'")->result();
		//echo $doffy;die();
		$data['barang'] = $doffy;
		$this->load->view('senjata_tni_al/barang',$data);
	
		
	}
	
	
	

	
	
}

?>