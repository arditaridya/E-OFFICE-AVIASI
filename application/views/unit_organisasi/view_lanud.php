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
					<?php
					$groupz = $this->session->userdata('grup_user');
					?>
					<?php if($groupz == 1){ ?>
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>
                                <a href="<?php echo site_url('main_menu/admin') ?>">Menu Utama</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
							<li>
                                <a href="<?php echo site_url('c_kesatuan') ?>">Kotama</a>
                                
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="<?php echo site_url('c_kesatuan') ?>"><b>Satker</b> (<font color="blue"> <?php echo $namanya; ?> </font>)</a>
                                
                                <i class="fa fa-angle-right"></i>
                            </li>
                           <!-- <li>
                                <a href="#"><?php //echo $idmantra; ?>-KODIKAU</a>
                            </li> -->
                        </ul>
					<?php } else { ?>
						<ul class="page-breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>
                                <a href=""><b>Satker</b> (<font color="blue"> <?php echo $namanya; ?> </font>)</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
						</ul>
					<?php } ?>
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
                            <div class="portlet box blue">
                                <div class="portlet-title">
                                    <div class="caption">
                                        List Data Satker
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse">
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body" style="background-color:#99ccff;">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="btn-group">
                                                    <a href="<?php echo site_url('c_kesatuan/tambahlanud/'.$idmantra.'') ?>">
														<button id="sample_editable_1_new" class="btn blue">
																Tambah Baru <i class="fa fa-plus"></i>
														</button>
													</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    if ($this->session->flashdata('tambah_sukses')) {
                                        echo '<div class="alert alert-success"><a class="close" data-dismiss="alert">&times;</a>Data berhasil disimpan</div>';
                                    }
                                    ?>

                                    <?php
                                    if ($this->session->flashdata('update_sukses')) {
                                        echo '<div class="alert alert-success"><a class="close" data-dismiss="alert">&times;</a>Data berhasil diupdate</div>';
                                    }
                                    ?>

                                    <?php
                                    if ($this->session->flashdata('hapus_sukses')) {
                                        echo '<div class="alert alert-success"><a class="close" data-dismiss="alert">&times;</a>Data berhasil dihapus</div>';
                                    }
                                    ?>
                                    <table class="table table-striped table-bordered table-hover" id="sample_2">
                                        <thead>
                                            <tr bgcolor="#ccccff">
                                                <th width="8%">No</th>
                                                <!--<th width="8%">ID</th>-->
                                                <th>Nama Kesatuan</th>
												<th>Detil</th>
                                                <th width="15%">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($datanya as $data) {
                                                ?>
												<tr bgcolor="#ccccff">
                                                    <td><?php echo $no; ?></td>
                                                    <!--<td><?php //echo $data->id; ?></td>-->
                                                    <?php /* 20160606 ?>
                                                    <td> <a href="<?php echo site_url('data_aset/saveflag/'.$data->id.'') ?>"><?php echo $data->lanud; ?></a></td>
                                                    <?php */ ?>
                                                    <td> <a href="<?php echo site_url('data_aset/index/lanud_id_'.$data->id.'') ?>"><?php echo $data->lanud; ?></a></td>
                                                     <td><?php echo $data->detillanud; ?></td>
                                                    
													<td>
                                                        <a href="<?php echo base_url() . "c_kesatuan/editlanud/".$idmantra."/" . $data->id; ?>" class="btn btn-primary">
                                                            <i class="fa fa-pencil"></i> 
														</a>
                                                        <a href="<?php echo base_url() . "c_kesatuan/deletelanud/" . $data->id; ?>">
                                                            <button class="btn btn-danger" data-toggle="confirmation" data-original-title="Are you sure ?" title="">
																<i class="fa fa-trash-o"></i>
															</button>
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