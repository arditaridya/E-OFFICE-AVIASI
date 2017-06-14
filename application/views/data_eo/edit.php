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
                        <a href="<?php echo site_url('data_eo'); ?>">Edit Data</a>
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
                                Form Edit Data
                            </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse">
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <!-- BEGIN FORM-->
                                    <form action="<?php echo base_url('data_eo/simpanedit'); ?>" class="horizontal-form" method="post" id="jk1">
                                        <?php foreach($dataper as $value){ ?>
                                            <input type="hidden" class="form-control" name="id_datainventory" id="id_datainventory" value="<?php echo $value->id_datainventory;?>">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Nama Barang</label>
                                                        <div class="form-group">
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" name="nama_barang" id="nama_barang" value="<?php echo $value->nama_barang;?>" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Kode</label>
                                                        <div class="form-group">
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" name="kode" id="kode" value="<?php echo $value->kode;?>" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Jenis Material</label>
                                                        <div class="form-group">
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" name="nama_jenismaterial" id="nama_jenismaterial" value="<?php echo $value->nama_jenismaterial;?>" readonly>
                                                             </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Jenis Barang</label>
                                                        <div class="form-group">
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" name="nama_jenisbarang" id="nama_jenisbarang" value="<?php echo $value->nama_jenisbarang;?>" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Satuan</label>
                                                        <div class="form-group">
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" name="nama_jenissatuan" id="nama_jenissatuan" value="<?php echo $value->nama_jenissatuan;?>" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Type Model</label>
                                                        <div class="form-group">
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" name="type_model" id="type_model" value="<?php echo $value->type_model;?>" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Merk</label>
                                                        <div class="form-group">
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" name="merk" id="merk" value="<?php echo $value->merk;?>" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Serial Number</label>
                                                        <div class="form-group">
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" name="serial_number" id="serial_number" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Kondisi</label>
                                                        <div class="form-group">
                                                            <div class="col-md-6">
                                                                <label><input required type="radio" class="icheck" data-radio="iradio_square-blue" name="JK_ID" id="jk1" value="1"> Baik</label>
                                                                <label><input trequired type="radio" class="icheck" data-radio="iradio_square-blue" name="JK_ID" id="jk2" value="2"> Rusak</label>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="ket" style="display: none">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                       <label class="control-label col-md-3">Keterangan Kondisi</label>
                                                        <div class="form-group">
                                                            <div class="col-md-6">
                                                                <div id="baik" style="display: none">
                                                                    <select class="form-control" name="kondisi_baik">
                                                                        <option value="-">-- Pilih Kondisi --</option>
                                                                        <option value="50%"> 50 % </option>
                                                                        <option value="100%"> 100 %</option>
                                                                    </select>
                                                                </div>
                                                                <div id="rusak" style="display: none">
                                                                    <select class="form-control" name="kondisi_buruk">
                                                                        <option value="-">-- Pilih Kondisi --</option>
                                                                        <option value="Rusak Berat"> Rusak Berat </option>
                                                                        <option value="Rusak Sedang"> Rusak Sedang</option>
                                                                        <option value="Rusak Ringan"> Rusak Ringan</option>
                                                                    </select>
                                                                </div>
                                                            </div>
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
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" name="lokasi" id="lokasi" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
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
    $('#jk1 input').on('ifChecked', function () {
        if ($('input[name=JK_ID]:checked', '#jk1').val() == 1) {
            $("div#ket").css('display', 'block');
            $("div#rusak").css('display', 'none');
            $("div#baik").css('display', 'block');
//            $("#kondisibaik").val('0');
        }else if ($('input[name=JK_ID]:checked', '#jk1').val() == 2){
            $("div#ket").css('display', 'block');
            $("div#rusak").css('display', 'block');
            $("div#baik").css('display', 'none');
//            $("#kondisiburuk").val('0');
        }
    });
</script>
