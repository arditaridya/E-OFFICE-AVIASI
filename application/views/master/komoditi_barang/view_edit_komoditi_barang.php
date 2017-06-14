<!DOCTYPE html>
<html lang="en" class="no-js">
    <?php $this->load->view('v_header') ?>
	
	<script>
		
		function getMatra(sel) {
			var value = sel.value;  
			$('#kode').focus();
			$('#kode').val(value + '.');
			
			
		}
		
		function myFunction(id)
		{
			var str = document.getElementById(id).value;
			var res = str.toUpperCase();
			document.getElementById(id).value=res;
		}

	</script>
	
    <body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo page-container-bg-solid">
        <?php $this->load->view('v_horizontal_menu') ?>

        <div class="clearfix">
        </div>

        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <?php $this->load->view('v_sidebar') ?>
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>
                                <a href="<?php echo site_url('#') ?>">Master</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
							<li>
                                <a href="<?php echo site_url('c_master/komoditi_barang'); ?>">Komoditi Barang</a>
								<i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a>Edit Data</a>
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
                    <h3 class="page-title">
                        Tambah Data Master Komoditi                    
                    </h3>
                    <div class="portlet box red" id="form-organisasi">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Form Master Komoditi Barang
                            </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse">
                                </a>
                                <a href="javascript:;" class="reload">
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <!-- BEGIN FORM-->
							<?php foreach ($komoditi_barang as $row){ ?>
                            <form action="<?php echo site_url('c_master/edit_komoditi_barang/'.$row->id.'') ?>" class="horizontal-form" method = "post">
                                <div class="form-body">
                                    <fieldset class="scheduler-border">
                                        <legend class="scheduler-border">Komoditi Barang</legend>
                                        <!--<div class="row">
											<div class="col-md-8">
												<div class="form-group">
													<label class="control-label col-md-3">Kesatuan</label>
													<div class="form-group">
														<div class="col-md-5">
															<?php //$selected = $this->input->post('MATRA'); ?>
															<?php //echo form_dropdown('MATRA', $get_matra, $selected, 'class="form-control" id="matra" onChange="getMatra(this)"'); ?>
														</div>
													</div>
												</div>
											</div>
                                        </div>-->
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3" for="program">Kode</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                               <input type="text" name="KODE" id="kode" value="<?php echo $row->kode; ?>" readonly="readonly" class="form-control" >
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3" for="program">Komoditi Barang</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                               <input type="text" name="KOMODITI_BARANG" id="komoditi_barang" value="<?php echo $row->komoditi; ?>" onkeyup="myFunction('komoditi_barang');" class="form-control" placeholder="Komoditi Barang...">
                                                            </select>
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
                            </form>
							<?php } ?>
                            <!-- END FORM-->
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

