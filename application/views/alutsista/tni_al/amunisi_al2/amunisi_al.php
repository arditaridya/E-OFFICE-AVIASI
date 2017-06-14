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
                                <a>Amunisi AL</a>
                                <i class="fa fa-angle-right"></i>
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
                                                    <a href="<?php echo site_url('c_alutsista/tambah_amunisi_al') ?>">
														<button id="sample_editable_1_new" class="btn blue">
                                                            Tambah Baru <i class="fa fa-plus"></i>
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
                                    <table class="table table-striped table-bordered table-hover" id="sample_15">
                                        <thead>
                                            <tr>
                                                <tr>
                                                <th>
                                                    No
                                                </th>
                                                <th rowspan="2">
                                                    Kesatuan
                                                </th>
                                                <th rowspan="2">
                                                    Jenis Barang
                                                </th>
                                                <th rowspan="2">
                                                    Fungsi Barang
                                                </th rowspan="2">
												<th rowspan="2">
													Barang
                                                </th>
												<th rowspan="2">
													Jumlah Senjata
                                                </th>
												<th rowspan="2">
													BP/Senjata
                                                </th>
												<th colspan="2">
													Arsenal
                                                </th>
												<th colspan="2">
													Satkai
                                                </th>
                                                <th>
                                                    Aksi
                                                </th>
                                            </tr>
											<tr>
												<th>Siap</th>
												<th>Tidak Siap</th>
												<th>Siap</th>
												<th>Tidak Siap</th>
											</tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($amunisi_al as $row) {
                                                ?>
                                                <tr class="odd gradeX" >
                                                    <td><?php echo $no; ?></td>
                                                    <td>
                                                        <?php
                                                        foreach ($barang as $barang_res) {
                                                            if ($barang_res->id == $row->id_barang) {
                                                                echo $barang_res->barang;
                                                            }
                                                        }
                                                        ?>
                                                    </td>
													<td><?php echo $row->klas; ?></td>
                                                    <td><?php echo $row->nama_kapal; ?></td>
                                                    <td><?php echo $row->singkatan;?></td>
                                                    <td><?php echo $row->no_lamb; ?></td>
													<td><?php echo $row->satuan;?></td>
													<td><?php if ($row->pangkalan=='PKL'){
															  echo $row->pangkalan;
															  }else{
															  echo '-';
															  }
															  ?>
													</td>
													<td><?php if ($row->pangkalan=='OPS'){
															  echo $row->pangkalan;
															  }else{
															  echo '-';
															  }
																?>
													</td>
													<td><?php if ($row->tingkat_kesiapan=='S'){
															  echo $row->tingkat_kesiapan;
															  }else{
															  echo '-';
															  }
															  ?>
													</td>
													<td>
														<?php 
														if ($row->tingkat_kesiapan=='TS'){
															  echo $row->tingkat_kesiapan;
															  }else{
															  echo '-';
															  }
														?>
													</td>
													<td>
															<?php if ($row->kondisi=='B'){
															  echo $row->kondisi;
															  }else{
															  echo '-';
															  }
															  ?>
													</td>
													<td><?php if ($row->kondisi=='RR'){
															  echo $row->kondisi;
															  }else{
															  echo '-';
															  }
													
														?>
													</td>
													<td><?php if ($row->kondisi=='RB'){
															  echo $row->kondisi;
															  }else{
															  echo '-';
															  }
														?>
													</td>
													<td><?php echo $row->keterangan; ?></td>
                                                    <td>
                                                        <a href="<?php echo base_url() . "c_alutsista/edit_kapal_al/" . $row->id_dump_kapal_al; ?>" class="btn default btn-xs green">
                                                            <i class="fa fa-edit"></i> Edit 
														</a>
                                                        <a href="<?php echo base_url() . "c_alutsista/hapus_kapal_al/" . $row->id_dump_kapal_al; ?>">
                                                            <button class="btn default btn-xs red" data-toggle="confirmation" data-original-title="Are you sure ?" title="">
																<i class="fa fa-trash-o"></i> Delete
															</button>
                                                        </a>
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