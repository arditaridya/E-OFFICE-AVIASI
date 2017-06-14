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
                                <a href="<?php ?>">Laporan Pemanfaatan (<font color="blue"> <?php echo $nama_lanud; ?> </font>)</a>
                                <i class="fa fa-angle-right"></i>
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
                                        Laporan Pemanfaatan
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse">
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                	<center><h4>
                                    	DAFTAR BARANG MILIK NEGARA (BMN) LANUD <?php echo strtoupper($nama_lanud); ?>
                                        <br>
                                        YANG DIKERJASAMAKAN LANUD DENGAN PIHAK KEDUA DAN TELAH MENDAPAT PERSETUJUAN MENKEU RI C.Q DJKN/KPKNL
                                    </h4></center>
                                    <table class="table table-striped table-bordered table-hover table-responsive">
                                        <thead>
                                            <tr>
                                                <th rowspan="2">No</th>
												<th rowspan="2">BMN Yang Dikerjasamakan</th>
												<th rowspan="2">Alamat</th>
                                                <th colspan="2">Luas Bangunan / Tanah (M<sup>2</sup>)</th>
                                                <th rowspan="2">Nilai Sewa</th>
                                                <th rowspan="2">Rekomendasi Menkeu / KPKNL</th>
												<th rowspan="2">No Perjanjian</th>
                                                <th rowspan="2">Peruntukan</th>
                                                <th rowspan="2">Pihak Ke III / Penyewa</th>
                                                <th rowspan="2">Pola Kerjasama</th>
                                            </tr>
                                            <tr>
                                            	<th>Bangunan</th>
                                                <th>Tanah</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<tr align="center">
                                            	<td>1</td>
                                                <td>2</td>
                                                <td>3</td>
                                                <td colspan="2">4</td>
                                                <td>5</td>
                                                <td>6</td>
                                                <td>7</td>
                                                <td>8</td>
                                                <td>9</td>
                                                <td>10</td>
                                            </tr>
                                            <?php
                                            $no = 1;
                                           $jml_sewa = 0;
										   foreach ($data as $row) {
                                                ?>
                                                <tr class="odd gradeX" >
                                                    <td align="center"><?php echo $no; ?></td>
                                                    <td><?php echo ($row->bmn == "1")?"Tanah":"Tanah dan Bangunan"; ?></td>
                                                    <td><?php echo $row->lokasi; ?></td>
                                                    <td align="center"><?php echo $row->bangunan; ?></td>
                                                    <td align="center"><?php echo $row->tanah; ?></td>
                                                    <td align="right"><?php echo number_format($row->sewa,2,",","."); ?></td>
                                                    <td><?php echo $row->menkeu; ?></td>
                                                    <td><?php echo $row->perjanjian; ?></td>
                                                    <td><?php echo $row->peruntukan; ?></td>
                                                    <td><?php echo $row->penyewa; ?></td>
                                                    <td><?php echo $row->pola_kerjasama; ?></td>
                                                </tr>
                                                <?php
                                                $no++;
												$jml_sewa = $jml_sewa + $row->sewa;
                                            }
											
											if(!empty($data)){
                                            ?>
                                            <tr>
                                            	<td></td>
                                                <td></td>
                                                <td></td>
                                                <td colspan="2"></td>
                                                <td align="right"><strong><?php echo number_format($jml_sewa,2,",","."); ?></strong></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <?php }else{ ?>
                                            <tr>
                                            	<td colspan="11" style="color:#666"><em><strong>Data Tidak Ada</strong></em></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <a href="<?php echo site_url(); ?>laporan_pemanfaatan/cetak/<?php echo $this->uri->segment(3); ?>" class="btn btn-warning" target="_blank">Print</a>
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