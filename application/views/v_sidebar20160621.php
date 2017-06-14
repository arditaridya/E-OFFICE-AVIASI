<!-- BEGIN SIDEBAR -->

<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li class="heading">
                <h3 class="uppercase"><b>MENU</b></h3>
            </li>
            <li <?php if (isset($link_admin_aktif)){ echo $link_admin_aktif; }?> >
                <a href="<?php echo site_url('main_menu/admin') ?>">
                    <i class="icon-home"></i>
                    <span class="title">Menu Utama</span>
                    <span class="selected"></span>
                </a>
            </li>

			<!-- MASTER -->
            <li <?php if (isset($link_data_master)) { echo $link_data_master;}?> >
                <a href="javascript:;">
                    <i class="fa fa-sitemap"></i>
                    <span class="title">Master</span>
                    <span class="selected"></span>
                    <span class="arrow <?php if (isset($link_open_master)) { echo $link_open_master;}?>"></span>
                </a>
                <ul class="sub-menu">
                    <li <?php if (isset($link_aktif_users)) {echo $link_aktif_users;}?>>
                        <a href="<?php echo site_url('c_master') ?>">
                            <i class="fa fa-folder"></i>
                            Users
                        </a>
                    </li>
                    <li <?php if (isset($link_aktif_kesatuan)) { echo $link_aktif_kesatuan;}?>>
                        <a href="<?php echo site_url('c_kesatuan') ?>">
                            <i class="fa fa-folder"></i>
                            Kesatuan
                        </a>
                    </li>
					
					 <li <?php
            if (isset($link_open_wilayah)) {
                echo $link_open_wilayah;
            }
            ?>>
                <a href="javascript:;">
                    <i class="fa fa-sitemap"></i>
                    <span class="title">Wilayah</span>
                    <span class="selected"></span>
                    <span class="arrow <?php
                    if (isset($link_open_master)) {
                        echo $link_open_master;
                    }
                    ?>"></span>
                </a>
                <ul class="sub-menu">
                    <li <?php
                    if (isset($link_aktif_wilayah)) {
                        echo $link_aktif_wilayah;
                    }
                    ?>>
                        <a href="<?php echo site_url('provinsi') ?>">
                            <i class="fa fa-folder"></i>
                            Provinsi
                        </a>
                    </li>
                    <li <?php
                    if (isset($link_aktif_wilayah2)) {
                        echo $link_aktif_wilayah2;
                    }
                    ?>>
                        <a href="<?php echo site_url('kabupaten') ?>">
                            <i class="fa fa-folder"></i>
                            Kabupaten
                        </a>
                    </li>
                    <li <?php
                    if (isset($link_aktif_wilayah3)) {
                        echo $link_aktif_wilayah3;
                    }
                    ?>>
                        <a href="<?php echo site_url('kecamatan') ?>">
                            <i class="fa fa-folder"></i>
                            Kecamatan
                        </a>
                    </li>
                    <li <?php
                    if (isset($link_aktif_wilayah4)) {
                        echo $link_aktif_wilayah4;
                    }
                    ?>>
                        <a href="<?php echo site_url('kelurahan') ?>">
                            <i class="fa fa-folder"></i>
                            Kelurahan
                        </a>
                    </li>
                </ul>
            </li>
			
			
			 <li <?php if (isset($link_aktif_daper)) { echo $link_aktif_daper;}?>>
                        <a href="<?php echo site_url('dasar_perolehan') ?>">
                            <i class="fa fa-folder"></i>
                            Dasar Perolehan
                        </a>
                    </li>
                    
                   
                </ul>
            </li>
			<!-- END MASTER -->
			<?php
			$userz = $this->session->userdata('user_name');
			$query = $this->db->query("SELECT 
					*
				FROM 
					lanud_flag
				WHERE
					username='$userz'
					
					")->result();
					
		foreach ($query as $ris)
				{
				$lanudnya = $ris->lanudnya;				
				}
				//echo $lanudnya."asasas";
				
				// 20160606 if($lanudnya == 0 ){
				if(!is_numeric(strpos($this->uri->segment(3),"lanud_id"))){
					echo "";
				}else{
				
				?>
                     	<?php
						$x = explode("_",$this->uri->segment(3));
						?>
			<!-- ASET TANAH -->
            <li <?php if (isset($link_data_1)) { echo $link_data_1;}?> >
                <a href="javascript:;">
                    <i class="fa fa-sitemap"></i>
                    <span class="title">Aset Tanah</span>
                    <span class="selected"></span>
                    <span class="arrow <?php if (isset($link_aset_tanah)) { echo $link_aset_tanah;}?>"></span>
                </a>
                <ul class="sub-menu">
                    <li <?php if (isset($link_data_aset)) {echo $link_data_aset;}?>>
                        <a href="<?php echo site_url('data_aset/index/lanud_id_'.$x[count($x)-1]); ?>">
                            <i class="fa fa-folder"></i>
                            Data Aset
                        </a>
                    </li>
					 <li <?php if (isset($link_pemanfaatan)) {echo $link_pemanfaatan;}?>>
                        <a href="<?php echo site_url('pemanfaatan/index/lanud_id_'.$x[count($x)-1]); ?>">
                            <i class="fa fa-folder"></i>
                            Pemanfaatan
                        </a>
                    </li>
					 <li <?php if (isset($link_permasalahan)) {echo $link_permasalahan;}?>>
                        <a href="<?php echo site_url('permasalahan/index/lanud_id_'.$x[count($x)-1]); ?>">
                            <i class="fa fa-folder"></i>
                            Permasalahan
                        </a>
                    </li>
                    
                </ul>
            </li>
			<!-- END ASET TANAH -->
			
			
			<!-- LAPORAN -->
            <li <?php if (isset($link_data_2)) { echo $link_data_2;}?> >
                <a href="javascript:;">
                    <i class="fa fa-sitemap"></i>
                    <span class="title">Laporan</span>
                    <span class="selected"></span>
                    <span class="arrow <?php if (isset($link_aset_tanah)) { echo $link_aset_tanah;}?>"></span>
                </a>
                <ul class="sub-menu">
                    <li <?php if (isset($link_data_aset)) {echo $link_data_aset;}?>>
                        <a href="<?php echo site_url('laporan_data_aset/index/lanud_id_'.$x[count($x)-1]); ?>">
                            <i class="fa fa-folder"></i>
                            Data Aset
                        </a>
                    </li>
					 <li <?php if (isset($link_pemanfaatan)) {echo $link_pemanfaatan;}?>>
                        <a href="<?php echo site_url('laporan_pemanfaatan/index/lanud_id_'.$x[count($x)-1]); ?>">
                            <i class="fa fa-folder"></i>
                            Pemanfaatan
                        </a>
                    </li>
					 <li <?php if (isset($link_permasalahan)) {echo $link_permasalahan;}?>>
                        <a href="<?php echo site_url('laporan_permasalahan/index/0-0_lanud_id_'.$x[count($x)-1]) ?>">
                            <i class="fa fa-folder"></i>
                            Permasalahan
                        </a>
                    </li>
                    
                </ul>
            </li>
			<!-- END LAPORAN -->
			
			<!-- GIS -->
           <li <?php if (isset($link_gis)) {echo $link_gis;}?>>
                        <a href="<?php echo site_url('gis') ?>">
                            <i class="fa fa-folder"></i>
                            GIS
                        </a>
                    </li>
			<!-- END GIS -->


				<?php } ?>
				
			 <li>
                <a href="javascript:;">
                    <i class="fa fa-sitemap"></i>
                    <span class="title">User Management</span>
                    <span class="selected"></span>
                    <span class="arrow <?php // if (isset($link_aset_tanah)) { echo $link_aset_tanah;}?>"></span>
                </a>
                <ul class="sub-menu">
                    <li <?php // if (isset($link_data_aset)) {echo $link_data_aset;}?>>
                        <a href="<?php echo site_url('grup_user'); ?>">
                            <i class="fa fa-folder"></i>
                            Grup User
                        </a>
                    </li>
					 <li <?php // if (isset($link_pemanfaatan)) {echo $link_pemanfaatan;}?>>
                        <a href="<?php echo site_url('user'); ?>">
                            <i class="fa fa-folder"></i>
							User
                        </a>
                    </li>
					 <li <?php // if (isset($link_permasalahan)) {echo $link_permasalahan;}?>>
                        <a href="<?php echo site_url('modul'); ?>">
                            <i class="fa fa-folder"></i>
                            Modul
                        </a>
                    </li>
					 <li <?php // if (isset($link_permasalahan)) {echo $link_permasalahan;}?>>
                        <a href="<?php echo site_url('hak_akses'); ?>">
                            <i class="fa fa-folder"></i>
                            Hak Akses
                        </a>
                    </li>
                    
                </ul>
            </li>

        </ul>
        <!-- END SIDEBAR MENU -->

    </div>

</div>

<!-- END SIDEBAR -->