<?php
if (!defined('BASEPATH'))
	exit('No derect script access allowed');

/**
* @author : Andre Andrian Imam
*/
class C_grafic extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		session_start();
		if ($this->session->userdata('level') == null) {
			$this->session->set_flashdata('session_expired', TRUE);
			redirect('login');
		}

		$this->load->model('m_grafic');
	}

// +----------------------------------------------------------------------------------------------------------+
// |----------- GRAFIC INDEX ---------------- GRAFIC INDEX ---------------- GRAFIC INDEX ---------------------|
// +----------------------------------------------------------------------------------------------------------+

	public function index(){
		$data['judul'] = FALSE;
		$data['kmdt'] = FALSE;
		$data['thn'] = FALSE;
		$data['bln'] = FALSE;
		$data['tni_ad'] = FALSE;
		$data['tni_al'] = FALSE;
		$data['tni_au'] = FALSE;
		$data['title'] = "Grafic";
		$data['grafic'] = FALSE;
		$this->load->view('grafic/v_grafic', $data);
	}

	public function view_chart(){
		$kmdt = $_POST['komoditi'];
		$thn = $_POST['tahun'];
		$bln = $_POST['bulan'];

		if ($kmdt == 'senjata') {
			$this->senjata($kmdt,$thn,$bln);
		}else{
			$this->index();
		}
	}

	public function senjata($komoditi,$tahun,$bulan){
		$char_bulan = $this->charakter_bulan($bulan);
		$data['judul'] = "GRAFIC SENJATA TNI. ".$char_bulan.", ".$tahun."";
		foreach($this->m_grafic->senjata_ad($tahun,$bulan)->result_array() as $row)
		{
			$data['tni_ad'] = $row['b_kai'] + $row['b_dia'] + $row['rr_kai'] + $row['rr_dia'] + $row['rb_kai'] + $row['rb_dia'];
		}
		foreach($this->m_grafic->senjata_al($tahun,$bulan)->result_array() as $row)
		{
			$data['tni_al'] = $row['kai_sp'] + $row['kai_tsp'] + $row['dia_sp'] + $row['dia_tsp'];
		}
		foreach($this->m_grafic->senjata_au($tahun,$bulan)->result_array() as $row)
		{
			$data['tni_au'] = $row['b'] + $row['rr'] + $row['rb'];
		}
		$data['kmdt'] = $komoditi;
		$data['thn'] = $tahun;
		$data['bln'] = $bulan;
		$data['title'] = "Grafic Senjata";
		$data['grafic'] = TRUE;
		$this->load->view('grafic/v_grafic', $data);
	}

	public function charakter_bulan($bulan){
		if ($bulan == 1) {
			$char = "Januari";
		}elseif ($bulan == 2) {
			$char = "Februari";
		}elseif ($bulan == 3) {
			$char = "Maret";
		}elseif ($bulan == 4) {
			$char = "April";
		}elseif ($bulan == 5) {
			$char = "Mei";
		}elseif ($bulan == 6) {
			$char = "Juni";
		}elseif ($bulan == 7) {
			$char = "Juli";
		}elseif ($bulan == 8) {
			$char = "Agustus";
		}elseif ($bulan == 9) {
			$char = "September";
		}elseif ($bulan == 10) {
			$char = "Oktober";
		}elseif ($bulan == 11) {
			$char = "November";
		}elseif ($bulan == 12) {
			$char = "Desember";
		}else{
			$char = null;
		}

		return $char;
	}

// ____________________________________________________________________________________________________________

// +----------------------------------------------------------------------------------------------------------+
// |---------------- UMUM ------------------------- UMUM ---------------------- UMUM -------------------------|
// +----------------------------------------------------------------------------------------------------------+

	public function get_fungsi($kdjenis){
		$data['fungsi'] = $this->m_grafic->get_fungsi($kdjenis);
		$this->load->view('grafic/v_fungsi',$data);
	}


// ____________________________________________________________________________________________________________

// +----------------------------------------------------------------------------------------------------------+
// |----------- GRAFIC TNI AD ---------------- GRAFIC TNI AD ---------------- GRAFIC TNI AD ------------------|
// +----------------------------------------------------------------------------------------------------------+

/* ::::::::::::: SENJATA ::::::::::::::: SENJATA ::::::::::::::::::::::::::::::: */

	public function g_senjata_ad(){
		$idkomoditi = 1; // wajib, edit
		$data['jenis'] = $this->m_grafic->get_jenis($idkomoditi);
		$data['tahun'] = $this->m_grafic->tahun_senjataad();
		$data['title'] = "Grafic Senjata AD";
		$data['view_chart'] = FALSE;
		$this->load->view('grafic/tni_ad/v_grafic', $data);
	}

	public function show_senjata_ad(){

		$idkomoditi = 1; // wajib, edit
		$data['jenis'] = $this->m_grafic->get_jenis($idkomoditi);
		$data['tahun'] = $this->m_grafic->tahun_senjataad();
		$fungsi = $_POST['fungsi']; // wajib
		$tahun = $_POST['tahun']; //wajib
		$data['barang_all'] = $this->m_grafic->barang_all(); //wajib
		$data['chart_barang'] = $this->m_grafic->show_senjataad($fungsi,$tahun); // wajib
		$data['title'] = "Grafic Senjata AD";
		$data['view_chart'] = TRUE;
		$this->load->view('grafic/tni_ad/v_grafic', $data);

	}

/* ::::::::::::: AMUNISI ::::::::::::::: AMUNISI ::::::::::::::::::::::::::::::: */

	public function g_amunisi_ad(){
		$idkomoditi = 2; // wajib, edit
		$data['jenis'] = $this->m_grafic->get_jenis($idkomoditi);
		$data['tahun'] = $this->m_grafic->tahun_amunisiad();
		$data['title'] = "Grafic Amunisi AD";
		$data['view_chart'] = FALSE;
		$this->load->view('grafic/tni_ad/v_amunisi', $data);
	}

	public function show_amunisi_ad(){

		$idkomoditi = 2; // wajib, edit
		$data['jenis'] = $this->m_grafic->get_jenis($idkomoditi);
		$data['tahun'] = $this->m_grafic->tahun_amunisiad();
		$fungsi = $_POST['fungsi']; // wajib
		$tahun = $_POST['tahun']; //wajib
		$data['barang_all'] = $this->m_grafic->barang_all(); //wajib
		$data['chart_barang'] = $this->m_grafic->show_amunisiad($fungsi,$tahun); // wajib
		$data['title'] = "Grafic Amunisi AD";
		$data['view_chart'] = TRUE;
		$this->load->view('grafic/tni_ad/v_amunisi', $data);

	}

/* ::::::::::::: KAPAL ::::::::::::::: KAPAL ::::::::::::::::::::::::::::::: */

	public function g_kapal_ad(){
		$idkomoditi = 4; // wajib, edit
		$data['jenis'] = $this->m_grafic->get_jenis($idkomoditi); //wajib
		$data['tahun'] = $this->m_grafic->tahun_senjataad();
		$data['title'] = "Grafic Kapal AD";
		$data['view_chart'] = FALSE;
		$this->load->view('grafic/tni_ad/v_kapal', $data);
	}

	public function show_kapal_ad(){
		$idkomoditi = 4; // wajib, edit
		$data['jenis'] = $this->m_grafic->get_jenis($idkomoditi); //wajib
		$data['tahun'] = $this->m_grafic->tahun_kapalad();
		$fungsi = $_POST['fungsi']; // wajib
		$tahun = $_POST['tahun']; //wajib
		$data['barang_all'] = $this->m_grafic->barang_all(); //wajib
		$data['chart_barang'] = $this->m_grafic->show_kapalad($fungsi,$tahun); // wajib
		$data['title'] = "Grafic Kapal AD";
		$data['view_chart'] = TRUE;
		$this->load->view('grafic/tni_ad/v_kapal', $data);

	}

/* ::::::::::::: ALPALSUS ::::::::::::::: ALPALSUS ::::::::::::::::::::::::::::::: */

	public function g_alpalsus_ad(){
		$idkomoditi = 7; // wajib, edit
		$data['jenis'] = $this->m_grafic->get_jenis($idkomoditi); //wajib
		$data['tahun'] = $this->m_grafic->tahun_alpalsusad(); //wajib, edit
		$data['title'] = "Grafic Alpalsus AD";
		$data['view_chart'] = FALSE;
		$this->load->view('grafic/tni_ad/v_alpalsus', $data);
	}

	public function show_alpalsus_ad(){
		$idkomoditi = 7; // wajib, edit
		$data['jenis'] = $this->m_grafic->get_jenis($idkomoditi); //wajib
		$data['tahun'] = $this->m_grafic->tahun_alpalsusad(); // wajib, edit
		$fungsi = $_POST['fungsi']; // wajib
		$tahun = $_POST['tahun']; //wajib
		$data['barang_all'] = $this->m_grafic->barang_all(); //wajib
		$data['chart_barang'] = $this->m_grafic->show_alpalsusad($fungsi,$tahun); // wajib,edit
		$data['title'] = "Grafic Alpalsus AD"; //wajib,edit
		$data['view_chart'] = TRUE;
		$this->load->view('grafic/tni_ad/v_alpalsus', $data); //wajib, edit

	}

/* ::::::::::::: ALOPTIK ::::::::::::::: ALOPTIK ::::::::::::::::::::::::::::::: */

	public function g_aloptik_ad(){
		$idkomoditi = 8; // wajib, edit
		$data['jenis'] = $this->m_grafic->get_jenis($idkomoditi); //wajib
		$data['tahun'] = $this->m_grafic->tahun_aloptikad(); //wajib, edit
		$data['title'] = "Grafic Aloptik AD";
		$data['view_chart'] = FALSE;
		$this->load->view('grafic/tni_ad/v_aloptik', $data);
	}

	public function show_aloptik_ad(){
		$idkomoditi = 8; // wajib, edit
		$data['jenis'] = $this->m_grafic->get_jenis($idkomoditi); //wajib
		$data['tahun'] = $this->m_grafic->tahun_aloptikad(); // wajib, edit
		$fungsi = $_POST['fungsi']; // wajib
		$tahun = $_POST['tahun']; //wajib
		$data['barang_all'] = $this->m_grafic->barang_all(); //wajib
		$data['chart_barang'] = $this->m_grafic->show_aloptikad($fungsi,$tahun); // wajib,edit
		$data['title'] = "Grafic Aloptik AD"; //wajib,edit
		$data['view_chart'] = TRUE;
		$this->load->view('grafic/tni_ad/v_aloptik', $data); //wajib, edit

	}

/* ::::::::::::: PESAWAT ::::::::::::::: PESAWAT ::::::::::::::::::::::::::::::: */

	public function g_pesawat_ad(){
		$idkomoditi = 3; // wajib, edit
		$data['jenis'] = $this->m_grafic->get_jenis($idkomoditi); //wajib
		$data['tahun'] = $this->m_grafic->tahun_pesawatad(); //wajib, edit
		$data['title'] = "Grafic Pesawat AD";
		$data['view_chart'] = FALSE;
		$this->load->view('grafic/tni_ad/v_pesawat', $data);
	}

	public function show_pesawat_ad(){
		$idkomoditi = 3; // wajib, edit
		$data['jenis'] = $this->m_grafic->get_jenis($idkomoditi); //wajib
		$data['tahun'] = $this->m_grafic->tahun_pesawatad(); // wajib, edit
		$fungsi = $_POST['fungsi']; // wajib
		$tahun = $_POST['tahun']; //wajib
		$data['barang_all'] = $this->m_grafic->barang_all(); //wajib
		$data['chart_barang'] = $this->m_grafic->show_pesawatad($fungsi,$tahun); // wajib,edit
		$data['title'] = "Grafic Pesawat AD"; //wajib,edit
		$data['view_chart'] = TRUE;
		$this->load->view('grafic/tni_ad/v_pesawat', $data); //wajib, edit

	}


/* ::::::::::::: RANPUR ::::::::::::::: RANPUR ::::::::::::::::::::::::::::::: */

	public function g_ranpur_ad(){
		$idkomoditi = 5; // wajib, edit
		$data['jenis'] = $this->m_grafic->get_jenis($idkomoditi); //wajib
		$data['tahun'] = $this->m_grafic->tahun_ranpurad(); //wajib, edit
		$data['title'] = "Grafic Ranpur AD";
		$data['view_chart'] = FALSE;
		$this->load->view('grafic/tni_ad/v_ranpur', $data);
	}

	public function show_ranpur_ad(){
		$idkomoditi = 5; // wajib, edit
		$data['jenis'] = $this->m_grafic->get_jenis($idkomoditi); //wajib
		$data['tahun'] = $this->m_grafic->tahun_ranpurad(); // wajib, edit
		$fungsi = $_POST['fungsi']; // wajib
		$tahun = $_POST['tahun']; //wajib
		$data['barang_all'] = $this->m_grafic->barang_all(); //wajib
		$data['chart_barang'] = $this->m_grafic->show_ranpurad($fungsi,$tahun); // wajib,edit
		$data['title'] = "Grafic Ranpur AD"; //wajib,edit
		$data['view_chart'] = TRUE;
		$this->load->view('grafic/tni_ad/v_ranpur', $data); //wajib, edit

	}

/* ::::::::::::: RANMOR ::::::::::::::: RANMOR ::::::::::::::::::::::::::::::: */

	public function g_ranmor_ad(){
		$idkomoditi = 6; // wajib, edit
		$data['jenis'] = $this->m_grafic->get_jenis($idkomoditi); //wajib
		$data['tahun'] = $this->m_grafic->tahun_ranmorad(); //wajib, edit
		$data['title'] = "Grafic Ranmor AD";
		$data['view_chart'] = FALSE;
		$this->load->view('grafic/tni_ad/v_ranmor', $data);
	}

	public function show_ranmor_ad(){
		$idkomoditi = 6; // wajib, edit
		$data['jenis'] = $this->m_grafic->get_jenis($idkomoditi); //wajib
		$data['tahun'] = $this->m_grafic->tahun_ranmorad(); // wajib, edit
		$fungsi = $_POST['fungsi']; // wajib
		$tahun = $_POST['tahun']; //wajib
		$data['barang_all'] = $this->m_grafic->barang_all(); //wajib
		$data['chart_barang'] = $this->m_grafic->show_ranmorad($fungsi,$tahun); // wajib,edit
		$data['title'] = "Grafic Ranmor AD"; //wajib,edit
		$data['view_chart'] = TRUE;
		$this->load->view('grafic/tni_ad/v_ranmor', $data); //wajib, edit

	}

/* ::::::::::::: SENJATA PESAWAT ::::::::::::::: SENJATA PESAWAT ::::::::::::::::::::::::::::::: */

	public function g_senjatapesawat_ad(){
		$idkomoditi = 9; // wajib, edit
		$data['jenis'] = $this->m_grafic->get_jenis($idkomoditi); //wajib
		$data['tahun'] = $this->m_grafic->tahun_senjatapesawatad(); //wajib, edit
		$data['title'] = "Grafic Senjata Pesawat AD";
		$data['view_chart'] = FALSE;
		$this->load->view('grafic/tni_ad/v_senjatapesawat', $data);
	}

	public function show_senjatapesawat_ad(){
		$idkomoditi = 9; // wajib, edit
		$data['jenis'] = $this->m_grafic->get_jenis($idkomoditi); //wajib
		$data['tahun'] = $this->m_grafic->tahun_senjatapesawatad(); // wajib, edit
		$fungsi = $_POST['fungsi']; // wajib
		$tahun = $_POST['tahun']; //wajib
		$data['barang_all'] = $this->m_grafic->barang_all(); //wajib
		$data['chart_barang'] = $this->m_grafic->show_senjatapesawatad($fungsi,$tahun); // wajib,edit
		$data['title'] = "Grafic Senjata Pesawat AD"; //wajib,edit
		$data['view_chart'] = TRUE;
		$this->load->view('grafic/tni_ad/v_senjatapesawat', $data); //wajib, edit

	}

/* ::::::::::::: AMUNISI PESAWAT ::::::::::::::: AMUNISI PESAWAT ::::::::::::::::::::::::::::::: */

	public function g_amunisipesawat_ad(){
		$idkomoditi = 10; // wajib, edit
		$data['jenis'] = $this->m_grafic->get_jenis($idkomoditi); //wajib
		$data['tahun'] = $this->m_grafic->tahun_senjatapesawatad(); //wajib, edit
		$data['title'] = "Grafic Amunisi Pesawat AD";
		$data['view_chart'] = FALSE;
		$this->load->view('grafic/tni_ad/v_amunisipesawat', $data);
	}

	public function show_amunisipesawat_ad(){
		$idkomoditi = 10; // wajib, edit
		$data['jenis'] = $this->m_grafic->get_jenis($idkomoditi); //wajib
		$data['tahun'] = $this->m_grafic->tahun_amunisipesawatad(); // wajib, edit
		$fungsi = $_POST['fungsi']; // wajib
		$tahun = $_POST['tahun']; //wajib
		$data['barang_all'] = $this->m_grafic->barang_all(); //wajib
		$data['chart_barang'] = $this->m_grafic->show_amunisipesawatad($fungsi,$tahun); // wajib,edit
		$data['title'] = "Grafic Amunisi Pesawat AD"; //wajib,edit
		$data['view_chart'] = TRUE;
		$this->load->view('grafic/tni_ad/v_amunisipesawat', $data); //wajib, edit

	}


// ____________________________________________________________________________________________________________

// +----------------------------------------------------------------------------------------------------------+
// |----------- GRAFIC TNI AL ---------------- GRAFIC TNI AL ---------------- GRAFIC TNI AL ------------------|
// +----------------------------------------------------------------------------------------------------------+

/* ::::::::::::: SENJATA ::::::::::::::: SENJATA ::::::::::::::::::::::::::::::: */

	public function g_senjata_al(){
		//style sidebar
        $data['link_open_grafic_al'] = 'open';
        $data['link_open_grafic_al'] = 'open';
        $data['link_aktif_grafic_al'] = 'class="active"';
        $data['link_grafic'] = 'class="start active open"';
		//query
		$idkomoditi = 11; // wajib, edit
		$data['jenis'] = $this->m_grafic->get_jenis($idkomoditi);
		$data['tahun'] = $this->m_grafic->tahun_senjataal();
		$data['title'] = "Grafic Senjata AL";
		$data['view_chart'] = FALSE;
		$this->load->view('grafic/tni_al/v_grafic_senjata_al', $data);
	}

	public function show_senjata_al(){
		//style sidebar
        $data['link_open_grafic_al'] = 'open';
        $data['link_open_grafic_al'] = 'open';
        $data['link_aktif_grafic_al'] = 'class="active"';
        $data['link_grafic'] = 'class="start active open"';
		//query
		$idkomoditi = 11; // wajib, edit
		$data['jenis'] = $this->m_grafic->get_jenis($idkomoditi);
		$data['tahun'] = $this->m_grafic->tahun_senjataal();
		$fungsi = $_POST['fungsi'];
		$tahun = $_POST['tahun'];		// wajib
		$data['barang_all'] = $this->m_grafic->barang_all(); //wajib
		$data['chart_barang'] = $this->m_grafic->show_senjataal($fungsi,$tahun); // wajib
		$data['title'] = "Grafic Senjata AL";
		$data['view_chart'] = TRUE;
		$this->load->view('grafic/tni_al/v_grafic_senjata_al', $data);

	}

// ____________________________________________________________________________________________________________

/* ::::::::::::: KAPAL ::::::::::::::: KAPAL ::::::::::::::::::::::::::::::: */

	public function g_kapal_al(){
		//style sidebar
        $data['link_open_grafic_al'] = 'open';
        $data['link_open_grafic_al'] = 'open';
        $data['link_aktif_grafic_al'] = 'class="active"';
        $data['link_grafic'] = 'class="start active open"';
		//query
		$idkomoditi = 14; // wajib, edit
		$data['jenis'] = $this->m_grafic->get_jenis($idkomoditi);
		$data['tahun'] = $this->m_grafic->tahun_kapalal();
		$data['title'] = "Grafic Kapal AL";
		$data['view_chart'] = FALSE;
		$this->load->view('grafic/tni_al/v_grafic_kapal_al', $data);
	}

	public function show_kapal_al(){
		//style sidebar
        $data['link_open_grafic_al'] = 'open';
        $data['link_open_grafic_al'] = 'open';
        $data['link_aktif_grafic_al'] = 'class="active"';
        $data['link_grafic'] = 'class="start active open"';
		//query
		$idkomoditi = 14; // wajib, edit
		$data['jenis'] = $this->m_grafic->get_jenis($idkomoditi);
		$data['tahun'] = $this->m_grafic->tahun_kapalal();
		$fungsi = $_POST['fungsi'];
		$tahun = $_POST['tahun'];		// wajib
		$data['barang_all'] = $this->m_grafic->barang_all(); //wajib
		$data['chart_barang'] = $this->m_grafic->show_kapalal($fungsi,$tahun); // wajib
		$data['title'] = "Grafic Kapal AL";
		$data['view_chart'] = TRUE;
		$this->load->view('grafic/tni_al/v_grafic_kapal_al', $data);

	}

// ____________________________________________________________________________________________________________

/* ::::::::::::: PESAWAT ::::::::::::::: PESAWAT ::::::::::::::::::::::::::::::: */

	public function g_pesawat_al(){
		//style sidebar
        $data['link_open_grafic_al'] = 'open';
        $data['link_open_grafic_al'] = 'open';
        $data['link_aktif_grafic_al'] = 'class="active"';
        $data['link_grafic'] = 'class="start active open"';
		//query
		$idkomoditi = 13; // wajib, edit
		$data['jenis'] = $this->m_grafic->get_jenis($idkomoditi);
		$data['tahun'] = $this->m_grafic->tahun_pesawatal();
		$data['title'] = "Grafic Pesawat AL";
		$data['view_chart'] = FALSE;
		$this->load->view('grafic/tni_al/v_grafic_pesawat_al', $data);
	}

	public function show_pesawat_al(){
		//style sidebar
        $data['link_open_grafic_al'] = 'open';
        $data['link_open_grafic_al'] = 'open';
        $data['link_aktif_grafic_al'] = 'class="active"';
        $data['link_grafic'] = 'class="start active open"';
		//query
		$idkomoditi = 13; // wajib, edit
		$data['jenis'] = $this->m_grafic->get_jenis($idkomoditi);
		$data['tahun'] = $this->m_grafic->tahun_pesawatal();
		$fungsi = $_POST['fungsi'];
		$tahun = $_POST['tahun'];		// wajib
		$data['barang_all'] = $this->m_grafic->barang_all(); //wajib
		$data['chart_barang'] = $this->m_grafic->show_pesawatal($fungsi,$tahun); // wajib
		$data['title'] = "Grafic Pesawat AL";
		$data['view_chart'] = TRUE;
		$this->load->view('grafic/tni_al/v_grafic_pesawat_al', $data);

	}

// ____________________________________________________________________________________________________________

/* ::::::::::::: RANPUR ::::::::::::::: RANPUR ::::::::::::::::::::::::::::::: */

	public function g_ranpur_al(){
		//style sidebar
        $data['link_open_grafic_al'] = 'open';
        $data['link_open_grafic_al'] = 'open';
        $data['link_aktif_grafic_al'] = 'class="active"';
        $data['link_grafic'] = 'class="start active open"';
		//query
		$idkomoditi = 15; // wajib, edit
		$data['jenis'] = $this->m_grafic->get_jenis($idkomoditi);
		$data['tahun'] = $this->m_grafic->tahun_ranpural();
		$data['title'] = "Grafic Ranpur AL";
		$data['view_chart'] = FALSE;
		$this->load->view('grafic/tni_al/v_grafic_ranpur_al', $data);
	}

	public function show_ranpur_al(){
		//style sidebar
        $data['link_open_grafic_al'] = 'open';
        $data['link_open_grafic_al'] = 'open';
        $data['link_aktif_grafic_al'] = 'class="active"';
        $data['link_grafic'] = 'class="start active open"';
		//query
		$idkomoditi = 15; // wajib, edit
		$data['jenis'] = $this->m_grafic->get_jenis($idkomoditi);
		$data['tahun'] = $this->m_grafic->tahun_ranpural();
		$fungsi = $_POST['fungsi'];
		$tahun = $_POST['tahun'];		// wajib
		$data['barang_all'] = $this->m_grafic->barang_all(); //wajib
		$data['chart_barang'] = $this->m_grafic->show_ranpural($fungsi,$tahun); // wajib
		$data['title'] = "Grafic Ranpur AL";
		$data['view_chart'] = TRUE;
		$this->load->view('grafic/tni_al/v_grafic_ranpur_al', $data);

	}

// ____________________________________________________________________________________________________________

/* ::::::::::::: AMUNISI ::::::::::::::: AMUNISI ::::::::::::::::::::::::::::::: */

	public function g_amunisi_al(){
		//style sidebar
        $data['link_open_grafic_al'] = 'open';
        $data['link_open_grafic_al'] = 'open';
        $data['link_aktif_grafic_al'] = 'class="active"';
        $data['link_grafic'] = 'class="start active open"';
		//query
		$idkomoditi = 12; // wajib, edit
		$data['jenis'] = $this->m_grafic->get_jenis($idkomoditi);
		$data['tahun'] = $this->m_grafic->tahun_amunisial();
		$data['title'] = "Grafic Amunisi AL";
		$data['view_chart'] = FALSE;
		$this->load->view('grafic/tni_al/v_grafic_amunisi_al', $data);
	}

	public function show_amunisi_al(){
		//style sidebar
        $data['link_open_grafic_al'] = 'open';
        $data['link_open_grafic_al'] = 'open';
        $data['link_aktif_grafic_al'] = 'class="active"';
        $data['link_grafic'] = 'class="start active open"';
		//query
		$idkomoditi = 12; // wajib, edit
		$data['jenis'] = $this->m_grafic->get_jenis($idkomoditi);
		$data['tahun'] = $this->m_grafic->tahun_amunisial();
		$fungsi = $_POST['fungsi'];
		$tahun = $_POST['tahun'];		// wajib
		$data['barang_all'] = $this->m_grafic->barang_all(); //wajib
		$data['chart_barang'] = $this->m_grafic->show_amunisial($fungsi,$tahun); // wajib
		$data['title'] = "Grafic Amunisi AL";
		$data['view_chart'] = TRUE;
		$this->load->view('grafic/tni_al/v_grafic_amunisi_al', $data);

	}

// ____________________________________________________________________________________________________________

// +----------------------------------------------------------------------------------------------------------+
// |----------- GRAFIC TNI AU ---------------- GRAFIC TNI AU ---------------- GRAFIC TNI AU ------------------|
// +----------------------------------------------------------------------------------------------------------+

/* ::::::::::::: SENJATA ::::::::::::::: SENJATA ::::::::::::::::::::::::::::::: */

	public function g_senjata_au(){
	 //style sidebar
        $data['link_open_grafic_au'] = 'open';
        $data['link_open_grafic_au'] = 'open';
        $data['link_aktif_grafic_au'] = 'class="active"';
        $data['link_grafic'] = 'class="start active open"';

     //Title
        $data['title'] = "List Data Senjata AU";
		
		$idkomoditi = 16; // wajib, edit
		$data['jenis'] = $this->m_grafic->get_jenis($idkomoditi);
		$data['tahun'] = $this->m_grafic->tahun_senjataau();
		$data['title'] = "Grafic Senjata AU";
		$data['view_chart'] = FALSE;
		$this->load->view('grafic/tni_au/v_grafic_senjata_au', $data);
	}

	public function show_senjata_au(){
		//style sidebar
        $data['link_open_grafic_au'] = 'open';
        $data['link_open_grafic_au'] = 'open';
        $data['link_aktif_grafic_au'] = 'class="active"';
        $data['link_grafic'] = 'class="start active open"';
		//query
		$idkomoditi = 16; // wajib, edit
		$data['jenis'] = $this->m_grafic->get_jenis($idkomoditi);
		$data['tahun'] = $this->m_grafic->tahun_senjataau();
		$fungsi = $_POST['fungsi'];
		$tahun = $_POST['tahun'];		// wajib
		$data['barang_all'] = $this->m_grafic->barang_all(); //wajib
		$data['chart_barang'] = $this->m_grafic->show_senjataau($fungsi,$tahun); // wajib
		$data['title'] = "Grafic Senjata AU";
		$data['view_chart'] = TRUE;
		$this->load->view('grafic/tni_au/v_grafic_senjata_au', $data);

	}

// ____________________________________________________________________________________________________________

/* ::::::::::::: PESAWAT ::::::::::::::: PESAWAT ::::::::::::::::::::::::::::::: */

	public function g_pesawat_au(){
		//style sidebar
        $data['link_open_grafic_au'] = 'open';
        $data['link_open_grafic_au'] = 'open';
        $data['link_aktif_grafic_au'] = 'class="active"';
        $data['link_grafic'] = 'class="start active open"';
		//query
		$idkomoditi = 18; // wajib, edit
		$data['jenis'] = $this->m_grafic->get_jenis($idkomoditi);
		$data['tahun'] = $this->m_grafic->tahun_pesawatau();
		$data['title'] = "Grafic Pesawat AU";
		$data['view_chart'] = FALSE;
		$this->load->view('grafic/tni_au/v_grafic_pesawat_au', $data);
	}

	public function show_pesawat_au(){
		//style sidebar
        $data['link_open_grafic_au'] = 'open';
        $data['link_open_grafic_au'] = 'open';
        $data['link_aktif_grafic_au'] = 'class="active"';
        $data['link_grafic'] = 'class="start active open"';
		//query
		$idkomoditi = 18; // wajib, edit
		$data['jenis'] = $this->m_grafic->get_jenis($idkomoditi);
		$data['tahun'] = $this->m_grafic->tahun_pesawatau();
		$fungsi = $_POST['fungsi'];
		$tahun = $_POST['tahun'];		// wajib
		$data['barang_all'] = $this->m_grafic->barang_all(); //wajib
		$data['chart_barang'] = $this->m_grafic->show_pesawatau($fungsi,$tahun); // wajib
		$data['title'] = "Grafic Pesawat AU";
		$data['view_chart'] = TRUE;
		$this->load->view('grafic/tni_au/v_grafic_pesawat_au', $data);

	}

// ____________________________________________________________________________________________________________

/* ::::::::::::: ALPALSUS ::::::::::::::: ALPALSUS ::::::::::::::::::::::::::::::: */

	public function g_alpalsus_au(){
		//style sidebar
        $data['link_open_grafic_au'] = 'open';
        $data['link_open_grafic_au'] = 'open';
        $data['link_aktif_grafic_au'] = 'class="active"';
        $data['link_grafic'] = 'class="start active open"';
		//query
		$idkomoditi = 19; // wajib, edit
		$data['jenis'] = $this->m_grafic->get_jenis($idkomoditi);
		$data['tahun'] = $this->m_grafic->tahun_alpalsusau();
		$data['title'] = "Grafic Alpalsus AU";
		$data['view_chart'] = FALSE;
		$this->load->view('grafic/tni_au/v_grafic_alpalsus_au', $data);
	}

	public function show_alpalsus_au(){
		//style sidebar
        $data['link_open_grafic_au'] = 'open';
        $data['link_open_grafic_au'] = 'open';
        $data['link_aktif_grafic_au'] = 'class="active"';
        $data['link_grafic'] = 'class="start active open"';
		//query
		$idkomoditi = 19; // wajib, edit
		$data['jenis'] = $this->m_grafic->get_jenis($idkomoditi);
		$data['tahun'] = $this->m_grafic->tahun_alpalsusau();
		$fungsi = $_POST['fungsi'];
		$tahun = $_POST['tahun'];		// wajib
		$data['barang_all'] = $this->m_grafic->barang_all(); //wajib
		$data['chart_barang'] = $this->m_grafic->show_alpalsusau($fungsi,$tahun); // wajib
		$data['title'] = "Grafic Alpalsus AU";
		$data['view_chart'] = TRUE;
		$this->load->view('grafic/tni_au/v_grafic_alpalsus_au', $data);

	}

// ____________________________________________________________________________________________________________

/* ::::::::::::: AMUNISI ::::::::::::::: AMUNISI ::::::::::::::::::::::::::::::: */

	public function g_amunisi_au(){
		//style sidebar
        $data['link_open_grafic_au'] = 'open';
        $data['link_open_grafic_au'] = 'open';
        $data['link_aktif_grafic_au'] = 'class="active"';
        $data['link_grafic'] = 'class="start active open"';
		//query
		$idkomoditi = 17; // wajib, edit
		$data['jenis'] = $this->m_grafic->get_jenis($idkomoditi);
		$data['tahun'] = $this->m_grafic->tahun_amunisiau();
		$data['title'] = "Grafic Amunisi AU";
		$data['view_chart'] = FALSE;
		$this->load->view('grafic/tni_au/v_grafic_amunisi_au', $data);
	}

	public function show_amunisi_au(){
		//style sidebar
        $data['link_open_grafic_au'] = 'open';
        $data['link_open_grafic_au'] = 'open';
        $data['link_aktif_grafik_au'] = 'class="active"';
        $data['link_grafic'] = 'class="start active open"';
		//query
		$idkomoditi = 17; // wajib, edit
		$data['jenis'] = $this->m_grafic->get_jenis($idkomoditi);
		$data['tahun'] = $this->m_grafic->tahun_amunisiau();
		$fungsi = $_POST['fungsi'];
		$tahun = $_POST['tahun'];		// wajib
		$data['barang_all'] = $this->m_grafic->barang_all(); //wajib
		$data['chart_barang'] = $this->m_grafic->show_amunisiau($fungsi,$tahun); // wajib
		$data['title'] = "Grafic Amunisi AU";
		$data['view_chart'] = TRUE;
		$this->load->view('grafic/tni_au/v_grafic_amunisi_au', $data);

	}

// ____________________________________________________________________________________________________________



}
