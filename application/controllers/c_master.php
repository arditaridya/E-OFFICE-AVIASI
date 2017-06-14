<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

class C_master extends CI_Controller {
	
	 public function __construct() {
        parent::__construct();
        session_start();

        if ($this->session->userdata('level') == null or $this->session->userdata('level') == '3') {
            $this->session->set_flashdata('session_expired', TRUE);
            redirect('login');
        }
		
		$this->load->model('m_users');
		$this->load->model('m_komoditi_barang');
		$this->load->model('m_jenis_barang');
		$this->load->model('m_fungsi_barang');
		$this->load->model('m_barang');

    }
	
	//==================================== USER =====================================================//
	public function index(){
		
		//Style Sidebar
		$data['link_open_master'] = 'open';
        $data['link_aktif_users'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		
		$data['title'] = 'Users';
		$data['judul'] = 'Users - Index';
		
		$data['model'] = $this->m_users->data_users();
		   // echo '<pre>';
		   // var_dump($data['model']);
		   // die();
		   // echo '</pre>';
		$this->load->view('master/users/index',$data);
	}
	
	public function detail_users(){
		
		//Style Sidebar
		$data['link_open_master'] = 'open';
        $data['link_aktif_users'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		
		$data['title'] = 'Users';
		$data['judul'] = 'Users - Detail';
		
		$model = $this->m_users->detail();
		//echo '<pre>';
	    // var_dump($model);
	    // die();
	    // echo '</pre>';
		if (sizeof($model) === 0)
		{
			//$this->session->unset_userdata('fakultas_kode');
			redirect(site_url('c_master'));
		}
				
		$data['model'] = $model;
		$this->load->view('master/users/detail',$data);
		
	}
	
	public function tambah_users(){
		
		//Style Sidebar
		$data['link_open_master'] = 'open';
        $data['link_aktif_users'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		
		$data['title'] = 'Users';
		$data['judul'] = 'Users - Tambah Data';
		
		//Insert
		if($this->input->post('SIMPAN')){
			$this->m_users->tambah_users();
			$this->session->set_flashdata('tambah_sukses', TRUE);
            redirect('c_master', 'refresh');
		} else if($this->input->post('batal')){
			redirect('c_master', 'refresh');
		}
		
		$this->load->view('master/users/tambah', $data);
		
	}
	
	public function edit_users($id){
		
		//Style Sidebar
		$data['link_open_master'] = 'open';
        $data['link_aktif_users'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		
		$data['title'] = 'Users';
		$data['judul'] = 'Users - Edit';
		
		$id = $this->uri->segment(3);
		
		$data['users'] = $this->m_users->edit_users($id);
		
		//update
		if($this->input->post('SIMPAN')){
			$this->m_users->update_users($id);
            $this->session->set_flashdata('update_sukses', TRUE);
			 redirect('c_master/index', 'refresh');
			//echo 'ashole';
			//die();
		} else if($this->input->post('batal')){
			redirect('c_master/index', 'refresh');
			//echo "hehe";
		}
				
		$this->load->view('master/users/edit', $data);
		
	}
	
	public function delete_users($id){
		
		$id = $this->uri->segment(3);
		$this->m_users->delete_users($id);
		$this->session->set_flashdata('hapus_sukses', TRUE);		
		redirect('c_master/index', 'refresh');
	}
		
	
	//==================================== END USER =================================================//
	
	//==================================== KOMODITI BARANG =================================================// 
	public function komoditi_barang(){
		
		$data['title'] = "Komoditi Barang";
        $data['link_open_master'] = 'open';
        $data['link_aktif_komoditi'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		
		//Create dropdown option
		
		$list = array();
		foreach ($this->m_komoditi_barang->get_matra() as $matra) {
			$list[''] = '-Pilih-';
			$list[$matra->id] = $matra->kesatuan;
		}
		$data['get_matra'] = $list;
		
			// echo '<pre>';
			// var_dump($data['get_matra']);
			// die();
			// echo '</pre>';
			
		//End dropdown option
		
        $data['komoditi_barang'] = $this->m_komoditi_barang->list_komoditi_barang();
        $this->load->view('master/komoditi_barang/view_komoditi_barang', $data);
		
    }
	
	public function tambah_komoditi_barang() {
		
        $data['title'] = "Komoditi Barang";
        $data['link_open_master'] = 'open';
        $data['link_aktif_komoditi'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		
		//Create dropdown option
		$list = array();
		foreach ($this->m_komoditi_barang->get_matra() as $matra) {
			$list[''] = '-Pilih-';
			$list[$matra->id] = $matra->kesatuan;
		}
		$data['get_matra'] = $list;
		//End dropdown option
		
		//Insert
		if($this->input->post('SIMPAN')){
			$this->m_komoditi_barang->tambah_komoditi_barang();
			$this->session->set_flashdata('tambah_sukses', TRUE);
            redirect('c_master/komoditi_barang', 'refresh');
			// echo $this->input->post('KODE').'<br>';
			// echo $this->input->post('KOMODITI_BARANG').'<br>';
			// echo $this->input->post('MATRA').'<br>';
			// die();
		} else if($this->input->post('batal')){
			redirect('c_master/komoditi_barang', 'refresh');
		}		
				
        $this->load->view('master/komoditi_barang/view_tambah_komoditi_barang', $data);
    }
	
	public function edit_komoditi_barang($id){
		
		$data['title'] = "Komoditi Barang";
        $data['link_open_master'] = 'open';
        $data['link_aktif_komoditi'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		
		$id = $this->uri->segment(3);
		
		$data['komoditi_barang'] = $this->m_komoditi_barang->edit_komoditi_barang($id);
		
		//Create dropdown option

		$list = array();
		foreach ($this->m_komoditi_barang->get_matra() as $matra) {
			$list[''] = '-Pilih-';
			$list[$matra->id] = $matra->kesatuan;
		}
		$data['get_matra'] = $list;
				
		//End dropdown option
		
		//update
		if($this->input->post('SIMPAN')){
			$this->m_komoditi_barang->update_komoditi_barang($id);
            $this->session->set_flashdata('update_sukses', TRUE);
			 redirect('c_master/komoditi_barang', 'refresh');
		} else if($this->input->post('BATAL')){
			redirect('c_master/komoditi_barang', 'refresh');
		}
		
		$this->load->view('master/komoditi_barang/view_edit_komoditi_barang', $data);
		
	}
	
	public function delete_komoditi_barang($id){
		
		$id = $this->uri->segment(3);
		$this->m_komoditi_barang->delete_komoditi_barang($id);
		$this->session->set_flashdata('hapus_sukses', TRUE);		
		redirect('c_master/komoditi_barang', 'refresh');
	}
	
	
	//==================================== END KOMODITI BARANG =================================================//
	
	
	//==================================== JENIS BARANG =================================================//
	
	public function jenis_barang(){
		
		$data['title'] = "Jenis Barang";
        $data['link_open_master'] = 'open';
        $data['link_aktif_jenis'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		
		//Create dropdown option
		$data['kesatuan'] = $this->m_komoditi_barang->get_matra();
		//$data['get_komoditi'] = $this->m_jenis_barang->get_komoditi();
		//End dropdown option
		
        $data['jenis_barang'] = $this->m_jenis_barang->list_jenis_barang();
        $this->load->view('master/jenis_barang/view_jenis_barang', $data);
		
    }
	
	
	public function tambah_jenis_barang() {
		
        $data['title'] = "Jenis Barang";
        $data['link_open_master'] = 'open';
        $data['link_aktif_jenis'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		
		//Create dropdown option
		$data['kesatuan'] = $this->m_komoditi_barang->get_matra();
		//End dropdown option
		
				
		//Insert
		if($this->input->post('SIMPAN')){
			$this->m_jenis_barang->tambah_jenis_barang();
			$this->session->set_flashdata('tambah_sukses', TRUE);
            redirect('c_master/jenis_barang', 'refresh');
			// echo $this->input->post('KODE').'<br>';
			// echo $this->input->post('JENIS_BARANG').'<br>';
			// echo $this->input->post('komoditi').'<br>';
			// die();
		} else if($this->input->post('batal')){
			redirect('c_master/jenis_barang', 'refresh');
		}		
		
        $this->load->view('master/jenis_barang/view_tambah_jenis_barang', $data);
    }
		
	public function edit_jenis_barang($id){
		
		$data['title'] = "Jenis Barang";
        $data['link_open_master'] = 'open';
        $data['link_aktif_jenis'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		
		$id = $this->uri->segment(3);
		
		$data['jenis_barang'] = $this->m_jenis_barang->edit_jenis_barang($id);
		
		//Create Dropdown Option
		$data['kesatuan'] = $this->m_komoditi_barang->get_matra();
		//End Create Dropdown Option
		
		//update
		if($this->input->post('SIMPAN')){
			$this->m_jenis_barang->update_jenis_barang($id);
            $this->session->set_flashdata('update_sukses', TRUE);
			redirect('c_master/jenis_barang', 'refresh');
			// echo $this->input->post('JENIS_BARANG');
			// die();
		} else if($this->input->post('BATAL')){
			redirect('c_master/jenis_barang', 'refresh');
		}		
		
		$this->load->view('master/jenis_barang/view_edit_jenis_barang', $data);
		
	}
	
	public function delete_jenis_barang($id){
		
		$id = $this->uri->segment(3);
		$this->m_jenis_barang->delete_jenis_barang($id);
		$this->session->set_flashdata('hapus_sukses', TRUE);		
		redirect('c_master/jenis_barang', 'refresh');
	}
	
	
	//==================================== END JENIS BARANG =================================================//
	
	//==================================== FUNGSI BARANG =================================================//
	
	public function fungsi_barang(){
		
		$data['title'] = "Fungsi Barang";
        $data['link_open_master'] = 'open';
        $data['link_aktif_fungsi'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		
		//Create Dropdown Option
		
		$data['kesatuan'] = $this->m_komoditi_barang->get_matra();
		
		//End Create Dropdown Option
		
        $data['fungsi_barang'] = $this->m_fungsi_barang->list_fungsi_barang();
        $this->load->view('master/fungsi_barang/view_fungsi_barang', $data);
		
    }
	
	public function tambah_fungsi_barang() {
		
		$data['title'] = "Fungsi Barang";
        $data['link_open_master'] = 'open';
        $data['link_aktif_fungsi'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
			
		//Create dropdown option
		$data['kesatuan'] = $this->m_komoditi_barang->get_matra();
		//End dropdown option
		
		//Insert
		if($this->input->post('SIMPAN')){
			$this->m_fungsi_barang->tambah_fungsi_barang();
			$this->session->set_flashdata('tambah_sukses', TRUE);
            redirect('c_master/fungsi_barang', 'refresh');
			// echo $this->input->post('KODE').'<br>';
			// echo $this->input->post('FUNGSI_BARANG').'<br>';
			// echo $this->input->post('JENIS').'<br>';
			// die();
		} else if($this->input->post('BATAL')){
			redirect('c_master/fungsi_barang', 'refresh');
		}		
		
		$this->load->view('master/fungsi_barang/view_tambah_fungsi_barang', $data);
    }
	
	public function edit_fungsi_barang($id){
		
		$data['title'] = "Fungsi Barang";
        $data['link_open_master'] = 'open';
        $data['link_aktif_fungsi'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		
		$id = $this->uri->segment(3);
		
		$data['fungsi_barang'] = $this->m_fungsi_barang->edit_fungsi_barang($id);
		
		//Create dropdown option
		$data['kesatuan'] = $this->m_komoditi_barang->get_matra();
		//End dropdown option
		
		//update
		if($this->input->post('SIMPAN')){
			$this->m_fungsi_barang->update_fungsi_barang($id);
            $this->session->set_flashdata('update_sukses', TRUE);
			redirect('c_master/fungsi_barang', 'refresh');
			// echo $this->input->post('FUNGSI_BARANG');
			// die();
		} else if($this->input->post('BATAL')){
			redirect('c_master/fungsi_barang', 'refresh');
		}		
		
		$this->load->view('master/fungsi_barang/view_edit_fungsi_barang', $data);
	}
	
	public function delete_fungsi_barang($id){
		
		$id = $this->uri->segment(3);
		$this->m_fungsi_barang->delete_fungsi_barang($id);
		$this->session->set_flashdata('hapus_sukses', TRUE);		
		redirect('c_master/fungsi_barang', 'refresh');
	}
	
	//==================================== END FUNGSI BARANG =================================================//
	
	//====================================  BARANG =================================================//
	
	public function barang(){
		
		$data['title'] = "Barang";
        $data['link_open_master'] = 'open';
        $data['link_aktif_barang'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		
		
		//Create dropdown option
		$data['kesatuan'] = $this->m_komoditi_barang->get_matra();
		//End dropdown option
		
        $data['fungsi_barang'] = $this->m_barang->list_barang();
        $this->load->view('master/barang/view_barang', $data);
		
    }
	
	public function tambah_barang(){
		
		$data['title'] = "Barang";
        $data['link_open_master'] = 'open';
        $data['link_aktif_barang'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		
		//Create dropdown option
		$data['kesatuan'] = $this->m_komoditi_barang->get_matra();
		//End dropdown option
		
		//Insert
		if($this->input->post('SIMPAN')){
			$this->m_barang->tambah_barang();
			$this->session->set_flashdata('tambah_sukses', TRUE);
            redirect('c_master/barang', 'refresh');
			// echo $this->input->post('KODE').'<br>';
			// echo $this->input->post('BARANG').'<br>';
			// echo $this->input->post('NEGARA_ASAL').'<br>';
			// echo $this->input->post('TAHUN_BUAT').'<br>';
			// echo $this->input->post('FUNGSI').'<br>';
			// die();
		} else if($this->input->post('BATAL')){
			redirect('c_master/barang', 'refresh');
		}		
		
        $this->load->view('master/barang/view_tambah_barang', $data);
	}
	
	public function edit_barang($id){
		
		$data['title'] = "Barang";
        $data['link_open_master'] = 'open';
        $data['link_aktif_barang'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		
		$id = $this->uri->segment(3);
		
		$data['barang'] = $this->m_barang->edit_barang($id);
		
		//Create dropdown option
		$data['kesatuan'] = $this->m_komoditi_barang->get_matra();
		//End dropdown option
		
		//update
		if($this->input->post('SIMPAN')){
			$this->m_barang->update_barang();
			$this->session->set_flashdata('tambah_sukses', TRUE);
            redirect('c_master/barang', 'refresh');
			// echo $this->input->post('BARANG').'<br>';
			// echo $this->input->post('NEGARA_ASAL').'<br>';
			// echo $this->input->post('TAHUN_BUAT').'<br>';
			// die();
		} else if($this->input->post('BATAL')){
			//redirect('c_master/barang', 'refresh');
		}		
		
        $this->load->view('master/barang/view_edit_barang', $data);
	}
	
	public function delete_barang($id){
		
		$id = $this->uri->segment(3);
		$this->m_barang->delete_barang($id);
		$this->session->set_flashdata('hapus_sukses', TRUE);		
		redirect('c_master/barang', 'refresh');
	}
	
	//==================================== END BARANG ===============================================//
	
	
	public function chain_to_komoditi(){
		
		$data['komoditi'] = $this->m_jenis_barang->komoditi();
        $this->load->view('master/chain/komoditi', $data);
		
	}
	
	public function chain_to_jenis(){
		
		$data['jenis'] = $this->m_fungsi_barang->jenis();
        $this->load->view('master/chain/jenis', $data);
		
	}
	
	public function chain_to_fungsi(){
		
		$data['fungsi'] = $this->m_barang->fungsi();
        $this->load->view('master/chain/fungsi', $data);
		
	}
	
	public function get_kom(){
		
		//get kode komoditi
		$data['kode_komoditi'] = $this->m_jenis_barang->kode_komoditi();
		$this->load->view('master/jenis_barang/load_kodekom',$data);
		
	}
	
	public function get_kodjen(){
		
		//get kode jenis
		$data['kode_jenis'] = $this->m_fungsi_barang->kode_jenis();
		$this->load->view('master/fungsi_barang/load_kodjen', $data);
		
	}
	
	public function get_kodfung(){
		
		//get kode jenis
		$data['kode_fungsi'] = $this->m_barang->kode_fungsi();
		$this->load->view('master/barang/load_kodfung', $data);
		
	}
	
}

?>