<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	
	 public function __construct() {
        parent::__construct();
        session_start();

        if ($this->session->userdata('level') == null or $this->session->userdata('level') == '3') {
            $this->session->set_flashdata('session_expired', TRUE);
            redirect('login');
        }
		
		//$this->load->model('m_users');
		//$this->load->model('m_senjata_tni_al');
		

    }
	
	
	public function index(){
		//$data['link_open_wilayah'] = 'class="start active open"';
        //$data['link_aktif_wilayah'] = 'class="active"';
        //$data['link_data_master'] = 'class="start active open"';
		$data['title'] = "User";
		$query = $this->db->query("SELECT 

                   * FROM users

                    

                    

                    ")->result();

        $data['model'] = $query;
		$query2 = $this->db->query("SELECT 

                   * FROM grup_user

                    

                    

                    ")->result();

        $data['grup_user'] = $query2;
    	$this->load->view('user/index',$data);
		
	}
	
	public function getLad($id=''){
		$query = $this->db->query("SELECT 

                   * FROM m_lanud
				   WHERE kotama='$id'

                    

                    

                    ")->result();

        $data['lanud'] = $query;
		$this->load->view('user/lanud',$data);
	
	}
	
	public function getLad2($id=''){
		$query = $this->db->query("SELECT 

                   * FROM m_lanud
				   WHERE kotama='$id'

                    

                    

                    ")->result();

        $data['lanud'] = $query;
		$this->load->view('user/lanud2',$data);
	
	}
	
	public function tambah(){
    	//$data['link_aset_tanah'] = 'open';
        //$data['link_data_aset'] = 'class="active"';
        //$data['link_data_1'] = 'class="start active open"';
		$data['title'] = "Tambah User";
		//$userz = $this->session->userdata('user_name');
		
		$query = $this->db->query("SELECT 

                   * FROM grup_user
					order by id asc
                    

                    

                    ")->result();

        $data['grup_user'] = $query;
		
		$query2 = $this->db->query("SELECT 

                   * FROM kotama

                    

                    

                    ")->result();

        $data['kotama'] = $query2;
		
		$query3 = $this->db->query("SELECT 

                   * FROM m_lanud

                    

                    

                    ")->result();

        $data['lanud'] = $query3;
		
    	$this->load->view('user/tambah',$data);
    }
	
	public function getLanud(){
		$query = $this->db->query("SELECT 

                   * FROM m_lanud
				   WHERE kotama='".$_POST['id']."'

                    

                    

                    ")->result();
					
					$arr_id = array();
					$arr_lanud = array();
					foreach($query as $dataQ){
						array_push($arr_id,$dataQ->id);
						array_push($arr_lanud,$dataQ->lanud);
					}
					echo json_encode(array('arr_id'=>$arr_id,'arr_lanud'=>$arr_lanud));
	}
	
	
	public function simpan(){
			$username = $_POST['username'];
			$grup_user = $_POST['grup_user'];
			$password = md5($_POST['password']);
			//echo $grup_user;die();
			if($grup_user == 0){
				$this->db->query("insert into users (username,password,grup_user,level,penanggungjawab,status) values ('".$username."','".$password."','".$grup_user."','0','0','0')");
			}else if($grup_user == 1){
				//echo "insert into users (username,password,grup_user,kesatuanId,level,penanggungjawab,status) values ('".$username."','".$password."','".$grup_user."','0','0','0','0')";die();
				$this->db->query("insert into users (username,password,grup_user,level,penanggungjawab,status) values ('".$username."','".$password."','".$grup_user."','0','0','0')");
			}else if($grup_user == 2){
				$kotama = $_POST['kotama'];
				/*
				$jumlahlanud = count($_POST['lanud']);
			
				for ($i=0 ; $i<=$jumlahlanud ; $i++)
				{
						$deretlanud = $_POST['lanud'][$i];
				}
				*/
				$deretlanud = implode(",",$_POST['lanud']);
				//echo $deretlanud."asdas";die();
				$this->db->query("insert into users (username,password,grup_user,level,penanggungjawab,status,kotama,lanud) values ('".$username."','".$password."','".$grup_user."','0','0','0','".$kotama."','".$deretlanud."')");
			}else if($grup_user == 3){
				$kotama2 = $_POST['kotama2'];
				$lanud2 = $_POST['lanud2'];
				$this->db->query("insert into users (username,password,grup_user,level,penanggungjawab,status,kotama,lanud) values ('".$username."','".$password."','".$grup_user."','0','0','0','".$kotama2."','".$lanud2."')");
			}else{
				$this->db->query("insert into users (username,password,grup_user,level,penanggungjawab,status) values ('".$username."','".$password."','".$grup_user."','0','0','0')");
			}
			redirect('user', 'refresh');
    }
	
	
	
	public function hapus($id){
		$this->db->query("delete from users where id='".$id."'");
	
		redirect('user', 'refresh');
    }
	
	public function edit($id){
		//echo $id."zzz";die();
		//$x = explode("_",$id);
    	//$data['link_aset_tanah'] = 'open';
        //$data['link_data_aset'] = 'class="active"';
        //$data['link_data_1'] = 'class="start active open"';
		$data['title'] = "Edit Data Aset";
		//$userz = $this->session->userdata('user_name');
		
		$query = $this->db->query("SELECT 
					*
				FROM 
					users
				WHERE 
					id='".$id."'
				")->result();
		$data['datanya']=$query;
		$queryaaa = $this->db->query("SELECT 
					*
				FROM 
					users
				WHERE
					id='".$id."'
					
					")->result();
					
		foreach ($queryaaa as $ruk)
				{
				$kotama = $ruk->kotama;				
				}	
		if(empty($kotama)){
			$zalo = "";
		}else{
			$zalo ="WHERE 
					kotama = '".$kotama."'";
		}
				
		$querysss = $this->db->query("SELECT 
					*
				FROM 
					m_lanud
				$zalo
				")->result();
		$data['lanudzx']=$querysss;
				
		$query4 = $this->db->query("SELECT 

                   * FROM grup_user

                    

                    

                    ")->result();

        $data['grup_user'] = $query4;
		
		$query2 = $this->db->query("SELECT 

                   * FROM kotama

                    

                    

                    ")->result();

        $data['kotama'] = $query2;
		
		$query3 = $this->db->query("SELECT 

                   * FROM m_lanud

                    

                    

                    ")->result();

        $data['lanud'] = $query3;
    	$this->load->view('user/edit',$data);
    }
	
	
	public function update(){
    	$this->db->query("update grup_user set nama='".$_POST['nama']."', keterangan='".$_POST['keterangan']."' where id='".$_POST['id']."'");
	
		redirect('grup_user', 'refresh');
    }
	
	public function simpanedit(){
			$username = $_POST['username'];
			$grup_user = $_POST['grup_user'];
			$idnya = $_POST['idnya'];
			$pazz = $_POST['new_password'];
			$new_password = md5($_POST['new_password']);
			
			//echo $new_password;die();
			if($grup_user == 0){
				if(empty($pazz)){
					//echo "pass kosong";die();
					$this->db->query("update users set username='".$username."', grup_user='0' where id='".$idnya."'");
				}else{
					//echo "pass baru ada";die();
					$this->db->query("update users set username='".$username."', password='".$new_password."', grup_user='0' where id='".$idnya."'");
				}
			
			}else if($grup_user == 1){
				if(empty($pazz)){
					//echo "pass kosong";die();
					$this->db->query("update users set username='".$username."', grup_user='1' where id='".$idnya."'");
				}else{
					//echo "pass baru ada";die();
					$this->db->query("update users set username='".$username."', password='".$new_password."', grup_user='1' where id='".$idnya."'");
				}
			
			}else if($grup_user == 2){
				$kotama = $_POST['kotama'];
				if(empty($pazz)){
					//echo "pass kosong";die();
					$this->db->query("update users set username='".$username."', kotama='".$kotama."', grup_user='2' where id='".$idnya."'");
				}else{
					//echo "pass baru ada";die();
					$this->db->query("update users set username='".$username."', kotama='".$kotama."', password='".$new_password."', grup_user='2' where id='".$idnya."'");
				}
			
			}else if($grup_user == 3){
				$kotama2 = $_POST['kotama2'];
				$lanud2 = $_POST['lanud2'];
				if(empty($pazz)){
					//echo "pass kosong";die();
					//echo "update users set username='".$username."', kotama='".$kotama2."', lanud='".$lanud2."', grup_user='3' where id='".$idnya."'";die();
					$this->db->query("update users set username='".$username."', kotama='".$kotama2."', lanud='".$lanud2."', grup_user='3' where id='".$idnya."'");
				}else{
					//echo "pass baru ada";die();
					//echo "update users set username='".$username."', kotama='".$kotama2."', lanud='".$lanud2."' password='".$new_password."', grup_user='3' where id='".$idnya."'";die();
					$this->db->query("update users set username='".$username."', kotama='".$kotama2."', lanud='".$lanud2."' password='".$new_password."', grup_user='3' where id='".$idnya."'");
				}
			}
			redirect('user', 'refresh');
    }
	
	public function ganti_password(){
		$data['title'] = "Ubah Password";
    	$this->load->view('user/ganti_password',$data);
	}
	
	public function ubahpass(){
		$userz = $this->session->userdata('user_name');
		//echo $userz."ASDASDAS";die();
		$new_password = md5($_POST['new_password']);
		$this->db->query("update users set password='".$new_password."' where username='".$userz."'");
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
	
	
	

	
	
}

?>