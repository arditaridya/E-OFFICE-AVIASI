<!DOCTYPE html>
<html lang="en" class="no-js">
    <?php $this->load->view('v_header') ?>
    <style>
.dataTables_filter { display: none;}
    </style>
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
                                <a href="#">TNI AD</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="<?php echo site_url('cetak_tniad/lap_senjata'); ?>">Senjata</a>
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

                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-toolbar">
                                <!-- BEGIN FILTER -->
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                <label class="control-label col-md-2">Kesatuan</label>
                                                </span>
                                                <select class="form-control" name="kesatuan" id="kesatuan">
                                                    <option value="">Pilih Kesatuan</option>
                                                    <?php foreach ($kesatuan as $kesat) {
                                                        ?>
                                                        <option value="<?php echo $kesat->id; ?>"><?php echo $kesat->kesatuan; ?></option>
                                                        <?php
                                                    } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                <label class="control-label col-md-2">Jenis</label>
                                                </span>
                                                <select class="form-control" name="jenis" id="jenis" onchange="tmplfungsi()">
                                                    <option value="">Pilih Jenis</option>
                                                    <?php foreach ($jenis_senjata as $jns){
                                                        ?>
                                                        <option value="<?php echo $jns->id; ?>"><?php echo $jns->id; ?> - <?php echo $jns->jenis; ?></option>
                                                        <?php
                                                    } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                <label class="control-label col-md-2">Fungsi</label>
                                                </span>
                                                <select class="form-control" name="fungsi" id="fungsi" onchange="tmplbarang()">
                                                    <option>Pilih Jenis Dahulu</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                <label class="control-label col-md-2">Barang</label>
                                                </span>
                                                <select class="form-control" name="barang" id="barang">
                                                    <option value="">Pilih Fungsi Dahulu</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="input-group date-picker input-daterange" data-date-format="yyyy-mm-dd">
                                                <span class="input-group-addon"> Rentang Tanggal </span>
                                                <input type="text" class="form-control" name="tgl_from">
                                                <span class="input-group-addon"> s/d </span>
                                                <input type="text" class="form-control" name="tgl_to">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="input-group">
                                                <button type="submit" class="btn green"> View <i class="fa fa-eye"></i> </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END FILTER -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet box red">
                                <div class="portlet-title">
                                    <div class="caption">
                                        Laporan Senjata TNI AD
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse">
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="btn-group">
                                                        <a href="<?php echo site_url('cetak_tniad/cetaksenjataad') ?>" target="_blank">
                                                            <button class="btn green">
                                                                Print <i class="fa fa-print"></i>
                                                            </button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END FILTER -->
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            
                                        </div>
                                    </div>
                                    <table class="table table-striped table-bordered table-hover" id="sample_12">
                                        <thead>
                                            <tr>
                                                <th>
                                                    No
                                                </th>
                                                <th>
                                                    Kesatuan
                                                </th>
                                                <th>
                                                    Jenis
                                                </th>
                                                <th>
                                                    Fungsi
                                                </th>
                                                <th>
                                                    Barang
                                                </th>
                                                <th>
                                                    Pemakaian B
                                                </th>
                                                <th>
                                                    Persediaan B
                                                </th>
                                                <th>
                                                    Pemakaian RR
                                                </th>
                                                <th>
                                                    Persediaan RR
                                                </th>
                                                <th>
                                                    Pemakaian RB
                                                </th>
                                                <th>
                                                    Persediaan RB
                                                </th>
                                                <th>
                                                    Tanggal Input
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($list_senjata as $data) {
                                                ?>
                                                <tr>
                                                    <td>
                                                        <?php
                                                            echo $no;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            foreach ($kesatuan as $kesatuan_res) {
                                                                if ($kesatuan_res->id == $data->id_kes) {
                                                                    echo $kesatuan_res->kesatuan;
                                                                }
                                                            }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            foreach ($jenis_senjata as $jenis_res) {
                                                                if ($jenis_res->id == $data->id_jenis) {
                                                                    echo $jenis_res->jenis;
                                                                }
                                                            }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            foreach ($fungsi_senjata as $fungsi_res) {
                                                                if ($fungsi_res->id == $data->id_fungsi) {
                                                                    echo $fungsi_res->fungsi;
                                                                }
                                                            }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            foreach ($barang_senjata as $barang_res) {
                                                                if ($barang_res->id == $data->id_barang) {
                                                                    echo $barang_res->barang;
                                                                }
                                                            }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            echo $data->b_kia;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            echo $data->b_dia;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            echo $data->rr_kia;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            echo $data->rr_dia;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            echo $data->rb_kia;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            echo $data->rb_dia;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            echo $data->tanggal_input;
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
    <script type="text/javascript">
        function tmplfungsi(){
            kdjenis = document.getElementById("jenis").value;
            $.ajax({
                url:"<?php echo base_url(); ?>cetak_tniad/get_fungsi/"+kdjenis+"",success:function(response){
                    $("#fungsi").html(response);
                },
                dataType:"html"
            });
            return false;
        }

        function tmplbarang(){
            kdfungsi = document.getElementById("fungsi").value;
            $.ajax({
                url:"<?php echo base_url(); ?>cetak_tniad/get_barang/"+kdfungsi+"",success:function(response){
                    $("#barang").html(response);
                },
                dataType:"html"
            });
            return false;
        }
    </script>
</html>