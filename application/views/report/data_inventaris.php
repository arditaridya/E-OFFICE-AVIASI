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
                                <a href="#">Data Inventaris Tanah</a>
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
                                        Data Inventaris Tanah
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse">
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <!-- BEGIN FORM-->
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Jenis Laporan</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <select class="form-control" id='jenis' onChange="actJenis(this.value)">
																<option value='1'>Keseluruhan</option>
																<option value='2'>Per Kotama</option>
																<option value='3'>Per Satker</option>
															</select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										<div id="kotama-filter" class="row" style="display:none">
											<div class="col-md-8">
													<div class="form-group">
														<label class="control-label col-md-3">Kotama</label>
														<div class="form-group">
															<div class="col-md-5">
																<select class="form-control" name='kotama' id='kotama' onchange='actKotama(this.value)'>
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
										
                                        <div id="satker-filter" class="row" style="display:none">
												<div class="col-md-8">
													<div class="form-group">
														<label class="control-label col-md-3">Satker</label>
														<div class="form-group">
															<div class="col-md-5">
																<div id="statediv2">
																<select class="form-control" name='lanud2' id='satker'>
																	<option value='0' selected>Pilih Satker</option>
																	
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
                                        <a class="btn blue" onclick="preview()">&nbsp;  Preview </a>
                                    
                                    <!-- END FORM-->
									<br><br><br>
									
									<div id="preview_area">
									
									</div>

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
$('#jenis').val('1');

function actJenis(val){
	if(val == '1'){
		$('#kotama-filter').css('display','none');
	}else{
		$('#kotama-filter').css('display','block');
	}
}

function actKotama(val){
	if($('#jenis').val() == '3'){
		$('#satker-filter').css('display','block');
		
		$.ajax({
			url : '<?php echo site_url(); ?>report/satker_from_kotama',
			type : 'post',
			data : { val : val },
			success : function(data){
				json = JSON.parse(data);
				
				var num_data = 0;
				for(num_data; num_data < json.satker.length; num_data++){
					$('#satker').append($("<option></option>")
						.attr("value",json.satker[num_data].id)
						.text(json.satker[num_data].lanud)); 
				}
			}
		});
	}else{
		$('#satker-filter').css('display','none');
	}
}

function preview(){
	/*var kotama = 'default';
	var satker = 'default';
	if(typeof $('#kotama-filter').val() !== 'undefined'){
		kotama = $('#kotama-filter').val();
	}
	
	if(typeof $('#satker-filter').val() !== 'undefined'){
		satker = $('#satker-filter').val();
	}*/
	
	$.ajax({
		url : '<?php echo site_url(); ?>report/preview_inventaris',
		type : 'post',
		//data : { jenis : $('#jenis').val(),kotama : kotama, satker : satker }
		data : { jenis : $('#jenis').val(),kotama : $('#kotama').val(), satker : $('#satker').val() },
		success : function(data){
			json = JSON.parse(data);
			
			var val = '<b>MARKAS BESAR ANGKATAN UDARA<br>'+
				'DINAS FASILITAS DAN KONTRUKSI <br><br></b>';
				
			val = val + '<center><b>'+$('#judul').val()+'</b></center><br>';
			
			val = val + '<table class="table table-striped table-bordered table-hover table-responsive">'+
				'<thead>'+
					'<tr>'+
						'<th>No</th>'+
						'<th>Kotama / Satker</th>'+
						'<th>Sudah Sertifikat</th>'+
						'<th>Belum Sertifikat</th>'+
						'<th>Luas Total</th>'+
						'<th>Keterangan</th>'+
					'</tr>'+
				'</thead>'+
				'<tbody>';
				
			var num_info = 0;
			for(num_info; num_info < json.kotama.length; num_info++){
				val = val + '<tr>'+
					'<td>'+(num_info+1)+'</td>'+
					'<td>'+json.kotama[num_info].kotama+'</td>'+
					'<td></td>'+
					'<td></td>'+
					'<td></td>'+
					'<td></td>'+
				'</tr>';
				//console.log(json.kotama[num_info].id);
				//console.log('*');
				var num_lanud = 0;
				for(num_lanud; num_lanud < json.per_lanud.length; num_lanud++){
					if(json.per_lanud[num_lanud].id_kotama == json.kotama[num_info].id){
						var jum_data = 0;
						var jum_sudah = 0;
						var jum_belum = 0;
						//var jum_bidang = 0;
						//var is_same = "";
						/*for(jum_data; jum_data < json.info.length; jum_data++){
							if(json.per_lanud[num_lanud].id_lanud == json.info[jum_data].id_lanud){
								var a = 1;
								for(a; a <= 2; a++){
									if(){
										if(json.info[jum_data].jenis == '1'){
											jum_sudah = jum_sudah + json.info[jum_data].luas;
										}else{
											jum_belum = jum_belum + json.info[jum_data].luas;
										}
									}
								}
								
								//jum_bidang++;
							}
						}*/
						
						//console.log(json.per_lanud[num_lanud].id_lanud);
						//console.log('-');
						var jum_info_satu = 0;
						//for(jum_info_satu; jum_info_satu < json.info.length; jum_info_satu++){
						for(jum_info_satu; jum_info_satu < json.detail.length; jum_info_satu++){
							//if(json.per_lanud[num_lanud].id_lanud == json.info[jum_info_satu].id_lanud){
								if(json.per_lanud[num_lanud].id_lanud == json.detail[jum_info_satu].lanud){
								//if(json.info[jum_info_satu].jenis == '1'){
								if(json.detail[jum_info_satu].jenis == '1'){
									//jum_sudah = jum_sudah + parseInt(json.info[jum_info_satu].luas);
									jum_sudah = jum_sudah + parseInt(json.detail[jum_info_satu].luas);
								}else{
									//jum_belum = jum_belum + parseInt(json.info[jum_info_satu].luas);
									jum_belum = jum_belum + parseInt(json.detail[jum_info_satu].luas);
								}
								jum_data++;
								//console.log(json.detail[jum_info_satu].lanud);
								//console.log('+');
								//console.log('<br>');
							}
						}
						
						val = val + '<tr>'+
							'<td></td>'+
							'<td>'+json.per_lanud[num_lanud].lanud+'</td>'+
							'<td>'+jum_sudah+'</td>'+
							'<td>'+jum_belum+'</td>'+
							'<td>'+(parseInt(jum_sudah) + parseInt(jum_belum))+'</td>'+
							'<td>'+jum_data+' bidang</td>'+
							
							/*'<td>'+r('sudah',json.per_lanud[num_lanud].id_lanud)+'</td>'+
							'<td>'+r('belum',json.per_lanud[num_lanud].id_lanud)+'</td>'+
							'<td>'+r('total',json.per_lanud[num_lanud].id_lanud)+'</td>'+
							'<td>'+r('ket',json.per_lanud[num_lanud].id_lanud)+'</td>'+*/
						'</tr>';
					}
				}
			}
			
			val = val + '</tbody></table>';
			
			val = val + '<br><br>'+
				'<div style=" float:right; text-align: center; width: 250px">'+
					'<div align="center">'+
						$('#ttc').val()+'<br>'+
						$('#jabatan').val()+
						'<br><br><br><br>'+
						$('#penanggungjwb').val()+'<br>'+
						$('#nrp').val()+
					'</div>'+
				'</div>';
			
			$('#preview_area').html(val);
		}
	});
}

function r(forxx,id){
	//return 3;
	$.ajax({
		url : '<?php echo site_url(); ?>report/for_data',
		type : 'post',
		data : { id : id },
		success : function(data){
			json = JSON.parse(data);
			
			return 4;
			/*var jum = 0;
			var sudah = 0;
			var belum = 0;
			for(jum; jum < json.forx.length; jum++){
				if(json.forx[jum].jenis == 1){
					sudah = sudah + json.forx[jum].luas;
				}else{
					belum = belum + json.forx[jum].luas;
				}
			}
			
			if(forxx == 'sudah'){
				return sudah;
			}else if(forxx == 'belum'){
				return belum
			}else if(forxx == 'total'){
				return belum + sudah;
			}else{
				return json.forx.length;
			}*/
		}
	});
	
	//return 3;
}
</script>