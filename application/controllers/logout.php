<?php

class Logout extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->session->sess_destroy();  //Hapus seluruh session
        $this->session->sess_create();   // Buat kembali session karena kita akan mengirim flashdata ke halaman login
        $this->session->set_flashdata('message_logout', TRUE);
        redirect('login', 'refresh');
    }

}
