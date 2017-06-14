<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cetak_tnial extends CI_Controller {
	
	 public function __construct() {
        parent::__construct();
        session_start();

        if ($this->session->userdata('level') == null or $this->session->userdata('level') == '3') {
            $this->session->set_flashdata('session_expired', TRUE);
            redirect('login');
        }
		
		//$this->load->model('m_users');
		$this->load->model('m_alutsista');
		$this->load->model('m_alutsista_al');
		$this->load->model('m_ranpur_al');
		

    }
	
///////////////////////////////////////////////SENJATA///////////////////////////////////////////////////////////////////////////
	
	public function index(){
		
		$data['title'] = "Laporan Senjata TNI AL";
		$data['link_laporan'] = 'class="start active open"';		
		$data['link_open_laporan'] = 'open';
		$data['link_aktif_laporan_al'] = 'class="active"';
		
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
		$this->load->view('cetak_tnial/senjata/index',$data);
	}
	
	public function cetaksenjataall(){
		//phpinfo();die();
		//echo "hohoho";
	
		$data['title'] = "Laporan Senjata TNI AL";
		$data['link_laporan'] = 'class="start active open"';		
		$data['link_open_laporan'] = 'open';
		$data['link_aktif_laporan_al'] = 'class="active"';
		
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
		
		$zorg = $this->db->query("
			SELECT a . * ,a.id as idsenja, b . *
			FROM senjata_al a, kesatuan b
			WHERE a.id_kesatuan = b.id
					
					
					")->result();
		$data['zorg'] = $zorg;
		$henshin = $this->db->query("
			SELECT a . * ,a.id as idsenja2, b . *
			FROM senjata_al a, jenis_barang b
			WHERE a.id_jenis = b.id
					
					
					")->result();
		$data['henshin'] = $henshin;
		
	$this->load->view('cetak_tnial/senjata/cetak_temp',$data);
	
		
	}
	
	
//+----------------------------------------------------------------------------------------------------------------------+
//|----------------- PESAWAT AL -------------------- PESAWAT AL ------------------------PESAWAT AL------------------------|
//+----------------------------------------------------------------------------------------------------------------------+

	public function lap_pesawat_al(){
		
		$data['title'] = 'Laporan Pesawat TNI AL';
		$data['link_laporan'] = 'class="start active open"';		
		$data['link_open_laporan'] = 'open';
        $data['link_aktif_laporan_al'] = 'class="active"';
		
		
		$data['pesawat_al'] = $this->m_alutsista_al->list_pesawat_al();
		
		$this->load->view('cetak_tnial/pesawat/index',$data);
	}
	
	public function cetak_pesawat_al(){
		
		$data['title'] = 'Laporan Pesawat TNI AL';
		$data['link_laporan'] = 'class="start active open"';		
		$data['link_open_laporan'] = 'open';
        $data['link_aktif_laporan_al'] = 'class="active"';
		
		
		$data['pesawat_al'] = $this->m_alutsista_al->list_pesawat_al();
		
		$this->load->view('cetak_tnial/pesawat/cetak',$data);
	}
	
	
//+----------------------------------------------------------------------------------------------------------------------+
//|----------------- RANPUR AL -------------------- RANPUR AL ------------------------RANPUR AL------------------------|
//+----------------------------------------------------------------------------------------------------------------------+

	public function lap_ranpur_al(){
		
		$data['title'] = 'Laporan Ranpur TNI AL';
		$data['link_laporan'] = 'class="start active open"';		
		$data['link_open_laporan'] = 'open';
        $data['link_aktif_laporan_al'] = 'class="active"';
		
		
		$data['data_ranpur_al'] = $this->m_ranpur_al->data_ranpur_al();
		
		$this->load->view('cetak_tnial/ranpur/index',$data);
	}
	
	public function cetak_ranpur_al(){
		
		$data['title'] = 'Laporan Ranpur TNI AL';
		$data['link_laporan'] = 'class="start active open"';		
		$data['link_open_laporan'] = 'open';
        $data['link_aktif_laporan_al'] = 'class="active"';
		
		
		$data['data_ranpur_al'] = $this->m_ranpur_al->data_ranpur_al();
		
		$this->load->view('cetak_tnial/ranpur/cetak',$data);
	}
	
	
//+----------------------------------------------------------------------------------------------------------------------+
//|----------------- KAPAL AL -------------------- KAPAL AL ------------------------KAPAL AL------------------------|
//+----------------------------------------------------------------------------------------------------------------------+
	
	
	public function lap_kapal_al(){
		
		$data['title'] = 'Laporan Kapal TNI AL';
		$data['link_laporan'] = 'class="start active open"';		
		$data['link_open_laporan'] = 'open';
        $data['link_aktif_laporan_al'] = 'class="active"';
		
		//Data from model
        $data['jenis'] = $this->m_alutsista->jenis_kapal_al();
        $data['kesatuan'] = $this->m_alutsista->kesatuan_al();
        $data['fungsi'] = $this->m_alutsista->fungsi_al();
        $data['barang'] = $this->m_alutsista->barang_al();
        $data['kapal_al'] = $this->m_alutsista->kapal_al();

		$this->load->view('cetak_tnial/kapal/index',$data);
		
	}
	
	public function cetakkapalall(){
	$query = $this->db->query("SELECT 
					a.*,
					a.id as idkapal,
					b.*,
					c.*,
					d.*,
					e.*
				FROM 
					kapal_dump_al a,
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
		$query3 = $this->db->query("SELECT 
					a.*,
					a.id as idkapal,
					b.*,
					c.*,
					d.*
				FROM 
					kapal_dump_al a,
					kesatuan b,
					jenis_barang c,
					fungsi_barang d
					
				WHERE
					a.id_kesatuan=b.id and
					a.id_jenis=c.id and
					a.id_fungsi=d.id 
					
					
					")->result();
		$data['kesatuan'] = $query3;
		
		$query2 = $this->db->query("SELECT a. * , b. * ,b.id as idkapal2, c. *,d.*
			FROM kapal_al a, kapal_dump_al b, barang c,jenis_barang d
			WHERE a.id_dump_kapal_al = b.id
			AND b.id_barang = c.id AND b.id_jenis=d.id
					
					
					")->result();
		$data['detail'] = $query2;
		
		$this->load->view('cetak_tnial/kapal/cetak',$data);

	}
	
}

?>