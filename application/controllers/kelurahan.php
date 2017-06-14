<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class kelurahan extends CI_Controller {

    public function __construct() {
    	parent::__construct();
    	//$this->load->model('provinsi_model');
    	session_start();
    	/*if ($this->session->userdata('level')== null) {
    		$this->session->set_flashdata('session_expired', TRUE);
    		redirect('login');
    	}*/
    }

    public function index(){
    	$data['link_open_wilayah'] = 'class="start active open"';
        $data['link_aktif_wilayah4'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		$data['title'] = "Kelurahan";
		$query = $this->db->query("SELECT 
										a.*,a.id as id_kelurahan,b.*,c.*,d.* 
									FROM 
										kelurahan a, kecamatan b, kabupaten c, provinsi d
									WHERE 
										a.provinsi = d.id and
										a.kabupaten = c.id and
										a.kecamatan = b.id and
										b.kabupaten = c.id and
										b.provinsi = d.id and
										c.provinsi = d.id

                    

                    

                    ")->result();

        $data['model'] = $query;
    	$this->load->view('kelurahan/index',$data);
    }
	
	public function tambahkelurahan(){
    	$data['link_open_wilayah'] = 'class="start active open"';
        $data['link_aktif_wilayah4'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		$data['title'] = "Tambah Kelurahan";
		$query = $this->db->query("SELECT 
					*
				FROM 
					provinsi
					
					")->result();
		$data['provinsi'] = $query;
    	$this->load->view('kelurahan/tambah',$data);
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
				")->result();
		$data['kabupaten'] = $query;
		$this->load->view('kelurahan/kabupaten',$data);
	
	}
	
	public function getkecamatan($kabupaten='') 
    {   
		//echo $kabupaten."asasasas";die();
		$query = $this->db->query("SELECT 
					*
				FROM 
					kecamatan
				WHERE
					kabupaten='$kabupaten'
				")->result();
		$data['kecamatan'] = $query;
		$this->load->view('kelurahan/kecamatan',$data);
	
	}
	
	public function simpankelurahan(){
    	
		$this->db->query("insert into kelurahan (provinsi,kabupaten,kecamatan,nama_kelurahan) values ('".$_POST['provinsi']."','".$_POST['kabupaten']."','".$_POST['kecamatan']."','".$_POST['nama_kelurahan']."')");
	
				
			redirect('kelurahan', 'refresh');
    }
	
	 public function editkelurahan($id){
    	$data['link_open_wilayah'] = 'class="start active open"';
        $data['link_aktif_wilayah4'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		$data['title'] = "Edit Kecamatan";
		$query = $this->db->query("SELECT 
										a.*,a.id as id_kelurahan,a.provinsi as propro,a.kabupaten as kabkab,a.kecamatan as keckec,b.*,c.*,d.* 
									FROM 
										kelurahan a, kecamatan b, kabupaten c, provinsi d
									WHERE 
										a.provinsi = d.id and
										a.kabupaten = c.id and
										a.kecamatan = b.id and
										b.kabupaten = c.id and
										b.provinsi = d.id and
										c.provinsi = d.id and
										a.id = '$id'

                    

                    

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
		$query4 = $this->db->query("SELECT 
					*
				FROM 
					kecamatan
				WHERE
					kabupaten='$kabkab'
					
					")->result();
		$data['kecamatan'] = $query4;
		$data['kabupaten'] = $query3;
		$data['provinsi'] = $query2;
        $data['dataper'] = $query;
    	$this->load->view('kelurahan/edit',$data);
    }
	
	public function simpanedit(){
    	
		$this->db->query("update kelurahan set provinsi='".$_POST['provinsi']."',kabupaten='".$_POST['kabupaten']."',kecamatan='".$_POST['kecamatan']."',nama_kelurahan='".$_POST['nama_kelurahan']."' where id='".$_POST['id']."'");
	
				
			redirect('kelurahan', 'refresh');
    }
	
	public function hapus($id){
    	
		$this->db->query("delete from kelurahan where id='$id'");
	
				
			redirect('kelurahan', 'refresh');
    }

	
}