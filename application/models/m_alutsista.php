<?php



if (!defined('BASEPATH'))

    exit('No direct script access allowed');



class M_alutsista extends CI_Model {



    function __construct() {

        parent::__construct();

		

    }



   public function data_users(){

	   

	   $query = $this->db->query('

	   

		SELECT * FROM users

	   

	   ');

	   return $query->result();

	   

	   

   }

   

   	public function get_table($table){

		$query = $this->db->select('*')->from($table);

		return $query->get()->result();

	}

	

	//Senjata AU

    function senjata_au() {

        $this->db->order_by('id', 'asc');

        $query = $this->db->get("senjata_au");

        return $query->result();

    }



    function tambah_senjata_au() {

        $data = array(

            'id_kesatuan' => (int) $this->input->post('kesatuan'),

            'id_jenis' => $this->input->post('jenis'),

            'id_fungsi' => $this->input->post('fungsi'),

            'id_barang' => $this->input->post('barang'),

            'baik' => (int) $this->input->post('baik'),

            'rusak_ringan' => (int) $this->input->post('rusak_ringan'),

            'rusak_berat' => (int) $this->input->post('rusak_berat'),

            'depo60' => (int) $this->input->post('depo60'),

            'jml' => (int) $this->input->post('jumlah'),

            'insert_date' => $this->input->post('insert_date')

        );

        $this->db->insert('senjata_au', $data);

    }



    function edit_senjata_au($id) {

        $this->db->where('id', $id);

        $data = $this->db->get('senjata_au');

        return $data;

    }



    function proses_edit_senjata_au($id) {

        $data = array(

            'id_kesatuan' => (int) $this->input->post('kesatuan'),

            'id_jenis' => $this->input->post('jenis'),

            'id_fungsi' => $this->input->post('fungsi'),

            'id_barang' => $this->input->post('barang'),

            'baik' => (int) $this->input->post('baik'),

            'rusak_ringan' => (int) $this->input->post('rusak_ringan'),

            'rusak_berat' => (int) $this->input->post('rusak_berat'),

            'depo60' => (int) $this->input->post('depo60'),

            'jml' => (int) $this->input->post('jumlah'),

            'insert_date' => $this->input->post('insert_date') // date('Y-m-d')

        );



        $this->db->where('id', $id);

        $this->db->update('senjata_au', $data);

    }



    function hapus_senjata_au($id) {

        $this->db->where('id', $id);

        $this->db->delete('senjata_au', array('id' => $id));

    }





    function jenis_senjata_au() {

        $q = $this->db->query("SELECT * FROM jenis_barang where idkomoditi = '16'");

        return $q->result();

    }



    

    //Alpalsus AU
	
		function alpalsus_au() {
        $this->db->order_by('id', 'asc');
        $query = $this->db->get("alpalsus_au");
        return $query->result();
    }

       function tambah_alpalsus_au() {
        $data = array(
            'id_kesatuan' => (int) $this->input->post('kesatuan'),
            'id_jenis' => $this->input->post('jenis'),
            'id_fungsi' => $this->input->post('fungsi'),
            'id_barang' => $this->input->post('barang'),
            'kondisi_primary' =>  $this->input->post('kondisi_primary'),
            'kondisi_secondary' =>  $this->input->post('kondisi_primary'),
            'ket' => $this->input->post('ket'),
            'insert_date' => $this->input->post('insert_date')
        );
        $this->db->insert('alpalsus_au', $data);
    }

    function edit_alpalsus_au($id) {
        $this->db->where('id', $id);
        $data = $this->db->get('alpalsus_au');
        return $data;
    }
    
    function proses_edit_alpalsus_au($id) {
        $data = array(
            'id_kesatuan' => (int) $this->input->post('kesatuan'),
            'id_jenis' => $this->input->post('jenis'),
            'id_fungsi' => $this->input->post('fungsi'),
            'id_barang' => $this->input->post('barang'),
            'kondisi_primary' =>  $this->input->post('kondisi_primary'),
            'kondisi_secondary' => $this->input->post('kondisi_secondary'),
            'ket' => $this->input->post('ket'),
            'insert_date' => $this->input->post('insert_date')
        );

        $this->db->where('id', $id);
        $this->db->update('alpalsus_au', $data);
    }
    
    function hapus_alpalsus_au($id) {
        $this->db->where('id', $id);
        $this->db->delete('alpalsus_au', array('id' => $id));
    }



    function jenis_alpalsus_au() {

        $q = $this->db->query("SELECT * FROM jenis_barang where idkomoditi = '19'");

        return $q->result();

    }

    

    //Amunisi AU

    

	function amunisi_au() {

        

        $this->db->order_by('id', 'asc');

        $query = $this->db->get("amunisi_dump_au");

        return $query->result();

	}



    function tambah_amunisi_au() {

        $data = array(

            'id_kesatuan' => (int) $this->input->post('kesatuan'),

            'id_jenis' => $this->input->post('jenis'),

            'id_fungsi' => $this->input->post('fungsi'),

            'id_barang' => $this->input->post('barang'),

            'pakai' => (int) $this->input->post('pakai'),

			'insert_date' => $this->input->post('insert_date')

        );

        $this->db->insert('amunisi_dump_au', $data);

    }



    public function edit_amunisi_au($id) {

        $this->db->where('id', $id);

        $get_data = $this->db->get('amunisi_dump_au');

        return $get_data;

    }



    function proses_edit_amunisi_au($id) {

        $data = array(

            'id_kesatuan' => (int) $this->input->post('kesatuan'),

            'id_jenis' => $this->input->post('jenis'),

            'id_fungsi' => $this->input->post('fungsi'),

            'id_barang' => $this->input->post('barang'),

            'pakai' => (int) $this->input->post('pakai'),

			'insert_date' => $this->input->post('insert_date')

        );



        $this->db->where('id', $id);

        $this->db->update('amunisi_au', $data);

    }



    function hapus_amunisi_au($id) {

		$this->db->where('id', $id);

        $this->db->delete('amunisi_dump_au', array('id' => $id));

	

        $this->db->where('id_dump_amunisi_au', $id);

        $this->db->delete('amunisi_au', array('id_dump_amunisi_au' => $id));

    }





    function jenis_amunisi_au() {

        $q = $this->db->query("SELECT * FROM jenis_barang where idkomoditi = '17'");

        return $q->result();

    }

	

	function jenis_senjata1_au() {

        $q = $this->db->query("SELECT * FROM barang where idfungsi>='17' and idfungsi<='25'");

        return $q->result();

    }

	

    //Pesawat AU

	

    function pesawat_au() {

        $this->db->order_by('id', 'asc');

        $query = $this->db->get("pesawat_au");

        return $query->result();

    }



    function tambah_pesawat_au() {



        $data = array(

            'id_kesatuan' => (int) $this->input->post('kesatuan'),

            'id_jenis' => $this->input->post('jenis'),

            'id_fungsi' => $this->input->post('fungsi'),

            'id_barang' => $this->input->post('barang'),

            'kuat' => (int) $this->input->post('kuat'),

            'sas' => (int) $this->input->post('sas'),

            'siap' => (int) $this->input->post('siap'),

            'har_ringan' => (int) $this->input->post('har_ringan'),

            'har_berat' => (int) $this->input->post('har_berat'),

            'har_sedang' => $this->input->post('har_sedang'),

			'awp' => $this->input->post('awp'),

			'ket' => $this->input->post('ket'),

			'insert_date' => $this->input->post('insert_date')

        );

        $this->db->insert('pesawat_au', $data);

    }



    function edit_pesawat_au($id) {

        $this->db->where('id', $id);

        $data = $this->db->get('pesawat_au');

        return $data;

    }



    function proses_edit_pesawat_au($id) {

        $data = array(

            'id_kesatuan' => (int) $this->input->post('kesatuan'),

            'id_jenis' => $this->input->post('jenis'),

            'id_fungsi' => $this->input->post('fungsi'),

            'id_barang' => $this->input->post('barang'),

            'kuat' => (int) $this->input->post('kuat'),

            'sas' => (int) $this->input->post('sas'),

            'siap' => (int) $this->input->post('siap'),

            'har_ringan' => (int) $this->input->post('har_ringan'),

            'har_berat' => (int) $this->input->post('har_berat'),

            'har_sedang' => $this->input->post('har_sedang'),

			'awp' => $this->input->post('awp'),

			'ket' => $this->input->post('ket'),

			'insert_date' => $this->input->post('insert_date')

        );



        $this->db->where('id', $id);

        $this->db->update('pesawat_au', $data);

    }



    function hapus_pesawat_au($id) {

        $this->db->where('id', $id);

        $this->db->delete('pesawat_au', array('id' => $id));

    }





    function jenis_pesawat_au() {

        $q = $this->db->query("SELECT * FROM jenis_barang where idkomoditi = '18'");

        return $q->result();

    }

	

	

    //Common

    function kesatuan_au() {

        $q = $this->db->query("SELECT * 

            FROM

            kesatuan

            where

            kesatuan.idinduk = '4'");

        return $q->result();

    }

    

    function fungsi_au() {

        $q = $this->db->query("SELECT * FROM fungsi_barang");

        return $q->result();

    }



    function barang_au() {

        $q = $this->db->query("SELECT * FROM barang");

        return $q->result();

    }



    function get_fungsi() {

        $jenis = $this->input->post('jenis');

        $this->db->select('*');

        $this->db->from('fungsi_barang');

        $this->db->where('idjenis', $jenis);

        $query = $this->db->get();

        return $query;

    }



    function get_barang() {

        $fungsi = $this->input->post('fungsi');

        $this->db->select('*');

        $this->db->from('barang');

        $this->db->where('idfungsi', $fungsi);

        $query = $this->db->get();

        return $query;

    }


// +----------------------------------------------------------------------------------------------------------+
// |---------------- UMUM ------------------------- UMUM ---------------------- UMUM -------------------------|
// +----------------------------------------------------------------------------------------------------------+

    function get_fungsi_filter($kdjenis){
        $q = $this->db->query("SELECT * FROM fungsi_barang WHERE idjenis=".$kdjenis."");
        return $q->result();
    }

    function get_barang_filter($kdfungsi){
        $q = $this->db->query("SELECT * FROM barang WHERE idfungsi=".$kdfungsi."");
        return $q->result();
    }

// ____________________________________________________________________________________________________________

 

// +--------------------------------------------------------------------------------------------------------------------+

// |--------------------- SENJATA AD ------------------- SENJATA AD -------------------- SENJATA AD --------------------|

// +--------------------------------------------------------------------------------------------------------------------+



    function list_senjata_ad($kesatuan = '',$jenis = '',$fungsi = '',$barang = '',$tgl_from = '',$tgl_to = ''){

        $kesatuan = '';
        $jenis = '';
        $fungsi = '';
        $barang = '';
        $tgl_from = '';
        $tgl_to = '';
            //SELECT * FROM `senjata_ad` WHERE id_kes = 46 AND id_jenis = 1 AND id_fungsi = 2 AND id_barang  = 15 AND tanggal_input BETWEEN '2015-10-13' AND '2015-10-17'
        $q = $this->db->query("SELECT * FROM senjata_ad");

        return $q->result();

    }



    function kesatuan_ad() {

        $q = $this->db->query("SELECT * FROM kesatuan where idinduk = '2'");

        return $q->result();

    }



    function jenis_barang_ad() {

        $q = $this->db->query("SELECT * FROM jenis_barang where idkomoditi = '1'");

        return $q->result();

    }



    function get_fungsi_ad($kd_jenis){

        $q = $this->db->query("SELECT * FROM fungsi_barang where idjenis = '$kd_jenis'");

        return $q->result();

    }



    function get_barang_ad($kd_fungsi){

        $q = $this->db->query("SELECT * FROM barang where idfungsi = '$kd_fungsi'");

        return $q->result();

    }



    function tambah_senjata_ad(){

        $data = array(

            'id_kes' => $this->input->post('ad_kesatuan'),

            'id_jenis' => $this->input->post('ad_jenis'),

            'id_fungsi' => $this->input->post('ad_fungsi'),

            'id_barang' => $this->input->post('ad_barang'),

            'b_kia' => (int) $this->input->post('ad_kai_b'),

            'b_dia' => (int) $this->input->post('ad_dia_b'),

            'rr_kia' => (int) $this->input->post('ad_kai_rr'),

            'rr_dia' => (int) $this->input->post('ad_dia_rr'),

            'rb_kia' => (int) $this->input->post('ad_kai_rb'),

            'rb_dia' => (int) $this->input->post('ad_dia_rb'),

            'b_gudang_1' => (int) $this->input->post('ad_gudang1_b'),

            'b_gudang_2' => (int) $this->input->post('ad_gudang2_b'),

            'rr_gudang_1' => (int) $this->input->post('ad_gudang1_rr'),

            'rr_gudang_2' => (int) $this->input->post('ad_gudang2_rr'),

            'rb_gudang_1' => (int) $this->input->post('ad_gudang1_rb'),

            'rb_gudang_2' => (int) $this->input->post('ad_gudang2_rb'),

            'tanggal_input' => $this->input->post('ad_tanggal_input'),

        );

        $this->db->insert('senjata_ad', $data);

    }



    function hapussenjata_ad($id_senjata){

        $this->db->where('id', $id_senjata);

        $q = $this->db->delete('senjata_ad');

        return $q;



    }



    function list_kesatuan_ad(){

        $q = $this->db->query("SELECT * FROM kesatuan where idinduk = '2'"); 

        return $q->result();

    }



    function list_jenis_senjataad(){

        $q = $this->db->query("SELECT * FROM jenis_barang where idkomoditi = '1'"); 

        return $q->result();

    }



    function list_fungsi_senjataad(){

        $q = $this->db->query("SELECT * FROM fungsi_barang"); 

        return $q->result();

    }



    function list_barang_senjataad(){

        $q = $this->db->query("SELECT * FROM barang"); 

        return $q->result();

    }



    function edit_senjata_ad($id_senjata){

        $this->db->where('id',$id_senjata);

        $data = $this->db->get('senjata_ad');

        return $data;

    }



    function proses_edit_senjata_ad($id_senjata){

        $data = array(

            'id_kes' => $this->input->post('kesatuan'),

            'id_jenis' => $this->input->post('jenis'),

            'id_fungsi' => $this->input->post('fungsi'),

            'id_barang' => $this->input->post('barang'),

            'b_kia' => (int) $this->input->post('kai_b'),

            'b_dia' => (int) $this->input->post('dia_b'),

            'rr_kia' => (int) $this->input->post('kai_rr'),

            'rr_dia' => (int) $this->input->post('dia_rr'),

            'rb_kia' => (int) $this->input->post('kai_rb'),

            'rb_dia' => (int) $this->input->post('dia_rb'),

            'b_gudang_1' => (int) $this->input->post('ad_gudang1_b'),

            'b_gudang_2' => (int) $this->input->post('ad_gudang2_b'),

            'rr_gudang_1' => (int) $this->input->post('ad_gudang1_rr'),

            'rr_gudang_2' => (int) $this->input->post('ad_gudang2_rr'),

            'rb_gudang_1' => (int) $this->input->post('ad_gudang1_rb'),

            'rb_gudang_2' => (int) $this->input->post('ad_gudang2_rb'),

            'tanggal_input' => $this->input->post('ad_tanggal_input'),

        );

        $this->db->where('id',$id_senjata);

        $this->db->update('senjata_ad', $data);

    }



// ______________________________________________________________________________________________________________________



// +--------------------------------------------------------------------------------------------------------------------+

// |------------------------ KAPAL AD ---------------------- KAPAL AD ------------------ KAPAL AD ----------------------|

// +--------------------------------------------------------------------------------------------------------------------+



    function list_kapal_ad(){

        $q = $this->db->query("SELECT * FROM kapal_ad");

        return $q->result();

    }



    function jenis_barang_kapalad() {

        $q = $this->db->query("SELECT * FROM jenis_barang where idkomoditi = '4'");

        return $q->result();

    }



    function tambah_kapal_ad(){

        $data = array(

            'id_kes' => $this->input->post('ad_kesatuan'),

            'id_jenis' => $this->input->post('ad_jenis'),

            'id_fungsi' => $this->input->post('ad_fungsi'),

            'id_barang' => $this->input->post('ad_barang'),

            'lokasi' => $this->input->post('ad_lokasi'),

            's_ops' => (int) $this->input->post('ad_s_ops'),

            'ts_ops' => (int) $this->input->post('ad_ts_ops'),

            'kons_noops' => (int) $this->input->post('ad_kons_noops'),

            'rb_noops' => (int) $this->input->post('ad_rb_noops'),

            'tl_noops' => (int) $this->input->post('ad_tl_noops'),

            'tanggal_input' => $this->input->post('ad_tanggal_input'),

        );

        $this->db->insert('kapal_ad', $data);

    }



    function hapuskapal_ad($id_kapal){

        $this->db->where('id', $id_kapal);

        $q = $this->db->delete('kapal_ad');

        return $q;

    }



    function list_jenis_kapalad(){

        $q = $this->db->query("SELECT * FROM jenis_barang where idkomoditi = '4'"); 

        return $q->result();

    }



    function list_fungsi_kapalad(){

        $q = $this->db->query("SELECT * FROM fungsi_barang"); 

        return $q->result();

    }



    function list_barang_kapalad(){

        $q = $this->db->query("SELECT * FROM barang"); 

        return $q->result();

    }



    function edit_kapal_ad($id_kapal){

        $this->db->where('id',$id_kapal);

        $data = $this->db->get('kapal_ad');

        return $data;

    }



    function proses_edit_kapal_ad($id_kapal){

        $data = array(

            'id_kes' => $this->input->post('kesatuan'),

            'id_jenis' => $this->input->post('jenis'),

            'id_fungsi' => $this->input->post('fungsi'),

            'id_barang' => $this->input->post('barang'),

            'lokasi' => $this->input->post('lokasi'),

            's_ops' => (int) $this->input->post('s_ops'),

            'ts_ops' => (int) $this->input->post('ts_ops'),

            'kons_noops' => (int) $this->input->post('kons_noops'),

            'rb_noops' => (int) $this->input->post('rb_noops'),

            'tl_noops' => (int) $this->input->post('tl_noops'),

            'tanggal_input' => $this->input->post('tanggal_input'),

        );

        $this->db->where('id',$id_kapal);

        $this->db->update('kapal_ad', $data);

    } 

  

// _____________________________________________________________________________________________________________________



// +--------------------------------------------------------------------------------------------------------------------+

// |------------------------ AMUNISI AD ------------------- AMUNISI AD ------------------ AMUNISI AD -------------------|

// +--------------------------------------------------------------------------------------------------------------------+





// ______________________________________________________________________________________________________________________



// +--------------------------------------------------------------------------------------------------------------------+

// |--------------------- ALPALSUS AD ------------------- ALPALSUS AD -------------------- ALPALSUS AD --------------------|

// +--------------------------------------------------------------------------------------------------------------------+



    function list_alpalsus_ad(){

        $q = $this->db->query("SELECT * FROM alpalsus_ad");

        return $q->result();

    }



    function jenis_barang_alpalsusad() {

        $q = $this->db->query("SELECT * FROM jenis_barang where idkomoditi = '7'");

        return $q->result();

    }



    function tambah_alpalsus_ad(){

        $data = array(

            'id_kes' => $this->input->post('ad_kesatuan'),

            'id_jenis' => $this->input->post('ad_jenis'),

            'id_fungsi' => $this->input->post('ad_fungsi'),

            'id_barang' => $this->input->post('ad_barang'),

            'b_kia' => (int) $this->input->post('ad_kai_b'),

            'b_dia' => (int) $this->input->post('ad_dia_b'),

            'rr_kia' => (int) $this->input->post('ad_kai_rr'),

            'rr_dia' => (int) $this->input->post('ad_dia_rr'),

            'rb_kia' => (int) $this->input->post('ad_kai_rb'),

            'rb_dia' => (int) $this->input->post('ad_dia_rb'),

            'b_gupusjat_1' => (int) $this->input->post('ad_gupusjat1_b'),

            'b_gupusjat_2' => (int) $this->input->post('ad_gupusjat2_b'),

            'rr_gupusjat_1' => (int) $this->input->post('ad_gupusjat1_rr'),

            'rr_gupusjat_2' => (int) $this->input->post('ad_gupusjat2_rr'),

            'rb_gupusjat_1' => (int) $this->input->post('ad_gupusjat1_rb'),

            'rb_gupusjat_2' => (int) $this->input->post('ad_gupusjat2_rb'),

            'tanggal_input' => $this->input->post('ad_tanggal_input'),

        );

        $this->db->insert('alpalsus_ad', $data);

    }



    function hapusalpalsus_ad($id_alpalsus){

        $this->db->where('id', $id_alpalsus);

        $q = $this->db->delete('alpalsus_ad');

        return $q;

    }



    function list_jenis_alpalsusad(){

        $q = $this->db->query("SELECT * FROM jenis_barang where idkomoditi = '7'"); 

        return $q->result();

    }



    function list_fungsi_alpalsusad(){

        $q = $this->db->query("SELECT * FROM fungsi_barang"); 

        return $q->result();

    }



    function list_barang_alpalsusad(){

        $q = $this->db->query("SELECT * FROM barang"); 

        return $q->result();

    }



    function edit_alpalsus_ad($id_alpalsus){

        $this->db->where('id',$id_alpalsus);

        $data = $this->db->get('alpalsus_ad');

        return $data;

    }



    function proses_edit_alpalsus_ad($id_alpalsus){

        $data = array(

            'id_kes' => $this->input->post('kesatuan'),

            'id_jenis' => $this->input->post('jenis'),

            'id_fungsi' => $this->input->post('fungsi'),

            'id_barang' => $this->input->post('barang'),

            'b_kia' => (int) $this->input->post('kai_b'),

            'b_dia' => (int) $this->input->post('dia_b'),

            'rr_kia' => (int) $this->input->post('kai_rr'),

            'rr_dia' => (int) $this->input->post('dia_rr'),

            'rb_kia' => (int) $this->input->post('kai_rb'),

            'rb_dia' => (int) $this->input->post('dia_rb'),

            'b_gupusjat_1' => (int) $this->input->post('ad_gupusjat1_b'),

            'b_gupusjat_2' => (int) $this->input->post('ad_gupusjat2_b'),

            'rr_gupusjat_1' => (int) $this->input->post('ad_gupusjat1_rr'),

            'rr_gupusjat_2' => (int) $this->input->post('ad_gupusjat2_rr'),

            'rb_gupusjat_1' => (int) $this->input->post('ad_gupusjat1_rb'),

            'rb_gupusjat_2' => (int) $this->input->post('ad_gupusjat2_rb'),

            'tanggal_input' => $this->input->post('ad_tanggal_input'),

        );

        $this->db->where('id',$id_alpalsus);

        $this->db->update('alpalsus_ad', $data);

    } 



// ______________________________________________________________________________________________________________________



// +--------------------------------------------------------------------------------------------------------------------+

// |--------------------- ALOPTIK AD ------------------- ALOPTIK AD -------------------- ALOPTIK AD --------------------|

// +--------------------------------------------------------------------------------------------------------------------+



    function list_aloptik_ad(){

        $q = $this->db->query("SELECT * FROM aloptik_ad");

        return $q->result();

    }



    function jenis_barang_aloptikad() {

        $q = $this->db->query("SELECT * FROM jenis_barang where idkomoditi = '8'");

        return $q->result();

    }



    function tambah_aloptik_ad(){

        $data = array(

            'id_kes' => $this->input->post('ad_kesatuan'),

            'id_jenis' => $this->input->post('ad_jenis'),

            'id_fungsi' => $this->input->post('ad_fungsi'),

            'id_barang' => $this->input->post('ad_barang'),

            'b_kia' => (int) $this->input->post('ad_kai_b'),

            'b_dia' => (int) $this->input->post('ad_dia_b'),

            'rr_kia' => (int) $this->input->post('ad_kai_rr'),

            'rr_dia' => (int) $this->input->post('ad_dia_rr'),

            'rb_kia' => (int) $this->input->post('ad_kai_rb'),

            'rb_dia' => (int) $this->input->post('ad_dia_rb'),

            'b_gupusjat_1' => (int) $this->input->post('ad_gupusjat1_b'),

            'b_gupusjat_2' => (int) $this->input->post('ad_gupusjat2_b'),

            'rr_gupusjat_1' => (int) $this->input->post('ad_gupusjat1_rr'),

            'rr_gupusjat_2' => (int) $this->input->post('ad_gupusjat2_rr'),

            'rb_gupusjat_1' => (int) $this->input->post('ad_gupusjat1_rb'),

            'rb_gupusjat_2' => (int) $this->input->post('ad_gupusjat2_rb'),

            'tanggal_input' => $this->input->post('ad_tanggal_input'),

        );

        $this->db->insert('aloptik_ad', $data);

    }



    function hapusaloptik_ad($id_aloptik){

        $this->db->where('id', $id_aloptik);

        $q = $this->db->delete('aloptik_ad');

        return $q;

    }



    function list_jenis_aloptikad(){

        $q = $this->db->query("SELECT * FROM jenis_barang where idkomoditi = '8'"); 

        return $q->result();

    }



    function list_fungsi_aloptikad(){

        $q = $this->db->query("SELECT * FROM fungsi_barang"); 

        return $q->result();

    }



    function list_barang_aloptikad(){

        $q = $this->db->query("SELECT * FROM barang"); 

        return $q->result();

    }



    function edit_aloptik_ad($id_aloptik){

        $this->db->where('id',$id_aloptik);

        $data = $this->db->get('aloptik_ad');

        return $data;

    }



    function proses_edit_aloptik_ad($id_aloptik){

        $data = array(

            'id_kes' => $this->input->post('kesatuan'),

            'id_jenis' => $this->input->post('jenis'),

            'id_fungsi' => $this->input->post('fungsi'),

            'id_barang' => $this->input->post('barang'),

            'b_kia' => (int) $this->input->post('kai_b'),

            'b_dia' => (int) $this->input->post('dia_b'),

            'rr_kia' => (int) $this->input->post('kai_rr'),

            'rr_dia' => (int) $this->input->post('dia_rr'),

            'rb_kia' => (int) $this->input->post('kai_rb'),

            'rb_dia' => (int) $this->input->post('dia_rb'),

            'b_gupusjat_1' => (int) $this->input->post('ad_gupusjat1_b'),

            'b_gupusjat_2' => (int) $this->input->post('ad_gupusjat2_b'),

            'rr_gupusjat_1' => (int) $this->input->post('ad_gupusjat1_rr'),

            'rr_gupusjat_2' => (int) $this->input->post('ad_gupusjat2_rr'),

            'rb_gupusjat_1' => (int) $this->input->post('ad_gupusjat1_rb'),

            'rb_gupusjat_2' => (int) $this->input->post('ad_gupusjat2_rb'),

            'tanggal_input' => $this->input->post('ad_tanggal_input'),

        );

        $this->db->where('id',$id_aloptik);

        $this->db->update('aloptik_ad', $data);

    } 



// ______________________________________________________________________________________________________________________

 

	

//------------------------TNI AL---------------------------------------	

  //KAPAL TNI AL

	

	function kapal_al() {
        
		$q = $this->db->query("	SELECT * FROM 
								kapal_dump_al, kapal_al 
									where 
								kapal_dump_al.id=kapal_al.id_dump_kapal_al 
								order by kapal_al.id
							  ");
        return $q->result();
		
	}

    function tambah_kapal_al() {
        $data = array(
            'id_kesatuan' => (int) $this->input->post('kesatuan'),
            'id_jenis' => $this->input->post('jenis'),
            'id_fungsi' => $this->input->post('fungsi'),
            'id_barang' => $this->input->post('barang')
        );
        $this->db->insert('kapal_dump_al', $data);
		
    }

    public function edit_kapal_al($id) {
        $this->db->where('id', $id);
        $get_data = $this->db->get('kapal_dump_al');
        return $get_data;
    }

    function proses_edit_kapal_al($id) {
        $data = array(
            'id_kesatuan' => (int) $this->input->post('kesatuan'),
            'id_jenis' => $this->input->post('jenis'),
            'id_fungsi' => $this->input->post('fungsi'),
            'id_barang' => $this->input->post('barang')
        );

        $this->db->where('id', $id);
        $this->db->update('kapal_dump_al', $data);
    }

    function hapus_kapal_al($id) {
		$this->db->where('id', $id);
        $this->db->delete('kapal_dump_al', array('id' => $id));
	
        $this->db->where('id_dump_kapal_al', $id);
        $this->db->delete('kapal_al', array('id_dump_kapal_al' => $id));
    }


    function jenis_kapal_al() {
        $q = $this->db->query("SELECT * FROM jenis_barang where idkomoditi = '14'");
        return $q->result();
    }

	

	

//-------------------------------------------------------------------------------------
	//AMUNISI AL
	
	function amunisi_al() {
        
		$this->db->order_by('id', 'asc');
        $query = $this->db->get("amunisi_dump_al");
        return $query->result();
		
	}

    function tambah_amunisi_al() {
        $data = array(
            'id_kesatuan' => (int) $this->input->post('kesatuan'),
            'id_jenis' => $this->input->post('jenis'),
            'id_fungsi' => $this->input->post('fungsi'),
            'id_barang' => $this->input->post('barang'),
			'keterangan' => $this->input->post('keterangan'),
			'insert_date' => $this->input->post('insert_date')
        );
        $this->db->insert('amunisi_dump_al', $data);
		
    }

    public function edit_amunisi_al($id) {
        $this->db->where('id', $id);
        $get_data = $this->db->get('amunisi_dump_al');
        return $get_data;
    }

    function proses_edit_amunisi_al($id) {
        $data = array(
            'id_kesatuan' => (int) $this->input->post('kesatuan'),
            'id_jenis' => $this->input->post('jenis'),
            'id_fungsi' => $this->input->post('fungsi'),
            'id_barang' => $this->input->post('barang'),
			'keterangan' => $this->input->post('keterangan'),
			'insert_date' => $this->input->post('insert_date')
        );

        $this->db->where('id', $id);
        $this->db->update('amunisi_al', $data);
    }

    function hapus_amunisi_al($id) {
		$this->db->where('id', $id);
        $this->db->delete('amunisi_dump_al', array('id' => $id));
	
        $this->db->where('id_dump_amunisi_al', $id);
        $this->db->delete('amunisi_al', array('id_dump_amunisi_al' => $id));
    }


    function jenis_amunisi_al() {
        $q = $this->db->query("SELECT * FROM jenis_barang where idkomoditi = '12'");
        return $q->result();
    }
	
	function jenis_senjata1_al() {
        $q = $this->db->query("SELECT * FROM barang where idfungsi>='3' and idfungsi<='12'");
        return $q->result();
    }
	
	
	function kesatuan_al() {
        $q = $this->db->query("SELECT * 
            FROM
            kesatuan
            where
            kesatuan.idinduk = '3'");
        return $q->result();
    }
    
    function fungsi_al() {
        $q = $this->db->query("SELECT * FROM fungsi_barang");
        return $q->result();
    }

    function barang_al() {
        $q = $this->db->query("SELECT * FROM barang");
        return $q->result();
    }
  
////////////////////////////////////////AMUNISI TNI AD///////////////////////////////////////////

function amunisi_ad() {
        
		$this->db->order_by('id', 'asc');
        $query = $this->db->get("amunisi_dump_ad");
        return $query->result();
		
	}

    function tambah_amunisi_ad() {
        $data = array(
            'id_kesatuan' => (int) $this->input->post('kesatuan'),
            'id_jenis' => $this->input->post('jenis'),
            'id_fungsi' => $this->input->post('fungsi'),
            'id_barang' => $this->input->post('barang'),
			'keterangan' => $this->input->post('keterangan'),
			'insert_date' => $this->input->post('insert_date')
        );
        $this->db->insert('amunisi_dump_ad', $data);
		
    }

    public function edit_amunisi_ad($id) {
        $this->db->where('id', $id);
        $get_data = $this->db->get('amunisi_dump_ad');
        return $get_data;
    }

    function proses_edit_amunisi_ad($id) {
        $data = array(
            'id_kesatuan' => (int) $this->input->post('kesatuan'),
            'id_jenis' => $this->input->post('jenis'),
            'id_fungsi' => $this->input->post('fungsi'),
            'id_barang' => $this->input->post('barang'),
			'keterangan' => $this->input->post('keterangan'),
			'insert_date' => $this->input->post('insert_date')
        );

        $this->db->where('id', $id);
        $this->db->update('amunisi_ad', $data);
    }

    function hapus_amunisi_ad($id) {
		$this->db->where('id', $id);
        $this->db->delete('amunisi_dump_ad', array('id' => $id));
	
        $this->db->where('id_dump_amunisi_ad', $id);
        $this->db->delete('amunisi_ad', array('id_dump_amunisi_ad' => $id));
    }


    function jenis_amunisi_ad() {
        $q = $this->db->query("SELECT * FROM jenis_barang where idkomoditi = '2'");
        return $q->result();
    }
	
	function jenis_senjata1_ad() {
        $q = $this->db->query("SELECT * FROM barang where idfungsi>='26' and idfungsi<='29'");
        return $q->result();
    }
    
    function fungsi_ad() {
        $q = $this->db->query("SELECT * FROM fungsi_barang");
        return $q->result();
    }

    function barang_ad() {
        $q = $this->db->query("SELECT * FROM barang");
        return $q->result();
    }
	
	
	//============================== CETAK SENJATA AU =======================================================//
	
	public function data_sejata_au(){
		
		$query = $this->db->query('
		
			SELECT
				sen.*,
				kes.kesatuan,
				jen.jenis,
				fun.fungsi,
				bar.barang
				
			FROM
				senjata_au sen,
				kesatuan kes,
				jenis_barang jen,
				fungsi_barang fun,
				barang bar
			WHERE
				sen.id_kesatuan = kes.id AND
				sen.id_jenis = jen.id AND
				sen.id_fungsi = fun.id AND
				sen.id_barang = bar.id

		
		');
		return $query->result();
		
	}

	//============================== CETAK ALPALSUS AU =======================================================//
	
	public function data_alpalsus_au(){
		
		$query = $this->db->query('
		
			SELECT
				alp.*,
				kes.kesatuan,
				jen.jenis,
				fun.fungsi,
				bar.barang
				
			FROM
				alpalsus_au alp,
				kesatuan kes,
				jenis_barang jen,
				fungsi_barang fun,
				barang bar
			WHERE
				alp.id_kesatuan = kes.id AND
				alp.id_jenis = jen.id AND
				alp.id_fungsi = fun.id AND
				alp.id_barang = bar.id
		');
		return $query->result();
		
	}

}



?>