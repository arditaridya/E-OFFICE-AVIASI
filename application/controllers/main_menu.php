<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Main_menu extends CI_Controller {

    public function __construct() {
    	parent::__construct();
    	$this->load->model('m_user');
    	$this->load->model('m_main_menu');
    	$this->load->model('m_kesatuan');
    	session_start();
    	if ($this->session->userdata('level')== null) {
    		$this->session->set_flashdata('session_expired', TRUE);
    		redirect('login');
    	}
    }

    public function index(){
    	if ($this->session->userdata('level')=='1') {
    		$this->admin();
    	}else if ($this->session->userdata('level')=='2') {
    		$this->user();
    	}else{
    		redirect('login');
    	}
    }

    public function admin(){
		$data['link_admin_aktif'] = 'class="start active open"';
    	$data['title'] = "Main Menu";
		$userz = $this->session->userdata('user_name');
		$this->db->query("update lanud_flag set lanudnya='0' where username='$userz'");
    	$this->load->view('main_menu/view_index',$data);
    }

    public function user(){
        $data['link_admin_aktif'] = 'class="start active open"';
        $data['title'] = "Main Menu";
        $this->load->view('main_menu/view_index',$data);
    }
}