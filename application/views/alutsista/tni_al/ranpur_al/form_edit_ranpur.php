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
                                <a href="#">Alutsista</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
							<li>
                                <a href="#">TNI AL</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="<?php echo site_url('c_alutsista/ranpur_al'); ?>">Ranpur</a>
								<i class="fa fa-angle-right"></i>
                            </li>
							<li>
                                <a href="#">Edit Data</a>
                            </li>
                        </ul>
                        </ul>
                        <div class="page-toolbar">
                            <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm btn-default" data-container="body" data-placement="bottom" data-original-title="Rubah range tanggal">
                                <i class="icon-calendar"></i>&nbsp; 
                                <span class="thin uppercase visible-lg-inline-block">&nbsp;</span>&nbsp; 
                                <i class="fa fa-angle-down"></i>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
							<h3 class="page-title">
								Edit Data RANPUR AL                 
							</h3>
                            <div class="portlet box red">
                                <div class="portlet-title">
                                    <div class="caption">
                                        Form Edit
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse">
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body form">
									<!-- BEGIN FORM-->
									<?php foreach($ranpur_al as $rows){ ?>
									<form action="<?php echo base_url('c_alutsista/edit_ranpur_al/'.$rows->id.''); ?>" class="horizontal-form" method="post">
										<div class="form-body">
											<div class="row">
												<div class="col-md-8">
													<div class="form-group">
														<label class="control-label col-md-3">Tanggal</label>
														 <div class="form-group">
															<div class="col-md-3">
																<input type="text" class="form-control" value="<?php echo $rows->tgl; ?>" name="tglx" id="tgl" readonly>
																<input type="hidden" name="tgl" id="tgl_send">
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<div class="row">
												<div class="col-md-8">
													<div class="form-group">
														<label class="control-label col-md-3">Kesatuan</label>
														<div class="form-group">
															<div class="col-md-8">
																<select class="form-control" name='kesatuan' id='kesatuan'>
																  <option value=""></option>
																<?php
                                                                foreach ($kesatuan as $kesatuan_res) {
                                                                    if ($rows->kesatuan == $kesatuan_res->id) {
                                                                        ?>
                                                                        <option value="<?php echo $kesatuan_res->id ?>" selected><?php echo $kesatuan_res->kesatuan ?></option>
                                                                        <?php
                                                                    } else {
                                                                        ?>
                                                                        <option value="<?php echo $kesatuan_res->id ?>"><?php echo $kesatuan_res->kesatuan ?></option>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                <?php 
																}
                                                                ?>
																</select>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<div class="row">
												<div class="col-md-8">
													<div class="form-group">
														<label class="control-label col-md-3">Jenis</label>
														<div class="form-group">
															<div class="col-md-8">
																<select class="form-control" name='jenis' id='jenis' onchange='getCoba()'>
																  <option value=""></option>
															  <?php
                                                                foreach ($jenis as $jenis_res) {
                                                                    if ($rows->jenis_barang == $jenis_res->id) {
                                                                        ?>
                                                                        <option value="<?php echo $jenis_res->id ?>" selected><?php echo $jenis_res->jenis ?></option>
                                                                        <?php
                                                                    } else {
                                                                        ?>
                                                                        <option value="<?php echo $jenis_res->id ?>"><?php echo $jenis_res->jenis ?></option>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                <?php 
																}
                                                                ?>
																</select>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<div class="row">
												<div class="col-md-8">
													<div class="form-group">
														<label class="control-label col-md-3">Fungsi</label>
														<div class="form-group">
															<div class="col-md-8">
																<div id="statediv">
																	<select class="form-control" name='zzz' id='zzz2'>
																		<option value=""></option>
																		<?php
																		foreach ($fungsi3 as $fungsi_res) {
																			if ($rows->fungsi == $fungsi_res->id) {
																				?>
																				<option value="<?php echo $fungsi_res->id ?>" selected><?php echo $fungsi_res->fungsi ?></option>
																				<?php
																			} else {
																				?>
																				<option value="<?php echo $fungsi_res->id ?>"><?php echo $fungsi_res->fungsi ?></option>
																				<?php
																			}
																			?>
																		<?php 
																		}
																		?>
																	</select>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<br><br>
											<hr>
											<div class="row">
												<div class="col-md-8">
													<div class="form-group">
														<label class="control-label col-md-3">Alutsista</label>
														<div class="form-group">
															<div class="col-md-8">
																<div id="statediv2">
																	<select class="form-control" name='sss' id='sss'>
																		<option value=""></option>
																		<?php
																		foreach ($barang3 as $barang_res) {
																			if ($rows->barang == $barang_res->id) {
																				?>
																				<option value="<?php echo $barang_res->id ?>" selected><?php echo $barang_res->barang ?></option>
																				<?php
																			} else {
																				?>
																				<option value="<?php echo $barang_res->id ?>"><?php echo $barang_res->barang ?></option>
																				<?php
																			}
																			?>
																		<?php 
																		}
																		?>
																	</select>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<br><br>
											
											
											<div class="row">
												<div class="col-md-8">
													<div class="form-group">
														<label class="control-label col-md-3">Lokasi</label>
														 <div class="form-group">
															<div class="col-md-8">
																<input type="text" class="form-control" value="<?php echo $rows->lokasi; ?>" name="lokasi" id="lokasi">
															</div>
														</div>
													</div>
												</div>
											</div>
											<br/>
											<fieldset class="scheduler-border">
												<legend class="scheduler-border">Operasional</legend>
												<!--<div class="row">
													<div class="col-md-8">
														<div class="form-group">
															<label class="control-label col-md-3">Kesatuan Pemakai</label>
															 <div class="form-group">
																<div class="col-md-8">
																	<input type="text" class="form-control" name="kesatuan_pemakai" id="kesatuan_pemakai">
																</div>
															</div>
														</div>
													</div>
												</div>-->
												
												<div class="row">
													<div class="col-md-8">
														<div class="form-group">
															<label class="control-label col-md-3">Kesatuan Pemeliharaan TK.I/II</label>
															 <div class="form-group">
																<div class="col-md-8">
																	<input type="text" class="form-control" value="<?php echo $rows->sat_hara_tki_ii_op; ?>" name="kesatuan_pel1" id="kesatuan_pel1">
																</div>
															</div>
														</div>
													</div>
												</div>
												
												<div class="row">
													<div class="col-md-8">
														<div class="form-group">
															<label class="control-label col-md-3">Kesatuan Pemeliharaan TK.III/IV</label>
															 <div class="form-group">
																<div class="col-md-8">
																	<input type="text" class="form-control" value="<?php echo $rows->sat_hara_tkiii_iv_op; ?>" name="kesatuan_pel3" id="kesatuan_pel3">
																</div>
															</div>
														</div>
													</div>
												</div>
												
															
												<div class="row">
													<div class="col-md-8">
														 <div class="form-group">
															 <label class="control-label col-md-3">B</label>
															<div class="form-group">
																<div class="col-md-3">
																	<input type="text" class="form-control" value="<?php echo $rows->b; ?>" name="b" id="b" onkeyup="calculate1()" onkeypress="return isNumberKey(event)">
																</div>
															</div>
														</div>
													</div>
												</div>
												
												<div class="row">
													<div class="col-md-8">
														 <div class="form-group">
															 <label class="control-label col-md-3">RR</label>
															<div class="form-group">
																<div class="col-md-3">
																	<input type="text" class="form-control" value="<?php echo $rows->rr; ?>" name="rr" id="rr" onkeyup="calculate1()" onkeypress="return isNumberKey(event)">
																</div>
															</div>
														</div>
													</div>
												</div>
												
												<div class="row">
													<div class="col-md-8">
														 <div class="form-group">
															 <label class="control-label col-md-3">RB</label>
															<div class="form-group">
																<div class="col-md-3">
																	<input type="text" class="form-control" value="<?php echo $rows->rb; ?>" name="rb" id="rb" onkeyup="calculate1()" onkeypress="return isNumberKey(event)">
																</div>
															</div>
														</div>
													</div>
												</div>
												
												<div class="row">
													<div class="col-md-8">
														<div class="form-group">
															 <label class="control-label col-md-3">JUMLAH</label>
															<div class="form-group">
																<div class="col-md-3">
																	<?php $jml = $rows->b + $rows->rr + $rows->rb; ?>
																	<input type="text" class="form-control" name="jml" id="jml" value="<?php echo $jml; ?>" readonly>
																</div>
															</div>
														</div>
													</div>
												</div>
												
												<div class="row">
													<div class="col-md-8">
														<div class="form-group">
															 <label class="control-label col-md-3">Kesiapan%</label>
															<div class="form-group">
																<div class="col-md-3">
																	<?php $kes = $rows->b/($rows->b + $rows->rr + $rows->rb)*100; ?>
																	<input type="text" class="form-control" value="<?php echo round($kes,2) ; ?>" name="siap" id="siap" readonly>
																</div>
															</div>
														</div>
													</div>
												</div>
											</fieldset>
											<br><br>
											<fieldset class="scheduler-border">
												<legend class="scheduler-border">Non Operasional</legend>
												<div class="row">
													<div class="col-md-8">
														<div class="form-group">
															<label class="control-label col-md-3">Kesatuan Pemeliharaan TK.I/II</label>
															 <div class="form-group">
																<div class="col-md-8">
																	<input type="text" class="form-control" value="<?php echo $rows->sat_hara_tki_ii_nop; ?>" name="kesatuan_no1" id="kesatuan_no1">
																</div>
															</div>
														</div>
													</div>
												</div>
												
												<div class="row">
													<div class="col-md-8">
														<div class="form-group">
															<label class="control-label col-md-3">Kesatuan Pemeliharaan TK.III/IV</label>
															 <div class="form-group">
																<div class="col-md-8">
																	<input type="text" class="form-control" value="<?php echo $rows->sat_hara_tkiii_iv_nop; ?>" name="kesatuan_no3" id="kesatuan_no3">
																</div>
															</div>
														</div>
													</div>
												</div>
											
												<div class="row">
													<div class="col-md-8">
														<div class="form-group">
															<label class="control-label col-md-3">Konservasi</label>
															 <div class="form-group">
																<div class="col-md-3">
																	<input type="text" class="form-control" value="<?php echo $rows->kons; ?>" name="kons" id="kons" onkeyup="calculate1()" onkeypress="return isNumberKey(event)">
																</div>
															</div>
														</div>
													</div>
												</div>
															
												<div class="row">
													<div class="col-md-8">
														 <div class="form-group">
															 <label class="control-label col-md-3">RB</label>
															<div class="form-group">
																<div class="col-md-3">
																	<input type="text" class="form-control" value="<?php echo $rows->rbe; ?>" name="rb2" id="rb2" onkeyup="calculate1()" onkeypress="return isNumberKey(event)">
																</div>
															</div>
														</div>
													</div>
												</div>
												
												<div class="row">
													<div class="col-md-8">
														 <div class="form-group">
															 <label class="control-label col-md-3">Tidak Layak</label>
															<div class="form-group">
																<div class="col-md-3">
																	<input type="text" class="form-control" value="<?php echo $rows->tl; ?>" name="tila" id="tila" onkeyup="calculate1()" onkeypress="return isNumberKey(event)">
																</div>
															</div>
														</div>
													</div>
												</div>
												
												<div class="row">
													<div class="col-md-8">
														 <div class="form-group">
															 <label class="control-label col-md-3">Rehab</label>
															<div class="form-group">
																<div class="col-md-3">
																	<input type="text" class="form-control" value="<?php echo $rows->reran; ?>" name="rehab" id="rehab" onkeyup="calculate1()" onkeypress="return isNumberKey(event)">
																</div>
															</div>
														</div>
													</div>
												</div>
												
												<div class="row">
													<div class="col-md-8">
														<div class="form-group">
															 <label class="control-label col-md-3">JUMLAH</label>
															<div class="form-group">
																<div class="col-md-3">
																	<?php $jml2 = $rows->kons + $rows->rbe + $rows->tl + $rows->reran; ?>
																	<input type="text" class="form-control" value="<?php echo $jml2; ?>" name="jml2" id="jml2" readonly>
																</div>
															</div>
														</div>
													</div>
												</div>
											</fieldset>
											
											<div class="row">
												<div class="col-md-8">
													<div class="form-group">
														<label class="control-label col-md-3">Keterangan</label>
														 <div class="form-group">
															<div class="col-md-8">
																<input type="text" class="form-control" value="<?php echo $rows->ket; ?>" name="ket" id="ket">
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<br><br>
											
											<br/>
											<div class="form-actions left">
												<button type="submit" value="SIMPAN" name="SIMPAN" class="btn green"><i class="fa fa-check"></i> Simpan</button>
												<button type="button" value="BATAL" name="BATAL" class="btn yellow" onclick=self.history.back()><i class="fa fa-undo"></i> Batal</button>
											</div>
										</div>	
									</form>
									<?php } ?>
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

function isNumberKey(evt)
{
	var charCode = (evt.which) ? evt.which : event.keyCode
	if (charCode == 46){
		return true;
	}else if(charCode > 31 && (charCode < 48 || charCode > 57)){
		return false;
	}else{
		return true;
	}
}

$('#tgl').datepicker({
			format: 'yyyy-mm-dd',
		}).on('changeDate', function(){

			var date = $(this).val(),
		   values = date.split("-"),
		   day = parseInt(values[0], 10),
		   month = parseInt(values[1], 10), // Month is zero based, so subtract 1
		   year = parseInt(values[2], 10);

		   // alert(year+"-"+month+"-"+day)
			$('#tgl_send').val(year+"-"+month+"-"+day)
		})


$(document).ready(function(){
	
	
	
		
		
	});

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

	function getCoba() {
	
		var strURL = "<?php echo base_url();?>c_alutsista/fungsiranpur";
		var jenis = document.getElementById('jenis').value;
		

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
			req.open("GET", strURL + "/" + jenis, true);
			req.send(null);
		}


	}
	
	
	function getCoba2() {
	
		var strURL = "<?php echo base_url();?>c_alutsista/barangranpur";
		var fungsi = document.getElementById('fungsi').value;
		

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
			
			req.open("GET", strURL + "/" + fungsi, true);
			req.send(null);
		}


	}
	
	function calculate1(){
	var a = parseFloat($('#b').val());
	var b = parseFloat($('#rr').val());
	var c = parseFloat($('#rb').val());
	var d = parseFloat($('#kons').val());
	var e = parseFloat($('#rb2').val());
	var f = parseFloat($('#tila').val());
	var g = parseFloat($('#rehab').val());

	
	
	if ($('#b').val()=='' || $('#rr').val()=='' || $('#rb').val()==''){
		$('#jml').val('') ;
	}else{
		$('#jml').val(a + b + c) ;
	}
	
	if ($('#b').val()==''){
		$('#siap').val('') ;
	}else{
		$('#siap').val((a / (a + b + c) * 100).toFixed(2));
	}
	
	if ($('#kons').val()=='' || $('#rb2').val()=='' || $('#tila').val()=='' || $('#rehab').val()==''){
		$('#jml2').val('') ;
	}else{
		$('#jml2').val(d + e + f + g) ;
	}
	
	
	
	
	
	$().val();
	//alert(a);
	
	}
	
	
	

	</script>