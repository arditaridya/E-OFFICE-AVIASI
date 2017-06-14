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
                                <a href="<?php ?>">Permasalahan (<font color="blue"> <?php echo $nama_lanud; ?> </font>)</a>
                                <i class="fa fa-angle-right"></i>
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
                    <h3 class="page-title"><?php// echo $judul; ?></h3>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet box blue">
                                <div class="portlet-title">
                                    <div class="caption">
                                        List Permasalahan
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse">
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="btn-group">
                                                    <a href="<?php echo site_url('permasalahan/tambah') ?>">
                                                        <button id="sample_editable_1_new" class="btn blue">
                                                            Tambah Data <i class="fa fa-plus"></i>
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <table class="table table-striped table-bordered table-hover table-responsive" id="sample_3">
                                        <thead>
                                            <tr>
                                                <th width="5%">No</th>
                                               <th>SIMAK</th>
												<th>Permasalahan</th>
												<th>Upaya Penyelesaian</th>
												<th>Perkembangan Terakhir</th>
												
												<th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                           foreach ($datanya as $row) {
                                                ?>
                                                <tr class="odd gradeX" >
                                                    <td width="5%"><?php echo $no; ?></td>
                                                    <td><?php echo $row->simak; ?></td>
													<td><?php echo $row->permasalahan; ?></td>
													<td><?php echo $row->upaya_penyelesaian; ?></td>
													
													
													<td><?php echo $row->perkembangan_terakhir; ?></td>
													<td width="15%">
													<center>
													
                                                        <a href="<?php echo base_url('permasalahan/edit/' . $row->id . ''); ?>" class="btn default btn-xs green">
                                                            <i class="fa fa-edit"></i> Edit 
                                                        </a>
                                                        <a href="<?php echo site_url('permasalahan/hapus/' . $row->id . '') ?>">
                                                            <button class="btn default btn-xs red" data-toggle="confirmation" data-original-title="Are you sure ?" title="">
                                                                <i class="fa fa-trash-o"></i> Delete
                                                            </button>
                                                        </a>
													
													</center>
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