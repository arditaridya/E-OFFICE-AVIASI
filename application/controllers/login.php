<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
		$this->load->helper('captcha_helper');
//        session_start();
        if ($this->session->userdata('level') == '1') {
            redirect('main_menu/admin');
        } else if ($this->session->userdata('level') == '2') {
            redirect('main_menu/user');
        }
    }

    public function index() {
		if(!empty($this->session->userdata('user_name'))){
			redirect('main_menu/admin');
		}
		
		$vals = array(
			'word_length' => 5,
			'img_path' => './public/CAPTCHA/',
			'img_url' => base_url().'public/CAPTCHA/',
			'font_path'  => './assets/fonts/captcha4.ttf',
			'font_size' => '30',
			'img_width' => '250',
			'img_height' => '70',
			
			
		);

		/* Generate the captcha */
		$captcha = create_captcha($vals);
		$this->session->set_userdata('captchaWord', $captcha['word']);

		$data['image'] = $captcha['image'];
		
		$data ['login'] = "Login";
        $this->load->view('login/view_login', $data);
    }

}

?>