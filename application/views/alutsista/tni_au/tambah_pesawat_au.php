<!DOCTYPE html>
<html lang="en" class="no-js">
    <?php $this->load->view('v_header') ?>

    <script>
        $(document).ready(function () {
            $('#jenis').change(function () {
                var jenis = {jenis: $("#jenis").val()};
                $.ajax({
                    type: 'POST',
                    url: $("#jenis").attr('url'),
                    data: jenis,
                    success: function (msg) {
                        $('#fungsi').html(msg);
                        $('#fungsi').prop("disabled", false);
                        $('#select2-chosen-3').html($("#fungsi option:first").text());
                    }
                });
                var msg = "<select class=\"form-control select2me\" id=\"barang\" name=\"barang\" disabled><option value>Pilih Fungsi Dahulu</option></select>";
                $("#barang").html(msg);
                $("#barang").prop("disabled", true);
                $('#select2-chosen-4').html($("#barang option:first").text());
            });
            $('#fungsi').change(function () {
                var fungsi = {fungsi: $("#fungsi").val()};
                $.ajax({
                    type: 'POST',
                    url: "<?php echo site_url('c_alutsista/chain_to_barang') ?>",
                    data: fungsi,
                    success: function (msg) {
                        $("#barang").html(msg);
                        $("#barang").prop("disabled", false);
                        $("#select2-chosen-4").html($("#barang option:first").text());
                    }
                });
            });
        });

        function hitung() {
            var a = parseInt($('#baik').val()) || 0;
            var b = parseInt($('#rusak_ringan').val()) || 0;
            var c = parseInt($('#rusak_berat').val()) || 0;
            var d = parseInt($('#depo60').val()) || 0;

            $('#jumlah').val(a + b + c + d);
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
                                <a href="#">Alutsista</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
							<li>
                                <a href="#">TNI AU</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="<?php echo site_url('c_alutsista/pesawat_au'); ?>">Pesawat</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
							<li>
                                <a href="#">Tambah Data</a>
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
                        Tambah Data Pesawat AU                    
                    </h3>
                    <div class="portlet box red" id="form-organisasi">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Form Pesawat AU
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
                            <form action="<?php echo site_url('c_alutsista/tambah_pesawat_au') ?>" class="horizontal-form" method = "post">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="program">Kesatuan</label>
                                                <div class="form-group">
                                                    <div class="col-md-5">
                                                        <select class="form-control select2me" data-placeholder="Pilih Kesatuan" name="kesatuan" id="kesatuan" tabindex="1">
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
                                                <label class="control-label col-md-3" for="program">Jenis</label>
                                                <div class="form-group">
                                                    <div class="col-md-5">
                                                        <select class="form-control select2me" id="jenis" name="jenis" data-placeholder="Pilih Jenis" url="<?php echo site_url('c_alutsista/chain_to_fungsi') ?>">
                                                            <option value=""></option>
                                                            <?php
                                                            foreach
                                                            ($jenis as $jenis_res) {
                                                                ?>
                                                                <option value="<?php echo $jenis_res->id; ?>"><?php echo $jenis_res->jenis; ?></option>
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
                                                <label class="control-label col-md-3" for="program">Fungsi</label>
                                                <div class="form-group">
                                                    <div class="col-md-5">
                                                        <select class="form-control select2me" id="fungsi" name="fungsi" disabled>
                                                            <option value="">Pilih Jenis Dahulu</option>
                                                        </select>
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
                                                        <select class="form-control select2me" id="barang" name="barang" disabled>
                                                            <option value="">Pilih Fungsi Dahulu</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <div class="col-md-5">         
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
							<fieldset class="scheduler-border">
								<legend class="scheduler-border"></legend>
								<div class="form-group col-md-12">
								  <div class="col-md-3"><h4>SASBINPUAN</h4></div>
								</div>
									<div class="form-group">
									<br>
									<br>
									</div>
								
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="program">Kuat</label>
                                                <div class="form-group">
                                                    <div class="col-md-5">
                                                        <input type="text" name="kuat" id="kuat" class="form-control" onkeyup="hitung()" placeholder="Kuat">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="program">SAS</label>
                                                <div class="form-group">
                                                    <div class="col-md-5">
                                                        <input type="text" name="sas" id="sas" class="form-control" onkeyup="hitung()" placeholder="SAS">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
							</fieldset>
							<div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <div class="col-md-5">         
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
							<fieldset class="scheduler-border">
								<legend class="scheduler-border"></legend>
								<div class="form-group col-md-12">
								  <div class="col-md-3"><h4>Siap</h4></div>
								</div>
									<div class="form-group">
									<br>
									<br>
									</div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="program">Siap</label>
                                                <div class="form-group">
                                                    <div class="col-md-5">
                                                        <input type="text" name="siap" id="siap" class="form-control" onkeyup="hitung()" placeholder="Siap">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
							</fieldset>
							<div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <div class="col-md-5">         
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
							<fieldset class="scheduler-border">
								<legend class="scheduler-border"></legend>
								<div class="form-group col-md-12">
								  <div class="col-md-3"><h4>Tidak Siap</h4></div>
								</div>
									<div class="form-group">
									<br>
									<br>
									</div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="program">Har Ringan</label>
                                                <div class="form-group">
                                                    <div class="col-md-5">
                                                        <input type="text" name="har_ringan" id="har_ringan" class="form-control" onkeyup="hitung()" placeholder="Har Ringan">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="program">Har Berat</label>
                                                <div class="form-group">
                                                    <div class="col-md-5">
                                                        <input type="text" name="har_berat" id="har_berat" class="form-control" placeholder="Har Ringan">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="program">Har Sedang</label>
                                                <div class="form-group">
                                                    <div class="col-md-5">
                                                        <input type="text" name="har_sedang" id="har_sedang" class="form-control" onkeyup="hitung()" placeholder="Har Sedang">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="program">AWP</label>
                                                <div class="form-group">
                                                    <div class="col-md-5">
                                                        <input type="text" name="awp" id="awp" class="form-control" onkeyup="hitung()" placeholder="AWP">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
							</fieldset>
									<div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="program">Keterangan</label>
                                                <div class="form-group">
                                                    <div class="col-md-5">
                                                        <input type="text" name="ket" id="ket" class="form-control" placeholder="Keterangan">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group"></div>
                                    </div>
                                    <input type="hidden" name="insert_date" value="<?php echo date('Y-m-d') ?>">
                                    <div class="form-actions left">
                                        <input type="submit" name="simpan" class="btn green" value="&#xf00c; Simpan">
                                        <input type="submit" name="batal" class="btn yellow" onclick=self.history.back() value="Batal">
                                    </div>
                                </div>
                            </form>
                            <!-- END FORM-->
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