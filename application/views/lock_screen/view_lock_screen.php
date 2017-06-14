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
        <title>ALUTSISTA | Lock Screen</title>
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
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?php echo base_url() ?>assets/admin/pages/css/lock2.css" rel="stylesheet" type="text/css"/>
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME STYLES -->
        <link href="<?php echo base_url() ?>assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>assets/admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css" id="style_color"/>
        <link href="<?php echo base_url() ?>assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
        <!-- END THEME STYLES -->
        <script language="Javascript">
            function capLock(e) {
                kc = e.keyCode ? e.keyCode : e.which;
                sk = e.shiftKey ? e.shiftKey : ((kc == 16) ? true : false);
                if (((kc >= 65 && kc <= 90) && !sk) || ((kc >= 97 && kc <= 122) && sk))
                    document.getElementById('divMayus').style.visibility = 'visible';
                else
                    document.getElementById('divMayus').style.visibility = 'hidden';
            }
        </script>
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body>
        <!-- BEGIN LOGO -->
        <!--        <div class="container-fluid">
                    <div class="row">
                        <a href="index.html">
                            <div style="padding-left: 0px"><img src="<?php echo base_url() ?>assets/admin/layout/img/header_Potdirga.jpg" class="img-responsive" style="border-bottom: 3px solid black; width: 100%; height: 150px"></div>
                        </a>
                    </div>
                </div>-->
        <br />
        <br />
        <br />
        <br />
        <!-- END LOGO -->
        <div class="page-lock">
            <div class="page-logo">

            </div>
            <div class="page-body">
                <div class="col-lg-2"></div><img class="img-responsive" src="<?php echo base_url() ?>assets/global/img/logo_mabes_au.png">
                <hr>
                <img class="page-lock-img" src="<?php echo base_url() ?>assets/admin/pages/media/profile/profile.jpg" alt="">
                <div class="page-lock-info">
                    <?php
//                    if ($this->session->flashdata('result_lock')) {
//                        
                    ?>
                    <!--                        <div class="alert alert-danger">
                                                <button class="close" data-close="alert"></button>
                                                <span>
                                                    Password Salah. </span>
                                            </div>-->
                    <?php // }  ?>
                    <h1><?php echo "<span style='color:black;'>" . strtoupper($this->session->userdata('user_name')) . "</span>"; ?></h1>
                    <span class="email">
                    </span>
                    <span class="locked">
                        Locked </span><span class="email">
                    </span>
                    <span style='color:black;'>
                        <?php
                        if ($this->session->flashdata('gagal_unlock')) {
                            echo '<div class="alert alert-danger"><a class="close" data-dismiss="alert">&times;</a><i class="fa-lg fa fa-warning"></i>Password Salah</div>';
                        }
                        ?>
                    </span>
                    <form class="form-inline" action="<?php echo base_url('lock_screen/unlock') ?>" method="post">
                        <div>
                             <div id="divMayus" style="visibility:hidden">Caps Lock Aktif.</div> 
                        </div>
                        <div class="input-group input-medium">
                           
                            <input type="password" class="form-control" name="password" placeholder="Password" onkeypress="capLock(event)">
                            <span class="input-group-btn">
                                <button type="submit" class="btn blue icn-only"><i class="m-icon-swapright m-icon-white"></i></button>
                            </span>
                        </div>
                        <!-- /input-group -->
                        <div class="relogin">
                            <a href="<?php echo site_url('logout') ?>" style="text-decoration: none; border-bottom:1px dotted;border-color: black;">
                                <?php echo "<span style='color:black;'>Bukan " . strtoupper($this->session->userdata('user_name')) . "?</span>"; ?></a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="page-footer-custom">
                <span style='color:black;'><?php echo date('Y') ?> &copy; DISPOTDIRGA TNI AU.</span>
            </div>
        </div>
        <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- BEGIN CORE PLUGINS -->
        <!--[if lt IE 9]>
        <script src="<?php echo base_url() ?>assets/global/plugins/respond.min.js"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/excanvas.min.js"></script> 
        <![endif]-->
        <script src="<?php echo base_url() ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url() ?>assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url() ?>assets/global/scripts/metronic.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/admin/pages/scripts/lock.js"></script>
        <script>
                                jQuery(document).ready(function () {
                                    Metronic.init(); // init metronic core components
                                    Layout.init(); // init current layout
                                    Lock.init();
                                    Demo.init();
                                });
        </script>
        <!-- END JAVASCRIPTS -->
    </body>
    <!-- END BODY -->
</html>