<!DOCTYPE html>
<html lang="en" class="no-js">
    <?php $this->load->view('v_header') ?>
    <script type="text/javascript">
        function tmplfungsi(){
            kdjenis = document.getElementById("jenis_tniad").value;
            $.ajax({
                url:"<?php echo base_url(); ?>c_alutsista/get_fungsi_ad/"+kdjenis+"",success:function(response){
                    $("#fungsi_tni_ad").html(response);
                },
                dataType:"html"
            });
            return false;
        }

        function tmplbarang(){
            kdfungsi = document.getElementById("fungsi_tni_ad").value;
            $.ajax({
                url:"<?php echo base_url(); ?>c_alutsista/get_barang_ad/"+kdfungsi+"",success:function(response){
                    $("#barang_tni_ad").html(response);
                },
                dataType:"html"
            });
            return false;
        }
    </script>
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
                    <br />
                    <!-- END PAGE HEADER-->
                    <!-- <div class="row">
                        <div class="col-md-12">
                            <div class="clearfix">
                                <button type="button" class="btn red"><i class="fa fa-database"></i> Data Alutsista</button>
                            </div>
                        </div>
                    </div>
                    <br /> -->
                <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet box red">
                                <div class="portlet-title">
                                    <div class="caption">
                                        Form Input
                                    </div>
                                    <div class="tools">
                                        <a class="collapse" href="javascript:;" data-original-title="" title="">
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <!-- BEGIN FORM-->
                                    <form method="POST" class="horizontal-form" action="<?php echo base_url(); ?>c_alutsista/tambah_kapal_ad" role="form">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Kesatuan</label>
                                                    <div class="form-group">
                                                        <div class="col-md-8">
                                                            <select class="form-control" name="ad_kesatuan">
                                                            <option value="">Pilih Kesatuan</option>
                                                            <?php
                                                                foreach ($kesatuan_tni_ad as $value) {
                                                                    ?>
                                                                    <option value="<?php echo $value->id; ?>"><?php echo $value->kesatuan; ?></option>
                                                                    <?php
                                                                }
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
                                                    <label class="control-label col-md-3">Jenis</label>
                                                    <div class="form-group">
                                                        <div class="col-md-8">
                                                            <select class="form-control" name="ad_jenis" id="jenis_tniad" onchange="tmplfungsi()">
                                                            <option value="">Pilih Jenis</option>
                                                            <?php
                                                                foreach ($jenis_barang_kapalad as $value) {
                                                                    ?>
                                                                        <option value="<?php echo $value->id; ?>"><?php echo $value->jenis; ?></option>
                                                                    <?php
                                                                }
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
                                                    <label class="control-label col-md-3">Fungsi</label>
                                                    <div class="form-group">
                                                        <div class="col-md-8">
                                                            <div id="statediv">
                                                                <select class="form-control" name="ad_fungsi" id="fungsi_tni_ad" onchange="tmplbarang()">
                                                                    <option>Pilih Jenis Dahulu</option>
                                                                </select>
                                                            </div>
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
                                                    <label class="control-label col-md-3">Alutsista</label>
                                                    <div class="form-group">
                                                        <div class="col-md-8">
                                                            <div id="statediv2">
                                                                <select class="form-control" name="ad_barang" id="barang_tni_ad">
                                                                    <option>Pilih Fungsi Dahulu</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">LOKASI</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <input class="form-control" id="kb" name="ad_lokasi" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
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
                                                            <input class="form-control" onchange="calculate1()" id="s_ops" name="ad_s_ops" type="text">
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
                                                            <input class="form-control" onchange="calculate1()" id="ts_ops" name="ad_ts_ops" type="text">
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
                                                            <input type="text" readonly="" id="jops" name="jops" class="form-control">
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
                                                            <input class="form-control" onchange="calculate1()" id="kons_noops" name="ad_kons_noops" type="text">
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
                                                            <input class="form-control" onchange="calculate1()" id="rb_noops" name="ad_rb_noops" type="text">
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
                                                            <input class="form-control" onchange="calculate1()" id="tl_noops" name="ad_tl_noops" type="text">
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
                                                            <input type="text" readonly="" id="jnoops" name="jnoops" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">JUMLAH OPS &amp; NON OPS</label>
                                                    <div class="form-group">
                                                        <div class="col-md-3">
                                                            <input type="text" readonly="" id="jon" name="jon" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" value="<?php echo date('Y-m-d'); ?>" name="ad_tanggal_input">
                                        <br>
                                        <div class="form-actions left">
                                            <input type="submit" name="simpan" class="btn green" value="&#xf00c; Simpan">
                                            <button onclick="self.history.back()" class="btn yellow" type="button"><i class="fa fa-undo"></i> Batal</button>
                                    
                                    <!-- END FORM-->
                                    
                                </div></form>
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

    <script type="text/javascript">
        function calculate1(){
        var a = parseFloat($('#s_ops').val());
        var b = parseFloat($('#ts_ops').val());
        var c = parseFloat($('#kons_noops').val());
        var d = parseFloat($('#rb_noops').val());
        var e = parseFloat($('#tl_noops').val());
        if ($('#s_ops').val()=='' || $('#ts_ops').val()==''){
            $('#jops').val('') ;
        }else{
            $('#jops').val(a + b) ;
        }

        if ($('#kons_noops').val()=='' || $('#rb_noops').val()=='' || $('#tl_noops').val()==''){
            $('#jnoops').val('') ;
        }else{
            $('#jnoops').val(c + d + e) ;
        }

        if ($('#j_ops').val()=='' || $('#jnoops').val()==''){
            $('#jon').val('') ;
        }else{
            $('#jon').val(a + b + c + d + e) ;
        }

        $().val();
        //alert(a);
        
        }
    </script>
</html>