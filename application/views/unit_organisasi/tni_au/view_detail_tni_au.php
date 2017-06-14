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
                                <a href="<?php echo site_url('c_kesatuan/tni_au'); ?>">TNI AU</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="<?php ?>"><?php echo $breadcrumb_title; ?></a>
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
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="form-body">
                                <div class="portlet-body">
                                    <div class="tabbable-custom ">
                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a href="#tab_1" data-toggle="tab">
                                                    Details </a>
                                            </li>
                                            <li>
                                                <a href="#tab_2" data-toggle="tab">
                                                    Rekap </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_1">
                                                <p>
                                                <div class="form-body">
                                                    <div class="row clearfix">
                                                        <div class="col-md-12">
                                                            <div class="portlet box grey-cascade">
                                                                <div class="portlet-title">
                                                                    <div class="caption">
                                                                        List Data Kesatuan TNI AD
                                                                    </div>
                                                                    <div class="tools">
                                                                        <a href="javascript:;" class="collapse">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="portlet-body">
                                                                    <table class="table table-striped table-bordered table-hover" id="sample_3">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>
                                                                                    No
                                                                                </th>
                                                                                <th>
                                                                                    Id
                                                                                </th>
                                                                                <th>
                                                                                    Nama Kesatuan
                                                                                </th>
                                                                                <th>
                                                                                    Id Keterangan
                                                                                </th>
                                                                                <th>
                                                                                    Id Jenis
                                                                                </th>
                                                                                <th>
                                                                                    Aksi
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php
                                                                            $no = 1;
                                                                            foreach ($list as $data) {
                                                                                ?>
                                                                                <tr class="odd gradeX" onclick="document.location='<?php echo base_url() . "c_kesatuan/detail_tni_ad/" . $data ?>'">
                                                                                    <td>
                                                                                        <?php echo $no; ?>
                                                                                    </td>
                                                                                    <td>
                                                                                        
                                                                                    </td>
                                                                                    <td>
                                                                                        
                                                                                    </td>
                                                                                    <td>
                                                                                        
                                                                                    </td>
                                                                                    <td>
                                                                                        
                                                                                    </td>
                                                                                    <td>
                                                                                        <a href="<?php echo base_url() . "c_kesatuan/edit_kesatuan/" . $data; ?>" class="btn default btn-xs green">
                                                                                            <i class="fa fa-edit"></i> Edit </a>
                                                                                        <a href="<?php echo base_url() . "c_kesatuan/hapus_kesatuan/" . $data; ?>">
                                                                                            <button class="btn default btn-xs black" data-toggle="confirmation" data-original-title="Are you sure ?" title=""><i class="fa fa-trash-o"></i> Delete</button>
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                                <?php
                                                                                $no++;
                                                                            }
                                                                            ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
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
                                                            duaaaa
                                                        </div>
                                                    </div>
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