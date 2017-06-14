<!DOCTYPE html>
<html lang="en" class="no-js">
    <?php $this->load->view('v_header') ?>
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
                                <a href="<?php echo site_url('c_master/master_kesatuan') ?>">Alutsista TNI AU</a>
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
                        Tambah Data Alutsista                    
                    </h3>
                    <div class="portlet box green" id="form-organisasi">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Form Alutsista TNI AU
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
                            <form action="<?php echo site_url('c_master/simpan_kesatuan') ?>" class="horizontal-form" method = "post">
                                <div class="form-body">
                                    <fieldset class="scheduler-border">
                                        <legend class="scheduler-border">Kesatuan</legend>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3" for="program">Nama Kesatuan</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <input type="text" name="nama_kesatuan" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3" for="program">Keterangan Kesatuan</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <select class="form-control select2me" name="ketsat" data-placeholder="Pilih Kodya/Kab" tabindex="1" >
                                                                <option value=""></option>
                                                                <option value="1">Test</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3" for="program">Jenis Kesatuan</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <select class="form-control select2me" name="jenis_kesatuan" data-placeholder="Pilih Kodya/Kab" tabindex="1" >
                                                                <option value=""></option>
                                                                <option value="1">Test</option>
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