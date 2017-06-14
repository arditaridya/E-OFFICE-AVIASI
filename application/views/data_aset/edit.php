<?php	
foreach ($datzz as $value) {		
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
					<?php $zao = explode("_",$this->uri->segment(3)); 
					$lonk = $zao[1]."_".$zao[2]."_".$zao[3];
					//echo $lonk;die();
					?>
                        <ul class="page-breadcrumb">
                           
                            <li>
                                <a href="<?php echo site_url('data_aset/index/'.$lonk); ?>">List Data Aset (<font color="blue"> <?php echo $nama_lanud;?> </font>)</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="#">Tambah Data</a>
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
                    <h3 class="page-title"><?php //echo $judul; ?></h3>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet box blue">
                                <div class="portlet-title">
                                    <div class="caption">
                                        Form Input
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse">
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <!-- BEGIN FORM-->

                                    <form action="<?php echo base_url('data_aset/update/'.$this->uri->segment(3)); ?>" class="horizontal-form" method="post" enctype="multipart/form-data">
                                       

                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Satker</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control" name="halo" id="halo" value ="<?php echo $nama_lanud;?>" readonly>
															<input type="hidden" class="form-control" name="lanud" id="lanud" value ="<?php echo $id_lanud;?>" readonly>
                                                        
														</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">IKN</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control" name="ikn" id="ikn" value="<?php echo $value->ikn;?>">
															<input type="hidden" class="form-control" name="idupdate" id="idupdate" value="<?php echo $value->id;?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">SIMAK</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control" name="simak" id="simak" maxlength="14" value="<?php echo $value->simak;?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Lokasi</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control" name="lokasi" id="lokasi" value="<?php echo $value->lokasi;?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Provinsi</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <select class="form-control" name='provinsi' id='provinsi' onchange='getKab()'>
																<option value='0' selected>--- Pilih Provinsi ---</option>
																<?php foreach($provinsi as $row){ ?>
																<option value="<?php echo $row->id; ?>" <?php echo ($value->provinsi == $row->id)?"selected":""; ?>><?php echo $row->nama_provinsi; ?></option>
																<?php } ?>
															</select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Kabupaten</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
														<div id="statediv">
                                                            <select class="form-control" name='kabupaten' id='kabupaten' onchange='getKec()'>
																<option value='0' selected>--- Pilih Kabupaten ---</option>
																<?php foreach($kabupaten as $row){ ?>
																<option value="<?php echo $row->id; ?>" <?php echo ($value->kabupaten == $row->id)?"selected":""; ?>><?php echo $row->nama_kabupaten; ?></option>
																<?php } ?>
															</select>
                                                        </div>
														</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Kecamatan</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
														<div id="statediv2">
                                                            <select class="form-control" name='kecamatan' id='kecamatan' onchange='getKel()'>
																<option value='0' selected>--- Pilih Kecamatan ---</option>
																<?php foreach($kecamatan as $row){ ?>
																<option value="<?php echo $row->id; ?>" <?php echo ($value->kecamatan == $row->id)?"selected":""; ?>><?php echo $row->nama_kecamatan; ?></option>
																<?php } ?>
															</select>
														</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Kelurahan</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
														<div id="statediv3">
                                                            <select class="form-control" name='kelurahan' id='kelurahan'>
																<option value='0' selected>--- Pilih Kelurahan ---</option>
																<?php foreach($kelurahan as $row){ ?>
																<option value="<?php echo $row->id; ?>" <?php echo ($value->kelurahan == $row->id)?"selected":""; ?>><?php echo $row->nama_kelurahan; ?></option>
																<?php } ?>
															</select>
														</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Luas</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control" name="luas" id="luas" onkeyup="calculate1()" value="<?php echo $value->luas;?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Status Tanah</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <select class="form-control" name='status_tanah' id='status_tanah'>
																<option value='0' selected>--- Pilih Status Tanah ---</option>
																<?php foreach($statan as $row){ ?>
																<option value="<?php echo $row->id; ?>" <?php echo ($value->status_tanah == $row->id)?"selected":""; ?>><?php echo $row->status_tanah; ?></option>
																<?php } ?>
															</select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Dasar Perolehan</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <select class="form-control" name='dasar_perolehan' id='dasar_perolehan'>
																<option value='0' selected>--- Pilih Dasar Perolehan ---</option>
																<?php foreach($daper as $row){ ?>
																<option value="<?php echo $row->id; ?>" <?php echo ($value->dasar_perolehan == $row->id)?"selected":""; ?>><?php echo $row->dasar_perolehan; ?></option>
																<?php } ?>
															</select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3"> Keadaan Tanah</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <select class="form-control" name='keadaan_tanah' id='keadaan_tanah'>
																<option value='0' selected>--- Pilih Keadaan Tanah---</option>
																<option value='1' <?php echo ($value->keadaan_tanah == 1)?"selected":""; ?>>Bermasalah</option>
																<option value='2' <?php echo ($value->keadaan_tanah == 2)?"selected":""; ?>>Tidak Bermasalah</option>
															</select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Tahun Perolehan</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <!--<select class="form-control" name="tahun_perolehan" id="tahun_perolehan">
																	<option value="" selected>Pilih Tahun</option>";
																	<?php /*
																	$now=date("Y")+3; 
																		for($thn=1999; $thn<=$now; $thn++){  *?>
																		<option value="<?php echo $thn; ?>"><?php echo $thn; ?></option>
																	<?php } */ ?>
															</select>-->
															<input type="text" class="form-control" name="tahun_perolehan" id="tahun_perolehan" maxlength="4" value="<?php echo $value->tahun_perolehan;?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Peruntukan</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
															<input type="text" class="form-control" name="peruntukan" id="peruntukan" value="<?php echo $value->peruntukan;?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<hr>
										
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Batas Utara</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
															<input type="text" class="form-control" name="batas_utara" id="batas_utara" value="<?php echo $value->batas_utara;?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Batas Timur</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
															<input type="text" class="form-control" name="batas_timur" id="batas_timur" value="<?php echo $value->batas_timur;?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Batas Selatan</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
															<input type="text" class="form-control" name="batas_selatan" id="batas_selatan" value="<?php echo $value->batas_selatan;?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Batas Barat</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
															<input type="text" class="form-control" name="batas_barat" id="batas_barat" value="<?php echo $value->batas_barat;?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										
										
										<hr>
										
										<div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3"><b>KIB</b></label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                           <a class="btn btn-info" onclick="addKIB()">Tambah</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<!--<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">&nbsp;</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                             <input type="file" class="form-control" id="kib[]" name='kib[]'>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->
										
										<?php
										if($value->kib == null){
											echo "";
										}else{
										$perfile2 = explode(',', $value->kib);
										$numr = 1;
										foreach ($perfile2 as $i => $key){ ?>
										<div id="<?php echo $numr;?>">
											<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">&nbsp;</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                           <div><img src="<?php echo base_url(); ?>assets/upload/kib/<?php echo $key; ?>" width="100" /><input type="hidden" class="form-control" id="asalkib[]" name='asalkib[]' value="<?php echo $key;?>">&nbsp;&nbsp;<button class="btn red mini" type="button" onClick="HapusnyaKIB('<?php echo $numr ;?>')">Hapus</button></div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										</div>
										<?php $numr++; }} ?>
										
										
										</div>
										
										<br>
										
										<div id='halow'>
										</div>
										<hr>
										
										<div class="input_fields_wrap">
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3"><b>Sertifikat</b></label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                           <a class="btn btn-info" onclick="addSerti()">Tambah</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><?php	
										$num = 99;
										foreach ($detdat as $vlu) {		
										if ($vlu->jenis == 1){ 
										
										
										?>
										<div id="<?php echo $num;?>">
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">No Sertifikat</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                           <input type="text" class="form-control" name="no_sertifikat[]" id="no_sertifikat[]" value="<?php echo $vlu->no_sertifikat; ?>">
														</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Luas</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                           <input type="text" class="form-control luas" name="sert_luaz[]" id="sert_luaz[]" value="<?php echo $vlu->luas; ?>" onkeyup="calculate1()">
														</div>
                                                    </div>
                                                </div><button class="btn red mini" type="button" onClick="HapusnyaKIB('<?php echo $num ;?>')">Hapus</button>
                                            </div>
                                        </div>
										
										<br>
										</div>
										<?php $num++; }} ?>
										
										
										</div>
										
										<br>
										
										<div id='holla'>
										</div>
										<hr>
										
										
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3"><b>Belum Sertifikat</b></label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                           
														</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										<?php	
										if ($pastidua != 0){
										foreach ($detdat as $vlu) {		
										if ($vlu->jenis == 2){ 
										//echo $pastidua;
										?>
										
									
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Luas</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                           <input type="text" class="form-control" name="sert_luas" id="sert_luass" value="<?php echo $vlu->luas; ?>" onkeypress="return hanyaAngka(event, false)" readonly>
														</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<br>
										
										<?php }}}else{ ?>
										
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Luas</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                           <input type="text" class="form-control" name="sert_luas" id="sert_luass" value="0" onkeypress="return hanyaAngka(event, false)" readonly>
														</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<br>
										
										<?php } ?>
										<hr>
										
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Nilai</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control" name="nilai" id="nilai" onkeyup="actNumber(this.value)"  onkeypress='return event.charCode >= 48 && event.charCode <= 57 && event.charCode = 8' value="<?php echo number_format($value->nilai, 0, "," , "."); ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Keterangan</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <textarea class="form-control" name="keterangan" id="keterangan"><?php echo $value->keterangan;?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										<hr>
										
										<div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3"><b>Denah</b></label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                           <a class="btn btn-info" onclick="addUpload()">Tambah</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<!--<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">&nbsp;</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                             <input type="file" class="form-control" id="userfile[]" name='userfile[]'>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->
										
										<?php
										if($value->denah == null){
											echo " ";
										}else{
										$perfile = explode(',', $value->denah);
										$nums = 199;
										foreach ($perfile as $i => $key){ ?>
										<div id="<?php echo $nums;?>">
											<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">&nbsp;</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                           <div><img src="<?php echo base_url(); ?>assets/upload/denah/<?php echo $key; ?>" width="100" /><input type="hidden" class="form-control" id="asaldenah[]" name='asaldenah[]' value="<?php echo $key;?>">&nbsp;&nbsp;<button class="btn red mini" type="button" onClick="HapusnyaKIB('<?php echo $nums ;?>')">Hapus</button></div><br>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										</div>
										<?php $nums++; }} ?>
										
										
										</div>
										<br>
										<div id='upload'>
										</div>

                                        

                                        <br/>
                                        <div class="form-actions left">
                                            <button type="submit" name="SIMPAN" class="btn green"><i class="fa fa-check"></i> Simpan</button>
                                            <button type="button" class="btn yellow" onclick=self.history.back()><i class="fa fa-undo"></i> Batal</button>
                                    </form>
                                    <!-- END FORM-->

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
<script type="text/javascript">


function getXMLHTTP(){
	var xmlhttp=false;  
	try{
		xmlhttp=new XMLHttpRequest();
	}
	catch(e){
		try{
			xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
		}
		catch(e){
			try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
			}
			catch(e1){
				xmlhttp = false;
			}
		}
	}
	return xmlhttp;
}

	function getKab() {
	
		var strURL = "<?php echo base_url();?>data_aset/getkabupaten";
		var provinsi = document.getElementById('provinsi').value;
		//alert(lemari);
		

		var req = getXMLHTTP();
		if (req) {
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					if (req.status == 200) {
						document.getElementById('statediv').innerHTML=req.responseText;            
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}       
			}     
			//req.open("GET", strURL+ "?perusahaan=" + perusahaan, true);
			req.open("GET", strURL + "/" + provinsi, true);
			req.send(null);
		}


	}
	
	function getKec() {
	
		var strURL = "<?php echo base_url();?>data_aset/getkecamatan";
		var kabupaten = document.getElementById('kabupaten').value;
		//alert(kabupaten);
		

		var req = getXMLHTTP();
		if (req) {
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					if (req.status == 200) {
						document.getElementById('statediv2').innerHTML=req.responseText;            
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}       
			}     
			//req.open("GET", strURL+ "?perusahaan=" + perusahaan, true);
			req.open("GET", strURL + "/" + kabupaten, true);
			req.send(null);
		}


	}
	
	function getKel() {
	
		var strURL = "<?php echo base_url();?>data_aset/getkelurahan";
		var kecamatan = document.getElementById('kecamatan').value;
		//alert(kabupaten);
		

		var req = getXMLHTTP();
		if (req) {
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					if (req.status == 200) {
						document.getElementById('statediv3').innerHTML=req.responseText;            
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}       
			}     
			//req.open("GET", strURL+ "?perusahaan=" + perusahaan, true);
			req.open("GET", strURL + "/" + kecamatan, true);
			req.send(null);
		}


	}


$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div><div class="row"><div class="col-md-8"><div class="form-group"><label class="control-label col-md-3">No Sertifikat</label><div class="form-group"><div class="col-md-5"><input type="text" class="form-control" name="no_sertifikat[]" id="no_sertifikat[]"></div></div></div></div></div><div class="row"><div class="col-md-8"><div class="form-group"><label class="control-label col-md-3">Luas</label><div class="form-group"><div class="col-md-5"><input type="text" class="form-control luas" name="sert_luaz[]" id="sert_luaz[]" onkeyup="calculate1()"></div></div></div></div></div><a href="#" class="remove_field">X</a></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
	
/*	
$('input[name="sert_luaz[]"]').keyup(function(){
   var val = 0;
   $('input[name="sert_luaz[]"]').each(function() {
                val += Number($(this).val());
            });
    $('input[name="sert_luas"]').val(val);
});
*/
});
 function addUpload(){
			var rnumber3=Math.random();
			$('#upload').append('<div id='+ rnumber3 +'><div class="row"><div class="col-md-8"><div class="form-group"><label class="control-label col-md-3">&nbsp;</label><div class="col-sm-5"><input type="file" class="form-control input-sm" id="userfile[]" name="userfile[]"></div><button class="btn red mini" type="button" onClick="HapusnyaKIB('+ rnumber3 +')">Hapus</button></div></div></div></div>');
        }
			
		
function addKIB(){
		var rnumber=Math.random();
			$('#halow').append('<div id='+ rnumber +'><div class="row"><div class="col-md-8"><div class="form-group"><label class="control-label col-md-3">&nbsp;</label><div class="col-sm-5"><input type="file" class="form-control input-sm" id="kib[]" name="kib[]"></div><button class="btn red mini" type="button" onClick="HapusnyaKIB('+ rnumber +')">Hapus</button></div></div></div></div>');
        }
function HapusnyaKIB(a){
			//alert(a);
			//$("#"+a).html(''); 
			document.getElementById(a).innerHTML = "";
			
			
		}
		
 function addSerti(){
		var rnumber2=Math.random();
			$('#holla').append('<div id='+ rnumber2 +'><div class="row"><div class="col-md-8"><div class="form-group"><label class="control-label col-md-3">No Sertifikat</label><div class="col-sm-5"><input type="text" class="form-control input-sm" id="no_sertifikat[]" name="no_sertifikat[]"></div></div></div></div><br><div class="row"><div class="col-md-8"><div class="form-group"><label class="control-label col-md-3">Luas</label><div class="col-sm-5"><input type="text" class="form-control luas" id="sert_luaz[]" name="sert_luaz[]" onkeyup="calculate1()"></div><button class="btn red mini" type="button" onClick="HapusnyaKIB('+ rnumber2 +')">Hapus</button></div><div align="left"></div></div></div></div>');
        }
		
 function Closenya(){
        $('#serti').remove();
      } ;
(function(){

})();

function hanyaAngka(e, decimal) { 
    var key;
    var keychar;
     if (window.event) {
         key = window.event.keyCode;
     } else
     if (e) {
         key = e.which;
     } else return true;
    
    keychar = String.fromCharCode(key);
    if ((key==null) || (key==0) || (key==8) ||  (key==9) || (key==13) || (key==27) ) {
        return true;
    } else 
    if ((("0123456789").indexOf(keychar) > -1)) {
        return true; 
    } else 
    if (decimal && (keychar == ".")) {
        return true; 
    } else return false; 
    }
	
	function actNumber(val){
			var pemisah = val.split(".");
			var pemisah_awal = 0;
			var real_number = "";
			for(pemisah_awal;pemisah_awal < pemisah.length;pemisah_awal++){
				real_number = real_number + pemisah[pemisah_awal];
			}
			console.log('real_number > '+real_number);
			
			if(real_number.length > 3){
				var up = Math.ceil(real_number.length / 3);
				var pertiga = 0;
				var isi = "";
				var number = real_number.length - 1;
				console.log('up > '+up);
				for(pertiga;pertiga < up;pertiga++){ // 0 < 2
					var format = 0;
					for(format;format < 3;format++){ // 0 < 3
						if(number >= 0){ // 3 >= 0
							isi = isi + real_number[number];
							if(format == 2 && pertiga != up - 1){
								isi = isi + ".";
							}
							number--;
							// 000.
							console.log('pertiga > '+pertiga+' format > '+format)
						}
					}
					console.log('pertiga for > '+pertiga);
				}
				console.log(isi);
				
				var lfix = isi.length;
				var fix_val = "";
				var lv = lfix - 1;
				for(lv;lv >= 0;lv--){
					fix_val = fix_val + isi[lv];
				}
				console.log(fix_val);
				$('#nilai').val(fix_val);
			}else{
				$('#nilai').val(real_number);
			}
		}
		
	function calculate1(){
		if($('#luas').val()){
			var a = 0;
			$(".luas").each(function() {
				if($(this).val() != ""){	
					a = parseInt(a) + parseInt($(this).val());
				}
			});
			if(parseInt($('#luas').val()) - parseInt(a) >= 0){
				$('#sert_luass').val(parseInt($('#luas').val()) - parseInt(a));
			}
		}
	/*var a = parseFloat($('#luas').val());
	var b = parseFloat($('#sert_luaz[]').val());
	alert(b);
	
	
	if ($('luas').val()=='' || $('#sert_luaz[]').val()==''){
		$('#sert_luas').val('') ;
	}else{
		$('#sert_luas').val(a - b) ;
	}
	
	
	
	
	$().val();*/
	//alert(a);
	
	}
	
</script>
<?php } ?>