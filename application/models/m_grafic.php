<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

/**
* 
*/
class M_grafic extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function senjata_ad($tahun,$bulan){
		$bc = $this->db->query('
			select
			  ifnull((SELECT sum(b_kia) FROM (senjata_ad)WHERE((Month(tanggal_input)='.$bulan.') AND (YEAR(tanggal_input)='.$tahun.'))),0) AS `b_kai`,
			  ifnull((SELECT sum(b_dia) FROM (senjata_ad)WHERE((Month(tanggal_input)='.$bulan.') AND (YEAR(tanggal_input)='.$tahun.'))),0) AS `b_dia`,
			  ifnull((SELECT sum(rr_kia) FROM (senjata_ad)WHERE((Month(tanggal_input)='.$bulan.') AND (YEAR(tanggal_input)='.$tahun.'))),0) AS `rr_kai`,
			  ifnull((SELECT sum(rr_dia) FROM (senjata_ad)WHERE((Month(tanggal_input)='.$bulan.') AND (YEAR(tanggal_input)='.$tahun.'))),0) AS `rr_dia`,
			  ifnull((SELECT sum(rb_kia) FROM (senjata_ad)WHERE((Month(tanggal_input)='.$bulan.') AND (YEAR(tanggal_input)='.$tahun.'))),0) AS `rb_kai`,
			  ifnull((SELECT sum(rb_dia) FROM (senjata_ad)WHERE((Month(tanggal_input)='.$bulan.') AND (YEAR(tanggal_input)='.$tahun.'))),0) AS `rb_dia`
			 from senjata_ad GROUP BY YEAR(tanggal_input)
			');
		return $bc;
	}

	function senjata_al($tahun,$bulan){
		$bc = $this->db->query('
			select
			  ifnull((SELECT sum(pemakaian_sp) FROM (senjata_al)WHERE((Month(tanggal_input)='.$bulan.')AND (YEAR(tanggal_input)='.$tahun.'))),0) AS `kai_sp`,
			  ifnull((SELECT sum(pemakaian_tsp) FROM (senjata_al)WHERE((Month(tanggal_input)='.$bulan.')AND (YEAR(tanggal_input)='.$tahun.'))),0) AS `kai_tsp`,
			  ifnull((SELECT sum(persediaan_sp) FROM (senjata_al)WHERE((Month(tanggal_input)='.$bulan.')AND (YEAR(tanggal_input)='.$tahun.'))),0) AS `dia_sp`,
			  ifnull((SELECT sum(persediaan_tsp) FROM (senjata_al)WHERE((Month(tanggal_input)='.$bulan.')AND (YEAR(tanggal_input)='.$tahun.'))),0) AS `dia_tsp`
			 from senjata_al GROUP BY YEAR(tanggal_input)
			');
		return $bc;
	}

	function senjata_au($tahun,$bulan){
		$bc = $this->db->query('
			select
			  ifnull((SELECT sum(baik) FROM (senjata_au)WHERE((Month(insert_date)='.$bulan.')AND (YEAR(insert_date)='.$tahun.'))),0) AS `b`,
			  ifnull((SELECT sum(rusak_ringan) FROM (senjata_au)WHERE((Month(insert_date)='.$bulan.')AND (YEAR(insert_date)='.$tahun.'))),0) AS `rr`,
			  ifnull((SELECT sum(rusak_berat) FROM (senjata_au)WHERE((Month(insert_date)='.$bulan.')AND (YEAR(insert_date)='.$tahun.'))),0) AS `rb`
			 from senjata_au GROUP BY YEAR(insert_date)
			');
		return $bc;
	}

// +----------------------------------------------------------------------------------------------------------+
// |---------------- UMUM ------------------------- UMUM ---------------------- UMUM -------------------------|
// +----------------------------------------------------------------------------------------------------------+

	function get_jenis($idkomoditi){
        $q = $this->db->query("SELECT * FROM jenis_barang WHERE idkomoditi=".$idkomoditi."");
        return $q->result();
    }

    function get_fungsi($kdjenis){
        $q = $this->db->query("SELECT * FROM fungsi_barang WHERE idjenis=".$kdjenis."");
        return $q->result();
    }

    function barang_all(){
    	$q = $this->db->query("SELECT * FROM barang");
    	return $q->result();
    }

// ____________________________________________________________________________________________________________


// +----------------------------------------------------------------------------------------------------------+
// |----------- GRAFIC TNI AD ---------------- GRAFIC TNI AD ---------------- GRAFIC TNI AD ------------------|
// +----------------------------------------------------------------------------------------------------------+

/* ::::::::::::: SENJATA ::::::::::::::: SENJATA ::::::::::::::::::::::::::::::: */
	function tahun_senjataad(){
		$q = $this->db->query("SELECT YEAR(tanggal_input) as tahun
			FROM `senjata_ad` 
			GROUP BY YEAR(tanggal_input)
			");
		return $q->result();
	}

	function show_senjataad($fungsi,$tahun){
		$q = $this->db->query("SELECT
				id_barang,
				SUM(b_kia) as b_kia,
				SUM(b_dia) as b_dia,
				SUM(rr_kia) as rr_kia,
				SUM(rr_dia) as rr_dia,
				SUM(rb_kia) as rb_kia,
				SUM(rb_dia) as rb_dia
			FROM senjata_ad
			WHERE id_fungsi = $fungsi
			AND YEAR(tanggal_input) = $tahun
			GROUP BY id_barang
			");
		return $q->result();
	}

/* ::::::::::::: AMUNISI ::::::::::::::: AMUNISI ::::::::::::::::::::::::::::::: */
	function tahun_amunisiad(){
		$q = $this->db->query("SELECT YEAR(insert_date) as tahun
			FROM amunisi_ad 
			GROUP BY YEAR(insert_date)
			");
		return $q->result();
	}

	function show_amunisiad($fungsi,$tahun){
		$q = $this->db->query("SELECT
				a.id_barang,
				SUM(b.persediaan_satuan) as persediaan_satuan,
				SUM(b.persediaan_daerah) as persediaan_daerah,
				SUM(b.persediaan_pusat) as persediaan_pusat
			FROM
				amunisi_dump_ad a,
				amunisi_ad b
			WHERE
				a.id = b.id_dump_amunisi_ad
			AND
				a.id_fungsi = $fungsi
			AND
				YEAR(a.insert_date) = $tahun
			GROUP BY
				a.id_barang
			");
		return $q->result();
	}

/* ::::::::::::: KAPAL ::::::::::::::: KAPAL ::::::::::::::::::::::::::::::: */
	function tahun_kapalad(){
		$q = $this->db->query("SELECT YEAR(tanggal_input) as tahun
			FROM kapal_ad 
			GROUP BY YEAR(tanggal_input)
			");
		return $q->result();
	}

	function show_kapalad($fungsi,$tahun){
		$q = $this->db->query("SELECT
				id_barang,
				SUM(s_ops) as s_ops, 
				SUM(ts_ops) as ts_ops, 
				SUM(kons_noops) as kons_noops, 
				SUM(rb_noops) as rb_noops, 
				SUM(tl_noops) as tl_noops
			FROM 
				kapal_ad
			WHERE 
				id_fungsi = $fungsi 
			AND 
				YEAR(tanggal_input) = $tahun 
			GROUP BY 
				id_barang
			");
		return $q->result();
	}

/* ::::::::::::: ALPALSUS ::::::::::::::: ALPALSUS ::::::::::::::::::::::::::::::: */
	function tahun_alpalsusad(){
		$q = $this->db->query("SELECT YEAR(tanggal_input) as tahun
			FROM alpalsus_ad 
			GROUP BY YEAR(tanggal_input)
			");
		return $q->result();
	}

	function show_alpalsusad($fungsi,$tahun){
		$q = $this->db->query("SELECT
				id_barang,
				SUM(b_kia) as b_kia,
				SUM(b_dia) as b_dia,
				SUM(rr_kia) as rr_kia,
				SUM(rr_dia) as rr_dia,
				SUM(rb_kia) as rb_kia,
				SUM(rb_dia) as rb_dia
			FROM 
				alpalsus_ad
			WHERE 
				id_fungsi = $fungsi
			AND 
				YEAR(tanggal_input) = $tahun
			GROUP BY 
				id_barang
			");
		return $q->result();
	}

/* ::::::::::::: ALPALSUS ::::::::::::::: ALPALSUS ::::::::::::::::::::::::::::::: */
	function tahun_aloptikad(){
		$q = $this->db->query("SELECT YEAR(tanggal_input) as tahun
			FROM aloptik_ad 
			GROUP BY YEAR(tanggal_input)
			");
		return $q->result();
	}

	function show_aloptikad($fungsi,$tahun){
		$q = $this->db->query("SELECT
				id_barang,
				SUM(b_kia) as b_kia,
				SUM(b_dia) as b_dia,
				SUM(rr_kia) as rr_kia,
				SUM(rr_dia) as rr_dia,
				SUM(rb_kia) as rb_kia,
				SUM(rb_dia) as rb_dia
			FROM 
				aloptik_ad
			WHERE 
				id_fungsi = $fungsi
			AND 
				YEAR(tanggal_input) = $tahun
			GROUP BY 
				id_barang
			");
		return $q->result();
	}

/* ::::::::::::: PESAWAT ::::::::::::::: PESAWAT ::::::::::::::::::::::::::::::: */
	function tahun_pesawatad(){
		$q = $this->db->query("SELECT YEAR(tgl) as tahun
			FROM pesawat_ad 
			GROUP BY YEAR(tgl)
			");
		return $q->result();
	}

	function show_pesawatad($fungsi,$tahun){
		$q = $this->db->query("SELECT
				barang,
				SUM(jml_op) as jml_op,
				SUM(jml_non_op) as jml_non_op
			FROM 
				pesawat_ad
			WHERE 
				fungsi = $fungsi
			AND 
				YEAR(tgl) = $tahun
			GROUP BY 
				barang
			");
		return $q->result();
	}

/* ::::::::::::: RANPUR ::::::::::::::: RANPUR ::::::::::::::::::::::::::::::: */
	function tahun_ranpurad(){
		$q = $this->db->query("SELECT YEAR(tgl) as tahun
			FROM ranpur_ad 
			GROUP BY YEAR(tgl)
			");
		return $q->result();
	}

	function show_ranpurad($fungsi,$tahun){
		$q = $this->db->query("SELECT
				barang,
				SUM(s_op) as s_op,
				SUM(ts_op) as ts_op,
				SUM(kons_nop) as kons_nop,
				SUM(rb_nop) as rb_nop,
				SUM(tl_nop) as tl_nop
			FROM 
				ranpur_ad
			WHERE 
				fungsi = $fungsi
			AND 
				YEAR(tgl) = $tahun
			GROUP BY 
				barang
			");
		return $q->result();
	}

/* ::::::::::::: RANMOR ::::::::::::::: RANMOR ::::::::::::::::::::::::::::::: */
	function tahun_ranmorad(){
		$q = $this->db->query("SELECT YEAR(tgl) as tahun
			FROM ranmor_ad 
			GROUP BY YEAR(tgl)
			");
		return $q->result();
	}

	function show_ranmorad($fungsi,$tahun){
		$q = $this->db->query("SELECT
				barang,
				SUM(b) as b,
				SUM(rr) as rr,
				SUM(rb) as rb
			FROM 
				ranmor_ad
			WHERE 
				fungsi = $fungsi
			AND 
				YEAR(tgl) = $tahun
			GROUP BY 
				barang
			");
		return $q->result();
	}

/* ::::::::::::: SENJATA PESAWAT ::::::::::::::: SENJATA PESAWAT ::::::::::::::::::::::::::::::: */
	function tahun_senjatapesawatad(){
		$q = $this->db->query("SELECT YEAR(tgl) as tahun
			FROM senjata_pesawat_ad 
			GROUP BY YEAR(tgl)
			");
		return $q->result();
	}

	function show_senjatapesawatad($fungsi,$tahun){
		$q = $this->db->query("SELECT
				barang,
				SUM(b) as b,
				SUM(rr) as rr,
				SUM(rb) as rb
			FROM 
				senjata_pesawat_ad
			WHERE 
				fungsi = $fungsi
			AND 
				YEAR(tgl) = $tahun
			GROUP BY 
				barang
			");
		return $q->result();
	}

/* ::::::::::::: AMUNISI PESAWAT ::::::::::::::: AMUNISI PESAWAT ::::::::::::::::::::::::::::::: */
	function tahun_amunisipesawatad(){
		$q = $this->db->query("SELECT YEAR(tgl) as tahun
			FROM amunisi_pesawat_ad 
			GROUP BY YEAR(tgl)
			");
		return $q->result();
	}

	function show_amunisipesawatad($fungsi,$tahun){
		$q = $this->db->query("SELECT
				barang,
				SUM(b) as b,
				SUM(rr) as rr,
				SUM(rb) as rb
			FROM 
				amunisi_pesawat_ad
			WHERE 
				fungsi = 99
			AND 
				YEAR(tgl) = 2015
			GROUP BY 
				barang
			");
		return $q->result();
	}



// ____________________________________________________________________________________________________________

// +----------------------------------------------------------------------------------------------------------+
// |----------- GRAFIC TNI AL ---------------- GRAFIC TNI AL ---------------- GRAFIC TNI AL ------------------|
// +----------------------------------------------------------------------------------------------------------+

/* ::::::::::::: Senjata ::::::::::::::: Senjata ::::::::::::::::::::::::::::::: */
	function tahun_senjataal(){
		$q = $this->db->query("SELECT YEAR(tanggal_input) as tahun
			FROM `senjata_al` 
			GROUP BY YEAR(tanggal)
			");
		return $q->result();
	}

	function show_senjataal($fungsi,$tahun){
		$q = $this->db->query("SELECT
				id_barang,
				SUM(pemakaian_sp) as pemakaian_sp,
				SUM(pemakaian_tsp) as pemakaian_tsp,
				SUM(persediaan_sp) as persediaan_sp,
				SUM(persediaan_tsp) as persediaan_tsp
			FROM senjata_al
			WHERE id_fungsi = ".$fungsi." AND
				  YEAR(tanggal) = ". $tahun ."
			GROUP BY id_barang
			");
		return $q->result();
	}

// ____________________________________________________________________________________________________________

/* ::::::::::::: Kapal ::::::::::::::: Kapal ::::::::::::::::::::::::::::::: */
	function tahun_kapalal(){

		$q = $this->db->query("SELECT YEAR(insert_date) as tahun
			FROM `kapal_al` 
			GROUP BY YEAR(insert_date)
			");
		return $q->result();
	}

	function show_kapalal($fungsi,$tahun){
		$q = $this->db->query("SELECT kapal_dump_al.id,id_kesatuan,id_jenis,id_fungsi,id_barang,kapal_al.id,SUM(tingkat_kesiapan='S') as tingkat_siap,SUM(tingkat_kesiapan='TS') as tingkat_tdk_siap,SUM(kondisi='B') as kondisi_baik,SUM(kondisi='RR') as kondisi_rr,SUM(kondisi='RB') as kondisi_rb
	from kapal_dump_al,kapal_al
	where
	kapal_dump_al.id=kapal_al.id_dump_kapal_al AND
	kapal_dump_al.id_fungsi = ".$fungsi." AND
	YEAR(insert_date) = ". $tahun ."
	group by 
	kapal_dump_al.id_barang
			");
		return $q->result();
	}

// ____________________________________________________________________________________________________________	

/* ::::::::::::: PESAWAT ::::::::::::::: PESAWAT ::::::::::::::::::::::::::::::: */
	function tahun_pesawatal(){
		$q = $this->db->query("SELECT YEAR(tanggal) as tahun
			FROM `pesawat_al` 
			GROUP BY YEAR(tanggal)
			");
		return $q->result();
	}

	function show_pesawatal($fungsi,$tahun){
		$q = $this->db->query("SELECT id_pesawat, SUM( s ) AS ops_siap, SUM( ts ) AS ops_tdk_siap, SUM( grd ) AS non_ops_grd, SUM( kons ) AS non_ops_kons, SUM( rb ) AS non_ops_rb, SUM( tl ) AS non_ops_tl
			FROM pesawat_al
			WHERE id_fungsi = ".$fungsi." AND
				  YEAR(tanggal) = ". $tahun ."
			GROUP BY id_pesawat
			");
		return $q->result();
	}

// ____________________________________________________________________________________________________________	

/* ::::::::::::: RANPUR ::::::::::::::: RANPUR ::::::::::::::::::::::::::::::: */
	function tahun_ranpural(){
		$q = $this->db->query("SELECT YEAR(tgl) as tahun
			FROM `ranpur_al` 
			GROUP BY YEAR(tgl)
			");
		return $q->result();
	}

	function show_ranpural($fungsi,$tahun){
		$q = $this->db->query("SELECT barang, SUM( b ) AS ops_baik, SUM( rr ) AS ops_rusak_ringan, SUM( rb ) AS ops_rusak_berat, SUM( kons ) AS non_ops_kons, SUM( rbe ) AS non_ops_rbe, SUM( tl ) AS non_ops_tl, SUM( reran ) AS non_ops_reran
			FROM ranpur_al
			WHERE fungsi = ".$fungsi." AND
			YEAR(tgl) = ". $tahun ."
			GROUP BY barang
			");
		return $q->result();
	}

// ____________________________________________________________________________________________________________	

/* ::::::::::::: AMUNISI ::::::::::::::: AMUNISI ::::::::::::::::::::::::::::::: */
	function tahun_amunisial(){
		$q = $this->db->query("SELECT YEAR(insert_date) as tahun
			FROM `amunisi_al` 
			GROUP BY YEAR(insert_date)
			");
		return $q->result();
	}

	function show_amunisial($fungsi,$tahun){
		$q = $this->db->query("SELECT amunisi_dump_al.id, id_kesatuan, id_jenis, id_fungsi, id_barang, amunisi_dump_al.insert_date as tgl, amunisi_al.id, SUM( arsenal_siap ) AS arsenal_s, SUM( arsenal_tdk_siap ) AS arsenal_ts, SUM( satkai_siap ) AS satkai_s, SUM( satkai_tdk_siap ) AS satkai_ts 
			FROM amunisi_dump_al, amunisi_al 
			WHERE amunisi_dump_al.id = amunisi_al.id_dump_amunisi_al AND
				  id_fungsi = ".$fungsi." AND
				  YEAR(amunisi_dump_al.insert_date)  = ". $tahun ."
			GROUP BY id_barang
			");
		return $q->result();
	}

// ____________________________________________________________________________________________________________	

// +----------------------------------------------------------------------------------------------------------+
// |----------- GRAFIC TNI AU ---------------- GRAFIC TNI AU ---------------- GRAFIC TNI AU ------------------|
// +----------------------------------------------------------------------------------------------------------+

/* ::::::::::::: Senjata ::::::::::::::: Senjata ::::::::::::::::::::::::::::::: */
	function tahun_senjataau(){
		$q = $this->db->query("SELECT YEAR(insert_date) as tahun
			FROM `senjata_au` 
			GROUP BY YEAR(insert_date)
			");
		return $q->result();
	}

	function show_senjataau($fungsi,$tahun){
		$q = $this->db->query("SELECT id_barang, SUM( baik ) AS baik, SUM( rusak_ringan ) AS rusak_ringan, SUM( rusak_berat ) AS rusak_berat
			FROM senjata_au
			WHERE id_fungsi = ".$fungsi." AND
				  YEAR(insert_date) = ". $tahun ."
			GROUP BY id_barang
			");
		return $q->result();
	}

// ____________________________________________________________________________________________________________

/* ::::::::::::: PESAWAT ::::::::::::::: PESAWAT ::::::::::::::::::::::::::::::: */
	function tahun_pesawatau(){
		$q = $this->db->query("SELECT YEAR(insert_date) as tahun
			FROM `pesawat_au` 
			GROUP BY YEAR(insert_date)
			");
		return $q->result();
	}

	function show_pesawatau($fungsi,$tahun){
		$q = $this->db->query("SELECT id_barang, SUM( siap ) AS siap, SUM( har_ringan ) AS har_ringan, SUM( har_sedang ) AS har_sedang, SUM( har_berat ) AS har_berat, SUM( awp ) AS awp
			FROM pesawat_au
			WHERE id_fungsi = ".$fungsi." AND
				  YEAR(insert_date) = ". $tahun ."
			GROUP BY id_barang
			");
		return $q->result();
	}

// ____________________________________________________________________________________________________________	

/* ::::::::::::: ALPALSUS ::::::::::::::: ALPALSUS ::::::::::::::::::::::::::::::: */
	function tahun_alpalsusau(){
		$q = $this->db->query("SELECT YEAR(insert_date) as tahun
			FROM `alpalsus_au` 
			GROUP BY YEAR(insert_date)
			");
		return $q->result();
	}

	function show_alpalsusau($fungsi,$tahun){
		$q = $this->db->query("SELECT id_barang, SUM( kondisi_primary =  'S' ) AS kp_s, SUM( kondisi_primary =  'US' ) AS kp_us, SUM( kondisi_secondary =  'S' ) AS ks_s, SUM( kondisi_secondary =  'NIL' ) AS ks_nil
			FROM alpalsus_au
			WHERE id_fungsi = ".$fungsi." AND
				  YEAR(insert_date) = ". $tahun ."
			GROUP BY id_barang
			");
		return $q->result();
	}
/////note:laporan detail persatu barang dan grafik : kp_s,kp_us,ks_s,ks_nil///////////////////////
// ____________________________________________________________________________________________________________	

/* ::::::::::::: AMUNISI ::::::::::::::: AMUNISI ::::::::::::::::::::::::::::::: */
	function tahun_amunisiau(){
		$q = $this->db->query("SELECT YEAR(insert_date) as tahun
			FROM `amunisi_au` 
			GROUP BY YEAR(insert_date)
			");
		return $q->result();
	}

	function show_amunisiau($fungsi,$tahun){
		$q = $this->db->query("SELECT amunisi_dump_au.id, id_kesatuan, id_jenis, id_fungsi, id_barang, amunisi_dump_au.insert_date AS tgl, amunisi_au.id, SUM( persediaan_pusat ) AS persediaan_pusat, SUM( persediaan_satuan ) AS persediaan_satuan
			FROM amunisi_dump_au, amunisi_au
			WHERE id_fungsi = ".$fungsi." AND
				  YEAR(amunisi_dump_au.insert_date) = ". $tahun ."
			GROUP BY id_barang
			");
		return $q->result();
	}

// ____________________________________________________________________________________________________________

}

?>