<!DOCTYPE html>
<html lang="en" class="no-js">
    <?php $this->load->view('v_header') ?>
	
	<script>
	
		$(document).ready(function () {
            $('#kesatuan').change(function () {
                var kesatuan = {KESATUAN: $("#kesatuan").val()};
                $.ajax({
                    type: 'POST',
                    url: $("#kesatuan").attr('url'),
                    data: kesatuan,
                    success: function (msg) {
                        $('#komoditi').html(msg);
                        $('#komoditi').prop("disabled", false);
                        $('#select2-chosen-2').html($("#komoditi option:first").text());
                    }
                });
            });
			$('#komoditi').change(function () {
                var komoditi = {KOMODITI: $("#komoditi").val()};
                $.ajax({
                    type: 'POST',
                    url: $("#komoditi").attr('url'),
                    data: komoditi,
                    success: function (msg) {
                        $('#jenis').html(msg);
                        $('#jenis').prop("disabled", false);
                        $('#select2-chosen-3').html($("#jenis option:first").text());
                    }
                });
            });
		});
	
	</script>
    
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
                                <a href="<?php echo site_url('#') ?>">Master</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="<?php echo site_url('c_master/fungsi_barang'); ?>">Fungsi Barang</a>
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
                    <br />
                    <!-- END PAGE HEADER-->
					
					<form class="horizontal-form" method="post">
					<div style="border: 2px solid #F5F5F5;padding: 20px; background-color: #F5F5F5;border-radius: 20px;">
						<h4><strong>Pencarian</strong></h4>
						<div id="cetak" style="display:none;">
							<div class="row">
								<div class="col-md-8">
									<div class="form-group">
										<label class="control-label col-md-3" for="program">Kesatuan</label>
										<div class="form-group">
											<div class="col-md-5">
												<select class="form-control select2me" data-placeholder="Pilih Kesatuan" name="KESATUAN" id="kesatuan" tabindex="1" url="<?php echo site_url('c_master/chain_to_komoditi') ?>">
													<option value=""></option>
													<?php
													foreach
													($kesatuan as $kesatuan_res) {
														?>
														<option value="<?php echo $kesatuan_res->id; ?>"><?php echo $kesatuan_res->kesatuan; ?></option>
													<?php } ?>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-8">
									<div class="form-group">
										<label class="control-label col-md-3" for="program">Komoditi</label>
										<div class="form-group">
											<div class="col-md-5">
												<select class="form-control select2me" id="komoditi" name="KOMODITI" disabled url="<?php echo site_url('c_master/chain_to_jenis'); ?>" >
													<option value="">Pilih Kesatuan Dahulu</option>
												</select>
											</div>
										</div>
									</div>
								</div>
                            </div>
							<div class="row">
								<div class="col-md-8">
									<div class="form-group">
										<label class="control-label col-md-3" for="program">Jenis</label>
										<div class="form-group">
											<div class="col-md-5">
												<select class="form-control select2me" id="jenis" name="JENIS" disabled >
													<option value="">Pilih Komoditi Dahulu</option>
												</select>
											</div>
										</div>
									</div>
								</div>
                            </div>
						</div>
						<br/>
						<div class="row">
							<div class="control-group">
								<div class="form-actions left">
									<button type="submit" name="CARI" class="btn green"><i class="fa fa-check"></i> Cari</button>
									<input type="button" id="hide" class="btn yellow" value="Tampilkan Semua Pencarian" />
								</div>
							</div>
						</div>
					</div>
					</form>
					
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet box red">
                                <div class="portlet-title">
                                    <div class="caption">
                                        List Data Fungsi Barang
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
                                                    <a href="<?php echo site_url('c_master/tambah_fungsi_barang') ?>">
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
                                    <table class="table table-striped table-bordered table-hover" id="sample_4">
                                        <thead>
                                            <tr>
                                                <tr>
                                                <th>NO</th>
												<th>ID</th>
												<th>Kode</th>
												<th>Fungsi Barang</th>
												<th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($fungsi_barang as $data) {
                                                ?>
                                                <tr class="odd gradeX">
                                                    <td><?php echo $no; ?></td>
													<td><?php echo $data->id; ?></td>
													<td><?php echo $data->kode; ?></td>
													<td><?php echo $data->fungsi; ?></td>
                                                    <td>
                                                        <a href="<?php echo base_url() . "c_master/edit_fungsi_barang/" . $data->id; ?>" class="btn default btn-xs green">
                                                            <i class="fa fa-edit"></i> Edit </a>
                                                        <a href="<?php echo base_url() . "c_master/delete_fungsi_barang/" . $data->id; ?>">
                                                            <button class="btn default btn-xs red" data-toggle="confirmation" data-original-title="Are you sure ?" title=""><i class="fa fa-trash-o"></i> Delete</button>
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

<script>

	$("#hide").click(function(){
		if($("#cetak").css('display') == 'none'){
			$("#cetak").show("blind")
			$("#hide").val("Sembunyikan Semua Pencarian")
		}
		else if (($("#cetak").css('display') == 'block')){
			$("#cetak").hide("blind")
			$("#hide").val("Tampilkan Semua Pencarian")
		}
	});
	
</script>