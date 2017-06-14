<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class m_main_menu extends CI_Model {

    public function get_nama_kategori_penerbang() {
//        $q = $this->db->query('SELECT "KATEGORI_ID" as id, "KATEGORI_NAMA" as "text", TRUE as "children" FROM "M_KATEGORI" WHERE "JENIS_ID" = 1');
        $q = $this->db->query(
                'SELECT DISTINCT
	"PROFESI_ID" as id, 
	"PROFESI_NAMA" as "text", 
	(case when 
	chd."children" = \'t\'
	then TRUE
	else FALSE
	end) as children
        FROM 
	(select true as "children" from "M_PROFESI") as chd,
	"M_PROFESI"
        WHERE "KATEGORI_ID" = 1 ORDER BY id asc');
        return $q;
    }

//    public function get_nama_korsp() {
//        $q = $this->db->query(
//                'SELECT DISTINCT 
//        "KORPS_ID" as id,
//        "KORPS_NAMA" as "text",
//        (case when
//        chd."children" = \'t\'
//        then TRUE
//        else FALSE
//        end) as children
//        FROM
//        (select true as "children" from "M_KORPS") as chd,
//        "M_KORPS"
//        ORDER BY id asc');
//        return $q;
//    }

    public function get_jumlah_tni_penerbang_awak_pesawat() {
        $q = $this->db->query('SELECT count(*) FROM "SDM_KHTNI" WHERE "KATEGORI_ID" = 3');
        return $q;
    }

    public function get_jumlah_non_tni_penerbang_awak_pesawat() {
        $q = $this->db->query('SELECT count(*) FROM "SDM_UMUM" WHERE "KATEGORI_ID" = 3');
        return $q;
    }

    public function get_jumlah_korps_penerbang_awak_pesawat() {
        $q = $this->db->query('SELECT count(*) FROM "SDM_KHTNI" WHERE "KORPS_ID" = 1');
        return $q;
    }

    public function get_jumlah_korps_navigator_awak_pesawat() {
        $q = $this->db->query('SELECT count(*) FROM "SDM_KHTNI" WHERE "KORPS_ID" = 2');
        return $q;
    }

    public function get_jumlah_profesi_tempur_penerbang_awak_pesawat() {
        $q = $this->db->query('SELECT count(*) FROM "SDM_KHTNI" WHERE "PROFESI_ID" = 1');
        return $q;
    }

    public function get_jumlah_profesi_angkut_penerbang_awak_pesawat() {
        $q = $this->db->query('SELECT count(*) FROM "SDM_KHTNI" WHERE "PROFESI_ID" = 2');
        return $q;
    }

    public function get_jumlah_profesi_latih_penerbang_awak_pesawat() {
        $q = $this->db->query('SELECT count(*) FROM "SDM_KHTNI" WHERE "PROFESI_ID" = 3');
        return $q;
    }

    public function get_jumlah_profesi_heli_penerbang_awak_pesawat() {
        $q = $this->db->query('SELECT count(*) FROM "SDM_KHTNI" WHERE "PROFESI_ID" = 4');
        return $q;
    }

    public function get_jumlah_profesi_tempur_wing_man_penerbang_awak_pesawat() {
        $q = $this->db->query('SELECT count(*) FROM "SDM_KHTNI" WHERE "SPESIALISASI_ID" = 1');
        return $q;
    }

    public function get_jumlah_profesi_tempur_elemen_leader_penerbang_awak_pesawat() {
        $q = $this->db->query('SELECT count(*) FROM "SDM_KHTNI" WHERE "SPESIALISASI_ID" = 2');
        return $q;
    }

    public function get_jumlah_profesi_tempur_instruktur_penerbang_awak_pesawat() {
        $q = $this->db->query('SELECT count(*) FROM "SDM_KHTNI" WHERE "SPESIALISASI_ID" = 3');
        return $q;
    }

    public function get_jumlah_profesi_tempur_fl_leader_penerbang_awak_pesawat() {
        $q = $this->db->query('SELECT count(*) FROM "SDM_KHTNI" WHERE "SPESIALISASI_ID" = 4');
        return $q;
    }

    public function get_jumlah_profesi_tempur_uji_fungsi_penerbang_awak_pesawat() {
        $q = $this->db->query('SELECT count(*) FROM "SDM_KHTNI" WHERE "SPESIALISASI_ID" = 5');
        return $q;
    }

    public function get_jumlah_profesi_tempur_check_pilot_penerbang_awak_pesawat() {
        $q = $this->db->query('SELECT count(*) FROM "SDM_KHTNI" WHERE "SPESIALISASI_ID" = 6');
        return $q;
    }

    public function get_jumlah_profesi_tempur_fight_weapon_penerbang_awak_pesawat() {
        $q = $this->db->query('SELECT count(*) FROM "SDM_KHTNI" WHERE "SPESIALISASI_ID" = 7');
        return $q;
    }
    
    public function get_profil_tempur_wing_man_penerbang_tni() {
//        $q = $this->db->query('SELECT DISTINCT
//	"SDMKTNI_ID" as id, 
//	"NAMA" as "text", 
//	(case when 
//	chd."children" = \'f\'
//	then FALSE
//	else TRUE
//	end) as children
//        FROM 
//	(select false as "children" from "SDM_KHTNI") as chd,
//	"SDM_KHTNI"
//        WHERE "SPESIALISASI_ID" = 1 ORDER BY id asc');
        $q = $this->db->query('SELECT * FROM "SDM_KHTNI"');
        return $q;
    }
    
    public function get_profil_lengkap_tempur_wing_man_penerbang_tni($id) {
        $q = $this->db->query('SELECT * FROM "SDM_KHTNI" WHERE "SDMDATA_ID" = '.$id.'');
        return $q;
    }
    
    function get_profil_lengkap($id){
        $q = $this->db->query('SELECT * FROM "SDM_UMUM" WHERE "SDMDATA_ID" = '.$id.'');
        return $q;
    }
            
    function get_profesi_personil(){
        $q = $this->db->query('SELECT * FROM view_data_profesi ORDER BY "SDMDATA_ID"');
        return $q;
    }
    
    function get_profesi_personil_luar(){
        $q = $this->db->query('SELECT * FROM view_profesi_data_luar ORDER BY "SDMDATA_ID"');
        return $q;
    }

}
