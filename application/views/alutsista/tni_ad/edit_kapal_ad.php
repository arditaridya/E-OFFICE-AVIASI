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
            var a = parseInt($('#s_ops').val()) || 0;
            var b = parseInt($('#ts_ops').val()) || 0;
            var c = parseInt($('#kons_noops').val()) || 0;
            var d = parseInt($('#rb_noops').val()) || 0;
            var e = parseInt($('#tl_noops').val()) || 0;

            $('#j_ops').val(a + b);
            $('#j_noops').val(c + d + e);
            $('#j_on').val(a + b + c + d + e);
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
                                <a href="#">TNI AD</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="<?php echo site_url('c_alutsista/kapal_ad'); ?>">Kapal</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
							<li>
                                <a href="#">Edit Data</a>
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
                        Edit Data Kapal AD                    
                    </h3>
                    <div class="portlet box red" id="form-organisasi">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Form Edit Kapal AD
                            </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse">
                                </a>
                                <a href="javascript:;" class="reload">
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <?php foreach ($kapal as $data) { ?>
                                <!-- BEGIN FORM-->
                                <form action="<?php echo site_url('c_alutsista/edit_kapal_ad/' . $this->uri->segment(3)); ?>" class="horizontal-form" method = "post">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3" for="program">KESATUAN</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <select class="form-control select2me" data-placeholder="Pilih Kesatuan" name="kesatuan" id="kesatuan" tabindex="1">
                                                                <option value=""></option>
                                                                <?php
                                                                foreach ($kesatuan as $kesatuan_res) {
                                                                    if ($data->id_kes == $kesatuan_res->id) {
                                                                        ?>
                                                                        <option value="<?php echo $kesatuan_res->id ?>" selected><?php echo $kesatuan_res->kesatuan ?></option>
                                                                        <?php
                                                                    } else {
                                                                        ?>
                                                                        <option value="<?php echo $kesatuan_res->id ?>"><?php echo $kesatuan_res->kesatuan ?></option>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                <?php }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3" for="program">JENIS</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <select class="form-control select2me" id="jenis" name="jenis" data-placeholder="Pilih Jenis" url="<?php echo site_url('c_alutsista/chain_to_fungsi') ?>">
                                                                <option value=""></option>
                                                                <?php
                                                                foreach ($jenis as $jenis_res) {
                                                                    if ($data->id_jenis == $jenis_res->id) {
                                                                        ?>
                                                                        <option value="<?php echo $jenis_res->id ?>" selected><?php echo $jenis_res->jenis ?></option>
                                                                        <?php
                                                                    } else {
                                                                        ?>
                                                                        <option value="<?php echo $jenis_res->id ?>"><?php echo $jenis_res->jenis ?></option>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                <?php }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3" for="program">FUNGSI</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <select class="form-control select2me" id="fungsi" name="fungsi" data-placeholder="Pilih Fungsi">
                                                                <option value=""></option>
                                                                <?php
                                                                foreach ($fungsi as $fungsi_res) {
                                                                    if ($data->id_fungsi == $fungsi_res->id) {
                                                                        ?>
                                                                        <option value="<?php echo $fungsi_res->id ?>" selected><?php echo $fungsi_res->fungsi ?></option>
                                                                        <?php
                                                                    } else {
                                                                        ?>
                                                                        <option value="<?php echo $fungsi_res->id ?>"><?php echo $fungsi_res->fungsi ?></option>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                <?php }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3" for="program">BARANG</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <select class="form-control select2me" id="barang" name="barang" data-placeholder="Pilih Barang">
                                                                <option value=""></option>
                                                                <?php
                                                                foreach ($barang as $barang_res) {
                                                                    if ($data->id_barang == $barang_res->id) {
                                                                        ?>
                                                                        <option value="<?php echo $barang_res->id ?>" selected><?php echo $barang_res->barang ?></option>
                                                                        <?php
                                                                    } else {
                                                                        ?>
                                                                        <option value="<?php echo $barang_res->id ?>"><?php echo $barang_res->barang ?></option>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                <?php }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">LOKASI</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <input class="form-control" id="kb" name="lokasi" type="text" value="<?php echo $data->lokasi; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3"><b>OPERASIONAL......</b></label>
                                                    <div class="form-group">
                                                        <div class="col-md-8">
                                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                                    
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">SIAP</label>
                                                    <div class="form-group">
                                                        <div class="col-md-3">
                                                            <input class="form-control" onkeyup="hitung()" id="s_ops" name="s_ops" type="text" value="<?php echo $data->s_ops; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">TIDAK SIAP</label>
                                                    <div class="form-group">
                                                        <div class="col-md-3">
                                                            <input class="form-control" onkeyup="hitung()" id="ts_ops" name="ts_ops" type="text" value="<?php echo $data->ts_ops; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">JUMLAH OPERASIONAL</label>
                                                    <div class="form-group">
                                                        <div class="col-md-3">
                                                            <input type="text" readonly="" id="j_ops" name="j_ops" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <br><br>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3"><b>NON OPERASIONAL......</b></label>
                                                    <div class="form-group">
                                                        <div class="col-md-8">
                                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                                    
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">KONSERVASI</label>
                                                    <div class="form-group">
                                                        <div class="col-md-3">
                                                            <input class="form-control" onkeyup="hitung()" id="kons_noops" name="kons_noops" type="text" value="<?php echo $data->kons_noops; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">RUSAK BERAT</label>
                                                    <div class="form-group">
                                                        <div class="col-md-3">
                                                            <input class="form-control" onkeyup="hitung()" id="rb_noops" name="rb_noops" type="text" value="<?php echo $data->rb_noops; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">TOTAL LOST</label>
                                                    <div class="form-group">
                                                        <div class="col-md-3">
                                                            <input class="form-control" onkeyup="hitung()" id="tl_noops" name="tl_noops" type="text" value="<?php echo $data->tl_noops; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">JUMLAH NON OPERASIONAL</label>
                                                    <div class="form-group">
                                                        <div class="col-md-3">
                                                            <input type="text" readonly="" id="j_noops" name="j_noops" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">JUMLAH OPS &amp; NON OPS</label>
                                                    <div class="form-group">
                                                        <div class="col-md-3">
                                                            <input type="text" readonly="" id="j_on" name="j_on" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group"></div>
                                        </div>
                                        <input type="hidden" name="tanggal_input" value="<?php echo date('Y-m-d') ?>">
                                        <div class="form-actions left">
                                            <input type="submit" name="update" class="btn green" value="&#xf00c; Simpan">
                                            <input type="submit" name="batal" class="btn yellow" value="Batal">
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