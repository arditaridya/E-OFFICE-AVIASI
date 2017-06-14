<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>ASET TANAH | <?php echo $main_menu ?></title>
        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/global/img/favicon.ico" type="image/x-icon"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
         <!--<script src="<?php echo base_url() ?>assets/global/plugins/pace/pace.min.js" type="text/javascript"></script>-->
        <script src="<?php echo base_url() ?>assets/global/plugins/pace/pace.min_2.js" type="text/javascript"></script>
        <link href="<?php echo base_url() ?>assets/global/plugins/pace/themes/pace-theme-flash.css" rel="stylesheet" type="text/css"/> 
        <link href="<?php echo base_url() ?>assets/global/fonts/fonts.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
        <link href="<?php echo base_url() ?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css"/>
        <!--<link href="<?php echo base_url() ?>assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>-->
        <!-- END PAGE LEVEL PLUGIN STYLES -->
        <!-- BEGIN PAGE STYLES -->
        <link href="<?php echo base_url() ?>assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
        <!-- END PAGE STYLES -->
        <!-- BEGIN THEME STYLES -->
        <link href="<?php echo base_url() ?>assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
        <link id="style_color" href="<?php echo base_url() ?>assets/admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
        <!-- END THEME STYLES -->
        <script src="<?php echo base_url() ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/pages/scripts/jssor.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/pages/scripts/jssor.slider.js"></script>


        <script>
            jQuery(document).ready(function ($) {

                var _SlideshowTransitions = [
                    //Fade
                    {$Duration: 1200, $Opacity: 2}
                ];

                var options = {
                    $AutoPlay: true, //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                    $AutoPlaySteps: 1, //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                    $AutoPlayInterval: 3000, //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                    $PauseOnHover: 1, //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                    $ArrowKeyNavigation: true, //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                    $SlideDuration: 500, //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                    $MinDragOffsetToSlide: 20, //[Optional] Minimum drag offset to trigger slide , default value is 20
                    //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                    //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                    $SlideSpacing: 0, //[Optional] Space between each slide in pixels, default value is 0
                    $DisplayPieces: 1, //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                    $ParkingPosition: 0, //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                    $UISearchMode: 1, //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                    $PlayOrientation: 1, //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                    $DragOrientation: 0, //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                    $SlideshowOptions: {//[Optional] Options to specify and enable slideshow or not
                        $Class: $JssorSlideshowRunner$, //[Required] Class to create instance of slideshow
                        $Transitions: _SlideshowTransitions, //[Required] An array of slideshow transitions to play slideshow
                        $TransitionsOrder: 1, //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                        $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                    },
                    $BulletNavigatorOptions: {//[Optional] Options to specify and enable navigator or not
                        $Class: $JssorBulletNavigator$, //[Required] Class to create navigator instance
                        $ChanceToShow: 2, //[Required] 0 Never, 1 Mouse Over, 2 Always
                        $AutoCenter: 1, //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                        $Steps: 1, //[Optional] Steps to go for each navigation request, default value is 1
                        $Lanes: 1, //[Optional] Specify lanes to arrange items, default value is 1
                        $SpacingX: 10, //[Optional] Horizontal space between each item in pixel, default value is 0
                        $SpacingY: 10, //[Optional] Vertical space between each item in pixel, default value is 0
                        $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                    },
                    $ArrowNavigatorOptions: {
                        $Class: $JssorArrowNavigator$, //[Requried] Class to create arrow navigator instance
                        $ChanceToShow: 2, //[Required] 0 Never, 1 Mouse Over, 2 Always
                        $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                    }
                };
                var jssor_slider1 = new $JssorSlider$("slider1_container", options);

                //responsive code begin
                //you can remove responsive code if you don't want the slider scales while window resizes
                function ScaleSlider() {
                    var parentWidth = $('#slider1_container').parent().width();
                    if (parentWidth)
                        jssor_slider1.$ScaleWidth(parentWidth);
                    else
                        window.setTimeout(ScaleSlider, 30);
                }
                ScaleSlider();

                $(window).bind("load", ScaleSlider);
                $(window).bind("resize", ScaleSlider);
                $(window).bind("orientationchange", ScaleSlider);
                //responsive code end
            });
        </script>
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
    <!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
    <!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
    <!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
    <!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
    <!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
    <!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
    <!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
    <!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
    <body class="page-header-fixed page-quick-sidebar-over-content page-full-width">
        <!-- BEGIN HEADER -->
        <div class="container-fluid">
            <div class="row">
                <!--                <a href="#">
                                    <div style="padding-left: 0px"><img src="<?php echo base_url() ?>assets/admin/layout/img/header_Potdirga.jpg" class="img-responsive" style="width: 100%; height: 150px"></div>
                                </a>-->
                <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 1366px; height: 150px; overflow: hidden; ">

                    <!-- Loading Screen -->
                    <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                        <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                             background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
                        </div>
                        <div style="position: absolute; display: block; background: url(<?php echo base_url() ?>assets/admin/layout/img/loading.gif) no-repeat center center;
                             top: 0px; left: 0px;width: 100%;height:100%;">
                        </div>
                    </div>

                    <!-- Slides Container -->
                    <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1366px; height: 125px; overflow: hidden;">
                        <!-- <div>
                            <img u="image" src="<?php echo base_url() ?>assets/admin/layout/img/header1.jpg" />
                        </div>
                         <div>
                            <img u="image" src="<?php echo base_url() ?>assets/admin/layout/img/header2.jpg" />
                        </div>
                        <div>
                            <img u="image" src="<?php echo base_url() ?>assets/admin/layout/img/header3.jpg" />
                        </div> 
						-->
                    </div>

                    <!-- Bullet Navigator Skin Begin -->
                    <style>
                        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
                            /*background: url(<?php echo base_url() ?>assets/admin/layout/img/b11.png) no-repeat;*/
                            overflow: hidden;
                            cursor: pointer;
                        }

                        .jssorb05 div {
                            background-position: -7px -7px;
                        }

                        .jssorb05 div:hover, .jssorb05 .av:hover {
                            background-position: -37px -7px;
                        }

                        .jssorb05 .av {
                            background-position: -67px -7px;
                        }

                        .jssorb05 .dn, .jssorb05 .dn:hover {
                            background-position: -97px -7px;
                        }
                    </style>
                    <!-- bullet navigator container -->
                    <div u="navigator" class="jssorb05" style="position: absolute; bottom: 16px; right: 6px;">
                        <!-- bullet navigator item prototype -->
                        <div u="prototype" style="POSITION: absolute; WIDTH: 16px; HEIGHT: 16px;"></div>
                    </div>
                    <!-- Bullet Navigator Skin End -->
                    <!-- Arrow Navigator Skin Begin -->
                    <style>
                        /* jssor slider arrow navigator skin 12 css */
                        /*
                        .jssora12l              (normal)
                        .jssora12r              (normal)
                        .jssora12l:hover        (normal mouseover)
                        .jssora12r:hover        (normal mouseover)
                        .jssora12ldn            (mousedown)
                        .jssora12rdn            (mousedown)
                        */
                        .jssora12l, .jssora12r, .jssora12ldn, .jssora12rdn {
                            position: absolute;
                            cursor: pointer;
                            display: block;
                            /*background: url(<?php echo base_url() ?>assets/admin/layout/img/a14.png) no-repeat;*/
                            overflow: hidden;
                        }

                        .jssora12l {
                            background-position: -16px -37px;
                        }

                        .jssora12r {
                            background-position: -75px -37px;
                        }

                        .jssora12l:hover {
                            background-position: -136px -37px;
                        }

                        .jssora12r:hover {
                            background-position: -195px -37px;
                        }

                        .jssora12ldn {
                            background-position: -256px -37px;
                        }

                        .jssora12rdn {
                            background-position: -315px -37px;
                        }
                    </style>
                    <!-- Arrow Left -->
                    <span u="arrowleft" class="jssora12l" style="width: 30px; height: 46px; top: 50px; left: 0px;">
                    </span>
                    <!-- Arrow Right -->
                    <span u="arrowright" class="jssora12r" style="width: 30px; height: 46px; top: 50px; right: 0px">
                    </span>
                    <!-- Arrow Navigator Skin End -->
                    <a style="display: none" href="http://www.jssor.com">jQuery Slider</a>
                </div>
            </div>
        </div>
        <div class="page-header navbar navbar-static-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="<?php echo site_url('main_menu') ?>">
                        <img src="<?php echo base_url() ?>assets/admin/layout/img/logo.png" alt="logo" class="logo-default"/>
                    </a>
                    <div class="menu-toggler sidebar-toggler hide">
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN HORIZANTAL MENU -->
                <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
                <!-- DOC: This is desktop version of the horizontal menu. The mobile version is defined(duplicated) sidebar menu below. So the horizontal menu has 2 seperate versions -->
                <div class="hor-menu hidden-sm hidden-xs">
                    <ul class="nav navbar-nav">
                        <li class="classic-menu-dropdown active">
                            <a href="#">
                                Menu Utama <span class="selected">
                                </span>
                            </a>
                        </li>
                        <?php if ($this->session->userdata('group_id') == 1 or $this->session->userdata('group_id') == 2 or $this->session->userdata('group_id') == 4) { ?>
                            <li class="classic-menu-dropdown">
                                <a href="<?php echo site_url('c_kesatuan') ?>">
                                    KESATUAN 
                                </a>
                            </li>
                        <?php } ?>
                        <?php if ($this->session->userdata('group_id') == 1 or $this->session->userdata('group_id') == 2 or $this->session->userdata('group_id') == 5) { ?>
                            <li class="classic-menu-dropdown">
                                <a href="<?php echo site_url('sdab') ?>">
                                    LAPORAN
                                </a>
                            </li>
                        <?php } ?>
                        <?php if ($this->session->userdata('group_id') == 1 or $this->session->userdata('group_id') == 2 or $this->session->userdata('group_id') == 6) { ?>
                            <li class="classic-menu-dropdown">
                                <a href="<?php echo site_url('saprana') ?>">
                                    PENCARIAN
                                </a>
                            </li>
                        <?php } ?>
                        <?php if ($this->session->userdata('group_id') == 1 or $this->session->userdata('group_id') == 2) { ?>
                            <li class="classic-menu-dropdown <?php
                            if ($this->uri->segment(1) == 'setting') {
                                echo "active";
                            }
                            ?>">
                                <a href="<?php echo site_url('setting') ?>">
                                    Setting <span class="selected"></span>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <!-- END HORIZANTAL MENU -->
                <!-- BEGIN HEADER SEARCH BOX -->
                <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
<!--                <form class="search-form" action="extra_search.html" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..." name="query">
                        <span class="input-group-btn">
                            <a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
                        </span>
                    </div>
                </form>-->
                <!-- END HEADER SEARCH BOX -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
                           
                        </li>
                        <!-- END TODO DROPDOWN -->
                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-user">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle" src="<?php echo base_url() ?>assets/admin/layout/img/avatar3_small.jpg"/>
                                <span class="username username-hide-on-mobile">
                                    <?php echo strtoupper($this->session->userdata('user_name')) ?> </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="<?php echo site_url('lock_screen') ?>">
                                        <i class="icon-lock"></i> Lock Screen </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('logout') ?>">
                                        <i class="icon-key"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <div class="clearfix">
        </div>
        <!-- BEGIN MENU RESPONSIVE -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN HORIZONTAL RESPONSIVE MENU -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <ul class="page-sidebar-menu" data-slide-speed="200" data-auto-scroll="true">
                        <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                        <!-- DOC: This is mobile version of the horizontal menu. The desktop version is defined(duplicated) in the header above -->
                        <li class="sidebar-search-wrapper">
                            <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                            <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                            <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                            <form class="sidebar-search sidebar-search-bordered" action="extra_search.html" method="POST">
                                <a href="javascript:;" class="remove">
                                    <i class="icon-close"></i>
                                </a>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn submit"><i class="icon-magnifier"></i></button>
                                    </span>
                                </div>
                            </form>
                            <!-- END RESPONSIVE QUICK SEARCH FORM -->
                        </li>
                        <li class="active">
                            <a href="#">
                                Menu Utama <span class="selected">
                                </span>
                            </a>
                        </li>
                        <?php if ($this->session->userdata('group_id') == 1 or $this->session->userdata('group_id') == 2 or $this->session->userdata('group_id') == 4) { ?>
                            <li>
                                <a href="<?php echo site_url('sdm') ?>">
                                    KESATUAN
                                </a>
                            </li>
                        <?php } ?>
                        <?php if ($this->session->userdata('group_id') == 1 or $this->session->userdata('group_id') == 2 or $this->session->userdata('group_id') == 5) { ?>
                            <li>
                                <a href="<?php echo site_url('sdab') ?>">
                                    LAPORAN
                                </a>
                            </li>
                        <?php } ?>
                        <?php if ($this->session->userdata('group_id') == 1 or $this->session->userdata('group_id') == 2 or $this->session->userdata('group_id') == 6) { ?>
                            <li>
                                <a href="<?php echo site_url('saprana') ?>">
                                    PENCARIAN
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <!-- END HORIZONTAL RESPONSIVE MENU -->
            </div>
            <!-- END MENU RESPONSIVE -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <div class="page-content">

                    <!-- BEGIN PAGE HEADER-->
                    <h3 class="page-title">
                        SELAMAT DATANG DI APLIKASI ASET TANAH DISFASKONAU
                    </h3>
                    <div class="page-bar">

                    </div>
                    <!-- END PAGE HEADER-->
                    <br />
                    <br />
                    <!-- BEGIN DASHBOARD STATS -->
                    <div class="row">
                        <?php if ($this->session->userdata('group_id') == 1 or $this->session->userdata('group_id') == 2) { ?>
                            <div class="col-lg-4 col-sm-6 col-xs-12">
                                <div class="dashboard-stat">
                                    <div class="details">
                                        <a class="more" href="<?php echo site_url('c_kesatuan') ?>">
                                            <img src="<?php echo base_url() ?>assets/global/img/07.png" class="img-responsive" style="width: 300px; height: 198px">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-xs-12">
                                <div class="dashboard-stat">
                                    <div class="details">
                                        <a class="more" href="<?php echo site_url('sdab') ?>">
                                            <img src="<?php echo base_url() ?>assets/global/img/06.png" class="img-responsive" style="width: 300px; height: 198px">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-xs-12">
                                <div class="dashboard-stat">
                                    <div class="details">
                                        <a class="more" href="<?php echo site_url('saprana') ?>">
                                            <img src="<?php echo base_url() ?>assets/global/img/05.png" class="img-responsive" style="width: 300px; height: 198px">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <?php if ($this->session->userdata('group_id') == 4) { ?>
                            <div class="col-lg-3" style="float: none; margin-left: auto; margin-right: auto; text-align: center;">
                                <div class="dashboard-stat blue-madison">
                                    <div class="details">
                                        <a class="more" href="<?php echo site_url('c_kesatuan') ?>">
                                            <img src="<?php echo base_url() ?>assets/global/img/SDM.png" class="img-responsive" style="width: 300px; height: 198px">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <?php if ($this->session->userdata('group_id') == 5) { ?>
                            <div class="col-lg-3" style="float: none; margin-left: auto; margin-right: auto; text-align: center;">
                                <div class="dashboard-stat blue-madison">
                                    <div class="details">
                                        <a class="more" href="<?php echo site_url('sdab') ?>">
                                            <img src="<?php echo base_url() ?>assets/global/img/SDAB.png" class="img-responsive" style="width: 300px; height: 198px">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <?php if ($this->session->userdata('group_id') == 6) { ?>
                            <div class="col-lg-3" style="float: none; margin-left: auto; margin-right: auto; text-align: center;">
                                <div class="dashboard-stat blue-madison">
                                    <div class="details">
                                        <a class="more" href="<?php echo site_url('saprana') ?>">
                                            <img src="<?php echo base_url() ?>assets/global/img/SP.png" class="img-responsive" style="width: 300px; height: 198px">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <!-- END DASHBOARD STATS -->
                </div>
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner">
                <?php echo date('Y') ?> &copy; SISTEM INFORMASI ASET TANAH
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- END FOOTER -->
        <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- BEGIN CORE PLUGINS -->
        <!--[if lt IE 9]>
        <script src="<?php echo base_url() ?>assets/global/plugins/respond.min.js"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/excanvas.min.js"></script> 
        <![endif]-->
        <script src="<?php echo base_url() ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
        <!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
        <script src="<?php echo base_url() ?>assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url() ?>assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
        <script src="<?php echo base_url() ?>assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/jquery-easypiechart/jquery.easypiechart.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url() ?>assets/global/scripts/metronic.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/admin/pages/scripts/index.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/admin/pages/scripts/tasks.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <script>
            jQuery(document).ready(function () {
                Metronic.init(); // init metronic core components
                Layout.init(); // init current layout
                QuickSidebar.init(); // init quick sidebar
                Demo.init(); // init demo features // initlayout and core plugins
                Index.init();
                Index.initJQVMAP(); // init index page's custom scripts
                Index.initCalendar(); // init index page's custom scripts
                Index.initCharts(); // init index page's custom scripts
                Index.initChat();
                Index.initMiniCharts();
                Index.initDashboardDaterange();
                Tasks.initDashboardWidget();
            });
        </script>
        <!-- END JAVASCRIPTS -->
    </body>
    <!-- END BODY -->
</html>