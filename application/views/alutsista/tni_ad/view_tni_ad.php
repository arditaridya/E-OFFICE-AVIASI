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
                                <i class="fa fa-home"></i>
                                <a href="<?php echo site_url('main_menu') ?>">Menu Utama</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="<?php echo site_url('c_kesatuan'); ?>">Kesatuan</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="">TNI AD</a>
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
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="form-body">
                                <div class="portlet-body">
                                    <div class="tabbable-custom ">
                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a href="#tab_1" data-toggle="tab">
                                                    Senjata </a>
                                            </li>
                                            <li>
                                                <a href="#tab_2" data-toggle="tab">
                                                    Amunisi </a>
                                            </li>
                                            <li>
                                                <a href="#tab_3" data-toggle="tab">
                                                    Pesawat </a>
                                            </li>
                                            <li>
                                                <a href="#tab_4" data-toggle="tab">
                                                    Kapal </a>
                                            </li>
                                            <li>
                                                <a href="#tab_5" data-toggle="tab">
                                                    Alpasus </a>
                                            </li>
                                            <li>
                                                <a href="#tab_6" data-toggle="tab">
                                                    Ranpur </a>
                                            </li>
                                            <li>
                                                <a href="#tab_7" data-toggle="tab">
                                                    Aloptik </a>
                                            </li>
                                            <li>
                                                <a href="#tab_8" data-toggle="tab">
                                                    Senjata Pesawat </a>
                                            </li>
                                            <li>
                                                <a href="#tab_9" data-toggle="tab">
                                                    Ranmor </a>
                                            </li>
                                            <li>
                                                <a href="#tab_10" data-toggle="tab">
                                                    Amunisi Pesawat </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_1">
                                                <p>
                                                <div class="form-body">
                                                    <div class="row clearfix">
                                                        <div class="col-md-12">
                                                            <button type="button" class="btn red" onclick="document.location='<?php echo base_url() . "c_alutsista/senjata_ad"; ?>'"><i class="fa fa-plus"></i> Tambah Senjata</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                </p>
                                            </div>
                                            <div class="tab-pane" id="tab_2">
                                                <p>
                                                <div class="form-body">
                                                    <div class="row clearfix">
                                                        <div class="col-md-12">
                                                            <button type="button" class="btn red" onclick="document.location='<?php echo base_url() . ""; ?>'"><i class="fa fa-plus"></i> Tambah Amunisi</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                </p>
                                            </div>
                                            <div class="tab-pane" id="tab_3">
                                                <p>
                                                <div class="form-body">
                                                    <div class="row clearfix">
                                                        <div class="col-md-12">
                                                            <button type="button" class="btn red" onclick="document.location='<?php echo base_url() . "c_alutsista/tambah_pesawat_ad"; ?>'"><i class="fa fa-plus"></i> Tambah Pesawat</button>
                                                        </div>
                                                    </div>
                                                    <p>
                                                    <table class="table table-striped table-bordered table-hover" id="sample_4">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Alutsista</th>
                                                                <th>Serial</th>
                                                                <th>Kesatuan</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        	<?php $no=1;foreach($data_pesawat_ad as $hasil){ ?>
                                                        	<tr>
                                                            	<td><?php echo $no; ?></td>
                                                                <td><?php echo $hasil->barang; ?></td>
                                                                <td><?php echo $hasil->serial; ?></td>
                                                                <td><?php echo $hasil->kesatuan; ?></td>
                                                                <td>EDIT DELETE</td>
                                                            </tr>
                                                            <?php $no++; } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                </p>
                                            </div>
                                            <div class="tab-pane" id="tab_4">
                                                <p>
                                                <div class="form-body">
                                                    <div class="row clearfix">
                                                        <div class="col-md-12">
                                                            <button type="button" class="btn red" onclick="document.location='<?php echo base_url() . ""; ?>'"><i class="fa fa-plus"></i> Tambah Kapal</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                </p>
                                            </div>
                                            <div class="tab-pane" id="tab_5">
                                                <p>
                                                <div class="form-body">
                                                    <div class="row clearfix">
                                                        <div class="col-md-12">
                                                            <button type="button" class="btn red" onclick="document.location='<?php echo base_url() . ""; ?>'"><i class="fa fa-plus"></i> Tambah Alpasus</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                </p>
                                            </div>
                                            <div class="tab-pane" id="tab_6">
                                                <p>
                                                <div class="form-body">
                                                    <div class="row clearfix">
                                                        <div class="col-md-12">
                                                            <button type="button" class="btn red" onclick="document.location='<?php echo base_url() . "c_alutsista/tambah_ranpur_ad"; ?>'"><i class="fa fa-plus"></i> Tambah Ranpur</button>
                                                        </div>
                                                    </div>
                                                    <p>
                                                    <table class="table table-striped table-bordered table-hover" id="sample_2">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Alutsista</th>
                                                                <th>Kesatuan</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        	<?php $no=1;foreach($data_ranpur_ad as $hasil){ ?>
                                                        	<tr>
                                                            	<td><?php echo $no; ?></td>
                                                                <td><?php echo $hasil->barang; ?></td>
                                                                <td><?php echo $hasil->kesatuan; ?></td>
                                                                <td>EDIT DELETE</td>
                                                            </tr>
                                                            <?php $no++; } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                </p>
                                            </div>
                                            <div class="tab-pane" id="tab_7">
                                                <p>
                                                <div class="form-body">
                                                    <div class="row clearfix">
                                                        <div class="col-md-12">
                                                            <button type="button" class="btn red" onclick="document.location='<?php echo base_url() . ""; ?>'"><i class="fa fa-plus"></i> Tambah Aloptik</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                </p>
                                            </div>
                                            <div class="tab-pane" id="tab_8">
                                                <p>
                                                <div class="form-body">
                                                    <div class="row clearfix">
                                                        <div class="col-md-12">
                                                            <button type="button" class="btn red" onclick="document.location='<?php echo base_url() . "c_alutsista/tambah_senjata_pesawat_ad"; ?>'"><i class="fa fa-plus"></i> Tambah Senjata Pesawat</button>
                                                        </div>
                                                    </div>
                                                    <p>
                                                    <table class="table table-striped table-bordered table-hover" id="sample_2">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Alutsista</th>
                                                                <th>Tipe</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        	<?php $no=1;foreach($data_senjata_pesawat_ad as $hasil){ ?>
                                                        	<tr>
                                                            	<td><?php echo $no; ?></td>
                                                                <td><?php echo $hasil->barang; ?></td>
                                                                <td><?php echo $hasil->barang; ?></td>
                                                                <td>EDIT DELETE</td>
                                                            </tr>
                                                            <?php $no++; } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                </p>
                                            </div>
                                            <div class="tab-pane" id="tab_9">
                                                <p>
                                                <div class="form-body">
                                                    <div class="row clearfix">
                                                        <div class="col-md-12">
                                                            <button type="button" class="btn red" onclick="document.location='<?php echo base_url() . "c_alutsista/tambah_ranmor_ad"; ?>'"><i class="fa fa-plus"></i> Tambah Ranmor</button>
                                                        </div>
                                                    </div>
                                                    <p>
                                                    <table class="table table-striped table-bordered table-hover" id="sample_2">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Alutsista</th>
                                                                <th>Tipe</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        	<?php $no=1;foreach($data_ranmor_ad as $hasil){ ?>
                                                        	<tr>
                                                            	<td><?php echo $no; ?></td>
                                                                <td><?php echo $hasil->barang; ?></td>
                                                                <td><?php echo $hasil->barang; ?></td>
                                                                <td>EDIT DELETE</td>
                                                            </tr>
                                                            <?php $no++; } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                </p>
                                            </div>
                                            <div class="tab-pane" id="tab_10">
                                                <p>
                                                <div class="form-body">
                                                    <div class="row clearfix">
                                                        <div class="col-md-12">
                                                            <button type="button" class="btn red" onclick="document.location='<?php echo base_url() . "c_alutsista/tambah_amunisi_pesawat_ad"; ?>'"><i class="fa fa-plus"></i> Tambah Amunisi Pesawat</button>
                                                        </div>
                                                    </div>
                                                    <p>
                                                    <table class="table table-striped table-bordered table-hover" id="sample_2">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Alutsista</th>
                                                                <th>Tipe</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        	<?php $no=1;foreach($data_amunisi_pesawat_ad as $hasil){ ?>
                                                        	<tr>
                                                            	<td><?php echo $no; ?></td>
                                                                <td><?php echo $hasil->barang; ?></td>
                                                                <td><?php echo $hasil->barang; ?></td>
                                                                <td>EDIT DELETE</td>
                                                            </tr>
                                                            <?php $no++; } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
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