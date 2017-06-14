<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Import_permasalahan extends CI_Controller {

    public function __construct() {
    	parent::__construct();
		 $this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
    	//$this->load->model('provinsi_model');
    	session_start();
    	/*if ($this->session->userdata('level')== null) {
    		$this->session->set_flashdata('session_expired', TRUE);
    		redirect('login');
    	}*/
    }

    public function index(){
    	$data['link_open_wilayah'] = 'class="start active open"';
        $data['link_aktif_wilayah2'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		$data['title'] = "Import Permasalahan";
		$query = $this->db->query("SELECT 
					*
				FROM 
					kotama
				order by kotama asc
					
					")->result();
		$data['kotama'] = $query;
		/*
		$query = $this->db->query("SELECT 

                   a.*,a.id as id_kabupaten,b.* FROM kabupaten a, provinsi b
				   where a.provinsi = b.id

                    

                    

                    ")->result();
		*/
        //$data['model'] = $query;
		
    	$this->load->view('import_permasalahan/index',$data);
    }
	
	public function getsatker($kotama='') 
    {   
		$query = $this->db->query("SELECT 
					*
				FROM 
					m_lanud
				WHERE
					kotama='$kotama'
				order by id asc
				")->result();
		$data['satker'] = $query;
		$this->load->view('import_permasalahan/satker',$data);
	
	}
	
	public function upload(){
		// echo "kampret";die();
		$satker = $_POST['satker'];
		$querypas = $this->db->query("SELECT 
															MAX(id) as maxi
													FROM 
														permasalahan ")->result();
														
											foreach ($querypas as $rpk)
													{
													$maxi = $rpk->maxi;		
													}
		
        $fileName = time().$_FILES['file']['name'];
         
        $config['upload_path'] = './assets/import_permasalahan'; //buat folder dengan nama assets di root folder
        $config['file_name'] = $fileName;
        $config['allowed_types'] = 'xls|xlsx|csv';
        $config['max_size'] = 10000;
         
        $this->load->library('upload');
        $this->upload->initialize($config);
         
        if(! $this->upload->do_upload('file') )
        $this->upload->display_errors();
             
        $media = $this->upload->data('file');
        $inputFileName = './assets/import_permasalahan/'.$media['file_name'];
        //chmod($inputFileName, 0777);
		/*
		if (is_readable($inputFileName)) {
			echo 'The file is readable';die();
		} else {
			echo 'The file is not readable';die();
		}
		*/
        try {
                $inputFileType = IOFactory::identify($inputFileName);
                $objReader = IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($inputFileName);
            } catch(Exception $e) {
                die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
            }
 
            $sheet = $objPHPExcel->getSheet(0);
            $highestRow = $sheet->getHighestRow();
            $highestColumn = $sheet->getHighestColumn();
             
            for ($row = 11; $row <= $highestRow; $row++){    
			//  Read a row of data into an array                 
                $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                                NULL,
                                                TRUE,
                                                FALSE);
                                                 
                //Sesuaikan sama nama kolom tabel di database                                
                 /*
				 $data = array(
                    "ikn"=> $rowData[0][1],
                    "simak"=> $rowData[0][2],
					"lokasi"=> $rowData[0][3],
					"luas"=> $rowData[0][4],
					"dasar_perolehan"=> $rowData[0][5],
					"penggunaan"=> $rowData[0][8],
					"keterangan"=> $rowData[0][9]
					
                );
				*/
				//echo "<pre>";
                //var_dump($data);die();
                //sesuaikan nama dengan nama tabel
				// echo $rowData[0][3]."asdasdasdasdasdas";die();
				
				if($rowData[0][5] == null){
					
				}else if($rowData[0][3] == null && $rowData[0][4] == null){
					
				}else{
					

						$data = array(
							"lanud"=> $satker,
							"permasalahan"=> $rowData[0][5],
							"hasil_klarifikasi"=> $rowData[0][6],
							"tindak_lanjut"=> $rowData[0][7],
							"provinsi"=> $rowData[0][1],
							"alamat"=> $rowData[0][2],
							"luas"=> $rowData[0][3],
							"nilai"=> $rowData[0][4]
						);
						
						
						$insert = $this->db->insert("permasalahan",$data);
					
					
				
				}
				
                delete_files($media['file_path']);
                     
            }
			
		// echo "udah";die();
		if($maxi == null || $maxi == 0){
			$sanji = 0;
		}else{
			$sanji = $maxi;
		}
		$slinging = base64_encode($sanji);
		//echo "End Process";
        redirect('import_permasalahan/hasil_import/'.$slinging);
		//redirect('import_permasalahan');
    }
	
	public function hasil_import($slinging){
		$maxi = base64_decode($slinging);
    	$data['link_open_wilayah'] = 'class="start active open"';
        $data['link_aktif_wilayah2'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		$data['title'] = "Hasil Import Permasalahan";
		$query = $this->db->query("select * from permasalahan WHERE id>'".$maxi."' ")->result();

        $data['model'] = $query;
    	$this->load->view('import_permasalahan/hasil_import',$data);
    }
	
}