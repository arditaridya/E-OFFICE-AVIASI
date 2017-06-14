<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jenis_satuan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        session_start();
    }

    public function index(){
        $data['link_open_wilayah'] = 'class="start active open"';
        $data['link_aktif_wilayah'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
        $data['title'] = "Master Jenis Satuan";
        $query = $this->db->query("SELECT * FROM jenis_satuan order by id_jenissatuan asc ")->result();
        $data['model'] = $query;
        $this->load->view('jenis_satuan/index',$data);
    }

    public function tambahsatuan(){
        $data['link_open_wilayah'] = 'class="start active open"';
        $data['link_aktif_wilayah'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
        $data['title'] = "Tambah Jenis Satuan";
        $this->load->view('jenis_satuan/tambah',$data);
    }

    public function simpanjenissatuan(){
        $this->db->query("insert into jenis_satuan (nama_jenissatuan,keterangan) values ('".$_POST['nama_jenissatuan']."','".$_POST['keterangan']."')");
        redirect('jenis_satuan', 'refresh');
    }

    public function editjenissatuan($id){
        $data['link_open_wilayah'] = 'class="start active open"';
        $data['link_aktif_wilayah'] = 'class="active"';
        $data['link_data_master'] = 'class="start active open"';
        $data['title'] = "Edit Jenis Satuan";
        $query = $this->db->query("SELECT * FROM jenis_satuan where id_jenissatuan ='$id'")->result();

        $data['dataper'] = $query;
        $this->load->view('jenis_satuan/edit',$data);
    }

    public function simpanedit(){
        $this->db->query("update jenis_satuan set nama_jenissatuan='".$_POST['nama_jenissatuan']."',keterangan='".$_POST['keterangan']."' where id_jenissatuan='".$_POST['id_jenissatuan']."'");
        redirect('jenis_satuan', 'refresh');
    }

    public function hapus($id){

        $this->db->query("delete from jenis_satuan where id_jenissatuan='$id'");
        redirect('jenis_satuan', 'refresh');
    }

}