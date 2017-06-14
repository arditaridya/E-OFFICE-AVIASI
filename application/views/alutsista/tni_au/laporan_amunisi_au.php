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
                                <a href="#">Laporan</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
							<li>
                                <a href="#">TNI AU</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="<?php echo site_url('c_alutsista/laporan_amunisi_au'); ?>">Amunisi</a>
                            </li>
                        </ul>
                        <div class="page-toolbar">
                            <div id="dashboard-report-range" class="pull-right tooltips btn btn-fit-height grey-salt" data-container="body" data-placement="bottom" data-original-title="Kalender">
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
                                        List Data Amunisi AU 
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse">
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="btn-group">
                                                    <a href="<?php echo site_url('c_alutsista/cetak_amunisi_au') ?>" target="_blank"><button id="sample_editable_1_new" class="btn green">
                                                            Print <i class="fa fa-print"></i>
                                                        </button></a>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    if ($this->session->flashdata('tambah_sukses')) {
                                        echo '<div class="alert alert-success"><a class="close" data-dismiss="alert">&times;</a>Data berhasil disimpan</div>';
                                    }
                                    ?>

                                    <?php
                                    if ($this->session->flashdata('update_sukses')) {
                                        echo '<div class="alert alert-success"><a class="close" data-dismiss="alert">&times;</a>Data berhasil diupdate</div>';
                                    }
                                    ?>

                                    <?php
                                    if ($this->session->flashdata('hapus_sukses')) {
                                        echo '<div class="alert alert-success"><a class="close" data-dismiss="alert">&times;</a>Data berhasil dihapus</div>';
                                    }
                                    ?>
                                    <table class="table table-striped table-bordered table-hover" id="sample_4" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>
                                                    No
                                                </th>
                                                <th>
                                                    Kesatuan
                                                </th>
                                                <th>
                                                    Jenis Barang
                                                </th>
                                                <th>
                                                    Fungsi Barang
                                                </th>
												<th>
													Barang
                                                </th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($amunisi_au as $data) {
                                                ?>
                                                <tr class="odd gradeX">
                                                    <td>
                                                        <?php echo $no; ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        foreach ($kesatuan as $kesatuan_res) {
                                                            if ($kesatuan_res->id == $data->id_kesatuan) {
                                                                echo $kesatuan_res->kesatuan;
                                                            }
                                                        }
                                                        ?>

                                                    </td>
                                                    <td>
                                                        <?php
                                                        foreach ($jenis as $jenis_res) {
                                                            if ($jenis_res->id == $data->id_jenis) {
                                                                echo $jenis_res->jenis;
                                                            }
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        foreach ($fungsi as $fungsi_res) {
                                                            if ($fungsi_res->id == $data->id_fungsi) {
                                                                echo $fungsi_res->fungsi;
                                                            }
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        foreach ($barang as $barang_res) {
                                                            if ($barang_res->id == $data->id_barang) {
                                                                echo $barang_res->barang;
                                                            }
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <?php
                                                $no++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    <?php
//                                    }
                                    ?>

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
<!--        <script>
            $('button.tombol_excel').click(function () {
                $("#upload_excel").toggle("slow");
                
                return false;
            });
        </script>-->
        <?php $this->load->view('v_footer') ?>
    </body>
    <!-- END BODY -->
</html>