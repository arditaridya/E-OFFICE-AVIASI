<!DOCTYPE html>
<html lang="en" class="no-js">
    <?php $this->load->view('v_header') ?>
	
	<script>
	$(document).ready(function(){
	 $('#kode_kelompok').change(function () {
                var kode_kelompok = {kode_kelompok: $("#kode_kelompok").val()};
                $.ajax({
                    type: 'POST',
                    url: $("#kode_kelompok").attr('url'),
                    data: kode_kelompok,
                    success: function (msg) {
                        $('#komoditi_barang_kode').html(msg);
                        $('#komoditi_barang_kode').prop("disabled", false);
                        $('#select2-chosen-2').html($("#komoditi_barang_kode option:first").text());
                    }
                });
            });
	});
	
	$(document).ready(function(){
	 $('#komoditi_barang_kode').change(function () {
                var kode_kelompok = {kode_kelompok: $("#komoditi_barang_kode").val()};
                $.ajax({
                    type: 'POST',
                    url: $("#kode_kelompok").attr('url'),
                    data: kode_kelompok,
                    success: function (msg) {
                        $('#komoditi_barang_kode').html(msg);
                        $('#komoditi_barang_kode').prop("disabled", false);
                        $('#select2-chosen-2').html($("#komoditi_barang_kode option:first").text());
                    }
                });
            });
	});
	</script>
    <body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo page-container-bg-solid">
        <?php $this->load->view('v_horizontal_menu') ?>

        <div class="clearfix">
        </div>

        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <?php $this->load->view('v_sidebar') ?>
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>
                                <a href="<?php echo site_url('c_master/jenis_barang') ?>">Alutsista</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a>Tambah Data</a>
                            </li>
                        </ul>
                        <div class="page-toolbar">
                            <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm btn-default" data-container="body" data-placement="bottom" data-original-title="Rubah range tanggal">
                                <i class="icon-calendar"></i>&nbsp; 
                                <span class="thin uppercase visible-lg-inline-block">&nbsp;</span>&nbsp; 
                                <i class="fa fa-angle-down"></i>
                            </div>
                        </div>
                    </div>
                    <h3 class="page-title">
                        Tambah Data Master Fungsi Barang                    
                    </h3>
                    <div class="portlet box green" id="form-organisasi">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Form Master Fungsi Barang
                            </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse">
                                </a>
                                <a href="javascript:;" class="reload">
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <!-- BEGIN FORM-->
                            <form action="<?php echo site_url('c_master/simpan_fungsi_barang') ?>" class="horizontal-form" method = "post">
                                <div class="form-body">
                                    <fieldset class="scheduler-border">
                                        <legend class="scheduler-border">Barang</legend>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3" for="program">Kelompok Barang</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
														<select class="form-control select2me" data-placeholder="Pilih Kelompok" name="kode_kelompok" id="kode_kelompok" tabindex="1" url="<?php echo site_url('c_master/lihat_komoditi'); ?>">
                                                                <option value=""></option>
                                                                <?php foreach 
																($kelompok as $kelompok_res) 
																{ ?>
                                                                    <option value="<?php echo $kelompok_res->kode; ?>"><?php echo $kelompok_res->nama; ?></option>
																<?php  } ?>
                                                            
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3" for="program">Komoditi Barang</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                               <select class="form-control select2me" id="komoditi_barang_kode" name="komoditi_barang_kode" disabled="disabled">
                                                                <option value="">Pilih Komoditi</option>
                                                            
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3" for="program">Jenis Barang</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
														<select class="form-control select2me" id="jenis_barang_kode" name="jenis_barang_kode" disabled="disabled">
                                                                <option value="">Pilih Jenis</option>
                                                            
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3" for="program">Kode</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                               <input type="text" name="kode" class="form-control">
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3" for="program">Nama</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                               <input type="text" name="nama" class="form-control">
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										</fieldset>
									<div class="form-actions right">
                                        <button type="button" class="btn default" onclick=self.history.back()>Batal</button>
                                        <button type="submit" class="btn blue"><i class="fa fa-check"></i> Simpan</button>
                                    </div>
                            </form>
                            <!-- END FORM-->
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