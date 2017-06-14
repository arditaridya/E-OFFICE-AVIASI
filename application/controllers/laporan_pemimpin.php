<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Laporan_pemimpin extends CI_Controller {
	
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
	
	
	public function index(){
		//$data['link_open_wilayah'] = 'class="start active open"';
        //$data['link_aktif_wilayah'] = 'class="active"';
        //$data['link_data_master'] = 'class="start active open"';
			$q_condition_kotama = "";
       	if(!empty($this->uri->segment(3)) and $this->uri->segment(3) != "0-0"){
			$x_tahun = explode("-",$this->uri->segment(3));
			$q_condition_kotama = "and a.tahun_perolehan between '".$x_tahun[0]."' and '".$x_tahun[1]."'";
		}
		$data['title'] = "Laporan";
		//$data['link_open_master'] = 'open';
        //$data['link_aktif_kesatuan'] = 'class="active"';
        //$data['link_data_master'] = 'class="start active open"';
		$data['link_admin_aktif'] = 'class="start active open"';
		
					$queryzz = $this->db->query("SELECT 
										*
										FROM kotama
										

                    

                    

                    ")->result();
					
				
					$data['datanyax'] = $queryzz;
					
					$queryzx = $this->db->query("SELECT count(d.kotama) as kun 
												FROM 
													data_aset b,m_lanud c, kotama d
												WHERE
													
													b.lanud = c.id and
													c.kotama = d.id 
										

                    

                    

                    ")->result();
					foreach ($queryzx as $ruk)
						{
						$kun = $ruk->kun;
						
						}	
				
					$data['kun'] = $kun;
					
		$q_kotama = $this->db->query("select * from kotama")->result();
		
		$data['kotama'] = "";
		$data['total'] = "";
		$data['sudah'] = "";
		$data['belum'] = "";
		$kotama = array();
		foreach($q_kotama as $dataQKotama){
			/*
			$q_jml = $this->db->query("SELECT count(d.id) as jml,d.jenis FROM data_aset a,kotama b,m_lanud c,
			detil_dataaset d where a.lanud = c.id and c.kotama = b.id and c.kotama = '".$dataQKotama->id."'
			and d.dataaset=a.id ".$q_condition_kotama."
			group by d.jenis order by d.jenis")->result();
			*/
			
			$q_jml = $this->db->query("select count(a.id) as jml from data_aset a,m_lanud b,kotama c where a.lanud=b.id and b.kotama=c.id and c.id='".$dataQKotama->id."'")->result();
			
			if(empty($this->uri->segment(3))){
				$data['kotama'] = $data['kotama']."'".$dataQKotama->kotama."',";
			}else{
				array_push($kotama,$dataQKotama->kotama);
			}
			
			/*
			$total = 0;
			$sudah = 0;
			$belum = 0;
			foreach($q_jml as $dataQJml){
				$total = $total + $dataQJml->jml;
				if($dataQJml->jenis == "1"){
					$sudah = $sudah + $dataQJml->jml;
				}else{
					$belum = $belum + $dataQJml->jml;
				}
			}
			
			$data['total'] = $data['total'].$total.",";
			$data['sudah'] = $data['sudah'].$sudah.",";
			$data['belum'] = $data['belum'].$belum.",";
			*/
			
			$jml = 0;
			foreach($q_jml as $dataQJml){
				$jml = $jml + $dataQJml->jml;
			}
			
			$data['total'] = $data['total'].$jml.",";
		}
		
		/*
		if(!empty($this->uri->segment(3))){
			for($b=$x_tahun[0];$b<=$x_tahun[1];$b++){
				$data['kotama'] = $data['kotama']."'".$b."',";
			}
		}
		*/
		
		if(empty($this->uri->segment(3))){
			//$data['label'] = array("Total","Sudah Sertifikat","Belum Sertifikat");
			$data['label'] = array("Jumlah Simak");
		}else{
			
		}
		
		//$data['data'] = array($data['total'],$data['sudah'],$data['belum']);
		$data['data'] = array($data['total']);
		
		$q_luas = $this->db->query("select sum(cast(luas as bigint)) as jml,jenis from detil_dataaset group by jenis order by jenis asc")->result();
		
		$data['sudah'] = 0;
		$data['belum'] = 0;
		$jml_luas = 0;
		foreach($q_luas as $dataQLuas){
			$jml_luas = $jml_luas + $dataQLuas->jml;
			if($dataQLuas->jenis == "1"){
				$data['sudah'] = $dataQLuas->jml;
			}else{
				$data['belum'] = $dataQLuas->jml;
			}
		}
		
		$data['sudah'] = ($data['sudah'] * 100) / $jml_luas;
		$data['belum'] = ($data['belum'] * 100) / $jml_luas;
		
		/*
		$x_kotama = explode(",",$data['kotama']);
		$x_total = explode(",",$data['total']);
		$jml = 0;
		foreach($x_total as $dataQTotal){
			$jml = $jml + $dataQTotal;
		}
		
		$k = "";
		for($a=0;$a<count($x_kotama)-1;$a++){
			$k = $k.$x_kotama[$a]." * ";
		}
		//echo $k;die();
		*/
		
    	$this->load->view('laporan_pemimpin/view',$data);
		
	}
	
	public function laporan_perpangkalan($id){
		//echo $id."asdad";die();
		$data['title'] = "Laporan Per Pangkalan";
		//$data['link_open_master'] = 'open';
        //$data['link_aktif_kesatuan'] = 'class="active"';
        //$data['link_data_master'] = 'class="start active open"';
		$data['link_admin_aktif'] = 'class="start active open"';
		
					$queryzz = $this->db->query("SELECT 
										*
										FROM 
											m_lanud
										WHERE
											kotama='$id'
										

                    

                    

                    ")->result();
					
				
					$data['datanyax'] = $queryzz;
					
					$queryzx = $this->db->query("SELECT d.kotama 
												FROM 
													data_aset b,m_lanud c, kotama d
												WHERE
													
													b.lanud = c.id and
													c.kotama = d.id and
													d.id = '$id'
										

                    

                    

                    ")->result();
					
				
					$data['jumda'] = $queryzx;
					$query = $this->db->query("SELECT 
								*
							FROM 
								kotama
							WHERE
								id='$id'
								
								")->result();
								
					foreach ($query as $ruk)
							{
							$idnya = $ruk->id;
							$namanya = $ruk->kotama;				
							}	
					$data['idnya'] = $idnya;
					$data['namanya'] = $namanya;
					
		$q_lanud = $this->db->query("select id,lanud from m_lanud where kotama='".$id."'")->result();
		
		$data['lanud'] = "";
		$data['total'] = "";
		$data['sudah'] = "";
		$data['belum'] = "";
		foreach($q_lanud as $dataQLanud){
			$data['lanud'] = $data['lanud']."'".$dataQLanud->lanud."',";
			
			/*
			$q_jml = $this->db->query("SELECT count(d.id) as jml,d.jenis FROM data_aset a,m_lanud c,detil_dataaset d
			where a.lanud = c.id and c.id = '".$dataQLanud->id."' and d.dataaset=a.id group by d.jenis
			order by d.jenis")->result();
			*/
			
			$q_jml = $this->db->query("select count(a.id) as jml from data_aset a,m_lanud b where a.lanud=b.id and b.id='".$dataQLanud->id."'")->result();
			
			/*
			$total = 0;
			$sudah = 0;
			$belum = 0;
			foreach($q_jml as $dataQJml){
				$total = $total + $dataQJml->jml;
				if($dataQJml->jenis == "1"){
					$sudah = $sudah + $dataQJml->jml;
				}else{
					$belum = $belum + $dataQJml->jml;
				}
			}
			
			$data['total'] = $data['total'].$total.",";
			$data['sudah'] = $data['sudah'].$sudah.",";
			$data['belum'] = $data['belum'].$belum.",";
			*/
			
			$jml = 0;
			foreach($q_jml as $dataQJml){
				$jml = $jml + $dataQJml->jml;
			}
			
			$data['total'] = $data['total'].$jml.",";
		}
		
		//$data['label'] = array("Total","Sudah Sertifikat","Belum Sertifikat");
		$data['label'] = array("Jumlah Simak");
		//$data['data'] = array($data['total'],$data['sudah'],$data['belum']);
		$data['data'] = array($data['total']);
		
		$q_luas = $this->db->query("select sum(cast(a.luas as bigint)) as jml,a.jenis from detil_dataaset a,data_aset b,m_lanud c where a.dataaset=b.id and b.lanud=c.id and c.kotama='".$id."' group by a.jenis order by a.jenis asc")->result();
		
		$data['sudah'] = 0;
		$data['belum'] = 0;
		$jml_luas = 0;
		foreach($q_luas as $dataQLuas){
			$jml_luas = $jml_luas + $dataQLuas->jml;
			if($dataQLuas->jenis == "1"){
				$data['sudah'] = $dataQLuas->jml;
			}else{
				$data['belum'] = $dataQLuas->jml;
			}
		}
		
		$data['sudah'] = ($data['sudah'] * 100) / $jml_luas;
		$data['belum'] = ($data['belum'] * 100) / $jml_luas;
		
		$this->load->view('laporan_pemimpin/lalanud',$data);
	}
	
	public function laporan_persatuan($id){
		//echo $id."asdad";die();
		$data['title'] = "Laporan Per SATKER";
		//$data['link_open_master'] = 'open';
        //$data['link_aktif_kesatuan'] = 'class="active"';
        //$data['link_data_master'] = 'class="start active open"';
		$data['link_admin_aktif'] = 'class="start active open"';
		
					$queryzz = $this->db->query("SELECT 
										*
										FROM 
											data_aset
										WHERE
											lanud='$id'
										

                    

                    

                    ")->result();
					
				
					$data['datanyax'] = $queryzz;
					
					$queryzx = $this->db->query("SELECT * 
												FROM 
													data_aset b,m_lanud c
												WHERE
													
													b.lanud = c.id and
													c.id = '$id'
										

                    

                    

                    ")->result();
					
				
					$data['jumda'] = $queryzx;
					$query = $this->db->query("SELECT 
								*
							FROM 
								m_lanud
							WHERE
								id='$id'
								
								")->result();
								
					foreach ($query as $ruk)
							{
							$idnya = $ruk->id;
							$namanya = $ruk->lanud;
							$kotamanya = $ruk->kotama;	
							}	
					$data['idnya'] = $idnya;
					$data['namanya'] = $namanya;
					$query = $this->db->query("SELECT 
								*
							FROM 
								kotama
							WHERE
								id='$kotamanya'
								
								")->result();
								
					foreach ($query as $ruk)
							{
							$idnya2 = $ruk->id;
							$namanya2 = $ruk->kotama;
								
							}
					$data['idnya2'] = $idnya2;
					$data['namanya2'] = $namanya2;
		$this->load->view('laporan_pemimpin/lapsat',$data);
	}
	
	
	
	

	
	
}

?>