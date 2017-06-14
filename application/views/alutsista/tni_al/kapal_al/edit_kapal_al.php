<!DOCTYPE html>
<html lang="en" class="no-js">
    <?php $this->load->view('v_header') ?>
	<script>
        $(document).ready(function () {
            $('#jenis').change(function () {
                var jenis = {jenis: $("#jenis").val()};
                $.ajax({
                    type: 'POST',
                    url: $("#jenis").attr('url'),
                    data: jenis,
                    success: function (msg) {
                        $('#fungsi').html(msg);
                        $('#fungsi').prop("disabled", false);
                        $('#select2-chosen-3').html($("#fungsi option:first").text());
                    }
                });
                var msg = "<select class=\"form-control select2me\" id=\"barang\" name=\"barang\" disabled><option value>Pilih Fungsi Dahulu</option></select>";
                $("#barang").html(msg);
                $("#barang").prop("disabled", true);
                $('#select2-chosen-4').html($("#barang option:first").text());
            });
            $('#fungsi').change(function () {
                var fungsi = {fungsi: $("#fungsi").val()};
                $.ajax({
                    type: 'POST',
                    url: "<?php echo site_url('c_alutsista/chain_to_barang') ?>",
                    data: fungsi,
                    success: function (msg) {
                        $("#barang").html(msg);
                        $("#barang").prop("disabled", false);
                        $("#select2-chosen-4").html($("#barang option:first").text());
                    }
                });
            });
        });

        function hitung() {
            var a = parseInt($('#baik').val()) || 0;
            var b = parseInt($('#rusak_ringan').val()) || 0;
            var c = parseInt($('#rusak_berat').val()) || 0;
            var d = parseInt($('#depo60').val()) || 0;

            $('#jumlah').val(a + b + c + d);
        }

    </script>.
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
                                <a href="#">Alutsista</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
							<li>
                                <a href="#">TNI AL</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="<?php echo site_url('c_alutsista/kapal_al'); ?>">Kapal</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
							<li>
                                <a href="#">Edit Data</a>
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
                                        Edit Data
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse">
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body form">
									<!-- BEGIN FORM-->
									<?php foreach ($kapal_al as $data) { ?>
								<form action="<?php echo site_url('c_alutsista/proses_edit_kapal_al/' . $this->uri->segment(3)) ?>" class="horizontal-form" method = "post">
                                <div class="form-body">
                                      <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="program">Kesatuan</label>
                                                <div class="form-group">
                                                    <div class="col-md-5">
                                                         <select class="form-control select2me" data-placeholder="Pilih Kesatuan" name="kesatuan" id="kesatuan" tabindex="1">
                                                                <option value=""></option>
                                                                <?php
                                                                foreach ($kesatuan as $kesatuan_res) {
																//	var_dump($kesatuan_res->id);die();
                                                                    if ($data->id_kesatuan == $kesatuan_res->id) {
                                                                        ?>
                                                                        <option value="<?php echo $kesatuan_res->id ?>" selected><?php echo $kesatuan_res->kesatuan ?></option>
                                                                        <?php
                                                                    } else {
                                                                        ?>
                                                                        <option value="<?php echo $kesatuan_res->id ?>"><?php echo $kesatuan_res->kesatuan ?></option>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                <?php }
                                                                ?>
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
															<select class="form-control select2me" id="jenis" name="jenis" data-placeholder="Pilih Jenis" url="<?php echo site_url('c_alutsista/chain_to_fungsi') ?>">
                                                                <option value=""></option>
                                                                <?php
                                                                foreach ($jenis as $jenis_res) {
                                                                    if ($data->id_jenis == $jenis_res->id) {
                                                                        ?>
                                                                        <option value="<?php echo $jenis_res->id ?>" selected><?php echo $jenis_res->jenis ?></option>
                                                                        <?php
                                                                    } else {
                                                                        ?>
                                                                        <option value="<?php echo $jenis_res->id ?>"><?php echo $jenis_res->jenis ?></option>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                <?php }
                                                                ?>
                                                            </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="program">Fungsi</label>
                                                <div class="form-group">
                                                    <div class="col-md-5">
                                                        <select class="form-control select2me" id="fungsi" name="fungsi" data-placeholder="Pilih Fungsi">
                                                                <option value=""></option>
                                                                <?php
                                                                foreach ($fungsi as $fungsi_res) {
                                                                    if ($data->id_fungsi == $fungsi_res->id) {
                                                                        ?>
                                                                        <option value="<?php echo $fungsi_res->id ?>" selected><?php echo $fungsi_res->fungsi ?></option>
                                                                        <?php
                                                                    } else {
                                                                        ?>
                                                                        <option value="<?php echo $fungsi_res->id ?>"><?php echo $fungsi_res->fungsi ?></option>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                <?php }
                                                                ?>
                                                            </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="program">Barang</label>
                                                <div class="form-group">
                                                    <div class="col-md-5">
                                                        <select class="form-control select2me" id="barang" name="barang" data-placeholder="Pilih Barang">
                                                                <option value=""></option>
                                                                <?php
                                                                foreach ($barang as $barang_res) {
                                                                    if ($data->id_barang == $barang_res->id) {
                                                                        ?>
                                                                        <option value="<?php echo $barang_res->id ?>" selected><?php echo $barang_res->barang ?></option>
                                                                        <?php
                                                                    } else {
                                                                        ?>
                                                                        <option value="<?php echo $barang_res->id ?>"><?php echo $barang_res->barang ?></option>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                <?php }
                                                                ?>
                                                            </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									 
									<div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <div class="col-md-5">         
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
							<fieldset class="scheduler-border">
								<legend class="scheduler-border"></legend>
								<div class="form-group col-md-12">
								  <div class="col-md-3"><h3>Detail Barang</h3></div>
								</div>
									<div class="form-group">
									<br>
									<br>
									</div>
								<?php foreach ($detail_kapal_al as $row) { ?>
								<div class="row">
									<div class="col-md-8">
                                         <div class="form-group">
                                                <label class="control-label col-md-3" for="program">KLAS</label>
                                                <div class="form-group">
                                                    <div class="col-md-5">
                                                        <input type="text" name="klas" id="klas" class="form-control" placeholder="Klas" value="<?php echo $row->klas; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="program">Nama Kapal</label>
                                                <div class="form-group">
                                                    <div class="col-md-5">
                                                        <input type="text" name="nama_kapal" id="nama_kapal" class="form-control" placeholder="Nama Kapal" value="<?php echo $row->nama_kapal;?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="program">Singkatan</label>
                                                <div class="form-group">
                                                    <div class="col-md-5">
                                                        <input type="text" name="singkatan" id="singkatan" class="form-control" placeholder="Singkatan" value="<?php echo $row->singkatan;?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="program">Nomer Lambung</label>
                                                <div class="form-group">
                                                    <div class="col-md-5">
                                                        <input type="text" name="no_lamb" id="no_lamb" class="form-control" placeholder="Nomer Lambung" value="<?php echo $row->no_lamb; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="program">Pembina</label>
                                                <div class="form-group">
                                                    <div class="col-md-5">
                                                        <input type="text" name="pembina" id="pembina" class="form-control" placeholder="Pembina" value="<?php echo $row->pembina; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="program">Satuan</label>
                                                <div class="form-group">
                                                    <div class="col-md-5">
                                                        <input type="text" name="satuan" id="satuan" class="form-control" placeholder="Satuan" value="<?php echo $row->satuan; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="program">Posisi</label>
                                                <div class="form-group">
                                                    <div class="col-md-5">
                                                            <select class="form-control select2me" id="pangkalan" name="pangkalan" data-placeholder="Pilih Posisi">
                                                            <option value="<?php echo $row->pangkalan;?>"><?php echo $row->pangkalan;?></option>
                                                            <option value="PKL">PKL</option>
															<option value="OPS">OPS</option>
                                                            </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="program">Tingkat Kesiapan</label>
                                                <div class="form-group">
                                                    <div class="col-md-5">
                                                    
													<select class="form-control select2me" id="tingkat_kesiapan" name="tingkat_kesiapan" data-placeholder="Pilih Kesiapan">
                                                            <option value="<?php echo $row->tingkat_kesiapan;?>"><?php echo $row->tingkat_kesiapan;?></option>
                                                            <option value="S">S</option>
															<option value="TS">TS</option>
                                                    </select>
													
													</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="program">Kondisi</label>
                                                <div class="form-group">
                                                    <div class="col-md-5">
                                                    <select class="form-control select2me" id="kondisi" name="kondisi" data-placeholder="Pilih Kondisi">
                                                            <option value="<?php echo $row->kondisi;?>"><?php echo $row->kondisi;?></option>
                                                            <option value="B">B</option>
															<option value="RR">RR</option>
															<option value="RB">RB</option>
                                                     </select>
													</div>
													</div>
                                                </div>
                                            </div>
                                     </div>
                                    
									<div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="program">Keterangan</label>
                                                <div class="form-group">
                                                    <div class="col-md-5">
                                                        <input type="text" name="keterangan" id="keterangan" class="form-control" placeholder="Keterangan" value="<?php echo $row->keterangan;?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
								<?php } ?>
							</fieldset> 
									<div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                               <div class="form-group">
                                                    <div class="col-md-5">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									        <div class="row">
                                        <div class="form-group"></div>
                                    </div>
                                    <input type="hidden" name="insert_date" value="<?php echo date('Y-m-d') ?>">
                                    <div class="form-actions left">
										<input type="submit" name="update" class="btn green" value="&#xf00c; Simpan">
                                        <input type="submit" name="batal" class="btn yellow" onclick=self.history.back() value="Batal">
                                        
                                    </div>
                                </div>
                            </form>
									<?php } ?>
									<!-- END FORM-->
									
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


<script type="text/javascript">

	$('#tanggal').datepicker({
			format: 'dd-mm-yyyy',
		}).on('changeDate', function(){

			var date = $(this).val(),
		    values = date.split("-"),
		    day = parseInt(values[0], 10),
		    month = parseInt(values[1], 10), // Month is zero based, so subtract 1
		    year = parseInt(values[2], 10);

		    // alert(year+"-"+month+"-"+day)
			$('#tanggal_send').val(year+"-"+month+"-"+day)
		})
	
	
	

	</script>