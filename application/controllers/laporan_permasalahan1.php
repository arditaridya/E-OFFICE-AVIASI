<?php 

if(!defined('BASEPATH')) exit('No direct script access allowed');

class Laporan_permasalahan extends CI_Controller{
	public function __construct() {
        parent::__construct();
        session_start();

        if ($this->session->userdata('level') == null or $this->session->userdata('level') == '3') {
            $this->session->set_flashdata('session_expired', TRUE);
            redirect('login');
        }
    }
	
	public function index($lanud_id){
		$x = explode("_",$lanud_id);
		
		$data['title'] = "Laporan Permasalahan";
		$data['link_data_2'] = "class='start active open'";
		$data['link_permasalahan'] = "class='active'";
		
		// 20160606 $q_label = $this->db->query("select a.lanud from m_lanud a,lanud_flag b where b.username='".$this->session->userdata('user_name')."' and b.lanudnya=a.id")->result();
		$q_label = $this->db->query("select lanud from m_lanud where id='".$x[3]."'")->result();
		$data['nama_lanud'] = "";
		foreach($q_label as $dataQLabel){
			$data['nama_lanud'] = $dataQLabel->lanud;
		}
		
		$q_tahun = "";
		// 20160606 if(!empty($this->uri->segment(3)) and $this->uri->segment(3) != "0-0"){
		if($x[0] != "0-0"){
			// 20160606 $x_tgl = explode("-",$this->uri->segment(3));
			$x_tgl = explode("-",$x[0]);
			$q_tahun = " and c.tahun_perolehan <= '".$x_tgl[1]."'";
		}
		
		// 20160606 $data['data'] = $this->db->query("select a.kotama,b.lanud,c.lokasi,c.luas,c.nilai,d.permasalahan from kotama a,m_lanud b,data_aset c,permasalahan d,lanud_flag e where e.username='".$this->session->userdata('user_name')."' and e.lanudnya=b.id and b.kotama=a.id and c.lanud=b.id and d.lanud=b.id".$q_tahun)->result();
		$data['data'] = $this->db->query("select a.kotama,b.lanud,c.lokasi,c.nilai,d.permasalahan,g.bmn,g.bangunan,g.tanah,g.sewa,d.hasil_klarifikasi,d.tindak_lanjut from kotama a,m_lanud b,data_aset c,permasalahan d,pemanfaatan f,detil_pemanfaatan g where b.id='".$x[3]."' and b.kotama=a.id and c.lanud=b.id and d.lanud=b.id and d.simak=f.simak and f.id=g.t_pemanfaatan".$q_tahun." order by d.id desc,g.id desc")->result();
		
		$this->load->view('laporan_permasalahan/view',$data);
	}
	
	public function cetak($lanud_id){
		$x = explode("_",$lanud_id);
		
		$q_tahun = "";
		// 20160606 if(!empty($this->uri->segment(3)) and $this->uri->segment(3) != "0-0"){
		if($x[0] != "0-0"){
			// 20160606 $x_tgl = explode("-",$this->uri->segment(3));
			$x_tgl = explode("-",$x[0]);
			$q_tahun = " and c.tahun_perolehan <= '".$x_tgl[1]."'";
		}
		
		// 20160606 $data['data'] = $this->db->query("select a.kotama,b.lanud,c.lokasi,c.luas,c.nilai,d.permasalahan from kotama a,m_lanud b,data_aset c,permasalahan d,lanud_flag e where e.username='".$this->session->userdata('user_name')."' and e.lanudnya=b.id and b.kotama=a.id and c.lanud=b.id and d.lanud=b.id".$q_tahun)->result();
		$data['data'] = $this->db->query("select a.kotama,b.lanud,c.lokasi,c.nilai,d.permasalahan,g.bmn,g.bangunan,g.tanah,g.sewa,d.hasil_klarifikasi,d.tindak_lanjut from kotama a,m_lanud b,data_aset c,permasalahan d,pemanfaatan f,detil_pemanfaatan g where b.id='".$x[3]."' and b.kotama=a.id and c.lanud=b.id and d.lanud=b.id and d.simak=f.simak and f.id=g.t_pemanfaatan".$q_tahun." order by d.id desc,g.id desc")->result();
		
		$this->load->library('pdf');
		$pdf = $this->pdf->load();
		$pdf->AddPage('L');
		$pdf->WriteHTML($this->load->view('laporan_permasalahan/pdf_report', $data, true));
		$pdf->Output();
	}
}