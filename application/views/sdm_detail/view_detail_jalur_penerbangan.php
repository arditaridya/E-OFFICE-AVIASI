<!DOCTYPE html>
<html lang="en" class="no-js">
    <?php $this->load->view('v_header') ?>

    <body class="page-header-fixed page-container-bg-solid page-full-width">
        <!-- BEGIN HEADER -->
        <!-- BEGIN LOGO -->
        <!-- END LOGO -->
        <div class="page-header navbar navbar-static-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner">
                <!-- END HEADER SEARCH BOX -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <div class="page-logo">
                    <a href="<?php echo site_url('main_menu') ?>">
                        <img src="<?php echo base_url() ?>assets/admin/layout/img/logo.png" alt="logo" class="logo-default"/>
                    </a>
                </div>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu">

                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <div class="clearfix">
        </div>

        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <h3 class="page-title">
                        DETAIL DATA SUMBER DAYA ALAM DAN BUATAN <br />
                        Wilayah : Lampung
                    </h3>
                    <!-- END PAGE HEADER-->
                    <div class="row clearfix">
                        <div class="col-md-12 column">
                            <div class="portlet box blue">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-bell-o"></i>SUMBER DAYA ALAM DAN BUATAN
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse">
                                        </a>
                                        <a href="javascript:;" class="reload">
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-scrollable">
                                        <table class="table table-striped table-bordered table-advance table-hover">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        1
                                                    </td>
                                                    <td>
                                                        Nama SDA/SDB
                                                    </td>
                                                    <td>
                                                        <b>: Lampung Air Area</b>
                                                    </td>
                                                    <!-- <td rowspan="13" align="center" style="vertical-align: middle" >
                                                        <img src="<?php echo base_url('assets/global/img/wilayah.gif') ?>">
                                                                                                                <br />
                                                                                                                <i>Perbesar Peta </i> <a href=""><span><i class="fa fa-search-plus"></i></span></a>
                                                    </td> -->
                                                    <td rowspan="13" align="center" style="vertical-align: middle; width:50%;"  >
                                                        <?php echo $this->load->view('gis/view_gisviewer'); ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        2
                                                    </td>
                                                    <td>
                                                        Jenis
                                                    </td>
                                                    <td>
                                                        <b>: Bandara Khusus</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        3
                                                    </td>
                                                    <td>
                                                        Pengelola/Pemilik
                                                    </td>
                                                    <td>
                                                        <b>: TNI AU</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        4
                                                    </td>
                                                    <td>
                                                        Luas/ Kapasitas  
                                                    </td>
                                                    <td>
                                                        <b>: 1000 x 50</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        5
                                                    </td>
                                                    <td>
                                                        Hasil
                                                    </td>
                                                    <td>
                                                        <b>: -</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        6
                                                    </td>
                                                    <td>
                                                        Jumlah Karyawan
                                                    </td>
                                                    <td>
                                                        <b>: -</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        7
                                                    </td>
                                                    <td>
                                                        Alamat / Koordinat  
                                                    </td>
                                                    <td>
                                                        <b>: 0&deg; 10&deg; 3&deg; 5&deg;</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        8
                                                    </td>
                                                    <td>
                                                        Website/Blog/email  
                                                    </td>
                                                    <td>
                                                        <b>: -</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        9
                                                    </td>
                                                    <td>
                                                        No Telp 
                                                    </td>
                                                    <td>
                                                        <b>:</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        10
                                                    </td>
                                                    <td>
                                                        Pendidikan Profesi   
                                                    </td>
                                                    <td>
                                                        <b>: Pilot</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        11
                                                    </td>
                                                    <td>
                                                        Kualifikasi    
                                                    </td>
                                                    <td>
                                                        <b>: Penerjun</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        12
                                                    </td>
                                                    <td>
                                                        Jenis Ordirga    
                                                    </td>
                                                    <td>
                                                        <b>: Terjun Payung</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" align="center">
                                                        <a href="#" class="btn blue">
                                                            <i class="fa fa-print"></i> Print
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- END BORDERED TABLE PORTLET-->
                </div>
                <div class="col-md-6">
                    <!-- BEGIN BORDERED TABLE PORTLET-->

                    <!-- END BORDERED TABLE PORTLET-->
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
