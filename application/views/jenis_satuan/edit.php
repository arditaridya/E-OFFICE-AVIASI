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
                        <a href="<?php echo site_url('jenis_satuan'); ?>">List Jenis Satuan</a>
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
                            <form action="<?php echo base_url('jenis_satuan/simpanedit'); ?>" class="horizontal-form" method="post">
                                <?php foreach($dataper as $value){ ?>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Nama Jenis Satuan</label>
                                                <div class="form-group">
                                                    <div class="col-md-6">
                                                        <input required type="text" class="form-control" name="nama_jenissatuan" id="nama_jenissatuan" value="<?php echo $value->nama_jenissatuan;?>">
                                                        <input type="hidden" class="form-control" name="id_jenissatuan" id="id_jenissatuan" value="<?php echo $value->id_jenissatuan;?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Keterangan</label>
                                                <div class="form-group">
                                                    <div class="col-md-6">
                                                        <textarea required rows="5" class="form-control" name="keterangan" id="keterangan" style="resize: none"><?php echo $value->keterangan; ?></textarea>
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

