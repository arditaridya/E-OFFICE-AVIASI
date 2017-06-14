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
                                <a href="<?php ?>">Pemanfaatan (<font color="blue"> <?php echo $nama_lanud; ?> </font>)</a>
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
                    <h3 class="page-title"><?php // echo $judul; ?></h3>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet box blue">
                                <div class="portlet-title">
                                    <div class="caption">
                                        List Pemanfaatan
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse">
                                        </a>
                                    </div>
                                </div>
								<?php
									$grupz = $this->session->userdata('grup_user');
									//echo $groupz;die();
								   ?>
                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-6">
											<?php if($grupz == 1) { ?>
                                                <div class="btn-group">
                                                    <a href="<?php echo site_url('pemanfaatan/tambah/'.$this->uri->segment(3)); ?>">
                                                        <button id="sample_editable_1_new" class="btn blue">
                                                            Tambah Data <i class="fa fa-plus"></i>
                                                        </button>
                                                    </a>
													<a href="<?php echo site_url('pemanfaatan/aturcetak/'.$this->uri->segment(3)); ?>">
                                                        <button id="sample_editable_1_new" class="btn red">
                                                            Cetak &nbsp;<i class="fa fa-print"></i>
                                                        </button>
                                                    </a>
                                                </div>
											<?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    
                                     <table class="table table-striped table-bordered table-hover table-responsive" <?php if($grupz == 1) { ?> id="sample_8" <?php }else{ ?> id="sample_7" <?php } ?> >
                                        <thead>
                                            <tr>
                                                <th width="5%">No</th>
                                               	<th>Simak</th>
												<th>BMN Yang Dikerjasamakan</th>
												<th>Alamat</th>
                                                <th>Luas Bangunan</th>
                                                <th>Luas Tanah</th>
                                                <th>Nilai Sewa</th>
												<?php if($grupz == 1) { ?>
												<th>Aksi</th>
												<?php } ?>
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
                                                    <td><?php echo ($row->bmn == "1")?"Tanah":"Tanah dan Bangunan"; ?></td>
                                                    <td><?php // echo $row->lokasi; ?></td>
                                                    <td><?php echo $row->bangunan; ?></td>
                                                    <td><?php echo $row->tanah; ?></td>
                                                    <td><?php echo number_format($row->sewa,0,",","."); ?></td>
													<?php if($grupz == 1) { ?>
													<td>
													<center>
														
                                                        <a href="<?php echo base_url('pemanfaatan/detail/' . $row->id . '_'.$this->uri->segment(3)); ?>" class="btn btn-info">
                                                            <i class="fa fa-newspaper-o"></i> 
                                                        </a>
                                                        
                                                        <?php /* ?>
                                                        <a href="<?php echo base_url('permasalahan/edit/' . $row->id . ''); ?>" class="btn default btn-xs green">
                                                        <?php */ ?>
                                                        <a href="<?php echo base_url('pemanfaatan/edit/' . $row->id . '_'.$this->uri->segment(3)); ?>" class="btn btn-primary">
                                                            <i class="fa fa-pencil"></i> 
                                                        </a>
                                                        <?php /* ?>
                                                        <a href="<?php echo site_url('permasalahan/hapus/' . $row->id . '') ?>">
                                                        <?php */ ?>
                                                        <a href="<?php echo site_url('pemanfaatan/hapus/' . $row->id . '_'.$this->uri->segment(3)) ?>">
                                                            <button class="btn btn-danger" data-toggle="confirmation" data-original-title="Are you sure ?" title="">
                                                                <i class="fa fa-trash-o"></i> 
                                                            </button>
                                                        </a>
													
													</center>
                                                    </td>
													<?php } ?>
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