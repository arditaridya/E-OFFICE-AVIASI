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
                                <a href="<?php echo site_url('user'); ?>">User</a>
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

                                    <form action="<?php echo base_url('user/simpan'); ?>" class="horizontal-form" method="post">
                                       
										
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Username</label>
                                                    <div class="form-group">
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" name="username" id="username">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Password</label>
                                                    <div class="form-group">
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" name="password" id="password">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Grup User</label>
                                                    <div class="form-group">
                                                        <div class="col-md-4">
                                                            <select class="form-control" name='grup_user' id='grup_user'>
																<option value='0' selected>Pilih Grup User</option>
																<?php foreach($grup_user as $row){ ?>
																<option value="<?php echo $row->id; ?>"><?php echo $row->nama; ?></option>
																<?php } ?>
															</select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										<div id="hidden1" style="display: none;">
											<div class="row">
												<div class="col-md-8">
													<div class="form-group">
														<label class="control-label col-md-3">Kotama</label>
														<div class="form-group">
															<div class="col-md-4">
																<select class="form-control" name='kotama' id='kotama' onchange='getLad()'>
																	<option value='0' selected>Pilih Kotama</option>
																	<?php foreach($kotama as $row){ ?>
																	<option value="<?php echo $row->id; ?>"><?php echo $row->kotama; ?></option>
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
														<label class="control-label col-md-3"><button class="btn blue mini" type="button" onClick="addVariables($('#kotama').val());">Tambah Lanud</button></label>
														<div class="form-group">
															<div class="col-md-4">
																<div id="statediv">
																<select class="form-control" name='lanudx' id='lanudx'>
																	<option value='' selected>Pilih Lanud</option>
																	
																</select>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<div id="variablegroups">
											</div>
										
										
										</div>
										<div id="hidden2" style="display: none;">
											<div class="row">
												<div class="col-md-8">
													<div class="form-group">
														<label class="control-label col-md-3">Kotama</label>
														<div class="form-group">
															<div class="col-md-4">
																<select class="form-control" name='kotama2' id='kotama2' onchange='getLad2()'>
																	<option value='0' selected>Pilih Kotama</option>
																	<?php foreach($kotama as $row){ ?>
																	<option value="<?php echo $row->id; ?>"><?php echo $row->kotama; ?></option>
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
														<label class="control-label col-md-3">Lanud</label>
														<div class="form-group">
															<div class="col-md-4">
																<div id="statediv2">
																<select class="form-control" name='lanudz' id='lanudz'>
																	<option value='' selected>Pilih Lanud</option>
																	
																</select>
																</div>
															</div>
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

	function getLad() {
	
		var strURL = "<?php echo base_url();?>user/getLad";
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
	
	function getLad2() {
	
		var strURL = "<?php echo base_url();?>user/getLad2";
		var kotama2 = document.getElementById('kotama2').value;
		//alert(kotama2);
		

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
			req.open("GET", strURL + "/" + kotama2, true);
			req.send(null);
		}


	}
	
	$('#grup_user').on('change', function(){
			
			var jajaja=$('#grup_user').val();
			//alert(jajaja);
			if(jajaja== '1' || jajaja== '0'){
				//alert("siup bro");
				document.getElementById('hidden1').style.display = 'none';
				document.getElementById('hidden2').style.display = 'none';
				
			}else if(jajaja== '2'){
				document.getElementById('hidden1').style.display = 'block';
				document.getElementById('hidden2').style.display = 'none';
				
			}else if(jajaja== '3'){
				document.getElementById('hidden1').style.display = 'none';
				document.getElementById('hidden2').style.display = 'block';
				
			}else{
				document.getElementById('hidden1').style.display = 'none';
				document.getElementById('hidden2').style.display = 'none';
			}
			
		})

	
</script>

<script >

function addVariables(x){
	console.log(x);
	var varGroups = document.getElementById("variablegroups");
	var rnumber=Math.random();
	var kotama = document.getElementById('statediv').value;
	$.ajax({
		url : '<?php echo base_url(); ?>user/getLanud',
		type : 'post',
		data : { id : x },
		success : function(data){
			json = JSON.parse(data);
			console.log('asd');
			console.log(json.arr_id.length);
			
			var op = "";
			var i = 0;
			for(i; i < json.arr_id.length; i++){
				op = op + "<option value='"+json.arr_id[i]+"'>"+json.arr_lanud[i]+"</option>";
			}
			console.log('op');
			console.log(op);
	var htmls = 
			"<div class='row'>"+
           "<div class='col-md-8'>"+
            "<div class='form-group'>"+
            "<label class='control-label col-md-3'>&nbsp;</label>"+
            "<div class='form-group'>"+
            "<div class='col-md-4'>"+
			
			"<select name='lanud[]' id='lanud[]' class='form-control'>"+
		      <?php /*foreach ($lanud as $row) { ?>
		      "<option value='<?php echo $row->id;?>'>"+
		      "<?php echo $row->lanud; ?> "+
		      "</option>"+
		      <?php  }*/ ?> 
			  op+
		      "</select>"+
			 
			  "</div></div></div><button class='btn red mini' type='button' onClick=\"Hapusnya('"+ rnumber +"');\">Hapus</button></div></div>";
	$("#variablegroups").append($("<div id=\'"+ rnumber +"\'>"+ htmls +"<br></div>"));	
		}
	})
}

function Hapusnya(a){
			//alert(a);
			//$("#"+a).html(''); 
			document.getElementById(a).innerHTML = "";
			
			
		}
</script>