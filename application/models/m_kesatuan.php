<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_kesatuan extends CI_Model {


	//============================================= KODIKAU =============================================//
	
	public function list_kes_kodikau(){
		$query = $this->db->query('
			SELECT 
				* 
			FROM 
				m_lanud 
			WHERE 
				kotamaId = 4
			ORDER BY 
				lanudId ASC
		');
		return $query->result();
	}
	
	public function list_kodikau2(){
		
		$asd = $this->uri->segment(3);
		
		$query = $this->db->query('
			SELECT 
				* 
			FROM 
				m_lanud 
			WHERE 
				kotamaId = 4.'.$asd.'
			ORDER BY 
				lanudId ASC
		');
		return $query->result();
	}
	
	//Breadcrumb
	public function kodikau_breadcrumb(){
		
		$asd = $this->uri->segment(3);
		
		$query = $this->db->query('
			SELECT 
				* 
			FROM 
				m_lanud 
			WHERE
				kotamaId = 4 AND
				lanudId = '.$asd.'
			ORDER BY 
				lanudId ASC
		');
		return $query->result();
	}
	
	public function kodikau_breadcrumb2(){
		
		$asd = $this->uri->segment(3);
		$id = substr($asd,-2);
		// echo $id;
		// die();
				
		$query = $this->db->query('
			SELECT 
				* 
			FROM 
				m_lanud 
			WHERE
				lanudId = '.$lanudId.'
			ORDER BY 
				lanudId ASC
		');
		return $query->result();
	}
	
	public function tambah_kodikau(){
		
		$kotamaId = $this->uri->segment(3);
				
		$data = array(
            'lanud'		=> $this->input->post('LANUD'),
			'kotamaId'		=> $kotamaId
        );
        $this->db->insert('m_lanud', $data);
		
	}
	
	public function tambah_kodikau2(){
		
		$kotamaId = $this->uri->segment(3);
				
		$data = array(
            'm_lanud'		=> $this->input->post('LANUD'),
			'kotamaId'		=> '4.'.$kotamaId
        );
        $this->db->insert('m_lanud', $data);
		
	}
	
	public function edit_kodikau($lanudId){
		
		$this->db->where('lanudId', $lanudId);
        $data = $this->db->get('m_lanud');
        return $data->result();
		
	}
	
	public function update_kodikau($lanudId){
		
		$data = array(
            'm_lanud'		=> $this->input->post('LANUD')
			//'idinduk'		=> $idinduk
        );
		$this->db->where('lanudId', $lanudId);
        $this->db->update('m_lanud', $data);
		
	}
	
	public function delete_kodikau($lanudId){
		
		$this->db->where('lanudId', $lanudId);
        $this->db->delete('m_lanud', array('lanudId' => $lanudId));
		
	}
	
	//================================================ END KODIKAU =======================================//
	
	

	//================================================ MABES TNI ===================================//
	
	public function list_kes_mabes_tni(){
		$query = $this->db->query('
			SELECT 
				* 
			FROM 
				kesatuan 
			WHERE 
				idinduk = 1
			ORDER BY 
				id ASC
		');
		return $query->result();
	}
	
	public function list_kes_mabes_tni2(){
		
		$asd = $this->uri->segment(3);
		
		$query = $this->db->query('
			SELECT 
				* 
			FROM 
				kesatuan 
			WHERE 
				idinduk = 1.'.$asd.'
			ORDER BY 
				id ASC
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
	
	public function list_kes_tni_ad(){
		$query = $this->db->query('
			SELECT 
				* 
			FROM 
				kesatuan 
			WHERE 
				idinduk = 2
			ORDER BY 
				id ASC
		');
		return $query->result();
	}
	
	public function list_tni_ad2(){
		
		$asd = $this->uri->segment(3);
		
		$query = $this->db->query('
			SELECT 
				* 
			FROM 
				kesatuan 
			WHERE 
				idinduk = 2.'.$asd.'
			ORDER BY 
				id ASC
		');
		return $query->result();
	}
	
	//Breadcrumb
	public function tni_ad_breadcrumb(){
		
		$asd = $this->uri->segment(3);
		
		$query = $this->db->query('
			SELECT 
				* 
			FROM 
				kesatuan 
			WHERE
				idinduk = 2 AND
				id = '.$asd.'
			ORDER BY 
				id ASC
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