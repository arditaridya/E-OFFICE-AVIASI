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
                                <a href="<?php echo site_url('c_alutsista/munisi_al'); ?>">Amunisi</a>
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
								<?php foreach ($amunisi as $data) { ?>
								<form action="<?php echo site_url('c_alutsista/proses_edit_amunisi_al/' . $this->uri->segment(3)) ?>" class="horizontal-form" method = "post">
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
																var_dump($jenis_res->id);
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
                                        
										<div class="row">
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <div class="form-group">
                                                                <div class="col-md-8">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            
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
								  <div class="col-md-3"><h3>Persediaan Barang</h3></div>
								</div>
									<div class="form-group">
									<br>
									<br>
									</div>
								
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="control-label col-md-4" for="program">Persediaan Barang</label>
                                                     <div class="form-group">
                                                        <div class="col-md-8">
                                                          <button type="button" class=" btn blue" id="add_fasilitas"><i class="fa fa-plus"></i> Tambah Persediaan Barang</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<br>
									<br>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                 <table id="tabel_fasilitas" class="table table-striped table-bordered table-hover table-full-width">
                                                                <thead>
                                                                    <th>Tipe/Jenis Senjata</th>
                                                                    <th>Jumlah Pucuk</th>
																	<th>BP Pucuk</th>
																	<th>Arsenal Siap</th>
																	<th>Arsenal Tidak Siap</th>
																	<th>Satkai Siap</th>
																	<th>Satkai Tidak Siap</th>
																	<th>Tanggal</th>
                                                                    <th>Aksi</th>
                                                                </thead>
																 <tbody>
                                                                        <?php
                                                                        $i = 0;
                                                                        foreach ($detail_amunisi_al as $val) {
                                                                            $i++;
                                                                            ?>
                                                                            <!-- update dari tabel -->
                                                                            <tr>
                                                                                <td width="25%">
                                                                                    <select class="form-control" tabindex="1" name="JENIS_SENJATA[]">
                                                                                        <option value="" disabled>Pilih Fasilitas</option>
                                                                                        <?php foreach ($senjata as $value) { ?>
                                                                                            <?php if ($value->id==$val->jenis_senjata ) { ?>
                                                                                                <option value="<?php echo $value->id ?>" selected><?php echo $value->barang ?></option>                                                         
                                                                                            <?php } else { ?>
                                                                                                <option value="<?php echo $value->id ?>"><?php echo $value->barang ?></option>                                                         
                                                                                            <?php } ?>
                                                                                        <?php } ?>
                                                                                    </select>
                                                                                </td>
                                                                                <td width="5%">
                                                                                    <input type="text" name="JUMLAH_PUCUK[]" class="form-control" value="<?php echo $val->jml_barang; ?>"/>
                                                                                </td>
																				<td width="5%">
                                                                                    <input type="text" name="BP_PUCUK[]" class="form-control" value="<?php echo $val->bp_barang; ?>"/>
                                                                                </td>
																				<td width="5%">
                                                                                    <input type="text" name="ARSENAL_SIAP[]" class="form-control" value="<?php echo $val->arsenal_siap; ?>"/>
                                                                                </td>
																				<td>
                                                                                    <input type="text" name="ARSENAL_TDK_SIAP[]" class="form-control" value="<?php echo $val->arsenal_tdk_siap; ?>"/>
                                                                                </td>
																				<td width="5%">
                                                                                    <input type="text" name="SATKAI_SIAP[]" class="form-control" value="<?php echo $val->satkai_siap; ?>"/>
                                                                                </td>
																				<td width="5%">
                                                                                    <input type="text" name="SATKAI_TDK_SIAP[]" class="form-control" value="<?php echo $val->satkai_tdk_siap; ?>"/>
                                                                                </td>
																				<td width="50%">
                                                                                    <input type="text" name="INSERT_DATE[]" class="form-control" value="<?php echo date('Y-m-d'); ?>" readonly />
                                                                                </td>
                                                                                <td width="5%">
                                                                                    <a style="cursor:pointer;" class="btn btn-danger" title="Hapus" id="hapus_fasilitas<?= $i ?>" onclick="Delete_fasilitas(<?= $i ?>)">
                                                                                        <i class="icon-trash"></i> 
                                                                                        Hapus
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                    </tbody>
                                                            </table>
                                            </div>
                                        </div>
                                    </div>
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
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="program">Keterangan</label>
                                                <div class="form-group">
                                                    <div class="col-md-5">
                                                        <input type="text" name="keterangan" id="keterangan" class="form-control" placeholder="Keterangan" value="<?php echo $data->keterangan?>">
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


<script>
	
    var i = 0;
    $("#add_fasilitas").click(function () {
        var JENIS_SENJATA = '<select class="form-control select2me" tabindex="1" name="JENIS_SENJATA[]">\n\
        <option value="" disabled selected>Pilih Senjata</option>\n\
<?php foreach ($senjata as $data) { ?>\n\
                                                                                                    <option value="<?php echo $data->id ?>"><?php echo $data->barang ?></option>\n\
<?php } ?>\n\
                        </select>';
		var JUMLAH_PUCUK  = '<input class="form-control" type="text" name="JUMLAH_PUCUK[]">';
		var BP_PUCUK  			= '<input class="form-control" type="text" name="BP_PUCUK[]">';
		var ARSENAL_SIAP  	= '<input class="form-control" type="text" name="ARSENAL_SIAP[]">';
		var ARSENAL_TDK_SIAP  	= '<input class="form-control" type="text" name="ARSENAL_TDK_SIAP[]">';
		var SATKAI_SIAP  	= '<input class="form-control" type="text" name="SATKAI_SIAP[]">';
		var SATKAI_TDK_SIAP  	= '<input class="form-control" type="text" name="SATKAI_TDK_SIAP[]">';
		var INSERT_DATE  		= '<input class="form-control" type="text" name="INSERT_DATE" value="<?php echo date('Y-m-d') ?>" readonly>';
		$("#tabel_fasilitas").append(
                '<tr>' +
                '<td>' + JENIS_SENJATA + '</td>' +
				'<td>' + JUMLAH_PUCUK + '</td>' +
				'<td>' + BP_PUCUK + '</td>' +
				'<td>' + ARSENAL_SIAP + '</td>' +
				'<td>' + ARSENAL_TDK_SIAP + '</td>' +
				'<td>' + SATKAI_SIAP + '</td>' +
				'<td>' + SATKAI_TDK_SIAP + '</td>' +
				'<td>' + INSERT_DATE + '</td>' +
				
                '<td><a style="cursor:pointer;" class="btn red mini" title="Hapus" id="hapus_fasilitas' + i + '" onclick="Delete_fasilitas(' + i++ + ')"><i class="icon-trash"></i> Hapus</a></td>' +
                '</tr>'
                );
    });
    function Delete_fasilitas(i) {
        var par = $('#hapus_fasilitas' + i).parent().parent(); //tr
        if (confirm('Anda yakin?'))
        {
            par.remove();
        }
        return false;
    }

	</script>
	
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