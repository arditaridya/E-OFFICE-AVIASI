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
                                <a href="#">TNI AD</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="<?php echo site_url('c_alutsista/view_senjata_pesawat_ad'); ?>">Senjata Pesawat</a>
								<i class="fa fa-angle-right"></i>
                            </li>
							<li>
                                Tambah Data
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
					<h3 class="page-title"><?php echo $title; ?></h3>
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

									<form action="<?php echo base_url('c_alutsista/simpan_tambah_senjata_pesawat_ad'); ?>" class="horizontal-form" method="post">
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Tanggal</label>
													 <div class="form-group">
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control" name="tglx" id="tgl" readonly>
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
																		  <option>- Pilih -</option>
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
																		  <option>- Pilih -</option>
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
																			<select class="form-control">
                                                            	<option>- Pilih -</option>
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
																			<select class="form-control">
																<option>- Pilih -</option>
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
                                                    <label class="control-label col-md-3">Baik</label>
													 <div class="form-group">
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" name="b" id="b" onkeyup="jmlx()">
                                                        </div>
                                                    </div>
												</div>
											</div>
										</div>
													
										<div class="row">
											<div class="col-md-8">
												 <div class="form-group">
													 <label class="control-label col-md-3">Rusak Ringan</label>
													<div class="form-group">
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" name="rr" id="rr" onkeyup="jmlx()">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										<div class="row">
											<div class="col-md-8">
												<div class="form-group">
													 <label class="control-label col-md-3">Rusak Berat</label>
													<div class="form-group">
                                                        <div class="col-md-8">
                                                            
                                                            <input type="text" class="form-control" name="rb" id="rb" onkeyup="jmlx()">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
											<div class="col-md-8">
												 <div class="form-group">
													 <label class="control-label col-md-3">Jumlah</label>
													<div class="form-group">
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" name="jml" id="jml" readonly>
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
                                                        <div class="col-md-8">
                                                            <textarea class="form-control" name="keterangan" id="keterangan"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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

$('#tgl').datepicker({
			format: 'dd-mm-yyyy',
		}).on('changeDate', function(){

			var date = $(this).val(),
		   values = date.split("-"),
		   day = parseInt(values[0], 10),
		   month = parseInt(values[1], 10), // Month is zero based, so subtract 1
		   year = parseInt(values[2], 10);

		   // alert(year+"-"+month+"-"+day)
			$('#tgl_send').val(year+"-"+month+"-"+day)
		})

function jmlx(){
	if($('#b').val()!='' && $('#rr').val()!='' && $('#rb').val()!=''){
		$('#jml').val(parseInt($('#b').val())+parseInt($('#rr').val())+parseInt($('#rb').val()))
	}else{
		$('#jml').val('')
	}
}

$(document).ready(function(){
	
		//$('#lemari').combobox();
		//$('#zzz2').combobox();
		//$('#kapal').combobox();
		//$('#jenis_ijin').combobox();
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
	
		var strURL = "<?php echo base_url();?>c_alutsista/fungsi_ad";
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
	
		var strURL = "<?php echo base_url();?>c_alutsista/barang_ad";
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
	
		
	
	

	</script>