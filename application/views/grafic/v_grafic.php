<!DOCTYPE html>
<html lang="en" class="no-js">
    <?php $this->load->view('v_header') ?>
    <script type="text/javascript">
        $(function () {
            // Create the chart
            $('#grafic').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: '<?php echo "$judul"; ?>'
                },
                subtitle: {
                    text: 'Click the columns to view details.'
                },
                xAxis: {
                    type: 'category'
                },
                yAxis: {
                    title: {
                        text: 'Jumlah Total'
                    }

                },
                legend: {
                    enabled: false
                },
                plotOptions: {
                    series: {
                        borderWidth: 0,
                        dataLabels: {
                            enabled: true,
                            format: '{point.y:.1f}'
                        }
                    }
                },

                tooltip: {
                    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}</b><br/>'
                },

                series: [{
                    name: "Kesatuan",
                    colorByPoint: true,
                    data: [{
                        name: "TNI AD",
                        color: "green",
                        y: <?php echo $tni_ad; ?>,
                        drilldown: "TNI Angkatan Darat"
                    }, {
                        name: "TNI AL",
                        color: "blue",
                        y: <?php echo $tni_al; ?>,
                        drilldown: "TNI AL"
                    }, {
                        name: "TNI AU",
                        color: "aqua",
                        y: <?php echo $tni_au; ?>,
                        drilldown: "TNI AU"
                    }]
                }],
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
                                <a href="<?php echo site_url('c_grafic') ?>">Grafic</a>
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
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="form-group">
                                <form method="POST" class="horizontal-form" action="<?php echo base_url(); ?>c_grafic/view_chart" role="form">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                            <label class="control-label col-md-2">Komoditi</label>
                                            </span>
                                            <select class="form-control" name="komoditi" id="komoditi">
                                                <option value="">Pilih Komoditi</option>
                                                <option value="senjata" <?php if ($kmdt=='senjata') { echo 'selected'; } ?>>Senjata</option>
                                                <option value="amunisi" <?php if ($kmdt=='amunisi') { echo 'selected'; } ?>>Amunisi</option>
                                                <option value="kapal" <?php if ($kmdt=='kapal') { echo 'selected'; } ?>>Kapal</option>
                                                <option value="ranpur" <?php if ($kmdt=='ranpur') { echo 'selected'; } ?>>Ranpur</option>
                                                <option value="pesawat" <?php if ($kmdt=='pesawat') { echo 'selected'; } ?>>Pesawat</option>
                                                <option value="alpalsus" <?php if ($kmdt=='alpalsus') { echo 'selected'; } ?>>Alpalsus</option>
                                                <option value="aloptik" <?php if ($kmdt=='aloptik') { echo 'selected'; } ?>>Aloptik</option>
                                                <option value="ranmor" <?php if ($kmdt=='ranmor') { echo 'selected'; } ?>>Ranmor</option>
                                                <option value="senjata_pesawat" <?php if ($kmdt=='senjata_pesawat') { echo 'selected'; } ?>>Senjata Pesawat</option>
                                                <option value="amunisi_pesawat" <?php if ($kmdt=='amunisi_pesawat') { echo 'selected'; } ?>>Amunisi Pesawat</option>
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
                                                <option value="2013"  <?php if ($thn==2013) { echo 'selected'; } ?>>2013</option>
                                                <option value="2014" <?php if ($thn==2014) { echo 'selected'; } ?>>2014</option>
                                                <option value="2015" <?php if ($thn==2015) { echo 'selected'; } ?>>2015</option>
                                            </select>
                                        </div>
                                        <!-- /input-group -->
                                    </div>
                                    <!-- /.col-md-4 -->
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                            <label class="control-label col-md-2">Bulan</label>
                                            </span>
                                            <select class="form-control" name="bulan" id="bulan">
                                                <option value="">Pilih Bulan</option>
                                                <option value="1" <?php if ($bln==1) { echo 'selected'; } ?>>Januari</option>
                                                <option value="2" <?php if ($bln==2) { echo 'selected'; } ?>>Februari</option>
                                                <option value="3" <?php if ($bln==3) { echo 'selected'; } ?>>Maret</option>
                                                <option value="4" <?php if ($bln==4) { echo 'selected'; } ?>>April</option>
                                                <option value="5" <?php if ($bln==5) { echo 'selected'; } ?>>Mei</option>
                                                <option value="6" <?php if ($bln==6) { echo 'selected'; } ?>>Juni</option>
                                                <option value="7" <?php if ($bln==7) { echo 'selected'; } ?>>Juli</option>
                                                <option value="8" <?php if ($bln==8) { echo 'selected'; } ?>>Agustus</option>
                                                <option value="9" <?php if ($bln==9) { echo 'selected'; } ?>>September</option>
                                                <option value="10" <?php if ($bln==10) { echo 'selected'; } ?>>Oktober</option>
                                                <option value="11" <?php if ($bln==11) { echo 'selected'; } ?>>November</option>
                                                <option value="12" <?php if ($bln==12) { echo 'selected'; } ?>>Desember</option>
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
                                </form>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                    <?php if ($grafic) { ?>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div id="grafic"></div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                    <?php } ?>
                    <!-- END ISI -->
                </div>
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <?php $this->load->view('v_footer') ?>
    </body>
    <!-- END BODY -->
</html>