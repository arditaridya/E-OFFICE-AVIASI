<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Main_menu extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_user');
        $this->load->model('m_jenisdidik');
        $this->load->model('m_profesi');
        $this->load->model('m_pangkat');
        $this->load->model('m_korps');
        $this->load->model('m_spesialisasi');
        $this->load->model('m_kualifikasi');
        $this->load->model('m_main_menu');
        $this->load->model('m_sdm_data');
        $this->load->model('m_sdab_data');
        $this->load->model('m_sapras_data');
        $this->load->model('m_profesi');
        session_start();
        if ($this->session->userdata('level') == null) {
            $this->session->set_flashdata('session_expired', TRUE);
            redirect('login');
        }
    }

    public function penerbang_awak_pesawat() {
        header('Content-type: text/json');
        header('Content-type: application/json');
        $id = $_GET['id'];


        $data['kategori_dalam_penerbang'] = $this->m_main_menu->get_nama_kategori_penerbang()->result();
        //print_r($data['kategori_dalam_penerbang']);die();
//        $data['korps_dalam_penerbang'] = $this->m_main_menu->get_nama_korsp()->result();
        $data['jumlah_korps_penerbang'] = $this->m_main_menu->get_jumlah_korps_penerbang_awak_pesawat()->result();
        $data['jumlah_korps_navigator'] = $this->m_main_menu->get_jumlah_korps_navigator_awak_pesawat()->result();
        $data['jumlah_tni'] = $this->m_main_menu->get_jumlah_tni_penerbang_awak_pesawat()->result();
        $data['jumlah_non_tni'] = $this->m_main_menu->get_jumlah_non_tni_penerbang_awak_pesawat()->result();
        $data['jumlah_profesi_tempur_penerbang'] = $this->m_main_menu->get_jumlah_profesi_tempur_penerbang_awak_pesawat()->result();
        $data['jumlah_profesi_angkut_penerbang'] = $this->m_main_menu->get_jumlah_profesi_angkut_penerbang_awak_pesawat()->result();
        $data['jumlah_profesi_latih_penerbang'] = $this->m_main_menu->get_jumlah_profesi_latih_penerbang_awak_pesawat()->result();
        $data['jumlah_profesi_heli_penerbang'] = $this->m_main_menu->get_jumlah_profesi_heli_penerbang_awak_pesawat()->result();
        $data['jumlah_profesi_tempur_wing_man_penerbang'] = $this->m_main_menu->get_jumlah_profesi_tempur_wing_man_penerbang_awak_pesawat()->result();
        $data['jumlah_profesi_tempur_elemen_leader_penerbang'] = $this->m_main_menu->get_jumlah_profesi_tempur_elemen_leader_penerbang_awak_pesawat()->result();
        $data['jumlah_profesi_tempur_instruktur_penerbang'] = $this->m_main_menu->get_jumlah_profesi_tempur_instruktur_penerbang_awak_pesawat()->result();
        $data['jumlah_profesi_tempur_fl_leader_penerbang'] = $this->m_main_menu->get_jumlah_profesi_tempur_fl_leader_penerbang_awak_pesawat()->result();
        $data['jumlah_profesi_tempur_uji_fungsi_penerbang'] = $this->m_main_menu->get_jumlah_profesi_tempur_uji_fungsi_penerbang_awak_pesawat()->result();
        $data['jumlah_profesi_tempur_check_pilot_penerbang'] = $this->m_main_menu->get_jumlah_profesi_tempur_check_pilot_penerbang_awak_pesawat()->result();
        $data['jumlah_profesi_tempur_fight_weapon_penerbang'] = $this->m_main_menu->get_jumlah_profesi_tempur_fight_weapon_penerbang_awak_pesawat()->result();
        $data['profil_pilot_tempur_wing_man_penerbang_tni'] = $this->m_main_menu->get_profil_tempur_wing_man_penerbang_tni()->result();

        //echo "<pre>";
        //print_r($data['kategori_dalam_penerbang']);die();
        //echo "</pre>";
//        print_r($data['profil_pilot_tempur_wing_man_penerbang_tni']);die();
//        print_r($data['kategori_dalam_penerbang']);die();
//        print_r($data['korps_dalam_penerbang']);die();
//        echo json_encode($data['kategori_dalam_penerbang']);
//        $arr = array($data['kategori_dalam_penerbang'][0], $data['kategori_dalam_penerbang'][1]);
        $arr = array();
        if ($id == '#') {
//            for ($a = 0; $a<count($data['kategori_dalam_penerbang']); $a++) {
//                if ($data['kategori_dalam_penerbang'][$a]->children == TRUE) {
//                    $data['kategori_dalam_penerbang'][$a]->children = TRUE;
//                } else {
//                    $data['kategori_dalam_penerbang'][$a]->children = FALSE;
//                }
//            }
            //jika 'children' : 'true' maka 'children' : true
            if ($data['kategori_dalam_penerbang'][0]->children == TRUE) {
                $data['kategori_dalam_penerbang'][0]->children = TRUE;
            } else {
                $data['kategori_dalam_penerbang'][0]->children = FALSE;
            }
//            if ($data['kategori_dalam_penerbang'][1]->children == TRUE) {
//                $data['kategori_dalam_penerbang'][1]->children = TRUE;
//            } else {
//                $data['kategori_dalam_penerbang'][1]->children = FALSE;
//            }
//            $arr = array($data['kategori_dalam_penerbang'][0], $data['kategori_dalam_penerbang'][1], $data['kategori_dalam_penerbang'][2]);
            $arr = array($data['kategori_dalam_penerbang'][0]);
        } else {
            if ($id == $data['kategori_dalam_penerbang'][0]->id) {
                $arr = array(
                    array('id' => "1", 'text' => 'TNI [' . $data['jumlah_tni'][0]->count . ']', 'children' => TRUE),
                    array('id' => "2", 'text' => 'Non TNI [' . $data['jumlah_non_tni'][0]->count . ']', 'children' => TRUE)
                );
            } else if ($id == "1") {
                $no = 60000;
                foreach ($data['profil_pilot_tempur_wing_man_penerbang_tni'] as $value) {
                    $arr = array(
                        array('id' => $no, 'text' => '<a style="text-decoration:none;" href="#" onClick="MM_openBrWindow(\'' . site_url('main_menu/detail_sdm_pilot_tempur_wing_man_penerbang_tni/' . $value->SDMKTNI_ID . '') . '\',\'Pilot\',\'scrollbars=yes,width=1200,height=900\')">' . $value->NAMA . ' <span><i class="fa fa-search-plus"></i></span></a>', 'icon' => 'fa fa-user icon-state-success', 'children' => FALSE),
                        array('id' => $no, 'text' => '<a style="text-decoration:none;" href="#" onClick="MM_openBrWindow(\'' . site_url('main_menu/detail_sdm_pilot_tempur_wing_man_penerbang_tni/' . $value->SDMKTNI_ID . '') . '\',\'Pilot\',\'scrollbars=yes,width=1200,height=900\')">' . $value->NAMA . ' <span><i class="fa fa-search-plus"></i></span></a>', 'icon' => 'fa fa-user icon-state-success', 'children' => FALSE)
                    );
                    $no++;
                }
            }
        }
        echo json_encode($arr);
    }

    public function penyiap_pemelihara_pesawat() {
        header('Content-type: text/json');
        header('Content-type: application/json');
        $id = $_GET['id'];

        $arr = array();
        if ($id == '#') {
            for ($a = 0; $a < count($data['kategori_dalam_penerbang']); $a++) {
                if ($data['kategori_dalam_penerbang'][$a]->children == TRUE) {
                    $data['kategori_dalam_penerbang'][$a]->children = TRUE;
                } else {
                    $data['kategori_dalam_penerbang'][$a]->children = FALSE;
                }
            }
            $arr = array($data['kategori_dalam_penerbang'][1]);
        } else {
            
        }
        echo json_encode($arr);
    }

    public function index() {
        if ($this->session->userdata('level') == '1') {
            $this->su();
        } else if ($this->session->userdata('level') == '2') {
            $this->admin();
        } else if ($this->session->userdata('level') == '3') {
            $this->pimpinan();
        }
    }

    public function su() {
        if ($this->session->userdata('level') != '1') {
            redirect('login');
        }
        $data['main_menu'] = "Main Menu Super User";
        $this->load->view('main_menu/view_main_menu', $data);
    }

    public function admin() {
        if ($this->session->userdata('level') != '2') {
            redirect('login');
        }
        $data['main_menu'] = "Main Menu Administrator";
        $this->load->view('main_menu/view_main_menu', $data);
    }

    public function pimpinan() {
        if ($this->session->userdata('level') != '3') {
            redirect('login');
        }  
        $data['m'] = $this->tree(1);
        $data['luar'] = $this->tree(2);
        $data['sdab'] = $this->tree_sdab();
        $data['sapras'] = $this->tree_sapras();
        $data['dlm_penerbangan'] = $this->m_sdm_data->sdm_dashboard_data_dalam_penerbang();
        $data['luar_penerbangan'] = $this->m_sdm_data->sdm_dashboard_data_luar_penerbang();
        $data['profesi_personil'] = $this->m_main_menu->get_profesi_personil();
        $data['profesi_personil_luar'] = $this->m_main_menu->get_profesi_personil_luar();
        $data['main_menu'] = "Main Menu Pimpinan";
        $this->load->view('main_menu/view_main_menu_pimpinan', $data);
    }

    function get_menu($data, $parent = 0) {
        static $i = 1;
        $tab = str_repeat(" ", $i);
        if (isset($data[$parent])) {
            $html = "$tab<ul>";
            $i++;
            foreach ($data[$parent] as $v) {
                $child = $this->get_menu($data, $v->temp);
                if ((int) $v->parent_id != 0) {
                    $html .= $tab . '
                            <li data-jstree=\'{"icon" : "fa fa-arrow-circle-right icon-state-success" }\'>
                            <a style="text-decoration:none;" href="#" onClick="MM_openBrWindow(\'' . base_url() . 'main_menu/detail_sdm/' . $v->sdm_id . '\', \'\', \'scrollbars=yes,width=1200,height=900\')">
                                ' . $v->judul . '
                                <span><i class="fa fa-search-plus"></i>
                                </span></a>
                            ';
                } else {
                    $html .= "$tab<li>";
                    $html .=$v->judul;
                }
                if ($child) {
                    $i--;
                    $html .= $child;
                    $html .= "$tab";
                }
                $html .= '</li>';
            }
            $html .= "$tab</ul>";
            return $html;
        } else {
            return false;
        }
    }

    function get_tree_sdab($data, $parent = 0) {
        static $i = 1;
        $tab = str_repeat(" ", $i);
        if (isset($data[$parent])) {
            $html = "$tab<ul>";
            $i++;
            foreach ($data[$parent] as $v) {
                $child = $this->get_tree_sdab($data, $v->id_menu);
                if ((int) $v->parent_id != 0) {
                    $html .= $tab . '
                            <li data-jstree=\'{"icon" : "fa fa-arrow-circle-right icon-state-success" }\'>
                            <a style="text-decoration:none;" href="#" onClick="MM_openBrWindow(\'' . base_url() . 'main_menu/detail_sdab/' . $v->sdab_id . '\', \'\', \'scrollbars=yes,width=1200,height=900\')">
                                ' . $v->menu . '
                                <span><i class="fa fa-search-plus"></i>
                                </span></a>
                            ';
                } else {
                    $html .= "$tab<li>";
                    $html .=$v->menu;
                }
                if ($child) {
                    $i--;
                    $html .= $child;
                    $html .= "$tab";
                }
                $html .= '</li>';
            }
            $html .= "$tab</ul>";
            return $html;
        } else {
            return false;
        }
    }

    function get_tree_sapras($data, $parent = 0) {
        static $i = 1;
        $tab = str_repeat(" ", $i);
        if (isset($data[$parent])) {
            $html = "$tab<ul>";
            $i++;
            foreach ($data[$parent] as $v) {
                $child = $this->get_tree_sapras($data, $v->id_menu);
                if ((int) $v->parent_id != 0) {
                    $html .= $tab . '
                            <li data-jstree=\'{"icon" : "fa fa-arrow-circle-right icon-state-success" }\'>
                            <a style="text-decoration:none;" href="#" onClick="MM_openBrWindow(\'' . base_url() . 'main_menu/detail_sapras/' . $v->sapras_id . '\', \'\', \'scrollbars=yes,width=1200,height=900\')">
                                ' . $v->menu . '
                                <span><i class="fa fa-search-plus"></i>
                                </span></a>
                            ';
                } else {
                    $html .= "$tab<li>";
                    $html .=$v->menu;
                }
                if ($child) {
                    $i--;
                    $html .= $child;
                    $html .= "$tab";
                }
                $html .= '</li>';
            }
            $html .= "$tab</ul>";
            return $html;
        } else {
            return false;
        }
    }

    public function sdm() {
        if ($this->session->userdata('level') != '3') {
            redirect('login');
        }
        $data['main_menu'] = "Main Menu SDM";
        $this->load->view('main_menu/view_main_menu', $data);
    }

    public function sdab() {
        if ($this->session->userdata('level') != '3') {
            redirect('login');
        }
        $data['main_menu'] = "Main Menu SDAB";
        $this->load->view('main_menu/view_main_menu', $data);
    }

    public function sapras() {
        if ($this->session->userdata('level') != '3') {
            redirect('login');
        }
        $data['main_menu'] = "Main Menu Sarana & Prasarana";
        $this->load->view('main_menu/view_main_menu', $data);
    }

    //laporan untuk pimpinan
    public function detail_sdm_tni($id) {
        $data['title'] = "SDM";
        $kat = (int) $this->m_sdm_data->get_kategori_tni($id)->KATEGORI_ID;
        if ($kat == 1) {
            $data['ket'] = "Dalam Bidang Penerbangan";
        } else {
            $data['ket'] = "Luar Bidang Penerbangan";
        }
        $data['jenis_didik'] = $this->m_jenisdidik->get_jenisdidik_by($id)->result();
        $data['pangkat'] = $this->m_pangkat->get_pangkat()->result();
        $data['prof'] = $this->m_profesi->get_profesi_id($id)->PROFESI_NAMA;
        $data['profesi'] = $this->m_profesi->get_profesi()->result();
        $data['korps'] = $this->m_korps->get_korps()->result();
        $data['spesialisasi'] = $this->m_spesialisasi->get_spesialisasi()->result();
        $data['kualifikasi'] = $this->m_kualifikasi->get_kualifikasi()->result();
        $data['sdm_pilot_tempur_wing_man_penerbang_tni'] = $this->m_main_menu->get_profil_lengkap_tempur_wing_man_penerbang_tni($id)->result();
        $this->load->view('sdm_detail/view_detail_sdm_tni', $data);
    }

    function detail_sdm_umum($id) {
        $data['title'] = "SDM";
        $kat = (int) $this->m_sdm_data->get_kategori_umum($id)->KATEGORI_ID;
        if ($kat == 1) {
            $data['ket'] = "Dalam Bidang Penerbangan";
        } else {
            $data['ket'] = "Luar Bidang Penerbangan";
        }
        $data['jenis_didik'] = $this->m_jenisdidik->get_jenisdidik_by($id)->result();
        $data['prof'] = $this->m_profesi->get_profesi_id_luar($id)->PROFESI_NAMA;
        $data['spesialisasi'] = $this->m_spesialisasi->get_spesialisasi()->result();
        $data['kualifikasi'] = $this->m_kualifikasi->get_kualifikasi()->result();
        $data['sdm_pilot_tempur_wing_man_penerbang_tni'] = $this->m_main_menu->get_profil_lengkap($id)->result();
        $this->load->view('sdm_detail/view_detail_sdm_umum', $data);
    }

    function detail_sdm() {
        $id = $this->uri->segment(3);
        $jenis = (int) $this->m_profesi->get_jenis_id($id)->TNI_UMUM;
        if ($jenis == 1) {
            $this->detail_sdm_tni($id);
        } else {
            $this->detail_sdm_umum($id);
        }
    }

    function detail_sdab() {
        $id = $this->uri->segment(3);
        $data['title'] = "SDAB";
        $data['jenis'] = $this->m_sdab_data->kat_sdab($id)->jenis;
        $data['nama_sdab'] = $this->m_sdab_data->kat_sdab($id)->menu;
        $data['sdab'] = $this->m_sdab_data->get_sdab($id);
        $this->load->view('sdab_detail/view_sdab_detail', $data);
    }

    function detail_sapras() {
        $id = $this->uri->segment(3);
        $data['title'] = "SAPRAS";
        $data['fasilitas'] = $this->m_sapras_data->fas_sapras($id)->fasilitas;
        $data['nama_sapras'] = $this->m_sapras_data->fas_sapras($id)->menu;
        $data['fas'] = $this->m_sapras_data->get_fasilitas();
        $data['sapras'] = $this->m_sapras_data->get_sapras($id);
        $this->load->view('sapras_detail/view_sapras_detail', $data);
    }

    public function detail_penggemar_olahraga() {
        $data['title'] = "SDM";
        $this->load->view('sdm_detail/view_detail_penggemar_olahraga', $data);
    }

    public function detail_jalur_penerbangan() {
        $data['title'] = "SDM";
        $this->load->view('sdm_detail/view_detail_jalur_penerbangan', $data);
    }

    public function detail_bandara_helipad() {
        $data['title'] = "SDM";
        $this->load->view('sdm_detail/view_detail_bandara_helipad', $data);
    }

    function upload() {
        $this->load->view('upload');
    }

    function proses_upload() {
        $config['upload_path'] = "./uploads/SDM/"; //lokasi folder yang akan digunakan untuk menyimpan file
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '4000';
        $config['max_width'] = '4000';
        $config['max_height'] = '4000';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('UPLOAD_DOK')) {
            $files = "";
        } else {
            $file = $this->upload->data();
            $files = $file['file_name'];
        }
    }

    function tree($kat) {
        $profesi = $this->m_profesi->get_profesi_kat($kat);
        $html = '<ul>';
        foreach ($profesi as $row) {
            $jumlah = $this->m_profesi->get_jumlah_personil($row->PROFESI_ID);
            $html .='<li>' . $row->PROFESI_NAMA.' (<b>'.$jumlah.' Personil</b>)';
            $html .='<ul>';
            $jumlah = $this->m_profesi->get_jumlah($row->PROFESI_ID, '1');
            $html .='<li>TNI (<b>'.$jumlah.' Personil</b>)';
            $kualifikasi = $this->m_kualifikasi->get_kualifikasi_id($row->PROFESI_ID);
            $html .='<ul>';
            foreach ($kualifikasi as $row_k) {
                $jumlah = $this->m_kualifikasi->get_jumlah_personil($row_k->KUALIFIKASI_ID,'1');
                $html .='<li>' . $row_k->KUALIFIKASI_NAMA.' (<b>'.$jumlah.' Personil</b>)';
                $html .='<ul>';
                $sdm = $this->m_sdm_data->get_sdm($row_k->KUALIFIKASI_ID, '1');
                foreach ($sdm as $row_sdm) {
                    $html .='<li data-jstree=\'{"icon" : "fa fa-arrow-circle-right icon-state-success" }\'>
                            <a style="text-decoration:none;" href="#" onClick="MM_openBrWindow(\'' . base_url() . 'main_menu/detail_sdm/' . $row_sdm->sdm_id . '\', \'\', \'scrollbars=yes,width=1200,height=900\')">
                                ' . $row_sdm->nama . '
                                <span><i class="fa fa-search-plus"></i>
                                </span></a>
                            ';
                }
                $html .='</ul>';
                $html .='</li>';
            }
            $html .='</ul>';
            $html .='</li>';
            
            $jumlah = $this->m_profesi->get_jumlah($row->PROFESI_ID, '2');
            $html .='<li>Non TNI (<b>'.$jumlah.' Personil</b>)';
            $kualifikasi = $this->m_kualifikasi->get_kualifikasi_id($row->PROFESI_ID);
            $html .='<ul>';
            foreach ($kualifikasi as $row_k) {
                $jumlah = $this->m_kualifikasi->get_jumlah_personil($row_k->KUALIFIKASI_ID, '2');
                $html .='<li>' . $row_k->KUALIFIKASI_NAMA.' (<b>'.$jumlah.' Personil</b>)';
                $html .='<ul>';
                $sdm = $this->m_sdm_data->get_sdm($row_k->KUALIFIKASI_ID, '2');
                foreach ($sdm as $row_sdm) {
                    $html .='<li data-jstree=\'{"icon" : "fa fa-arrow-circle-right icon-state-success" }\'>
                            <a style="text-decoration:none;" href="#" onClick="MM_openBrWindow(\'' . base_url() . 'main_menu/detail_sdm/' . $row_sdm->sdm_id . '\', \'\', \'scrollbars=yes,width=1200,height=900\')">
                                ' . $row_sdm->nama . '
                                <span><i class="fa fa-search-plus"></i>
                                </span></a>
                            ';
                }
                $html .='</ul>';
                $html .='</li>';
            }
            $html .='</ul>';
            $html .= '</li>';
            $html .='</ul>';
            $html .='</li>';
        }

        $html .= '</ul>';

        return $html;
    }

    function tree_sdab(){
        $jenis = $this->m_sdab_data->jenis_sdab();
        $html = '<ul>';
        foreach ($jenis->result() as $row){
            $jumlah = $this->m_sdab_data->get_jumlah($row->JENISSDAB_ID);
            $html .='<li>' . $row->NAMA_SDAB.' (<b>'.$jumlah.' SDAB</b>)';
                $html .='<ul>';
                $sdab = $this->m_sdab_data->get_sdab_by_jenis($row->JENISSDAB_ID);
                foreach ($sdab as $row_s){
                    $html .='<li data-jstree=\'{"icon" : "fa fa-arrow-circle-right icon-state-success" }\'>
                            <a style="text-decoration:none;" href="#" onClick="MM_openBrWindow(\'' . base_url() . 'main_menu/detail_sdab/' . $row_s->SDAB_ID . '\', \'\', \'scrollbars=yes,width=1200,height=900\')">
                                ' . $row_s->SDAB_NAMA . '
                                <span><i class="fa fa-search-plus"></i>
                                </span></a>
                            ';
                }
                $html .='</ul>';
            $html .='</li>';
        }
        $html .= '</ul>';
        
        return $html;
    }
    
    function tree_sapras(){
        $fasilitas = $this->m_sapras_data->get_fasilitas();
         $html = '<ul>';
          foreach ($fasilitas->result() as $row){
            $jumlah = $this->m_sapras_data->get_jumlah($row->FASILITAS_ID);
            $html .='<li>' . $row->FASILITAS_NAMA.' (<b>'.$jumlah.' SAPRAS</b>)';
                $html .='<ul>';
                $sdab = $this->m_sapras_data->get_sdab_by_fasilitas($row->FASILITAS_ID);
                foreach ($sdab as $row_s){
                    $html .='<li data-jstree=\'{"icon" : "fa fa-arrow-circle-right icon-state-success" }\'>
                            <a style="text-decoration:none;" href="#" onClick="MM_openBrWindow(\'' . base_url() . 'main_menu/detail_sapras/' . $row_s->SAPRAS_ID . '\', \'\', \'scrollbars=yes,width=1200,height=900\')">
                                ' . $row_s->NAMA_INSTANSI . '
                                <span><i class="fa fa-search-plus"></i>
                                </span></a>
                            ';
                }
                $html .='</ul>';
            $html .='</li>';
        }
        $html .= '</ul>';
        return $html;
    }
}

?>
