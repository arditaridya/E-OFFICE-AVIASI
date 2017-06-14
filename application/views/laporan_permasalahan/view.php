<?php
$x = explode("_",$this->uri->segment(3));

$bulan_default = 0;
$tahun_default = 0;
$label = "";
// 20160606 if(!empty($this->uri->segment(3)) and $this->uri->segment(3) != "0-0"){
if($x[0] != "0-0"){
	// 20160606 $x_tgl = explode("-",$this->uri->segment(3));
	$x_tgl = explode("-",$x[0]);
	$bulan_default = $x_tgl[0];
	$tahun_default = $x_tgl[1];
	
	if($bulan_default == "1"){
		$bulan_label = "Januari";
	}else if($bulan_default == "2"){
		$bulan_label = "Februari";
	}else if($bulan_default == "3"){
		$bulan_label = "Maret";
	}else if($bulan_default == "4"){
		$bulan_label = "April";
	}else if($bulan_default == "5"){
		$bulan_label = "Mei";
	}else if($bulan_default == "6"){
		$bulan_label = "Juni";
	}else if($bulan_default == "7"){
		$bulan_label = "Juli";
	}else if($bulan_default == "8"){
		$bulan_label = "Agustus";
	}else if($bulan_default == "9"){
		$bulan_label = "September";
	}else if($bulan_default == "10"){
		$bulan_label = "Oktober";
	}else if($bulan_default == "11"){
		$bulan_label = "November";
	}else if($bulan_default == "12"){
		$bulan_label = "Desember";
	}
	
	$label = "SAMPAI DENGAN ".strtoupper($bulan_label)." ".$tahun_default;
}
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <?php $this->load->view('v_header') ?>
    <body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo page-container-bg-solid">
        <?php $this->load->view('v_horizontal_menu') ?>
        <div class="clearfix">
        </div>

        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <?php $this->load->view('v_sidebar') ?>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>
                                <a href="<?php ?>">Laporan Permasalahan (<font color="blue"> <?php echo $nama_lanud; ?> </font>)</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
							 
                            
                            
                        </ul>
                        <div class="page-toolbar">
                            <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm btn-default" data-container="body" data-placement="bottom" data-original-title="Kalender">
                                <i class="icon-calendar"></i>&nbsp; 
                                <span class="thin uppercase visible-lg-inline-block">&nbsp;</span>&nbsp; 
                                <i class="fa fa-angle-down"></i>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE HEADER-->
                    <h3 class="page-title"><?php// echo $judul; ?></h3>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet box blue">
                                <div class="portlet-title">
                                    <div class="caption">
                                        Laporan Permasalahan
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse">
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                	<div class="form-inline">
                                    <select id="bulan" class="form-control">
                                    	<option value="0">- Pilih Bulan -</option>
                                        <option value="1" <?php echo ($bulan_default == "1")?"selected":""; ?>>Januari</option>
                                        <option value="2" <?php echo ($bulan_default == "2")?"selected":""; ?>>Februari</option>
                                        <option value="3" <?php echo ($bulan_default == "3")?"selected":""; ?>>Maret</option>
                                        <option value="4" <?php echo ($bulan_default == "4")?"selected":""; ?>>April</option>
                                        <option value="5" <?php echo ($bulan_default == "5")?"selected":""; ?>>Mei</option>
                                        <option value="6" <?php echo ($bulan_default == "6")?"selected":""; ?>>Juni</option>
                                        <option value="7" <?php echo ($bulan_default == "7")?"selected":""; ?>>Juli</option>
                                        <option value="8" <?php echo ($bulan_default == "8")?"selected":""; ?>>Agustus</option>
                                        <option value="9" <?php echo ($bulan_default == "9")?"selected":""; ?>>September</option>
                                        <option value="10" <?php echo ($bulan_default == "10")?"selected":""; ?>>Oktober</option>
                                        <option value="11" <?php echo ($bulan_default == "11")?"selected":""; ?>>November</option>
                                        <option value="12" <?php echo ($bulan_default == "12")?"selected":""; ?>>Desember</option>
                                    </select>
                                    
                                    <select id="tahun" class="form-control">
                                    	<option value="0">- Pilih Tahun -</option>
                                        <?php for($a=date('Y');$a>=date('Y')-20;$a--){ ?>
                                        <option value="<?php echo $a; ?>" <?php echo ($tahun_default == $a)?"selected":""; ?>><?php echo $a; ?></option>
                                        <?php } ?>
                                    </select>
                                    
                                    <input type="button" class="btn btn-primary" value="Cari" onClick="search()">
                                    </div>
                                    
                                	<center><h4>
                                    	DATA BARANG MILIK NEGARA TANAH DAN BANGUNAN BERMASALAH
                                        <br>
                                        DI LINGKUNGAN TNI AU <?php echo $label; ?>
                                    </h4></center>
                                    <table class="table table-striped table-bordered table-hover table-responsive">
                                        <thead>
                                            <tr>
                                                <th rowspan="3">No</th>
												<th rowspan="3">Kementerian Negara / Lembaga</th>
												<th rowspan="3">Nama Satker</th>
                                                <!-- 20160606
                                                <th colspan="2">Alamat Aset</th>
                                                -->
                                                <th rowspan="3">Alamat Aset</th>
                                                <th colspan="4">Jenis Aset</th>
                                                <th rowspan="3">Nilai Aset</th>
												<th rowspan="3">Permasalahan</th>
                                                <th rowspan="3">Hasil Klarifikasi / Progres</th>
                                                <th rowspan="3">Tindak Lanjut Penyelesaian</th>
                                            </tr>
                                            <tr>
                                            	<!-- 20160606
                                                <th rowspan="2">Provinsi</th>
                                                <th rowspan="2">Alamat</th>
                                                -->
                                                <th colspan="2">Tanah</th>
                                                <th colspan="2">Bangunan</th>
                                            </tr>
                                            <tr>
                                            	<th>Luas (M2)</th>
                                                <th>Nilai (Rp)</th>
                                                <th>Luas (M2)</th>
                                                <th>Nilai (Rp)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<tr align="center">
                                            	<td>1</td>
                                                <td>2</td>
                                                <td>3</td>
                                                <td>4</td>
                                                <td>5</td>
                                                <td>6</td>
                                                <td>7</td>
                                                <td>8</td>
                                                <td>9</td>
                                                <td>10</td>
                                                <td>11</td>
                                                <td>12</td>
                                                <!-- 20160606
                                                <td>13</td>
                                                -->
                                            </tr>
                                            <?php
                                            $no = 1;
										   foreach ($data as $row) {
                                                ?>
                                                <tr class="odd gradeX" >
                                                    <td align="center"><?php echo $no; ?></td>
                                                    <td><?php echo $row->kotama; ?></td>
                                                    <td><?php echo $row->lanud; ?></td>
                                                    <!-- 20160606
                                                    <td></td>
                                                    -->
                                                    <td><?php echo $row->lokasi; ?></td>
                                                    <?php /* 20160606 ?>
                                                    <td align="right"><?php echo number_format($row->luas,0,",","."); ?></td>
                                                    <td align="right"><?php echo number_format($row->nilai,0,",","."); ?></td>
                                                    <?php */ ?>
                                                    <td align="right"><?php echo ($row->bmn == "1")?number_format($row->tanah,0,",","."):"-"; ?></td>
                                                    <td align="right"><?php echo ($row->bmn == "1")?number_format($row->sewa,0,",","."):"-"; ?></td>
                                                    <td align="right"><?php echo ($row->bmn == "2")?number_format($row->bangunan,0,",","."):"-"; ?></td>
                                                    <td align="right"><?php echo ($row->bmn == "2")?number_format($row->sewa,0,",","."):"-"; ?></td>
                                                    <td align="right"><?php echo number_format($row->nilai,0,",","."); ?></td>
                                                    <td><?php echo $row->permasalahan; ?></td>
                                                    <td><?php echo $row->hasil_klarifikasi; ?></td>
                                                    <td><?php echo $row->tindak_lanjut; ?></td>
                                                </tr>
                                                <?php
                                                $no++;
                                            }
											
											if(empty($data)){
                                            ?>
                                            <tr>
                                            	<!-- 20160606
                                                <td colspan="13" style="color:#666"><em><strong>Data Tidak Ada</strong></em></td>
                                                -->
                                                <td colspan="12" style="color:#666"><em><strong>Data Tidak Ada</strong></em></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <a href="<?php echo site_url(); ?>laporan_permasalahan/cetak/<?php echo $this->uri->segment(3); ?>" class="btn btn-warning" target="_blank">Print</a>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <?php $this->load->view('v_footer') ?>
    </body>
    <!-- END BODY -->
</html>

<script>
function search(){
	window.location.href='<?php echo site_url(); ?>laporan_permasalahan/index/'+$('#bulan').val()+'-'+$('#tahun').val()+'<?php echo "_".$x[1]."_".$x[2]."_".$x[3]; ?>';
}
</script>