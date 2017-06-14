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
                                <a href="#">Laporan</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="#">Data Tanah Permasalahan</a>
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
                                        Data Tanah Permasalahan
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
                                                    <label class="control-label col-md-3">Jenis Laporan</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <select class="form-control" name='jela' id='jela'>
																<option value='1' selected>Keseluruhan</option>
																<option value='2'>Per Kotama</option>
																<option value='3'>Per Satker</option>
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
															<div class="col-md-5">
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
											
											
										
										
										</div>
										<div id="hidden2" style="display: none;">
											<div class="row">
												<div class="col-md-8">
													<div class="form-group">
														<label class="control-label col-md-3">Kotama</label>
														<div class="form-group">
															<div class="col-md-5">
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
															<div class="col-md-5">
																<div id="statediv2">
																<select class="form-control" name='lanud2' id='lanud2'>
																	<option value='0' selected>Pilih Lanud</option>
																	
																</select>
																</div>
															</div>
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
										<div id="buttonz1" style="display: block;">
                                            <a class="btn blue" onclick="getDaz(this)">&nbsp;  Preview</a>
										</div>
										<div id="buttonz2" style="display: none;">
                                            <a class="btn blue" onclick="getDaz2(this)">&nbsp;  Preview</a>
										</div>
										<div id="buttonz3" style="display: none;">
                                            <a class="btn blue" onclick="getDaz3(this)">&nbsp;  Preview</a>
										</div>
                                            <!--<button type="button" class="btn yellow" onclick=self.history.back()><i class="fa fa-undo"></i> Batal</button>-->
                                    </form>
                                    <!-- END FORM-->
									<br><br>
									
									

                                </div>
								
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                </div>
				<div id="previs">
									
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
	
	$('#jela').on('change', function(){
			
			var jajaja=$('#jela').val();
			//alert(jajaja);
			if(jajaja== '1' || jajaja== '0'){
				//alert("siup bro");
				document.getElementById('hidden1').style.display = 'none';
				document.getElementById('hidden2').style.display = 'none';
				document.getElementById('buttonz1').style.display = 'block';
				document.getElementById('buttonz2').style.display = 'none';
				document.getElementById('buttonz3').style.display = 'none';
				
			}else if(jajaja== '2'){
				document.getElementById('hidden1').style.display = 'block';
				document.getElementById('hidden2').style.display = 'none';
				document.getElementById('buttonz1').style.display = 'none';
				document.getElementById('buttonz2').style.display = 'block';
				document.getElementById('buttonz3').style.display = 'none';
				
			}else if(jajaja== '3'){
				document.getElementById('hidden1').style.display = 'none';
				document.getElementById('hidden2').style.display = 'block';
				document.getElementById('buttonz1').style.display = 'none';
				document.getElementById('buttonz2').style.display = 'none';
				document.getElementById('buttonz3').style.display = 'block';
				
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
		function getDaz() {
	
		var strURL = "<?php echo base_url();?>report/preview_permasalahan";
		var jela = document.getElementById('jela').value;
		var ttc = document.getElementById('ttc').value;
		var penanggungjwb = document.getElementById('penanggungjwb').value;
		var judul = document.getElementById('judul').value;
		var jabatan = document.getElementById('jabatan').value;
		var nrp = document.getElementById('nrp').value;
		//alert(jela)
		if(ttc == 0){
			var pow1 = "a"; 
		}else{
			var pow1 = ttc;
		}
		//alert(pow1)
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
						document.getElementById('previs').innerHTML=req.responseText;            
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}       
			}     
			req.open("GET", strURL+ "?jela=" + jela + "&&pow1=" + pow1 + "&&pow2=" + pow2 + "&&pow3=" + pow3 + "&&pow4=" + pow4 + "&&pow5=" + pow5, true);
			//req.open("GET", strURL + "/" + provinsi, true);
			req.send(null);
		}


	}
	
	function getDaz2() {
	
		var strURL = "<?php echo base_url();?>report/preview_permasalahan2";
		var jela = document.getElementById('jela').value;
		var kotama = document.getElementById('kotama').value;
		var ttc = document.getElementById('ttc').value;
		var penanggungjwb = document.getElementById('penanggungjwb').value;
		var judul = document.getElementById('judul').value;
		var jabatan = document.getElementById('jabatan').value;
		var nrp = document.getElementById('nrp').value;
		//alert(jela)
		if(kotama == 0){
			alert("Mohon Kotama Diisi, Dikarenakan Jenis Laporan Memiilih Per Kotama")
			window.location = "<?php echo base_url();?>report/data_tanah_permasalahan";
		}else{
			var powkot = kotama;
			//alert(powkot)
		}
		if(ttc == 0){
			var pow1 = "a"; 
		}else{
			var pow1 = ttc;
		}
		//alert(pow1)
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
						document.getElementById('previs').innerHTML=req.responseText;            
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}       
			}     
			req.open("GET", strURL+ "?jela=" + jela + "&&pow1=" + pow1 + "&&powkot=" + powkot + "&&pow2=" + pow2 + "&&pow3=" + pow3 + "&&pow4=" + pow4 + "&&pow5=" + pow5, true);
			//req.open("GET", strURL + "/" + provinsi, true);
			req.send(null);
		}


	}
	
	
	function getDaz3() {
	
		var strURL = "<?php echo base_url();?>report/preview_permasalahan3";
		var jela = document.getElementById('jela').value;
		var kotama2 = document.getElementById('kotama2').value;
		var lanud2 = document.getElementById('lanud2').value;
		var ttc = document.getElementById('ttc').value;
		var penanggungjwb = document.getElementById('penanggungjwb').value;
		var judul = document.getElementById('judul').value;
		var jabatan = document.getElementById('jabatan').value;
		var nrp = document.getElementById('nrp').value;
		//alert(jela)
		if(kotama2 == 0){
			alert("Mohon Kotama Diisi, Dikarenakan Jenis Laporan Memiilih Per Kotama")
			window.location = "<?php echo base_url();?>report/data_tanah_permasalahan";
		}else{
			var powkot = kotama2;
			//alert(powkot)
		}
		
		if(lanud2 == 0){
			alert("Mohon Satker Diisi, Dikarenakan Jenis Laporan Memiilih Per Kotama")
		}else{
			var powkot2 = lanud2;
			//alert(powkot)
		}
		if(ttc == 0){
			var pow1 = "a"; 
		}else{
			var pow1 = ttc;
		}
		//alert(pow1)
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
						document.getElementById('previs').innerHTML=req.responseText;            
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}       
			}     
			req.open("GET", strURL+ "?jela=" + jela + "&&pow1=" + pow1 + "&&powkot=" + powkot + "&&powkot2=" + powkot2 + "&&pow2=" + pow2 + "&&pow3=" + pow3 + "&&pow4=" + pow4 + "&&pow5=" + pow5, true);
			//req.open("GET", strURL + "/" + provinsi, true);
			req.send(null);
		}


	}
</script>