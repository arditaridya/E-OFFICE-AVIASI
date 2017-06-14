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
                        <a href="<?php echo site_url('laporan/index'); ?>">Cari Laporan</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">Detail Data</a>
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
            <h3 class="page-title"><?php // echo $judul; ?></h3>
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption">
                                Detail Data Kondisi Rusak Ringan
                            </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse">
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body" style="background-color:#99ccff;">

                            <table class="table table-striped table-bordered table-hover table-responsive" id="sample_1">
                                <thead>
                                <tr bgcolor="#ccccff">
                                    <th>
                                        <center>No</center>
                                    </th>
                                    <th>
                                        <center>Nama Barang</center>
                                    </th>
                                    <th>
                                        <center>Kode</center>
                                    </th>
                                    <th>
                                        <center>Serial Number</center>
                                    </th>
                                    <th>
                                        <center>Merk</center>
                                    </th>
                                    <th>
                                        <center>Type Model</center>
                                    </th>
                                    <th>
                                        <center>Lokasi</center>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no = 1;
                                foreach($detail_inventory as $row){ ?>
                                <tr class="odd gradeX" bgcolor="#ccccff">
                                    <td><center><?php echo $no; ?></center></td>
                                    <td><center><?php echo $row->nama_barang; ?></center></td>
                                    <td><center><?php echo $row->kode;?></center></td>
                                    <td><center><?php echo $row->serial_number;?></center></td>
                                    <td><center><?php echo $row->merk;?></center></td>
                                    <td><center><?php echo $row->type_model;?></center></td>
                                    <td><center><?php echo $row->lokasi;?></center></td>
                                    <?php
                                    $no++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <div class="form-actions right">
                                <button type="button" class="btn yellow" onclick=self.history.back()><i class="fa fa-undo"></i> Kembali</button>
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