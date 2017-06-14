<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ceklogin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_user');
        $this->load->library('session');
		$this->load->helper('captcha_helper');
        session_start();
    }

    function user() {
        $data['hasil'] = $this->m_user->cek_user();
        //var_dump($data['hasil']);die();
        $this->load->library('form_validation');
		//$this->form_validation->set_rules('captcha', 'Captcha', 'required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
		
		$word = $this->session->userdata('captchaWord');
		$userCaptcha = $this->input->post('captcha');
		//echo $word;die();
		if($word == $userCaptcha){
			//echo "sama";die();
			if ($data['hasil'] == null) {
            //echo "b";die();
			redirect('login');
        } else {
			//echo "c";die();
            $data['user_name'] = $this->input->post('username');
            $data['password'] = $this->input->post('password');
            foreach ($data['hasil'] as $row) {
                $data['level'] = $row->level;
				$data['grup_user'] = $row->grup_user;
				$data['kotama'] = $row->kotama;
				$data['lanud'] = $row->lanud;
            }
            $newdata = array(
                'user_name' => $data['user_name'],
                'password' => $data['password'],
                'level' => $data['level'],
				'grup_user' => $data['grup_user'],
				'kotama' => $data['kotama'],
				'lanud' => $data['lanud'],
                'login' => TRUE
            );
			$userz = $this->input->post('username');
		
//            var_dump($newdata);die();
            $this->session->set_userdata($newdata);
			$grupz = $this->session->userdata('grup_user');
			//echo $grupz."asdas";die();
			
				redirect('main_menu/admin');
			
			
        }
		}else{
			//echo "engga";die();
			$html = '
					<div class="alert alert-block alert-danger">
					    <button data-dismiss="alert" class="close" type="button">×</button>
					    <p>
					    	Kode Captcha Salah
					    </p>
					</div>
					';
			$this->session->set_flashdata('captcha', $html);
			redirect("login");
		}
		
		/*
        if ($this->form_validation->run() == FALSE) {
           // echo "a";die();
        } else if ($data['hasil'] == null) {
            //echo "b";die();
			redirect('login');
        } else {
			//echo "c";die();
            $data['user_name'] = $this->input->post('username');
            $data['password'] = $this->input->post('password');
            foreach ($data['hasil'] as $row) {
                $data['level'] = $row->level;
				$data['grup_user'] = $row->grup_user;
				$data['kotama'] = $row->kotama;
				$data['lanud'] = $row->lanud;
            }
            $newdata = array(
                'user_name' => $data['user_name'],
                'password' => $data['password'],
                'level' => $data['level'],
				'grup_user' => $data['grup_user'],
				'kotama' => $data['kotama'],
				'lanud' => $data['lanud'],
                'login' => TRUE
            );
			$userz = $this->input->post('username');
		$query = $this->db->query("SELECT 
					count(*) as kukuku
				FROM 
					lanud_flag
				WHERE
					username='$userz'
					
					")->result();
					
		foreach ($query as $ris)
				{
				$adganya = $ris->kukuku;				
				}
				
				//echo $adganya."zzzz";die();
		if ($adganya == '0' ) {
			$this->db->query("insert into lanud_flag (username,lanudnya) values ('".$userz."','0')");
	
		}else{
			$this->db->query("update lanud_flag set lanudnya='0' where username='$userz'");
		}
//            var_dump($newdata);die();
            $this->session->set_userdata($newdata);
			$grupz = $this->session->userdata('grup_user');
			//echo $grupz."asdas";die();
			if($grupz == "1"){
				redirect('main_menu/admin');
			}else if($grupz == "2"){
				$kotamaq = $this->session->userdata('kotama');
				redirect('c_kesatuan/lanud/'.$kotamaq, 'refresh');
			}else if($grupz == "3"){
				$lanudq = $this->session->userdata('lanud');
				redirect('data_aset/index/lanud_id_'.$lanudq, 'refresh');
			}
			
        }
		*/
    }

}
