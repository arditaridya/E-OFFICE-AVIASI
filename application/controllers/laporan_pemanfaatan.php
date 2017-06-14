<?php 

if(!defined('BASEPATH')) exit('No direct script access allowed');

class Laporan_pemanfaatan extends CI_Controller{
	public function __construct() {
        parent::__construct();
        session_start();

        if ($this->session->userdata('level') == null or $this->session->userdata('level') == '3') {
            $this->session->set_flashdata('session_expired', TRUE);
            redirect('login');
        }
    }
	
	public function index($lanud_id){
		$lanud_id = substr($lanud_id,9,strlen($lanud_id));
		
		$data['title'] = "Laporan Pemanfaatan";
		$data['link_data_2'] = "class='start active open'";
		$data['link_pemanfaatan'] = "class='active'";
		
		// 20160606 $q_label = $this->db->query("select a.lanud from m_lanud a,lanud_flag b where b.username='".$this->session->userdata('user_name')."' and b.lanudnya=a.id")->result();
		$q_label = $this->db->query("select lanud from m_lanud where id='".$lanud_id."'")->result();
		$data['nama_lanud'] = "";
		foreach($q_label as $dataQLabel){
			$data['nama_lanud'] = $dataQLabel->lanud;
		}
		
		// 20160606 $data['data'] = $this->db->query("select a.lokasi,c.bmn,c.bangunan,c.tanah,c.sewa,c.menkeu,c.perjanjian,c.peruntukan,c.penyewa,c.pola_kerjasama from data_aset a,pemanfaatan b,detil_pemanfaatan c,lanud_flag d where d.username='".$this->session->userdata('user_name')."' and d.lanudnya=b.lanud and b.simak=cast(a.id as varchar(10)) and c.t_pemanfaatan=b.id")->result();
		$data['data'] = $this->db->query("select a.lokasi,c.bmn,c.bangunan,c.tanah,c.sewa,c.menkeu,c.perjanjian,c.peruntukan,c.penyewa,c.pola_kerjasama,c.masa_kerjasama from data_aset a,pemanfaatan b,detil_pemanfaatan c where b.lanud='".$lanud_id."' and b.simak=a.simak and c.t_pemanfaatan=b.id order by c.id desc")->result();
		//$data['data'] = $this->db->query("select * from data_aset where id='1000'")->result();
		$this->load->view('laporan_pemanfaatan/view',$data);
	}
	
	public function cetak($lanud_id){
		$lanud_id = substr($lanud_id,9,strlen($lanud_id));
		
		// 20160606 $q_label = $this->db->query("select a.lanud from m_lanud a,lanud_flag b where b.username='".$this->session->userdata('user_name')."' and b.lanudnya=a.id")->result();
		$q_label = $this->db->query("select lanud from m_lanud where id='".$lanud_id."'")->result();
		$data['nama_lanud'] = "";
		foreach($q_label as $dataQLabel){
			$data['nama_lanud'] = $dataQLabel->lanud;
		}
		
		// 20160606 $data['data'] = $this->db->query("select a.lokasi,c.bmn,c.bangunan,c.tanah,c.sewa,c.menkeu,c.perjanjian,c.peruntukan,c.penyewa,c.pola_kerjasama from data_aset a,pemanfaatan b,detil_pemanfaatan c,lanud_flag d where d.username='".$this->session->userdata('user_name')."' and d.lanudnya=b.lanud and b.simak=cast(a.id as varchar(10)) and c.t_pemanfaatan=b.id")->result();
		$data['data'] = $this->db->query("select a.lokasi,c.bmn,c.bangunan,c.tanah,c.sewa,c.menkeu,c.perjanjian,c.peruntukan,c.penyewa,c.pola_kerjasama,c.masa_kerjasama from data_aset a,pemanfaatan b,detil_pemanfaatan c where b.lanud='".$lanud_id."' and b.simak=a.simak and c.t_pemanfaatan=b.id order by c.id desc")->result();
		//$data['data'] = $this->db->query("select * from data_aset where id='1000'")->result();
		$this->load->library('pdf');
		$pdf = $this->pdf->load();
		$pdf->AddPage('L');
		$pdf->WriteHTML($this->load->view('laporan_pemanfaatan/pdf_report', $data, true));
		$pdf->Output();
	}
}