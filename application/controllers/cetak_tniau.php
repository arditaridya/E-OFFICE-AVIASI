<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cetak_tniau extends CI_Controller {
	
	 public function __construct() {
        parent::__construct();
        session_start();

        if ($this->session->userdata('level') == null or $this->session->userdata('level') == '3') {
            $this->session->set_flashdata('session_expired', TRUE);
            redirect('login');
        }
		$this->load->model('m_alutsista');
		$this->load->model('m_alutsista_au');
		

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
		$this->load->view('cetak_tnial/senjata/index',$data);
	}
	
	public function cetakamunisiall(){
		//phpinfo();die();
	//echo "hohoho";
		$query = $this->db->query("SELECT 
					a.*,
					a.id as idamunisi,
					b.*,
					c.*,
					d.*,
					e.*
				FROM 
					amunisi_dump_au a,
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
					a.id as idamunisi,
					b.*,
					c.*,
					d.*
				FROM 
					amunisi_dump_au a,
					kesatuan b,
					jenis_barang c,
					fungsi_barang d
					
				WHERE
					a.id_kesatuan=b.id and
					a.id_jenis=c.id and
					a.id_fungsi=d.id 
					
					
					")->result();
		$data['kesatuan'] = $query3;
		$query2 = $this->db->query("SELECT a . * , b . * , c . *
									FROM amunisi_au a, amunisi_dump_au b, barang c
									WHERE a.id_dump_amunisi_au = b.id
											AND a.jenis_senjata = c.id
					
					
					")->result();
		$data['detail'] = $query2;
	$this->load->view('cetak_tniau/amunisi/cetak',$data);
	
		
	}
	
	
	
//+----------------------------------------------------------------------------------------------------------------------+
//|----------------- SENJATA AU -------------------- SENJATA AU ----------------------- SENJATA AU -----------------------|
//+----------------------------------------------------------------------------------------------------------------------+

	public function lap_senjata_au(){
		
		$data['title'] = 'Laporan Senjata TNI AU';
		$data['link_laporan'] = 'class="start active open"';		
		$data['link_open_laporan'] = 'open';
        $data['link_aktif_laporan_au'] = 'class="active"';
		
		$data['jenis'] = $this->m_alutsista->jenis_senjata_au();
        $data['kesatuan'] = $this->m_alutsista->kesatuan_au();
        $data['fungsi'] = $this->m_alutsista->fungsi_au();
        $data['barang'] = $this->m_alutsista->barang_au();
		$data['senjata_au'] = $this->m_alutsista->senjata_au();
		
		$this->load->view('cetak_tniau/senjata/index',$data);
	}
	
	public function cetak_senjata_au(){
		
		$data['title'] = 'Laporan Senjata TNI AU';
		$data['link_laporan'] = 'class="start active open"';		
		$data['link_open_laporan'] = 'open';
        $data['link_aktif_laporan_au'] = 'class="active"';
		
		$data['senjata_au'] = $this->m_alutsista->data_sejata_au();
		
		$this->load->view('cetak_tniau/senjata/cetak',$data);
	}
	
	
//+----------------------------------------------------------------------------------------------------------------------+
//|----------------- ALPALSUS AU -------------------- ALPALSUS AU ----------------------- ALPALSUS AU -----------------------|
//+----------------------------------------------------------------------------------------------------------------------+

	public function lap_alpalsus_au(){
		
		$data['title'] = 'Laporan Alpalsus TNI AU';
		$data['link_laporan'] = 'class="start active open"';		
		$data['link_open_laporan'] = 'open';
        $data['link_aktif_laporan_au'] = 'class="active"';
		
		$data['jenis'] = $this->m_alutsista->jenis_alpalsus_au();
        $data['kesatuan'] = $this->m_alutsista->kesatuan_au();
        $data['fungsi'] = $this->m_alutsista->fungsi_au();
        $data['barang'] = $this->m_alutsista->barang_au();
        $data['alpalsus_au'] = $this->m_alutsista->alpalsus_au();
		
		$this->load->view('cetak_tniau/alpalsus/index',$data);
	}
	
	public function cetak_alpalsus_au(){
		
		$data['title'] = 'Laporan Senjata TNI AU';
		$data['link_laporan'] = 'class="start active open"';		
		$data['link_open_laporan'] = 'open';
        $data['link_aktif_laporan_au'] = 'class="active"';
		
		$data['alpalsus_au'] = $this->m_alutsista->data_alpalsus_au();
		
		$this->load->view('cetak_tniau/alpalsus/cetak',$data);
	}
	
}

?>