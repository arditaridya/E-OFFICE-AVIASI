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
                                <a href="<?php echo site_url('lanud'); ?>">List Satker</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="#">Edit Satker</a>
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
                                        Form Input
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse">
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <!-- BEGIN FORM-->
								<?php foreach($datanya as $value){ ?>
                                    <form action="<?php echo base_url('lanud/update'); ?>" class="horizontal-form" method="post" enctype="multipart/form-data">
                                       
									   
									   <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Kotama</label>
                                                    <div class="form-group">
                                                        <div class="col-md-4">
                                    
																<select class="form-control" name='kotama' id='kotama'>
																	<option value='0' selected>--- Pilih Parent ---</option>
																	<?php foreach($kotama as $row){ ?>
																	<option value="<?php echo $row->id; ?>" <?php echo ($value->kotama == $row->id)?"selected":""; ?>><?php echo $row->kotama; ?></option>
																	<?php } ?>
																</select>
														
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Nama Satker</label>
                                                    <div class="form-group">
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" name="lanud" id="lanud" value="<?php echo $value->lanud; ?>">
															<input type="hidden" class="form-control" name="id" id="id" value="<?php echo $value->id; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										
										
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Latitut</label>
                                                    <div class="form-group">
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" name="latitut" id="latitut" value="<?php echo $value->latitut; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Longitut</label>
                                                    <div class="form-group">
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" name="longitut" id="longitut" value="<?php echo $value->longitut; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Detil Lanud</label>
                                                    <div class="form-group">
                                                        <div class="col-md-4">
                                                            <textarea class="form-control" name="detillanud" id="detillanud"><?php echo $value->detillanud; ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Photo</label>
                                                    <div class="form-group">
                                                        <div class="col-md-8">
														<div id="okela">
														<?php if($value->photolanud == null){ ?>
															<input type="file" name="photolanud" id="photolanud" class="form-control">
														<?php }else{ ?>
														<input type="hidden" name="photolanud" id="photolanud" value="nggaada">
															<img src="<?php echo base_url() ?>assets/upload/lanud/<?php echo $value->photolanud; ?>" width="100" height="104"><a onclick="asda()">Hapus</a>
														<?php } ?>
														</div>
														</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

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


<script>
function asda(){
			//alert(a);
			$("#okela").html('<input type="file" name="photolanud" id="photolanud" class="form-control">'); 
			
			
		}
</script>