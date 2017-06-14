<!DOCTYPE html>
<html lang="en" class="no-js">
    <?php $this->load->view('v_header') ?>
    <body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo page-container-bg-solid">
<?php /* ?>
	<link href="<?php echo base_url(); ?>assets/halo/jquery-ui.css" rel="stylesheet" type="text/css"/>
	<script src="<?php echo base_url(); ?>assets/halo/jquery.min.js" type="text/javascript"></script>

 <script type="text/javascript">
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
</script>
<?php */ ?>	

<script type='text/javascript' src='<?php echo base_url();?>assets/js/jquery.min.js'></script>
<script type='text/javascript' src='<?php echo base_url();?>assets/js/jquery.autocomplete.js'></script>
<link href='<?php echo base_url();?>assets/css/jquery.autocomplete.css' rel='stylesheet' />
<link href='<?php echo base_url();?>assets/css/default.css' rel='stylesheet' />
		
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
                                <?php
								$x = explode("_",$this->uri->segment(3));
								$link = $x[1]."_".$x[2]."_".$x[3];
								?>
                                <a href="<?php echo site_url('pemanfaatan/index/'.$link); ?>">List Pemanfaatan (<font color="blue"> <?php echo $nama_lanud;?> </font>)</a>
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
<?php	
foreach ($daper as $value) {		
?>
									<form action="<?php echo base_url('pemanfaatan/update/'.$this->uri->segment(3)); ?>" class="horizontal-form" method="post">
										<?php /* ?>
                                    <form action="<?php echo base_url('permasalahan/update'); ?>" class="horizontal-form" method="post" enctype="multipart/form-data">
                                       
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
                                                    <label class="control-label col-md-3">SIMAK</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control" name="SIMAK" id="SIMAK" value="<?php echo $value->simak; ?>">
															<input type="hidden" class="form-control" name="idnya" id="idnya" value="<?php echo $value->id; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Permasalahan</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <textarea class="form-control" name="permasalahan" id="permasalahan"><?php echo $value->permasalahan; ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Upaya Penyelesaian</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <textarea class="form-control" name="upaya_penyelesaian" id="upaya_penyelesaian"><?php echo $value->upaya_penyelesaian; ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Perkembangan Terakhir</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <textarea class="form-control" name="perkembangan_terakhir" id="perkembangan_terakhir"><?php echo $value->perkembangan_terakhir; ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<?php */ ?>
                                        
                                        <input type="hidden" name="id_edit" value="<?php echo $id_edit; ?>">

                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Simak</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <?php /* 20160606 ?>
                                                            <input type="text" class="form-control" id="simak" value="<?php echo $value->simak; ?>">
                                                            <input type="hidden" name="simak" id="simak-id" value="<?php echo $value->simak_id; ?>">
                                                            <?php */ ?>
                                                            <input type="text" name="simak" class="form-control" id="simak" value="<?php echo $value->simak; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Alamat</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <textarea id="alamat" style="width:300px; height:100px" disabled><?php echo $value->lokasi; ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">BMN Yang Dikerjasamakan</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <select name="bmn" class="form-control">
                                                            	<option value="0" <?php echo ($value->bmn == "0")?"selected":""; ?>>- Pilih -</option>
                                                                <option value="1" <?php echo ($value->bmn == "1")?"selected":""; ?>>Tanah</option>
                                                                <option value="2" <?php echo ($value->bmn == "2")?"selected":""; ?>>Tanah dan Bangunan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Luas Bangunan</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control" name="bangunan" value="<?php echo $value->bangunan; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Luas Tanah</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control" name="tanah" value="<?php echo $value->tanah; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Nilai Sewa</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control" name="sewa" id="sewa" onkeyup="actNumber(this.value)" value="<?php echo $value->sewa; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Rekomendasi Menkeu / KPKNL</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control" name="menkeu" value="<?php echo $value->menkeu; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">No Perjanjian</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control" name="perjanjian" value="<?php echo $value->perjanjian; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Peruntukan</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control" name="peruntukan" value="<?php echo $value->peruntukan; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Pihak ke III / Penyewa</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control" name="penyewa" value="<?php echo $value->penyewa; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Pola Kerjasama</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control" name="kerjasama" value="<?php echo $value->pola_kerjasama; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Masa Kerjasama</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control" name="masa" value="<?php echo $value->masa_kerjasama; ?>">
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
/*
 function addUpload(){
			$('#upload').append('<br><div class="row"><div class="col-md-8"><div class="form-group"><label class="control-label col-md-3">&nbsp;</label><div class="col-sm-5"><input type="file" class="form-control input-sm" id="userfile[]" name="userfile[]"></div></div></div></div>');
        }
		
 function addSerti(){
			$('#serti').append('<br><br><div class="row"><div class="col-md-8"><div class="form-group"><label class="control-label col-md-3">No Sertifikat</label><div class="col-sm-5"><input type="text" class="form-control input-sm" id="no_sertifikat[]" name="no_sertifikat[]"></div></div></div></div><br><div class="row"><div class="col-md-8"><div class="form-group"><label class="control-label col-md-3">Luas</label><div class="col-sm-5"><input type="text" class="form-control input-sm" id="sert_luas[]" name="sert_luas[]"></div></div><div align="left"><input class="btn btn-info" type="button" value="Hapus" onclick="Closenya()" name="Hapus" /></div></div></div>');
        }
		
 function Closenya(){
        $('#serti').remove();
      } ;
(function(){

})();
*/

actNumber('<?php echo $value->sewa; ?>');

var site = "<?php echo site_url();?>";
$(function(){
	$('#simak').autocomplete({
    	serviceUrl: site+'pemanfaatan/search/<?php echo $x[3]; ?>',
        onSelect: function (suggestion) {
			$('#simak').val(suggestion.value);
			//$('#simak-id').val(suggestion.id);
			$('#alamat').val(suggestion.lokasi);
		}
    });
});

function actNumber(val){
	var pemisah = val.split(".");
	var pemisah_awal = 0;
	var real_number = "";
	for(pemisah_awal;pemisah_awal < pemisah.length;pemisah_awal++){
		real_number = real_number + pemisah[pemisah_awal];
	}
			
	if(real_number.length > 3){
		var up = Math.ceil(real_number.length / 3);
		var pertiga = 0;
		var isi = "";
		var number = real_number.length - 1;
		for(pertiga;pertiga < up;pertiga++){
			var format = 0;
			for(format;format < 3;format++){
				if(number >= 0){
					isi = isi + real_number[number];
					if(format == 2 && pertiga != up - 1){
						isi = isi + ".";
					}
					number--;
				}
			}
		}
				
		var lfix = isi.length;
		var fix_val = "";
		var lv = lfix - 1;
		for(lv;lv >= 0;lv--){
			fix_val = fix_val + isi[lv];
		}
		$('#sewa').val(fix_val);
	}else{
		$('#sewa').val(real_number);
	}
}

</script>
<?php } ?>