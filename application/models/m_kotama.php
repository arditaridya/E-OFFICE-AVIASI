<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_kotama extends CI_Model {


	//================================================ MABES TNI ===================================//
	
	public function list_kotama(){
		$query = $this->db->query('
			SELECT 
				* 
			FROM 
				kotama 
			
			ORDER BY 
				kotamaId ASC
		');
		return $query->result();
	}
	
	public function list_kotama2(){
		
		$asd = $this->uri->segment(3);
		
		$query = $this->db->query('
			SELECT 
				* 
			FROM 
				kotama
			ORDER BY 
				kotamaId ASC
		');
		return $query->result();
	}
	
	//Breadcrumb
	public function mabes_tni_breadcrumb(){
		
		$asd = $this->uri->segment(3);
		
		$query = $this->db->query('
			SELECT 
				* 
			FROM 
				kesatuan 
			WHERE
				idinduk = 1 AND
				id = '.$asd.'
			ORDER BY 
				id ASC
		');
		return $query->result();
	}
	
	public function mabes_tni_breadcrumb2(){
		
		$asd = $this->uri->segment(3);
		$id = substr($asd,-2);
		// echo $id;
		// die();
				
		$query = $this->db->query('
			SELECT 
				* 
			FROM 
				kesatuan 
			WHERE
				id = '.$id.'
			ORDER BY 
				id ASC
		');
		return $query->result();
	}
	
	public function tambah_mabes_tni(){
		
		$idinduk = $this->uri->segment(3);
				
		$data = array(
            'kesatuan'		=> $this->input->post('KESATUAN'),
			'idinduk'		=> $idinduk
        );
        $this->db->insert('kesatuan', $data);
		
	}
	
	public function tambah_mabes_tni2(){
		
		$idinduk = $this->uri->segment(3);
				
		$data = array(
            'kesatuan'		=> $this->input->post('KESATUAN'),
			'idinduk'		=> '1.'.$idinduk
        );
        $this->db->insert('kesatuan', $data);
		
	}
	
	public function edit_mabes_tni($id){
				
		$this->db->where('id', $id);
        $data = $this->db->get('kesatuan');
        return $data->result();
		
	}
	
	public function update_mabes_tni($id){
		
		$data = array(
            'kesatuan'		=> $this->input->post('KESATUAN')
			//'idinduk'		=> $idinduk
        );
		$this->db->where('id', $id);
        $this->db->update('kesatuan', $data);
		
	}
	
	public function delete_mabes_tni($id){
		
		$this->db->where('id', $id);
        $this->db->delete('kesatuan', array('id' => $id));
		
	}
	
	//================================================ END MABES TNI ===================================//
	
	
	
	//================================================ TNI AD =========================================//
	
	public function list_denma(){
		$query = $this->db->query('
			SELECT 
				* 
			FROM 
				kotama 
			WHERE 
				kotamaId = 1
			
		');
		return $query->result();
	}
	
	public function list_denma(){
		
		$asd = $this->uri->segment(3);
		
		$query = $this->db->query('
			SELECT 
				* 
			FROM 
				kotama 
			WHERE 
				kotamaId = 1.'.$asd.'
			
		');
		return $query->result();
	}
	
	//Breadcrumb
	public function denma_breadcrumb(){
		
		$asd = $this->uri->segment(3);
		
		$query = $this->db->query('
			SELECT 
				* 
			FROM 
				kotama 
			WHERE
				kotamaId = 1 AND
				id = '.$asd.'
			
		');
		return $query->result();
	}
	
	public function tni_ad_breadcrumb2(){
		
		$asd = $this->uri->segment(3);
		$id = substr($asd,-2);
		// echo $id;
		// die();
				
		$query = $this->db->query('
			SELECT 
				* 
			FROM 
				kesatuan 
			WHERE
				id = '.$id.'
			ORDER BY 
				id ASC
		');
		return $query->result();
	}
	
	public function tambah_tni_ad(){
		
		$idinduk = $this->uri->segment(3);
				
		$data = array(
            'kesatuan'		=> $this->input->post('KESATUAN'),
			'idinduk'		=> $idinduk
        );
        $this->db->insert('kesatuan', $data);
		
	}
	
	public function tambah_tni_ad2(){
		
		$idinduk = $this->uri->segment(3);
				
		$data = array(
            'kesatuan'		=> $this->input->post('KESATUAN'),
			'idinduk'		=> '2.'.$idinduk
        );
        $this->db->insert('kesatuan', $data);
		
	}
	
	public function edit_tni_ad($id){
		
		$this->db->where('id', $id);
        $data = $this->db->get('kesatuan');
        return $data->result();
		
	}
	
	public function update_tni_ad($id){
		
		$data = array(
            'kesatuan'		=> $this->input->post('KESATUAN')
			//'idinduk'		=> $idinduk
        );
		$this->db->where('id', $id);
        $this->db->update('kesatuan', $data);
		
	}
	
	public function delete_tni_ad($id){
		
		$this->db->where('id', $id);
        $this->db->delete('kesatuan', array('id' => $id));
		
	}
	
	//================================================ END TNI AD =======================================//
	
	
	//============================================= TNI AL =============================================//
	
	public function list_kes_tni_al(){
		$query = $this->db->query('
			SELECT 
				* 
			FROM 
				kesatuan 
			WHERE 
				idinduk = 3
			ORDER BY 
				id ASC
		');
		return $query->result();
	}
	
	public function list_tni_al2(){
		
		$asd = $this->uri->segment(3);
		
		$query = $this->db->query('
			SELECT 
				* 
			FROM 
				kesatuan 
			WHERE 
				idinduk = 3.'.$asd.'
			ORDER BY 
				id ASC
		');
		return $query->result();
	}
	
	//Breadcrumb
	public function tni_al_breadcrumb(){
		
		$asd = $this->uri->segment(3);
		
		$query = $this->db->query('
			SELECT 
				* 
			FROM 
				kesatuan 
			WHERE
				idinduk = 3 AND
				id = '.$asd.'
			ORDER BY 
				id ASC
		');
		return $query->result();
	}
	
	public function tni_al_breadcrumb2(){
		
		$asd = $this->uri->segment(3);
		$id = substr($asd,-2);
		// echo $id;
		// die();
				
		$query = $this->db->query('
			SELECT 
				* 
			FROM 
				kesatuan 
			WHERE
				id = '.$id.'
			ORDER BY 
				id ASC
		');
		return $query->result();
	}
	
	public function tambah_tni_al(){
		
		$idinduk = $this->uri->segment(3);
				
		$data = array(
            'kesatuan'		=> $this->input->post('KESATUAN'),
			'idinduk'		=> $idinduk
        );
        $this->db->insert('kesatuan', $data);
		
	}
	
	public function tambah_tni_al2(){
		
		$idinduk = $this->uri->segment(3);
				
		$data = array(
            'kesatuan'		=> $this->input->post('KESATUAN'),
			'idinduk'		=> '3.'.$idinduk
        );
        $this->db->insert('kesatuan', $data);
		
	}
	
	public function edit_tni_al($id){
		
		$this->db->where('id', $id);
        $data = $this->db->get('kesatuan');
        return $data->result();
		
	}
	
	public function update_tni_al($id){
		
		$data = array(
            'kesatuan'		=> $this->input->post('KESATUAN')
			//'idinduk'		=> $idinduk
        );
		$this->db->where('id', $id);
        $this->db->update('kesatuan', $data);
		
	}
	
	public function delete_tni_al($id){
		
		$this->db->where('id', $id);
        $this->db->delete('kesatuan', array('id' => $id));
		
	}
	
	//================================================ END TNI AL =======================================//
	
	
	
	//=================================================== TNI AU =======================================//
	
	public function list_kes_tni_au(){
		$query = $this->db->query('
			SELECT 
				* 
			FROM 
				kesatuan 
			WHERE 
				idinduk = 4
			ORDER BY 
				id ASC
		');
		return $query->result();
	}
	
	public function list_tni_au2(){
		
		$asd = $this->uri->segment(3);
		
		$query = $this->db->query('
			SELECT 
				* 
			FROM 
				kesatuan 
			WHERE 
				idinduk = 4.'.$asd.'
			ORDER BY 
				id ASC
		');
		return $query->result();
	}
	
	//Breadcrumb
	public function tni_au_breadcrumb(){
		
		$asd = $this->uri->segment(3);
		
		$query = $this->db->query('
			SELECT 
				* 
			FROM 
				kesatuan 
			WHERE
				idinduk = 4 AND
				id = '.$asd.'
			ORDER BY 
				id ASC
		');
		return $query->result();
	}
	
	public function tni_au_breadcrumb2(){
		
		$asd = $this->uri->segment(3);
		$id = substr($asd,-2);
		// echo $id;
		// die();
				
		$query = $this->db->query('
			SELECT 
				* 
			FROM 
				kesatuan 
			WHERE
				id = '.$id.'
			ORDER BY 
				id ASC
		');
		return $query->result();
	}
	
	public function tambah_tni_au(){
		
		$idinduk = $this->uri->segment(3);
				
		$data = array(
            'kesatuan'		=> $this->input->post('KESATUAN'),
			'idinduk'		=> $idinduk
        );
        $this->db->insert('kesatuan', $data);
		
	}
	
	public function tambah_tni_au2(){
		
		$idinduk = $this->uri->segment(3);
				
		$data = array(
            'kesatuan'		=> $this->input->post('KESATUAN'),
			'idinduk'		=> '4.'.$idinduk
        );
        $this->db->insert('kesatuan', $data);
		
	}
	
	public function edit_tni_au($id){
		
		$this->db->where('id', $id);
        $data = $this->db->get('kesatuan');
        return $data->result();
		
	}
	
	public function update_tni_au($id){
		
		$data = array(
            'kesatuan'		=> $this->input->post('KESATUAN')
			//'idinduk'		=> $idinduk
        );
		$this->db->where('id', $id);
        $this->db->update('kesatuan', $data);
		
	}
	
	public function delete_tni_au($id){
		
		$this->db->where('id', $id);
        $this->db->delete('kesatuan', array('id' => $id));
		
	}
	
	//================================================ END TNI AU =======================================//

}

?>