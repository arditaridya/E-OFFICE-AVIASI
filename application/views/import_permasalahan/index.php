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
                                <a href="#"><b>Import Permasalahan</b></a>
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
                    <h3 class="page-title"><?php // echo $judul; ?></h3>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet box blue">
                                <div class="portlet-title">
                                    <div class="caption">
                                        Import Permasalahan
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse">
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body" style="background-color:#99ccff;">
   
<form action="<?php echo base_url();?>import_permasalahan/upload/" method="post" enctype="multipart/form-data">
	<div class="panel-body">
		<div class="form-group">
        	<label for="kotama" class="col-sm-2 control-label">Kotama</label>
            <div class="col-sm-5">
            	
               
                                                            <select class="form-control" name='kotama' id='kotama' onchange='getSat()'>
																<option value='' selected>Pilih Kotama</option>
																<?php foreach($kotama as $row){ ?>
																<option value="<?php echo $row->id; ?>"><?php echo $row->kotama; ?></option>
																<?php } ?>
															</select>
                                                        
                
                
               
               
            </div>
        </div>
		<br><br>
		<div class="form-group">
        	<label for="satker" class="col-sm-2 control-label">Satker</label>
            <div class="col-sm-5">
            	
               
                                                            <div id="statediv">
                                                            <select class="form-control" name='satker' id='satker'>
																<option value='' selected> --- </option>
																
															</select>
														</div>
                                                        
                
                
               
               
            </div>
        </div>
		<br><br>
    	<div class="form-group">
        	<label for="STATUS" class="col-sm-2 control-label">File Import</label>
            <div class="col-sm-5">
            	
                
                
                
                <input class="form-control" type="file" name="file"/></td>
                <div style="color:#999"><i>* File Tipe .xls / .xlsx</i></div>
                <!--
                <input type="text" id="harga_rumah" onkeyup="actNumber(this.value)" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                
                <input type="button" value="TES FORMAT" onClick="actNumber($('#number').val())">
                -->
            </div>
        </div>
    </div>
	<div class="panel-body">
    	<div class="form-group">
        	<label for="STATUS" class="col-sm-2 control-label"></label>
            <div class="col-sm-2">
            	
                
                
                
                <input type="submit" class="btn green" value="Import file"/>
                <!--
                <input type="text" id="harga_rumah" onkeyup="actNumber(this.value)" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                
                <input type="button" value="TES FORMAT" onClick="actNumber($('#number').val())">
                -->
            </div>
        </div>
    </div>
	
	<div class="panel-body">
    	<div class="form-group">
        	<label for="CATATAN" class="col-sm-2 control-label"></label>
            <div class="col-sm-8">
            	Untuk Aturan Cara Import Bisa Download <a href="<?php echo base_url()."assets/admin/aturan_import.rar"; ?>"><font color="blue">Disini</font></a>
            
            </div>
        </div>
    </div>
   
</form>
                                   
                                   
                     
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

	function getSat() {
	
		var strURL = "<?php echo base_url();?>import_permasalahan/getsatker";
		var kotama = document.getElementById('kotama').value;
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
			req.open("GET", strURL + "/" + kotama, true);
			req.send(null);
		}


	}
</script>	