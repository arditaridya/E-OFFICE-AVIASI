<!DOCTYPE html>
<html lang="en" class="no-js">
    <?php $this->load->view('v_header') ?>
    <script>
        $(function () {
            $('#container').highcharts({
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false
                },
                title: {
                    text: 'Persentase Personil Dunia Penerbangan'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            style: {
                                width: '100px'
                            },
                            enabled: true,
                            color: '#000000',
                            maxStaggerLines: 1,
                            connectorColor: '#000000',
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %'

                        },
                    }
                },
                series: [{
                        type: 'pie',
                        name: 'Browser share',
                        data: [
<?php foreach ($pie_chart as $value) { ?>
                                ['Dalam Penerbangan', <?php echo $value->persen_dalam; ?>],
                                ['Di Luar Penerbangan', <?php echo $value->persen_luar; ?>],
<?php } ?>
                        ]
                    }]
            });
        });</script>
    <body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo page-container-bg-solid">

        <?php $this->load->view('v_horizontal_menu') ?>

        <div class="clearfix">
        </div>

        <!-- BEGIN CONTAINER -->
        <div class="page-container">

            <?php $this->load->view('v_sidebar') ?>

            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>
                                <a href="<?php echo site_url('main_menu/admin') ?>">Menu Utama</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <b>Kotama</b>
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
                    <h3 class="page-title">
                        Kotama</small>
                    </h3>
                    <!-- END PAGE HEADER-->

                    <!-- END BORDERED TABLE PORTLET-->

                    <br />
                    <!-- BEGIN DASHBOARD STATS -->
                    <div class="row">
                        <?php if ($this->session->userdata('level') == 1 or $this->session->userdata('level') == 2 or $this->session->userdata('level') == 0) { ?>
                            <?php 
							$groupz = $this->session->userdata('grup_user');
			$query = $this->db->query("select 
											*
										from
											kotama
										order by id asc
					
					")->result();
					
					if($groupz == '1'){ 
						foreach ($query as $row) { ?>
							
						<div class="col-lg-2 col-sm-3 col-xs-6">
                                <div class="dashboard-stat">
                                    <div class="details">
                                        <a class="more" href="<?php echo site_url('c_kesatuan/lanud/'.$row->id) ?>">
                                            <img src="<?php echo base_url() ?>assets/upload/kotama/<?php echo $row->photo; ?>" class="img-responsive" style="width: 150px; height: 158px">
											<center><b><?php echo $row->kotama; ?></b></center>
                                        </a>
                                    </div>
                                </div>
                            </div>
						<?php } ?>
					
					
					<?php }else if($groupz == '2'){
						$kotamaq = $this->session->userdata('kotama');
						$lanudq = $this->session->userdata('lanud');
						redirect('data_aset/index/lanud_id_'.$lanudq, 'refresh');
					
					
					}else if($groupz == '3'){
						$lanudq = $this->session->userdata('lanud');
			
						redirect('data_aset/index/lanud_id_'.$lanudq, 'refresh');
					}
					?>
					
					
					<!--
							<div class="col-lg-2 col-sm-3 col-xs-6">
                                <div class="dashboard-stat">
                                    <div class="details">
                                        <a class="more" href="<?php echo site_url('c_kesatuan/lanud/1') ?>">
                                            <img src="<?php echo base_url() ?>assets/global/img/01.gif" class="img-responsive" style="width: 150px; height: 158px">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-3 col-xs-6">
                                <div class="dashboard-stat">
                                    <div class="details">
                                        <a class="more" href="<?php echo site_url('c_kesatuan/lanud/2') ?>">
                                            <img src="<?php echo base_url() ?>assets/global/img/03.gif" class="img-responsive" style="width: 150px; height: 158px">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-3 col-xs-6">
                                <div class="dashboard-stat">
                                    <div class="details">
                                        <a class="more" href="<?php echo site_url('c_kesatuan/lanud/3') ?>">
                                            <img src="<?php echo base_url() ?>assets/global/img/04.gif" class="img-responsive" style="width: 150px; height: 158px">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-3 col-xs-6">
                                <div class="dashboard-stat">
                                    <div class="details">
                                        <a class="more" href="<?php echo site_url('c_kesatuan/lanud/4') ?>">
                                            <img src="<?php echo base_url() ?>assets/global/img/02.gif" class="img-responsive" style="width: 150px; height: 158px">
                                        </a>
                                    </div>
                                </div>
                            </div>
							<div class="col-lg-2 col-sm-3 col-xs-6">
                                <div class="dashboard-stat">
                                    <div class="details">
                                        <a class="more" href="<?php echo site_url('c_kesatuan/lanud/5') ?>">
                                            <img src="<?php echo base_url() ?>assets/global/img/05.gif" class="img-responsive" style="width: 150px; height: 158px">
                                        </a>
                                    </div>
                                </div>
                            </div>
							<div class="col-lg-2 col-sm-3 col-xs-6">
                                <div class="dashboard-stat">
                                    <div class="details">
                                        <a class="more" href="<?php echo site_url('c_kesatuan/lanud/6') ?>">
                                            <img src="<?php echo base_url() ?>assets/global/img/06.gif" class="img-responsive" style="width: 150px; height: 158px">
                                        </a>
                                    </div>
                                </div>
                            </div>
							-->
                        <?php } ?>
                    </div>
                    <!-- END DASHBOARD STATS -->

                </div>
            </div>
        </div>
        <!-- END CONTAINER -->
        <?php $this->load->view('v_footer') ?>
    </body>
    <!-- END BODY -->
</html>
