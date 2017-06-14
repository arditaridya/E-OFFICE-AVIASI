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
				<h3 class="page-title"></h3>
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                             <li>
                                <i class="fa fa-home"></i>
                                <a href="#">laporan</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
							<li>
                                <a href="#">TNI AL</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="<?php echo site_url('c_alutsista/laporan_amunisi_al'); ?>">Amunisi</a>
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
                    <!-- END PAGE HEADER-->
					<h3 class="page-title"></h3>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet box red">
                                <div class="portlet-title">
                                    <div class="caption">
                                        List Data Amunisi AL
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
                                                    <a href="<?php echo site_url('c_alutsista/cetak_amunisi_al') ?>" target="_blank">
														<button id="sample_editable_1_new" class="btn green">
                                                            Print <i class="fa fa-print"></i>
                                                        </button>
													</a>
                                                </div>
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
                                    <table class="table table-striped table-bordered table-hover" id="sample_4">
                                        <thead>
                                            
                                            <tr>
                                                <th >
                                                    No
                                                </th>
                                                <th >
                                                    Kesatuan
                                                </th>
                                                <th >
                                                    Jenis Barang
                                                </th>
                                                <th >
                                                    Fungsi Barang
                                                </th>
												<th >
													Barang
												</th>
                                            </tr>
											
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($amunisi_al as $data) {
                                                ?>
                                                <tr class="odd gradeX" >
                                                    <td><?php echo $no; ?></td>
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