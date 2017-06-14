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
                                <a href="<?php echo site_url('kecamatan'); ?>">List Kecamatan</a>
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

                                    <form action="<?php echo base_url('kelurahan/simpanedit'); ?>" class="horizontal-form" method="post">
                                       
<?php foreach($dataper as $value){ ?>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Provinsi</label>
                                                    <div class="form-group">
                                                        <div class="col-md-4">
                                                            <select class="form-control" name='provinsi' id='provinsi' onchange="getKab()">
																<option value='' selected>Pilih Provinsi</option>
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
                                                        <div class="col-md-4">
														<div id="statediv">
                                                            <select class="form-control" name='kabupaten' id='kabupaten' onchange='getKec()'>
																<option value='' selected>Pilih Kabupaten</option>
																<?php foreach($kabupaten as $row){ ?>
																<option value="<?php echo $row->id; ?>" <?php echo ($value->kabkab == $row->id)?"selected":""; ?>><?php echo $row->nama_kabupaten; ?></option>
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
                                                        <div class="col-md-4">
														<div id="statediv2">
                                                            <select class="form-control" name='kecamatan' id='kecamatan'>
																<option value='' selected>Pilih Kecamatan</option>
																<?php foreach($kecamatan as $row){ ?>
																<option value="<?php echo $row->id; ?>" <?php echo ($value->keckec == $row->id)?"selected":""; ?>><?php echo $row->nama_kecamatan; ?></option>
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
                                                    <label class="control-label col-md-3">Nama Kelurahan</label>
                                                    <div class="form-group">
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" name="nama_kelurahan" id="nama_kelurahan" value="<?php echo $value->nama_kelurahan;?>"> 
															<input type="hidden" class="form-control" name="id" id="id" value="<?php echo $value->id_kelurahan;?>"> 
                                                    
														</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        
<?php } ?>
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
	
		var strURL = "<?php echo base_url();?>kecamatan/getkabupaten";
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
	
		var strURL = "<?php echo base_url();?>kelurahan/getkecamatan";
		var kabupaten = document.getElementById('kabupaten').value;
		//alert(lemari);
		

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
</script>	