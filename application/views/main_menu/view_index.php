<!DOCTYPE html>
<html lang="en" class="no-js">
    <?php $this->load->view('v_header') ?>
    
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
                    <!-- BEGIN PAGE HEADER-->
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>
                                <a href="<?php echo site_url('main_menu/admin') ?>"><b>Menu Utama<b></a>
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
                        SELAMAT DATANG DI APLIKASI SISTEM INFORMASI E-OFFICE STP AVIASI</small>
                    </h3>
                    <!-- END PAGE HEADER-->

                    <!-- END BORDERED TABLE PORTLET-->

                   <br><br>
                    <!-- BEGIN DASHBOARD STATS -->
					<?php /*
                    <div class="row" align="center">
                        <?php if ($this->session->userdata('level') == 1 or $this->session->userdata('level') == 2 or $this->session->userdata('level') == 0) { ?>
                            <div class="col-lg-3 col-sm-3 col-xs-12">
                                <div class="dashboard-stat">
                                    <div class="details">
                                        <a class="more" href="<?php echo site_url('c_kesatuan') ?>">
                                            <img src="<?php echo base_url() ?>assets/global/img/mm_kesatuan.png" class="img-responsive" style="width: 250px; height: 198px">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-3 col-xs-12">
                                <div class="dashboard-stat">
                                    <div class="details">
                                        <a class="more" href="<?php echo site_url('c_kesatuan/laporan') ?>">
                                            <img src="<?php echo base_url() ?>assets/global/img/mm_laporan.png" class="img-responsive" style="width: 250px; height: 198px">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-3 col-xs-12">
                                <div class="dashboard-stat">
                                    <div class="details">
                                        <a class="more" href="<?php echo site_url('pencarian') ?>">
                                            <img src="<?php echo base_url() ?>assets/global/img/mm_pencarian.png" class="img-responsive" style="width: 250px; height: 198px">
                                        </a>
                                    </div>
                                </div>
                            </div>
							<div class="col-lg-3 col-sm-3 col-xs-12">
                                <div class="dashboard-stat">
                                    <div class="details">
                                        <a class="more" href="<?php echo site_url('map') ?>" target="_blank">
                                            <img src="<?php echo base_url() ?>assets/global/img/mm_GIS.png" class="img-responsive" style="width: 250px; height: 198px">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
					
					*/ ?>
                    <!-- END DASHBOARD STATS -->
				
                </div>
            </div>
        </div>
        <!-- END CONTAINER -->
        <?php $this->load->view('v_footer') ?>
    </body>
    <!-- END BODY -->
</html>
