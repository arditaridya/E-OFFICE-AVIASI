<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class C_kesatuan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        session_start();

        if ($this->session->userdata('level') == null) {
            $this->session->set_flashdata('session_expired', TRUE);
            redirect('login');
        }

        $this->load->model('m_kesatuan');
        $this->load->model('m_form_kesatuan');

    }

    public function index(){
    	$this->unit_organisasi();
    }
    public function unit_organisasi(){
       		
		$data['title'] = "Unit Organisasi";
		$data['link_open_master'] = 'open';
        $data['link_aktif_kesatuan'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		
    	$this->load->view('unit_organisasi/view_main_menu_unit_organisasi',$data);
    }
	
	public function laporan(){
		$grupw = $this->session->userdata('grup_user');
		$kotamaw = $this->session->userdata('kotama');
		$lanudw = $this->session->userdata('lanud');
		if($grupw == 1){
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
		$total_pemanfaatan = "";
		$total_permasalahan = "";
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
			
			$q_total_pemanfaatan = $this->db->query("select count(b.kotama) as jml from pemanfaatan a,m_lanud b
				where a.lanud=b.id and b.kotama='".$dataQKotama->id."'")->result();
				
			$q_total_permasalahan = $this->db->query("select count(b.kotama) as jml from permasalahan a,m_lanud b
				where a.lanud=b.id and b.kotama='".$dataQKotama->id."'")->result();
				
			foreach($q_total_pemanfaatan as $dataTotalPemanfaatan){
				$total_pemanfaatan = $total_pemanfaatan.$dataTotalPemanfaatan->jml.",";
			}
			
			foreach($q_total_permasalahan as $dataTotalPermasalahan){
				$total_permasalahan = $total_permasalahan.$dataTotalPermasalahan->jml.",";
			}
		}
		
		$data['data_pemanfaatan'] = array($total_pemanfaatan);
		$data['data_permasalahan'] = array($total_permasalahan);
		
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
		
    	$this->load->view('unit_organisasi/laporan',$data);
		}else if($grupw == 2){
			redirect("c_kesatuan/laporan_perpangkalan/".$kotamaw);
		}else if($grupw == 3){
			redirect("c_kesatuan/laporan_persatuan/".$lanudw);
		}
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
		
		$this->load->view('unit_organisasi/lalanud',$data);
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
		$this->load->view('unit_organisasi/lapsat',$data);
	}
	
	//=========================================== LANUD ================================================//
	
     public function lanud($idmantra){
		//echo $idmantra."asasasa";die();
        $data['title'] = 'Satker';
		$data['link_open_master'] = 'open';
        $data['link_aktif_kesatuan'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		
        $data['idmantra'] = $idmantra;
		$query = $this->db->query("SELECT 
					*
				FROM 
					kotama
				WHERE
					id='$idmantra'
					
					")->result();
					
		foreach ($query as $ruk)
				{
				$idnya = $ruk->id;
				$namanya = $ruk->kotama;				
				}	
		$data['idnya'] = $idnya;
		$data['namanya'] = $namanya;
		
        //$data['list_kodikau'] = $this->m_kesatuan->list_kes_kodikau();
	
		$query = $this->db->query("SELECT 
				* 
			FROM 
				m_lanud 
			WHERE 
				kotama = '$idmantra'
			ORDER BY 
				id ASC
				")->result();
		$data['datanya']=$query;
        $this->load->view('unit_organisasi/view_lanud',$data);
		
    }
	
	public function tambahlanud($idkotama){
		$data['link_open_master'] = 'open';
        $data['link_aktif_kesatuan'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		$data['title'] = "Tambah Satker";
		//echo $idkotama."asasa";die();
		$query = $this->db->query("SELECT 
					*
				FROM 
					kotama
				WHERE
					id='$idkotama'
					
					")->result();
					
		foreach ($query as $ruk)
				{
				$idnya = $ruk->id;
				$namanya = $ruk->kotama;				
				}	
		$data['idnya'] = $idnya;
		$data['namanya'] = $namanya;		
				
    	$this->load->view('unit_organisasi/tambah',$data);
    }
	
	public function simpanlanud(){
		$data['link_open_master'] = 'open';
        $data['link_aktif_kesatuan'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		$linku = $_POST['kotama'];
		//echo "insert into m_lanud (kotama,lanud,detillanud,latitut,longitut) values ('".$_POST['kotama']."','".$_POST['lanud']."','".$_POST['detillanud']."','".$_POST['latitut']."','".$_POST['longitut']."')";die();
		$this->db->query("insert into m_lanud (kotama,lanud,detillanud,latitut,longitut) values ('".$_POST['kotama']."','".$_POST['lanud']."','".$_POST['detillanud']."','".$_POST['latitut']."','".$_POST['longitut']."')");
		redirect("c_kesatuan/lanud/$linku", "refresh");
		
	}
	
	public function editlanud($idkotama,$idlanud){
		$data['link_open_master'] = 'open';
        $data['link_aktif_kesatuan'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		$data['title'] = "Edit Satker";
		//echo $idkotama."asasa";die();
		$query = $this->db->query("SELECT 
					*
				FROM 
					m_lanud
				WHERE
					id='$idlanud'
					
					")->result();
		/*			
		foreach ($query as $ruk)
				{
				$idnya = $ruk->id;
				$namanya = $ruk->kotama;				
				}	
		$data['idnya'] = $idnya;
		$data['namanya'] = $namanya;
		*/
		$data['datanya'] = $query;
		
		$query2 = $this->db->query("SELECT 
					*
				FROM 
					kotama
				WHERE
					id='$idkotama'
					
					")->result();
					
		foreach ($query2 as $ruk)
				{
				$idnya = $ruk->id;
				$namanya = $ruk->kotama;				
				}	
		$data['idnya'] = $idnya;
		$data['namanya'] = $namanya;
				
    	$this->load->view('unit_organisasi/edit',$data);
    }
	
	
	public function updatelanud(){
		$data['link_open_master'] = 'open';
        $data['link_aktif_kesatuan'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		$linku = $_POST['kotama'];
		$this->db->query("update m_lanud set lanud = '".$_POST['lanud']."',  detillanud ='".$_POST['detillanud']."', latitut='".$_POST['latitut']."', longitut='".$_POST['longitut']."' where kotama = '".$_POST['kotama']."' and id='".$_POST['idnya']."'");
		redirect("c_kesatuan/lanud/$linku", "refresh");
		
	}
	
	public function deletelanud($id){
	
		//echo $id."asasasaas";die();
		$query = $this->db->query("SELECT 
					*
				FROM 
					m_lanud
				WHERE
					id='$id'
					
					")->result();
					
		foreach ($query as $ruk)
				{
				$kotamanya = $ruk->kotama;
								
				}	
				//echo $kotamanya."wwwwwww";die();
		
		$this->db->query("delete from m_lanud where id='$id'");
		redirect("c_kesatuan/lanud/$kotamanya", "refresh");
		
	}
	
	public function tambah_kodikau(){
		
		$data['title'] = 'KODIKAU';
		$data['link_open_master'] = 'open';
        $data['link_aktif_kesatuan'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		
		$lanudId = $this->uri->segment(3);
		$data['lanudId'] = $lanudId;
		
		//Insert
		if($this->input->post('SIMPAN')){
			$this->m_kesatuan->tambah_kodikau();
			$this->session->set_flashdata('tambah_sukses', TRUE);
            redirect('c_kesatuan/kodikau/4', 'refresh');
			//echo $this->input->post('KESATUAN').'<br>';
			// echo $id;
			// die();
			
		} else if($this->input->post('batal')){
			redirect('c_kesatuan/kodikau/4', 'refresh');
		}
				
    	$this->load->view('unit_organisasi/kodikau/view_tambah_kodikau',$data);
	}
	
	public function edit_kodikau($lanudId){
		
		$data['title'] = 'KODIKAU';
		$data['link_open_master'] = 'open';
        $data['link_aktif_kesatuan'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		
		$lanudId = $this->uri->segment(3);
		$data['lanudId'] = $lanudId;
		
		$data['kodikau'] = $this->m_kesatuan->edit_kodikau($lanudId);
		
		//update
		if($this->input->post('SIMPAN')){
			$this->m_kesatuan->update_kodikau($lanudId);
            $this->session->set_flashdata('update_sukses', TRUE);
			redirect('c_kesatuan/kodikau/4', 'refresh');
			// echo $this->input->post('KESATUAN');
			// die();
		} else if($this->input->post('BATAL')){
			redirect('c_kesatuan/kodikau/4', 'refresh');
		}
		
		$this->load->view('unit_organisasi/kodikau/view_edit_kodikau',$data);
	}
	
	public function delete_kodikau($lanudId){
		
		$lanudId = $this->uri->segment(3);
		$this->m_kesatuan->delete_tni_al($lanudId);
		$this->session->set_flashdata('hapus_sukses', TRUE);	
		redirect('c_kesatuan/kodikau/4', 'refresh');
	}
	
	
	///// 2
	//////////////////
	
	public function kodikau2(){
		
        $data['title'] = 'KODIKAU';
		$data['link_open_master'] = 'open';
        $data['link_aktif_kesatuan'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		
		//breadcrumb
		$data['kodikau_breadcrumb'] = $this->m_kesatuan->kodikau_breadcrumb();
		
		$lanudId = $this->uri->segment(3);
		$data['lanudId'] = $lanudId;
		
    	$data['list_kodikau2'] = $this->m_kesatuan->list_kodikau2();
    	$this->load->view('unit_organisasi/kodikau/view_kodikau2',$data);
    }
	
	public function tambah_kodikau2(){
		
		$data['title'] = 'KODIKAU';
		$data['link_open_master'] = 'open';
        $data['link_aktif_kesatuan'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		
		//breadcrumb
		$data['kodikau_breadcrumb'] = $this->m_kesatuan->kodikau_breadcrumb();
		
		$lanudId = $this->uri->segment(3);
		$data['lanudId'] = $lanudId;
		
		//Insert
		if($this->input->post('SIMPAN')){
			$this->m_kesatuan->tambah_kodikau2();
			$this->session->set_flashdata('tambah_sukses', TRUE);
            redirect('c_kesatuan/kodikau2/'.$lanudId.'', 'refresh');
			// echo $this->input->post('KESATUAN').'<br>';
			// echo '3.'.$id;
			// die();
			
		} else if($this->input->post('BATAL')){
			redirect('c_kesatuan/kodikau2/'.$id.'', 'refresh');
		}
				
    	$this->load->view('unit_organisasi/kodikau/view_tambah_kodikau2',$data);
		
	}
	
	public function edit_kodikau2($kotamaId,$lanudId){
		
		$data['title'] = 'KODIKAU';
		$data['link_open_master'] = 'open';
        $data['link_aktif_kesatuan'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		
		//breadcrumb
		$idindukbread = $this->m_kesatuan->kodikau_breadcrumb2();
		$data['kodikau_breadcrumb2'] = $idindukbread;
		
		$lanudId = $this->uri->segment(4);
		$data['lanudId'] = $lanudId;
		$data['kotamaId'] = $kotamaId;
		$idk = substr($kotamaId, -2);
		
		$data['kodikau'] = $this->m_kesatuan->edit_kodikau($lanudId);
		
		//update
		if($this->input->post('SIMPAN')){
			$this->m_kesatuan->update_kodikau($lanudId);
            $this->session->set_flashdata('update_sukses', TRUE);
			redirect('c_kesatuan/kodikau2/'.$idk.'', 'refresh');
			// echo $this->input->post('KESATUAN');
			// die();
		} else if($this->input->post('BATAL')){
			redirect('c_kesatuan/kodikau2/'.$idk.'', 'refresh');
		}
		
		$this->load->view('unit_organisasi/kodikau/view_edit_kodikau2',$data);
	}
	
	public function delete_kodikau2($kotamaId,$lanudId){
		
		$lanudId = $this->uri->segment(4);
		$idk = substr($kotamaId, -2);
		
		$this->m_kesatuan->delete_kodikau($lanudId);
		$this->session->set_flashdata('hapus_sukses', TRUE);	
		redirect('c_kesatuan/kodikau2/'.$idk.'', 'refresh');
	}
	
	//======================================== END KODIKAU ================================================//
	public function provinsi(){
		
        $data['title'] = 'Mabes TNI';
		$data['link_open_master'] = 'open';
        $data['link_aktif_kesatuan'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
				
       
		
		$this->load->view('provinsi/halo',$data);
    }
	
	
	//===================================== MABES TNI ================================================//
	
    public function mabes_tni($idmantra){
		
        $data['title'] = 'Mabes TNI';
		$data['link_open_master'] = 'open';
        $data['link_aktif_kesatuan'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
				
        $data['idmantra'] = $idmantra;
		
    	$data['list_mabes_tni'] = $this->m_kesatuan->list_kes_mabes_tni();
		
		$this->load->view('unit_organisasi/mabes_tni/view_mabes_tni',$data);
    }
	
		
	public function tambah_mabes_tni(){
		
		$data['title'] = 'Mabes TNI';
		$data['link_open_master'] = 'open';
        $data['link_aktif_kesatuan'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
				
		$id = $this->uri->segment(3);
		$data['id'] = $id;
		
		//Insert
		if($this->input->post('SIMPAN')){
			$this->m_kesatuan->tambah_mabes_tni();
			$this->session->set_flashdata('tambah_sukses', TRUE);
            redirect('c_kesatuan/mabes_tni/1', 'refresh');
			// echo $this->input->post('KESATUAN').'<br>';
			// echo $id;
			// die();
			
		} else if($this->input->post('BATAL')){
			redirect('c_kesatuan/mabes_tni/1', 'refresh');
		}
				
		$this->load->view('unit_organisasi/mabes_tni/view_tambah_mabes_tni',$data);		
	}
	
	public function edit_mabes_tni($id){
		
		$data['title'] = 'Mabes TNI';
		$data['link_open_master'] = 'open';
        $data['link_aktif_kesatuan'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		
		$id = $this->uri->segment(3);
		$data['id'] = $id;
		
		$data['mabes_tni'] = $this->m_kesatuan->edit_mabes_tni($id);
		
		//update
		if($this->input->post('SIMPAN')){
			$this->m_kesatuan->update_mabes_tni($id);
            $this->session->set_flashdata('update_sukses', TRUE);
			redirect('c_kesatuan/mabes_tni/1', 'refresh');
			// echo $this->input->post('KESATUAN');
			// die();
		} else if($this->input->post('BATAL')){
			redirect('c_kesatuan/mabes_tni/1', 'refresh');
		}
		
		$this->load->view('unit_organisasi/mabes_tni/view_edit_mabes_tni',$data);
	}
		
	public function delete_mabes_tni($id){
		
		$id = $this->uri->segment(3);
		$this->m_kesatuan->delete_mabes_tni($id);
		$this->session->set_flashdata('hapus_sukses', TRUE);	
		redirect('c_kesatuan/mabes_tni/1', 'refresh');
	}
	
	///// 2
	//////////////////
		
	public function mabes_tni2(){
		
        $data['title'] = 'Mabes TNI';
		$data['link_open_master'] = 'open';
        $data['link_aktif_kesatuan'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		
		//breadcrumb
		$data['mabes_tni_breadcrumb'] = $this->m_kesatuan->mabes_tni_breadcrumb();
		
		$id = $this->uri->segment(3);
		$data['id'] = $id;
		
    	$data['list_mabes_tni2'] = $this->m_kesatuan->list_kes_mabes_tni2();
    	$this->load->view('unit_organisasi/mabes_tni/view_mabes_tni2',$data);
    }
	
	public function tambah_mabes_tni2(){
		
		$data['title'] = 'Mabes TNI';
		$data['link_open_master'] = 'open';
        $data['link_aktif_kesatuan'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		
		//breadcrumb
		$data['mabes_tni_breadcrumb'] = $this->m_kesatuan->mabes_tni_breadcrumb();
		
		$id = $this->uri->segment(3);
		$data['id'] = $id;
		
		//Insert
		if($this->input->post('SIMPAN')){
			$this->m_kesatuan->tambah_mabes_tni2();
			$this->session->set_flashdata('tambah_sukses', TRUE);
            redirect('c_kesatuan/mabes_tni2/'.$id.'', 'refresh');
			// echo $this->input->post('KESATUAN').'<br>';
			// echo '1.'.$id;
			// die();
			
		} else if($this->input->post('BATAL')){
			redirect('c_kesatuan/mabes_tni2/'.$id.'', 'refresh');
		}
				
    	$this->load->view('unit_organisasi/mabes_tni/view_tambah_mabes_tni2',$data);
		
	}
	
	public function edit_mabes_tni2($idinduk,$id){
		
		$data['title'] = 'Mabes TNI';
		$data['link_open_master'] = 'open';
        $data['link_aktif_kesatuan'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		
		//breadcrumb
		$idindukbread = $this->m_kesatuan->mabes_tni_breadcrumb2();
		$data['mabes_tni_breadcrumb2'] = $idindukbread;
		
		$id = $this->uri->segment(4);
		$data['id'] = $id;
		$data['idinduk'] = $idinduk;
		$idk = substr($idinduk, -2);
		
		$data['mabes_tni'] = $this->m_kesatuan->edit_mabes_tni($id);
		
		//update
		if($this->input->post('SIMPAN')){
			$this->m_kesatuan->update_mabes_tni($id);
            $this->session->set_flashdata('update_sukses', TRUE);
			redirect('c_kesatuan/mabes_tni2/'.$idk.'', 'refresh');
			// echo $this->input->post('KESATUAN');
			// die();
		} else if($this->input->post('BATAL')){
			redirect('c_kesatuan/mabes_tni2/'.$idk.'', 'refresh');
		}
		
		$this->load->view('unit_organisasi/mabes_tni/view_edit_mabes_tni2',$data);
	}
	
	public function delete_mabes_tni2($idinduk,$id){
		
		$id = $this->uri->segment(4);
		$idk = substr($idinduk, -2);
		
		$this->m_kesatuan->delete_mabes_tni($id);
		$this->session->set_flashdata('hapus_sukses', TRUE);	
		redirect('c_kesatuan/mabes_tni2/'.$idk.'', 'refresh');
	}
	
	//===================================== END MABES TNI ================================================//
	
	
	
	
	//============================================ TNI AD ================================================//
	
    public function tni_ad($idmantra){
		
        $data['title'] = 'TNI AD';
		$data['link_open_master'] = 'open';
        $data['link_aktif_kesatuan'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		
        $data['idmantra'] = $idmantra;
		
        $data['list_tni_ad'] = $this->m_kesatuan->list_kes_tni_ad();
        $this->load->view('unit_organisasi/tni_ad/view_tni_ad',$data);
		
    }
	
	public function tambah_tni_ad(){
		
		$data['title'] = 'TNI AD';
		$data['link_open_master'] = 'open';
        $data['link_aktif_kesatuan'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		
		$id = $this->uri->segment(3);
		$data['id'] = $id;
		
		//Insert
		if($this->input->post('SIMPAN')){
			$this->m_kesatuan->tambah_tni_ad();
			$this->session->set_flashdata('tambah_sukses', TRUE);
            redirect('c_kesatuan/tni_ad/2', 'refresh');
			//echo $this->input->post('KESATUAN').'<br>';
			// echo $id;
			// die();
			
		} else if($this->input->post('batal')){
			redirect('c_kesatuan/tni_ad/2', 'refresh');
		}
				
    	$this->load->view('unit_organisasi/tni_ad/view_tambah_tni_ad',$data);
	}	
		
		
	public function edit_tni_ad($id){
		
		$data['title'] = 'TNI AD';
		$data['link_open_master'] = 'open';
        $data['link_aktif_kesatuan'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		
		$id = $this->uri->segment(3);
		$data['id'] = $id;
		
		$data['tni_ad'] = $this->m_kesatuan->edit_tni_ad($id);
		
		//update
		if($this->input->post('SIMPAN')){
			$this->m_kesatuan->update_tni_ad($id);
            $this->session->set_flashdata('update_sukses', TRUE);
			redirect('c_kesatuan/tni_ad/2', 'refresh');
			// echo $this->input->post('KESATUAN');
			// die();
		} else if($this->input->post('BATAL')){
			redirect('c_kesatuan/tni_ad/2', 'refresh');
		}
		
		$this->load->view('unit_organisasi/tni_ad/view_edit_tni_ad',$data);
	}
	
	
	public function delete_tni_ad($id){
		
		$id = $this->uri->segment(3);
		$this->m_kesatuan->delete_tni_ad($id);
		$this->session->set_flashdata('hapus_sukses', TRUE);	
		redirect('c_kesatuan/tni_ad/2', 'refresh');
	}
	
	///// 2
	//////////////////
	
	public function tni_ad2(){
		
        $data['title'] = 'TNI AD';
		$data['link_open_master'] = 'open';
        $data['link_aktif_kesatuan'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		
		//breadcrumb
		$data['tni_ad_breadcrumb'] = $this->m_kesatuan->tni_ad_breadcrumb();
		
		$id = $this->uri->segment(3);
		$data['id'] = $id;
		
    	$data['list_tni_ad2'] = $this->m_kesatuan->list_tni_ad2();
    	$this->load->view('unit_organisasi/tni_ad/view_tni_ad2',$data);
    }
	
	public function tambah_tni_ad2(){
		
		$data['title'] = 'TNI AD';
		$data['link_open_master'] = 'open';
        $data['link_aktif_kesatuan'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		
		//breadcrumb
		$data['tni_ad_breadcrumb'] = $this->m_kesatuan->tni_ad_breadcrumb();
		
		$id = $this->uri->segment(3);
		$data['id'] = $id;
		
		//Insert
		if($this->input->post('SIMPAN')){
			$this->m_kesatuan->tambah_tni_ad2();
			$this->session->set_flashdata('tambah_sukses', TRUE);
            redirect('c_kesatuan/tni_ad2/'.$id.'', 'refresh');
			// echo $this->input->post('KESATUAN').'<br>';
			// echo '1.'.$id;
			// die();
			
		} else if($this->input->post('BATAL')){
			redirect('c_kesatuan/tni_ad2/'.$id.'', 'refresh');
		}
				
    	$this->load->view('unit_organisasi/tni_ad/view_tambah_tni_ad2',$data);
		
	}
	
	public function edit_tni_ad2($idinduk,$id){
		
		$data['title'] = 'TNI AD';
		$data['link_open_master'] = 'open';
        $data['link_aktif_kesatuan'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		
		//breadcrumb
		$idindukbread = $this->m_kesatuan->tni_ad_breadcrumb2();
		$data['tni_ad_breadcrumb2'] = $idindukbread;
		
		$id = $this->uri->segment(4);
		$data['id'] = $id;
		$data['idinduk'] = $idinduk;
		$idk = substr($idinduk, -2);
		
		$data['tni_ad'] = $this->m_kesatuan->edit_tni_ad($id);
		
		//update
		if($this->input->post('SIMPAN')){
			$this->m_kesatuan->update_tni_ad($id);
            $this->session->set_flashdata('update_sukses', TRUE);
			redirect('c_kesatuan/tni_ad2/'.$idk.'', 'refresh');
			// echo $this->input->post('KESATUAN');
			// die();
		} else if($this->input->post('BATAL')){
			redirect('c_kesatuan/tni_ad2/'.$idk.'', 'refresh');
		}
		
		$this->load->view('unit_organisasi/tni_ad/view_edit_tni_ad2',$data);
	}
	
	public function delete_tni_ad2($idinduk,$id){
		
		$id = $this->uri->segment(4);
		$idk = substr($idinduk, -2);
		
		$this->m_kesatuan->delete_tni_ad($id);
		$this->session->set_flashdata('hapus_sukses', TRUE);	
		redirect('c_kesatuan/tni_ad2/'.$idk.'', 'refresh');
	}
	
	//======================================== END TNI AD ================================================//
	
	
	
	//=========================================== TNI AU ================================================//

    public function tni_au($idmantra){
		
        $data['title'] = 'TNI AU';
		$data['link_open_master'] = 'open';
        $data['link_aktif_kesatuan'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		
        $data['idmantra'] = $idmantra;
		
        $data['list_tni_au'] = $this->m_kesatuan->list_kes_tni_au();
        $this->load->view('unit_organisasi/tni_au/view_tni_au',$data);
		
    }
	
	public function tambah_tni_au(){
		
		$data['title'] = 'TNI AU';
		$data['link_open_master'] = 'open';
        $data['link_aktif_kesatuan'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		
		$id = $this->uri->segment(3);
		$data['id'] = $id;
		
		//Insert
		if($this->input->post('SIMPAN')){
			$this->m_kesatuan->tambah_tni_au();
			$this->session->set_flashdata('tambah_sukses', TRUE);
            redirect('c_kesatuan/tni_au/4', 'refresh');
			//echo $this->input->post('KESATUAN').'<br>';
			// echo $id;
			// die();
			
		} else if($this->input->post('BATAL')){
			redirect('c_kesatuan/tni_au/4', 'refresh');
		}
				
    	$this->load->view('unit_organisasi/tni_au/view_tambah_tni_au',$data);
	}
	
	public function edit_tni_au($id){
		
		$data['title'] = 'TNI AU';
		$data['link_open_master'] = 'open';
        $data['link_aktif_kesatuan'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		
		$id = $this->uri->segment(3);
		$data['id'] = $id;
		
		$data['tni_au'] = $this->m_kesatuan->edit_tni_au($id);
		
		//update
		if($this->input->post('SIMPAN')){
			$this->m_kesatuan->update_tni_au($id);
            $this->session->set_flashdata('update_sukses', TRUE);
			redirect('c_kesatuan/tni_au/4', 'refresh');
			// echo $this->input->post('KESATUAN');
			// die();
		} else if($this->input->post('BATAL')){
			redirect('c_kesatuan/tni_au/4', 'refresh');
		}
		
		$this->load->view('unit_organisasi/tni_au/view_edit_tni_au',$data);
	}
	
	public function delete_tni_au($id){
		
		$id = $this->uri->segment(3);
		$this->m_kesatuan->delete_tni_au($id);
		$this->session->set_flashdata('hapus_sukses', TRUE);	
		redirect('c_kesatuan/tni_au/4', 'refresh');
	}
	
	
	///// 2
	//////////////////
	
	public function tni_au2(){
		
        $data['title'] = 'TNI AU';
		$data['link_open_master'] = 'open';
        $data['link_aktif_kesatuan'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		
		//breadcrumb
		$data['tni_au_breadcrumb'] = $this->m_kesatuan->tni_au_breadcrumb();
		
		$id = $this->uri->segment(3);
		$data['id'] = $id;
		
    	$data['list_tni_au2'] = $this->m_kesatuan->list_tni_au2();
    	$this->load->view('unit_organisasi/tni_au/view_tni_au2',$data);
    }
	
	public function tambah_tni_au2(){
		
		$data['title'] = 'TNI AU';
		$data['link_open_master'] = 'open';
        $data['link_aktif_kesatuan'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		
		//breadcrumb
		$data['tni_au_breadcrumb'] = $this->m_kesatuan->tni_au_breadcrumb();
		
		$id = $this->uri->segment(3);
		$data['id'] = $id;
		
		//Insert
		if($this->input->post('SIMPAN')){
			$this->m_kesatuan->tambah_tni_au2();
			$this->session->set_flashdata('tambah_sukses', TRUE);
            redirect('c_kesatuan/tni_au2/'.$id.'', 'refresh');
			// echo $this->input->post('KESATUAN').'<br>';
			// echo '4.'.$id;
			// die();
			
		} else if($this->input->post('BATAL')){
			redirect('c_kesatuan/tni_au2/'.$id.'', 'refresh');
		}
				
    	$this->load->view('unit_organisasi/tni_au/view_tambah_tni_au2',$data);
		
	}
	
	public function edit_tni_au2($idinduk,$id){
		
		$data['title'] = 'TNI AU';
		$data['link_open_master'] = 'open';
        $data['link_aktif_kesatuan'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		
		//breadcrumb
		$idindukbread = $this->m_kesatuan->tni_au_breadcrumb2();
		$data['tni_au_breadcrumb2'] = $idindukbread;
		
		$id = $this->uri->segment(4);
		$data['id'] = $id;
		$data['idinduk'] = $idinduk;
		$idk = substr($idinduk, -2);
		
		$data['tni_au'] = $this->m_kesatuan->edit_tni_au($id);
		
		//update
		if($this->input->post('SIMPAN')){
			$this->m_kesatuan->update_tni_au($id);
            $this->session->set_flashdata('update_sukses', TRUE);
			redirect('c_kesatuan/tni_au2/'.$idk.'', 'refresh');
			// echo $this->input->post('KESATUAN');
			// die();
		} else if($this->input->post('BATAL')){
			redirect('c_kesatuan/tni_au2/'.$idk.'', 'refresh');
		}
		
		$this->load->view('unit_organisasi/tni_au/view_edit_tni_au2',$data);
	}
	
	public function delete_tni_au2($idinduk,$id){
		
		$id = $this->uri->segment(4);
		$idk = substr($idinduk, -2);
		
		$this->m_kesatuan->delete_tni_au($id);
		$this->session->set_flashdata('hapus_sukses', TRUE);	
		redirect('c_kesatuan/tni_au2/'.$idk.'', 'refresh');
	}
	
	//======================================== END TNI AU ================================================//

    public function detail_mabes_tni($id){
        $data['title'] = 'Detail: '.$id;
        $data['breadcrumb_title'] = $id;
        $this->load->view('unit_organisasi/mabes_tni/view_detail_mabes_tni',$data);
    }

    public function detail_tni_ad($idmantra,$id){
        $data['title'] = 'Detail: '.$id;
        $data['idmantra'] = $idmantra;
        $data['breadcrumb_title'] = $id;
        $this->load->view('unit_organisasi/tni_ad/view_detail_tni_ad',$data);
    }

    public function detail_tni_al($id){
        $data['title'] = $id;
        $data['breadcrumb_title'] = $id;
        $this->load->view('unit_organisasi/tni_al/view_detail_tni_al',$data);
    }

    public function detail_tni_au($id){
        $data['title'] = 'Detail: '.$id;
        $data['breadcrumb_title'] = $id;
        $this->load->view('unit_organisasi/tni_au/view_detail_tni_au',$data);
    }

    public function tambah_alutsista(){
        $data['komoditi_barang'] = $this->m_form_kesatuan->komoditi_barang();
        $data['kelompok_barang'] = $this->m_form_kesatuan->kelompok_barang();
        $data['title'] = "New Alutsista";
        $this->load->view('form_input/view_form_alutsista',$data);
    }

    public function lihat_klpk_barang_id(){
        $data['kelompok_barang'] = $this->m_form_kesatuan->get_komoditi_barang();
        $this->load->view('form_input/view_get_komoditi_barang',$data);
    }
}
?>