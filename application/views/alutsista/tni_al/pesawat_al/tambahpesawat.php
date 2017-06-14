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
                                <a href="<?php echo site_url('c_alutsista/indexpesawat'); ?>">Pesawat</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
							<li>
                                <a href="#">Tambah Data</a>
                            </li>
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
					<h3 class="page-title"><?php echo $judul; ?></h3>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet box red">
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

									<form action="<?php echo base_url('c_alutsista/tambah'); ?>" class="horizontal-form" method="post">
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Kesatuan</label>
                                                    <div class="form-group">
                                                        <div class="col-md-8">
															<select class="form-control" name='kesatuan' id='kesatuan'>
															  <option value='' selected>Select Kesatuan</option>
															  <?php foreach($kesatuan as $row){ ?>
																<option value="<?php echo $row->id; ?>"><?php echo $row->kesatuan; ?></option>
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
                                                    <label class="control-label col-md-3">Jenis</label>
                                                    <div class="form-group">
                                                        <div class="col-md-8">
															<select class="form-control" name='jenis' id='jenis' onchange='getCoba()'>
															  <option value='' selected>Select Jenis</option>
															  <?php foreach($jenis as $row){ ?>
																<option value="<?php echo $row->id; ?>"><?php echo $row->jenis; ?></option>
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
                                                    <label class="control-label col-md-3">Fungsi</label>
                                                    <div class="form-group">
                                                        <div class="col-md-8">
															<div id="statediv">
																<select class="form-control" name='zzz' id='zzz2'>
																	  <option value='' selected>Select Fungsi</option>
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
                                                    <label class="control-label col-md-3">Tanggal</label>
                                                    <div class="form-group">
														<div class="col-md-3">
															 <input type="text" name='tanggal2' id='tanggal' class="form-control" data-rel="datepicker" readonly>
															 <input name='tanggal' type="hidden" id="tanggal_send"> 
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
                                                    <label class="control-label col-md-3">Pesawat</label>
                                                    <div class="form-group">
                                                        <div class="col-md-8">
															<div id="statediv2">
																<select class="form-control" name='sss' id='sss'>
																	  <option value='' selected>Select Alutsista</option>
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
                                                            <input type="text" class="form-control" name="lokasi" id="lokasi">
                                                        </div>
                                                    </div>
												</div>
											</div>
										</div>
													
										<div class="row">
											<div class="col-md-8">
												 <div class="form-group">
													 <label class="control-label col-md-3">S</label>
													<div class="form-group">
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control" name="s" id="s" onkeyup="calculate1()">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										<div class="row">
											<div class="col-md-8">
												 <div class="form-group">
													 <label class="control-label col-md-3">TS</label>
													<div class="form-group">
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control" name="ts" id="ts" onkeyup="calculate1()">
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
                                                            <input type="text" class="form-control" name="im" id="im" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										<div class="row">
											<div class="col-md-8">
												<div class="form-group">
													 <label class="control-label col-md-3">%S</label>
													<div class="form-group">
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control" name="dos" id="dos" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										<br><br>
									
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">GRD</label>
													 <div class="form-group">
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control" name="grd" id="grd" onkeyup="calculate1()">
                                                        </div>
                                                    </div>
												</div>
											</div>
										</div>
													
										<div class="row">
											<div class="col-md-8">
												 <div class="form-group">
													 <label class="control-label col-md-3">Kons</label>
													<div class="form-group">
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control" name="kons" id="kons" onkeyup="calculate1()">
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
                                                            <input type="text" class="form-control" name="rb" id="rb" onkeyup="calculate1()">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										<div class="row">
											<div class="col-md-8">
												 <div class="form-group">
													 <label class="control-label col-md-3">TL</label>
													<div class="form-group">
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control" name="tl" id="tl" onkeyup="calculate1()">
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
                                                            <input type="text" class="form-control" name="jml" id="jml" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										<br><br>
										
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
	
		var strURL = "<?php echo base_url();?>c_alutsista/fungsipesawat";
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
	
		var strURL = "<?php echo base_url();?>c_alutsista/barangpesawat";
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
	var a = parseFloat($('#s').val());
	var b = parseFloat($('#ts').val());
	var c = parseFloat($('#grd').val());
	var d = parseFloat($('#kons').val());
	var e = parseFloat($('#rb').val());
	var f = parseFloat($('#tl').val());
	
	if ($('#s').val()=='' || $('#ts').val()==''){
		$('#im').val('') ;
	}else{
		$('#im').val(a + b) ;
	}
	
	if ($('#s').val()==''){
		$('#dos').val('') ;
	}else{
		$('#dos').val((a / (a+b)*100).toFixed(2)) ;
	}
	
	if ($('#grd').val()=='' || $('#kons').val()=='' || $('#rb').val()=='' || $('#tl').val()==''){
		$('#jml').val('') ;
	}else{
		$('#jml').val(c + d + e + f) ;
	}
	
	
	
	$().val();
	//alert(a);
	
	}
	
	$('#tanggal').datepicker({
			format: 'dd-mm-yyyy',
		}).on('changeDate', function(){

			var date = $(this).val(),
		    values = date.split("-"),
		    day = parseInt(values[0], 10),
		    month = parseInt(values[1], 10), // Month is zero based, so subtract 1
		    year = parseInt(values[2], 10);

		    // alert(year+"-"+month+"-"+day)
			$('#tanggal_send').val(year+"-"+month+"-"+day)
		})
	
	
	

	</script>