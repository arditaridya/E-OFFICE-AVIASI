<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class kecamatan extends CI_Controller {

    public function __construct() {
    	parent::__construct();
    	//$this->load->model('provinsi_model');
    	session_start();
		/*
    	if ($this->session->userdata('level')== null) {
    		$this->session->set_flashdata('session_expired', TRUE);
    		redirect('login');
    	}
		*/
    }

    public function index(){
    	$data['link_open_wilayah'] = 'class="start active open"';
        $data['link_aktif_wilayah3'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		$data['title'] = "Kecamatan";
		$query = $this->db->query("SELECT 
										a.*,a.id as id_kecamatan,b.*,c.* 
									FROM 
										kecamatan a, kabupaten b, provinsi c
									WHERE 
										a.provinsi = c.id and
										a.kabupaten = b.id and
										b.provinsi = c.id

                    

                    

                    ")->result();

        $data['model'] = $query;
    	$this->load->view('kecamatan/index',$data);
    }
	
	public function tambahkecamatan(){
    	$data['link_open_wilayah'] = 'class="start active open"';
        $data['link_aktif_wilayah3'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		$data['title'] = "Tambah Kecamatan";
		$query = $this->db->query("SELECT 
					*
				FROM 
					provinsi
				order by nama_provinsi
					
					")->result();
		$data['provinsi'] = $query;
    	$this->load->view('kecamatan/tambah',$data);
    }
	
	public function getkabupaten($provinsi='') 
    {   
		//echo $provinsi."asasasas";die();
		$query = $this->db->query("SELECT 
					*
				FROM 
					kabupaten
				WHERE
					provinsi='$provinsi'
				order by nama_kabupaten asc
				")->result();
		$data['kabupaten'] = $query;
		$this->load->view('kecamatan/kabupaten',$data);
	
	}
	
	public function simpankecamatan(){
    	
		$this->db->query("insert into kecamatan (provinsi,kabupaten,nama_kecamatan) values ('".$_POST['provinsi']."','".$_POST['kabupaten']."','".$_POST['nama_kecamatan']."')");
	
				
			redirect('kecamatan', 'refresh');
    }
	
	 public function editkecamatan($id){
    	$data['link_open_wilayah'] = 'class="start active open"';
        $data['link_aktif_wilayah3'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		$data['title'] = "Edit Kecamatan";
		$query = $this->db->query("SELECT 
										a.*,a.id as id_kecamatan,a.provinsi as propro,a.kabupaten as kabkab,b.*,c.* 
									FROM 
										kecamatan a, kabupaten b, provinsi c
									WHERE 
										a.provinsi = c.id and
										a.kabupaten = b.id and
										b.provinsi = c.id and
										a.id ='$id'

                    

                    

                    ")->result();
					
					foreach ($query as $ris)
				{
				$propro = $ris->propro;
				$kabkab = $ris->kabkab;
				
				}
		$query2 = $this->db->query("SELECT 
					*
				FROM 
					provinsi
					
					")->result();
		$query3 = $this->db->query("SELECT 
					*
				FROM 
					kabupaten
				WHERE
					provinsi='$propro'
					
					")->result();
		$data['kabupaten'] = $query3;
		$data['provinsi'] = $query2;
        $data['dataper'] = $query;
    	$this->load->view('kecamatan/edit',$data);
    }
	
	public function simpanedit(){
    	
		$this->db->query("update kecamatan set provinsi='".$_POST['provinsi']."',kabupaten='".$_POST['kabupaten']."',nama_kecamatan='".$_POST['nama_kecamatan']."' where id='".$_POST['id']."'");
	
				
			redirect('kecamatan', 'refresh');
    }
	
	public function hapus($id){
    	
		$this->db->query("delete from kecamatan where id='$id'");
	
				
			redirect('kecamatan', 'refresh');
    }

	
}