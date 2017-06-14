<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Import_dataaset extends CI_Controller {

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
		$data['title'] = "Import Data Aset";
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
		
    	$this->load->view('import_dataaset/index',$data);
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
		$this->load->view('import_dataaset/satker',$data);
	
	}
	
	public function upload(){
		$satker = $_POST['satker'];
		$querypas = $this->db->query("SELECT 
															MAX(id) as maxi
													FROM 
														data_aset ")->result();
														
											foreach ($querypas as $rpk)
													{
													$maxi = $rpk->maxi;		
													}
		
        $fileName = time().$_FILES['file']['name'];
         
        $config['upload_path'] = './assets/import_dataaset'; //buat folder dengan nama assets di root folder
        $config['file_name'] = $fileName;
        $config['allowed_types'] = 'xls|xlsx|csv';
        $config['max_size'] = 10000;
         
        $this->load->library('upload');
        $this->upload->initialize($config);
         
        if(! $this->upload->do_upload('file') )
        $this->upload->display_errors();
             
        $media = $this->upload->data('file');
        $inputFileName = './assets/import_dataaset/'.$media['file_name'];
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
             
            for ($row = 15; $row <= $highestRow; $row++){                  //  Read a row of data into an array                 
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
				//echo $rowData[0][6]."asdasdasdasdasdas";die();
				
				if($rowData[0][6] == null && $rowData[0][7] == null){
					//echo "kosong";die();
				}else if($rowData[0][6] == "-" && $rowData[0][7] == "-"){
					//echo "kosong";die();
				}else if($rowData[0][6] == "-" && $rowData[0][7] == null){
					//echo "kosong";die();
				}else if($rowData[0][6] == null && $rowData[0][7] == "-"){
					//echo "kosong";die();
				}else if($rowData[0][2] == null ){
					//echo $rowData[0][11]." ".$rowData[0][12];die();
					$querypas = $this->db->query("SELECT 
															MAX(id) as kepast
													FROM 
														data_aset ")->result();
														
											foreach ($querypas as $rpk)
													{
													$kepast = $rpk->kepast;		
													}
					if($rowData[0][6] == null || $rowData[0][6] == "-"){
					
						$data2 = array(
							"dataaset"=> $kepast,
							"jenis"=> 2,
							"luas"=> $rowData[0][7],
							"no_sertifikat"=> $rowData[0][9]
						);
						$insert2 = $this->db->insert("detil_dataaset",$data2);
					}else if($rowData[0][7] == null || $rowData[0][7] == "-"){
						$data3 = array(
							"dataaset"=> $kepast,
							"jenis"=> 1,
							"luas"=> $rowData[0][6],
							"no_sertifikat"=> $rowData[0][9]
						);
						$insert3 = $this->db->insert("detil_dataaset",$data3);
						
					}
					
				}else{
					//echo "halo";die();
				
					$pro = 0;
					$kab = 0;
					$kec = 0;
					$kel = 0;
					$daper = 0;
					$statan = 0;
					$ketan = 0;
				
				
				$data6 = array(
                    "lanud"=> $satker,
                    "ikn"=> $rowData[0][1],
                    "simak"=> $rowData[0][2],
					"lokasi"=> $rowData[0][3],
					"provinsi"=> $pro,
					"kabupaten"=> $kab,
					"kecamatan"=> $kec,
					"kelurahan"=> $kel,
					"dasar_perolehan"=> $daper,
					"luas"=> $rowData[0][4],
					
					"dasar_perolehan_ket"=> $rowData[0][5],
					"nilai"=> $rowData[0][8],
					"status_tanah"=> $statan,
					"peruntukan"=> $rowData[0][10],
					"keterangan"=> $rowData[0][11]
					
                );
                $insert = $this->db->insert("data_aset",$data6);
				$querypas2 = $this->db->query("SELECT 
															MAX(id) as kepast2
													FROM 
														data_aset ")->result();
														
											foreach ($querypas2 as $rpk)
													{
													$kepast2 = $rpk->kepast2;		
													}
				//echo $kepast2;die();
					if($rowData[0][6] == null || $rowData[0][6] == "-"){
						//echo "joker";die();
						$data8 = array(
							"dataaset"=> $kepast2,
							"jenis"=> 2,
							"luas"=> $rowData[0][7],
							"no_sertifikat"=> $rowData[0][9]
						);
						$insert8 = $this->db->insert("detil_dataaset",$data8);
					}else if($rowData[0][7] == null || $rowData[0][7] == "-"){
						//echo "fang";die();
						$data9 = array(
							"dataaset"=> $kepast2,
							"jenis"=> 1,
							"luas"=> $rowData[0][6],
							"no_sertifikat"=> $rowData[0][9]
						);
						$insert9 = $this->db->insert("detil_dataaset",$data9);
						
					}
				}
				
                delete_files($media['file_path']);
                     
            }
		if($maxi == null || $maxi == 0){
			$sanji = 0;
		}else{
			$sanji = $maxi;
		}
		$slinging = base64_encode($sanji);
		//echo "End Process";
        redirect('import_dataaset/hasil_import/'.$slinging);
		//redirect('import_dataaset');
    }
	
	public function hasil_import($slinging){
		$maxi = base64_decode($slinging);
    	$data['link_open_wilayah'] = 'class="start active open"';
        $data['link_aktif_wilayah2'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
		$data['title'] = "Hasil Import";
		$query = $this->db->query("select * from data_aset WHERE id>'".$maxi."' ")->result();

        $data['model'] = $query;
    	$this->load->view('import_dataaset/hasil_import',$data);
    }
	
}