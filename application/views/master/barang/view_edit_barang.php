<!DOCTYPE html>
<html lang="en" class="no-js">
    <?php $this->load->view('v_header') ?>
	
	<script>
	
	$(document).ready(function () {
            $('#kesatuan').change(function () {
                var kesatuan = {KESATUAN: $("#kesatuan").val()};
                $.ajax({
                    type: 'POST',
                    url: $("#kesatuan").attr('url'),
                    data: kesatuan,
                    success: function (msg) {
                        $('#komoditi').html(msg);
                        $('#komoditi').prop("disabled", false);
                        $('#select2-chosen-2').html($("#komoditi option:first").text());
                    }
                });
            });
			$('#komoditi').change(function () {
                var komoditi = {KOMODITI: $("#komoditi").val()};
                $.ajax({
                    type: 'POST',
                    url: $("#komoditi").attr('url'),
                    data: komoditi,
                    success: function (msg) {
                        $('#jenis').html(msg);
                        $('#jenis').prop("disabled", false);
                        $('#select2-chosen-3').html($("#jenis option:first").text());
                    }
                });
            });
			
			$('#jenis').change(function () {
                var jenis = {JENIS: $("#jenis").val()};
                $.ajax({
                    type: 'POST',
                    url: $("#jenis").attr('url'),
                    data: jenis,
                    success: function (msg) {
                        $('#fungsi').html(msg);
                        $('#fungsi').prop("disabled", false);
                        $('#select2-chosen-4').html($("#fungsi option:first").text());
                    }
                });
            });
			
			//Load kode jenis
			$('#fungsi').change(function () {
                var fungsi = {FUNGSI: $("#fungsi").val()};
                $.ajax({
                    type: 'POST',
                    url: $("#fungsi").attr('url'),
                    data: fungsi,
					success: function (msg) {
							
                        $('#kode').html(msg);
						var value = $("#kode2").val();
						$('#kode2').focus();
						$('#kode2').val(value + '.');
						//alert(value);
                    }
                });
				
            });
		});
		
		function myFunction(id)
		{
			var str = document.getElementById(id).value;
			var res = str.toUpperCase();
			document.getElementById(id).value=res;
		}
		
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
                                <a href="<?php echo site_url('#') ?>">Master</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
							<li>
                                <a href="<?php echo site_url('c_master/barang') ?>">Barang</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a>Edit Data</a>
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
                        Tambah Data Master Barang                    
                    </h3>
                    <div class="portlet box red" id="form-organisasi">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Form Master Barang
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
							<?php foreach($barang as $row){ ?>
                            <form action="<?php echo site_url('c_master/edit_barang/'.$row->id.'') ?>" class="horizontal-form" method = "post">
                                <div class="form-body">
                                    <fieldset class="scheduler-border">
                                        <legend class="scheduler-border">Barang</legend>
                                        <!--<div class="row">
											<div class="col-md-8">
												<div class="form-group">
													<label class="control-label col-md-3" for="program">Kesatuan</label>
													<div class="form-group">
														<div class="col-md-5">
															<select class="form-control select2me" data-placeholder="Pilih Kesatuan" name="KESATUAN" id="kesatuan" tabindex="1" url="<?php echo site_url('c_master/chain_to_komoditi') ?>">
																<option value=""></option>
																<?php
																foreach
																($kesatuan as $kesatuan_res) {
																	?>
																	<option value="<?php echo $kesatuan_res->id; ?>"><?php echo $kesatuan_res->kesatuan; ?></option>
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
													<label class="control-label col-md-3" for="program">Komoditi</label>
													<div class="form-group">
														<div class="col-md-5">
															<select class="form-control select2me" id="komoditi" name="KOMODITI" disabled url="<?php echo site_url('c_master/chain_to_jenis'); ?>" >
																<option value="">Pilih Kesatuan Dahulu</option>
															</select>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-8">
												<div class="form-group">
													<label class="control-label col-md-3" for="program">Jenis</label>
													<div class="form-group">
														<div class="col-md-5">
															<select class="form-control select2me" id="jenis" name="JENIS" disabled url="<?php echo site_url('c_master/chain_to_fungsi'); ?>" >
																<option value="">Pilih Komoditi Dahulu</option>
															</select>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-8">
												<div class="form-group">
													<label class="control-label col-md-3" for="program">Fungsi</label>
													<div class="form-group">
														<div class="col-md-5">
															<select class="form-control select2me" id="fungsi" name="FUNGSI" disabled url="<?php echo site_url('c_master/get_kodfung'); ?>" >
																<option value="">Pilih Jenis Dahulu</option>
															</select>
														</div>
													</div>
												</div>
											</div>
										</div>-->
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3" for="program">Kode Barang</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5" id="kode" >
                                                               <input type="text" id="kode2" name="kode" value="<?php echo $row->kode; ?>" onkeyup="myFunction('kode2');" class="form-control" disabled >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3" for="program">Barang</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                               <input type="text" name="BARANG" id="barang" value="<?php echo $row->barang; ?>" onkeyup="myFunction('barang');" class="form-control">
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3" for="program">Negara Asal</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                               <input type="text" name="NEGARA_ASAL" id="negara_asal" value="<?php echo $row->negara_asal; ?>" onkeyup="myFunction('barang');" class="form-control">
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3" for="program">Tahun Buat</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                               <input type="text" name="TAHUN_BUAT" id="tahun_buat" value="<?php echo $row->tahun_buat; ?>" onkeyup="myFunction('barang');" class="form-control">
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										</fieldset>
									<div class="form-actions left">
                                        <button type="submit" value="SIMPAN" name="SIMPAN" class="btn green"><i class="fa fa-check"></i> Simpan</button>
										<button type="button" value="BATAL" name="BATAL" class="btn yellow" onclick=self.history.back()><i class="fa fa-undo"></i> Batal</button>
                                    </div>
                            </form>
							<?php } ?>
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