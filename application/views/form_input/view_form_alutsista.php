<!DOCTYPE html>
<html lang="en" class="no-js">
    <?php $this->load->view('v_header') ?>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#KLPK_BARANG_ID").change(function(){
                var klmpk_barang_id = {klmpk_barang_id: $("#KLPK_BARANG_ID").val()};
                $.ajax({
                    type: 'POST',
                    url: $("#KLPK_BARANG_ID").attr('url'),
                    data: klmpk_barang_id,
                    success: function (msg) {
                        $('#KOMODITI_BRNG_ID').html(msg);
                        $('#KOMODITI_BRNG_ID').prop("disabled",false);
                        $('#select2-chosen-2').html($("KOMODITI_BRNG_ID option:first").text());
                    }
                })
            })
        })
    </script>
    <script type="text/javascript">
        function form_show(form){
            $(".cuk").css('display','none');
            $("#"+form).css('display','block');
            //alert(form);
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
                                <a href="<?php echo site_url('main_menu') ?>">Menu Utama</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="<?php echo site_url('c_kesatuan'); ?>">Kesatuan</a>
                                <i class="fa fa-angle-right"></i>
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
                    <div class="row">
                        <div class="col-md-12">
                            <div class="clearfix">
                                <button type="button" class="btn red"><i class="fa fa-search"></i> Pencarian Alutsista</button>
                                <button type="button" class="btn red"><i class="fa fa-plus"></i> Tambah Kesatuan</button>
                                <button type="button" class="btn red"><i class="fa fa-database"></i> Data Alutsista</button>
                                <button type="button" class="btn red" onclick="document.location='<?php echo base_url() . "c_kesatuan/tambah_alutsista"; ?>'"><i class="fa fa-plus"></i> Tambah Alutsista</button>
                                <button type="button" class="btn red"><i class="fa fa-print"></i> Print</button>
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-md-3">
                            <!-- BEGIN BUTTONS PORTLET-->
                            <div class="portlet ">
                                <div class="portlet-body util-btn-margin-bottom-5">
                                    <!-- BEGIN BUTTON FOR INPUT SELECTED -->
                                    <div class="btn-group-vertical btn-group-solid">
                                        <?php
                                            /*foreach ($komoditi_barang->result() as $value) {
                                                ?>
                                                <button type="button" class="btn green" onclick="form_show('<?php echo $value->kode; ?>')"><?php echo $value->nama; ?></button>
                                                <?php
                                            }*/
                                        ?>

                                        <button type="button" class="btn green" onclick="form_show('senjata')">SENJATA</button>
                                        <button type="button" class="btn green" onclick="form_show('munisi')">MUNISI</button>
                                        <button type="button" class="btn green" onclick="form_show('kapal')">KAPAL</button>
                                        <button type="button" class="btn green" onclick="form_show('pesawat')">PESAWAT</button>
                                        <button type="button" class="btn green" onclick="form_show('alpalsus')">ALPALSUS</button>
                                        <button type="button" class="btn green" onclick="form_show('ranpur')">RANPUR</button>
                                        <button type="button" class="btn green" onclick="form_show('aloptik')">ALOPTIK</button>
                                        <button type="button" class="btn green" onclick="form_show('ranmor')">RANMOR</button>
                                        <button type="button" class="btn green" onclick="form_show('senjata_pesawat')">SENJATA PESAWAT TERBANG</button>
                                        <button type="button" class="btn green" onclick="form_show('munisi_pesawat')">MUNISI PESAWAT TERBANG</button>
                                    </div>
                                    <!-- END BUTTON FOR INPUT SELECTED -->
                                </div>
                            </div>
                            <!-- END BUTTONS PORTLET-->
                        </div>

<!-- Begin Form Rekap Senjata -->
                        <div class="col-md-9 cuk" id="senjata" style="display:none;">
                            <div class="portlet box green ">
                            <div class="portlet-title">
                                <div class="caption">
                                    Form Senjata
                                </div>
                                <div class="tools">
                                    <a title="" data-original-title="" href="" class="collapse">
                                    </a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <form class="form-horizontal" role="form">
                                    <div class="form-body">
                                        <input class="form-control" type="hidden">
                                        <input class="form-control" type="hidden">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Kelompok Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control" name="klmpk_barang_id" url="
                                                    <?php
                                                        echo site_url('c_kesatuan/lihat_klpk_barang_id');
                                                    ?>
                                                " id="KLPK_BARANG_ID">
                                                    <option value="">Pilih Kelompok</option>
                                                    <?php
                                                        foreach ($kelompok_barang->result() as $value) {
                                                            ?>
                                                            <option value="<?php echo $value->kode; ?>"><?php echo $value->nama; ?></option>
                                                            <?php
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Komoditi Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control" name="komoditi_brng_id" id="KOMODITI_BRNG_ID" disabled="disabled">
                                                    <option value="">Pilih Kelompok Dahulu</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Jenis Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                    <option>Option 4</option>
                                                    <option>Option 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Fungsi Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                    <option>Option 4</option>
                                                    <option>Option 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                    <option>Option 4</option>
                                                    <option>Option 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="portlet box grey-cascade">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    Pemakaian
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Baik</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Siap</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Rusak Ringan</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Tidak Siap</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Rusak Berat</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portlet box grey-cascade">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    Persediaan
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Baik</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Siap</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Rusak Ringan</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Tidak Siap</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Rusak Berat</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Negara Asal</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Tahun Buat</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Keterangan</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>      
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" class="btn green">Submit</button>
                                                <button type="button" class="btn default">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
<!-- End Form Rekap Senjata -->
<!-- Begin Form Munisi -->
                    <div class="col-md-9 cuk" id="munisi" style="display:none;">
                            <div class="portlet box green ">
                            <div class="portlet-title">
                                <div class="caption">
                                    Form Munisi
                                </div>
                                <div class="tools">
                                    <a title="" data-original-title="" href="" class="collapse">
                                    </a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <form class="form-horizontal" role="form">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Kelompok Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                    <option>Option 4</option>
                                                    <option>Option 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Komoditi Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                    <option>Option 4</option>
                                                    <option>Option 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Jenis Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                    <option>Option 4</option>
                                                    <option>Option 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Fungsi Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                    <option>Option 4</option>
                                                    <option>Option 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                    <option>Option 4</option>
                                                    <option>Option 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Jenis Senjata</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Jumlah Senjata</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">BP / Senjata</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Siap Pusat</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Tidak Siap Pusat</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Siap Satuan</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Tidak Siap Satuan</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Negara Asal</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Tahun Buat</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Keterangan</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>      
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" class="btn green">Submit</button>
                                                <button type="button" class="btn default">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
<!-- End Form Munisi-->
<!-- Begin Form Kapal -->
                    <div class="col-md-9 cuk" id="kapal" style="display:none;">
                            <div class="portlet box green ">
                            <div class="portlet-title">
                                <div class="caption">
                                    Form Kapal
                                </div>
                                <div class="tools">
                                    <a title="" data-original-title="" href="" class="collapse">
                                    </a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <form class="form-horizontal" role="form">
                                    <div class="form-body">
                                        <input class="form-control" type="hidden">
                                        <input class="form-control" type="hidden">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Kelompok Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control" name="klmpk_barang_id" url="
                                                    <?php
                                                        echo site_url('c_kesatuan/lihat_klpk_barang_id');
                                                    ?>
                                                " id="KLPK_BARANG_ID">
                                                    <option value="">Pilih Kelompok</option>
                                                    <?php
                                                        foreach ($kelompok_barang->result() as $value) {
                                                            ?>
                                                            <option value="<?php echo $value->kode; ?>"><?php echo $value->nama; ?></option>
                                                            <?php
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Komoditi Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control" name="komoditi_brng_id" id="KOMODITI_BRNG_ID" disabled="disabled">
                                                    <option value="">Pilih Kelompok Dahulu</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Jenis Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                    <option>Option 4</option>
                                                    <option>Option 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Fungsi Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                    <option>Option 4</option>
                                                    <option>Option 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                    <option>Option 4</option>
                                                    <option>Option 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <h3 class="form-section"></h3>
                                            <div class="portlet-body form">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Baik</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Siap</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Rusak Ringan</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Tidak Siap</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Rusak Berat</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <h3 class="form-section"></h3>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Negara Asal</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Tahun Buat</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Keterangan</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>      
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" class="btn green">Submit</button>
                                                <button type="button" class="btn default">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
<!-- End Form Kapal -->
<!-- Begin Form Pesawat -->
                    <div class="col-md-9 cuk" id="pesawat" style="display:none;">
                            <div class="portlet box green ">
                            <div class="portlet-title">
                                <div class="caption">
                                    Form Pesawat
                                </div>
                                <div class="tools">
                                    <a title="" data-original-title="" href="" class="collapse">
                                    </a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <form class="form-horizontal" role="form">
                                    <div class="form-body">
                                        <input class="form-control" type="hidden">
                                        <input class="form-control" type="hidden">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Kelompok Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control" name="klmpk_barang_id" url="
                                                    <?php
                                                        echo site_url('c_kesatuan/lihat_klpk_barang_id');
                                                    ?>
                                                " id="KLPK_BARANG_ID">
                                                    <option value="">Pilih Kelompok</option>
                                                    <?php
                                                        foreach ($kelompok_barang->result() as $value) {
                                                            ?>
                                                            <option value="<?php echo $value->kode; ?>"><?php echo $value->nama; ?></option>
                                                            <?php
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Komoditi Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control" name="komoditi_brng_id" id="KOMODITI_BRNG_ID" disabled="disabled">
                                                    <option value="">Pilih Kelompok Dahulu</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Jenis Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                    <option>Option 4</option>
                                                    <option>Option 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Fungsi Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                    <option>Option 4</option>
                                                    <option>Option 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                    <option>Option 4</option>
                                                    <option>Option 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Kesatuan Pemakai</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text" name="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Lokasi</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text" name="">
                                            </div>
                                        </div>
                                        <h3 class="form-section"></h3>
                                            <div class="portlet-body form">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Baik</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Siap</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Rusak Ringan</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Tidak Siap</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Rusak Berat</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <h3 class="form-section"></h3>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Negara Asal</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Tahun Buat</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Keterangan</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" class="btn green">Submit</button>
                                                <button type="button" class="btn default">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
<!-- End Form Pesawat -->
<!-- Begin Form Alpalsus -->
                    <div class="col-md-9 cuk" id="alpalsus" style="display:none;">
                            <div class="portlet box green ">
                            <div class="portlet-title">
                                <div class="caption">
                                    Form Alpalsus
                                </div>
                                <div class="tools">
                                    <a title="" data-original-title="" href="" class="collapse">
                                    </a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <form class="form-horizontal" role="form">
                                    <div class="form-body">
                                        <input class="form-control" type="hidden">
                                        <input class="form-control" type="hidden">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Kelompok Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control" name="klmpk_barang_id" url="
                                                    <?php
                                                        echo site_url('c_kesatuan/lihat_klpk_barang_id');
                                                    ?>
                                                " id="KLPK_BARANG_ID">
                                                    <option value="">Pilih Kelompok</option>
                                                    <?php
                                                        foreach ($kelompok_barang->result() as $value) {
                                                            ?>
                                                            <option value="<?php echo $value->kode; ?>"><?php echo $value->nama; ?></option>
                                                            <?php
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Komoditi Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control" name="komoditi_brng_id" id="KOMODITI_BRNG_ID" disabled="disabled">
                                                    <option value="">Pilih Kelompok Dahulu</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Jenis Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                    <option>Option 4</option>
                                                    <option>Option 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Fungsi Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                    <option>Option 4</option>
                                                    <option>Option 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                    <option>Option 4</option>
                                                    <option>Option 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="portlet box grey-cascade">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    Rekapitulasi
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Baik</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Siap</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Rusak Ringan</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Tidak Siap</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Rusak Berat</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portlet box grey-cascade">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    Persediaan
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Baik</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Siap</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Rusak Ringan</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Tidak Siap</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Rusak Berat</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Negara Asal</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Tahun Buat</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Keterangan</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" class="btn green">Submit</button>
                                                <button type="button" class="btn default">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
<!-- End Form Alpalsus -->
<!-- Begin Form Ranpur -->
                    <div class="col-md-9 cuk" id="ranpur" style="display:none;">
                            <div class="portlet box green ">
                            <div class="portlet-title">
                                <div class="caption">
                                    Form Kendaraan Tempur
                                </div>
                                <div class="tools">
                                    <a title="" data-original-title="" href="" class="collapse">
                                    </a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <form class="form-horizontal" role="form">
                                    <div class="form-body">
                                        <input class="form-control" type="hidden">
                                        <input class="form-control" type="hidden">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Kelompok Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control" name="klmpk_barang_id" url="
                                                    <?php
                                                        echo site_url('c_kesatuan/lihat_klpk_barang_id');
                                                    ?>
                                                " id="KLPK_BARANG_ID">
                                                    <option value="">Pilih Kelompok</option>
                                                    <?php
                                                        foreach ($kelompok_barang->result() as $value) {
                                                            ?>
                                                            <option value="<?php echo $value->kode; ?>"><?php echo $value->nama; ?></option>
                                                            <?php
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Komoditi Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control" name="komoditi_brng_id" id="KOMODITI_BRNG_ID" disabled="disabled">
                                                    <option value="">Pilih Kelompok Dahulu</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Jenis Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                    <option>Option 4</option>
                                                    <option>Option 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Fungsi Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                    <option>Option 4</option>
                                                    <option>Option 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                    <option>Option 4</option>
                                                    <option>Option 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="portlet box grey-cascade">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    Rekapitulasi
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Baik</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Siap</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Rusak Ringan</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Tidak Siap</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Rusak Berat</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portlet box grey-cascade">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    Persediaan
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Baik</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Siap</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Rusak Ringan</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Tidak Siap</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Rusak Berat</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Negara Asal</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Tahun Buat</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Keterangan</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" class="btn green">Submit</button>
                                                <button type="button" class="btn default">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
<!-- End Form Ranpur -->
<!-- Begin Form Aloptik -->
                    <div class="col-md-9 cuk" id="aloptik" style="display:none;">
                            <div class="portlet box green ">
                            <div class="portlet-title">
                                <div class="caption">
                                    Form Aloptik
                                </div>
                                <div class="tools">
                                    <a title="" data-original-title="" href="" class="collapse">
                                    </a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <form class="form-horizontal" role="form">
                                    <div class="form-body">
                                        <input class="form-control" type="hidden">
                                        <input class="form-control" type="hidden">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Kelompok Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control" name="klmpk_barang_id" url="
                                                    <?php
                                                        echo site_url('c_kesatuan/lihat_klpk_barang_id');
                                                    ?>
                                                " id="KLPK_BARANG_ID">
                                                    <option value="">Pilih Kelompok</option>
                                                    <?php
                                                        foreach ($kelompok_barang->result() as $value) {
                                                            ?>
                                                            <option value="<?php echo $value->kode; ?>"><?php echo $value->nama; ?></option>
                                                            <?php
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Komoditi Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control" name="komoditi_brng_id" id="KOMODITI_BRNG_ID" disabled="disabled">
                                                    <option value="">Pilih Kelompok Dahulu</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Jenis Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                    <option>Option 4</option>
                                                    <option>Option 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Fungsi Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                    <option>Option 4</option>
                                                    <option>Option 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                    <option>Option 4</option>
                                                    <option>Option 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="portlet box grey-cascade">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    Rekapitulasi
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Baik</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Siap</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Rusak Ringan</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Tidak Siap</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Rusak Berat</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portlet box grey-cascade">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    Persediaan
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Baik</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Siap</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Rusak Ringan</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Tidak Siap</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Rusak Berat</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Negara Asal</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Tahun Buat</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Keterangan</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" class="btn green">Submit</button>
                                                <button type="button" class="btn default">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
<!-- End Form Aloptik -->
<!-- Begin Form Ranmor -->
                    <div class="col-md-9 cuk" id="ranmor" style="display:none;">
                            <div class="portlet box green ">
                            <div class="portlet-title">
                                <div class="caption">
                                    Form Kendaraan Bermotor
                                </div>
                                <div class="tools">
                                    <a title="" data-original-title="" href="" class="collapse">
                                    </a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <form class="form-horizontal" role="form">
                                    <div class="form-body">
                                        <input class="form-control" type="hidden">
                                        <input class="form-control" type="hidden">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Kelompok Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control" name="klmpk_barang_id" url="
                                                    <?php
                                                        echo site_url('c_kesatuan/lihat_klpk_barang_id');
                                                    ?>
                                                " id="KLPK_BARANG_ID">
                                                    <option value="">Pilih Kelompok</option>
                                                    <?php
                                                        foreach ($kelompok_barang->result() as $value) {
                                                            ?>
                                                            <option value="<?php echo $value->kode; ?>"><?php echo $value->nama; ?></option>
                                                            <?php
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Komoditi Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control" name="komoditi_brng_id" id="KOMODITI_BRNG_ID" disabled="disabled">
                                                    <option value="">Pilih Kelompok Dahulu</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Jenis Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                    <option>Option 4</option>
                                                    <option>Option 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Fungsi Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                    <option>Option 4</option>
                                                    <option>Option 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                    <option>Option 4</option>
                                                    <option>Option 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="portlet box grey-cascade">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    Rekapitulasi
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Baik</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Siap</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Rusak Ringan</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Tidak Siap</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Rusak Berat</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portlet box grey-cascade">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    Persediaan
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Baik</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Siap</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Rusak Ringan</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Tidak Siap</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Rusak Berat</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Negara Asal</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Tahun Buat</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Keterangan</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" class="btn green">Submit</button>
                                                <button type="button" class="btn default">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
<!-- End Form Ranmor -->
<!-- Begin Form Senjata Pesawat -->
                    <div class="col-md-9 cuk" id="senjata_pesawat" style="display:none;">
                            <div class="portlet box green ">
                            <div class="portlet-title">
                                <div class="caption">
                                    Form Senjata Pesawat
                                </div>
                                <div class="tools">
                                    <a title="" data-original-title="" href="" class="collapse">
                                    </a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <form class="form-horizontal" role="form">
                                    <div class="form-body">
                                        <input class="form-control" type="hidden">
                                        <input class="form-control" type="hidden">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Kelompok Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control" name="klmpk_barang_id" url="
                                                    <?php
                                                        echo site_url('c_kesatuan/lihat_klpk_barang_id');
                                                    ?>
                                                " id="KLPK_BARANG_ID">
                                                    <option value="">Pilih Kelompok</option>
                                                    <?php
                                                        foreach ($kelompok_barang->result() as $value) {
                                                            ?>
                                                            <option value="<?php echo $value->kode; ?>"><?php echo $value->nama; ?></option>
                                                            <?php
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Komoditi Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control" name="komoditi_brng_id" id="KOMODITI_BRNG_ID" disabled="disabled">
                                                    <option value="">Pilih Kelompok Dahulu</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Jenis Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                    <option>Option 4</option>
                                                    <option>Option 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Fungsi Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                    <option>Option 4</option>
                                                    <option>Option 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                    <option>Option 4</option>
                                                    <option>Option 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="portlet box grey-cascade">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    Rekapitulasi
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Baik</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Siap</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Rusak Ringan</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Tidak Siap</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Rusak Berat</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portlet box grey-cascade">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    Persediaan
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Baik</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Siap</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Rusak Ringan</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Tidak Siap</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Rusak Berat</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Negara Asal</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Tahun Buat</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Keterangan</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" class="btn green">Submit</button>
                                                <button type="button" class="btn default">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
<!-- End Form Senjata Pesawat -->
<!-- Begin Form Munisi Pesawat -->
                    <div class="col-md-9 cuk" id="munisi_pesawat" style="display:none;">
                            <div class="portlet box green ">
                            <div class="portlet-title">
                                <div class="caption">
                                    Form Munisi Pesawat
                                </div>
                                <div class="tools">
                                    <a title="" data-original-title="" href="" class="collapse">
                                    </a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <form class="form-horizontal" role="form">
                                    <div class="form-body">
                                        <input class="form-control" type="hidden">
                                        <input class="form-control" type="hidden">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Kelompok Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control" name="klmpk_barang_id" url="
                                                    <?php
                                                        echo site_url('c_kesatuan/lihat_klpk_barang_id');
                                                    ?>
                                                " id="KLPK_BARANG_ID">
                                                    <option value="">Pilih Kelompok</option>
                                                    <?php
                                                        foreach ($kelompok_barang->result() as $value) {
                                                            ?>
                                                            <option value="<?php echo $value->kode; ?>"><?php echo $value->nama; ?></option>
                                                            <?php
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Komoditi Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control" name="komoditi_brng_id" id="KOMODITI_BRNG_ID" disabled="disabled">
                                                    <option value="">Pilih Kelompok Dahulu</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Jenis Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                    <option>Option 4</option>
                                                    <option>Option 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Fungsi Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                    <option>Option 4</option>
                                                    <option>Option 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Barang</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                    <option>Option 4</option>
                                                    <option>Option 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="portlet box grey-cascade">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    Rekapitulasi
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Baik</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Siap</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Rusak Ringan</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Tidak Siap</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Rusak Berat</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portlet box grey-cascade">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    Persediaan
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Baik</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Siap</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Rusak Ringan</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Tidak Siap</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label class="col-md-5 control-label">Rusak Berat</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Negara Asal</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Tahun Buat</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Keterangan</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" class="btn green">Submit</button>
                                                <button type="button" class="btn default">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
<!-- End Form Munisi Pesawat -->

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