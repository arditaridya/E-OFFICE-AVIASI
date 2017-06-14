<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.1
Version: 3.6
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">

    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>ALUTSISTA | <?php echo $main_menu ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
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
        <link href="<?php echo base_url() ?>assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
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
        
        <script>
            function MM_openBrWindow(theURL, winName, features) { //v2.0
                window.open(theURL, winName, features);
            }
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
                *display: inline;
            }
            .segmented-button label:hover {
                -moz-box-shadow: 0 0 5px 1px rgba(0, 0, 0, 0.1);
                -webkit-box-shadow: 0 0 5px 1px rgba(0, 0, 0, 0.1);
                -o-box-shadow: 0 0 5px 1px rgba(0, 0, 0, 0.1);
                box-shadow: 0 0 5px 1px rgba(0, 0, 0, 0.1);
                color: #333333;
            }
            .segmented-button label:active, .segmented-button label.active {
                background: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #e4e4e4), color-stop(100%, #ffffff));
                background: -webkit-linear-gradient(#e4e4e4, #ffffff);
                background: -moz-linear-gradient(#e4e4e4, #ffffff);
                background: -o-linear-gradient(#e4e4e4, #ffffff);
                background: -ms-linear-gradient(#e4e4e4, #ffffff);
                background: linear-gradient(#e4e4e4, #ffffff);
            }
            .segmented-button label:disabled, .segmented-button label.disabled {
                background: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #ffffff), color-stop(100%, #efefef));
                background: -webkit-linear-gradient(#ffffff, #efefef);
                background: -moz-linear-gradient(#ffffff, #efefef);
                background: -o-linear-gradient(#ffffff, #efefef);
                background: -ms-linear-gradient(#ffffff, #efefef);
                background: linear-gradient(#ffffff, #efefef);
                cursor: default;
                color: #b2b2b2;
                border-color: #cccccc;
                -moz-box-shadow: none;
                -webkit-box-shadow: none;
                -o-box-shadow: none;
                box-shadow: none;
            }
            .segmented-button label.first {
                -moz-border-radius-topleft: 4px;
                -webkit-border-top-left-radius: 4px;
                -o-border-top-left-radius: 4px;
                -ms-border-top-left-radius: 4px;
                -khtml-border-top-left-radius: 4px;
                border-top-left-radius: 4px;
                -moz-border-radius-bottomleft: 4px;
                -webkit-border-bottom-left-radius: 4px;
                -o-border-bottom-left-radius: 4px;
                -ms-border-bottom-left-radius: 4px;
                -khtml-border-bottom-left-radius: 4px;
                border-bottom-left-radius: 4px;
            }
            .segmented-button label.last {
                -moz-border-radius-topright: 4px;
                -webkit-border-top-right-radius: 4px;
                -o-border-top-right-radius: 4px;
                -ms-border-top-right-radius: 4px;
                -khtml-border-top-right-radius: 4px;
                border-top-right-radius: 4px;
                -moz-border-radius-bottomright: 4px;
                -webkit-border-bottom-right-radius: 4px;
                -o-border-bottom-right-radius: 4px;
                -ms-border-bottom-right-radius: 4px;
                -khtml-border-bottom-right-radius: 4px;
                border-bottom-right-radius: 4px;
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
                background: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #ffffff), color-stop(100%, #efefef));
                background: -webkit-linear-gradient(#ffffff, #efefef);
                background: -moz-linear-gradient(#ffffff, #efefef);
                background: -o-linear-gradient(#ffffff, #efefef);
                background: -ms-linear-gradient(#ffffff, #efefef);
                background: linear-gradient(#ffffff, #efefef);
                cursor: default;
                color: #b2b2b2;
                border-color: #cccccc;
                -moz-box-shadow: none;
                -webkit-box-shadow: none;
                -o-box-shadow: none;
                box-shadow: none;
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

                <div style="padding-left: 0px"><img src="<?php echo base_url() ?>assets/admin/layout/img/header_Potdirga.jpg" class="img-responsive" style="width: 100%; height: 150px"></div>

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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
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
                            </ul>
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
                                                        Lisa </span>
                                                    <span class="time">Baru Saja </span>
                                                </span>
                                                <span class="message">
                                                    Apa kabar Pak?... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                    <img src="<?php echo base_url() ?>assets/admin/layout3/img/avatar3.jpg" class="img-circle" alt="">
                                                </span>
                                                <span class="subject">
                                                    <span class="from">
                                                        Deni </span>
                                                    <span class="time">16 menit </span>
                                                </span>
                                                <span class="message">
                                                    Kapan mulai proyek?... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                    <img src="<?php echo base_url() ?>assets/admin/layout3/img/avatar1.jpg" class="img-circle" alt="">
                                                </span>
                                                <span class="subject">
                                                    <span class="from">
                                                        Bobi </span>
                                                    <span class="time">2 jam </span>
                                                </span>
                                                <span class="message">
                                                    Tolong hubungi saya... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                    <img src="<?php echo base_url() ?>assets/admin/layout3/img/avatar2.jpg" class="img-circle" alt="">
                                                </span>
                                                <span class="subject">
                                                    <span class="from">
                                                        Lisa </span>
                                                    <span class="time">40 menit </span>
                                                </span>
                                                <span class="message">
                                                    Apa kabar Pak?... </span>
                                            </a>
                                        </li>
                                        <li>
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
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- END INBOX DROPDOWN -->
                        <!-- BEGIN TODO DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
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
                            </ul>
                        </li>
                        <!-- END TODO DROPDOWN -->
                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-user">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle" src="<?php echo base_url() ?>assets/admin/layout/img/avatar3_small.jpg"/>
                                <span class="username username-hide-on-mobile">
                                    Pimpinan </span>
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
                                    <a href="<?php echo site_url('login') ?>">
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
                        <input type="radio" name="rdb" value="1" id="seg-Organisation" checked>
                        <label for="seg-Organisation" class="first"> <span><i class="fa fa-list"></i></span> Laporan Umum </label>

                        <input type="radio" name="rdb" value="2" id="seg-Tags">
                        <label for="seg-Tags" class="last"><span><i class="fa fa-bar-chart-o"></i></span> Grafik</label>
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
                                        <a href="#portlet-config" data-toggle="modal" class="config">
                                        </a>
                                        <a href="javascript:;" class="reload">
                                        </a>
                                        <a href="javascript:;" class="remove">
                                        </a>
                                    </div>
                                </div>
                                <!--<div class="col-md-6">-->
                                <div class="portlet-body">
                                    <div class="row clearfix">
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
                                                                    Profesi Dalam Dunia Penerbangan
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
                                                                    <div id="tree_1" class="tree-demo">
                                                                        <ul>
                                                                            <li>
                                                                                Penerbang/pilot dan awak pesawat
                                                                                <ul>
                                                                                    <li>
                                                                                        Penerbang [520]
                                                                                        <ul>
                                                                                            <li>
                                                                                                Tempur [10]
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        <a onClick="MM_openBrWindow('<?php echo site_url('sdm/detail_sdm_pilot') ?>', 'Pilot', 'scrollbars=yes,width=618,height=900')">
                                                                                                            Aan Dedy <span><i class="fa fa-search-plus"></i></span></a>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Ade Masidin <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Aditya Ryan Pratama <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Adityawarman <span><i class="fa fa-search-plus"></i></span>
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
                                                                                            <li>
                                                                                                Angkut
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Makmur Syahruddin <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Luhur Prasetyono <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                Heli
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Panji Anjasmara <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Nugroho Cahyadi W. <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        Navigator [525]
                                                                                        <ul>
                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                Gatot Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                            </li>
                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                Heru Anggraito <span><i class="fa fa-search-plus"></i></span>
                                                                                            </li>
                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                Imam Sayogo <span><i class="fa fa-search-plus"></i></span>
                                                                                            </li>
                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                Muhammad Budhi Setyawan <span><i class="fa fa-search-plus"></i></span>
                                                                                            </li>
                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                Totok Ari Wardana <span><i class="fa fa-search-plus"></i></span>
                                                                                            </li>
                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                Wahyu Tri Nugroho <span><i class="fa fa-search-plus"></i></span>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    1.045
                                                                </td>
                                                            </tr>
                                                        <div class="modal fade" id="full" tabindex="-1" role="dialog" aria-hidden="true">
                                                            <div class="modal-dialog modal-full">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                                        <h4 class="modal-title">Modal Title</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Modal body goes here
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn default" data-dismiss="modal">Close</button>
                                                                        <button type="button" class="btn blue">Save changes</button>
                                                                    </div>
                                                                </div>
                                                                <!-- /.modal-content -->
                                                            </div>
                                                            <!-- /.modal-dialog -->
                                                        </div>
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
                                                                                    Pesawat
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
                                                                                    Radar
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
                                                                                    Komnav(ATC/PLLU)
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
                                                                1.344
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
                                                                567
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
                                                                764
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
                                                                592
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
                                                                1.875
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
                                                                9.876
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
                                                                765
                                                            </td>
                                                        </tr>
                                                        </tbody>
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
                                                                    1.045
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
                                                                    1.344
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
                                                                    567
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
                                                                    764
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
                                                                    592
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
                                                                    1.875
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
                                                                    9.876
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
                                                                                        Terjun Payung
                                                                                        <ul>
                                                                                            <li>
                                                                                                SD (10)
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Budi Prasetyo <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                SMP (10)
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Selamet Raharjo <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                SMA (10)
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Bangun Budiono <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                PT (10)
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        <a onClick="MM_openBrWindow('<?php echo site_url('sdm/detail_penggemar_olahraga') ?>', 'Penggemar Olahraga Dirgantara ', 'scrollbars=yes,width=618,height=900')">
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
                                                                                                UMUM (10)
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Melinda <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        Terbang Layang
                                                                                        <ul>
                                                                                            <li>
                                                                                                SD (10)
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Heru Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                SMP (10)
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Rahmat Setyawan <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                SMA (10)
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Bangun Budiono <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                PT (10)
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
                                                                                                UMUM (10)
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Melinda <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        Microlight
                                                                                        <ul>
                                                                                            <li>
                                                                                                Trike
                                                                                                <ul>
                                                                                                    <li>
                                                                                                        SD (10)
                                                                                                        <ul>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Heru Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        SMP (10)
                                                                                                        <ul>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Rahmat Setyawan <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        SMA (10)
                                                                                                        <ul>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Bangun Budiono <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        PT (10)
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
                                                                                                        UMUM (10)
                                                                                                        <ul>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Melinda <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                Paramotor
                                                                                                <ul>
                                                                                                    <li>
                                                                                                        SD (10)
                                                                                                        <ul>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Heru Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        SMP (10)
                                                                                                        <ul>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Rahmat Setyawan <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        SMA (10)
                                                                                                        <ul>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Bangun Budiono <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        PT (10)
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
                                                                                                        UMUM (10)
                                                                                                        <ul>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Melinda <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                Ultralight
                                                                                                <ul>
                                                                                                    <li>
                                                                                                        SD (10)
                                                                                                        <ul>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Heru Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        SMP (10)
                                                                                                        <ul>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Rahmat Setyawan <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        SMA (10)
                                                                                                        <ul>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Bangun Budiono <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        PT (10)
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
                                                                                                        UMUM (10)
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
                                                                                        Pesawat Bermotor
                                                                                        <ul>
                                                                                            <li>
                                                                                                SD (10)
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Heru Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                SMP (10)
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Rahmat Setyawan <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                SMA (10)
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Bangun Budiono <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                PT (10)
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
                                                                                                UMUM (10)
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Melinda <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        Layang Gantung
                                                                                        <ul>
                                                                                            <li>
                                                                                                SD (10)
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Heru Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                SMP (10)
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Rahmat Setyawan <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                SMA (10)
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Bangun Budiono <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                PT (10)
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
                                                                                                UMUM (10)
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Melinda <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        Pesawat Aerobatik
                                                                                        <ul>
                                                                                            <li>
                                                                                                Paralayang
                                                                                                <ul>
                                                                                                    <li>
                                                                                                        SD (10)
                                                                                                        <ul>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Heru Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        SMP (10)
                                                                                                        <ul>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Rahmat Setyawan <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        SMA (10)
                                                                                                        <ul>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Bangun Budiono <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        PT (10)
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
                                                                                                        UMUM (10)
                                                                                                        <ul>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Melinda <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                Gantole
                                                                                                <ul>
                                                                                                    <li>
                                                                                                        SD (10)
                                                                                                        <ul>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Heru Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        SMP (10)
                                                                                                        <ul>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Rahmat Setyawan <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        SMA (10)
                                                                                                        <ul>
                                                                                                            <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                                Bangun Budiono <span><i class="fa fa-search-plus"></i></span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        PT (10)
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
                                                                                                        UMUM (10)
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
                                                                                        Pesawat Heli
                                                                                        <ul>
                                                                                            <li>
                                                                                                SD (10)
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Heru Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                SMP (10)
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Rahmat Setyawan <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                SMA (10)
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Bangun Budiono <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                PT (10)
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
                                                                                                UMUM (10)
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Melinda <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        Swayasa
                                                                                        <ul>
                                                                                            <li>
                                                                                                SD (10)
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Heru Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                SMP (10)
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Rahmat Setyawan <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                SMA (10)
                                                                                                <ul>
                                                                                                    <li data-jstree='{ "icon" : "fa fa-user icon-state-success " }'>
                                                                                                        Bangun Budiono <span><i class="fa fa-search-plus"></i></span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                PT (10)
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
                                                                                                UMUM (10)
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
                                                                    550
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
                                                                                        Siaga
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
                                                                                        Penggalang
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
                                                                                        Penegak
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
                                                                                        Pandega
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
                                                                    765
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
                                                                    765
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
                                                                    765
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
                                                                    765
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
                                                                                        Dokter
                                                                                        <ul>
                                                                                            <li>
                                                                                                Umum (259)
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
                                                                                                Gigi (50)
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
                                                                                                THT (100)
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
                                                                                                Bedah (100)
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
                                                                                                Jantung (100)
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
                                                                                                Spesialis (115)
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
                                                                                                Paramedis (2.808)
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
                                                                                                PMI (1.168)
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
                                                                                        Bidan (100)
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
                                                                                        Perawat (100)
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
                                                                                        Apoteker (130)
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
                                                                    5.030
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
                                            <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title="">
                                            </a>
                                            <a href="javascript:;" class="reload" data-original-title="" title="">
                                            </a>
                                            <a href="javascript:;" class="remove" data-original-title="" title="">
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
                                                                                <a onClick="MM_openBrWindow('<?php echo site_url('sdm/detail_jalur_penerbangan') ?>', 'Ruangg udara jalur penerbangan', 'scrollbars=yes,width=618,height=900')">
                                                                                    Lampung Air Area <span><i class="fa fa-search-plus"></i></span></a>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Lampung A <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Lampung B <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Lampung C <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Lampung D <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            765
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
                                                                                Wilayah AB <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Wilayah CD <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Wilayah EF <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Wilayah GH <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Wilayah IJ <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            765
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
                                                                                Satuan A <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Satuan B <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Satuan C <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Satuan D <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Satuan E <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            765
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
                                                                                Goa A <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Goa B <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Goa C <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Goa D <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Goa E <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            765
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
                                                                                Antonius Gunawan S <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            765
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
                                                                                Antonius Gunawan S <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            765
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
                                                                                Antonius Gunawan S <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Aprison <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Aris Susanto <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Bambang Tengki P. <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Catur Mei Riselasih <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            765
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
                                            <i class="fa fa-tree"></i>SARANA DAN PRASARANA
                                        </div>
                                        <div class="tools">
                                            <a href="javascript:;" class="collapse" data-original-title="" title="">
                                            </a>
                                            <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title="">
                                            </a>
                                            <a href="javascript:;" class="reload" data-original-title="" title="">
                                            </a>
                                            <a href="javascript:;" class="remove" data-original-title="" title="">
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
                                                    <tr>
                                                        <td style="text-align: center">
                                                            1
                                                        </td>
                                                        <td>
                                                            <div id="tree_1_8" class="tree-demo">
                                                                <ul>
                                                                    <li>
                                                                        Bandara/lapangan terbang/grass strip dan helipad
                                                                        <ul>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                <a onClick="MM_openBrWindow('<?php echo site_url('sdm/detail_bandara_helipad') ?>', 'Ruangg udara jalur penerbangan', 'scrollbars=yes,width=618,height=900')">
                                                                                    Lampung Air Area <span><i class="fa fa-search-plus"></i></span></a>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Merauke Air Area <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            765
                                                        </td>
                                                    </tr>
                                                    <tr>
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
                                                                                Wahana A <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Wahana B <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Wahana C <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Wahana D <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Wahana E <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            765
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
                                                                                Tol A <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Tol B <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Tol C <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Tol D <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Tol E <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            765
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
                                                                                Wahana A <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Wahana B <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Wahana C <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Wahana D <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Wahana E <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            765
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
                                                                                Peralatan A <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Peralatan B <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Peralatan C <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Peralatan D <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Peralatan E <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            765
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
                                                                                Stasiun A <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Stasiun B <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Stasiun C <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Stasiun D <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Stasiun E <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            765
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
                                                                                Alat A <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Alat B <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Alat C <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Alat D <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Alat E <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            765
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
                                                                                Depo A <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Depo B <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Depo C <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Depo D <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Depo E <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            765
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
                                                                                Fasilitas A <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Fasilitas B <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Fasilitas C <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Fasilitas D <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Fasilitas E <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            765
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
                                                                                Rumah sakit A <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Rumah sakit B <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Rumah sakit C <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Rumah sakit D <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Rumah sakit E <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            765
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
                                                                                Lembaga penelitian A <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Lembaga penelitian B <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Lembaga penelitian C <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Lembaga penelitian D <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                            <li data-jstree='{ "icon" : "fa fa-arrow-circle-right icon-state-success " }'>
                                                                                Lembaga penelitian E <span><i class="fa fa-search-plus"></i></span>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            765
                                                        </td>
                                                    </tr>
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
                        <?php echo $this->load->view('view_grafik_pimpinan') ?>
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
        <script src="<?php echo base_url() ?>assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
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
                                                                                        Index.init();
                                                                                        Index.initJQVMAP(); // init index page's custom scripts
                                                                                        Index.initCalendar(); // init index page's custom scripts
                                                                                        Index.initCharts(); // init index page's custom scripts
                                                                                        Index.initChat();
                                                                                        Index.initMiniCharts();
                                                                                        Index.initDashboardDaterange();
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
                                                                                                categories: ['Pengisian bahan bakar pesawat dan ground handling',
                                                                                                    'Tim Sar dan Pemadam Kebakaran', 'Personil Survay Udara', 'Personil Meteo',
                                                                                                    'Operator dan Teknisi Komunikasi Navigasi', 'Operator dan Teknisi Radar',
                                                                                                    'Teknisi Penyiap dan Pemeliharaan Pesawat', 'Penerbang/Pilot dan Awak Pesawat'],
                                                                                                labels: {
                                                                                                    rotation: -45,
                                                                                                    style: {
                                                                                                        fontSize: '13px',
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

                                                                                    $('.segmented-button label').click(function (evt) {
                                                                                        evt.stopPropagation();
                                                                                    });
        </script>
        <!-- END JAVASCRIPTS -->
    </body>
    <!-- END BODY -->
</html>