<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_user extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function cek_user() {
        $user_name = $this->input->post('username');
        $pass = md5($this->input->post('password'));
		//$captcha = $this->input->post('captcha');
        $this->db->where('username', $user_name);
        $this->db->where('password', $pass);
        $query = $this->db->get('users');

        if ($query->num_rows() == 0) {
            $this->session->set_flashdata('result_login', "Maaf user name atau password salah");
        }

        return $query->result();
    }
    
    function cek_user_lock() {
        $user_name = $this->session->userdata('user_name');
        $pass = md5($this->input->post('password'));
        $this->db->where('username', $user_name);
        $this->db->where('password', $pass);
        $query = $this->db->get('users');

        if ($query->num_rows() == 0) {
            $this->session->set_flashdata('result_lock');
        }
        
        return $query->result();
    }


    public function get_user() {
        $this->db->order_by('id', 'asc');
        $query = $this->db->get("users");
        return $query;
    }

    
    public function tambah_user() {
        $data = array(
            'USERNAME' => $this->input->post('username'),
            'PASSWORD' => $this->input->post('password'),
            'GROUP_ID' => $this->input->post('level'),
            'USERS_STATUS' => $this->input->post('status')
        );
        //var_dump($data);die();
        $this->db->insert('users', $data);
       
        
    }

     public function update_user($id) {
        $this->db->where('id', $id);
        $get_data = $this->db->get('users');
        if ($get_data->num_rows() > 0) {
            return $get_data;
        } else {
            return FALSE;
        }
    }

    public function proses_update_user($id) {
            $data = array(
                'USERNAME' => $this->input->post('username'),
                'PASSWORD' => $this->input->post('password'),
                'GROUP_ID' => $this->input->post('level'),
                'USERS_STATUS' => $this->input->post('status')
            );
       
        //var_dump($data);die();
        $this->db->where('id', $id);
        $this->db->update('users', $data);
    }

    
    public function hapus_user($id) {
        $this->db->where('id', $id);
        $this->db->delete('users', array('id' => $id));
    }

    public function get_group() {
        $query = $this->db->get('users');
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }

}

?>