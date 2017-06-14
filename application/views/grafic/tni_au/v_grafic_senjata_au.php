<!DOCTYPE html>
<html lang="en" class="no-js">
    <?php $this->load->view('v_header') ?>
    <script type="text/javascript">
            $(function () {
                $('#grafic').highcharts({
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Senjata TNI AU'
                    },
                    subtitle: {
                        text: '2015'
                    },
                    xAxis: {
                        categories: [<?php
                            foreach ($barang_all as $brg_all) {
                                foreach ($chart_barang as $key) {
                                    if ($key->id_barang == $brg_all->id) {
                                        echo "'".$brg_all->barang."',";
                                    };
                                }
                            }
                        ?>],
                        title: {
                            text: null
                        }
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Jumlah (Persediaan + Pemakaian)',
                            align: 'high'
                        },
                        labels: {
                            overflow: 'justify'
                        }
                    },
                    tooltip: {
                        valueSuffix: ' Unit'
                    },
                    plotOptions: {
                        bar: {
                            dataLabels: {
                                enabled: true
                            }
                        }
                    },
                    credits: {
                        enabled: false
                    },
                    series: [{
                        name: 'Baik',
                        data: [<?php
                            foreach ($chart_barang as $key) {
                                echo "".$key->baik.",";
                            }
                        ?>]
                    }, {
                        name: 'Rusak Ringan',
                        data: [<?php
                            foreach ($chart_barang as $key) {
                                echo "".$key->rusak_ringan.",";
                            }
                        ?>]
                    }, {
                        name: 'Rusak Berat',
                        data: [<?php
                            foreach ($chart_barang as $key) {
                                echo "".$key->rusak_berat.",";
                            }
                        ?>]
                    }]
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
                                <i class="icon-bar-chart"></i>
                                <a href="#">Grafic</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="#">Senjata</a>
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
                    <!-- ISI -->
                    <form method="POST" action="<?php echo base_url(); ?>c_grafic/show_senjata_au" role="form">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="form-group">
                                <div class="row">
                                    <!-- /.col-md-4 -->
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                            <label class="control-label col-md-2">Jenis</label>
                                            </span>
                                            <select class="form-control" name="jenis" id="jenis" onchange="tmplfungsi()">
                                                <option value="">Pilih Jenis</option>
                                                <?php
                                                    foreach ($jenis as $value) {
                                                        ?>
                                                            <option value="<?php echo $value->id; ?>"><?php echo $value->jenis; ?></option>
                                                        <?php
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <!-- /input-group -->
                                    </div>
                                    <!-- /.col-md-4 -->
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                            <label class="control-label col-md-2">Fungsi</label>
                                            </span>
                                            <select class="form-control" name="fungsi" id="fungsi">
                                                <option>Pilih Jenis Dahulu</option>
                                            </select>
                                        </div>
                                        <!-- /input-group -->
                                    </div>
                                    <!-- /.col-md-4 -->
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                            <label class="control-label col-md-2">Tahun</label>
                                            </span>
                                            <select class="form-control" name="tahun" id="tahun">
                                                <option value="">Pilih Tahun</option>
                                                <?php
                                                    foreach ($tahun as $value) {
                                                        ?>
                                                            <option value="<?php echo $value->tahun; ?>"><?php echo $value->tahun; ?></option>
                                                        <?php
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <!-- /input-group -->
                                    </div>
                                    <!-- /.col-md-4 -->
                                    <div class="col-md-2">
                                        <div class="input-group">
                                            <button type="submit" class="btn green"> View Chart </button>
                                        </div>
                                        <!-- /input-group -->
                                    </div>
                                    <!-- /.col-md-4 -->
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <?php if ($view_chart) { ?>
                            <div id="grafic"></div>
                            <?php } ?>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                    </form>
                    <!-- END ISI -->
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
                url:"<?php echo base_url(); ?>c_grafic/get_fungsi/"+kdjenis+"",success:function(response){
                    $("#fungsi").html(response);
                },
                dataType:"html"
            });
            return false;
        }
    </script>
</html>