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
                                <a href="<?php echo site_url('#') ?>">Master</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="<?php echo site_url('c_kesatuan'); ?>">Kesatuan</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="<?php echo site_url('c_kesatuan/tni_ad/'.$id.''); ?>">TNI AD</a>
								<i class="fa fa-angle-right"></i>
                            </li>
							<li>
                                <a href="#">Tambah Data</a>
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
                            <div class="portlet box red">
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
                                    <!-- BEGIN FORM-->
									<form action="<?php echo site_url('c_kesatuan/tambah_tni_ad/'.$id.'') ?>" class="horizontal-form" method = "post">
										<div class="form-body">
											<fieldset class="scheduler-border">
												<legend class="scheduler-border">TNI AD</legend>
												<div class="row">
													<div class="col-md-8">
														<div class="form-group">
															<label class="control-label col-md-3" for="program">Kesatuan</label>
															<div class="form-group">
																<div class="col-md-5">
																	   <input type="text" name="KESATUAN" id="kesatuan" onkeyup="myFunction('kesatuan');" class="form-control" placeholder="kesatuan...">
																</div>
															</div>
														</div>
													</div>
												</div>
											</fieldset>
											<div class="form-actions left">
												<button type="submit" value="SIMPAN" name="SIMPAN" class="btn green"><i class="fa fa-check"></i> Simpan</button>
												<button type="button" value="BATAL" name="BATAL" class="btn yellow" onclick=self.history.back()><i class="fa fa-undo"></i> Batal</button>
											</div>
										</div>
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


<script>
	function myFunction(id)
			{
				var str = document.getElementById(id).value;
				var res = str.toUpperCase();
				document.getElementById(id).value=res;
			}
		
</script>