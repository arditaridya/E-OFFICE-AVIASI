<!DOCTYPE html>
<?php date_default_timezone_set("Asia/Jakarta"); 
		$tanggalsekarang = date("Y-m-d h:i:s");
?>
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
				<h3 class="page-title"><?php echo $judul; ?></h3>
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>
                                <a href="<?php echo site_url('#') ?>">Master</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="<?php echo site_url('c_master/index'); ?>">Users</a>
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
                    <!-- END PAGE HEADER-->
					<h3 class="page-title"><?php echo $judul; ?></h3>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet box red">
                                <div class="portlet-title">
                                    <div class="caption">
                                        List Data Users
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse">
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body form">
									<!-- BEGIN FORM-->
									<?php foreach($users as $row){ ?>
									<form action=" <?php echo site_url('c_master/edit_users/'.$row->id.''); ?> " class="horizontal-form" method="post">
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">NIK</label>
                                                    <div class="form-group">
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" placeholder="NIK..." value="<?php echo $row->NIK; ?>" name="NIK">
															<input type="hidden" class="form-control" name="TANGGALSEKARANG" value="<?php echo $tanggalsekarang ?>" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Nama</label>
                                                    <div class="form-group">
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" placeholder="Nama..." value="<?php echo $row->fullname; ?>" name="NAMA">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Username</label>
                                                    <div class="form-group">
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" placeholder="Username..." value="<?php echo $row->username; ?>" name="USERNAME">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Password</label>
                                                    <div class="form-group">
                                                        <div class="col-md-8">
                                                            <input type="password" class="form-control" placeholder="Password..." value="<?php echo $row->password; ?>" name="PASSWORD">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Password Baru</label>
                                                    <div class="form-group">
                                                        <div class="col-md-8">
                                                            <input type="password" class="form-control" placeholder="Password Baru..." value="" name="PASSWORD_BARU">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<br/>
										<div class="form-actions left">
											<button type="submit" value="SIMPAN" name="SIMPAN" class="btn green"><i class="fa fa-check"></i> Simpan</button>
											<button type="button" value="BATAL" name="BATAL" class="btn yellow" onclick=self.history.back()><i class="fa fa-undo"></i> Batal</button>
										</div>
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