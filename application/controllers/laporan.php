<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Laporan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        session_start();
        $this->load->library('pdf');
    }

    public function index(){
        $data['link_open_wilayah'] = 'class="start active open"';
        $data['link_aktif_wilayah2'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
        $data['title'] = "Master Data Laporan";
        $query = $this->db->query("SELECT * FROM jenis_material order by nama_jenismaterial asc")->result();
        $data['material'] = $query;
        $query = $this->db->query("SELECT * FROM jenis_barang order by nama_jenisbarang asc")->result();
        $data['barang'] = $query;


        $this->load->view('laporan/index', $data);

    }

    public function getDetailKondisiBaik($nama_barang){

        $data['link_open_wilayah'] = 'class="start active open"';
        $data['link_aktif_wilayah2'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
        $data['title'] = "Master Data Laporan";

        $nam_bar = str_replace('%20',' ',$nama_barang);
        $url = urldecode($nam_bar);

        $query1 = $this->db->query("select * from data_inventory 
                                    where nama_barang = '$url' and kondisi_baik = '100%'")->result();
        $data['detail_inventory'] = $query1;

        $this->load->view('laporan/detail',$data);

    }

    public function getDetailKondisiBaiks($nama_barang){

        $data['link_open_wilayah'] = 'class="start active open"';
        $data['link_aktif_wilayah2'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
        $data['title'] = "Master Data Laporan";

        $nam_bar = str_replace('%20',' ',$nama_barang);
        $url = urldecode($nam_bar);

        $query1 = $this->db->query("select * from data_inventory 
                                    where nama_barang = '$url' and kondisi_baik = '50%'")->result();
        $data['detail_inventory'] = $query1;

        $this->load->view('laporan/detailbaik',$data);

    }

    public function getDetailKondisiBurukRingan($nama_barang){

        $data['link_open_wilayah'] = 'class="start active open"';
        $data['link_aktif_wilayah2'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
        $data['title'] = "Master Data Laporan";

        $nam_bar = str_replace('%20',' ',$nama_barang);
        $url = urldecode($nam_bar);

        $query1 = $this->db->query("select * from data_inventory 
                                    where nama_barang = '$url' and kondisi_buruk = 'Rusak Ringan'")->result();
        $data['detail_inventory'] = $query1;

        $this->load->view('laporan/detailburukringan',$data);

    }

    public function getDetailKondisiBurukSedang($nama_barang){

        $data['link_open_wilayah'] = 'class="start active open"';
        $data['link_aktif_wilayah2'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
        $data['title'] = "Master Data Laporan";

        $nam_bar = str_replace('%20',' ',$nama_barang);
        $url = urldecode($nam_bar);

        $query1 = $this->db->query("select * from data_inventory 
                                    where nama_barang = '$url' and kondisi_buruk = 'Rusak Sedang'")->result();
        $data['detail_inventory'] = $query1;

        $this->load->view('laporan/detailburuksedang',$data);

    }

    public function getDetailKondisiBurukBerat($nama_barang){

        $data['link_open_wilayah'] = 'class="start active open"';
        $data['link_aktif_wilayah2'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
        $data['title'] = "Master Data Laporan";

        $nam_bar = str_replace('%20',' ',$nama_barang);
        $url = urldecode($nam_bar);

        $query1 = $this->db->query("select * from data_inventory 
                                    where nama_barang = '$url' and kondisi_buruk = 'Rusak Berat'")->result();
        $data['detail_inventory'] = $query1;

        $this->load->view('laporan/detailburukberat',$data);

    }

    public function getRecordMaterial($id_jenismaterial =''){

        $data['link_open_wilayah'] = 'class="start active open"';
        $data['link_aktif_wilayah2'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
        $data['title'] = "Master Data Laporan";


            $query1 = $this->db->query("SELECT b.nama_jenismaterial, c.nama_jenisbarang, a.nama_barang, COUNT(a.nama_barang) as jumlah, 
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_baik = '100%') as kondisiBaik, 
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_baik = '50%') as kondisiBaiks,
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_buruk = 'Rusak Ringan') as kondisiBurukRingan,
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_buruk = 'Rusak Sedang') as kondisiBurukSedang,
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_buruk = 'Rusak Berat') as kondisiBurukBerat 
                                        FROM data_inventory a, jenis_material b, jenis_barang c 
                                        WHERE a.id_jenismaterial = b.id_jenismaterial and a.id_jenisbarang = c.id_jenisbarang 
                                        and a.id_jenismaterial = '$id_jenismaterial'
                                        GROUP BY a.nama_barang, b.nama_jenismaterial, c.nama_jenisbarang 
                                        ORDER BY b.nama_jenismaterial ASC")->result();
            $data['inventory'] = $query1;

        $this->load->view('laporan/data',$data);

    }

    public function getRecordJenisBarang($id_jenisbarang =''){

        $data['link_open_wilayah'] = 'class="start active open"';
        $data['link_aktif_wilayah2'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
        $data['title'] = "Master Data Laporan";


        $query1 = $this->db->query("SELECT b.nama_jenismaterial, c.nama_jenisbarang, a.nama_barang, COUNT(a.nama_barang) as jumlah, 
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_baik = '100%') as kondisiBaik, 
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_baik = '50%') as kondisiBaiks,
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_buruk = 'Rusak Ringan') as kondisiBurukRingan,
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_buruk = 'Rusak Sedang') as kondisiBurukSedang,
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_buruk = 'Rusak Berat') as kondisiBurukBerat 
                                        FROM data_inventory a, jenis_material b, jenis_barang c 
                                        WHERE a.id_jenismaterial = b.id_jenismaterial and a.id_jenisbarang = c.id_jenisbarang 
                                        and a.id_jenisbarang = '$id_jenisbarang'
                                        GROUP BY a.nama_barang, b.nama_jenismaterial, c.nama_jenisbarang 
                                        ORDER BY b.nama_jenismaterial ASC")->result();
        $data['inventory'] = $query1;

        $this->load->view('laporan/data',$data);

    }

    public function getRecordSemua(){

        $data['link_open_wilayah'] = 'class="start active open"';
        $data['link_aktif_wilayah2'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
        $data['title'] = "Master Data Laporan";

        $query1 = $this->db->query("SELECT b.nama_jenismaterial, c.nama_jenisbarang, a.nama_barang, COUNT(a.nama_barang) as jumlah, 
                                    (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                    and o.kondisi_baik = '100%') as kondisiBaik, 
                                    (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                    and o.kondisi_baik = '50%') as kondisiBaiks,
                                    (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                    and o.kondisi_buruk = 'Rusak Ringan') as kondisiBurukRingan,
                                    (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                    and o.kondisi_buruk = 'Rusak Sedang') as kondisiBurukSedang,
                                    (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                    and o.kondisi_buruk = 'Rusak Berat') as kondisiBurukBerat 
                                    FROM data_inventory a, jenis_material b, jenis_barang c 
                                    WHERE a.id_jenismaterial = b.id_jenismaterial and a.id_jenisbarang = c.id_jenisbarang
                                    GROUP BY a.nama_barang, b.nama_jenismaterial, c.nama_jenisbarang 
                                    ORDER BY b.nama_jenismaterial ASC")->result();
        $data['inventory'] = $query1;

        $this->load->view('laporan/data',$data);

    }

    public function getRecordNamaBarang($nama_barang){

        $data['link_open_wilayah'] = 'class="start active open"';
        $data['link_aktif_wilayah2'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
        $data['title'] = "Master Data Laporan";

        $nam_bar = str_replace('%20',' ',$nama_barang);
        $url = urldecode($nam_bar);

        $query1 = $this->db->query("SELECT b.nama_jenismaterial, c.nama_jenisbarang, a.nama_barang, COUNT(a.nama_barang) as jumlah, 
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_baik = '100%') as kondisiBaik, 
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_baik = '50%') as kondisiBaiks,
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_buruk = 'Rusak Ringan') as kondisiBurukRingan,
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_buruk = 'Rusak Sedang') as kondisiBurukSedang,
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_buruk = 'Rusak Berat') as kondisiBurukBerat 
                                        FROM data_inventory a, jenis_material b, jenis_barang c 
                                        WHERE a.id_jenismaterial = b.id_jenismaterial and a.id_jenisbarang = c.id_jenisbarang 
                                        and a.nama_barang = '$url'
                                        GROUP BY a.nama_barang, b.nama_jenismaterial, c.nama_jenisbarang 
                                        ORDER BY b.nama_jenismaterial ASC")->result();
        $data['inventory'] = $query1;

        $this->load->view('laporan/data',$data);

    }

    public function getRecordMaterialNamaBarang($id_jenismaterial,$nama_barang){

        $data['link_open_wilayah'] = 'class="start active open"';
        $data['link_aktif_wilayah2'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
        $data['title'] = "Master Data Laporan";

        $nam_bar = str_replace('%20',' ',$nama_barang);
        $url = urldecode($nam_bar);

        $query1 = $this->db->query("SELECT b.nama_jenismaterial, c.nama_jenisbarang, a.nama_barang, COUNT(a.nama_barang) as jumlah, 
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_baik = '100%') as kondisiBaik, 
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_baik = '50%') as kondisiBaiks,
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_buruk = 'Rusak Ringan') as kondisiBurukRingan,
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_buruk = 'Rusak Sedang') as kondisiBurukSedang,
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_buruk = 'Rusak Berat') as kondisiBurukBerat 
                                        FROM data_inventory a, jenis_material b, jenis_barang c 
                                        WHERE a.id_jenismaterial = b.id_jenismaterial and a.id_jenisbarang = c.id_jenisbarang 
                                        and a.id_jenismaterial = '$id_jenismaterial' and a.nama_barang = '$url'
                                        GROUP BY a.nama_barang, b.nama_jenismaterial, c.nama_jenisbarang 
                                        ORDER BY b.nama_jenismaterial ASC")->result();
        $data['inventory'] = $query1;

        $this->load->view('laporan/data',$data);
    }

    public function getRecordMaterialNamaBarangJenis($id_jenismaterial,$id_jenisbarang,$nama_barang){

        $data['link_open_wilayah'] = 'class="start active open"';
        $data['link_aktif_wilayah2'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
        $data['title'] = "Master Data Laporan";

        $nam_bar = str_replace('%20',' ',$nama_barang);
        $url = urldecode($nam_bar);

        $query1 = $this->db->query("SELECT b.nama_jenismaterial, c.nama_jenisbarang, a.nama_barang, COUNT(a.nama_barang) as jumlah, 
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_baik = '100%') as kondisiBaik, 
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_baik = '50%') as kondisiBaiks,
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_buruk = 'Rusak Ringan') as kondisiBurukRingan,
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_buruk = 'Rusak Sedang') as kondisiBurukSedang,
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_buruk = 'Rusak Berat') as kondisiBurukBerat 
                                        FROM data_inventory a, jenis_material b, jenis_barang c 
                                        WHERE a.id_jenismaterial = b.id_jenismaterial and a.id_jenisbarang = c.id_jenisbarang 
                                        and a.id_jenismaterial = '$id_jenismaterial' and a.id_jenisbarang = '$id_jenisbarang'
                                        and a.nama_barang = '$url'
                                        GROUP BY a.nama_barang, b.nama_jenismaterial, c.nama_jenisbarang 
                                        ORDER BY b.nama_jenismaterial ASC")->result();
        $data['inventory'] = $query1;

        $this->load->view('laporan/data',$data);

    }

    public function getbarang($material='') {
        $query = $this->db->query("SELECT 
					*
				FROM 
					jenis_barang
				WHERE
					id_jenismaterial='$material'
				")->result();
        $data['barang'] = $query;
        $this->load->view('laporan/barang',$data);
    }



    public function cetakpdf(){

        $id_jenismaterial = $this->input->post('id_jenismaterial');
        $id_jenisbarang = $this->input->post('id_jenisbarang');
        $nama_barang = $this->input->post('nama_barang');

        if($id_jenismaterial != "0" && $id_jenisbarang =="0" && empty($nama_barang)){ //hanya jenis material

            $query1 = $this->db->query("SELECT b.nama_jenismaterial, c.nama_jenisbarang, a.nama_barang, COUNT(a.nama_barang) as jumlah, 
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_baik = '100%') as kondisiBaik, 
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_baik = '50%') as kondisiBaiks,
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_buruk = 'Rusak Ringan') as kondisiBurukRingan,
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_buruk = 'Rusak Sedang') as kondisiBurukSedang,
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_buruk = 'Rusak Berat') as kondisiBurukBerat 
                                        FROM data_inventory a, jenis_material b, jenis_barang c 
                                        WHERE a.id_jenismaterial = b.id_jenismaterial and a.id_jenisbarang = c.id_jenisbarang 
                                        and a.id_jenismaterial = '$id_jenismaterial'
                                        GROUP BY a.nama_barang, b.nama_jenismaterial, c.nama_jenisbarang 
                                        ORDER BY b.nama_jenismaterial ASC")->result();
            $data['inventory'] = $query1;


            $sumber = $this->load->view('laporan/Cetak',$data,TRUE);
            $html = $sumber;

            $pdfFilePath = "hasilreport.pdf";
            $pdf = $this->pdf->load();
            $pdf->AddPage('L');
            $pdf->WriteHTML($html);
            $pdf->Output($pdfFilePath, "D");
            exit();

        }
        elseif ($id_jenisbarang !="0" && empty($nama_barang)){ //material dan jenis barang

            $query3 = $this->db->query("SELECT b.nama_jenismaterial, c.nama_jenisbarang, a.nama_barang, COUNT(a.nama_barang) as jumlah, 
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_baik = '100%') as kondisiBaik, 
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_baik = '50%') as kondisiBaiks,
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_buruk = 'Rusak Ringan') as kondisiBurukRingan,
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_buruk = 'Rusak Sedang') as kondisiBurukSedang,
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_buruk = 'Rusak Berat') as kondisiBurukBerat 
                                        FROM data_inventory a, jenis_material b, jenis_barang c 
                                        WHERE a.id_jenismaterial = b.id_jenismaterial and a.id_jenisbarang = c.id_jenisbarang 
                                        and a.id_jenisbarang= '$id_jenisbarang'
                                        GROUP BY a.nama_barang, b.nama_jenismaterial, c.nama_jenisbarang 
                                        ORDER BY b.nama_jenismaterial ASC")->result();

            $data['inventory'] = $query3;


            $sumber = $this->load->view('laporan/Cetak',$data,TRUE);
            $html = $sumber;

            $pdfFilePath = "hasilreport.pdf";
            $pdf = $this->pdf->load();
            $pdf->AddPage('L');
            $pdf->WriteHTML($html);
            $pdf->Output($pdfFilePath, "D");
            exit();

        }
        elseif ($id_jenismaterial != "0" && $id_jenisbarang =="0" && !empty($nama_barang)){ //material dan nama barang

            $query5 = $this->db->query("SELECT b.nama_jenismaterial, c.nama_jenisbarang, a.nama_barang, COUNT(a.nama_barang) as jumlah, 
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_baik = '100%') as kondisiBaik, 
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_baik = '50%') as kondisiBaiks,
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_buruk = 'Rusak Ringan') as kondisiBurukRingan,
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_buruk = 'Rusak Sedang') as kondisiBurukSedang,
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_buruk = 'Rusak Berat') as kondisiBurukBerat 
                                        FROM data_inventory a, jenis_material b, jenis_barang c 
                                        WHERE a.id_jenismaterial = b.id_jenismaterial and a.id_jenisbarang = c.id_jenisbarang 
                                        and a.id_jenismaterial = '$id_jenismaterial' and a.nama_barang = '$nama_barang'
                                        GROUP BY a.nama_barang, b.nama_jenismaterial, c.nama_jenisbarang 
                                        ORDER BY b.nama_jenismaterial ASC")->result();
            $data['inventory'] = $query5;


            $sumber = $this->load->view('laporan/Cetak',$data,TRUE);
            $html = $sumber;

            $pdfFilePath = "hasilreport.pdf";
            $pdf = $this->pdf->load();
            $pdf->AddPage('L');
            $pdf->WriteHTML($html);
            $pdf->Output($pdfFilePath, "D");
            exit();
        }
        elseif ($id_jenismaterial == "0" && $id_jenisbarang =="0" && !empty($nama_barang)){ //hanya nama barang

            $query7 = $this->db->query("SELECT b.nama_jenismaterial, c.nama_jenisbarang, a.nama_barang, COUNT(a.nama_barang) as jumlah, 
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_baik = '100%') as kondisiBaik, 
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_baik = '50%') as kondisiBaiks,
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_buruk = 'Rusak Ringan') as kondisiBurukRingan,
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_buruk = 'Rusak Sedang') as kondisiBurukSedang,
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_buruk = 'Rusak Berat') as kondisiBurukBerat 
                                        FROM data_inventory a, jenis_material b, jenis_barang c 
                                        WHERE a.id_jenismaterial = b.id_jenismaterial and a.id_jenisbarang = c.id_jenisbarang 
                                        and a.nama_barang = '$nama_barang'
                                        GROUP BY a.nama_barang, b.nama_jenismaterial, c.nama_jenisbarang 
                                        ORDER BY b.nama_jenismaterial ASC")->result();
            $data['inventory'] = $query7;


            $sumber = $this->load->view('laporan/Cetak',$data,TRUE);
            $html = $sumber;

            $pdfFilePath = "hasilreport.pdf";
            $pdf = $this->pdf->load();
            $pdf->AddPage('L');
            $pdf->WriteHTML($html);
            $pdf->Output($pdfFilePath, "D");
            exit();
        }
        elseif ($id_jenismaterial != "0" && $id_jenisbarang !="0" && !empty($nama_barang)){ //jenis material , jenis barang dan nama barang

            $query9 = $this->db->query("SELECT b.nama_jenismaterial, c.nama_jenisbarang, a.nama_barang, COUNT(a.nama_barang) as jumlah, 
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_baik = '100%') as kondisiBaik, 
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_baik = '50%') as kondisiBaiks,
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_buruk = 'Rusak Ringan') as kondisiBurukRingan,
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_buruk = 'Rusak Sedang') as kondisiBurukSedang,
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_buruk = 'Rusak Berat') as kondisiBurukBerat 
                                        FROM data_inventory a, jenis_material b, jenis_barang c 
                                        WHERE a.id_jenismaterial = b.id_jenismaterial and a.id_jenisbarang = c.id_jenisbarang 
                                        and a.id_jenismaterial = '$id_jenismaterial' and a.id_jenisbarang = '$id_jenisbarang'
                                        and a.nama_barang = '$nama_barang'
                                        GROUP BY a.nama_barang, b.nama_jenismaterial, c.nama_jenisbarang 
                                        ORDER BY b.nama_jenismaterial ASC")->result();
            $data['inventory'] = $query9;

            $sumber = $this->load->view('laporan/Cetak',$data,TRUE);
            $html = $sumber;

            $pdfFilePath = "hasilreport.pdf";
            $pdf = $this->pdf->load();
            $pdf->AddPage('L');
            $pdf->WriteHTML($html);
            $pdf->Output($pdfFilePath, "D");
            exit();

        }
        elseif($id_jenismaterial == "0" && $id_jenisbarang =="0" && empty($nama_barang)){


            $query10 = $this->db->query("SELECT b.nama_jenismaterial, c.nama_jenisbarang, a.nama_barang, COUNT(a.nama_barang) as jumlah, 
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_baik = '100%') as kondisiBaik, 
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_baik = '50%') as kondisiBaiks,
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_buruk = 'Rusak Ringan') as kondisiBurukRingan,
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_buruk = 'Rusak Sedang') as kondisiBurukSedang,
                                        (SELECT COUNT(o.kondisi_baik) FROM data_inventory o WHERE a.nama_barang = o.nama_barang 
                                        and o.kondisi_buruk = 'Rusak Berat') as kondisiBurukBerat 
                                        FROM data_inventory a, jenis_material b, jenis_barang c 
                                        WHERE a.id_jenismaterial = b.id_jenismaterial and a.id_jenisbarang = c.id_jenisbarang 
                                        GROUP BY a.nama_barang, b.nama_jenismaterial, c.nama_jenisbarang 
                                        ORDER BY b.nama_jenismaterial ASC")->result();
            $data['inventory'] = $query10;

            $sumber = $this->load->view('laporan/Cetak',$data,TRUE);
            $html = $sumber;

            $pdfFilePath = "hasilreport.pdf";
            $pdf = $this->pdf->load();
            $pdf->AddPage('L');
            $pdf->WriteHTML($html);
            $pdf->Output($pdfFilePath, "D");
            exit();
        }
    }
}