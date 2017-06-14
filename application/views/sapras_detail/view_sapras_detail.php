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
                        DETAIL DATA SARANA DAN PRASARANA <br />
                        Fasilitas <?php echo $fasilitas.'( '.$nama_sapras.' )';?>
                    </h3>
                    <!-- END PAGE HEADER-->
                    <div class="row clearfix">
                        <div class="col-md-12 column">
                            <div class="portlet box blue">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-bell-o"></i>DATA SARANA DAN PRASARANA
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
                                        <?php foreach ($sapras as $row){?>
                                        <table class="table table-striped table-bordered table-advance table-hover">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        1
                                                    </td>
                                                    <td>
                                                        Nama Instansi/Perusahaan
                                                    </td>
                                                    <td>
                                                        <b>: <?php echo $row->NAMA_INSTANSI;?></b>
                                                    </td>
                                                    
                                                    <td rowspan="13" align="center" style="vertical-align: middle; width:50%;"  >
                                                        <?php echo $this->load->view('gis/view_gisviewer'); ?>
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>
                                                        2
                                                    </td>
                                                    <td>
                                                        Tipe/Jenis Fasilitas
                                                    </td>
                                                    <td>
                                                        <b>: <?php echo $fasilitas;?></b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        3
                                                    </td>
                                                    <td>
                                                        Lokasi
                                                    </td>
                                                    <td>
                                                        <b>: <?php echo $row->LOKASI;?></b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        4
                                                    </td>
                                                    <td>
                                                        Status Kepemilikan  
                                                    </td>
                                                    <td>
                                                        <b>: <?php echo $row->STA_PEMILIK;?></b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        5
                                                    </td>
                                                    <td>
                                                        Usia Sarpras
                                                    </td>
                                                    <td>
                                                        <b>: <?php echo $row->SAPRAS_USIA;?></b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        6
                                                    </td>
                                                    <td>
                                                        Pengelola/Pemilik
                                                    </td>
                                                    <td>
                                                        <b> <?php echo $row->PENGELOLA;?></b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        7
                                                    </td>
                                                    <td>
                                                        Ukuran/Luas  
                                                    </td>
                                                    <td>
                                                        <b>: <?php echo $row->SAPRAS_LUAS;?></b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        8
                                                    </td>
                                                    <td>
                                                        Kapasitas/Kekuatan  
                                                    </td>
                                                    <td>
                                                        <b>: <?php echo $row->SAPRAS_KAPASITAS;?></b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        9
                                                    </td>
                                                    <td>
                                                        Jumlah Personil/Karyawan  
                                                    </td>
                                                    <td>
                                                        <b>: <?php echo $row->JML_PERSONIL;?></b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        10
                                                    </td>
                                                    <td>
                                                        Azimut R/W    
                                                    </td>
                                                    <td>
                                                        <b>: <?php echo $row->SAPRAS_AZIMUT;?></b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        11
                                                    </td>
                                                    <td>
                                                        Operating Hours   
                                                    </td>
                                                    <td>
                                                        <b>: <?php echo $row->SAPRAS_JAMOPERASI;?></b>
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>
                                                        12
                                                    </td>
                                                    <td>
                                                        Jenis Permukaan   
                                                    </td>
                                                    <td>
                                                        <b>: <?php echo $row->JENIS_PERMUKAAN;?></b>
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>
                                                        13
                                                    </td>
                                                    <td>
                                                        Alamat  
                                                    </td>
                                                    <td>
                                                        <b>: <?php echo $row->SAPRAS_ALAMAT;?></b>
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>
                                                        14
                                                    </td>
                                                    <td>
                                                        Website   
                                                    </td>
                                                    <td>
                                                        <b>: <?php echo $row->SAPRAS_WEBSITE;?></b>
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>
                                                        15
                                                    </td>
                                                    <td>
                                                        No Telp   
                                                    </td>
                                                    <td>
                                                        <b>: <?php echo $row->SAPRAS_NOTELP;?></b>
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>
                                                        16
                                                    </td>
                                                    <td>
                                                        Gambar  
                                                    </td>
                                                    <td rowspan="13" align="center" style="vertical-align: middle" >
                                                            <img src="<?php echo base_url('uploads/SAPRAS/sapras_data/' . $row->UPLOAD_IMAGE . '') ?>" style="max-width: 300px; max-height: 300px">
                                                        </td>
                                                    
                                                </tr>
                                                
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
