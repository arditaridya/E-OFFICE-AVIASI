<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cetak_tniad extends CI_Controller {
	
	 public function __construct() {
        parent::__construct();
        session_start();

        if ($this->session->userdata('level') == null or $this->session->userdata('level') == '3') {
            $this->session->set_flashdata('session_expired', TRUE);
            redirect('login');
        }
		
		$this->load->model('m_alutsista_ad');
		$this->load->model('m_alutsista');
		$this->load->model('m_ranpur_ad');
		$this->load->model('m_ranmor_ad');
		$this->load->model('m_senjata_pesawat_ad');
		$this->load->model('m_amunisi_pesawat_ad');
		

    }


// +----------------------------------------------------------------------------------------------------------+
// |---------------- UMUM ------------------------- UMUM ---------------------- UMUM -------------------------|
// +----------------------------------------------------------------------------------------------------------+

	public function get_fungsi($kdjenis){
		$data['fungsi'] = $this->m_alutsista->get_fungsi_filter($kdjenis);
		$this->load->view('cetak_tniad/v_fungsi',$data);
	}

	public function get_barang($kdfungsi){
		$data['fungsi'] = $this->m_alutsista->get_barang_filter($kdfungsi);
		$this->load->view('cetak_tniad/v_barang',$data);
	}


// ____________________________________________________________________________________________________________


// +--------------------------------------------------------------------------------------------------------------------+
// |--------------------- SENJATA AD ------------------- SENJATA AD -------------------- SENJATA AD --------------------|
// +--------------------------------------------------------------------------------------------------------------------+

	public function lap_senjata(){
		$data['title'] = "Laporan Senjata TNI AD";
		$data['link_laporan'] = 'class="start active open"';		
		$data['link_open_laporan'] = 'open';
		$data['link_aktif_laporan_ad'] = 'class="active"';

		$data['list_senjata'] = $this->m_alutsista->list_senjata_ad();
        $data['kesatuan'] = $this->m_alutsista->list_kesatuan_ad();
        $data['jenis_senjata'] = $this->m_alutsista->list_jenis_senjataad();
        $data['fungsi_senjata'] = $this->m_alutsista->list_fungsi_senjataad();
        $data['barang_senjata'] = $this->m_alutsista->list_barang_senjataad();
		$data['title'] = "Laporan Senjata";
		$this->load->view('cetak_tniad/senjata/index',$data);
	}

	public function cetaksenjataad(){
		$kes = $this->db->query("SELECT *
				FROM kesatuan
				WHERE idinduk = 2
			")->result();
		$jmlcols = $this->db->query("SELECT COUNT( * ) AS jumlah
				FROM kesatuan
/*				WHERE idinduk =2
				GROUP BY idinduk
*/			")->result();		

		$fungsi = $this->db->query("SELECT
				a.id_fungsi, b.fungsi
				FROM senjata_ad a, fungsi_barang b
				WHERE a.id_fungsi = b.id
				GROUP BY id_fungsi
			")->result();
/*		$pistol = $this->db->query("SELECT *
				FROM jenis_barang")->result();
*/		$pistol = $this->db->query("SELECT *
				FROM senjata_ad a, jenis_barang b
				WHERE a.id_jenis = b.id
				GROUP BY id_jenis")->result();
		$tpl_senjata = $this->db->query("SELECT *
				FROM senjata_ad")->result();
		$query = $this->db->query("SELECT
					a . * ,
		  			a.id AS idsenjataad,
		   			b . * ,
		   			c . * ,
		    		d . * ,
		     		e . *
				FROM
					senjata_ad a,
					kesatuan b,
					jenis_barang c, 
					fungsi_barang d, 
					barang e
				WHERE
					a.id_kes = b.id AND
					a.id_jenis = c.id AND
					a.id_fungsi = d.id AND
					a.id_barang = e.id
					")->result();


		$data['sen']=$this->db->query("SELECT * FROM senjata_ad ");
		


		$data['model'] = $query;
		$data['j'] = $pistol;
		$data['kesatuan'] = $kes;
		$data['fungsi'] = $fungsi;
		$data['jmlcols'] = $jmlcols;
	$this->load->view('cetak_tniad/senjata/cetak',$data);
		
	}

// +--------------------------------------------------------------------------------------------------------------------+
// |--------------------- KAPAL AD -------------------- KAPAL AD --------------------- KAPAL AD ------------------------|
// +--------------------------------------------------------------------------------------------------------------------+

	public function lap_kapal(){
		
		$data['title'] = "Laporan Kapal TNI AD";
		$data['link_laporan'] = 'class="start active open"';		
		$data['link_open_laporan'] = 'open';
		$data['link_aktif_laporan_ad'] = 'class="active"';
		
		$data['list_kapal'] = $this->m_alutsista->list_kapal_ad();
        $data['kesatuan'] = $this->m_alutsista->list_kesatuan_ad();
        $data['jenis_kapal'] = $this->m_alutsista->list_jenis_kapalad();
        $data['fungsi_kapal'] = $this->m_alutsista->list_fungsi_kapalad();
        $data['barang_kapal'] = $this->m_alutsista->list_barang_kapalad();
		$data['title'] = "Laporan kapal";
		$this->load->view('cetak_tniad/kapal/index',$data);
	}

	public function cetakkapalad(){

		$query = $this->db->query("SELECT
					a . * ,
		  			a.id AS idkapalad,
		   			b . * ,
		   			c . * ,
		    		d . * ,
		     		e . *
				FROM
					kapal_ad a,
					kesatuan b,
					jenis_barang c, 
					fungsi_barang d, 
					barang e
				WHERE
					a.id_kes = b.id AND
					a.id_jenis = c.id AND
					a.id_fungsi = d.id AND
					a.id_barang = e.id
					
					")->result();
		$jenis = $this->db->query("SELECT
				a.id_jenis, b.jenis
				FROM kapal_ad a, jenis_barang b
				WHERE a.id_jenis = b.id
				GROUP BY id_jenis
			")->result();
		$fungsi = $this->db->query("SELECT
				a.id_fungsi, a.id_jenis, b.fungsi
				FROM kapal_ad a, fungsi_barang b
				WHERE a.id_fungsi = b.id
				GROUP BY id_fungsi
			")->result();
		
		$data['model'] = $query;
		$data['jenis'] = $jenis;
		$data['fungsi'] = $fungsi;
	$this->load->view('cetak_tniad/kapal/cetak',$data);
	}
	
// +--------------------------------------------------------------------------------------------------------------------+
// |--------------------- ALPALSUS AD ------------------- ALPALSUS AD ------------------- ALPALSUS AD ------------------|
// +--------------------------------------------------------------------------------------------------------------------+

	public function lap_alpalsus(){
		
		$data['title'] = "Laporan Alpalsus TNI AD";
		$data['link_laporan'] = 'class="start active open"';		
		$data['link_open_laporan'] = 'open';
		$data['link_aktif_laporan_ad'] = 'class="active"';
		
		$data['list_alpalsus'] = $this->m_alutsista->list_alpalsus_ad();
        $data['kesatuan'] = $this->m_alutsista->list_kesatuan_ad();
        $data['jenis_alpalsus'] = $this->m_alutsista->list_jenis_alpalsusad();
        $data['fungsi_alpalsus'] = $this->m_alutsista->list_fungsi_alpalsusad();
        $data['barang_alpalsus'] = $this->m_alutsista->list_barang_alpalsusad();
		$data['title'] = "Laporan Alpalsus";
		$this->load->view('cetak_tniad/alpalsus/index',$data);
	}

	public function cetakalpalsusad(){
		$kes = $this->db->query("SELECT *
				FROM kesatuan
				WHERE idinduk = 2
			")->result();
		$jmlcols = $this->db->query("SELECT COUNT( * ) AS jumlah
				FROM kesatuan
/*				WHERE idinduk =2
				GROUP BY idinduk
*/			")->result();		

		$fungsi = $this->db->query("SELECT
				a.id_fungsi, b.fungsi
				FROM alpalsus_ad a, fungsi_barang b
				WHERE a.id_fungsi = b.id
				GROUP BY id_fungsi
			")->result();
/*		$pistol = $this->db->query("SELECT *
				FROM jenis_barang")->result();
*/		$pistol = $this->db->query("SELECT *
				FROM alpalsus_ad a, jenis_barang b
				WHERE a.id_jenis = b.id
				GROUP BY id_jenis")->result();
		$tpl_senjata = $this->db->query("SELECT *
				FROM alpalsus_ad")->result();
		$query = $this->db->query("SELECT
					a . * ,
		  			a.id AS alpalsusad,
		   			b . * ,
		   			c . * ,
		    		d . * ,
		     		e . *
				FROM
					alpalsus_ad a,
					kesatuan b,
					jenis_barang c, 
					fungsi_barang d, 
					barang e
				WHERE
					a.id_kes = b.id AND
					a.id_jenis = c.id AND
					a.id_fungsi = d.id AND
					a.id_barang = e.id
					")->result();


		$data['sen']=$this->db->query("SELECT * FROM alpalsus_ad ");
		


		$data['model'] = $query;
		$data['j'] = $pistol;
		$data['kesatuan'] = $kes;
		$data['fungsi'] = $fungsi;
		$data['jmlcols'] = $jmlcols;
	$this->load->view('cetak_tniad/alpalsus/cetak',$data);
		
	}
// +--------------------------------------------------------------------------------------------------------------------+
// |--------------------- ALOPTIK AD ------------------- ALOPTIK AD -------------------- ALOPTIK AD --------------------|
// +--------------------------------------------------------------------------------------------------------------------+

	public function lap_aloptik(){
		
		$data['title'] = "Laporan Aloptik TNI AD";
		$data['link_laporan'] = 'class="start active open"';		
		$data['link_open_laporan'] = 'open';
		$data['link_aktif_laporan_ad'] = 'class="active"';
		
		$data['list_aloptik'] = $this->m_alutsista->list_aloptik_ad();
        $data['kesatuan'] = $this->m_alutsista->list_kesatuan_ad();
        $data['jenis_aloptik'] = $this->m_alutsista->list_jenis_aloptikad();
        $data['fungsi_aloptik'] = $this->m_alutsista->list_fungsi_aloptikad();
        $data['barang_aloptik'] = $this->m_alutsista->list_barang_aloptikad();
		$data['title'] = "Laporan Aloptik";
		$this->load->view('cetak_tniad/aloptik/index',$data);
	}

	public function cetakaloptikad(){
		$kes = $this->db->query("SELECT *
				FROM kesatuan
				WHERE idinduk = 2
			")->result();
		$jmlcols = $this->db->query("SELECT COUNT( * ) AS jumlah
				FROM kesatuan
/*				WHERE idinduk =2
				GROUP BY idinduk
*/			")->result();		

		$fungsi = $this->db->query("SELECT
				a.id_fungsi, b.fungsi
				FROM aloptik_ad a, fungsi_barang b
				WHERE a.id_fungsi = b.id
				GROUP BY id_fungsi
			")->result();
/*		$pistol = $this->db->query("SELECT *
				FROM jenis_barang")->result();
*/		$pistol = $this->db->query("SELECT *
				FROM aloptik_ad a, jenis_barang b
				WHERE a.id_jenis = b.id
				GROUP BY id_jenis")->result();
		$tpl_senjata = $this->db->query("SELECT *
				FROM aloptik_ad")->result();
		$query = $this->db->query("SELECT
					a . * ,
		  			a.id AS aloptikad,
		   			b . * ,
		   			c . * ,
		    		d . * ,
		     		e . *
				FROM
					aloptik_ad a,
					kesatuan b,
					jenis_barang c, 
					fungsi_barang d, 
					barang e
				WHERE
					a.id_kes = b.id AND
					a.id_jenis = c.id AND
					a.id_fungsi = d.id AND
					a.id_barang = e.id
					")->result();


		$data['sen']=$this->db->query("SELECT * FROM aloptik_ad ");
		$data['model'] = $query;
		$data['j'] = $pistol;
		$data['kesatuan'] = $kes;
		$data['fungsi'] = $fungsi;
		$data['jmlcols'] = $jmlcols;
	$this->load->view('cetak_tniad/aloptik/cetak',$data);
		
	}
	
// +--------------------------------------------------------------------------------------------------------------------+
// |--------------------- RANPUR AD ------------------- RANPUR AD -------------------- RANPUR AD --------------------|
// +--------------------------------------------------------------------------------------------------------------------+
	
	public function lap_ranpur(){
		
		$data['title'] = "Laporan Ranpur TNI AD";
		$data['link_laporan'] = 'class="start active open"';		
		$data['link_open_laporan'] = 'open';
		$data['link_aktif_laporan_ad'] = 'class="active"';
		
		$data['data_ranpur_ad'] = $this->m_ranpur_ad->data_ranpur_ad();
		
		$this->load->view('cetak_tniad/ranpur/index',$data);
		
	}
	
	public function cetakranpurad(){
		
		$data['title'] = "Laporan Ranpur TNI AD";
		$data['link_laporan'] = 'class="start active open"';		
		$data['link_open_laporan'] = 'open';
		$data['link_aktif_laporan_ad'] = 'class="active"';
		
		$data['data_ranpur_ad'] = $this->m_ranpur_ad->data_ranpur_ad();
		
		$this->load->view('cetak_tniad/ranpur/cetak',$data);
	}
	

// +--------------------------------------------------------------------------------------------------------------------+
// |--------------------- RANMOR AD ------------------- RANMOR AD -------------------- RANMOR AD --------------------|
// +--------------------------------------------------------------------------------------------------------------------+
	
	public function lap_ranmor(){
		
		$data['title'] = "Laporan Ranmor TNI AD";
		$data['link_laporan'] = 'class="start active open"';		
		$data['link_open_laporan'] = 'open';
		$data['link_aktif_laporan_ad'] = 'class="active"';
		
		$data['data_ranmor_ad'] = $this->m_ranmor_ad->data_ranmor_ad();
		
		$this->load->view('cetak_tniad/ranmor/index',$data);
		
	}
	
	public function cetakranmorad(){
		
		$data['title'] = "Laporan Ranmor TNI AD";
		$data['link_laporan'] = 'class="start active open"';		
		$data['link_open_laporan'] = 'open';
		$data['link_aktif_laporan_ad'] = 'class="active"';
		
		$data['data_ranmor_ad'] = $this->m_ranmor_ad->data_ranmor_ad();
		
		$this->load->view('cetak_tniad/ranmor/cetak',$data);
	}
	
	// +--------------------------------------------------------------------------------------------------------------------+
// |--------------------- SENJATA PESAWAT AD ------------------- SENJATA PESAWAT AD --------------- SENJATA PESAWAT AD -|
// +--------------------------------------------------------------------------------------------------------------------+
	
	public function lap_senjata_peswat(){
		
		$data['title'] = "Laporan Senjata Pesawat TNI AD";
		$data['link_laporan'] = 'class="start active open"';		
		$data['link_open_laporan'] = 'open';
		$data['link_aktif_laporan_ad'] = 'class="active"';
		
		$data['data_senjata_pesawat_ad'] = $this->m_senjata_pesawat_ad->data_senjata_pesawat_ad();
		
		$this->load->view('cetak_tniad/senjata_pesawat/index',$data);
		
	}
	
	public function cetaksenjatapesawatad(){
		
		$data['title'] = "Laporan Senjata Pesawat TNI AD";
		$data['link_laporan'] = 'class="start active open"';		
		$data['link_open_laporan'] = 'open';
		$data['link_aktif_laporan_ad'] = 'class="active"';
		
		$data['data_senjata_pesawat_ad'] = $this->m_senjata_pesawat_ad->data_senjata_pesawat_ad();
		
		$this->load->view('cetak_tniad/senjata_pesawat/cetak',$data);
	}
	
	
// +--------------------------------------------------------------------------------------------------------------------+
// |--------------------- AMUNISI PESAWAT AD ------------------- AMUNISI PESAWAT AD --------------- AMUNISI PESAWAT AD -|
// +--------------------------------------------------------------------------------------------------------------------+
	
	public function lap_amunisi_peswat(){
		
		$data['title'] = "Laporan Amunisi Pesawat TNI AD";
		$data['link_laporan'] = 'class="start active open"';		
		$data['link_open_laporan'] = 'open';
		$data['link_aktif_laporan_ad'] = 'class="active"';
		
		$data['data_amunisi_pesawat_ad'] = $this->m_amunisi_pesawat_ad->data_amunisi_pesawat_ad();
		
		$this->load->view('cetak_tniad/amunisi_pesawat/index',$data);
		
	}
	
	public function cetakamunisipesawatad(){
		
		$data['title'] = "Laporan Amunisi Pesawat TNI AD";
		$data['link_laporan'] = 'class="start active open"';		
		$data['link_open_laporan'] = 'open';
		$data['link_aktif_laporan_ad'] = 'class="active"';
		
		$data['data_amunisi_pesawat_ad'] = $this->m_amunisi_pesawat_ad->data_amunisi_pesawat_ad();
		
		$this->load->view('cetak_tniad/amunisi_pesawat/cetak',$data);
	}
	
}

?>