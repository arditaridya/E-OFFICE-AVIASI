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
                        Detail Data SDM <?php echo $ket;?> <br />
                        Profesi: <?php echo $prof;?>
                    </h3>
                    <!-- END PAGE HEADER-->
                    <div class="row clearfix">
                        <div class="col-md-12 column">
                            <div class="portlet box blue">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-bell-o"></i>SUMBER DAYA MANUSIA
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
                                        <?php foreach ($sdm_pilot_tempur_wing_man_penerbang_tni as $value) { ?>
                                            <table class="table table-striped table-bordered table-advance table-hover">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            1
                                                        </td>
                                                        <td>
                                                            Nama
                                                        </td>
                                                        <td>
                                                            <b>: <?php echo $value->NAMA ?></b>
                                                        </td>
                                                        <td rowspan="17" align="center" style="vertical-align: middle" >
                                                            <img src="<?php echo base_url('uploads/SDM/' . $value->UPLOAD_DOK . '') ?>" style="max-width: 500px; max-height: 500px">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            2
                                                        </td>
                                                        <td>
                                                            Jenis Kelamin
                                                        </td>
                                                        <td>
                                                            <b>: <?php
                                                                if ($value->JK_ID == 1) {
                                                                    echo "Laki-Laki";
                                                                } else {
                                                                    echo "Perempuan";
                                                                }
                                                                ?></b>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            3
                                                        </td>
                                                        <td>
                                                            Tempat / Tanggal Lahir
                                                        </td>
                                                        <td>
                                                            <b>: <?php echo $value->TMP_LAHIR ?>, <?php echo $value->TGL_LAHIR ?></b>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            4
                                                        </td>
                                                        <td>
                                                            Alamat Rumah
                                                        </td>
                                                        <td>
                                                            <b>: <?php echo $value->ALAMAT_RMH ?></b>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            5
                                                        </td>
                                                        <td>
                                                            No. Telpon / HP
                                                        </td>
                                                        <td>
                                                            <b>: <?php echo $value->NO_TELP ?></b>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            6
                                                        </td>
                                                        <td>
                                                            Alamat Kantor
                                                        </td>
                                                        <td>
                                                            <b>: <?php echo $value->ALAMAT_KNTR ?></b>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            7
                                                        </td>
                                                        <td>
                                                            No Telp kantor  
                                                        </td>
                                                        <td>
                                                            <b>: <?php echo $value->NO_TELP_KANTOR ?></b>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            8
                                                        </td>
                                                        <td>
                                                            Pendidikan Umum  
                                                        </td>
                                                        <td><b>: <?php
                                                                foreach ($jenis_didik as $jenis_didik_res) {
                                                                    
                                                                        echo $jenis_didik_res->JENISDIDIK_SINGKATAN;
                                                                    
                                                                }
                                                                ?>
                                                            </b>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            9
                                                        </td>
                                                        <td>
                                                            Profesi  
                                                        </td>
                                                        <td>
                                                            <b>: 
                                                                <?php
                                                                echo $prof;
                                                                ?>
                                                            </b>
                                                        </td>
                                                    </tr>
                                                                                                        
                                                    <tr>
                                                        <td>
                                                            10
                                                        </td>
                                                        <td>
                                                            Kualifikasi    
                                                        </td>
                                                        <td>
                                                            <b>: 
                                                                <?php
                                                                foreach ($kualifikasi as $row) {
                                                                    if ($row->KUALIFIKASI_ID == $value->KUALIFIKASI_ID)
                                                                        echo $row->KUALIFIKASI_NAMA;
                                                                }
                                                                ?>
                                                            </b>
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td>
                                                            11
                                                        </td>
                                                        <td>
                                                            Spesialisasi    
                                                        </td>
                                                        <td>
                                                            <b>: 
                                                                <?php
                                                                foreach ($spesialisasi as $spesialisasi_res) {
                                                                    if ($spesialisasi_res->SPESIALISASI_ID == $value->SPESIALISASI_ID)
                                                                        echo $spesialisasi_res->SPESIALISASI_NAMA;
                                                                }
                                                                ?>
                                                            </b>
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td>
                                                            12                                                        </td>
                                                        <td>
                                                            Jam Terbang    
                                                        </td>
                                                        <td>
                                                            <b>: <?php echo $value->JAM_TERBANG; ?> Jam</b>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            13
                                                        </td>
                                                        <td>
                                                            Masa Kerja      
                                                        </td>
                                                        <td>
                                                            <b>: <?php echo $value->MASA_KERJA?> Tahun</b>
                                                        </td>
                                                    </tr>
                                                    <!--tr>
                                                        <td colspan="3" align="center">
                                                            <a href="#" class="btn blue">
                                                                <i class="fa fa-print"></i> Print
                                                            </a>
                                                        </td>
                                                    </tr-->
                                                </tbody>
                                            </table>
                                        <?php } ?>
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
