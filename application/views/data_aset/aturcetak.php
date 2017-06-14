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
                                <a href="<?php echo site_url('data_aset/index/'.$this->uri->segment(3)); ?>">List Data Aset (<font color="blue"> <?php echo $nama_lanud;?> </font>)</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="#">Atur Cetak</a>
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

                                    <form action="<?php echo base_url('data_aset/cetakdataaset/'.$this->uri->segment(3)); ?>" class="horizontal-form" method="post" enctype="multipart/form-data">
                                       

                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Lanud</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control" name="halo" id="halo" value ="<?php echo $nama_lanud;?>" readonly>
															<input type="hidden" class="form-control" name="lanud" id="lanud" value ="<?php echo $id_lanud;?>" readonly>
															<input type="hidden" class="form-control" name="urinya" id="urinya" value ="<?php echo $this->uri->segment(3);?>" readonly>
                                                        
														</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Judul Laporan</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control" name="judul" id="judul">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Tempat, Tanggal Cetak</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control" name="ttc" id="ttc">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Jabatan</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control" name="jabatan" id="jabatan">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Penanggung Jawab</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control" name="penanggungjwb" id="penanggungjwb">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">NRP</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control" name="nrp" id="nrp">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										
									
										

                                        

                                        <br/>
                                        <div class="form-actions left">
                                            <!--<a name="SIMPAN" class="btn green"><i class="fa fa-check" onclick="getFrame(this)"> View Cetak</i> </a>
                                            <button type="button" class="btn yellow" onclick=self.history.back()><i class="fa fa-undo"></i> Batal</button>-->
											 <a class="btn red"><i class="fa fa-file-pdf-o" onclick="getFrame(this)">&nbsp;  PDF</i> </a>
                                            <!--<button type="button" class="btn yellow" onclick=self.history.back()><i class="fa fa-undo"></i> Batal</button>-->
											<a href="<?php echo base_url('data_aset/getword/'.$this->uri->segment(3)); ?>" class="btn blue"><i class="fa fa-file-word-o">&nbsp;  Word</i> </a>
											<a href="<?php echo base_url('data_aset/getexcel/'.$this->uri->segment(3)); ?>" class="btn green"><i class="fa fa-file-excel-o">&nbsp;  Excel</i> </a>
											<!--<a class="btn green"><i class="fa fa-file-excel-o" onclick="getExcel(this)">&nbsp; Excel</i> </a>-->
                                    </form>
                                    <!-- END FORM-->
									
									<br><br>
								<div id="statediv">
								<!--
										<iframe src="<?php // echo base_url();?>permasalahan/cetakdataaset/lanud_id_1" style="display: block" name="iframeku" id="frame" class="iframeku col-sm-12" frameborder="0" height="720"></iframe>
								-->
								</div>		
									<br><br><br><br><br><br>

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
function getFrame() {
	
		var strURL = "<?php echo base_url();?>data_aset/getform";
		var urinya = document.getElementById('urinya').value;
		var ttc = document.getElementById('ttc').value;
		var penanggungjwb = document.getElementById('penanggungjwb').value;
		var judul = document.getElementById('judul').value;
		var jabatan = document.getElementById('jabatan').value;
		var nrp = document.getElementById('nrp').value;
		//alert(urinya)
		if(ttc == 0){
			var pow1 = "a"; 
		}else{
			var pow1 = ttc;
		}
		
		if(penanggungjwb == 0){
			var pow2 = "b"; 
		}else{
			var pow2 = penanggungjwb;
		}
		
		if(judul == 0){
			var pow3 = "c"; 
		}else{
			var pow3 = judul;
		}
		
		if(jabatan == 0){
			var pow4 = "d"; 
		}else{
			var pow4 = jabatan;
		}
		
		if(nrp == 0){
			var pow5 = "MPDF"; 
		}else{
			var pow5 = nrp;
		}
		//alert(pow2);
		
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
			req.open("GET", strURL+ "?urinya=" + urinya + "&&pow1=" + pow1 + "&&pow2=" + pow2 + "&&pow3=" + pow3 + "&&pow4=" + pow4 + "&&pow5=" + pow5, true);
			//req.open("GET", strURL + "/" + provinsi, true);
			req.send(null);
		}


	}
	
</script>
