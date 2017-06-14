<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_users extends CI_Model {

    function __construct() {
        parent::__construct();
		
    }

   public function data_users(){
	   
	   $query = $this->db->query('
	   
		SELECT * FROM users
	   
	   ');
	   return $query->result();
	   
	   
   }
   
    public function detail(){
	   $id = $this->uri->segment(3,0);
	   $query = $this->db->query("
	   
		SELECT * FROM users WHERE id= '$id'
	   
	   ");
	   return $query->result();
	}
	
	public function tambah_users(){
		
		$data = array(
            'NIK' 	   => $this->input->post('NIK'),
            'fullname' => $this->input->post('NAMA'),
            'username' => $this->input->post('USERNAME'),
            'password' => md5($this->input->post('PASSWORD')),
			'createtime' => $this->input->post('TANGGALSEKARANG')
        );
        $this->db->insert('users', $data);
		
	}
	
	public function edit_users($id){
		
		$this->db->where('id', $id);
        $data = $this->db->get('users');
        return $data->result();
		
	}
	
	public function update_users($id){
		
		$data = array(
            'NIK' 	   => $this->input->post('NIK'),
            'fullname' => $this->input->post('NAMA'),
            'username' => $this->input->post('USERNAME'),
            'password' => md5($this->input->post('PASSWORD_BARU')),
			'createtime' => $this->input->post('TANGGALSEKARANG')
        );
		$this->db->where('id', $id);
        $this->db->update('users', $data);
		
	}
	
	public function delete_users($id){
		
		$this->db->where('id', $id);
        $this->db->delete('users', array('id' => $id));
		
	}
}

?>