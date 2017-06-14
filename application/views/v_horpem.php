<!-- BEGIN HEADER -->
<!-- BEGIN LOGO -->
<div class="container-fluid">
    <div class="row">
        <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 1366px; height: 126px; overflow: hidden; background-color="#FFF";>

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
                <div>
                    <img u="image" src="<?php echo base_url() ?>assets/admin/layout/img/header1.jpg" />
                </div>
				<div>
                            <img u="image" src="<?php echo base_url() ?>assets/admin/layout/img/header2.jpg" />
                        </div>
                        <div>
                            <img u="image" src="<?php echo base_url() ?>assets/admin/layout/img/header3.jpg" />
                        </div>
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

<!-- END LOGO -->
<div class="page-header navbar navbar-static-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner">
        
        <div class="page-logo">
            <!--<a href="<?php echo site_url('main_menu') ?>">
                <img src="<?php echo base_url() ?>assets/admin/layout/img/MABESTNI.png" alt="logo" class="logo-default"/>
            </a>-->
			
            <div class="menu-toggler sidebar-toggler">
            </div>
        </div>
        <!-- END LOGO -->

        <!-- BEGIN HORIZANTAL MENU -->
        <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
        <!-- DOC: This is desktop version of the horizontal menu. The mobile version is defined(duplicated) sidebar menu below. So the horizontal menu has 2 seperate versions -->
        <!--<div class="hor-menu hidden-sm hidden-xs">
            <ul class="nav navbar-nav">
                <li class="classic-menu-dropdown <?php
                if ($this->uri->segment(1) == 'main_menu') {
                    echo "active";
                }
                ?>">
                    <a href="<?php echo site_url('main_menu') ?>">
                        Menu Utama <span class="selected"></span>
                    </a>
                </li>
                <?php if ($this->session->userdata('level') == 1 or $this->session->userdata('level') == 2) { ?>
                    <li class="classic-menu-dropdown <?php
                    if ($this->uri->segment(1) == 'sdm') {
                        echo "active";
                    }
                    ?>">
                        <a href="<?php echo site_url('c_kesatuan') ?>">
                            Kesatuan <span class="selected">
                            </span>
                        </a>
                    </li>
                <?php } ?>
                <?php if ($this->session->userdata('level') == 1 or $this->session->userdata('level') == 2) { ?>
                    <li class="classic-menu-dropdown <?php
                    if ($this->uri->segment(1) == 'sdab') {
                        echo "active";
                    }
                    ?>">
                        <a href="<?php echo site_url('c_laporan') ?>">
                            Laporan  <span class="selected"></span>
                        </a>
                    </li>
                <?php } ?>
                <?php if ($this->session->userdata('level') == 1 or $this->session->userdata('level') == 2) { ?>
                    <li class="classic-menu-dropdown <?php
                    if ($this->uri->segment(1) == 'saprana') {
                        echo "active";
                    }
                    ?>">
                        <a href="<?php echo site_url('c_pencarian') ?>">
                            Pencarian <span class="selected"></span>
                        </a>
                    </li>
                <?php } ?>
                <?php if ($this->session->userdata('level') == 1 or $this->session->userdata('level') == 2) { ?>
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
        </div>-->
        <!-- END HORIZANTAL MENU -->
        <!-- BEGIN HEADER SEARCH BOX -->

        <!-- END HEADER SEARCH BOX -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <!-- BEGIN NOTIFICATION DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                </li>
                
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