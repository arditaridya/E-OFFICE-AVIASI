<?php	
foreach ($datzz as $value) {		
?>
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
                                <?php
								$x = explode("_",$this->uri->segment(3));
								$link = $x[1]."_".$x[2]."_".$x[3];
								?>
                                <a href="<?php echo site_url('data_aset/index/'.$link); ?>">List Data Aset (<font color="blue"> <?php echo $nama_lanud;?> </font>)</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="#">Edit Data</a>
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

                                    <form action="<?php echo base_url('data_aset/update/'.$this->uri->segment(3)); ?>" class="horizontal-form" method="post" enctype="multipart/form-data">
                                       

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
                                                            <input type="text" class="form-control" name="ikn" id="ikn" value="<?php echo $value->ikn;?>">
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
                                                            <input type="text" class="form-control" name="simak" id="simak" value="<?php echo $value->simak;?>">
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
                                                            <input type="text" class="form-control" name="lokasi" id="lokasi" value="<?php echo $value->lokasi;?>">
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
                                                            <input type="text" class="form-control" name="luas" id="luas" value="<?php echo $value->luas;?>">
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
																<option value="<?php echo $row->id; ?>" <?php echo ($value->dasar_perolehan == $row->id)?"selected":""; ?>><?php echo $row->dasar_perolehan; ?></option>
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
																		<option value="<?php echo $thn; ?>" <?php echo ($value->tahun_perolehan == $thn)?"selected":""; ?>><?php echo $thn; ?></option>
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
										<?php	
										$num = 1;
										foreach ($detdat as $vlu) {		
										if ($vlu->jenis == 1){ 
										//echo $num;
										?>
										<div id="asdf<?php echo $num;?>">
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">No Sertifikat</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                           <input type="text" class="form-control" name="no_sertifikat[]" id="no_sertifikat[]" value="<?php echo $vlu->no_sertifikat; ?>">
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
                                                           <input type="text" class="form-control" name="luas[]" id="luas[]" value="<?php echo number_format($vlu->luas, 0, "," , "."); ?>">
														</div>
                                                    </div>
                                                </div><a onclick="hapusza('<?php echo $num ;?>')">&nbsp; Hapus</a>
                                            </div>
                                        </div>
										
										<br>
										</div>
										<?php $num++; }} ?>
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
										<?php	
										foreach ($detdat as $vlu) {		
										if ($vlu->jenis == 2){ 
										?>
										
									
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Luas</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                           <input type="text" class="form-control" name="luas[]" id="luas[]" value="<?php echo number_format($vlu->luas, 0, "," , "."); ?>">
														</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<br>
										
										<?php }} ?>
										<hr>
										
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Nilai</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control" name="nilai" id="nilai" value="<?php echo $value->nilai;?>">
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
                                                            <textarea class="form-control" name="keterangan" id="keterangan"><?php echo $value->keterangan;?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<hr>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3"><b>Denah</b></label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                           <a class="add_field_button btn btn-info">Tambah</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										 <?php
										$perfile = explode(',', $value->denah);
										$numr = 1;
										foreach ($perfile as $i => $key){ ?>
											<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">&nbsp;</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                           <div id="zaop<?php echo $numr;?>"><img src="<?php echo base_url(); ?>assets/upload_denah/<?php echo $key; ?>" width="100" /><input type="hidden" class="form-control" id="asalgbr[]" name='asalgbr[]' value="<?php echo $key;?>"><a onclick="hapusza2('<?php echo $numr ;?>')">&nbsp; Hapus</a></div><br>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
											
										<?php $numr++; } ?>
										
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
function hapusza(a){
			//alert(a);
			$("#asdf"+a).html(''); 
			
			
		}
function hapusza2(a){
			//alert(a);
			$("#zaop"+a).html(''); 
			
			
		}
$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div><div class="row"><div class="col-md-8"><div class="form-group"><label class="control-label col-md-3">No Sertifikat</label><div class="form-group"><div class="col-md-5"><input type="text" class="form-control" name="no_sertifikat[]" id="no_sertifikat[]"></div></div></div></div></div><div class="row"><div class="col-md-8"><div class="form-group"><label class="control-label col-md-3">Luas</label><div class="form-group"><div class="col-md-5"><input type="text" class="form-control" name="sert_luaz[]" id="sert_luaz[]"></div></div></div></div></div><a href="#" class="remove_field">&nbsp;&nbsp;&nbsp;Hapus</a></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
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



</script>

<?php } ?>