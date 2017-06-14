<!DOCTYPE html>
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
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/global/plugins/bootstrap-select/bootstrap-select.min.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/global/plugins/select2/select2.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/global/plugins/jquery-multi-select/css/multi-select.css"/>
        <!-- BEGIN THEME STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
        <link href="<?php echo base_url() ?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css"/>
        <!--<link href="<?php echo base_url() ?>assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>-->
        <!-- END PAGE LEVEL PLUGIN STYLES -->
        <!-- BEGIN PAGE STYLES -->
        <link href="<?php echo base_url() ?>assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/global/plugins/jstree/dist/themes/default/style.min.css"/>
        <!-- END PAGE STYLES -->
        <!-- BEGIN THEME STYLES -->
        <link href="<?php echo base_url() ?>assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>assets/admin/layout/css/layout2.css" rel="stylesheet" type="text/css"/>
        <link id="style_color" href="<?php echo base_url() ?>assets/admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
        <!-- END THEME STYLES -->
        <script src="<?php echo base_url() ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/pages/scripts/jssor.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/pages/scripts/jssor.slider.js"></script>


        <script>
            var site_url = "<?php echo site_url(); ?>";
            function MM_openBrWindow(theURL, winName, features) { //v2.0
                window.open(theURL, winName, features);
            }

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
        <style>
            .none {
                display:none;
            }
            .segmented-button {
                padding: 12px;
            }
            .segmented-button input[type="radio"] {
                width: 0px;
                height: 0px;
                display: none !important;
            }

            .segmented-button label {
                display: -moz-inline-box;
                -moz-box-orient: vertical;
                display: inline-block;
                vertical-align: middle;
                *vertical-align: auto;
                -moz-border-radius: 4px;
                -webkit-border-radius: 4px;
                -o-border-radius: 4px;
                -ms-border-radius: 4px;
                -khtml-border-radius: 4px;
                border-radius: 4px;
                text-shadow: white;
                background: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #ffffff), color-stop(100%, #e4e4e4));
                background: -webkit-linear-gradient(#ffffff, #e4e4e4);
                background: -moz-linear-gradient(#ffffff, #e4e4e4);
                background: -o-linear-gradient(#ffffff, #e4e4e4);
                background: -ms-linear-gradient(#ffffff, #e4e4e4);
                background: linear-gradient(#ffffff, #e4e4e4);
                border: 1px solid #b2b2b2;
                color: #666666;
                padding: 5px 24px;
                padding-bottom: 3px;
                font-size: 12px;
                cursor: pointer;
                font-family: Helvetica;
                -moz-border-radius: 0px;
                -webkit-border-radius: 0px;
                -o-border-radius: 0px;
                -ms-border-radius: 0px;
                -khtml-border-radius: 0px;
                border-radius: 0px;
                margin-right: -5px;
            }
            .segmented-button label {
                *display: inline !important;
            }
            .segmented-button label:hover {
                -moz-box-shadow: 0 0 5px 1px rgba(0, 0, 0, 0.1) !important;
                -webkit-box-shadow: 0 0 5px 1px rgba(0, 0, 0, 0.1) !important;
                -o-box-shadow: 0 0 5px 1px rgba(0, 0, 0, 0.1) !important;
                box-shadow: 0 0 5px 1px rgba(0, 0, 0, 0.1) !important;
                color: #333333 !important;
            }
            .segmented-button label:active, .segmented-button label.active {
                background: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #e4e4e4), color-stop(100%, #ffffff)) !important;
                background: -webkit-linear-gradient(#e4e4e4, #ffffff) !important;
                background: -moz-linear-gradient(#e4e4e4, #ffffff) !important;
                background: -o-linear-gradient(#e4e4e4, #ffffff) !important;
                background: -ms-linear-gradient(#e4e4e4, #ffffff) !important;
                background: linear-gradient(#e4e4e4, #ffffff) !important;
            }
            .segmented-button label:disabled, .segmented-button label.disabled {
                background: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #ffffff), color-stop(100%, #efefef)) !important;
                background: -webkit-linear-gradient(#ffffff, #efefef) !important;
                background: -moz-linear-gradient(#ffffff, #efefef) !important;
                background: -o-linear-gradient(#ffffff, #efefef) !important;
                background: -ms-linear-gradient(#ffffff, #efefef) !important;
                background: linear-gradient(#ffffff, #efefef) !important;
                cursor: default !important;
                color: #b2b2b2 !important;
                border-color: #cccccc !important;
                -moz-box-shadow: none !important;
                -webkit-box-shadow: none !important;
                -o-box-shadow: none !important;
                box-shadow: none !important;
            }
            .segmented-button label.first {
                -moz-border-radius-topleft: 4px !important;
                -webkit-border-top-left-radius: 4px !important;
                -o-border-top-left-radius: 4px !important;
                -ms-border-top-left-radius: 4px !important;
                -khtml-border-top-left-radius: 4px !important;
                border-top-left-radius: 4px !important;
                -moz-border-radius-bottomleft: 4px !important;
                -webkit-border-bottom-left-radius: 4px !important;
                -o-border-bottom-left-radius: 4px !important;
                -ms-border-bottom-left-radius: 4px !important;
                -khtml-border-bottom-left-radius: 4px !important;
                border-bottom-left-radius: 4px !important;
            }
            .segmented-button label.last {
                -moz-border-radius-topright: 4px !important;
                -webkit-border-top-right-radius: 4px !important;
                -o-border-top-right-radius: 4px !important;
                -ms-border-top-right-radius: 4px !important;
                -khtml-border-top-right-radius: 4px !important;
                border-top-right-radius: 4px !important;
                -moz-border-radius-bottomright: 4px !important;
                -webkit-border-bottom-right-radius: 4px !important;
                -o-border-bottom-right-radius: 4px !important;
                -ms-border-bottom-right-radius: 4px !important;
                -khtml-border-bottom-right-radius: 4px !important;
                border-bottom-right-radius: 4px !important;
            }
            .segmented-button input:checked + label, .segmented-button label.selected {
                background: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #e4e4e4), color-stop(100%, #ffffff)) !important;
                background: -webkit-linear-gradient(#e4e4e4, #ffffff) !important;
                background: -moz-linear-gradient(#e4e4e4, #ffffff) !important;
                background: -o-linear-gradient(#e4e4e4, #ffffff) !important;
                background: -ms-linear-gradient(#e4e4e4, #ffffff) !important;
                background: linear-gradient(#e4e4e4, #ffffff) !important;
            }

            .segmented-button input:disabled + label {
                background: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #ffffff), color-stop(100%, #efefef)) !important;
                background: -webkit-linear-gradient(#ffffff, #efefef) !important;
                background: -moz-linear-gradient(#ffffff, #efefef) !important;
                background: -o-linear-gradient(#ffffff, #efefef) !important;
                background: -ms-linear-gradient(#ffffff, #efefef) !important;
                background: linear-gradient(#ffffff, #efefef) !important;
                cursor: default !important;
                color: #b2b2b2 !important;
                border-color: #cccccc !important;
                -moz-box-shadow: none !important;
                -webkit-box-shadow: none !important;
                -o-box-shadow: none !important;
                box-shadow: none !important;
            }



        </style>
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

                <!--<div style="padding-left: 0px"><img src="<?php echo base_url() ?>assets/admin/layout/img/header_Potdirga.jpg" class="img-responsive" style="width: 100%; height: 150px"></div>-->
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
                    <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1366px; height: 150px; overflow: hidden;">
                        <div>
                            <img u="image" src="<?php echo base_url() ?>assets/admin/layout/img/header_Potdirga.jpg" />
                        </div>
                        <div>
                            <img u="image" src="<?php echo base_url() ?>assets/admin/layout/img/headerPotdirga_2.jpg" />
                        </div>
                        <div>
                            <img u="image" src="<?php echo base_url() ?>assets/admin/layout/img/headerPotdirga_3.jpg" />
                        </div>
                    </div>

                    <!-- Bullet Navigator Skin Begin -->
                    <style>
                        /* jssor slider bullet navigator skin 05 css */
                        /*
                        .jssorb05 div           (normal)
                        .jssorb05 div:hover     (normal mouseover)
                        .jssorb05 .av           (active)
                        .jssorb05 .av:hover     (active mouseover)
                        .jssorb05 .dn           (mousedown)
                        */
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

                    <img src="<?php echo base_url() ?>assets/admin/layout/img/logo.png" alt="logo" class="logo-default"/>

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

                        </li>
                    </ul>
                </div>
                <!-- END HORIZANTAL MENU -->
                <!-- BEGIN HEADER SEARCH BOX -->
                <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
<!--                <form class="search-form" action="extra_search.html" method="GET">

                </form>-->
                <!-- END HEADER SEARCH BOX -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->

                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!-- BEGIN NOTIFICATION DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">

                        </li>
                        <!-- END NOTIFICATION DROPDOWN -->
                        <!-- BEGIN INBOX DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
<!--                        <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="icon-envelope-open"></i>
                                <span class="badge badge-default">
                                    4 </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="external">
                                    <h3><span class="bold">7 Pesan</span> Baru</h3>
                                    <a href="#">Lihat Semua</a>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                    <img src="<?php echo base_url() ?>assets/admin/layout3/img/avatar2.jpg" class="img-circle" alt="">
                                                </span>
                                                <span class="subject">
                                                    <span class="from">
                                                        Operator SDM </span>
                                                    <span class="time">Baru Saja </span>
                                                </span>
                                                <span class="message">
                                                    Input Data Organisasi <?php echo $this->session->userdata('user_name') ?>?... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                    <img src="<?php echo base_url() ?>assets/admin/layout3/img/avatar3.jpg" class="img-circle" alt="">
                                                </span>
                                                <span class="subject">
                                                    <span class="from">
                                                        Operator SDAB  </span>
                                                    <span class="time">16 menit </span>
                                                </span>
                                                <span class="message">
                                                    Input Data SDAB... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                    <img src="<?php echo base_url() ?>assets/admin/layout3/img/avatar1.jpg" class="img-circle" alt="">
                                                </span>
                                                <span class="subject">
                                                    <span class="from">
                                                        Operator SAPRANA </span>
                                                    <span class="time">2 jam </span>
                                                </span>
                                                <span class="message">
                                                    Input Data Sarana dan Prasarana</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                    <img src="<?php echo base_url() ?>assets/admin/layout3/img/avatar2.jpg" class="img-circle" alt="">
                                                </span>
                                                <span class="subject">
                                                    <span class="from">
                                                        Operator SDM </span>
                                                    <span class="time">40 menit </span>
                                                </span>
                                                <span class="message">
                                                    Edit Data Kekuatan Purnawirawan TNI</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                        </li>-->
                        <!-- END INBOX DROPDOWN -->
                        <!-- BEGIN TODO DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
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
<!--                                <li>
                                    <a href="#">
                                        <i class="icon-user"></i> Profile Saya</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-calendar"></i> Kalender </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-envelope-open"></i> Kotak Pesan <span class="badge badge-danger">
                                            3 </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-rocket"></i> Tugas <span class="badge badge-success">
                                            7 </span>
                                    </a>
                                </li>
                                <li class="divider">
                                </li>-->
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

            <!-- END MENU RESPONSIVE -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <nav class="segmented-button">
                        <input type="radio" name="rdb" value="1" id="seg-Laporan" checked>
                        <label for="seg-Laporan" class="first active"> <span><i class="fa fa-list"></i></span> Laporan Umum </label>

                        
                        <input type="radio" name="rdb" value="2" id="seg-Grafik">
                        <label for="seg-Grafik" class="mid"><span><i class="fa fa-bar-chart-o"></i></span> Grafik</label>
                        
                        <input type="radio" name="rdb" value="3" id="seg-Pesan">
                        <label for="seg-Pesan" class="last"><span><i class="fa fa-pencil-square-o"></i></span> Pesan</label>
                    </nav
                    <br />
                    <!--                    <br />-->

                    <!-- END PAGE HEADER-->
                    <div id="blk1" class="desc">
                        <div class="portlet">
                            <!-- BEGIN DASHBOARD STATS -->
                            <!-- BEGIN SAMPLE TABLE PORTLET-->
                            <div class="portlet box blue">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-user"></i>SUMBER DAYA MANUSIA
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse">
                                        </a>
                                    </div>
                                </div>
                                <!--<div class="col-md-6">-->
                                <div class="portlet-body">
                                    <div class="row clearfix">
                                        <div class="col-md-6 column">
                                            <!-- BEGIN SAMPLE TABLE PORTLET-->
                                            <div class="portlet box blue">
                                                <div class="portlet-title">
                                                    <div class="caption">
                                                        Data SDM Dalam Dunia Penerbangan 
                                                    </div>
                                                    <div class="tools">
                                                        <a href="javascript:;" class="collapse">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <div class="table-scrollable">
<!--                                                    <table class="table table-striped table-bordered table-hover" id="sample_5">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    No
                                                                </th>
                                                                <th>
                                                                    Nama Profesi
                                                                </th>
                                                                <th>
                                                                    Nama Personil
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $no = 1;
                                                        if ($profesi_personil != FALSE) {
                                                            foreach ($profesi_personil->result() as $row) {
                                                                ?>
                                                                            <tr class="odd gradeX">
                                                                                <td><?php echo $no; ?></td>
                                                                                <td><?php echo $row->PROFESI_NAMA ?></td>
                                                                                <td><a style="text-decoration:none;" href="#" onClick="MM_openBrWindow('<?php echo base_url(); ?>main_menu/detail_sdm/<?php echo $row->SDMDATA_ID; ?>', '<?php echo $row->PROFESI_NAMA ?>', 'scrollbars=yes,width=1200,height=900')"><?php echo $row->NAMA; ?><span><i class="fa fa-search-plus"></i></span></a></td>
                                                                            </tr>
                                                                <?php
                                                                $no++;
                                                            }
                                                        }
                                                        ?>
                                                        </tbody>
                                                    </table>-->
                                                    
                                                        <div id="jstree">                                        
                                                            <!-- in this example the tree is populated from inline HTML -->
                                                            <?php echo $m; ?>
                                                            
                                                        </div>
                                                        <script>
                                                            $(function () {
                                                                // 6 create an instance when the DOM is ready
                                                                $('#jstree').jstree();
                                                                // 7 bind to events triggered on the tree
                                                                $('#jstree').on("changed.jstree", function (e, data) {
                                                                    console.log(data.selected);
                                                                });
                                                                // 8 interact with the tree - either way is OK
                                                            });
                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END SAMPLE TABLE PORTLET-->
                                        </div>
                                        <!--  Kanan -->
                                        <div class="col-md-6 column">
                                            <!-- BEGIN SAMPLE TABLE PORTLET-->
                                            <div class="portlet box blue">
                                                <div class="portlet-title">
                                                    <div class="caption">
                                                        Data SDM Luar Dunia Penerbangan 
                                                    </div>
                                                    <div class="tools">
                                                        <a href="javascript:;" class="collapse">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <div class="table-scrollable">
                                                       
                                                        <div id="jstree1">                                        
                                                            <!-- in this example the tree is populated from inline HTML -->
                                                            <?php echo $luar; ?>
                                                        </div>
                                                        <script>
                                                            $(function () {
                                                                // 6 create an instance when the DOM is ready
                                                                $('#jstree1').jstree();
                                                                // 7 bind to events triggered on the tree
                                                                $('#jstree1').on("changed.jstree", function (e, data) {
                                                                    console.log(data.selected);
                                                                });
                                                                // 8 interact with the tree - either way is OK
                                                            });
                                                        </script>                                                
                                                    </div>
                                                </div>
                                                <!-- END SAMPLE TABLE PORTLET-->
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 column">
                                    <!-- BEGIN SAMPLE TABLE PORTLET-->
                                    <div class="portlet box blue">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="fa fa-tree"></i>SUMBER DAYA ALAM DAN BUATAN
                                            </div>
                                            <div class="tools">
                                                <a href="javascript:;" class="collapse" data-original-title="" title="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="table-scrollable">
                                            
                                                <div id="jstree_sdab">                                        
                                                    <!-- in this example the tree is populated from inline HTML -->
                                                    <?php echo $sdab; ?>
                                                </div>
                                                <script>
                                                    $(function () {
                                                        // 6 create an instance when the DOM is ready
                                                        $('#jstree_sdab').jstree();
                                                        // 7 bind to events triggered on the tree
                                                        $('#jstree_sdab').on("changed.jstree", function (e, data) {
                                                            console.log(data.selected);
                                                        });
                                                        // 8 interact with the tree - either way is OK
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END SAMPLE TABLE PORTLET-->
                                </div>
                                <div class="col-md-6 column">
                                    <!-- BEGIN SAMPLE TABLE PORTLET-->
                                    <div class="portlet box blue">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="fa fa-plane"></i>SARANA DAN PRASARANA
                                            </div>
                                            <div class="tools">
                                                <a href="javascript:;" class="collapse" data-original-title="" title="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="table-scrollable">
                                              
                                                <div id="jstree_sapras">                                        
                                                    <!-- in this example the tree is populated from inline HTML -->
                                                    <?php echo $sapras; ?>
                                                </div>
                                                <script>
                                                    $(function () {
                                                        // 6 create an instance when the DOM is ready
                                                        $('#jstree_sapras').jstree();
                                                        // 7 bind to events triggered on the tree
                                                        $('#jstree_sapras').on("changed.jstree", function (e, data) {
                                                            console.log(data.selected);
                                                        });
                                                        // 8 interact with the tree - either way is OK
                                                    });
                                                </script>
                                            </div>
    <!--                                            <table class="table table-striped table-bordeblue table-advance table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                No
                                                            </th>
                                                            <th>
                                                                Nama Sarana Prasarana
                                                            </th>
                                                            <th>
                                                                <i class="fa fa-bookmark"></i> Jumlah
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                            <?php for ($i = 8; $i < 12; $i++) { ?>
                                                                <tr>
                                                                    <td style="text-align: center">
                                                <?php echo $i; ?>
                                                                    </td>
                                                                    <td>
                                                                        <div id="tree_1_<?php echo $i; ?>" class="tree-demo">
                                                                            <ul>
                                                                                <li>
                                                                                    Bandara/lapangan terbang/grass strip dan helipad
                                                                                    <ul>
                                                                                        <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                            <a onClick="MM_openBrWindow('<?php echo site_url('main_menu/detail_bandara_helipad') ?>', 'Ruangg udara jalur penerbangan', 'scrollbars=yes,width=618,height=900')">
                                                                                                Lampung Air Area <span><i class="fa fa-search-plus"></i></span></a>
                                                                                        </li>
                                                                                        <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                            <a onClick="MM_openBrWindow('<?php echo site_url('main_menu/detail_bandara_helipad') ?>', 'Ruangg udara jalur penerbangan', 'scrollbars=yes,width=618,height=900')">
                                                                                                Merauke Air Area <span><i class="fa fa-search-plus"></i></span></a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        2
                                                                    </td>
                                                                </tr>
                                            <?php } ?>
                                                    </tbody>
                                                </table>-->
                                        </div>
                                    </div>
                                </div>
                                <!-- END SAMPLE TABLE PORTLET-->
                            </div>
                        </div>
                    </div>

                    <div id="blk2" class="desc" style="display: none;">
                        <?php echo $this->load->view('sdm_grafik/view_grafik_pimpinan') ?>
                    </div>
                    <div id="blk3" class="desc" style="display: none;">
                        <?php echo $this->load->view('main_menu/pesan_pimpinan') ?>
                    </div>
                    <!-- END SAMPLE TABLE PORTLET-->
                </div>
                <!-- END DASHBOARD STATS -->
            </div>
        </div>
        <!-- END CONTENT -->
        <!--</div>-->
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner">
                <?php echo date('Y') ?> &copy; DISPOTDIRGA TNI AU.
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- END FOOTER -->
        <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will blueuce page load time) -->
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
        <script type="text/javascript" src="<?php echo base_url() ?>assets/global/plugins/bootstrap-select/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/global/plugins/select2/select2.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
<!--        <script src="<?php echo base_url() ?>assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>-->
        <script src="<?php echo base_url() ?>assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
        <!--<script src="<?php echo base_url() ?>assets/global/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>-->
        <script src="<?php echo base_url() ?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
        <!--<script src="<?php echo base_url() ?>assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>-->
        <script src="<?php echo base_url() ?>assets/global/plugins/jquery-easypiechart/jquery.easypiechart.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!--script src="<?php echo base_url() ?>assets/global/plugins/jstree/dist/jstree.min.js"></script-->
        <script src="<?php echo base_url() ?>assets/global/plugins/jstree/dist/jstree.js"></script>
        <script src="<?php echo base_url() ?>assets/admin/pages/scripts/ui-tree.js"></script>
        <!-- HIGHCHART -->
        <script src="<?php echo base_url() ?>assets/global/scripts/highchart/highcharts.js"></script>
        <script src="<?php echo base_url() ?>assets/global/scripts/highchart/modules/exporting.js"></script>

        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url() ?>assets/global/scripts/metronic.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/admin/pages/scripts/components-dropdowns.js"></script>
        <script src="<?php echo base_url() ?>assets/admin/pages/scripts/index.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/admin/pages/scripts/tasks.js" type="text/javascript"></script>

        <!-- 5 include the minified jstree source -->
        <!-- END PAGE LEVEL SCRIPTS -->
        <script>
                                                    jQuery(document).ready(function () {
                                                        Metronic.init(); // init metronic core components
                                                        Layout.init(); // init current layout
                                                        QuickSidebar.init(); // init quick sidebar
                                                        Demo.init(); // init demo features // initlayout and core plugins
                                                        ComponentsDropdowns.init();
//                                                                                        Index.init();
//                                                                                        Index.initJQVMAP(); // init index page's custom scripts
//                                                                                        Index.initCalendar(); // init index page's custom scripts
//                                                                                        Index.initCharts(); // init index page's custom scripts
//                                                                                        Index.initChat();
//                                                                                        Index.initMiniCharts();
//                                                                                        Index.initDashboardDaterange();
                                                        Tasks.initDashboardWidget();
                                                        UITree.init();
                                                    });

                                                    $(document).ready(function () {
                                                        $("input[name$='rdb']").click(function () {
                                                            var test = $(this).val();
                                                            $("div.desc").hide();
                                                            $("#blk" + test).show();
                                                        });

                                                    });
                                                    var chart1; // globally available
                                                    $(document).ready(function () {
                                                        chart1 = new Highcharts.Chart({
                                                            chart: {
                                                                renderTo: 'container',
                                                                type: 'column'
                                                            },
                                                            title: {
                                                                text: 'Profesi Dalam Penerbangan'
                                                            },
                                                            
                                                            xAxis: {
                                                                categories: ['Profesi']
                                                            },
                                                            yAxis: {
                                                                title: {
                                                                    text: 'Jumlah Personil'
                                                                }
                                                            },
                                                            series:
                                                                    [
                                                                     <?php foreach ($dlm_penerbangan as $row) { ?>
                                                                            {
                                                                                name: '<?php echo $row->PROFESI_NAMA; ?>',
                                                                                data: [<?php echo $row->jumlah_dalam; ?>]
                                                                            },
<?php } ?>
                                                                    ]
                                                        });
                                                    });
var chart1; // globally available
                                                    $(document).ready(function () {
                                                        chart1 = new Highcharts.Chart({
                                                            chart: {
                                                                renderTo: 'container2',
                                                                type: 'column'
                                                            },
                                                            title: {
                                                                text: 'Profesi Dalam Penerbangan'
                                                            },
                                                            
                                                            xAxis: {
                                                                categories: ['Profesi']
                                                            },
                                                            yAxis: {
                                                                title: {
                                                                    text: 'Jumlah Personil'
                                                                }
                                                            },
                                                            series:
                                                                    [
                                                                     <?php foreach ($luar_penerbangan as $row) { ?>
                                                                            {
                                                                                name: '<?php echo $row->PROFESI_ID; ?>',
                                                                                data: [<?php echo $row->jumlah_luar; ?>]
                                                                            },
<?php } ?>
                                                                    ]
                                                        });
                                                    });
                                                    
                                                    $(function () {
                                                        $('#container2_').highcharts({
                                                            chart: {
                                                                type: 'column'
                                                            },
                                                            title: {
                                                                text: 'REKAPITULASI SDM BIDANG ORDIRGA'
                                                            },
                                                            subtitle: {
                                                                text: 'Masyarakat penggemar olahraga digantara'
                                                            },
                                                            xAxis: {
                                                                categories: [
                                                                    'Terjun Payung',
                                                                    'Terbang Layang',
                                                                    'Microlight',
                                                                    'Pesawat Bermotor',
                                                                    'Layang Gantung',
                                                                    'Pesawat Aerobatik',
                                                                    'Pesawat Heli',
                                                                    'Swayasa'
                                                                ]
                                                            },
                                                            yAxis: {
                                                                min: 0,
                                                                title: {
                                                                    text: 'Total'
                                                                }
                                                            },
                                                            legend: {
                                                                align: 'right',
                                                                x: 0,
                                                                verticalAlign: 'top',
                                                                y: 25,
                                                                floating: true,
                                                                backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
                                                                borderColor: '#CCC',
                                                                borderWidth: 1,
                                                                shadow: false
                                                            },
                                                            tooltip: {
                                                                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                                                                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                                                                        '<td style="padding:0"><b>{point.y:.0f} Orang</b></td></tr>',
                                                                footerFormat: '</table>',
                                                                shared: true,
                                                                useHTML: true
                                                            },
                                                            plotOptions: {
                                                                column: {
                                                                    pointPadding: 0.2,
                                                                    borderWidth: 0
                                                                }
                                                            },
                                                            series: [{
                                                                    name: 'SD',
                                                                    data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5]

                                                                }, {
                                                                    name: 'SMP',
                                                                    data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3]

                                                                }, {
                                                                    name: 'SMA',
                                                                    data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6]

                                                                }, {
                                                                    name: 'PT',
                                                                    data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4]

                                                                }]
                                                        });
                                                    });

                                                    $(function () {
                                                        $('#container3').highcharts({
                                                            chart: {
                                                                plotBackgroundColor: null,
                                                                plotBorderWidth: null,
                                                                plotShadow: false
                                                            },
                                                            title: {
                                                                text: 'Persentase Sumber Daya Alam Buatan'
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
                                                                        ['Jenis Ternak', 58.5],
                                                                        ['Jenis Perikanan', 21.8],
                                                                        ['Jenis Perkebunan', 19.6],
                                                                    ]
                                                                }]
                                                        });
                                                    });


                                                    $(function () {
                                                        $('#container4').highcharts({
                                                            chart: {
                                                                type: 'column'
                                                            },
                                                            title: {
                                                                text: 'REKAPITULASI SDAB Industri'
                                                            },
                                                            xAxis: {
                                                                categories: [
                                                                    'PT. WTL',
                                                                    'PT. HUMAS JAYA',
                                                                    'PT. TIPINDO',
                                                                    'PT. BUNGA MAYANG',
                                                                    'PTPN',
                                                                    'PT. BNIL',
                                                                    'PT. ARGUA',
                                                                    'PT. BUNGA MAYANG'
                                                                ]
                                                            },
                                                            yAxis: {
                                                                min: 0,
                                                                title: {
                                                                    text: 'Total'
                                                                }
                                                            },
                                                            legend: {
                                                                align: 'right',
                                                                x: 0,
                                                                verticalAlign: 'bottom',
                                                                y: 65,
                                                                floating: true,
                                                                backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
                                                                borderColor: '#CCC',
                                                                borderWidth: 1,
                                                                shadow: false
                                                            },
                                                            tooltip: {
                                                                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                                                                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                                                                        '<td style="padding:0"><b>{point.y:.0f} Orang</b></td></tr>',
                                                                footerFormat: '</table>',
                                                                shared: true,
                                                                useHTML: true
                                                            },
                                                            plotOptions: {
                                                                column: {
                                                                    pointPadding: 0.2,
                                                                    borderWidth: 0
                                                                }
                                                            },
                                                            series: [{
                                                                    data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5]

                                                                }]
                                                        });
                                                    });

                                                    $('.segmented-button label.first').click(function (evt) {
                                                        $('.segmented-button label.first').addClass('active');
                                                        $('.segmented-button label.last').removeClass('active');
                                                        $('.segmented-button label.mid').removeClass('active');
                                                        evt.stopPropagation();
                                                    });

                                                    $('.segmented-button label.mid').click(function (evt) {
                                                        $('.segmented-button label.mid').addClass('active');
                                                        $('.segmented-button label.first').removeClass('active');
                                                        $('.segmented-button label.last').removeClass('active');
                                                        evt.stopPropagation();
                                                    });
                                                    
                                                    $('.segmented-button label.last').click(function (evt) {
                                                        $('.segmented-button label.last').addClass('active');
                                                        $('.segmented-button label.first').removeClass('active');
                                                        $('.segmented-button label.mid').removeClass('active');
                                                        evt.stopPropagation();
                                                    });
        </script>
        <!-- END JAVASCRIPTS -->
    </body>
    <!-- END BODY -->
</html>