<!DOCTYPE html>
<html lang="en" class="no-js">
    <?php $this->load->view(v_header) ?>
	
	<script type="text/javascript">window.onerror = function(){return true;};</script>

<!-- Copy to the head section of your webpage -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js2/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js2/mhgallery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js2/initgallery.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js2/mhgallery.css" type="text/css" />
    <body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo page-container-bg-solid">
        <?php $this->load->view(v_horizontal_menu) ?>
        <div class="clearfix">
        </div>
		

        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <?php $this->load->view(v_sidebar) ?>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>
                                <a href="#">ASET TANAH</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            
                            
                        </ul>
                        <div class="page-toolbar">
                            <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm btn-default" data-container="body" data-placement="bottom" data-original-title="Kalender">
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
                            <div class="portlet box blue">
                                <div class="portlet-title">
                                    <div class="caption">
                                        ASET TANAH
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse">
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                  
                          <?php foreach($dataper as $value){ ?>         
                                    
									<?php //echo $value->denah;die(); ?>
									
									<div style="text-align:center;">

<!-- Copy to where you want to display the Slideshow -->
<div id="mhgallery">
<style type="text/css"> #mhgallery img { display:none; } </style>
<?php
$perfile = explode(,, $value->denah);
foreach ($perfile as $i => $key){ ?>
	<img src="<?php echo base_url(); ?>assets/upload_denah/<?php echo $key; ?>" title="$key" />

<?php } ?>
<a class="sliderengine" href="http://www.magichtml.com/javascriptslideshow/index.html">Created by JavaScript Slideshow Maker</a>
</div>
<!-- End of Slideshow codes -->

</div>
						  <?php } ?>	
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
        <?php $this->load->view(v_footer) ?>
    </body>
    <!-- END BODY -->
</html>