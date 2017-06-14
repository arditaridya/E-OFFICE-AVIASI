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
                                <a href="<?php echo base_url()."import_dataaset";?>">Import Data Aset</a>
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
                                    
                                   
                                    <table class="table table-striped table-bordered table-hover table-responsive" id="sample_7">
                                        <thead>
                                            <tr bgcolor="#ccccff">
                                                <th width="5%">No</th>
												<th>SATKER</th>
												<th>IKN</th>
                                                <th>SIMAK</th>
												<th>LOKASI</th>
												<th>LUAS (M&sup2;)</th>
												<th>NILAI (RP)</th>
                                               
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($model as $row) {
                                                ?>
                                                <tr class="odd gradeX" bgcolor="#ccccff">
                                                    <td><?php echo $no; ?></td>
													<td>
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
													<td><?php echo $row->ikn; ?></td>
                                                    <td><?php echo $row->simak; ?></td>
													<td><?php echo $row->lokasi; ?></td>
													<td align="right"><?php if($row->luas == null) { echo ""; }else{ ?><?php echo number_format($row->luas, 0, "," , "."); }?></td>
													<td align="right"><?php if($row->nilai == null) { echo ""; }else{ ?><?php echo number_format($row->nilai, 0, "," , "."); }?></td>
													
                                                  
                                                   
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