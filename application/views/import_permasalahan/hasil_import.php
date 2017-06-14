<!DOCTYPE html>
<html lang="en" class="no-js">
    <?php $this->load->view('v_header') ?>
    <body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo page-container-bg-solid">
	<script src="<?php echo base_url(); ?>assets/ckreditor/ckeditor.js" type="text/javascript"></script>
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
                                <a href="<?php echo base_url()."import_permasalahan";?>">Import Permasalahan</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
							 <li>
                                <a href=""><b>Hasil Import</b></a>
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
                                        List Hasil Import
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse">
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body" style="background-color:#99ccff;">
                                    
                                    <table class="table table-striped table-bordered table-hover table-responsive"  id="sample_8">
                                        <thead>
                                            <tr>
                                                <th width="5%">No</th>
                                               <th>Satker</th>
												<th>Permasalahan</th>
												<th>Hasil Klarifikasi</th>
												<th>Tindak Lanjut</th>
												<th>Luas</th>
												<th>Nilai</th>
												<th>Alamat</th>
												
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                           foreach ($model as $row) {
                                                ?>
                                                <tr class="odd gradeX" >
                                                    <td width="5%"><?php echo $no; ?></td>
                                                    <td width="14%">
													<?php
													$query = $this->db->query("SELECT 
															*
														FROM 
															m_lanud
															
														where 
														id = '$row->lanud'
														

															

															")->result();
															
														foreach ($query as $rys)
															{
																$namalanud = $rys->lanud;
															}
															echo $namalanud;
													?>
													
													
													</td>
													<td width="20%"><textarea cols="20" rows="6" readonly><?php $s = str_replace("<p>","",$row->permasalahan); $d = str_replace("</p>","",$s); echo $d; ?></textarea></td>
													<td width="20%"><textarea cols="20" rows="6" readonly><?php $zaz = str_replace("<p>","",$row->hasil_klarifikasi); $xaz = str_replace("</p>","",$zaz); echo $xaz; ?></textarea></td>
													
													
													<td width="20%"><textarea cols="20" rows="6" readonly><?php $zio = str_replace("<p>","",$row->tindak_lanjut); $xor = str_replace("</p>","",$zio); echo $xor; ?></textarea></td>
													<td><?php if($row->luas == null) { echo ""; }else{ ?><?php echo number_format($row->luas, 0, "," , "."); }?></td>
													<td><?php if($row->nilai == null) { echo ""; }else{ ?><?php echo number_format($row->nilai, 0, "," , "."); }?></td>
													<td><?php echo $row->provinsi."<br>".$row->alamat; ?></td>
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
<script>
	$(".test").replace("<p>","");
</script>