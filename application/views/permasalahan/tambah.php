<!DOCTYPE html>
<html lang="en" class="no-js">
    <?php $this->load->view('v_header') ?>
    <body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo page-container-bg-solid">
	<script type='text/javascript' src='<?php echo base_url();?>assets/js/jquery.min.js'></script>
<script type='text/javascript' src='<?php echo base_url();?>assets/js/jquery.autocomplete.js'></script>
<link href='<?php echo base_url();?>assets/css/jquery.autocomplete.css' rel='stylesheet' />
<link href='<?php echo base_url();?>assets/css/default.css' rel='stylesheet' />
	<script src="<?php echo base_url(); ?>assets/ckreditor/ckeditor.js" type="text/javascript"></script>
	
		
<script type="text/javascript">
/*
         $(document).ready(function () {
        $(function () {
            $( "#SIMAK" ).autocomplete({
                source: function(request, response) {
                    $.ajax({ 
                        url: "<?php echo site_url('permasalahan/lookup'); ?>",
                        data: { bahasa: $("#SIMAK").val()},
                        dataType: "json",
                        type: "POST",
                        success: function(data){
                            response(data);
                        }    
                    });
                },
            });
        });
    });
	*/
	
	
</script>			
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
			<?php //echo site_url()."assets/halo/jquery.min.js";die(); ?>
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                           
                            <li>
                                <a href="<?php echo site_url('permasalahan/index/'.$this->uri->segment(3)); ?>">List Permasalahan (<font color="blue"> <?php echo $nama_lanud;?> </font>)</a>
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

                                    <form action="<?php echo base_url('permasalahan/simpan/'.$this->uri->segment(3)); ?>" class="horizontal-form" method="post" enctype="multipart/form-data">
                                       

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
                                                    <label class="control-label col-md-3">Provinsi</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <select class="form-control" name='provinsi' id='provinsi' onchange='getKab()'>
																<option value='0' selected>--- Pilih Provinsi ---</option>
																<?php foreach($provinsi as $row){ ?>
																<option value="<?php echo $row->nama_provinsi; ?>"><?php echo $row->nama_provinsi; ?></option>
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
                                                    <label class="control-label col-md-3">Alamat Lengkap</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <textarea class="form-control" name="alamat" id="alamat"></textarea>
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
                                                            <input type="text" class="form-control" name="luas" id="luas">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Nilai</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control" name="nilai" id="nilai">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										
										
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3"><b>Permasalahan</b></label>
                                                    <div class="form-group">
                                                        <div class="col-md-8">
                                                            <textarea class="form-control ckeditor" name="permasalahan" id="permasalahan"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<br>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3"><b>Hasil Klarifikasi</b></label>
                                                    <div class="form-group">
                                                        <div class="col-md-8">
                                                            <textarea class="form-control ckeditor" name="hasil_klarifikasi" id="hasil_klarifikasi"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3"><b>Tindak Lanjut</b></label>
                                                    <div class="form-group">
                                                        <div class="col-md-8">
                                                            <textarea class="form-control ckeditor" name="tindak_lanjut" id="tindak_lanjut"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<br>

                                        

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
 function addUpload(){
			$('#upload').append('<br><div class="row"><div class="col-md-8"><div class="form-group"><label class="control-label col-md-3">&nbsp;</label><div class="col-sm-5"><input type="file" class="form-control input-sm" id="userfile[]" name="userfile[]"></div></div></div></div>');
        }
		
 function addSerti(){
			$('#serti').append('<br><br><div class="row"><div class="col-md-8"><div class="form-group"><label class="control-label col-md-3">No Sertifikat</label><div class="col-sm-5"><input type="text" class="form-control input-sm" id="no_sertifikat[]" name="no_sertifikat[]"></div></div></div></div><br><div class="row"><div class="col-md-8"><div class="form-group"><label class="control-label col-md-3">Luas</label><div class="col-sm-5"><input type="text" class="form-control input-sm" id="sert_luas[]" name="sert_luas[]"></div></div><div align="left"><input class="btn btn-info" type="button" value="Hapus" onclick="Closenya()" name="Hapus" /></div></div></div>');
        }
		
 function Closenya(){
        $('#serti').remove();
      } ;
var site = "<?php echo site_url();?>";
	  $(function(){
	$('#simak').autocomplete({
    	serviceUrl: site+'pemanfaatan/search/<?php echo substr($this->uri->segment(3),9,strlen($this->uri->segment(3))); ?>',
        onSelect: function (suggestion) {
			$('#simak').val(suggestion.value);
			//$('#simak-id').val(suggestion.id);
			//$('#alamat').val(suggestion.lokasi);
		}
    });
});
	  



</script>
