<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Lock_screen extends CI_Controller {

    public function __construct() {
        parent::__construct();
        session_start();
        if ($this->session->userdata('level') == null) {
            redirect('login');
        }
        $this->load->model('m_user');
    }

    public function index() {
        $this->session->unset_userdata('password');
        $this->load->view('lock_screen/view_lock_screen');
    }

    public function unlock() {
        $data['hasil'] = $this->m_user->cek_user_lock();
        
        $this->load->library('form_validation');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
        if ($data['hasil'] == null) {
            $this->session->set_flashdata('gagal_unlock', TRUE);
            redirect('lock_screen/index');
        } else {
          
            $data['user_name'] = $this->session->userdata('user_name');
            $data['password'] = $this->input->post('password');
            foreach ($data['hasil'] as $row) {
                $data['level'] = $row->level;
            }
            $newdata = array(
                'user_name' => $data['user_name'],
                'password' => $data['password'],
                'level' => $data['level'],
                'login' => TRUE
            );
            
            $this->session->set_userdata($newdata);
            if ($data['level'] == '1') {
                redirect('main_menu/su');
            } else if ($data['level'] == '2') {
                redirect('main_menu/admin');
            } else if ($data['level'] == '3') {
                redirect('main_menu/pimpinan');
            }
        }
    }

}

?>
