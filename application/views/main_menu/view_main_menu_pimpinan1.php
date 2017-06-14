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
                <form class="search-form" action="extra_search.html" method="GET">

                </form>
                <!-- END HEADER SEARCH BOX -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->

                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!-- BEGIN NOTIFICATION DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                            <!--    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                   <i class="icon-bell"></i>
                                   <span class="badge badge-default">
                                       7 </span>
                               </a>
                               <ul class="dropdown-menu">
                                   <li class="external">
                                       <h3><span class="bold">12 Notifikasi</span> pending</h3>
                                       <a href="#">Lihat semua</a>
                                   </li>
                                   <li>
                                       <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                                           <li>
                                               <a href="javascript:;">
                                                   <span class="time">baru saja</span>
                                                   <span class="details">
                                                       <span class="label label-sm label-icon label-success">
                                                           <i class="fa fa-plus"></i>
                                                       </span>
                                                       User baru. </span>
                                               </a>
                                           </li>
                                           <li>
                                               <a href="javascript:;">
                                                   <span class="time">3 menit</span>
                                                   <span class="details">
                                                       <span class="label label-sm label-icon label-danger">
                                                           <i class="fa fa-bolt"></i>
                                                       </span>
                                                       Server  overloaded. </span>
                                               </a>
                                           </li>
                                           <li>
                                               <a href="javascript:;">
                                                   <span class="time">10 menit</span>
                                                   <span class="details">
                                                       <span class="label label-sm label-icon label-warning">
                                                           <i class="fa fa-bell-o"></i>
                                                       </span>
                                                       Server #2 tidak merespon. </span>
                                               </a>
                                           </li>
                                           <li>
                                               <a href="javascript:;">
                                                   <span class="time">14 jam</span>
                                                   <span class="details">
                                                       <span class="label label-sm label-icon label-info">
                                                           <i class="fa fa-bullhorn"></i>
                                                       </span>
                                                       Aplikasi Error. </span>
                                               </a>
                                           </li>
                                           <li>
                                               <a href="javascript:;">
                                                   <span class="time">2 hari</span>
                                                   <span class="details">
                                                       <span class="label label-sm label-icon label-danger">
                                                           <i class="fa fa-bolt"></i>
                                                       </span>
                                                       Database overload 68%. </span>
                                               </a>
                                           </li>
                                           <li>
                                               <a href="javascript:;">
                                                   <span class="time">3 hari</span>
                                                   <span class="details">
                                                       <span class="label label-sm label-icon label-danger">
                                                           <i class="fa fa-bolt"></i>
                                                       </span>
                                                       IP user diblokir. </span>
                                               </a>
                                           </li>
                                           <li>
                                               <a href="javascript:;">
                                                   <span class="time">4 hari</span>
                                                   <span class="details">
                                                       <span class="label label-sm label-icon label-warning">
                                                           <i class="fa fa-bell-o"></i>
                                                       </span>
                                                       Ruang Penyimpanan Server #4 tidak merespon. </span>
                                               </a>
                                           </li>
                                           <li>
                                               <a href="javascript:;">
                                                   <span class="time">5 hari</span>
                                                   <span class="details">
                                                       <span class="label label-sm label-icon label-info">
                                                           <i class="fa fa-bullhorn"></i>
                                                       </span>
                                                       Sistem Error. </span>
                                               </a>
                                           </li>
                                           <li>
                                               <a href="javascript:;">
                                                   <span class="time">9 hari</span>
                                                   <span class="details">
                                                       <span class="label label-sm label-icon label-danger">
                                                           <i class="fa fa-bolt"></i>
                                                       </span>
                                                       Ruang Penyimpanan server rusak. </span>
                                               </a>
                                           </li>
                                       </ul>
                                   </li>
                               </ul> -->
                        </li>
                        <!-- END NOTIFICATION DROPDOWN -->
                        <!-- BEGIN INBOX DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
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
                                                    Input Data Organisasi <!--<?php echo $this->session->userdata('user_name') ?>?...--> </span>
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
                                        <!-- <li>
                                            <a href="#">
                                                <span class="photo">
                                                    <img src="<?php echo base_url() ?>assets/admin/layout3/img/avatar3.jpg" class="img-circle" alt="">
                                                </span>
                                                <span class="subject">
                                                    <span class="from">
                                                        Deni </span>
                                                    <span class="time">46 menit </span>
                                                </span>
                                                <span class="message">
                                                    Kapan mulai proyek?... </span>
                                            </a>
                                        </li> -->
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- END INBOX DROPDOWN -->
                        <!-- BEGIN TODO DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
                            <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="icon-calendar"></i>
                                <span class="badge badge-default">
                                    3 </span>
                            </a>
                            <ul class="dropdown-menu extended tasks">
                                <li class="external">
                                    <h3><span class="bold">12 Tugas</span> pending</h3>
                                    <a href="#">Lihat Semua</a>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                                        <li>
                                            <a href="javascript:;">
                                                <span class="task">
                                                    <span class="desc">Rilis Terbaru v1.2 </span>
                                                    <span class="percent">30%</span>
                                                </span>
                                                <span class="progress">
                                                    <span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">40% Complete</span></span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="task">
                                                    <span class="desc">Pengembangan Aplikasi</span>
                                                    <span class="percent">65%</span>
                                                </span>
                                                <span class="progress">
                                                    <span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">65% Complete</span></span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="task">
                                                    <span class="desc">Rilis Aplikasi Mobile</span>
                                                    <span class="percent">98%</span>
                                                </span>
                                                <span class="progress">
                                                    <span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">98% Complete</span></span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="task">
                                                    <span class="desc">Migrasi Database</span>
                                                    <span class="percent">10%</span>
                                                </span>
                                                <span class="progress">
                                                    <span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">10% Complete</span></span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="task">
                                                    <span class="desc">Upgrade Web server</span>
                                                    <span class="percent">58%</span>
                                                </span>
                                                <span class="progress">
                                                    <span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">58% Complete</span></span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="task">
                                                    <span class="desc">Pengembangan App Mobile</span>
                                                    <span class="percent">85%</span>
                                                </span>
                                                <span class="progress">
                                                    <span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">85% Complete</span></span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="task">
                                                    <span class="desc">Rilisi UI</span>
                                                    <span class="percent">38%</span>
                                                </span>
                                                <span class="progress progress-striped">
                                                    <span style="width: 38%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">38% Complete</span></span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul> -->
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
                                </li>
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
                        <label for="seg-Grafik" class="last"><span><i class="fa fa-bar-chart-o"></i></span> Grafik</label>
                    </nav>
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
                                            <div class="portlet-box">
                                                <div class="table-scrollable">
                                                    
                                                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    No
                                                                </th>
                                                                <th>
                                                                    Profesi Dalam Dunia Penerbangan
                                                                </th>
                                                                <th>
                                                                    Nama Personil
                                                                </th>
                                                                <!--th>
                                                                    <i class="fa fa-bookmark"></i> Jumlah
                                                                </th-->
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php $no = 1;foreach ($profesi_personil as $row){?>
                                                            <tr>
                                                                <td><?php echo $no;?></td>
                                                                <td><?php echo $row->PROFESI_NAMA?></td>
                                                                <td><a style="text-decoration:none;" href="#" onClick="MM_openBrWindow('<?php echo base_url();?>/main_menu/detail_sdm_pilot_tempur_wing_man_penerbang_tni/<?php echo $row->SDMDATA_ID;?>','<?php echo $row->PROFESI_NAMA?>','scrollbars=yes,width=1200,height=900')"><?php echo $row->NAMA;?><span><i class="fa fa-search-plus"></i></span></a></td>
                                                            </tr>
                                                        <?php  $no++;}?>
                                                        </tbody>
                                                        <!--tbody>
                                                            <tr>
                                                                <td style="text-align: center">
                                                                    1
                                                                </td>
                                                                <td>
                                                                    <div id="tree_1" class="tree-demo">
  
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    4
                                                                </td>
                                                            </tr>
                                                        
                                                        <tr>
                                                            <td style="text-align: center">
                                                                2
                                                            </td>
                                                            <td>
                                                                <div id="tree_a" class="tree-demo">
                                                                    <ul>
                                                                        <li>
                                                                            Teknisi penyiap dan pemeliharaan pesawat
                                                                            <ul>
                                                                                <li>
                                                                                    Pesawat [3]
                                                                                    <ul>
                                                                                        <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                            Antonius Gunawan S. <span><i class="fa fa-search-plus"></i></span>
                                                                                        </li>
                                                                                        <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                            Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                                        </li>
                                                                                        <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                            Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li>
                                                                                    Radar [2]
                                                                                    <ul>
                                                                                        <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                            Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                                        </li>
                                                                                        <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                            Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li>
                                                                                    Komnav(ATC/PLLU) [4]
                                                                                    <ul>
                                                                                        <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                            Duha Yuliandri <span><i class="fa fa-search-plus"></i></span>
                                                                                        </li>
                                                                                        <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                            Ferdinan Silalahi <span><i class="fa fa-search-plus"></i></span>
                                                                                        </li>
                                                                                        <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                            Makmur Syahruddin <span><i class="fa fa-search-plus"></i></span>
                                                                                        </li>
                                                                                        <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                            Luhur Prasetyono <span><i class="fa fa-search-plus"></i></span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                9
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center">
                                                                3
                                                            </td>
                                                            <td>
                                                                <div id="tree_b" class="tree-demo">
                                                                    <ul>
                                                                        <li>
                                                                            Operator dan teknisi radar
                                                                            <ul>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Antonius Gunawan S. <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                5
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center">
                                                                4
                                                            </td>
                                                            <td>
                                                                <div id="tree_c" class="tree-demo">
                                                                    <ul>
                                                                        <li>
                                                                            Operator dan teknisi komunikasi navigasi(ATC/PLLU)
                                                                            <ul>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Duha Yuliandri <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Ferdinan Silalahi <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Makmur Syahruddin <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Luhur Prasetyono <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                4
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center">
                                                                5
                                                            </td>
                                                            <td>
                                                                <div id="tree_d" class="tree-demo">
                                                                    <ul>
                                                                        <li>
                                                                            Personel meteo
                                                                            <ul>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Antonius Gunawan S. <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Duha Yuliandri <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Ferdinan Silalahi <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Makmur Syahruddin <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Luhur Prasetyono <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                9
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center">
                                                                6
                                                            </td>
                                                            <td>
                                                                <div id="tree_e" class="tree-demo">
                                                                    <ul>
                                                                        <li>
                                                                            Personel survey udara
                                                                            <ul>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Antonius Gunawan S. <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Duha Yuliandri <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Ferdinan Silalahi <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Makmur Syahruddin <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Luhur Prasetyono <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                9
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center">
                                                                7
                                                            </td>
                                                            <td>
                                                                <div id="tree_f" class="tree-demo">
                                                                    <ul>
                                                                        <li>
                                                                            Tim SAR dan pemadam kebakaran
                                                                            <ul>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Antonius Gunawan S. <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Duha Yuliandri <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Ferdinan Silalahi <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Makmur Syahruddin <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Luhur Prasetyono <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                9
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center">
                                                                8
                                                            </td>
                                                            <td>
                                                                <div id="tree_g" class="tree-demo">
                                                                    <ul>
                                                                        <li>
                                                                            Pengisian bahan bakar pesawat dan ground handling
                                                                            <ul>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Antonius Gunawan S. <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Duha Yuliandri <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Ferdinan Silalahi <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Makmur Syahruddin <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                                <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                    Luhur Prasetyono <span><i class="fa fa-search-plus"></i></span>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                9
                                                            </td>
                                                        </tr>
                                                        </tbody-->
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  Kanan -->
                                        <div class="col-md-6 column">
                                            <div class="portlet-body">
                                                <div class="table-scrollable">
                                                    <table class="table table-striped table-bordeblue table-advance table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    No
                                                                </th>
                                                                <th>
                                                                    Profesi Di Luar Dunia Penerbangan
                                                                </th>
                                                                <th>
                                                                    <i class="fa fa-bookmark"></i> Jumlah
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td style="text-align: center">
                                                                    1
                                                                </td>
                                                                <td>
                                                                    <div id="tree_h" class="tree-demo">
                                                                        <ul>
                                                                            <li>
                                                                                Keluarga besar TNI AU
                                                                                <ul>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Adityawarman <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Ade Masidin <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Aditya Ryan Pratama <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Aan Dedy <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Andry Widyanto Putro <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Bahruddin Fatoni Hadi P. <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Dwi Retno Sulanjari <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Egar Soepriwanto <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Farid Rosikaningrum <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    10
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center">
                                                                    2
                                                                </td>
                                                                <td>
                                                                    <div id="tree_i" class="tree-demo">
                                                                        <ul>
                                                                            <li>
                                                                                Masyarakat disekitar satuan TNI AU/lanud/bandara
                                                                                <ul>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Antonius Gunawan S. <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>  
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    3
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center">
                                                                    3
                                                                </td>
                                                                <td>
                                                                    <div id="tree_j" class="tree-demo">
                                                                        <ul>
                                                                            <li>
                                                                                Masyarakat yang dapat bekerjasama dan atau berkoordinasi dengan satuan TNI AU/lanud
                                                                                <ul>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Antonius Gunawan S. <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    5
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center">
                                                                    4
                                                                </td>
                                                                <td>
                                                                    <div id="tree_k" class="tree-demo">
                                                                        <ul>
                                                                            <li>
                                                                                Siswa dan mahasiswa pendidikan umum/kejuruan yang dikelola oleh yayasan TNI AU
                                                                                <ul>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Antonius Gunawan S. <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Duha Yuliandri <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Ferdinan Silalahi <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Makmur Syahruddin <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li> 
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Luhur Prasetyono <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    9
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center">
                                                                    5
                                                                </td>
                                                                <td>
                                                                    <div id="tree_l" class="tree-demo">
                                                                        <ul>
                                                                            <li>
                                                                                Siswa dan mahasiswa pendidikan umum/kejuruan yang berada di dalam dan disekitar satuan TNI AU/lanud/bandara
                                                                                <ul>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Antonius Gunawan S. <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Duha Yuliandri <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Ferdinan Silalahi <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Makmur Syahruddin <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Luhur Prasetyono <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    9
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center">
                                                                    6
                                                                </td>
                                                                <td>
                                                                    <div id="tree_m" class="tree-demo">
                                                                        <ul>
                                                                            <li>
                                                                                Personel/masyarakat pelaksana iptek kedirgantaraan seperti aeronautika, kimia, hukum, dan sebagainya
                                                                                <ul>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Antonius Gunawan S. <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Duha Yuliandri <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Ferdinan Silalahi <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Makmur Syahruddin <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Luhur Prasetyono <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    9
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center">
                                                                    7
                                                                </td>
                                                                <td>
                                                                    <div id="tree_n" class="tree-demo">
                                                                        <ul>
                                                                            <li>
                                                                                Personel/masyarakat Informatika dan Teknologi (IT)
                                                                                <ul>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Antonius Gunawan S. <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Duha Yuliandri <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Ferdinan Silalahi <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Makmur Syahruddin <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Luhur Prasetyono <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    9
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center">
                                                                    8
                                                                </td>
                                                                <td>
                                                                    <div id="tree_o" class="tree-demo">
                                                                        <ul>
                                                                            <li>
                                                                                Masyarakat penggemar olahraga digantara
                                                                                <ul>
                                                                                    <li>
                                                                                        Terjun Payung [9]
                                                                                        <ul>
                                                                                            <li>
                                                                                                SD [1]
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Budi Prasetyo <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                SMP [1]
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Selamet Raharjo <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                SMA [1]
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Bangun Budiono <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                PT [5]
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        <a onClick="MM_openBrWindow('<?php echo site_url('main_menu/detail_penggemar_olahraga') ?>', 'Penggemar Olahraga Dirgantara ', 'scrollbars=yes,width=618,height=900')">
                                                                                                            Antonius Gunawan S. <span><i class="fa fa-search-plus"></i></span></a>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                UMUM [1]
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Melinda <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        Terbang Layang [9]
                                                                                        <ul>
                                                                                            <li>
                                                                                                SD [1]
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Heru Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                SMP [1]
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Rahmat Setyawan <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                SMA [1]
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Bangun Budiono <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                PT [5]
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Antonius Gunawan S. <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                UMUM [1]
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Melinda <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        Microlight [27]
                                                                                        <ul>
                                                                                            <li>
                                                                                                Trike [9]
                                                                                                <ul>
                                                                                                    <li>
                                                                                                        SD [1]
                                                                                                        <ul>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Heru Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        SMP [1]
                                                                                                        <ul>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Rahmat Setyawan <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        SMA [1]
                                                                                                        <ul>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Bangun Budiono <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        PT [5]
                                                                                                        <ul>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Antonius Gunawan S. <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        UMUM [1]
                                                                                                        <ul>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Melinda <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                Paramotor [9]
                                                                                                <ul>
                                                                                                    <li>
                                                                                                        SD [1]
                                                                                                        <ul>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Heru Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        SMP [1]
                                                                                                        <ul>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Rahmat Setyawan <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        SMA [1]
                                                                                                        <ul>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Bangun Budiono <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        PT [5]
                                                                                                        <ul>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Antonius Gunawan S. <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        UMUM [1]
                                                                                                        <ul>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Melinda <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                Ultralight [9]
                                                                                                <ul>
                                                                                                    <li>
                                                                                                        SD [1]
                                                                                                        <ul>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Heru Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        SMP [1]
                                                                                                        <ul>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Rahmat Setyawan <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        SMA [1]
                                                                                                        <ul>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Bangun Budiono <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        PT [5]
                                                                                                        <ul>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Antonius Gunawan S. <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        UMUM [1]
                                                                                                        <ul>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Melinda <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        Pesawat Bermotor [9]
                                                                                        <ul>
                                                                                            <li>
                                                                                                SD [1]
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Heru Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                SMP [1]
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Rahmat Setyawan <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                SMA [1]
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Bangun Budiono <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                PT [5]
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Antonius Gunawan S. <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                UMUM [1]
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Melinda <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        Layang Gantung [9]
                                                                                        <ul>
                                                                                            <li>
                                                                                                SD [1]
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Heru Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                SMP [1]
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Rahmat Setyawan <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                SMA [1]
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Bangun Budiono <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                PT [5]
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Antonius Gunawan S. <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                UMUM [1]
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Melinda <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        Pesawat Aerobatik [18]
                                                                                        <ul>
                                                                                            <li>
                                                                                                Paralayang [9]
                                                                                                <ul>
                                                                                                    <li>
                                                                                                        SD [1]
                                                                                                        <ul>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Heru Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        SMP [1]
                                                                                                        <ul>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Rahmat Setyawan <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        SMA [1]
                                                                                                        <ul>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Bangun Budiono <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        PT [5]
                                                                                                        <ul>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Antonius Gunawan S. <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        UMUM [1]
                                                                                                        <ul>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Melinda <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                Gantole [9]
                                                                                                <ul>
                                                                                                    <li>
                                                                                                        SD [1]
                                                                                                        <ul>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Heru Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        SMP [1]
                                                                                                        <ul>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Rahmat Setyawan <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        SMA [1]
                                                                                                        <ul>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Bangun Budiono <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        PT [5]
                                                                                                        <ul>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Antonius Gunawan S. <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        UMUM [1]
                                                                                                        <ul>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Melinda <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        Pesawat Heli [9]
                                                                                        <ul>
                                                                                            <li>
                                                                                                SD [1]
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Heru Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                SMP [1]
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Rahmat Setyawan <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                SMA [1]
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Bangun Budiono <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                PT [5]
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Antonius Gunawan S. <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                UMUM [1]
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Melinda <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        Swayasa [9]
                                                                                        <ul>
                                                                                            <li>
                                                                                                SD [1]
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Heru Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                SMP [1]
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Rahmat Setyawan <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                SMA [1]
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Bangun Budiono <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                PT [5]
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Antonius Gunawan S. <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                UMUM [1]
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Melinda <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    100
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center">
                                                                    9
                                                                </td>
                                                                <td>
                                                                    <div id="tree_p" class="tree-demo">
                                                                        <ul>
                                                                            <li>
                                                                                Pramuka Saka Dirgantara
                                                                                <ul>
                                                                                    <li>
                                                                                        Siaga [5]
                                                                                        <ul>
                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                Antonius Gunawan S <span><i class="fa fa-search-plus"></i></span>
                                                                                            </li>
                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                                            </li>
                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                            </li>
                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                                            </li>
                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        Penggalang [5]
                                                                                        <ul>
                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                Antonius Gunawan S <span><i class="fa fa-search-plus"></i></span>
                                                                                            </li>
                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                                            </li>
                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                            </li>
                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                                            </li>
                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        Penegak [5]
                                                                                        <ul>
                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                Antonius Gunawan S <span><i class="fa fa-search-plus"></i></span>
                                                                                            </li>
                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                                            </li>
                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                            </li>
                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                                            </li>
                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        Pandega [5]
                                                                                        <ul>
                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                Antonius Gunawan S <span><i class="fa fa-search-plus"></i></span>
                                                                                            </li>
                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                                            </li>
                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                            </li>
                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                                            </li>
                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    20
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center">
                                                                    10
                                                                </td>
                                                                <td>
                                                                    <div id="tree_q" class="tree-demo">
                                                                        <ul>
                                                                            <li>
                                                                                Masyarakat Penggemar Radio Komunikasi (ORARI) dan lain-lain
                                                                                <ul>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Antonius Gunawan S <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    5
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center">
                                                                    11
                                                                </td>
                                                                <td>
                                                                    <div id="tree_r" class="tree-demo">
                                                                        <ul>
                                                                            <li>
                                                                                Masyarakat yang berkecimpung di dunia media cetak dan elektronik terutama yang berhubungan dengan kedirgantaraan
                                                                                <ul>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Antonius Gunawan S <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    5
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center">
                                                                    12
                                                                </td>
                                                                <td>
                                                                    <div id="tree_s" class="tree-demo">
                                                                        <ul>
                                                                            <li>
                                                                                Satuan pelaksana penanggulangan bencana alam
                                                                                <ul>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Antonius Gunawan S <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                        Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    5
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center">
                                                                    13
                                                                </td>
                                                                <td>
                                                                    <div id="tree_t" class="tree-demo">
                                                                        <ul>
                                                                            <li>
                                                                                Masyarakat yang berkecimpung dalam bidang medis/paramedis
                                                                                <ul>
                                                                                    <li>
                                                                                        Dokter [40]
                                                                                        <ul>
                                                                                            <li>
                                                                                                Umum (5)
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Antonius Gunawan S <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                Gigi (5)
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Antonius Gunawan S <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                THT (5)
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Antonius Gunawan S <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                Bedah (5)
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Antonius Gunawan S <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                Jantung (5)
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Antonius Gunawan S <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                Spesialis (5)
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Antonius Gunawan S <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                Paramedis (5)
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Antonius Gunawan S <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                PMI (5)
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Antonius Gunawan S <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        Bidan (5)
                                                                                        <ul>
                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                Antonius Gunawan S <span><i class="fa fa-search-plus"></i></span>
                                                                                            </li>
                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                                            </li>
                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                            </li>
                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                                            </li>
                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        Perawat (5)
                                                                                        <ul>
                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                Antonius Gunawan S <span><i class="fa fa-search-plus"></i></span>
                                                                                            </li>
                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                                            </li>
                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                            </li>
                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                                            </li>
                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        Apoteker (5)
                                                                                        <ul>
                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                Antonius Gunawan S <span><i class="fa fa-search-plus"></i></span>
                                                                                            </li>
                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                                            </li>
                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                            </li>
                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                                            </li>
                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    55
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
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
                                            <table class="table table-striped table-bordeblue table-advance table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            No
                                                        </th>
                                                        <th>
                                                            Nama Sumber Daya
                                                        </th>
                                                        <th>
                                                            <i class="fa fa-bookmark"></i> Jumlah
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td style="text-align: center">
                                                            1
                                                        </td>
                                                        <td>
                                                            <div id="tree_1_1" class="tree-demo">
                                                                <ul>
                                                                    <li>
                                                                        Ruang udara atau wilayah antariksa tertentu yang dapat digunakan sebagai jalur penerbangan
                                                                        <ul>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                <a onClick="MM_openBrWindow('<?php echo site_url('main_menu/detail_jalur_penerbangan') ?>', 'Ruangg udara jalur penerbangan', 'scrollbars=yes,width=618,height=900')">
                                                                                    Lampung Air Area <span><i class="fa fa-search-plus"></i></span></a>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            1
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center">
                                                            2
                                                        </td>
                                                        <td>
                                                            <div id="tree_1_2" class="tree-demo">
                                                                <ul>
                                                                    <li>
                                                                        Wilayah darat yang dapat digunakan untuk menggelar alutsista udara beserta fasilitas sarana/prasarana pertahanan udara
                                                                        <ul>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Bali <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Jakarta <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Lampung <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Surabaya <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Papua <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            5
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center">
                                                            3
                                                        </td>
                                                        <td>
                                                            <div id="tree_1_3" class="tree-demo">
                                                                <ul>
                                                                    <li>
                                                                        Satuan pelaksana penanggulangan bencana alam
                                                                        <ul>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Kodam V/Brawijaya <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Kodam III/Siliwangi <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Kodam IV/Diponegoro <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Kodim 0501/Jakarta Pusat <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Kodim 0508/Depok <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            5
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center">
                                                            4
                                                        </td>
                                                        <td>
                                                            <div id="tree_1_4" class="tree-demo">
                                                                <ul>
                                                                    <li>
                                                                        Goa/lobang bawah tanah untuk menyimpan amunisi dan logistik
                                                                        <ul>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Gua Pindul. <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Gua Maria. <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Gua Hira <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Gua Jepang <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Gua Belanda <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            5
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center">
                                                            5
                                                        </td>
                                                        <td>
                                                            <div id="tree_1_5" class="tree-demo">
                                                                <ul>
                                                                    <li>
                                                                        Pembangkit energi dan sumber daya mineral (PLTA, PLTU, PLT Angin, PLT Panas Bumi, PLTD)
                                                                        <ul>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                PLTA Peusangan <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                PLTA Sigura-gura <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                PLTA Tangga <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                PLTA Asahan I <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                PLTA Batang Agam <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            5
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center">
                                                            6
                                                        </td>
                                                        <td>
                                                            <div id="tree_1_6" class="tree-demo">
                                                                <ul>
                                                                    <li>
                                                                        Danau alam dan buatan untuk latihan SAR dan latihan pendaratan pesawat amphibi
                                                                        <ul>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Danau Toba <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Danau Bungaran <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Danau Laut Bangko <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Danau Jepara <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Danau Cisanti <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            5
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center">
                                                            7
                                                        </td>
                                                        <td>
                                                            <div id="tree_1_7" class="tree-demo">
                                                                <ul>
                                                                    <li>
                                                                        Data Produk industri yang berkaitan dengan kedirgantaraan
                                                                        <ul>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Industri Pesawat Terbang <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <!-- <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Industri  <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                            </li> -->
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            1
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
                                            <table class="table table-striped table-bordeblue table-advance table-hover">
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
                                                    
                                                    <?php for($i = 8; $i<12; $i++){?>
                                                    <tr>
                                                        <td style="text-align: center">
                                                            <?php echo $i;?>
                                                        </td>
                                                        <td>
                                                            <div id="tree_1_<?php echo $i;?>" class="tree-demo">
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
                                                    <?php }?>
                                                    
                                                    <!--tr>
                                                        <td style="text-align: center">
                                                            2
                                                        </td>
                                                        <td>
                                                            <div id="tree_1_9" class="tree-demo">
                                                                <ul>
                                                                    <li>
                                                                        Wahana perhubungan udara yang meliputi transportasi udara, komunikasi dan jasa terkait dengan kedirgantaraan
                                                                        <ul>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Jaringan ATC <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Jaringan KODAL <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Jaringan Interbase <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Jaringan Intertower <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            4
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center">
                                                            3
                                                        </td>
                                                        <td>
                                                            <div id="tree_1_10" class="tree-demo">
                                                                <ul>
                                                                    <li>
                                                                        Jalan tol yang dapat dioperasikan sebagai landasan pacu
                                                                        <ul>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Tol Jagorawi <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Tol Japek <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Tol JORR <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Tol Cipularang <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Tol Palindra <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            5
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center">
                                                            4
                                                        </td>
                                                        <td>
                                                            <div id="tree_1_11" class="tree-demo">
                                                                <ul>
                                                                    <li>
                                                                        Wahana laut yang memungkinkan untuk digunakan bagi kegiatan kedirgantaraan
                                                                        <ul>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Wahana Agung Indonesia <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Wahana Sari Laut <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Seaworld <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Gelanggang Samudra <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            4
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center">
                                                            5
                                                        </td>
                                                        <td>
                                                            <div id="tree_1_12" class="tree-demo">
                                                                <ul>
                                                                    <li>
                                                                        Peralatan pemetaan udara dan penginderaan jarak jauh
                                                                        <ul>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                LiDAR Indonesia  <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                GPS Geo Smart 300 <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Continuously Operating Reference Station (CORS) <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Summit Evolution <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                UAV <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            5
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center">
                                                            6
                                                        </td>
                                                        <td>
                                                            <div id="tree_1_13" class="tree-demo">
                                                                <ul>
                                                                    <li>
                                                                        Stasiun radar, stasiun meteo, dan komunikasi
                                                                        <ul>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Stasiun Meteorologi Klas I Hang Nadim Batam <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Stasiun Meteorologi Klas IV Aek Godang <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Stasiun Meteorologi Klas II Blangbintang Banda Aceh <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Stasiun Meteorologi Klas III Nabire <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Stasiun Meteorologi Klas III Kaimana <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            5
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center">
                                                            7
                                                        </td>
                                                        <td>
                                                            <div id="tree_1_14" class="tree-demo">
                                                                <ul>
                                                                    <li>
                                                                        Alat pemadam kebakaran dan SAR
                                                                        <ul>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                APAR <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Thermatic system <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Alat Pemadam PORTABLE <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Trolley <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Hydrant <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            5
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center">
                                                            8
                                                        </td>
                                                        <td>
                                                            <div id="tree_1_15" class="tree-demo">
                                                                <ul>
                                                                    <li>
                                                                        Depo BBM udara
                                                                        <ul>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Depo Bandara Kalimarau <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            1
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center">
                                                            9
                                                        </td>
                                                        <td>
                                                            <div id="tree_1_16" class="tree-demo">
                                                                <ul>
                                                                    <li>
                                                                        Fasilitas pemeliharaan pesawat
                                                                        <ul>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Lion group <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Qantas <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                GMF AeroAsia <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Turkish Technic <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            4
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center">
                                                            10
                                                        </td>
                                                        <td>
                                                            <div id="tree_1_17" class="tree-demo">
                                                                <ul>
                                                                    <li>
                                                                        Rumah sakit disekitar bandara
                                                                        <ul>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Jl. Rs. Pol. Sukamto <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Rumah Sakit Puri Indah <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Rs. Usada Insani <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Rumah sakit Doktor Suyoto <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Rumah sakit Royal Taruma <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            5
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center">
                                                            11
                                                        </td>
                                                        <td>
                                                            <div id="tree_1_18" class="tree-demo">
                                                                <ul>
                                                                    <li>
                                                                        Lembaga penelitian dan lembaga pendidikan pengembangan bidang kedirgantaraan
                                                                        <ul>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Universitas Suryadarma <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                LAPAN <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            2
                                                        </td>
                                                    </tr-->
                                                </tbody>
                                            </table>
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
        <script src="<?php echo base_url() ?>assets/global/plugins/jstree/dist/jstree.min.js"></script>
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

                                                                                    $(function () {
                                                                                        $('#container').highcharts({
                                                                                            chart: {
                                                                                                type: 'column'
                                                                                            },
                                                                                            title: {
                                                                                                text: 'REKAPTULASI SDM BIDANG PENERBANGAN'
                                                                                            },
                                                                                            xAxis: {
                                                                                                categories: ['Ground handling',
                                                                                                    'TimSar Damkar', 'Survay Udara', 'Personil Meteo',
                                                                                                    'OpTek KomNav', 'OpTek Radar',
                                                                                                    'TekPem Pnb', 'Pnb Awak Pesawat'],
                                                                                                labels: {
                                                                                                    style: {
                                                                                                        fontSize: '12px',
                                                                                                        fontFamily: 'Verdana, sans-serif'
                                                                                                    }
                                                                                                }
                                                                                            },
                                                                                            yAxis: {
                                                                                                min: 0,
                                                                                                title: {
                                                                                                    text: 'Jumlah Anggota',
                                                                                                    align: 'high'
                                                                                                },
                                                                                                labels: {
                                                                                                    overflow: 'justify'
                                                                                                }
                                                                                            },
                                                                                            legend: false,
                                                                                            tooltip: {
                                                                                                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                                                                                                pointFormat: '<tr><td style="color:{series.color};padding:0"><b>:</b> </td>' +
                                                                                                        '<td style="padding:0"><b> Jumlah {point.y}</b></td></tr>',
                                                                                                footerFormat: '</table>',
                                                                                                shared: true,
                                                                                                useHTML: true
                                                                                            },
                                                                                            plotOptions: {
                                                                                                column: {
                                                                                                    dataLabels: {
                                                                                                        enabled: false
                                                                                                    }
                                                                                                }
                                                                                            },
                                                                                            series: [{
                                                                                                    data: [107, 233, 323, 123, 423, 532, 101, 104]
                                                                                                }]
                                                                                        });
                                                                                    });

                                                                                    $(function () {
                                                                                        $('#container2').highcharts({
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
                                                                                        evt.stopPropagation();
                                                                                    });

                                                                                    $('.segmented-button label.last').click(function (evt) {
                                                                                        $('.segmented-button label.last').addClass('active');
                                                                                        $('.segmented-button label.first').removeClass('active');
                                                                                        evt.stopPropagation();
                                                                                    });
        </script>
        <!-- END JAVASCRIPTS -->
    </body>
    <!-- END BODY -->
</html>