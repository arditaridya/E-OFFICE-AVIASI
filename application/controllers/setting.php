<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Setting extends CI_Controller {

    public function __construct() {
        parent::__construct();
        session_start();
       if ($this->session->userdata('level') == null or $this->session->userdata('level') == '3') {
            $this->session->set_flashdata('session_expired', TRUE);
            redirect('login');
        }

        $this->load->model('m_modul');
        $this->load->model('m_group');
        $this->load->model('m_user');
        $this->load->model('m_role');
    }

    public function index() {
        $this->pengaturan_modul();
    }

    public function pengaturan_modul() {
        $data['title'] = "SDM";
        $data['link_open_setting_sdm'] = 'open';
        $data['link_setting_sdm'] = 'class="start active open"';
        $data['menu'] = $this->m_modul->get_modul();
        $this->load->view('privilege/Modul', $data);
    }

    public function tambah_modul() {
        $data['title'] = "SDM";
        $data['link_open_setting_sdm'] = 'open';
        $data['link_setting_sdm'] = 'class="start active open"';
        if ($this->input->post('simpan')) {
            $this->m_modul->tambah_modul();
            $this->session->set_flashdata('tambah_sukses', TRUE);
            redirect('setting/pengaturan_modul', 'refresh');
            die();
        } else if ($this->input->post('batal')) {
            redirect('setting/pengaturan_modul', 'refresh');
        }
        $data['menu'] = $this->m_modul->get_modul();
        $this->load->view('privilege/tambah_modul', $data);
    }

    public function edit_modul($id = NULL) {
        if (is_null($id)) {
            show_404();
        } else {
            $data['title'] = "SDM";
            $data['link_open_setting_sdm'] = 'open';
            $data['link_setting_sdm'] = 'class="start active open"';
            $data['menu'] = $this->m_modul->update_modul($id)->result();
            $data['menuall'] = $this->m_modul->get_modul();
            $this->load->view('privilege/edit_modul', $data);
        }
    }

    public function proses_update_modul() {

        $data['title'] = "SDM";
        $data['link_open_setting_sdm'] = 'open';
        $data['link_setting_sdm'] = 'class="start active open"';
        $id = $this->uri->segment(3);
        if ($this->input->post('update')) {
            $this->m_modul->proses_update_modul($id);
            $this->session->set_flashdata('update_sukses', TRUE);
            redirect('setting/pengaturan_modul', 'refresh');
        } else if ($this->input->post('batal')) {
            redirect('setting/pengaturan_modul', 'refresh');
        }
    }

    public function hapus_modul($id) {
        $id = $this->uri->segment(3);
        $this->m_modul->hapus_modul($id);
        $this->session->set_flashdata('hapus_sukses', TRUE);
        redirect('setting/pengaturan_modul', 'refresh');
    }

    //view pengaturan group
    public function pengaturan_group() {
        $data['title'] = "SDM";
        $data['link_open_setting_sdm'] = 'open';
        $data['link_setting_sdm'] = 'class="start active open"';
        $data['group'] = $this->m_group->get_group();
        $this->load->view('privilege/Group', $data);
    }

    public function tambah_group() {
        $data['title'] = "SDM";
        $data['link_open_setting_sdm'] = 'open';
        $data['link_setting_sdm'] = 'class="start active open"';
        if ($this->input->post('simpan')) {
            $this->m_group->tambah_group();
            $this->session->set_flashdata('tambah_sukses', TRUE);
            redirect('setting/pengaturan_group', 'refresh');
            die();
        } else if ($this->input->post('batal')) {
            redirect('setting/pengaturan_group', 'refresh');
        }
        $data['group'] = $this->m_group->get_group();
        $this->load->view('privilege/tambah_group', $data);
    }

    public function edit_group($id = NULL) {
        if (is_null($id)) {
            show_404();
        } else {
            $data['title'] = "SDM";
            $data['link_open_setting_sdm'] = 'open';
            $data['link_setting_sdm'] = 'class="start active open"';
            $data['group'] = $this->m_group->update_group($id)->result();
            $data['menuall'] = $this->m_group->get_group();
            $this->load->view('privilege/edit_group', $data);
        }
    }

    public function proses_update_group() {

        $data['title'] = "SDM";
        $data['link_open_setting_sdm'] = 'open';
        $data['link_setting_sdm'] = 'class="start active open"';
        $id = $this->uri->segment(3);
        if ($this->input->post('update')) {
            $this->m_group->proses_update_group($id);
            $this->session->set_flashdata('update_sukses', TRUE);
            redirect('setting/pengaturan_group', 'refresh');
        } else if ($this->input->post('batal')) {
            redirect('setting/pengaturan_group', 'refresh');
        }
    }

    public function hapus_group($id) {
        $id = $this->uri->segment(3);
        $this->m_group->hapus_group($id);
        $this->session->set_flashdata('hapus_sukses', TRUE);
        redirect('setting/pengaturan_group', 'refresh');
    }

    public function pengaturan_role() {
        $data['title'] = "SDM";
        $data['link_open_setting_sdm'] = 'open';
        $data['link_setting_sdm'] = 'class="start active open"';
        $data['group'] = $this->m_role->get_group();
        $data['modul'] = $this->m_role->get_modul();
        $data['role'] = $this->m_role->get_role();
        $this->load->view('privilege/Role', $data);
    }

    public function tambah_role() {
        $data['title'] = "Setting";
          $data['link_open_setting_sdm'] = 'open';
          $data['link_setting_sdm'] = 'class="start active open"';

        if ($this->input->post('simpan')) {

            $id = $this->input->post('id');
            $tambah = $this->input->post('tambah');
            $tampil = $this->input->post('tampil');
            $update = $this->input->post('update');
            $hapus = $this->input->post('hapus');
            $menu_id = $this->input->post('menu_id');

            $level = $this->input->post('level');

            foreach ($id as $key => $value) {
                $data['LOADS'] = $tampil[$key];
                $data['CREATEDS'] = $tambah[$key];
                $data['UPDATES'] = $update[$key];
                $data['DELETES'] = $hapus[$key];
                $data['MODUL_ID'] = $menu_id[$key];
                $data['level'] = $level;

                $allvalue[] = $data;
                $data = array();
            }

            $this->m_role->tambah_role($allvalue);
            $this->session->set_flashdata('tambah_sukses', TRUE);
            redirect('setting/pengaturan_role', 'refresh');
        } else if ($this->input->post('batal')) {
            redirect('setting/pengaturan_role', 'refresh');
        }
        $data['group'] = $this->m_role->get_group();
        $data['modul'] = $this->m_role->get_modul();
        $this->load->view('privilege/tambah_role', $data);
    }

    function edit_role() {

        $data['title'] = "SDM";
        $data['link_open_setting_sdm'] = 'open';
        $data['link_setting_sdm'] = 'class="start active open"';

        $level = $this->uri->segment(3);

        $data['role'] = $this->m_role->edit_role($level);
        $data['menu'] = $this->m_modul->get_modul();
        $data['level'] = $this->m_group->get_level();
        $data['level'] = $level;

        $this->load->view('privilege/edit_role', $data);
    }

    function update_role() {
        $data['title'] = "SDM";
        $data['link_open_setting_sdm'] = 'open';
        $data['link_setting_sdm'] = 'class="start active open"';
        $id = $this->uri->segment(3);

        if ($this->input->post('update')) {

            $id = $this->input->post('id');
            //var_dump($id);die();
            //update
            $tampil_e = $this->input->post('tampil_e');
            $tambah_e = $this->input->post('tambah_e');
            $update_e = $this->input->post('updates_e');
            $hapus_e = $this->input->post('hapus_e');
            $menu_id_e = $this->input->post('menu_id_e');

            //insert
            $tampil = $this->input->post('tampil');
            $tambah = $this->input->post('tambah');
            $up = $this->input->post('updates');
            $hapus = $this->input->post('hapus');
            $menu_id = $this->input->post('menu_id');

            $level = $this->input->post('level');


            //insert atau update data
            $allInsert = array();
            $allUpdate = array();

            $i = 0;
            foreach ($id as $key => $value) {
                if ($value == '') {

                    $data['DELETES'] = $hapus[$i];
                    $data['UPDATES'] = $up[$i];
                    $data['CREATEDS'] = $tambah[$i];
                    $data['LOADS'] = $tampil[$i];
                    $data['MODUL_ID'] = $menu_id[$i];
                    $data['level'] = $level;

                    //var_dump($data);die();
                    $allInsert[] = $data;
                    $data = array();

                    $i++;
                } else {

                    $data = array(
                        //'ROLE_ID' = $value;
                        'MODUL_ID' => $menu_id_e[$key],
                        'level' => $level,
                        'LOADS' => $tampil_e[$key],
                        'CREATEDS' => $tambah_e[$key],
                        'UPDATES' => $update_e[$key],
                        'DELETES' => $hapus_e[$key]
                    );

                    $this->m_role->updateRules('update', $data, $value);
                }
            }

            //hapus data lama
            $old = $this->m_role->edit_role($level);

            $a = 0;
            foreach ($old as $key => $value) {
                if ($value->ROLE_ID == $id[$a]) {
                    // echo $id[$a]."<br>";
                    $a++;
                } else {
                    // echo $value->id."<br>";
                    $this->m_role->updateRules('delete', $delete = '', $value->ROLE_ID);
                }
            }

            if (sizeof($allInsert) > 0) {
                $this->m_role->updateRules('insert', $allInsert);
                // echo "bisa insert";
            }

            /* if(sizeof($allUpdate) > 0){
              $this->m_role->updateRules('update', $allUpdate);
              // echo "bisa update";
              } */

            //$this->m_group->proses_update_group($id);
            $this->session->set_flashdata('update_sukses', TRUE);
            redirect('setting/pengaturan_role', 'refresh');
        } else if ($this->input->post('batal')) {
            redirect('setting/pengaturan_role', 'refresh');
        }
    }

    /* public function edit_role($id = NULL) {
      if (is_null($id)) {
      show_404();
      } else {
      $data['title'] = "SDM";
      $data['link_open_setting_sdm'] = 'open';
      $data['link_setting_sdm'] = 'class="start active open"';
      $data['group'] = $this->m_role->get_group();
      $data['modul'] = $this->m_role->get_modul();
      $data['role'] = $this->m_role->edit_role();
      $this->load->view('privilege/edit_role', $data);
      }
      } */

    public function hapus_role() {
        $id = $this->uri->segment(3);
        $this->m_role->hapus_role($id);
        $this->session->set_flashdata('hapus_sukses', TRUE);
        redirect('setting/pengaturan_role', 'refresh');
    }

    public function pengaturan_user() {
        $data['title'] = "SDM";
        $data['link_open_setting_sdm'] = 'open';
        $data['link_setting_sdm'] = 'class="start active open"';
        $data['users'] = $this->m_user->get_user();
        $data['group'] = $this->m_user->get_group();
        $this->load->view('privilege/User', $data);
    }

    public function tambah_user() {
        $data['title'] = "SDM";
        $data['link_open_setting_sdm'] = 'open';
        $data['link_setting_sdm'] = 'class="start active open"';
        if ($this->input->post('simpan')) {
            $this->m_user->tambah_user();
            $this->session->set_flashdata('tambah_sukses', TRUE);
            redirect('setting/pengaturan_user', 'refresh');
            die();
        } else if ($this->input->post('batal')) {
            redirect('setting/pengaturan_user', 'refresh');
        }
        $data['users'] = $this->m_user->get_user();
        $data['group'] = $this->m_user->get_group();
        $this->load->view('privilege/tambah_user', $data);
    }

    public function edit_user($id = NULL) {
        if (is_null($id)) {
            show_404();
        } else {
            $data['title'] = "SDM";
            $data['link_open_setting_sdm'] = 'open';
            $data['link_setting_sdm'] = 'class="start active open"';
            $data['user'] = $this->m_user->update_user($id)->result();
            $data['userall'] = $this->m_user->get_group();
            $this->load->view('privilege/edit_user', $data);
        }
    }

    public function proses_update_user() {

        $data['title'] = "SDM";
        $data['link_open_setting_sdm'] = 'open';
        $data['link_setting_sdm'] = 'class="start active open"';
        $id = $this->uri->segment(3);
        if ($this->input->post('update')) {
            $this->m_user->proses_update_user($id);
            $this->session->set_flashdata('update_sukses', TRUE);
            redirect('setting/pengaturan_user', 'refresh');
        } else if ($this->input->post('batal')) {
            redirect('setting/pengaturan_user', 'refresh');
        }
    }

    public function hapus_user($id) {
        $id = $this->uri->segment(3);
        $this->m_user->hapus_user($id);
        $this->session->set_flashdata('hapus_sukses', TRUE);
        redirect('setting/pengaturan_user', 'refresh');
    }

}
