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

                                    <form action="<?php echo base_url('data_aset/simpan/'.$this->uri->segment(3)); ?>" class="horizontal-form" method="post" enctype="multipart/form-data">
                                       

                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Lanud</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control" name="halo" id="halo" value ="<?php echo $nama_lanud;?>" readonly>
															<input type="hidden" class="form-control" name="lanud" id="lanud" value ="<?php echo $id_lanud;?>" readonly>
                                                        
														</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">IKN</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control" name="ikn" id="ikn">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">SIMAK</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control" name="simak" id="simak" maxlength="12">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Lokasi</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control" name="lokasi" id="lokasi">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Luas</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control" name="luas" id="luas" onkeyup="calculate1()">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Dasar Perolehan</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <select class="form-control" name='dasar_perolehan' id='dasar_perolehan'>
																<option value='' selected>Pilih Dasar Perolehan</option>
																<?php foreach($daper as $row){ ?>
																<option value="<?php echo $row->id; ?>"><?php echo $row->dasar_perolehan; ?></option>
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
                                                    <label class="control-label col-md-3">Tahun Perolehan</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <select class="form-control" name="tahun_perolehan" id="tahun_perolehan">
																	<option value="" selected>Pilih Tahun</option>";
																	<?php
																	$now=date("Y")+3; 
																		for($thn=1999; $thn<=$now; $thn++){ ?>
																		<option value="<?php echo $thn; ?>"><?php echo $thn; ?></option>
																	<?php }?>
															</select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<hr>
										
										<div class="input_fields_wrap">
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3"><b>Sertifikat</b></label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                           <a class="add_field_button btn btn-info">Tambah</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">No Sertifikat</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control" name="no_sertifikat[]" id="no_sertifikat[]">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Luas</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control luas" name="sert_luaz" id="sert_luaz" onkeyup="calculate1()">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										</div>
										
										
										
										<div id='serti'>
										</div>
										<hr>
										
										
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3"><b>Belum Sertifikat</b></label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                           
														</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Luas</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control" name="sert_luas" id="sert_luass" onkeypress="return hanyaAngka(event, false)" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<hr>
										
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Nilai</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control" name="nilai" id="nilai" onkeyup="actNumber(this.value)"  onkeypress='return event.charCode >= 48 && event.charCode <= 57 && event.charCode = 8'>
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
                                                        <div class="col-md-5">
                                                            <textarea class="form-control" name="keterangan" id="keterangan"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3"><input class="btn btn-info" type="button" value="Tambah Denah" onclick="addUpload()" name="upload" /></label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <input type="file" class="form-control" id="userfile[]" name='userfile[]'>
															
					
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										<div id='upload'>
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

$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div><div class="row"><div class="col-md-8"><div class="form-group"><label class="control-label col-md-3">No Sertifikat</label><div class="form-group"><div class="col-md-5"><input type="text" class="form-control" name="no_sertifikat[]" id="no_sertifikat[]"></div></div></div></div></div><div class="row"><div class="col-md-8"><div class="form-group"><label class="control-label col-md-3">Luas</label><div class="form-group"><div class="col-md-5"><input type="text" class="form-control luas" name="sert_luaz[]" id="sert_luaz[]" onkeyup="calculate1()"></div></div></div></div></div><a href="#" class="remove_field">X</a></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
	
/*	
$('input[name="sert_luaz[]"]').keyup(function(){
   var val = 0;
   $('input[name="sert_luaz[]"]').each(function() {
                val += Number($(this).val());
            });
    $('input[name="sert_luas"]').val(val);
});
*/
});
 function addUpload(){
			$('#upload').append('<br><div class="row"><div class="col-md-8"><div class="form-group"><label class="control-label col-md-3">&nbsp;</label><div class="col-sm-5"><input type="file" class="form-control input-sm" id="userfile[]" name="userfile[]"></div></div></div></div>');
        }
		
 function addSerti(){
			$('#serti').append('<br><br><div class="row"><div class="col-md-8"><div class="form-group"><label class="control-label col-md-3">No Sertifikat</label><div class="col-sm-5"><input type="text" class="form-control input-sm" id="no_sertifikat[]" name="no_sertifikat[]"></div></div></div></div><br><div class="row"><div class="col-md-8"><div class="form-group"><label class="control-label col-md-3">Luas</label><div class="col-sm-5"><input type="text" class="form-control input-sm" id="sert_luaz[]" name="sert_luaz[]"></div></div><div align="left"><a onclick="Closenya()">X</a></div></div></div>');
        }
		
 function Closenya(){
        $('#serti').remove();
      } ;
(function(){

})();

function hanyaAngka(e, decimal) { 
    var key;
    var keychar;
     if (window.event) {
         key = window.event.keyCode;
     } else
     if (e) {
         key = e.which;
     } else return true;
    
    keychar = String.fromCharCode(key);
    if ((key==null) || (key==0) || (key==8) ||  (key==9) || (key==13) || (key==27) ) {
        return true;
    } else 
    if ((("0123456789").indexOf(keychar) > -1)) {
        return true; 
    } else 
    if (decimal && (keychar == ".")) {
        return true; 
    } else return false; 
    }
	
	function actNumber(val){
			var pemisah = val.split(".");
			var pemisah_awal = 0;
			var real_number = "";
			for(pemisah_awal;pemisah_awal < pemisah.length;pemisah_awal++){
				real_number = real_number + pemisah[pemisah_awal];
			}
			console.log('real_number > '+real_number);
			
			if(real_number.length > 3){
				var up = Math.ceil(real_number.length / 3);
				var pertiga = 0;
				var isi = "";
				var number = real_number.length - 1;
				console.log('up > '+up);
				for(pertiga;pertiga < up;pertiga++){ // 0 < 2
					var format = 0;
					for(format;format < 3;format++){ // 0 < 3
						if(number >= 0){ // 3 >= 0
							isi = isi + real_number[number];
							if(format == 2 && pertiga != up - 1){
								isi = isi + ".";
							}
							number--;
							// 000.
							console.log('pertiga > '+pertiga+' format > '+format)
						}
					}
					console.log('pertiga for > '+pertiga);
				}
				console.log(isi);
				
				var lfix = isi.length;
				var fix_val = "";
				var lv = lfix - 1;
				for(lv;lv >= 0;lv--){
					fix_val = fix_val + isi[lv];
				}
				console.log(fix_val);
				$('#nilai').val(fix_val);
			}else{
				$('#nilai').val(real_number);
			}
		}
		
	function calculate1(){
		if($('#luas').val()){
			var a = 0;
			$(".luas").each(function() {
				if($(this).val() != ""){	
					a = parseInt(a) + parseInt($(this).val());
				}
			});
			if(parseInt($('#luas').val()) - parseInt(a) >= 0){
				$('#sert_luass').val(parseInt($('#luas').val()) - parseInt(a));
			}
		}
	/*var a = parseFloat($('#luas').val());
	var b = parseFloat($('#sert_luaz[]').val());
	alert(b);
	
	
	if ($('luas').val()=='' || $('#sert_luaz[]').val()==''){
		$('#sert_luas').val('') ;
	}else{
		$('#sert_luas').val(a - b) ;
	}
	
	
	
	
	$().val();*/
	//alert(a);
	
	}
	
</script>
