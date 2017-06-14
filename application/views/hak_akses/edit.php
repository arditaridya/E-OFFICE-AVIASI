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
                                <a href="<?php echo site_url('hak_akses'); ?>">List Hak Akses</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="#">Atur Hak Akses</a>
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
                                        Atur Hak Akses
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse">
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <!-- BEGIN FORM-->
								<?php foreach($datanya as $value){ ?>
                                    <form action="<?php echo base_url('hak_akses/update'); ?>" class="horizontal-form" method="post">
                                       
										
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Nama Grup User</label>
                                                    <div class="form-group">
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $value->nama; ?>" readonly>
															<input type="hidden" class="form-control" name="idgrup" id="idgrup" value="<?php echo $value->id; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Keterangan</label>
                                                    <div class="form-group">
                                                        <div class="col-md-4">
                                                            <textarea class="form-control" name="keterangan" id="keterangan" readonly><?php echo $value->keterangan; ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<br><br><br>
                                        <table class="table table-striped table-bordered table-hover table-responsive">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Modul</th>
												<th>Parent</th>
												<th>Url</th>
												<th>Tampil</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($menunya as $row) {
												
                                                ?>
                                                <tr class="odd gradeX" >
                                                    <td width="10%"><?php echo $no; ?></td>
                                                    <td width="30%"><?php echo $row->nama_modul; ?></td>
													<td width="30%"><?php echo $row->parent; ?></td>
													<td width="20%"><?php echo $row->url; ?></td>
                                                    <td width="10%"> <input type="checkbox" name="ceko[]" value="<?php echo $row->id; ?>" 
													<?php 
														foreach ($aksesnya as $ruw) {
													
														if($ruw->modul == $row->id && $value->id == $ruw->grup_user) { echo "checked"; }else{ echo ""; } }?>>
													
													
													</td>
                                                </tr>
                                                <?php
                                                $no++;
                                             }
                                            ?>
                                        </tbody>
                                    </table>

                                        <br/>
                                        <div class="form-actions left">
                                            <button type="submit" name="SIMPAN" class="btn green"><i class="fa fa-check"></i> Simpan</button>
                                            <button type="button" class="btn yellow" onclick=self.history.back()><i class="fa fa-undo"></i> Batal</button>
                                    </form>
								<?php } ?>
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

