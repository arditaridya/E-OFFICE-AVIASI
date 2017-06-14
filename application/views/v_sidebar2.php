<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li class="heading">
                <h3 class="uppercase"><b>MENU</b></h3>
            </li>

            <li <?php
            if (isset($link_admin_aktif)) {
                echo $link_admin_aktif;
            }
            ?>>
                <a href="<?php echo site_url('main_menu') ?>">
                    <i class="icon-home"></i>
                    <span class="title">Menu Utama</span>
                    <span class="selected"></span>

                </a>
            </li>
            <li <?php
            if (isset($link_data_master)) {
                echo $link_data_master;
            }
            ?>>
                <a href="javascript:;">
                    <i class="fa fa-sitemap"></i>
                    <span class="title">Master</span>
                    <span class="selected"></span>
                    <span class="arrow <?php
                    if (isset($link_open_master)) {
                        echo $link_open_master;
                    }
                    ?>"></span>
                </a>
                <ul class="sub-menu">
                    <li <?php
                    if (isset($link_aktif_jenis)) {
                        echo $link_aktif_jenis;
                    }
                    ?>>
                        <a href="<?php echo site_url('c_master') ?>">
                            <i class="fa fa-folder"></i>
                            Users
                        </a>
                    </li>
                    <li <?php
                    if (isset($link_aktif_kategori)) {
                        echo $link_aktif_kategori;
                    }
                    ?>>
                        <a href="<?php echo site_url('c_master/master_kesatuan') ?>">
                            <i class="fa fa-folder"></i>
                            Kesatuan
                        </a>
                    </li>
                    <li <?php
                    if (isset($link_aktif_komando)) {
                        echo $link_aktif_komando;
                    }
                    ?>>
                        <a href="<?php echo site_url('c_master/ket_kesatuan') ?>">
                            <i class="fa fa-folder"></i>
                            Keterangan Kesatuan
                        </a>
                    </li>
                    <li <?php
                    if (isset($link_aktif_satuan)) {
                        echo $link_aktif_satuan;
                    }
                    ?>>
                        <a href="<?php echo site_url('c_master/jenis_kesatuan') ?>">
                            <i class="fa fa-folder"></i>
                            Jenis Kesatuan
                        </a>
                    </li>
                    <li <?php
                    if (isset($link_aktif_golongan)) {
                        echo $link_aktif_golongan;
                    }
                    ?>>
                        <a href="<?php echo site_url('c_master/kelompok_barang') ?>">
                            <i class="fa fa-folder"></i>
                            Kelompok Barang</a>
                    </li>
                    <li <?php
                    if (isset($link_aktif_jenjang)) {
                        echo $link_aktif_jenjang;
                    }
                    ?>>
                        <a href="<?php echo site_url('c_master/komoditi_barang') ?>">
                            <i class="fa fa-folder"></i>
                            Komoditi barang</a>
                    </li>
                    <li <?php
                    if (isset($link_aktif_pangkat)) {
                        echo $link_aktif_pangkat;
                    }
                    ?>>
                        <a href="<?php echo site_url('c_master/jenis_barang') ?>">
                            <i class="fa fa-folder"></i>
                            Jenis Barang</a>
                    </li>
                    <li <?php
                    if (isset($link_aktif_korps)) {
                        echo $link_aktif_korps;
                    }
                    ?>>
                        <a href="<?php echo site_url('c_master/fungsi_barang') ?>">
                            <i class="fa fa-folder"></i>
                            Fungsi barang</a>
                    </li>
                    <li <?php
                    if (isset($link_aktif_profesi)) {
                        echo $link_aktif_profesi;
                    }
                    ?>>
                        <a href="<?php echo site_url('c_master/barang') ?>">
                            <i class="fa fa-folder"></i>
                            Barang</a>
                    </li>
                </ul>
            </li>
            <li <?php
            if (isset($link_kesatuan)) {
                echo $link_kesatuan;
            }
            ?>>
                <a href="javascript:;">
                    <i class="fa fa-sitemap"></i>
                    <span class="title">Kesatuan</span>
                    <span class="selected"></span>
                    <span class="arrow <?php
                    if (isset($link_open_master)) {
                        echo $link_open_master;
                    }
                    ?>"></span>
                </a>
                <ul class="sub-menu">
                    <li <?php
                    if (isset($link_aktif_jenis)) {
                        echo $link_aktif_jenis;
                    }
                    ?>>
                        <a href="<?php echo site_url('c_kesatuan/mabes_tni/5305') ?>">
                            <i class="fa fa-folder"></i>
                            MABES TNI
                        </a>
                    </li>
                    <li <?php
                    if (isset($link_aktif_kategori)) {
                        echo $link_aktif_kategori;
                    }
                    ?>>
                        <a href="<?php echo site_url('c_kesatuan/tni_ad/1') ?>">
                            <i class="fa fa-folder"></i>
                            TNI AD
                        </a>
                    </li>
                    <li <?php
                    if (isset($link_aktif_komando)) {
                        echo $link_aktif_komando;
                    }
                    ?>>
                        <a href="<?php echo site_url('c_kesatuan/tni_al/5332') ?>">
                            <i class="fa fa-folder"></i>
                            TNI AL
                        </a>
                    </li>
                    <li <?php
                    if (isset($link_aktif_satuan)) {
                        echo $link_aktif_satuan;
                    }
                    ?>>
                        <a href="<?php echo site_url('c_kesatuan/tni_au/5336') ?>">
                            <i class="fa fa-folder"></i>
                            TNI AU
                        </a>
                    </li>
                </ul>
            </li>
            <li <?php
            if (isset($link_laporan)) {
                echo $link_laporan;
            }
            ?>>
                <a href="javascript:;">
                    <i class="fa fa-sitemap"></i>
                    <span class="title">Laporan</span>
                    <span class="selected"></span>
                    <span class="arrow <?php
                    if (isset($link_open_master)) {
                        echo $link_open_master;
                    }
                    ?>"></span>
                </a>
                <ul class="sub-menu">
                    <li <?php
                    if (isset($link_aktif_jenis)) {
                        echo $link_aktif_jenis;
                    }
                    ?>>
                        <a href="<?php echo site_url('c_kesatuan/mabes_tni') ?>">
                            <i class="fa fa-folder"></i>
                            MABES TNI
                        </a>
                    </li>
                    <li <?php
                    if (isset($link_aktif_kategori)) {
                        echo $link_aktif_kategori;
                    }
                    ?>>
                        <a href="<?php echo site_url('c_kesatuan/tni_ad') ?>">
                            <i class="fa fa-folder"></i>
                            TNI AD
                        </a>
                    </li>
                    <li <?php
                    if (isset($link_aktif_komando)) {
                        echo $link_aktif_komando;
                    }
                    ?>>
                        <a href="<?php echo site_url('c_kesatuan/tni_al') ?>">
                            <i class="fa fa-folder"></i>
                            TNI AL
                        </a>
                    </li>
                    <li <?php
                    if (isset($link_aktif_satuan)) {
                        echo $link_aktif_satuan;
                    }
                    ?>>
                        <a href="<?php echo site_url('c_kesatuan/tni_au') ?>">
                            <i class="fa fa-folder"></i>
                            TNI AU
                        </a>
                    </li>
                </ul>
            </li>
            <li <?php
            if (isset($link_alutsista)) {
                echo $link_alutsista;
            }
            ?>>
                <a href="javascript:;">
                    <i class="fa fa-sitemap"></i>
                    <span class="title">Alutsista</span>
                    <span class="selected"></span>
                    <span class="arrow <?php
                    if (isset($link_open_alutsista)) {
                        echo $link_open_alutsista;
                    }
                    ?>"></span>
                </a>
                <ul class="sub-menu">
                    <li <?php
                    if (isset($link_aktif_mabes)) {
                        echo $link_aktif_mabes;
                    }
                    ?>>
                        <a href="<?php echo site_url('c_alutsista/mabes_tni') ?>">
                            <i class="fa fa-folder"></i>
                            MABES TNI
                        </a>
                    </li>
                    <li <?php
                    if (isset($link_aktif_adi)) {
                        echo $link_aktif_ad;
                    }
                    ?>>
                        <a href="<?php echo site_url('c_alutsista/tni_ad') ?>">
                            <i class="fa fa-folder"></i>
                            TNI AD
                        </a>
                    </li>
                    <li <?php
                    if (isset($link_aktif_al)) {
                        echo $link_aktif_al;
                    }
                    ?>>
                        <a href="<?php echo site_url('c_alutsista/tni_al') ?>">
                            <i class="fa fa-folder"></i>
                            TNI AL
                        </a>
                    </li>
                    <li <?php
                    if (isset($link_aktif_au)) {
                        echo $link_aktif_au;
                    }
                    ?>>
                        <a href="<?php echo site_url('c_alutsista/tni_au') ?>">
                            <i class="fa fa-folder"></i>
                            TNI AU
                        </a>
                    </li>
                </ul>
            </li>            
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>
<!-- END SIDEBAR -->