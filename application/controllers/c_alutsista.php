<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class C_alutsista extends CI_Controller {

    public function __construct() {

        parent::__construct();

        session_start();



        if ($this->session->userdata('level') == null) {

            $this->session->set_flashdata('session_expired', TRUE);

            redirect('login');
        }



        $this->load->model('m_alutsista');

        $this->load->model('m_pesawat_ad');

        $this->load->model('m_ranpur_ad');

        $this->load->model('m_ranmor_ad');

        $this->load->model('m_senjata_pesawat_ad');

        $this->load->model('m_amunisi_pesawat_ad');

        $this->load->model('m_ranpur_al');

        $this->load->model('m_alutsista_al');
        $this->load->model('m_grafic');
    }

// +--------------------------------------------------------------------------------------------------------------------+
// |---------------------- SENJATA AD ------------------ SENJATA AD ---------------SENJATA AD --------------------------|
// +--------------------------------------------------------------------------------------------------------------------+

    public function senjata_ad() {

        $data['title'] = "Senjata TNI AD";

        $data['link_alutsista'] = 'class="start active open"';

        $data['link_open_alutsista'] = 'open';

        $data['link_aktif_alutsista_ad'] = 'class="active"';



        $data['list_senjata'] = $this->m_alutsista->list_senjata_ad();

        $data['kesatuan'] = $this->m_alutsista->list_kesatuan_ad();

        $data['jenis_senjata'] = $this->m_alutsista->list_jenis_senjataad();

        $data['fungsi_senjata'] = $this->m_alutsista->list_fungsi_senjataad();

        $data['barang_senjata'] = $this->m_alutsista->list_barang_senjataad();

        $data['link_aktif'] = 'class="start active open"';
        
        $this->template->load('den', 'alutsista/tni_ad/view_senjata_ad', $data);
    }

    public function form_senjata_ad() {

        $data['title'] = "Senjata TNI AD";

        $data['link_alutsista'] = 'class="start active open"';

        $data['link_open_alutsista'] = 'open';

        $data['link_aktif_alutsista_ad'] = 'class="active"';



        $data['kesatuan_tni_ad'] = $this->m_alutsista->kesatuan_ad();

        $data['jenis_barang_ad'] = $this->m_alutsista->jenis_barang_ad();

        $data['title'] = "Tambah Senjata";

//        $this->load->view('alutsista/tni_ad/form_senjata_ad', $data);
        $data['link_aktif'] = 'class="start active open"';
        $this->template->load('den', 'alutsista/tni_ad/form_senjata_ad', $data);
    }

    public function get_fungsi_ad($kd_jenis) {

        $kd_jenis = $this->uri->segment(3);

        $data['fungsi'] = $this->m_alutsista->get_fungsi_ad($kd_jenis);

        $this->load->view('alutsista/tni_ad/v_dropdown_fungsi', $data);
    }

    public function get_barang_ad($kd_fungsi) {

        $kd_fungsi = $this->uri->segment(3);

        $data['barang'] = $this->m_alutsista->get_barang_ad($kd_fungsi);

        $this->load->view('alutsista/tni_ad/v_dropdown_barang', $data);
    }

    public function tambah_senjata_ad() {

        if ($this->input->post('simpan')) {

            $this->m_alutsista->tambah_senjata_ad();

            $this->session->set_flashdata('tambah_sukses', TRUE);

            redirect('c_alutsista/senjata_ad', 'refresh');

            die();
        } elseif ($this->input->post('batal')) {

            redirect('c_alutsista/senjata_ad', 'refresh');
        }
    }

    public function hapus_senjata_ad($id_senjata) {

        $id_senjata = $this->uri->segment(3);

        $this->m_alutsista->hapussenjata_ad($id_senjata);

        $this->session->set_flashdata('hapus_sukses', TRUE);

        redirect('c_alutsista/senjata_ad', 'refresh');
    }

    public function edit_senjata_ad($id) {

        //style sidebar

        $data['title'] = "Senjata TNI AD";

        $data['link_alutsista'] = 'class="start active open"';

        $data['link_open_alutsista'] = 'open';

        $data['link_aktif_alutsista_ad'] = 'class="active"';


        $id = $this->uri->segment(3);


        //Data from model

        $data['kesatuan'] = $this->m_alutsista->kesatuan_ad();

        $data['jenis'] = $this->m_alutsista->list_jenis_senjataad();

        $data['fungsi'] = $this->m_alutsista->list_fungsi_senjataad();

        $data['barang'] = $this->m_alutsista->list_barang_senjataad();

        $data['senjata'] = $this->m_alutsista->edit_senjata_ad($id)->result();

        //Proses Update

        if ($this->input->post('update')) {

            $this->m_alutsista->proses_edit_senjata_ad($id);

            $this->session->set_flashdata('update_sukses', TRUE);

            redirect('c_alutsista/senjata_ad', 'refresh');
        } else if ($this->input->post('batal')) {

            redirect('c_alutsista/senjata_ad', 'refresh');
        }



//        $this->load->view('alutsista/tni_ad/edit_senjata_ad', $data);
        $data['link_aktif'] = 'class="start active open"';
        $this->template->load('den', 'alutsista/tni_ad/edit_senjata_ad', $data);
    }

//_______________________________________________________________________________________________________________________
//+----------------------------------------------------------------------------------------------------------------------+
//|----------------- KAPAL AD -------------------- KAPAL AD ------------------------KAPAL AD-----------------------------|
//+----------------------------------------------------------------------------------------------------------------------+



    public function kapal_ad() {


        $data['title'] = "Kapal TNI AD";

        $data['link_alutsista'] = 'class="start active open"';

        $data['link_open_alutsista'] = 'open';

        $data['link_aktif_alutsista_ad'] = 'class="active"';


        $data['list_kapal'] = $this->m_alutsista->list_kapal_ad();

        $data['kesatuan'] = $this->m_alutsista->list_kesatuan_ad();

        $data['jenis_kapal'] = $this->m_alutsista->list_jenis_kapalad();

        $data['fungsi_kapal'] = $this->m_alutsista->list_fungsi_kapalad();

        $data['barang_kapal'] = $this->m_alutsista->list_barang_kapalad();

        $data['title'] = "Kapal TNI AD";

//        $this->load->view('alutsista/tni_ad/view_kapal_ad', $data);
        $data['link_aktif'] = 'class="start active open"';
        $this->template->load('den', 'alutsista/tni_ad/view_kapal_ad', $data);
    }

    public function form_kapal_ad() {


        $data['title'] = "Kapal TNI AD";

        $data['link_alutsista'] = 'class="start active open"';

        $data['link_open_alutsista'] = 'open';

        $data['link_aktif_alutsista_ad'] = 'class="active"';


        $data['kesatuan_tni_ad'] = $this->m_alutsista->kesatuan_ad();

        $data['jenis_barang_kapalad'] = $this->m_alutsista->jenis_barang_kapalad();

        $data['title'] = "Tambah Kapal";

//        $this->load->view('alutsista/tni_ad/form_kapal_ad', $data);
        $data['link_aktif'] = 'class="start active open"';
        $this->template->load('den', 'alutsista/tni_ad/form_kapal_ad', $data);
    }

    public function tambah_kapal_ad() {

        if ($this->input->post('simpan')) {

            $this->m_alutsista->tambah_kapal_ad();

            $this->session->set_flashdata('tambah_sukses', TRUE);

            redirect('c_alutsista/kapal_ad', 'refresh');

            die();
        } elseif ($this->input->post('batal')) {

            redirect('c_alutsista/kapal_ad', 'refresh');
        }
    }

    public function hapus_kapal_ad($id_kapal) {

        $id_kapal = $this->uri->segment(3);

        $this->m_alutsista->hapuskapal_ad($id_kapal);

        $this->session->set_flashdata('hapus_sukses', TRUE);

        redirect('c_alutsista/kapal_ad', 'refresh');
    }

    public function edit_kapal_ad($id) {

        $data['title'] = "Kapal TNI AD";

        $data['link_alutsista'] = 'class="start active open"';

        $data['link_open_alutsista'] = 'open';

        $data['link_aktif_alutsista_ad'] = 'class="active"';



        $id = $this->uri->segment(3);



        //Data from model

        $data['kesatuan'] = $this->m_alutsista->kesatuan_ad();

        $data['jenis'] = $this->m_alutsista->list_jenis_kapalad();

        $data['fungsi'] = $this->m_alutsista->list_fungsi_kapalad();

        $data['barang'] = $this->m_alutsista->list_barang_kapalad();

        $data['kapal'] = $this->m_alutsista->edit_kapal_ad($id)->result();



        //Proses Update

        if ($this->input->post('update')) {

            $this->m_alutsista->proses_edit_kapal_ad($id);

            $this->session->set_flashdata('update_sukses', TRUE);

            redirect('c_alutsista/kapal_ad', 'refresh');
        } else if ($this->input->post('batal')) {

            redirect('c_alutsista/kapal_ad', 'refresh');
        }



//        $this->load->view('alutsista/tni_ad/edit_kapal_ad', $data);
        $data['link_aktif'] = 'class="start active open"';
        $this->template->load('den', 'alutsista/tni_ad/edit_kapal_ad', $data);
    }

// _____________________________________________________________________________________________________________________
// +--------------------------------------------------------------------------------------------------------------------+
// |----------------------- AMUNISI AD ----------------- AMUNISI AD ------------------ AMUNISI AD ----------------------|
// +--------------------------------------------------------------------------------------------------------------------+

    public function amunisi_ad() {

        $data['title'] = "Amunisi TNI AD";
        $data['link_alutsista'] = 'class="start active open"';
        $data['link_open_alutsista'] = 'open';
        $data['link_aktif_alutsista_ad'] = 'class="active"';

        //Data from model
        $data['jenis'] = $this->m_alutsista->jenis_amunisi_ad();
        $data['kesatuan'] = $this->m_alutsista->kesatuan_ad();
        $data['fungsi'] = $this->m_alutsista->fungsi_ad();
        $data['barang'] = $this->m_alutsista->barang_ad();
        $data['amunisi_ad'] = $this->m_alutsista->amunisi_ad();

//        $this->load->view('alutsista/tni_ad/amunisi_ad/amunisi_ad', $data);
        $data['link_aktif'] = 'class="start active open"';
        $this->template->load('den', 'alutsista/tni_ad/amunisi_ad/amunisi_ad', $data);
    }

    public function tambah_amunisi_ad() {

        $data['title'] = "Amunisi TNI AD";
        $data['link_alutsista'] = 'class="start active open"';
        $data['link_open_alutsista'] = 'open';
        $data['link_aktif_alutsista_ad'] = 'class="active"';

        //Data from model
        $data['kesatuan'] = $this->m_alutsista->kesatuan_ad();
        $data['jenis'] = $this->m_alutsista->jenis_amunisi_ad();
        $data['senjata'] = $this->m_alutsista->jenis_senjata1_ad();

        //simpan
        if ($this->input->post('simpan')) {
            $this->m_alutsista->tambah_amunisi_ad();
            $id = $this->db->insert_id();
            //Fasilitas
            $jenis_senjata = $this->input->post('JENIS_SENJATA');
//            print_r($fasilitas_id);
            $jumlah_pucuk = $this->input->post('JUMLAH_PUCUK');
            $bp_pucuk = $this->input->post('BP_PUCUK');
            $persediaan_satuan = $this->input->post('PERSEDIAAN_SATUAN');
            $persediaan_daerah = $this->input->post('PERSEDIAAN_DAERAH');
            $persediaan_pusat = $this->input->post('PERSEDIAAN_PUSAT');
//            $insert_date = $this->input->post('INSERT_DATE');
            //	print_r($persediaan_satuan);
            //	print_r($insert_date);die();

            foreach ($jenis_senjata as $key => $value) {
                $this->db->query('insert into amunisi_ad (id_dump_amunisi_ad,jenis_senjata,jml_barang,bp_barang,persediaan_satuan,persediaan_daerah,persediaan_pusat) values (\'' . $id . '\',\'' . $jenis_senjata[$key] . '\',\'' . $jumlah_pucuk[$key] . '\',\'' . $bp_pucuk[$key] . '\',\'' . $persediaan_satuan[$key] . '\',\'' . $persediaan_daerah[$key] . '\',\'' . $persediaan_pusat[$key] . '\')');
                //  echo 'insert into amunisi_al (id_dump_amunisi_al,jenis_senjata,jml_barang,bp_barang,arsenal_siap,arsenal_tdk_siap,satkai_siap,satkai_tdk_siap,insert_date) values (\'' . $id . '\',\'' . $jenis_senjata[$key] . '\',\'' . $jumlah_pucuk[$key] . '\',\'' . $bp_pucuk[$key] . '\',\'' . $arsenal_siap[$key] . '\',\'' . $arsenal_tdk_siap[$key] . '\',\'' . $satkai_siap[$key] . '\',\'' . $satkai_tdk_siap[$key] . '\',\'' . $insert_date . '\')'; die();
            }
            $this->session->set_flashdata('tambah_sukses', TRUE);
            redirect('c_alutsista/amunisi_ad', 'refresh');
        } else if ($this->input->post('batal')) {
            redirect('c_alutsista/amunisi_ad', 'refresh');
        }

//        $this->load->view('alutsista/tni_ad/amunisi_ad/tambah_amunisi_ad', $data);
        $data['link_aktif'] = 'class="start active open"';
        $this->template->load('den', 'alutsista/tni_ad/amunisi_ad/tambah_amunisi_ad', $data);
    }

    public function edit_amunisi_ad($id) {

        $data['title'] = "Amunisi TNI AD";
        $data['link_alutsista'] = 'class="start active open"';
        $data['link_open_alutsista'] = 'open';
        $data['link_aktif_alutsista_ad'] = 'class="active"';

        $id = $this->uri->segment(3);
        //Data from model
        $data['kesatuan'] = $this->m_alutsista->kesatuan_ad();
        $data['jenis'] = $this->m_alutsista->jenis_amunisi_ad();
        $data['fungsi'] = $this->m_alutsista->fungsi_ad();
        $data['barang'] = $this->m_alutsista->barang_ad();
        $data['senjata'] = $this->m_alutsista->jenis_senjata1_ad();
        $data['amunisi'] = $this->m_alutsista->edit_amunisi_ad($id)->result();


        $id = $this->uri->segment(3);
        $data['detail_amunisi_ad'] = $this->db->query('select * from amunisi_ad where id_dump_amunisi_ad = ' . $id . '')->result();
        $this->load->view('alutsista/tni_ad/amunisi_ad/edit_amunisi_ad', $data);
    }

    public function proses_edit_amunisi_ad() {

        $id = $this->uri->segment(3);
        //Proses Update
        if ($this->input->post('update')) {
            $this->m_alutsista->proses_edit_amunisi_ad($id);
            //amunisi_detail
            $jenis_senjata = $this->input->post('JENIS_SENJATA');
//            print_r($fasilitas_id);
            $jumlah_pucuk = $this->input->post('JUMLAH_PUCUK');
            $bp_pucuk = $this->input->post('BP_PUCUK');
            $persediaan_satuan = $this->input->post('PERSEDIAAN_SATUAN');
            $persediaan_daerah = $this->input->post('PERSEDIAAN_DAERAH');
            $persediaan_pusat = $this->input->post('PERSEDIAAN_PUSAT');

            //delete_detail
            $this->db->where('id_dump_amunisi_ad', $id);
            $this->db->delete('amunisi_ad');
            //insert_detail
            foreach ($jenis_senjata as $key => $value) {
                $this->db->query('insert into amunisi_ad (id_dump_amunisi_ad,jenis_senjata,jml_barang,bp_barang,persediaan_satuan,persediaan_daerah,persediaan_pusat) values (\'' . $id . '\',\'' . $jenis_senjata[$key] . '\',\'' . $jumlah_pucuk[$key] . '\',\'' . $bp_pucuk[$key] . '\',\'' . $persediaan_satuan[$key] . '\',\'' . $persediaan_daerah[$key] . '\',\'' . $persediaan_pusat[$key] . '\')');
                // echo 'insert into amunisi_au (id_dump_amunisi_au,jenis_senjata,jml_barang,bp_barang,persediaan_pusat,persediaan_satuan,insert_date) values (\'' . $id . '\',\'' . $jenis_senjata[$key] . '\',\'' . $jumlah_pucuk[$key] . '\',\'' . $bp_pucuk[$key] . '\',\'' . $persediaan_pusat[$key] . '\',\'' . $persediaan_satuan[$key] . '\',\'' . $insert_date . '\')'; die();
            }
            $this->session->set_flashdata('update_sukses', TRUE);
            redirect('c_alutsista/amunisi_ad', 'refresh');
        } else if ($this->input->post('batal')) {
            redirect('c_alutsista/amunisi_ad', 'refresh');
        }
    }

    public function hapus_amunisi_ad($id) {
        $id = $this->uri->segment(3);
        $this->m_alutsista->hapus_amunisi_ad($id);
        $this->session->set_flashdata('hapus_sukses', TRUE);
        redirect('c_alutsista/amunisi_ad', 'refresh');
    }

    //CETAK AMUNISI AD

    public function laporan_amunisi_ad() {
        //style sidebar
        $data['link_open_laporan'] = 'open';
        $data['link_open_laporan_ad'] = 'open';
        $data['link_aktif_laporan_ad'] = 'class="active"';
        $data['link_laporan'] = 'class="start active open"';

        //Title
        $data['title'] = " Laporan Amunisi TNI AD";

        //Data from model
        $data['jenis'] = $this->m_alutsista->jenis_amunisi_ad();
        $data['kesatuan'] = $this->m_alutsista->kesatuan_ad();
        $data['fungsi'] = $this->m_alutsista->fungsi_ad();
        $data['barang'] = $this->m_alutsista->barang_ad();
        $data['jenis_amunisi'] = $this->m_alutsista->list_jenis_amunisiad();
        $data['tahun'] = $this->m_grafic->tahun_amunisiad();
        
        //Call back
        $data['fields']['kesatuan_cari'] = $this->input->post('kesatuan');
        $data['fields']['jenis_cari'] = $this->input->post('jenis');
        $data['fields']['fungsi_cari'] = $this->input->post('fungsi');
        $data['fields']['barang_cari'] = $this->input->post('barang');
        $data['fields']['tahun_cari'] = $this->input->post('tahun');
        
        
        //Filter
         if (!empty($_POST['kesatuan'])) {
            $kesat = 'WHERE id_kesatuan=' . $_POST['kesatuan'] . '';
        } else {
            $kesat = "WHERE id_kesatuan like '%'";
        }

        if (!empty($_POST['jenis'])) {
            $jns = ' AND id_jenis=' . $_POST['jenis'] . '';
        } else {
            $jns = " AND id_jenis like '%'";
        }

        if (!empty($_POST['fungsi'])) {
            $fungsi = ' AND id_fungsi=' . $_POST['fungsi'] . '';
        } else {
            $fungsi = " AND id_fungsi like '%'";
        }

        if (!empty($_POST['barang'])) {
            $brg = ' AND id_barang=' . $_POST['barang'] . '';
        } else {
            $brg = " AND id_barang like '%'";
        }
        
        if (!empty($_POST['tahun'])) {
            $tahun = ' AND YEAR(insert_date)=' . $_POST['tahun'] . '';
        } else {
            $tahun = " AND YEAR(insert_date) like '%'";
        }
        
        $where = $kesat . $jns . $fungsi . $brg . $tahun;
//        var_dump($where);die();
        
        $data['list_amunisi'] = $this->m_alutsista->list_amunisi_ad_filter($where);

//        $this->load->view('alutsista/tni_ad/amunisi_ad/laporan_amunisi_ad', $data);
        $data['link_aktif'] = 'class="start active open"';
        $this->template->load('den', 'alutsista/tni_ad/amunisi_ad/laporan_amunisi_ad', $data);
    }

    public function cetak_amunisi_ad() {
        //tittle
        $data['tittle'] = "Cetak Pesawat ad";
        //Data From Model

        $query = $this->db->query("SELECT 
					a.*,
					a.id as idamunisi,
					b.*,
					c.*,
					d.*,
					e.*
				FROM 
					amunisi_dump_ad a,
					kesatuan b,
					jenis_barang c,
					fungsi_barang d,
					barang e
					
				WHERE
					a.id_kesatuan=b.id and
					a.id_jenis=c.id and
					a.id_fungsi=d.id and
					a.id_barang=e.id
					
					
					")->result();
        $data['model'] = $query;
        $query3 = $this->db->query("SELECT 
					a.*,
					a.id as idamunisi,
					b.*,
					c.*,
					d.*
				FROM 
					amunisi_dump_ad a,
					kesatuan b,
					jenis_barang c,
					fungsi_barang d
					
				WHERE
					a.id_kesatuan=b.id and
					a.id_jenis=c.id and
					a.id_fungsi=d.id 
					
					
					")->result();
        $data['kesatuan'] = $query3;
        $query2 = $this->db->query("SELECT a . * ,a.keterangan as keter, b . * , c . *
									FROM amunisi_ad a, amunisi_dump_ad b, barang c
									WHERE a.id_dump_amunisi_ad = b.id
											AND a.jenis_senjata = c.id
					
					
					")->result();
        $data['detail'] = $query2;
        $this->load->view('cetak_tniad/munisi/cetak', $data);
    }

// ______________________________________________________________________________________________________________________
// +--------------------------------------------------------------------------------------------------------------------+
// |---------------------- ALPALSUS AD ------------------ ALPALSUS AD --------------- ALPALSUS AD ----------------------|
// +--------------------------------------------------------------------------------------------------------------------+





    public function alpalsus_ad() {


        $data['title'] = "Alpalsus TNI AD";

        $data['link_alutsista'] = 'class="start active open"';

        $data['link_open_alutsista'] = 'open';

        $data['link_aktif_alutsista_ad'] = 'class="active"';


        $data['list_alpalsus'] = $this->m_alutsista->list_alpalsus_ad();

        $data['kesatuan'] = $this->m_alutsista->list_kesatuan_ad();

        $data['jenis_alpalsus'] = $this->m_alutsista->list_jenis_alpalsusad();

        $data['fungsi_alpalsus'] = $this->m_alutsista->list_fungsi_alpalsusad();

        $data['barang_alpalsus'] = $this->m_alutsista->list_barang_alpalsusad();

        $data['title'] = "Alpalsus TNI AD";

//        $this->load->view('alutsista/tni_ad/view_alpalsus_ad', $data);
        $data['link_aktif'] = 'class="start active open"';
        $this->template->load('den', 'alutsista/tni_ad/view_alpalsus_ad', $data);
    }

    public function form_alpalsus_ad() {


        $data['title'] = "Alpalsus TNI AD";

        $data['link_alutsista'] = 'class="start active open"';

        $data['link_open_alutsista'] = 'open';

        $data['link_aktif_alutsista_ad'] = 'class="active"';


        $data['kesatuan_tni_ad'] = $this->m_alutsista->kesatuan_ad();

        $data['jenis_barang_alpalsusad'] = $this->m_alutsista->jenis_barang_alpalsusad();

        $data['title'] = "Tambah Alpalsus";

//        $this->load->view('alutsista/tni_ad/form_alpalsus_ad', $data);
        $data['link_aktif'] = 'class="start active open"';
        $this->template->load('den', 'alutsista/tni_ad/form_alpalsus_ad', $data);
    }

    public function tambah_alpalsus_ad() {

//        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
//        $this->form_validation->set_message('required', '%s Harus Diisi.');
//        $this->form_validation->set_rules('tgl', 'Tanggal Input', 'trim|required|xss_clean');
//        if ($this->form_validation->run() == FALSE) {
        $data['title'] = "Alpalsus TNI AD";
        $data['link_alutsista'] = 'class="start active open"';
        $data['link_open_alutsista'] = 'open';
        $data['link_aktif_alutsista_ad'] = 'class="active"';
        $data['kesatuan_tni_ad'] = $this->m_alutsista->kesatuan_ad();
        $data['jenis_barang_alpalsusad'] = $this->m_alutsista->jenis_barang_alpalsusad();
        $data['title'] = "Tambah Alpalsus";
        $data['link_aktif'] = 'class="start active open"';
        if ($this->input->post('batal')) {
            redirect('c_alutsista/alpalsus_ad', 'refresh');
        }

        $this->template->load('den', 'alutsista/tni_ad/form_alpalsus_ad', $data);
//        } else {
        if ($this->input->post('simpan')) {

            $this->m_alutsista->tambah_alpalsus_ad();

            $this->session->set_flashdata('tambah_sukses', TRUE);

            redirect('c_alutsista/alpalsus_ad', 'refresh');

            die();
        } elseif ($this->input->post('batal')) {

            redirect('c_alutsista/alpalsus_ad', 'refresh');
        }
//        }
    }

    public function hapus_alpalsus_ad($id_alpalsus) {

        $id_alpalsus = $this->uri->segment(3);

        $this->m_alutsista->hapusalpalsus_ad($id_alpalsus);

        $this->session->set_flashdata('hapus_sukses', TRUE);

        redirect('c_alutsista/alpalsus_ad', 'refresh');
    }

    public function edit_alpalsus_ad($id) {

        $data['title'] = "Alpalsus TNI AD";

        $data['link_alutsista'] = 'class="start active open"';

        $data['link_open_alutsista'] = 'open';

        $data['link_aktif_alutsista_ad'] = 'class="active"';


        $id = $this->uri->segment(3);



        //Data from model

        $data['kesatuan'] = $this->m_alutsista->kesatuan_ad();

        $data['jenis'] = $this->m_alutsista->list_jenis_alpalsusad();

        $data['fungsi'] = $this->m_alutsista->list_fungsi_alpalsusad();

        $data['barang'] = $this->m_alutsista->list_barang_alpalsusad();

        $data['alpalsus'] = $this->m_alutsista->edit_alpalsus_ad($id)->result();

        //Proses Update

        if ($this->input->post('update')) {

            $this->m_alutsista->proses_edit_alpalsus_ad($id);

            $this->session->set_flashdata('update_sukses', TRUE);

            redirect('c_alutsista/alpalsus_ad', 'refresh');
        } else if ($this->input->post('batal')) {

            redirect('c_alutsista/alpalsus_ad', 'refresh');
        }



//        $this->load->view('alutsista/tni_ad/edit_alpalsus_ad', $data);
        $data['link_aktif'] = 'class="start active open"';
        $this->template->load('den', 'alutsista/tni_ad/edit_alpalsus_ad', $data);
    }

//_______________________________________________________________________________________________________________________
// ______________________________________________________________________________________________________________________
// +--------------------------------------------------------------------------------------------------------------------+
// |---------------------- ALOPTIK AD ------------------ ALOPTIK AD ------------------ ALOPTIK AD ----------------------|
// +--------------------------------------------------------------------------------------------------------------------+

    public function aloptik_ad() {


        $data['title'] = "Aloptik TNI AD";

        $data['link_alutsista'] = 'class="start active open"';

        $data['link_open_alutsista'] = 'open';

        $data['link_aktif_alutsista_ad'] = 'class="active"';


        $data['list_aloptik'] = $this->m_alutsista->list_aloptik_ad();

        $data['kesatuan'] = $this->m_alutsista->list_kesatuan_ad();

        $data['jenis_aloptik'] = $this->m_alutsista->list_jenis_aloptikad();

        $data['fungsi_aloptik'] = $this->m_alutsista->list_fungsi_aloptikad();

        $data['barang_aloptik'] = $this->m_alutsista->list_barang_aloptikad();

        $data['title'] = "Aloptik TNI AD";

//        $this->load->view('alutsista/tni_ad/view_aloptik_ad', $data);
        $data['link_aktif'] = 'class="start active open"';
        $this->template->load('den', 'alutsista/tni_ad/view_aloptik_ad', $data);
    }

    public function form_aloptik_ad() {


        $data['title'] = "Aloptik TNI AD";

        $data['link_alutsista'] = 'class="start active open"';

        $data['link_open_alutsista'] = 'open';

        $data['link_aktif_alutsista_ad'] = 'class="active"';


        $data['kesatuan_tni_ad'] = $this->m_alutsista->kesatuan_ad();

        $data['jenis_barang_aloptikad'] = $this->m_alutsista->jenis_barang_aloptikad();

        $data['title'] = "Tambah Aloptik";

//        $this->load->view('alutsista/tni_ad/form_aloptik_ad', $data);
        $data['link_aktif'] = 'class="start active open"';
        $this->template->load('den', 'alutsista/tni_ad/form_aloptik_ad', $data);
    }

    public function tambah_aloptik_ad() {

        if ($this->input->post('simpan')) {

            $this->m_alutsista->tambah_aloptik_ad();

            $this->session->set_flashdata('tambah_sukses', TRUE);

            redirect('c_alutsista/aloptik_ad', 'refresh');

            die();
        } elseif ($this->input->post('batal')) {

            redirect('c_alutsista/aloptik_ad', 'refresh');
        }
    }

    public function hapus_aloptik_ad($id_aloptik) {

        $id_aloptik = $this->uri->segment(3);

        $this->m_alutsista->hapusaloptik_ad($id_aloptik);

        $this->session->set_flashdata('hapus_sukses', TRUE);

        redirect('c_alutsista/aloptik_ad', 'refresh');
    }

    public function edit_aloptik_ad($id) {

        $data['title'] = "Aloptik TNI AD";

        $data['link_alutsista'] = 'class="start active open"';

        $data['link_open_alutsista'] = 'open';

        $data['link_aktif_alutsista_ad'] = 'class="active"';



        $id = $this->uri->segment(3);



        //Data from model

        $data['kesatuan'] = $this->m_alutsista->kesatuan_ad();

        $data['jenis'] = $this->m_alutsista->list_jenis_aloptikad();

        $data['fungsi'] = $this->m_alutsista->list_fungsi_aloptikad();

        $data['barang'] = $this->m_alutsista->list_barang_aloptikad();

        $data['aloptik'] = $this->m_alutsista->edit_aloptik_ad($id)->result();



        //Proses Update

        if ($this->input->post('update')) {

            $this->m_alutsista->proses_edit_aloptik_ad($id);

            $this->session->set_flashdata('update_sukses', TRUE);

            redirect('c_alutsista/aloptik_ad', 'refresh');
        } else if ($this->input->post('batal')) {

            redirect('c_alutsista/aloptik_ad', 'refresh');
        }



//        $this->load->view('alutsista/tni_ad/edit_aloptik_ad', $data);
        $data['link_aktif'] = 'class="start active open"';
        $this->template->load('den', 'alutsista/tni_ad/edit_aloptik_ad', $data);
    }

    //============== FUNGSI BWT AP??? ===============//

    public function tni_ad() {

        $data['title'] = "TNI AD";



        $data['link_open_alutsista'] = 'open';

        $data['link_aktif_ad'] = 'class="active open"';

        $data['link_alutsista'] = 'class="start active open"';

        $data['link_open_alutsista_ad'] = 'class="start active open"';





        $data['data_pesawat_ad'] = $this->db->query("select * from pesawat_ad")->result();

        $data['data_senjata_pesawat_ad'] = $this->db->query("select * from senjata_pesawat_ad")->result();

        $data['data_ranpur_ad'] = $this->db->query("select * from ranpur_ad")->result();

        $data['data_amunisi_pesawat_ad'] = $this->db->query("select * from amunisi_pesawat_ad")->result();

        $data['data_ranmor_ad'] = $this->db->query("select * from ranmor_ad")->result();

//        $this->load->view('alutsista/tni_ad/view_tni_ad', $data);
        $data['link_aktif'] = 'class="start active open"';
        $this->template->load('den', 'alutsista/tni_ad/view_tni_ad', $data);
    }

//_______________________________________________________________________________________________________________________
//+----------------------------------------------------------------------------------------------------------------------+
//|----------------- PESAWAT AD -------------------- PESAWAT AD ------------------------PESAWAT AD-----------------------------|
//+----------------------------------------------------------------------------------------------------------------------+


    public function view_pesawat_ad() {



        $data['title'] = "Pesawat TNI AD";



        $data['link_alutsista'] = 'class="start active open"';

        $data['link_open_alutsista'] = 'open';

        $data['link_aktif_alutsista_ad'] = 'class="active"';



        $data['data_pesawat_ad'] = $this->m_pesawat_ad->data_pesawat_ad();

//        $this->load->view('alutsista/tni_ad/view_pesawat_ad', $data);
        $data['link_aktif'] = 'class="start active open"';
        $this->template->load('den', 'alutsista/tni_ad/view_pesawat_ad', $data);
    }

    public function tambah_pesawat_ad() {

        $data['title'] = "Pesawat TNI AD";



        $data['link_alutsista'] = 'class="start active open"';

        $data['link_open_alutsista'] = 'open';

        $data['link_aktif_alutsista_ad'] = 'class="active"';



        $query = $this->db->query("SELECT 

					*

				FROM 

					kesatuan

				WHERE

					idinduk='2'")->result();

        $data['kesatuan'] = $query;



        $querys = $this->db->query("SELECT 

					*

				FROM 

					jenis_barang where idkomoditi='3'")->result();

        $data['jenis'] = $querys;





//        $this->load->view('alutsista/tni_ad/form_tambah_pesawat', $data);
        $data['link_aktif'] = 'class="start active open"';
        $this->template->load('den', 'alutsista/tni_ad/form_tambah_pesawat', $data);
    }

    public function fungsi_ad($jenis = '') {

        $query = $this->db->query("SELECT 

                    *

                FROM 

                    fungsi_barang

                WHERE

                    idjenis='$jenis'")->result();

        $data['fungsi'] = $query;

        $this->load->view('alutsista/tni_ad/fungsi', $data);
    }

    public function barang_ad($fungsi = '') {

        $doffy = $this->db->query("SELECT 

                    *

                FROM 

                    barang

                WHERE

                    idfungsi='$fungsi'")->result();

        $data['barang'] = $doffy;

        $this->load->view('alutsista/tni_ad/barang', $data);
    }

    public function simpan_tambah_pesawat_ad() {

        $this->db->query("insert into pesawat_ad(kesatuan,jenis_barang,fungsi,barang,serial,lokasi,kondisi_op,jml_op,kondisi_non_op,jml_non_op,ket,tgl_input) values('" . $_POST['kesatuan'] . "','" . $_POST['jenis'] . "','" . $_POST['fungsi'] . "','" . $_POST['barang'] . "','" . $_POST['serial'] . "','" . $_POST['lokasi'] . "','" . $_POST['op'] . "','" . $_POST['jml_op'] . "','" . $_POST['nop'] . "','" . $_POST['jml_nop'] . "','" . $_POST['keterangan'] . "','" . $this->convertdate->convert_string_to_date($this->input->post('tgl')) . "')");

        //$data = array("kesatuan"=>$_POST['kesatuan']);
        //$this->db->insert('pesawat_ad',$data);



        $this->session->set_flashdata('tambah_sukses', TRUE);

        redirect('c_alutsista/view_pesawat_ad', 'refresh');
    }

    public function edit_pesawat_ad($id) {



        $data['title'] = "Pesawat TNI AD";



        $data['link_alutsista'] = 'class="start active open"';

        $data['link_open_alutsista'] = 'open';

        $data['link_aktif_alutsista_ad'] = 'class="active"';



        $id = $this->uri->segment(3);



        //Data from model

        $data['pesawat_ad'] = $this->m_pesawat_ad->edit_pesawat_ad($id);

        $data['kesatuan'] = $this->m_pesawat_ad->kesatuan_ad();

        $data['jenis'] = $this->m_pesawat_ad->jenis_pesawat_ad();



        foreach ($data['pesawat_ad'] as $hasil) {

            $jenis_barang = $hasil->jenis_barang;

            $fungsi_barang = $hasil->fungsi;
        }



        $query = $this->db->query("

				SELECT 

                    *

                FROM 

                    fungsi_barang

                WHERE

                    idjenis='$jenis_barang'

		")->result();

        $data['fungsi3'] = $query;



        $query = $this->db->query("

				SELECT 

                    *

                FROM 

                    barang

                WHERE

                    idfungsi='$fungsi_barang'

		")->result();

        $data['barang3'] = $query;



        //update

        if ($this->input->post('SIMPAN')) {

            $this->m_pesawat_ad->update_pesawat_ad($id);

            $this->session->set_flashdata('update_sukses', TRUE);

            redirect('c_alutsista/view_pesawat_ad', 'refresh');
        } else if ($this->input->post('BATAL')) {

            redirect('c_alutsista/view_pesawat_ad', 'refresh');
        }



        $this->load->view('alutsista/tni_ad/form_edit_pesawat', $data);
    }

    public function delete_pesawat_ad($id) {



        $id = $this->uri->segment(3);

        $this->m_pesawat_ad->delete_pesawat_ad($id);

        $this->session->set_flashdata('hapus_sukses', TRUE);

        redirect('c_alutsista/view_pesawat_ad', 'refresh');
    }

    //Cetak Pesawat TNI AD
    /* public function cetak_pesawat_ad(){
      //phpinfo();die();

      $data['title'] = "Pesawat TNI AD";



      $data['link_laporan'] = 'class="start active open"';

      $data['link_open_laporan'] = 'open';

      $data['link_aktif_laporan_ad'] = 'class="active"';

      $data['data_pesawat_ad'] = $this->m_pesawat_ad->data_pesawat_ad();



      $this->load->view('cetak_tniad/pesawat/index',$data);

      //$this->load->view('cetak_tniad/pesawat/cetak_pesawat_ad',$data);
      }

      public function cetak_pesawat_ad2(){

      $data['title'] = "Pesawat TNI AD";

      $query = $this->db->query("
      SELECT
     *
      FROM
      kesatuan
      WHERE
      idinduk='2'")->result();
      $data['kesatuan']=$query;

      $querys = $this->db->query("
      SELECT
     *
      FROM
      jenis_barang where idkomoditi='3'")->result();
      $data['jenis']=$querys;
      $query = $this->db->query("SELECT
     *
      FROM
      fungsi_barang")->result();
      $data['fungsi'] = $query;
      $doffy = $this->db->query("SELECT
     *
      FROM
      barang")->result();
      $data['barang'] = $doffy;
      $datane = $this->db->query("SELECT
     *
      FROM
      pesawat_ad")->result();
      $data['datane'] = $datane;

      $grup = $this->db->query("SELECT
      count(jenis_barang) as jumlah_digrup,jenis_barang
      FROM
      pesawat_ad group by jenis_barang")->result();
      $data['grup'] = $grup;

      $this->load->view('cetak_tniad/pesawat/cetak_pesawat_ad',$data);

      }
     */


//_______________________________________________________________________________________________________________________
//+----------------------------------------------------------------------------------------------------------------------+
//|----------------- RANPUR AD -------------------- RANPUR AD ------------------------RANPUR AD-----------------------------|
//+----------------------------------------------------------------------------------------------------------------------+





    public function view_ranpur_ad() {

        $data['title'] = "Ranpur TNI AD";



        $data['link_alutsista'] = 'class="start active open"';

        $data['link_open_alutsista'] = 'open';

        $data['link_aktif_alutsista_ad'] = 'class="active"';



        $data['data_ranpur_ad'] = $this->m_ranpur_ad->data_ranpur_ad();

        $this->load->view('alutsista/tni_ad/view_ranpur_ad', $data);
    }

    public function tambah_ranpur_ad() {



        $data['title'] = "Ranpur TNI AD";

        $data['link_alutsista'] = 'class="start active open"';

        $data['link_open_alutsista'] = 'open';

        $data['link_aktif_alutsista_ad'] = 'class="active"';



        $query = $this->db->query("SELECT 

					*

				FROM 

					kesatuan

				WHERE

					idinduk='2'")->result();

        $data['kesatuan'] = $query;

        $querys = $this->db->query("SELECT 

					*

				FROM 

					jenis_barang where idkomoditi='5'")->result();

        $data['jenis'] = $querys;

        $queryf = $this->db->query("SELECT 

					*

				FROM 

					fungsi_barang")->result();

        $data['fungsi'] = $queryf;

        $this->load->view('alutsista/tni_ad/form_tambah_ranpur', $data);
    }

    public function simpan_tambah_ranpur_ad() {

        $this->db->query("insert into ranpur_ad(kesatuan,jenis_barang,fungsi,barang,lokasi,s_op,ts_op,kons_nop,rb_nop,tl_nop,ket,tgl_input) values('" . $_POST['kesatuan'] . "','" . $_POST['jenis'] . "','" . $_POST['fungsi'] . "','" . $_POST['barang'] . "','" . $_POST['lokasi'] . "','" . $_POST['s'] . "','" . $_POST['ts'] . "','" . $_POST['kons'] . "','" . $_POST['rb'] . "','" . $_POST['tl'] . "','" . $_POST['keterangan'] . "','" . $this->convertdate->convert_string_to_date($this->input->post('tgl')) . "')");



        $this->session->set_flashdata('tambah_sukses', TRUE);

        redirect('c_alutsista/view_ranpur_ad', 'refresh');
    }

    public function edit_ranpur_ad($id) {



        $data['title'] = "Ranpur TNI AD";

        $data['link_alutsista'] = 'class="start active open"';

        $data['link_open_alutsista'] = 'open';

        $data['link_aktif_alutsista_ad'] = 'class="active"';





        $id = $this->uri->segment(3);



        //Data from model

        $data['ranpur_ad'] = $this->m_ranpur_ad->edit_ranpur_ad($id);

        $data['kesatuan'] = $this->m_ranpur_ad->kesatuan_ad();

        $data['jenis'] = $this->m_ranpur_ad->jenis_ranpur_ad();



        foreach ($data['ranpur_ad'] as $hasil) {

            $jenis_barang = $hasil->jenis_barang;

            $fungsi_barang = $hasil->fungsi;
        }



        $query = $this->db->query("

				SELECT 

                    *

                FROM 

                    fungsi_barang

                WHERE

                    idjenis='$jenis_barang'

		")->result();

        $data['fungsi3'] = $query;



        $query = $this->db->query("

				SELECT 

                    *

                FROM 

                    barang

                WHERE

                    idfungsi='$fungsi_barang'

		")->result();

        $data['barang3'] = $query;



        //update

        if ($this->input->post('SIMPAN')) {

            $this->m_ranpur_ad->update_ranpur_ad($id);

            $this->session->set_flashdata('update_sukses', TRUE);

            redirect('c_alutsista/view_ranpur_ad', 'refresh');
        } else if ($this->input->post('BATAL')) {

            redirect('c_alutsista/view_ranpur_ad', 'refresh');
        }





        $this->load->view('alutsista/tni_ad/form_edit_ranpur', $data);
    }

    public function delete_ranpur_ad($id) {



        $id = $this->uri->segment(3);

        $this->m_ranpur_ad->delete_ranpur_ad($id);

        $this->session->set_flashdata('hapus_sukses', TRUE);

        redirect('c_alutsista/view_ranpur_ad', 'refresh');
    }

//_______________________________________________________________________________________________________________________
//+----------------------------------------------------------------------------------------------------------------------+
//|----------------- SENJATA PESAWAT AD -------------------- SENJATA PESAWAT AD ------------------------SENJATA PESAWAT AD-------|
//+----------------------------------------------------------------------------------------------------------------------+





    public function view_senjata_pesawat_ad() {

        $data['title'] = "Senjata Pesawat TNI AD";



        $data['link_alutsista'] = 'class="start active open"';

        $data['link_open_alutsista'] = 'open';

        $data['link_aktif_alutsista_ad'] = 'class="active"';



        $data['data_senjata_pesawat_ad'] = $this->m_senjata_pesawat_ad->data_senjata_pesawat_ad();



        $this->load->view('alutsista/tni_ad/view_senjata_pesawat_ad', $data);
    }

    public function tambah_senjata_pesawat_ad() {

        $data['title'] = "Senjata Pesawat TNI AD";



        $data['link_alutsista'] = 'class="start active open"';

        $data['link_open_alutsista'] = 'open';

        $data['link_aktif_alutsista_ad'] = 'class="active"';

        $query = $this->db->query("SELECT 

					*

				FROM 

					kesatuan

				WHERE

					idinduk='2'")->result();

        $data['kesatuan'] = $query;



        $querys = $this->db->query("SELECT 

					*

				FROM 

					jenis_barang where idkomoditi='9'")->result();

        $data['jenis'] = $querys;



        $this->load->view('alutsista/tni_ad/form_tambah_senjata_pesawat', $data);
    }

    public function simpan_tambah_senjata_pesawat_ad() {

        $this->db->query("insert into senjata_pesawat_ad(kesatuan,jenis_barang,fungsi,barang,b,rr,rb,jml,ket,tgl_input) values('" . $_POST['kesatuan'] . "','" . $_POST['jenis'] . "','" . $_POST['fungsi'] . "','" . $_POST['barang'] . "','" . $_POST['b'] . "','" . $_POST['rr'] . "','" . $_POST['rb'] . "','" . $_POST['jml'] . "','" . $_POST['keterangan'] . "','" . $this->convertdate->convert_string_to_date($this->input->post('tgl')) . "')");



        $this->session->set_flashdata('tambah_sukses', TRUE);

        redirect('c_alutsista/view_senjata_pesawat_ad', 'refresh');
    }

    public function edit_senjata_pesawat_ad() {



        $data['title'] = "Senjata Pesawat TNI AD";

        $data['link_alutsista'] = 'class="start active open"';

        $data['link_open_alutsista'] = 'open';

        $data['link_aktif_alutsista_ad'] = 'class="active"';





        $id = $this->uri->segment(3);



        //Data from model

        $data['senjata_pesawat_ad'] = $this->m_senjata_pesawat_ad->edit_senjata_pesawat_ad($id);

        $data['kesatuan'] = $this->m_senjata_pesawat_ad->kesatuan_ad();

        $data['jenis'] = $this->m_senjata_pesawat_ad->jenis_senjata_pesawat_ad();



        foreach ($data['senjata_pesawat_ad'] as $hasil) {

            $jenis_barang = $hasil->jenis_barang;

            $fungsi_barang = $hasil->fungsi;
        }



        $query = $this->db->query("

				SELECT 

                    *

                FROM 

                    fungsi_barang

                WHERE

                    idjenis='$jenis_barang'

		")->result();

        $data['fungsi3'] = $query;



        $query = $this->db->query("

				SELECT 

                    *

                FROM 

                    barang

                WHERE

                    idfungsi='$fungsi_barang'

		")->result();

        $data['barang3'] = $query;





        //update

        if ($this->input->post('SIMPAN')) {

            $this->m_senjata_pesawat_ad->update_senjata_pesawat_ad($id);

            $this->session->set_flashdata('update_sukses', TRUE);

            redirect('c_alutsista/view_senjata_pesawat_ad', 'refresh');
        } else if ($this->input->post('BATAL')) {

            redirect('c_alutsista/view_senjata_pesawat_ad', 'refresh');
        }





        $this->load->view('alutsista/tni_ad/form_edit_senjata_pesawat', $data);
    }

    public function delete_senjata_pesawat_ad($id) {



        $id = $this->uri->segment(3);

        $this->m_senjata_pesawat_ad->delete_senjata_pesawat_ad($id);

        $this->session->set_flashdata('hapus_sukses', TRUE);

        redirect('c_alutsista/view_senjata_pesawat_ad', 'refresh');
    }

//_______________________________________________________________________________________________________________________
//+----------------------------------------------------------------------------------------------------------------------+
//|----------------- RANMOR AD -------------------- RANMOR AD ------------------------RANMOR AD--------------------------|
//+----------------------------------------------------------------------------------------------------------------------+







    public function view_ranmor_ad() {

        $data['title'] = "Ranmor TNI AD";



        $data['link_alutsista'] = 'class="start active open"';

        $data['link_open_alutsista'] = 'open';

        $data['link_aktif_alutsista_ad'] = 'class="active"';



        $data['data_ranmor_ad'] = $this->m_ranmor_ad->data_ranmor_ad();

        $this->load->view('alutsista/tni_ad/view_ranmor_ad', $data);
    }

    public function tambah_ranmor_ad() {

        $data['title'] = "Ranmor TNI AD";



        $data['link_alutsista'] = 'class="start active open"';

        $data['link_open_alutsista'] = 'open';

        $data['link_aktif_alutsista_ad'] = 'class="active"';



        $query = $this->db->query("SELECT 

					*

				FROM 

					kesatuan

				WHERE

					idinduk='2'")->result();

        $data['kesatuan'] = $query;



        $querys = $this->db->query("SELECT 

					*

				FROM 

					jenis_barang where idkomoditi='6'")->result();

        $data['jenis'] = $querys;





        $this->load->view('alutsista/tni_ad/form_tambah_ranmor', $data);
    }

    public function simpan_tambah_ranmor_ad() {

        $this->db->query("insert into ranmor_ad(kesatuan,jenis_barang,fungsi,barang,b,rr,rb,jml,ket,tgl_input) values('" . $_POST['kesatuan'] . "','" . $_POST['jenis'] . "','" . $_POST['fungsi'] . "','" . $_POST['barang'] . "','" . $_POST['b'] . "','" . $_POST['rr'] . "','" . $_POST['rb'] . "','" . $_POST['jml'] . "','" . $_POST['keterangan'] . "','" . $this->convertdate->convert_string_to_date($this->input->post('tgl')) . "')");

        $this->session->set_flashdata('tambah_sukses', TRUE);

        redirect('c_alutsista/view_ranmor_ad', 'refresh');
    }

    public function edit_ranmor_ad($id) {



        $data['title'] = "Ranmor TNI AD";

        $data['link_alutsista'] = 'class="start active open"';

        $data['link_open_alutsista'] = 'open';

        $data['link_aktif_alutsista_ad'] = 'class="active"';





        $id = $this->uri->segment(3);



        //Data from model

        $data['ranmor_ad'] = $this->m_ranmor_ad->edit_ranmor_ad($id);

        $data['kesatuan'] = $this->m_ranmor_ad->kesatuan_ad();

        $data['jenis'] = $this->m_ranmor_ad->jenis_ranmor_ad();



        foreach ($data['ranmor_ad'] as $hasil) {

            $jenis_barang = $hasil->jenis_barang;

            $fungsi_barang = $hasil->fungsi;
        }



        $query = $this->db->query("

				SELECT 

                    *

                FROM 

                    fungsi_barang

                WHERE

                    idjenis='$jenis_barang'

		")->result();

        $data['fungsi3'] = $query;



        $query = $this->db->query("

				SELECT 

                    *

                FROM 

                    barang

                WHERE

                    idfungsi='$fungsi_barang'

		")->result();

        $data['barang3'] = $query;



        //update

        if ($this->input->post('SIMPAN')) {

            $this->m_ranmor_ad->update_ranmor_ad($id);

            $this->session->set_flashdata('update_sukses', TRUE);

            redirect('c_alutsista/view_ranmor_ad', 'refresh');
        } else if ($this->input->post('BATAL')) {

            redirect('c_alutsista/view_ranmor_ad', 'refresh');
        }





        $this->load->view('alutsista/tni_ad/form_edit_ranmor', $data);
    }

    public function delete_ranmor_ad($id) {



        $id = $this->uri->segment(3);

        $this->m_ranmor_ad->delete_ranmor_ad($id);

        $this->session->set_flashdata('hapus_sukses', TRUE);

        redirect('c_alutsista/view_ranmor_ad', 'refresh');
    }

//_______________________________________________________________________________________________________________________
//+----------------------------------------------------------------------------------------------------------------------+
//|----------------- MUNISI PESAWAT AD -------------------- MUNISI PESAWAT AD ------------------------MUNISI PESAWAT AD-------|
//+----------------------------------------------------------------------------------------------------------------------+







    public function view_amunisi_pesawat_ad() {

        $data['title'] = "Amunisi Pesawat TNI AD";



        $data['link_alutsista'] = 'class="start active open"';

        $data['link_open_alutsista'] = 'open';

        $data['link_aktif_alutsista_ad'] = 'class="active"';



        $data['data_amunisi_pesawat_ad'] = $this->m_amunisi_pesawat_ad->data_amunisi_pesawat_ad();

        $this->load->view('alutsista/tni_ad/view_amunisi_pesawat_ad', $data);
    }

    public function tambah_amunisi_pesawat_ad() {

        $data['title'] = "Amunisi Pesawat TNI AD";



        $data['link_alutsista'] = 'class="start active open"';

        $data['link_open_alutsista'] = 'open';

        $data['link_aktif_alutsista_ad'] = 'class="active"';

        $query = $this->db->query("SELECT 

					*

				FROM 

					kesatuan

				WHERE

					idinduk='2'")->result();

        $data['kesatuan'] = $query;

        $querys = $this->db->query("SELECT 

					*

				FROM 

					jenis_barang where idkomoditi='10'")->result();

        $data['jenis'] = $querys;

        $queryf = $this->db->query("SELECT 

					*

				FROM 

					fungsi_barang")->result();

        $data['fungsi'] = $queryf;

        $this->load->view('alutsista/tni_ad/form_tambah_amunisi_pesawat', $data);
    }

    public function simpan_tambah_amunisi_pesawat_ad() {

        $this->db->query("insert into amunisi_pesawat_ad(kesatuan,jenis_barang,fungsi,barang,b,rr,rb,jml,ket,tgl_input) values('" . $_POST['kesatuan'] . "','" . $_POST['jenis'] . "','" . $_POST['fungsi'] . "','" . $_POST['barang'] . "','" . $_POST['b'] . "','" . $_POST['rr'] . "','" . $_POST['rb'] . "','" . $_POST['jml'] . "','" . $_POST['keterangan'] . "','" . $this->convertdate->convert_string_to_date($this->input->post('tgl')) . "')");



        $this->session->set_flashdata('tambah_sukses', TRUE);

        redirect('c_alutsista/view_amunisi_pesawat_ad', 'refresh');
    }

    public function edit_amunisi_pesawat_ad($id) {



        $data['title'] = "Amunisi Pesawat TNI AD";



        $data['link_alutsista'] = 'class="start active open"';

        $data['link_open_alutsista'] = 'open';

        $data['link_aktif_alutsista_ad'] = 'class="active"';





        $id = $this->uri->segment(3);



        //Data from model

        $data['amunisi_pesawat_ad'] = $this->m_amunisi_pesawat_ad->edit_amunisi_pesawat_ad($id);

        $data['kesatuan'] = $this->m_amunisi_pesawat_ad->kesatuan_ad();

        $data['jenis'] = $this->m_amunisi_pesawat_ad->jenis_amunisi_pesawat_ad();



        foreach ($data['amunisi_pesawat_ad'] as $hasil) {

            $jenis_barang = $hasil->jenis_barang;

            $fungsi_barang = $hasil->fungsi;
        }



        $query = $this->db->query("

				SELECT 

                    *

                FROM 

                    fungsi_barang

                WHERE

                    idjenis='$jenis_barang'

		")->result();



        $data['fungsi3'] = $query;



        $query = $this->db->query("

				SELECT 

                    *

                FROM 

                    barang

                WHERE

                    idfungsi='$fungsi_barang'

		")->result();

        $data['barang3'] = $query;





        //update

        if ($this->input->post('SIMPAN')) {

            $this->m_amunisi_pesawat_ad->update_amunisi_pesawat_ad($id);

            $this->session->set_flashdata('update_sukses', TRUE);

            redirect('c_alutsista/view_amunisi_pesawat_ad', 'refresh');
        } else if ($this->input->post('BATAL')) {

            redirect('c_alutsista/view_amunisi_pesawat_ad', 'refresh');
        }





        $this->load->view('alutsista/tni_ad/form_edit_amunisi_pesawat', $data);
    }

    public function delete_amunisi_pesawat_ad($id) {



        $id = $this->uri->segment(3);

        $this->m_amunisi_pesawat_ad->delete_amunisi_pesawat_ad($id);

        $this->session->set_flashdata('hapus_sukses', TRUE);

        redirect('c_alutsista/view_amunisi_pesawat_ad', 'refresh');
    }

////////////////////////////////////////END TNI AD ANDRE/////////////////////////////////////////////////	
    // public function cetak_pesawat_ad(){
    // //phpinfo();die();
    // $this->load->view('alutsista/tni_ad/cetak_pesawat_ad');
    // }
/////////////////////////////////////////////////END TNI AD//////////////////////////////////////////
//_______________________________________________________________________________________________________________________
//+----------------------------------------------------------------------------------------------------------------------+
//|----------------- PESAWAT AU -------------------- PESAWAT AU ------------------------PESAWAT AU------------------------|
//+----------------------------------------------------------------------------------------------------------------------+
    //TNI AU - Pesawat

    public function pesawat_au() {

        //style sidebar

        $data['title'] = "Pesawat TNI AU";



        $data['link_alutsista'] = 'class="start active open"';

        $data['link_open_alutsista'] = 'open';

        $data['link_aktif_alutsista_au'] = 'class="active"';


        //Data from model

        $data['jenis'] = $this->m_alutsista->jenis_pesawat_au();

        $data['kesatuan'] = $this->m_alutsista->kesatuan_au();

        $data['fungsi'] = $this->m_alutsista->fungsi_au();

        $data['barang'] = $this->m_alutsista->barang_au();

        $data['pesawat_au'] = $this->m_alutsista->pesawat_au();



        $this->load->view('alutsista/tni_au/pesawat_au', $data);
    }

    public function tambah_pesawat_au() {

        $data['title'] = "Pesawat TNI AU";



        $data['link_alutsista'] = 'class="start active open"';

        $data['link_open_alutsista'] = 'open';

        $data['link_aktif_alutsista_au'] = 'class="active"';

        //Data from model

        $data['kesatuan'] = $this->m_alutsista->kesatuan_au();

        $data['jenis'] = $this->m_alutsista->jenis_pesawat_au();



        //simpan

        if ($this->input->post('simpan')) {

            $this->m_alutsista->tambah_pesawat_au();

            $this->session->set_flashdata('tambah_sukses', TRUE);

            redirect('c_alutsista/pesawat_au', 'refresh');

            die();
        } else if ($this->input->post('batal')) {

            redirect('c_alutsista/pesawat_au', 'refresh');
        }



        $this->load->view('alutsista/tni_au/tambah_pesawat_au', $data);
    }

    public function edit_pesawat_au($id) {



        $data['title'] = "Pesawat TNI AU";



        $data['link_alutsista'] = 'class="start active open"';

        $data['link_open_alutsista'] = 'open';

        $data['link_aktif_alutsista_au'] = 'class="active"';



        $id = $this->uri->segment(3);



        //Data from model

        $data['kesatuan'] = $this->m_alutsista->kesatuan_au();

        $data['jenis'] = $this->m_alutsista->jenis_pesawat_au();

        $data['fungsi'] = $this->m_alutsista->fungsi_au();

        $data['barang'] = $this->m_alutsista->barang_au();

        $data['pesawat'] = $this->m_alutsista->edit_pesawat_au($id)->result();



        //Proses Update

        if ($this->input->post('update')) {

            $this->m_alutsista->proses_edit_pesawat_au($id);

            $this->session->set_flashdata('update_sukses', TRUE);

            redirect('c_alutsista/pesawat_au', 'refresh');
        } else if ($this->input->post('batal')) {

            redirect('c_alutsista/pesawat_au', 'refresh');
        }

        $this->load->view('alutsista/tni_au/edit_pesawat_au', $data);
    }

    public function hapus_pesawat_au($id) {

        $id = $this->uri->segment(3);

        $this->m_alutsista->hapus_pesawat_au($id);

        $this->session->set_flashdata('hapus_sukses', TRUE);

        redirect('c_alutsista/pesawat_au', 'refresh');
    }

    //CETAK PESAWAT AU



    public function laporan_pesawat_au() {

        //style sidebar

        $data['link_laporan'] = 'class="start active open"';
        $data['link_open_laporan'] = 'open';
        $data['link_aktif_laporan_au'] = 'class="active"';


        //Title

        $data['title'] = "Laporan Pesawat TNI AU";



        //Data from model

        $data['jenis'] = $this->m_alutsista->jenis_pesawat_au();

        $data['kesatuan'] = $this->m_alutsista->kesatuan_au();

        $data['fungsi'] = $this->m_alutsista->fungsi_au();

        $data['barang'] = $this->m_alutsista->barang_au();

        $data['pesawat_au'] = $this->m_alutsista->pesawat_au();



        $this->load->view('alutsista/tni_au/laporan_pesawat_au', $data);
    }

    public function cetak_pesawat_au() {

        //tittle

        $data['tittle'] = "Cetak Pesawat au";

        //Data From Model



        $query = $this->db->query("SELECT 

					a.*,

					a.id as idpesawatl,

					b.*,

					c.*,

					d.*,

					e.*

				FROM 

					pesawat_au a,

					kesatuan b,

					jenis_barang c,

					fungsi_barang d,

					barang e

				WHERE

					a.id_kesatuan=b.id and

					a.id_jenis=c.id and

					a.id_fungsi=d.id and

					a.id_barang=e.id

					

					

					")->result();



        $query2 = $this->db->query("

					

					SELECT 

					a.*,

					a.id as idpesawatl,

					b.*,

					c.*,

					d.*,

					e.*

				FROM 

					pesawat_au a,

					kesatuan b,

					jenis_barang c,

					fungsi_barang d,

					barang e

				WHERE

					a.id_kesatuan=b.id and

					a.id_jenis=c.id and

					a.id_fungsi=d.id and

					a.id_barang=e.id

					

					")->result();

        $data['model'] = $query;

        $data['model2'] = $query2;



        $this->load->view('alutsista/tni_au/cetak_pesawat_au', $data);
    }

//_______________________________________________________________________________________________________________________
//+----------------------------------------------------------------------------------------------------------------------+
//|----------------- MUNISI AU -------------------- MUNISI AU ------------------------MUNISI AU------------------------|
//+----------------------------------------------------------------------------------------------------------------------+
    //TNI AU - Amunisi

    public function amunisi_au() {

        $data['title'] = "Amunisi TNI AU";



        $data['link_alutsista'] = 'class="start active open"';

        $data['link_open_alutsista'] = 'open';

        $data['link_aktif_alutsista_au'] = 'class="active"';



        //Data from model

        $data['jenis'] = $this->m_alutsista->jenis_amunisi_au();

        $data['kesatuan'] = $this->m_alutsista->kesatuan_au();

        $data['fungsi'] = $this->m_alutsista->fungsi_au();

        $data['barang'] = $this->m_alutsista->barang_au();

        $data['amunisi_au'] = $this->m_alutsista->amunisi_au();



        $this->load->view('alutsista/tni_au/amunisi_au', $data);
    }

    public function tambah_amunisi_au() {

        $data['title'] = "Amunisi TNI AU";



        $data['link_alutsista'] = 'class="start active open"';

        $data['link_open_alutsista'] = 'open';

        $data['link_aktif_alutsista_au'] = 'class="active"';


        //Data from model

        $data['kesatuan'] = $this->m_alutsista->kesatuan_au();

        $data['jenis'] = $this->m_alutsista->jenis_amunisi_au();

        $data['senjata'] = $this->m_alutsista->jenis_senjata1_au();



        //simpan

        if ($this->input->post('simpan')) {

            $this->m_alutsista->tambah_amunisi_au();

            $id = $this->db->insert_id();

            //Fasilitas

            $jenis_senjata = $this->input->post('JENIS_SENJATA');

//            print_r($fasilitas_id);

            $jumlah_pucuk = $this->input->post('JUMLAH_PUCUK');

            $bp_pucuk = $this->input->post('BP_PUCUK');

            $persediaan_pusat = $this->input->post('PERSEDIAAN_PUSAT');

            $persediaan_satuan = $this->input->post('PERSEDIAAN_SATUAN');



            //	print_r($persediaan_satuan);
            //	print_r($insert_date);die();



            foreach ($jenis_senjata as $key => $value) {

                $this->db->query('insert into amunisi_au (id_dump_amunisi_au,jenis_senjata,jml_barang,bp_barang,persediaan_pusat,persediaan_satuan) values (\'' . $id . '\',\'' . $jenis_senjata[$key] . '\',\'' . $jumlah_pucuk[$key] . '\',\'' . $bp_pucuk[$key] . '\',\'' . $persediaan_pusat[$key] . '\',\'' . $persediaan_satuan[$key] . '\')');

                // echo 'insert into amunisi_au (id_dump_amunisi_au,jenis_senjata,jml_barang,bp_barang,persediaan_pusat,persediaan_satuan,insert_date) values (\'' . $id . '\',\'' . $jenis_senjata[$key] . '\',\'' . $jumlah_pucuk[$key] . '\',\'' . $bp_pucuk[$key] . '\',\'' . $persediaan_pusat[$key] . '\',\'' . $persediaan_satuan[$key] . '\',\'' . $insert_date . '\')'; die();
            }

            $this->session->set_flashdata('tambah_sukses', TRUE);

            redirect('c_alutsista/amunisi_au', 'refresh');
        } else if ($this->input->post('batal')) {

            redirect('c_alutsista/amunisi_au', 'refresh');
        }



        $this->load->view('alutsista/tni_au/tambah_amunisi_au', $data);
    }

    public function edit_amunisi_au($id) {


        $data['title'] = "Amunisi TNI AU";



        $data['link_alutsista'] = 'class="start active open"';

        $data['link_open_alutsista'] = 'open';

        $data['link_aktif_alutsista_au'] = 'class="active"';



        $id = $this->uri->segment(3);

        //Data from model

        $data['kesatuan'] = $this->m_alutsista->kesatuan_au();

        $data['jenis'] = $this->m_alutsista->jenis_amunisi_au();

        $data['fungsi'] = $this->m_alutsista->fungsi_au();

        $data['barang'] = $this->m_alutsista->barang_au();

        $data['senjata'] = $this->m_alutsista->jenis_senjata1_au();

        $data['amunisi'] = $this->m_alutsista->edit_amunisi_au($id)->result();





        $id = $this->uri->segment(3);

        $data['detail_amunisi_au'] = $this->db->query('select * from amunisi_au where id_dump_amunisi_au = ' . $id . '')->result();

        $this->load->view('alutsista/tni_au/edit_amunisi_au', $data);
    }

    public function proses_edit_amunisi_au() {



        $id = $this->uri->segment(3);

        //Proses Update

        if ($this->input->post('update')) {

            $this->m_alutsista->proses_edit_amunisi_au($id);

            //amunisi_detail

            $jenis_senjata = $this->input->post('JENIS_SENJATA');

//            print_r($fasilitas_id);

            $jumlah_pucuk = $this->input->post('JUMLAH_PUCUK');

            $bp_pucuk = $this->input->post('BP_PUCUK');

            $persediaan_pusat = $this->input->post('PERSEDIAAN_PUSAT');

            $persediaan_satuan = $this->input->post('PERSEDIAAN_SATUAN');

            //delete_detail

            $this->db->where('id_dump_amunisi_au', $id);

            $this->db->delete('amunisi_au');

            //insert_detail

            foreach ($jenis_senjata as $key => $value) {

                $this->db->query('insert into amunisi_au (id_dump_amunisi_au,jenis_senjata,jml_barang,bp_barang,persediaan_pusat,persediaan_satuan) values (\'' . $id . '\',\'' . $jenis_senjata[$key] . '\',\'' . $jumlah_pucuk[$key] . '\',\'' . $bp_pucuk[$key] . '\',\'' . $persediaan_pusat[$key] . '\',\'' . $persediaan_satuan[$key] . '\')');

                // echo 'insert into amunisi_au (id_dump_amunisi_au,jenis_senjata,jml_barang,bp_barang,persediaan_pusat,persediaan_satuan,insert_date) values (\'' . $id . '\',\'' . $jenis_senjata[$key] . '\',\'' . $jumlah_pucuk[$key] . '\',\'' . $bp_pucuk[$key] . '\',\'' . $persediaan_pusat[$key] . '\',\'' . $persediaan_satuan[$key] . '\',\'' . $insert_date . '\')'; die();
            }

            $this->session->set_flashdata('update_sukses', TRUE);

            redirect('c_alutsista/amunisi_au', 'refresh');
        } else if ($this->input->post('batal')) {

            redirect('c_alutsista/amunisi_au', 'refresh');
        }
    }

    public function hapus_amunisi_au($id) {

        $id = $this->uri->segment(3);

        $this->m_alutsista->hapus_amunisi_au($id);

        $this->session->set_flashdata('hapus_sukses', TRUE);

        redirect('c_alutsista/amunisi_au', 'refresh');
    }

    //CETAK AMUNISI AU

    public function laporan_amunisi_au() {
        //style sidebar
        $data['link_open_laporan'] = 'open';
        $data['link_open_laporan_au'] = 'open';
        $data['link_aktif_laporan_au'] = 'class="active"';
        $data['link_laporan'] = 'class="start active open"';

        //Title
        $data['title'] = "List Data Amunisi AD";

        //Data from model
        $data['jenis'] = $this->m_alutsista->jenis_amunisi_au();
        $data['kesatuan'] = $this->m_alutsista->kesatuan_au();
        $data['fungsi'] = $this->m_alutsista->fungsi_au();
        $data['barang'] = $this->m_alutsista->barang_au();
        $data['amunisi_au'] = $this->m_alutsista->amunisi_au();

        $this->load->view('alutsista/tni_au/laporan_amunisi_au', $data);
    }

    public function cetak_amunisi_au() {
        //tittle
        $data['tittle'] = "Cetak Amunisi au";
        //Data From Model

        $query = $this->db->query("SELECT 
					a.*,
					a.id as idamunisi,
					b.*,
					c.*,
					d.*,
					e.*
				FROM 
					amunisi_dump_au a,
					kesatuan b,
					jenis_barang c,
					fungsi_barang d,
					barang e
					
				WHERE
					a.id_kesatuan=b.id and
					a.id_jenis=c.id and
					a.id_fungsi=d.id and
					a.id_barang=e.id
					
					
					")->result();
        $data['model'] = $query;
        $query3 = $this->db->query("SELECT 
					a.*,
					a.id as idamunisi,
					b.*,
					c.*,
					d.*
				FROM 
					amunisi_dump_au a,
					kesatuan b,
					jenis_barang c,
					fungsi_barang d
					
				WHERE
					a.id_kesatuan=b.id and
					a.id_jenis=c.id and
					a.id_fungsi=d.id 
					
					
					")->result();
        $data['kesatuan'] = $query3;
        $query2 = $this->db->query("SELECT a . * , b . * , c . *
									FROM amunisi_au a, amunisi_dump_au b, barang c
									WHERE a.id_dump_amunisi_au = b.id
											AND a.jenis_senjata = c.id
					
					
					")->result();
        $data['detail'] = $query2;
        $this->load->view('cetak_tniau/amunisi/cetak', $data);
    }

//_______________________________________________________________________________________________________________________
//+----------------------------------------------------------------------------------------------------------------------+
//|----------------- ALPALSUS AU -------------------- ALPALSUS AU ------------------------ALPALSUS AU------------------------|
//+----------------------------------------------------------------------------------------------------------------------+
    //TNI AU - Alpalsus

    public function alpalsus_au() {

        $data['title'] = "Alpalsus TNI AU";
        $data['link_alutsista'] = 'class="start active open"';
        $data['link_open_alutsista'] = 'open';
        $data['link_aktif_alutsista_au'] = 'class="active"';

        //Data from model
        $data['jenis'] = $this->m_alutsista->jenis_alpalsus_au();
        $data['kesatuan'] = $this->m_alutsista->kesatuan_au();
        $data['fungsi'] = $this->m_alutsista->fungsi_au();
        $data['barang'] = $this->m_alutsista->barang_au();
        $data['alpalsus_au'] = $this->m_alutsista->alpalsus_au();

        $this->load->view('alutsista/tni_au/alpalsus_au', $data);
    }

    public function tambah_alpalsus_au() {

        $data['title'] = "Alpalsus TNI AU";
        $data['link_alutsista'] = 'class="start active open"';
        $data['link_open_alutsista'] = 'open';
        $data['link_aktif_alutsista_au'] = 'class="active"';

        //Data from model
        $data['kesatuan'] = $this->m_alutsista->kesatuan_au();
        $data['jenis'] = $this->m_alutsista->jenis_alpalsus_au();

        //simpan
        if ($this->input->post('simpan')) {
            $this->m_alutsista->tambah_alpalsus_au();
            $this->session->set_flashdata('tambah_sukses', TRUE);
            redirect('c_alutsista/alpalsus_au', 'refresh');
        } else if ($this->input->post('batal')) {
            redirect('c_alutsista/alpalsus_au', 'refresh');
        }

        $this->load->view('alutsista/tni_au/tambah_alpalsus_au', $data);
    }

    public function edit_alpalsus_au($id) {

        $data['title'] = "Alpalsus TNI AU";
        $data['link_alutsista'] = 'class="start active open"';
        $data['link_open_alutsista'] = 'open';
        $data['link_aktif_alutsista_au'] = 'class="active"';

        $id = $this->uri->segment(3);

        //Data from model
        $data['kesatuan'] = $this->m_alutsista->kesatuan_au();
        $data['jenis'] = $this->m_alutsista->jenis_alpalsus_au();
        $data['fungsi'] = $this->m_alutsista->fungsi_au();
        $data['barang'] = $this->m_alutsista->barang_au();
        $data['alpalsus'] = $this->m_alutsista->edit_alpalsus_au($id)->result();

        //Proses Update
        if ($this->input->post('update')) {
            $this->m_alutsista->proses_edit_alpalsus_au($id);
            $this->session->set_flashdata('update_sukses', TRUE);
            redirect('c_alutsista/alpalsus_au', 'refresh');
        } else if ($this->input->post('batal')) {
            redirect('c_alutsista/alpalsus_au', 'refresh');
        }

        $this->load->view('alutsista/tni_au/edit_alpalsus_au', $data);
    }

    public function hapus_alpalsus_au($id) {

        $id = $this->uri->segment(3);
        $this->m_alutsista->hapus_alpalsus_au($id);
        $this->session->set_flashdata('hapus_sukses', TRUE);
        redirect('c_alutsista/alpalsus_au', 'refresh');
    }

//_______________________________________________________________________________________________________________________
//+----------------------------------------------------------------------------------------------------------------------+
//|----------------- SENJATA AU -------------------- SENJATA AU ------------------------SENJATA AU------------------------|
//+----------------------------------------------------------------------------------------------------------------------+
    //TNI AU - Senjata

    public function senjata_au() {

        $data['title'] = "Senjata TNI AU";



        $data['link_alutsista'] = 'class="start active open"';

        $data['link_open_alutsista'] = 'open';

        $data['link_aktif_alutsista_au'] = 'class="active"';



        //Data from model

        $data['jenis'] = $this->m_alutsista->jenis_senjata_au();

        $data['kesatuan'] = $this->m_alutsista->kesatuan_au();

        $data['fungsi'] = $this->m_alutsista->fungsi_au();

        $data['barang'] = $this->m_alutsista->barang_au();

        $data['senjata_au'] = $this->m_alutsista->senjata_au();



        $this->load->view('alutsista/tni_au/senjata_au', $data);
    }

    public function tambah_senjata_au() {

        $data['title'] = "Senjata TNI AU";



        $data['link_alutsista'] = 'class="start active open"';

        $data['link_open_alutsista'] = 'open';

        $data['link_aktif_alutsista_au'] = 'class="active"';



        //Data from model

        $data['kesatuan'] = $this->m_alutsista->kesatuan_au();

        $data['jenis'] = $this->m_alutsista->jenis_senjata_au();



        //simpan

        if ($this->input->post('simpan')) {

            $this->m_alutsista->tambah_senjata_au();

            $this->session->set_flashdata('tambah_sukses', TRUE);

            redirect('c_alutsista/senjata_au', 'refresh');

            die();
        } else if ($this->input->post('batal')) {

            redirect('c_alutsista/senjata_au', 'refresh');
        }



        $this->load->view('alutsista/tni_au/tambah_senjata_au', $data);
    }

    public function edit_senjata_au($id) {

        $data['title'] = "Senjata TNI AU";



        $data['link_alutsista'] = 'class="start active open"';

        $data['link_open_alutsista'] = 'open';

        $data['link_aktif_alutsista_au'] = 'class="active"';



        $id = $this->uri->segment(3);



        //Data from model

        $data['kesatuan'] = $this->m_alutsista->kesatuan_au();

        $data['jenis'] = $this->m_alutsista->jenis_senjata_au();

        $data['fungsi'] = $this->m_alutsista->fungsi_au();

        $data['barang'] = $this->m_alutsista->barang_au();

        $data['senjata'] = $this->m_alutsista->edit_senjata_au($id)->result();



        //Proses Update

        if ($this->input->post('update')) {

            $this->m_alutsista->proses_edit_senjata_au($id);

            $this->session->set_flashdata('update_sukses', TRUE);

            redirect('c_alutsista/senjata_au', 'refresh');
        } else if ($this->input->post('batal')) {

            redirect('c_alutsista/senjata_au', 'refresh');
        }



        $this->load->view('alutsista/tni_au/edit_senjata_au', $data);
    }

    public function hapus_senjata_au($id) {

        $id = $this->uri->segment(3);

        $this->m_alutsista->hapus_senjata_au($id);

        $this->session->set_flashdata('hapus_sukses', TRUE);

        redirect('c_alutsista/senjata_au', 'refresh');
    }

    public function chain_to_fungsi() {

        $data['fungsi'] = $this->m_alutsista->get_fungsi();

        $this->load->view('alutsista/tni_au/fungsi', $data);
    }

    public function chain_to_barang() {

        $data['barang'] = $this->m_alutsista->get_barang();

        $this->load->view('alutsista/tni_au/barang', $data);
    }

    //Laporan Senjata AU

    public function laporan_senjata_au() {

        //style sidebar

        $data['link_open_master'] = 'open';

        $data['link_open_laporan_alutsista_au'] = 'open';

        $data['link_aktif_laporan_alutsista_au'] = 'class="active"';

        $data['link_laporan'] = 'class="start active open"';



        //Title    

        $data['title'] = "Laporan Senjata AU";



        $id_bulan = '0';

        if (isset($_GET['id_bulan'])) {

            if ($_GET['id_bulan'] != '') {

                $id_bulan = $_GET['id_bulan'];
            }
        }



        $data['bulan_id'] = $id_bulan;



        if ($id_bulan != 0) {

//            $data['senjata_au'] = $this->m_alutsista->laporan_rekap_senjata_au($id_bulan);
        } else if ($id_bulan == 0) {

//            $data['senjata_au'] = $this->m_alutsista->laporan_rekap_senjata_au_semua();
        }

        $this->load->view('alutsista/tni_au/laporan_senjata_au', $data);
    }

//_______________________________________________________________________________________________________________________
//+----------------------------------------------------------------------------------------------------------------------+
//|----------------- SENJATA AL -------------------- SENJATA AL ------------------------SENJATA AL------------------------|
//+----------------------------------------------------------------------------------------------------------------------+
    public function indexsenjata() {

        $data['title'] = "Senjata TNI AL";


        $data['link_alutsista'] = 'class="start active open"';

        $data['link_open_alutsista'] = 'open';

        $data['link_aktif_alutsista_al'] = 'class="active"';

        $data['judul'] = 'Senjata TNI AL - Index';

        $query = $this->db->query("SELECT 

                    a.*,

                    a.id as idsenjataal,

                    b.*,

                    c.*,

                    d.*,

                    e.*

                FROM 

                    senjata_al a,

                    kesatuan b,

                    jenis_barang c,

                    fungsi_barang d,

                    barang e

                WHERE

                    a.id_kesatuan=b.id and

                    a.id_jenis=c.id and

                    a.id_fungsi=d.id and

                    a.id_barang=e.id

                    

                    

                    ")->result();

        $data['model'] = $query;

        $this->load->view('alutsista/tni_al/senjata_tni_al/index', $data);
    }

    public function tambahsenjata() {



        $data['title'] = "Senjata TNI AL";


        $data['link_alutsista'] = 'class="start active open"';

        $data['link_open_alutsista'] = 'open';

        $data['link_aktif_alutsista_al'] = 'class="active"';

        $data['judul'] = 'Senjata TNI AL - Tambah';

        $query = $this->db->query("SELECT 

                    *

                FROM 

                    kesatuan

                WHERE

                    idinduk='3'")->result();



        $query2 = $this->db->query("SELECT 

                    *

                FROM 

                    jenis_barang

                WHERE

                    idkomoditi='11'")->result();

        $data['kesatuan'] = $query;

        $data['jenis'] = $query2;

        $this->load->view('alutsista/tni_al/senjata_tni_al/tambah', $data);
    }

    public function fungsieun($jenis = '') {

        $sql = "

                SELECT 

                    *

                FROM 

                    fungsi_barang

                WHERE

                    idjenis='$jenis'

                

                    ";

        //echo $jenis;die();

        $query = $this->db->query("SELECT 

                    *

                FROM 

                    fungsi_barang

                WHERE

                    idjenis='$jenis'")->result();

        $data['fungsi'] = $query;

        $this->load->view('alutsista/tni_al/senjata_tni_al/fungsi', $data);

        //echo $query;die();
    }

    public function barangeun($fungsi = '') {

        $doffy = $this->db->query("SELECT 

                    *

                FROM 

                    barang

                WHERE

                    idfungsi='$fungsi'")->result();

        //echo $doffy;die();

        $data['barang'] = $doffy;

        $this->load->view('alutsista/tni_al/senjata_tni_al/barang', $data);
    }

    public function simpansenjata_al() {
        $this->db->query("insert into senjata_al (id_kesatuan,id_jenis,id_fungsi,id_barang,pemakaian_sp,pemakaian_tsp,persediaan_sp,persediaan_tsp,tanggal_input) values ('" . $_POST['kesatuan'] . "','" . $_POST['jenis'] . "','" . $_POST['fungsi'] . "','" . $_POST['barang'] . "','" . $_POST['sp'] . "','" . $_POST['tsp'] . "','" . $_POST['psp'] . "','" . $_POST['ptsp'] . "','" . $this->convertdate->convert_string_to_date($this->input->post('tgl')) . "')");
        //echo $tgl;die();
        $this->session->set_flashdata('tambah_sukses', TRUE);
        redirect('c_alutsista/indexsenjata', 'refresh');
    }

    public function edit_senjata_al($id) {
        $id = $this->uri->segment(3);

        $data['title'] = "Senjata TNI AL";

        $data['link_alutsista'] = 'class="start active open"';

        $data['link_open_alutsista'] = 'open';

        $data['link_aktif_alutsista_al'] = 'class="active"';

        $data['judul'] = 'Senjata TNI AL - Update';



        $query = $this->db->query("SELECT 

                    *

                FROM 

                    kesatuan

                WHERE

                    idinduk='3'")->result();



        $query2 = $this->db->query("SELECT 

                    *

                FROM 

                    jenis_barang

                WHERE

                    idkomoditi='11'")->result();
        $fungsi = $this->db->query("SELECT a.id, a.fungsi FROM fungsi_barang a, jenis_barang b WHERE a.idjenis=b.id AND b.idkomoditi='11'")->result();
        $barang = $this->db->query("SELECT a.id, a.barang, a.negara_asal, a.tahun_buat FROM barang a, fungsi_barang b, jenis_barang c WHERE a.idfungsi=b.id AND b.idjenis=c.id AND c.idkomoditi='11'")->result();

        $data['view'] = $this->m_alutsista->edit_senjata_al($id);

        $data['kesatuan'] = $query;

        $data['jenis'] = $query2;

        $data['fungsi'] = $fungsi;

        $data['barang'] = $barang;

        $this->load->view('alutsista/tni_al/senjata_tni_al/update', $data);
    }

    public function updatesenjata_al() {

        $id = $this->uri->segment(3);

        // echo $this->input->post('kesatuan').'<br>';
        // echo $this->input->post('jenis').'<br>';
        // echo $this->input->post('zzz').'<br>';
        // echo $this->input->post('sss').'<br>';
        // echo $this->input->post('sp').'<br>';
        // echo $this->input->post('tsp').'<br>';
        // echo $this->input->post('psp').'<br>';
        // echo $this->input->post('ptsp').'<br>';
        // echo 'tanggal input'.date ("Y-m-d").'<br>';
        // echo $this->input->post('tanggal').'<br>';
        // die();

        $data = array(
            'id_kesatuan' => (int) $this->input->post('kesatuan'),
            'id_jenis' => $this->input->post('jenis'),
            'id_fungsi' => $this->input->post('zzz'),
            'id_barang' => $this->input->post('sss'),
            'pemakaian_sp' => (int) $this->input->post('sp'),
            'pemakaian_tsp' => (int) $this->input->post('tsp'),
            'persediaan_sp' => (int) $this->input->post('psp'),
            'persediaan_tsp' => (int) $this->input->post('ptsp'),
//            'tanggal_input' => date("Y-m-d"),
//            'tanggal' => $this->input->post('tanggal2')
            'tanggal_input' => $this->convertdate->convert_string_to_date($this->input->post('tgl'))
        );
        $this->db->where('id', $id);
        $this->db->update('senjata_al', $data);

        $this->session->set_flashdata('update_sukses', TRUE);
        redirect('c_alutsista/indexsenjata', 'refresh');
    }

    public function hapussenjata($id = '') {

        $doffy = $this->db->query("DELETE 

                FROM 

                    senjata_al

                WHERE

                    id='$id'");

        $this->session->set_flashdata('hapus_sukses', TRUE);
        redirect('c_alutsista/indexsenjata', 'refresh');
    }

//_______________________________________________________________________________________________________________________
//+----------------------------------------------------------------------------------------------------------------------+
//|----------------- PESAWAT AL -------------------- PESAWAT AL ------------------------PESAWAT AL------------------------|
//+----------------------------------------------------------------------------------------------------------------------+





    public function indexpesawat() {



        $data['title'] = "Pesawat TNI AL";


        $data['link_alutsista'] = 'class="start active open"';

        $data['link_open_alutsista'] = 'open';

        $data['link_aktif_alutsista_al'] = 'class="active"';

        $data['judul'] = 'Pesawat TNI AL - index';



        $data['pesawat_al'] = $this->m_alutsista_al->list_pesawat_al();

        $this->load->view('alutsista/tni_al/pesawat_al/index', $data);
    }

    public function tambahpesawat() {



        $data['title'] = "Pesawat TNI AL";


        $data['link_alutsista'] = 'class="start active open"';

        $data['link_open_alutsista'] = 'open';

        $data['link_aktif_alutsista_al'] = 'class="active"';

        $data['judul'] = 'PESAWAT TNI AL - Tambah';

        $query = $this->db->query("SELECT 

					*

				FROM 

					kesatuan

				WHERE

					idinduk='3'")->result();



        $query2 = $this->db->query("SELECT 

					*

				FROM 

					jenis_barang

				WHERE

					idkomoditi='13'")->result();


        $data['kesatuan'] = $query;

        $data['jenis'] = $query2;

        $this->load->view('alutsista/tni_al/pesawat_al/tambahpesawat', $data);
    }

    public function tambah() {

        // $x = explode("-",$this->input->post('tanggal2'));
        // echo (int)$this->input->post('kesatuan').'<br>';
        // echo $this->input->post('jenis').'<br>';
        // echo $this->input->post('fungsi').'<br>';
        // echo $this->input->post('barang').'<br>';
        // echo $this->input->post('lokasi').'<br>';
        // echo $this->input->post('s').'<br>';
        // echo $this->input->post('ts').'<br>';
        // echo $this->input->post('grd').'<br>';
        // echo $this->input->post('kons').'<br>';
        // echo $this->input->post('rb').'<br>';
        // echo $this->input->post('tl').'<br>';
        // echo $x[2]."-".$x[1]."-".$x[0].'<br>';
        // echo date("Y-m-d");
        // die();
//        $x = explode("-", $this->input->post('tanggal2'));
        $data = array(
            'id_kesatuan' => (int) $this->input->post('kesatuan'),
            'id_jenis' => $this->input->post('jenis'),
            'id_fungsi' => $this->input->post('fungsi'),
            'id_pesawat' => $this->input->post('barang'),
            'lokasi' => $this->input->post('lokasi'),
            's' => $this->input->post('s'),
            'ts' => $this->input->post('ts'),
            'grd' => $this->input->post('grd'),
            'kons' => $this->input->post('kons'),
            'rb' => $this->input->post('rb'),
            'tl' => $this->input->post('tl'),
//            'tanggal' => $x[2] . "-" . $x[1] . "-" . $x[0],
//            'tanggal_input' => date("Y-m-d")
            'tanggal_input' => $this->convertdate->convert_string_to_date($this->input->post('tgl'))
        );
        $this->db->insert('pesawat_al', $data);

        redirect('c_alutsista/indexpesawat', 'refresh');
    }

    public function editpesawat($id) {

        $data['title'] = "Pesawat TNI AL";
        $data['link_alutsista'] = 'class="start active open"';
        $data['link_open_alutsista'] = 'open';
        $data['link_aktif_alutsista_al'] = 'class="active"';
        $data['judul'] = 'PESAWAT TNI AL - Edit';

        $id = $this->uri->segment(3);

        $data['pesawat_al'] = $this->m_alutsista_al->edit_pesawat_al($id);

        $query = $this->db->query("
			SELECT
				*
			FROM
				kesatuan
			WHERE
				idinduk='3'
		")->result();

        $query2 = $this->db->query("
			SELECT 
				*
			FROM 
				jenis_barang
			WHERE
				idkomoditi='13'
		")->result();

        $data['kesatuan'] = $query;
        $data['jenis'] = $query2;

        foreach ($data['pesawat_al'] as $hasil) {

            $jenis_barang = $hasil->id_jenis;
            $fungsi_barang = $hasil->id_fungsi;
        }



        $querye = $this->db->query("

				SELECT 
                    *
                FROM 
                    fungsi_barang
                WHERE
                    idjenis='$jenis_barang'

		")->result();

        $data['fungsi3'] = $querye;



        $queryo = $this->db->query("

				SELECT 
                    *
                FROM 
                    barang
                WHERE
                    idfungsi='$fungsi_barang'

		")->result();

        $data['barang3'] = $queryo;


        $this->load->view('alutsista/tni_al/pesawat_al/editpesawat', $data);
    }

    public function update() {

        $id = $this->uri->segment(3);

        $data = array(
            'id_kesatuan' => (int) $this->input->post('kesatuan'),
            'id_jenis' => $this->input->post('jenis'),
            'id_fungsi' => $this->input->post('zzz'),
            'id_pesawat' => $this->input->post('sss'),
            'lokasi' => $this->input->post('lokasi'),
            's' => $this->input->post('s'),
            'ts' => $this->input->post('ts'),
            'grd' => $this->input->post('grd'),
            'kons' => $this->input->post('kons'),
            'rb' => $this->input->post('rb'),
            'tl' => $this->input->post('tl'),
//            'tanggal' => $this->input->post('tanggal'),
//            'tanggal_input' => date("Y-m-d")
            'tanggal_input' => $this->convertdate->convert_string_to_date($this->input->post('tgl'))
        );
        $this->db->where('id', $id);
        $this->db->update('pesawat_al', $data);

        redirect('c_alutsista/indexpesawat', 'refresh');
    }

    public function deletepesawat() {

        $id = $this->uri->segment(3);

        $this->db->where('id', $id);
        $this->db->delete('pesawat_al', array('id' => $id));

        redirect('c_alutsista/indexpesawat', 'refresh');
    }

    public function fungsipesawat($jenis = '') {

        $sql = "

				SELECT 

					*

				FROM 

					fungsi_barang

				WHERE

					jenis_barang_kode='$jenis'

				

					";

        //echo $sql;die();

        $query = $this->db->query("SELECT 

					*

				FROM 

					fungsi_barang

				WHERE

					idjenis='$jenis'")->result();

        $data['fungsi'] = $query;

        $this->load->view('alutsista/tni_al/pesawat_al/fungsipesawat', $data);
    }

    public function barangpesawat($fungsi = '') {

        $doffy = $this->db->query("SELECT 

					*

				FROM 

					barang

				WHERE

					idfungsi='$fungsi'")->result();

        //echo $doffy;die();
        //echo $fungsi;die();

        $data['barang'] = $doffy;

        $this->load->view('alutsista/tni_al/pesawat_al/barangpesawat', $data);
    }

//_______________________________________________________________________________________________________________________
//+----------------------------------------------------------------------------------------------------------------------+
//|----------------- RANPUR AL -------------------- RANPUR AL ------------------------RANPUR AL------------------------|
//+----------------------------------------------------------------------------------------------------------------------+



    public function ranpur_al() {

        $data['title'] = 'RANPUR AL';
        $data['link_alutsista'] = 'class="start active open"';
        $data['link_open_alutsista_al'] = 'open';
        $data['link_aktif_alutsista_al'] = 'class="active"';

        $data['data_ranpur_al'] = $this->m_ranpur_al->data_ranpur_al();

        $this->load->view('alutsista/tni_al/ranpur_al/view_ranpur_al', $data);
    }

    public function tambah_ranpur_al() {

        $data['title'] = 'RANPUR AL';
        $data['link_alutsista'] = 'class="start active open"';
        $data['link_open_alutsista_al'] = 'open';
        $data['link_aktif_alutsista_al'] = 'class="active"';

        //Dropdown Option
        $data['kesatuan'] = $this->m_ranpur_al->kesatuan_al();
        $data['jenis'] = $this->m_ranpur_al->jenis_ranpur_al();

        //Insert
        if ($this->input->post('SIMPAN')) {
            $this->m_ranpur_al->tambah_ranpur_al();
            $this->session->set_flashdata('tambah_sukses', TRUE);
            redirect('c_alutsista/ranpur_al', 'refresh');
        } else if ($this->input->post('BATAL')) {
            redirect('c_alutsista/ranpur_al', 'refresh');
        }


        $this->load->view('alutsista/tni_al/ranpur_al/form_tambah_ranpur', $data);
    }

    public function fungsiranpur($jenis = '') {
        $sql = "
				SELECT 
					*
				FROM 
					fungsi_barang
				WHERE
					jenis_barang_kode='$jenis'
				
					";
        //echo $sql;die();
        $query = $this->db->query("SELECT 
					*
				FROM 
					fungsi_barang
				WHERE
					idjenis='$jenis'")->result();
        $data['fungsi'] = $query;
        $this->load->view('alutsista/tni_al/ranpur_al/fungsiranpur', $data);
    }

    public function barangranpur($fungsi = '') {
        $doffy = $this->db->query("SELECT 
					*
				FROM 
					barang
				WHERE
					idfungsi='$fungsi'")->result();
        //echo $doffy;die();
        $data['barang'] = $doffy;
        $this->load->view('alutsista/tni_al/ranpur_al/barangranpur', $data);
    }

    public function edit_ranpur_al($id) {

        $data['title'] = 'RANPUR AL';
        $data['link_alutsista'] = 'class="start active open"';
        $data['link_open_alutsista_al'] = 'open';
        $data['link_aktif_alutsista_al'] = 'class="active"';

        $id = $this->uri->segment(3);

        //Data from model
        $data['ranpur_al'] = $this->m_ranpur_al->edit_ranpur_al($id);
        $data['kesatuan'] = $this->m_ranpur_al->kesatuan_al();
        $data['jenis'] = $this->m_ranpur_al->jenis_ranpur_al();

        foreach ($data['ranpur_al'] as $hasil) {
            $jenis_barang = $hasil->jenis_barang;
            $fungsi_barang = $hasil->fungsi;
        }

        $query = $this->db->query("
				SELECT 
                    *
                FROM 
                    fungsi_barang
                WHERE
                    idjenis='$jenis_barang'
		")->result();
        $data['fungsi3'] = $query;

        $query = $this->db->query("
				SELECT 
                    *
                FROM 
                    barang
                WHERE
                    idfungsi='$fungsi_barang'
		")->result();
        $data['barang3'] = $query;


        //update
        if ($this->input->post('SIMPAN')) {
            $this->m_ranpur_al->update_ranpur_al($id);
            $this->session->set_flashdata('update_sukses', TRUE);
            redirect('c_alutsista/ranpur_al', 'refresh');
        } else if ($this->input->post('BATAL')) {
            redirect('c_alutsista/ranpur_al', 'refresh');
        }


        $this->load->view('alutsista/tni_al/ranpur_al/form_edit_ranpur', $data);
    }

    public function delete_ranpur_al($id) {

        $id = $this->uri->segment(3);
        $this->m_ranpur_al->delete_ranpur_al($id);
        $this->session->set_flashdata('hapus_sukses', TRUE);
        redirect('c_alutsista/ranpur_al', 'refresh');
    }

//_______________________________________________________________________________________________________________________
//+----------------------------------------------------------------------------------------------------------------------+
//|----------------- KAPAL AL -------------------- RANPUR AL ------------------------RANPUR AL------------------------|
//+----------------------------------------------------------------------------------------------------------------------+





    public function kapal_al() {
        //style sidebar
        $data['link_open_alutsista'] = 'open';
        $data['link_open_alutsista_al'] = 'open';
        $data['link_aktif_alutsista_al'] = 'class="active"';
        $data['link_alutsista'] = 'class="start active open"';

        //Title
        $data['title'] = "List Data Kapal AL";

        //Data from model
        $data['jenis'] = $this->m_alutsista->jenis_kapal_al();
        $data['kesatuan'] = $this->m_alutsista->kesatuan_al();
        $data['fungsi'] = $this->m_alutsista->fungsi_al();
        $data['barang'] = $this->m_alutsista->barang_al();
        $data['kapal_al'] = $this->m_alutsista->kapal_al();

        $this->load->view('alutsista/tni_al/kapal_al/kapal_al', $data);
    }

    public function tambah_kapal_al() {
        $data['link_open_alutsista'] = 'open';
        $data['link_open_alutsista_al'] = 'open';
        $data['link_aktif_alutsista_al'] = 'class="active"';
        $data['link_alutsista'] = 'class="start active open"';
        $data['title'] = "Tambah Data Kapal AL";
        //Data from model
        $data['kesatuan'] = $this->m_alutsista->kesatuan_al();
        $data['jenis'] = $this->m_alutsista->jenis_kapal_al();

        //simpan
        if ($this->input->post('simpan')) {
            $this->m_alutsista->tambah_kapal_al();
            $id = $this->db->insert_id();
            $this->db->query("insert into kapal_al (id_dump_kapal_al,klas,nama_kapal,singkatan,no_lamb,satuan,pembina,pangkalan,tingkat_kesiapan,kondisi,keterangan,insert_date) values ('" . $id . "','" . $_POST['klas'] . "','" . $_POST['nama_kapal'] . "','" . $_POST['singkatan'] . "','" . $_POST['no_lamb'] . "','" . $_POST['satuan'] . "','" . $_POST['pembina'] . "','" . $_POST['pangkalan'] . "','" . $_POST['tingkat_kesiapan'] . "','" . $_POST['kondisi'] . "','" . $_POST['keterangan'] . "','" . $this->convertdate->convert_string_to_date($this->input->post('tgl')) . "')");
            $this->session->set_flashdata('tambah_sukses', TRUE);
            redirect('c_alutsista/kapal_al', 'refresh');
        } else if ($this->input->post('batal')) {
            redirect('c_alutsista/kapal_al', 'refresh');
        }

        $this->load->view('alutsista/tni_al/kapal_al/tambah_kapal_al', $data);
    }

    public function edit_kapal_al($id) {

        //style sidebar
        $data['link_open_alutsista'] = 'open';
        $data['link_open_alutsista_al'] = 'open';
        $data['link_aktif_alutsista_al'] = 'class="active"';
        $data['link_alutsista'] = 'class="start active open"';

        //Title    
        $data['title'] = "Edit Kapal Al";

        $id = $this->uri->segment(3);
        //Data from model
        $data['kesatuan'] = $this->m_alutsista->kesatuan_al();
        $data['jenis'] = $this->m_alutsista->jenis_kapal_al();
        $data['fungsi'] = $this->m_alutsista->fungsi_al();
        $data['barang'] = $this->m_alutsista->barang_al();
        $data['kapal_al'] = $this->m_alutsista->edit_kapal_al($id)->result();
        // echo '<pre>';
        // var_dump($data['kapal_al']);
        // var_dump($data['jenis']);
        // var_dump($data['kesatuan']);
        // echo '</pre>';
        // die();

        $id = $this->uri->segment(3);
        $data['detail_kapal_al'] = $this->m_alutsista->detail_kapal_al($id)->result();
        $this->load->view('alutsista/tni_al/kapal_al/edit_kapal_al', $data);
    }

    public function proses_edit_kapal_al() {

        $id = $this->uri->segment(3);
        //Proses Update
        if ($this->input->post('update')) {
            $this->m_alutsista->proses_edit_kapal_al($id);
//            $id = $this->db->insert_id();
            //delete_detail
            $this->db->where('id_dump_kapal_al', $id);
            $this->db->delete('kapal_al');
            $this->db->query("insert into kapal_al (id_dump_kapal_al,klas,nama_kapal,singkatan,no_lamb,satuan,pembina,pangkalan,tingkat_kesiapan,kondisi,keterangan,insert_date) values ('" . $id . "','" . $_POST['klas'] . "','" . $_POST['nama_kapal'] . "','" . $_POST['singkatan'] . "','" . $_POST['no_lamb'] . "','" . $_POST['satuan'] . "','" . $_POST['pembina'] . "','" . $_POST['pangkalan'] . "','" . $_POST['tingkat_kesiapan'] . "','" . $_POST['kondisi'] . "','" . $_POST['keterangan'] . "','" . $this->convertdate->convert_string_to_date($this->input->post('tgl')) . "')");
            $this->session->set_flashdata('update_sukses', TRUE);
            redirect('c_alutsista/kapal_al', 'refresh');
        } else if ($this->input->post('batal')) {
            redirect('c_alutsista/kapal_al', 'refresh');
        }
    }

    public function hapus_kapal_al($id) {
        $id = $this->uri->segment(3);
        $this->m_alutsista->hapus_kapal_al($id);
        $this->session->set_flashdata('hapus_sukses', TRUE);
        redirect('c_alutsista/kapal_al', 'refresh');
    }

//_______________________________________________________________________________________________________________________
//////////////////////////////////AMUNISI AL//////////////////////////////////////////////////////////	

    public function amunisi_al() {

        $data['title'] = "Amunisi TNI AL";
        $data['link_alutsista'] = 'class="start active open"';
        $data['link_open_alutsista'] = 'open';
        $data['link_aktif_alutsista_al'] = 'class="active"';

        //Data from model
        $data['jenis'] = $this->m_alutsista->jenis_amunisi_al();
        $data['kesatuan'] = $this->m_alutsista->kesatuan_al();
        $data['fungsi'] = $this->m_alutsista->fungsi_al();
        $data['barang'] = $this->m_alutsista->barang_al();
        $data['amunisi_al'] = $this->m_alutsista->amunisi_al();

        $this->load->view('alutsista/tni_al/amunisi_al/amunisi_al', $data);
    }

    public function tambah_amunisi_al() {

        $data['title'] = "Amunisi TNI AL";
        $data['link_alutsista'] = 'class="start active open"';
        $data['link_open_alutsista'] = 'open';
        $data['link_aktif_alutsista_al'] = 'class="active"';

        //Data from model
        $data['kesatuan'] = $this->m_alutsista->kesatuan_al();
        $data['jenis'] = $this->m_alutsista->jenis_amunisi_al();
        $data['senjata'] = $this->m_alutsista->jenis_senjata1_al();

        //simpan
        if ($this->input->post('simpan')) {
            $this->m_alutsista->tambah_amunisi_al();
            $id = $this->db->insert_id();
            //Fasilitas
            $jenis_senjata = $this->input->post('JENIS_SENJATA');
//            print_r($fasilitas_id);
            $jumlah_pucuk = $this->input->post('JUMLAH_PUCUK');
            $bp_pucuk = $this->input->post('BP_PUCUK');
            $arsenal_siap = $this->input->post('ARSENAL_SIAP');
            $arsenal_tdk_siap = $this->input->post('ARSENAL_TDK_SIAP');
            $satkai_siap = $this->input->post('SATKAI_SIAP');
            $satkai_tdk_siap = $this->input->post('SATKAI_TDK_SIAP');

            //	print_r($persediaan_satuan);
            //	print_r($insert_date);die();

            foreach ($jenis_senjata as $key => $value) {
                $this->db->query('insert into amunisi_al (id_dump_amunisi_al,jenis_senjata,jml_barang,bp_barang,arsenal_siap,arsenal_tdk_siap,satkai_siap,satkai_tdk_siap) values (\'' . $id . '\',\'' . $jenis_senjata[$key] . '\',\'' . $jumlah_pucuk[$key] . '\',\'' . $bp_pucuk[$key] . '\',\'' . $arsenal_siap[$key] . '\',\'' . $arsenal_tdk_siap[$key] . '\',\'' . $satkai_siap[$key] . '\',\'' . $satkai_tdk_siap[$key] . '\')');
                //  echo 'insert into amunisi_al (id_dump_amunisi_al,jenis_senjata,jml_barang,bp_barang,arsenal_siap,arsenal_tdk_siap,satkai_siap,satkai_tdk_siap,insert_date) values (\'' . $id . '\',\'' . $jenis_senjata[$key] . '\',\'' . $jumlah_pucuk[$key] . '\',\'' . $bp_pucuk[$key] . '\',\'' . $arsenal_siap[$key] . '\',\'' . $arsenal_tdk_siap[$key] . '\',\'' . $satkai_siap[$key] . '\',\'' . $satkai_tdk_siap[$key] . '\',\'' . $insert_date . '\')'; die();
            }
            $this->session->set_flashdata('tambah_sukses', TRUE);
            redirect('c_alutsista/amunisi_al', 'refresh');
        } else if ($this->input->post('batal')) {
            redirect('c_alutsista/amunisi_al', 'refresh');
        }

        $this->load->view('alutsista/tni_al/amunisi_al/tambah_amunisi_al', $data);
    }

    public function edit_amunisi_al($id) {

        $data['title'] = "Amunisi TNI AL";
        $data['link_alutsista'] = 'class="start active open"';
        $data['link_open_alutsista'] = 'open';
        $data['link_aktif_alutsista_al'] = 'class="active"';

        $id = $this->uri->segment(3);
        //Data from model
        $data['kesatuan'] = $this->m_alutsista->kesatuan_al();
        $data['jenis'] = $this->m_alutsista->jenis_amunisi_al();
        $data['fungsi'] = $this->m_alutsista->fungsi_al();
        $data['barang'] = $this->m_alutsista->barang_al();
        $data['senjata'] = $this->m_alutsista->jenis_senjata1_al();
        $data['amunisi'] = $this->m_alutsista->edit_amunisi_al($id)->result();


        $id = $this->uri->segment(3);
        $data['detail_amunisi_al'] = $this->db->query('select * from amunisi_al where id_dump_amunisi_al = ' . $id . '')->result();
        $this->load->view('alutsista/tni_al/amunisi_al/edit_amunisi_al', $data);
    }

    public function proses_edit_amunisi_al() {

        $id = $this->uri->segment(3);
        //Proses Update
        if ($this->input->post('update')) {
            $this->m_alutsista->proses_edit_amunisi_al($id);
            //amunisi_detail
            $jenis_senjata = $this->input->post('JENIS_SENJATA');
//            print_r($fasilitas_id);
            $jumlah_pucuk = $this->input->post('JUMLAH_PUCUK');
            $bp_pucuk = $this->input->post('BP_PUCUK');
            $arsenal_siap = $this->input->post('ARSENAL_SIAP');
            $arsenal_tdk_siap = $this->input->post('ARSENAL_TDK_SIAP');
            $satkai_siap = $this->input->post('SATKAI_SIAP');
            $satkai_tdk_siap = $this->input->post('SATKAI_TDK_SIAP');
            //delete_detail
            $this->db->where('id_dump_amunisi_al', $id);
            $this->db->delete('amunisi_al');
            //insert_detail
            foreach ($jenis_senjata as $key => $value) {
                $this->db->query('insert into amunisi_al (id_dump_amunisi_al,jenis_senjata,jml_barang,bp_barang,arsenal_siap,arsenal_tdk_siap,satkai_siap,satkai_tdk_siap) values (\'' . $id . '\',\'' . $jenis_senjata[$key] . '\',\'' . $jumlah_pucuk[$key] . '\',\'' . $bp_pucuk[$key] . '\',\'' . $arsenal_siap[$key] . '\',\'' . $arsenal_tdk_siap[$key] . '\',\'' . $satkai_siap[$key] . '\',\'' . $satkai_tdk_siap[$key] . '\')');
                // echo 'insert into amunisi_au (id_dump_amunisi_au,jenis_senjata,jml_barang,bp_barang,persediaan_pusat,persediaan_satuan,insert_date) values (\'' . $id . '\',\'' . $jenis_senjata[$key] . '\',\'' . $jumlah_pucuk[$key] . '\',\'' . $bp_pucuk[$key] . '\',\'' . $persediaan_pusat[$key] . '\',\'' . $persediaan_satuan[$key] . '\',\'' . $insert_date . '\')'; die();
            }
            $this->session->set_flashdata('update_sukses', TRUE);
            redirect('c_alutsista/amunisi_al', 'refresh');
        } else if ($this->input->post('batal')) {
            redirect('c_alutsista/amunisi_al', 'refresh');
        }
    }

    public function hapus_amunisi_al($id) {
        $id = $this->uri->segment(3);
        $this->m_alutsista->hapus_amunisi_al($id);
        $this->session->set_flashdata('hapus_sukses', TRUE);
        redirect('c_alutsista/amunisi_al', 'refresh');
    }

    //CETAK AMUNISI AL

    public function laporan_amunisi_al() {
        
        
        if (!empty($_POST['kesatuan'])) {
            $kesat = ' WHERE id_kesatuan=' . $_POST['kesatuan'] . '';
        } else {
            $kesat = " WHERE id_kesatuan like '%'";
        }

        if (!empty($_POST['jenis'])) {
            $jns = ' AND id_jenis=' . $_POST['jenis'] . '';
        } else {
            $jns = " AND id_jenis like '%'";
        }

        if (!empty($_POST['fungsi'])) {
            $fungsi = ' AND id_fungsi=' . $_POST['fungsi'] . '';
        } else {
            $fungsi = " AND id_fungsi like '%'";
        }

        if (!empty($_POST['barang'])) {
            $brg = ' AND id_barang=' . $_POST['barang'] . '';
        } else {
            $brg = " AND id_barang like '%'";
        }

        if (!empty($_POST['tahun'])) {
            $tahun = ' AND YEAR(insert_date)=' . $_POST['tahun'] . '';
        } else {
            $tahun = " AND YEAR(insert_date) like '%'";
        }

        $where = $kesat . $jns . $fungsi . $brg . $tahun;
        
        $data['tahun'] = $this->m_grafic->tahun_senjataal();
        
        //style sidebar
        $data['link_open_laporan'] = 'open';
        $data['link_open_laporan_al'] = 'open';
        $data['link_aktif_laporan_al'] = 'class="active"';
        $data['link_laporan'] = 'class="start active open"';

        //Title
        $data['title'] = "Laporan Amunisi TNI AL";

        //Data from model
        $data['jenis'] = $this->m_alutsista->jenis_amunisi_al();
        $data['kesatuan'] = $this->m_alutsista->kesatuan_al();
        $data['fungsi'] = $this->m_alutsista->fungsi_al();
        $data['barang'] = $this->m_alutsista->barang_al();
        $data['amunisi_al'] = $this->m_alutsista->laporan_amunisi_al($where);

        $this->load->view('alutsista/tni_al/amunisi_al/laporan_amunisi_al', $data);
    }

    public function cetak_amunisi_al() {
        //tittle
        $data['tittle'] = "Cetak Pesawat al";
        //Data From Model

        $query = $this->db->query("SELECT 
					a.*,
					a.id as idamunisi,
					b.*,
					c.*,
					d.*,
					e.*
				FROM 
					amunisi_dump_al a,
					kesatuan b,
					jenis_barang c,
					fungsi_barang d,
					barang e
					
				WHERE
					a.id_kesatuan=b.id and
					a.id_jenis=c.id and
					a.id_fungsi=d.id and
					a.id_barang=e.id
					
					
					")->result();
        $data['model'] = $query;
        $query3 = $this->db->query("SELECT 
					a.*,
					a.id as idamunisi,
					b.*,
					c.*,
					d.*
				FROM 
					amunisi_dump_al a,
					kesatuan b,
					jenis_barang c,
					fungsi_barang d
					
				WHERE
					a.id_kesatuan=b.id and
					a.id_jenis=c.id and
					a.id_fungsi=d.id 
					
					
					")->result();
        $data['kesatuan'] = $query3;
        $query2 = $this->db->query("SELECT a . * ,a.keterangan as keter, b . * , c . *
									FROM amunisi_al a, amunisi_dump_al b, barang c
									WHERE a.id_dump_amunisi_al = b.id
											AND a.jenis_senjata = c.id
					
					
					")->result();
        $data['detail'] = $query2;
        $this->load->view('cetak_tnial/munisi/cetak', $data);
    }

//////////////////////////////////END AMUNISI AL//////////////////////////////////
}

?>