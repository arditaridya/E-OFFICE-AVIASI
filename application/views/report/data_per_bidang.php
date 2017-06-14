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
                                <a href="#">Data Aset Per Bidang</a>
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
                                        Data Aset Per Bidang
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse">
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <!-- BEGIN FORM-->
                                    <div class="col-lg-12" style="width:97%; height:700px !important; overflow:scroll; margin-left:15px">
										<div class="row">
                                        <!--<div class="col-lg-12" style="width:97%; height:700px !important; overflow:scroll; margin-left:15px">-->
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Jenis Laporan</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <select class="form-control" id='jenis'>
																<option value='2'>Per Kotama</option>
																<option value='3'>Per Satker</option>
															</select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										<div id="kotama-filter" class="row">
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
                                        <a class="btn blue" onclick="preview()">&nbsp;  Preview</a>
                                    
                                    <!-- END FORM-->
									<br><br>
									
									<div id="preview_area">
									
									</div>

                                </div></div>
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
$('#jenis').val('2');

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
	$.ajax({
		url : '<?php echo site_url(); ?>report/preview_per_bidang',
		type : 'post',
		data : { jenis : $('#jenis').val(),kotama : $('#kotama').val(), satker : $('#satker').val() },
		success : function(data){
			json = JSON.parse(data);
			
			var val = '<b>MARKAS BESAR ANGKATAN UDARA<br>'+
				'DINAS FASILITAS DAN KONTRUKSI <br><br></b>';
				
			val = val + '<center><b>'+$('#judul').val()+'</b></center><br>';
			
			/*
			val = val + '<table class="table table-striped table-bordered table-hover table-responsive">'+
				'<thead>'+
					'<tr>';
					
			var num_info = 0;
			for(num_info; num_info < json.lanud.length; num_info++){
				val = val + '<th>'+json.lanud[num_info].lanud+'</th>';
			}
			
			val = val + '</tr>'+
				'</thead>'+
				'<tbody>';
				
			var num_info = 0;
			for(num_info; num_info < json.lanud.length; num_info++){
				var num_bidang = 0;
				var arr_bidang+num_info = "";
				for(num_bidang; num_bidang < json.bidang.length; num_bidang++){
					if(json.lanud[num_info].id == json.bidang[num_bidang].lanud){
						//arr_bidang[num_info].push(json.bidang[num_bidang].luas);
					}
				}
			}
			*/
			
			val = val + '<table class="table table-striped table-bordered table-hover table-responsive">'+
				'<tbody>';
					
			var jml_max = 0;
			var num_info = 0;
			for(num_info; num_info < json.lanud.length; num_info++){
				var max_num = 0;
				var num_bidang = 0;
				for(num_bidang; num_bidang < json.bidang.length; num_bidang++){
					if(json.lanud[num_info].id == json.bidang[num_bidang].lanud){
						max_num++;
					}
				}
				
				if(jml_max < max_num){
					jml_max = max_num;
				}
			}
			
			val = val + '<tr><td>No</td>';
			
			var b = 1;
			for(b; b <= jml_max; b++){
				val = val + '<td>'+b+'</td>';
			}
			
			val = val + '<td><b>Total</b></td></tr>';
			
			//console.log(jml_max);
			
			var num_info = 0;
			for(num_info; num_info < json.lanud.length; num_info++){
				val = val + '<tr><td>'+json.lanud[num_info].lanud+'</td>';
				var max_go = 0;
				var num_bidang = 0;
				var count_bidang = 0;
				for(num_bidang; num_bidang < json.bidang.length; num_bidang++){
					if(json.lanud[num_info].id == json.bidang[num_bidang].lanud){
						val = val + '<td>'+json.bidang[num_bidang].luas+'</td>';
						count_bidang = count_bidang + parseInt(json.bidang[num_bidang].luas);
						max_go++;
					}
				}
					
					var a = 1;
					for(a; a <= jml_max - max_go; a++){
						val = val + '<td>-</td>';
					}
					
					val = val + '<td><b>'+count_bidang+'</b></td>';
				
				val = val + '</tr>';
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
</script>