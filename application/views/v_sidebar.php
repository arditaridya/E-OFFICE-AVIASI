<!-- BEGIN SIDEBAR -->

<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li class="heading">
                <h3 class="uppercase"><b>MENU</b></h3>
            </li>
			<?php //echo $this->session->userdata('grup_user')."asdasd";die(); ?>
			
			<?php
			$groupz = $this->session->userdata('grup_user');
			$query = $this->db->query("select 
											a.*,b.*
										from
											hak_akses a,
											modul b
										where 
											a.modul=b.id and
											b.parent='-' and
											a.grup_user='$groupz'
										order by b.urutan asc
					
					")->result();
			$query2 = $this->db->query("select 
											a.*,b.*
										from
											hak_akses a,
											modul b
										where 
											a.modul=b.id and
											a.grup_user='$groupz'
										order by b.urutan asc
										")->result();
			$query3 = $this->db->query("select 
											a.*,b.*
										from
											hak_akses a,
											modul b
										where 
											a.modul=b.id and
											a.grup_user='$groupz' 
										order by b.urutan asc
										")->result();
		
			$userz = $this->session->userdata('user_name');
			/* $query4 = $this->db->query("SELECT 
					*
				FROM 
					lanud_flag
				WHERE
					username='$userz'
					
					")->result();
					
		foreach ($query4 as $ris)
				{
				$lanudnya = $ris->lanudnya;				
				}	
*/				
					
		 foreach ($query as $row) {
			if($row->url != '#'){ ?>
			<li>
                <a href="<?php echo site_url($row->url) ?>">
                    <i class="icon-home"></i>
                    <span class="title"><?php echo $row->nama_modul; ?></span>
                    <span class="selected"></span>
                </a>
            </li>
			<?php }else{ ?>		
				<li>
                <a href="javascript:;">
                    <i class="fa fa-sitemap"></i>
                    <span class="title"><?php echo $row->nama_modul; ?></span>
                    <span class="selected"></span>
                    <span class="arrow <?php // if (isset($link_aset_tanah)) { echo $link_aset_tanah;}?>"></span>
                </a>
                <ul class="sub-menu">
				<?php foreach ($query2 as $raw) { if($row->nama_modul == $raw->parent){ 
					if($raw->url == '#'){ ?>
				<li>
                <a href="javascript:;">
                    <i class="fa fa-sitemap"></i>
                    <span class="title"><?php echo $raw->nama_modul; ?></span>
                    <span class="selected"></span>
                    <span class="arrow"></span>
                </a>
					<ul class="sub-menu">
					<?php foreach ($query3 as $riw) { if($riw->parent == $raw->nama_modul){ ?>
                    <li>
                        <a href="<?php echo site_url($riw->url) ?>">
                            <i class="fa fa-folder"></i>
                            <?php echo $riw->nama_modul; ?>
                        </a>
                    </li>
					<?php }} ?>
					</ul>
				</li>
				<?php
				}else{
				
				?>
					<?php 
					$x = explode("_",$this->uri->segment(3));
					
					if($raw->url == "data_aset/index/lanud_id_0"){ 
						$zaq = 'data_aset/index/lanud_id_'.$x[count($x)-1]; 
					}else if($raw->url == "pemanfaatan/index/lanud_id_0"){
						$zaq = 'pemanfaatan/index/lanud_id_'.$x[count($x)-1];
					}else if($raw->url == "permasalahan/index/lanud_id_0"){
						$zaq = 'permasalahan/index/lanud_id_'.$x[count($x)-1];
					} else { 
					$zaq = $raw->url; 
					} 
					
					?>
                   <li <?php // if (isset($link_data_aset)) {echo $link_data_aset;}?>>
                        <a href="<?php echo site_url($zaq); ?>">
                            <i class="fa fa-folder"></i>
                            <?php echo $raw->nama_modul; ?>
                        </a>
                    </li>
					<?php }}} ?>  
                </ul>
            </li>
			
		 <?php }} ?>
			
			<!--	
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
			-->

        </ul>
        <!-- END SIDEBAR MENU -->

    </div>

</div>

<!-- END SIDEBAR -->