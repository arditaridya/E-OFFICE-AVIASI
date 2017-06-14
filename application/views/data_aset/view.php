<!DOCTYPE html>
<html lang="en" class="no-js">
    <?php $this->load->view('v_header') ?>
    <body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo page-container-bg-solid">
        <?php $this->load->view('v_horizontal_menu') ?>
        <div class="clearfix">
        </div>

        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <?php $this->load->view('v_sidebar') ?>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <div class="page-content" bgcolor="#ff9900">
                    <!-- BEGIN PAGE HEADER-->
                    <div class="page-bar">
					<?php // echo $lanlad;die(); ?>
					<?php
					$groupz = $this->session->userdata('grup_user');
					?>
					<?php if($groupz == 1 || $groupz == 2){ ?>
                        <ul class="page-breadcrumb">
                           
							
							 <li>
                                <i class="fa fa-home"></i>
                                <a href="<?php echo site_url('c_kesatuan/lanud/'.$kutkot) ?>">Satker ( <font color="blue"><?php echo $nama_kot; ?></font> )</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
							<li>
                                <a href="<?php ?>">Data Aset (<font color="blue"> <?php echo $nama_lanud; ?> </font>)</a>
                                
                                <i class="fa fa-angle-right"></i>
                            </li>
							 
                            
                            
                        </ul>
					<?php }else { ?>
						<ul class="page-breadcrumb">
                           
							
							 <li>
                                <i class="fa fa-home"></i>
                                <a href="">Data Aset (<font color="blue"> <?php echo $nama_lanud; ?> </font>)</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
						</ul>
					
					<?php } ?>
                        <div class="page-toolbar">
                            <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm btn-default" data-container="body" data-placement="bottom" data-original-title="Kalender">
                                <i class="icon-calendar"></i>&nbsp; 
                                <span class="thin uppercase visible-lg-inline-block">&nbsp;</span>&nbsp; 
                                <i class="fa fa-angle-down"></i>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE HEADER-->
                    <h3 class="page-title"><?php // echo $judul; ?></h3>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet box blue">
                                <div class="portlet-title">
                                    <div class="caption">
                                        List Data Aset
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse">
                                        </a>
                                    </div>
                                </div>
								 <?php
									$grupz = $this->session->userdata('grup_user');
									//echo $groupz;die();
								   ?>
								   
                                <div class="portlet-body" style="background-color:#99ccff;">
                                    
									<div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-6">
											
                                                <div class="btn-group">
												<?php if($grupz == 1) { ?>
                                                    <a href="<?php echo site_url('data_aset/tambah/'.$this->uri->segment(3)); ?>">
                                                        <button id="sample_editable_1_new" class="btn blue">
                                                            Tambah Data &nbsp;<i class="fa fa-plus"></i>
                                                        </button>
                                                    </a>
												<?php } ?>	
													<a href="<?php echo site_url('data_aset/aturcetak/'.$this->uri->segment(3)); ?>">
                                                        <button id="sample_editable_1_new" class="btn red">
                                                            Cetak &nbsp;<i class="fa fa-print"></i>
                                                        </button>
                                                    </a>
                                                </div>
											
                                            </div>
                                        </div>
                                    </div>
                                  <font color="black">
                                    <table class="table table-striped table-bordered table-hover table-responsive" <?php if($grupz == 1) { ?> id="sample_7" <?php } else { ?> id="sample_3" <?php } ?>>
                                        <thead>
                                            <tr bgcolor="#ccccff">
                                                <th width="5%">No</th>
                                               <th>SIMAK</th>
												<th>Lokasi</th>
												<th>Luas</th>
												<th>Dasar Perolehan</th>
												<th>Nilai</th>
												<?php if($grupz == 1) { ?>
												<th>Aksi</th>
												<?php } ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                           foreach ($datanya as $row) {
                                                ?>
                                                <tr class="odd gradeX" bgcolor="#ccccff">
                                                    <td width="5%"><?php echo $no; ?></td>
                                                    <td><?php echo $row->simak; ?></td>
													<td><?php echo $row->lokasi; ?></td>
													<td><?php echo $row->luas; ?></td>
													<td><?php echo $row->dasar_perolehan_ket; ?></td>
													<!--<td><?php // foreach ($datadap as $rpw) { if($rpw->id == $row->dasar_perolehan){ echo $rpw->dasar_perolehan ; }  } ?></td>-->
													<td><?php echo number_format($row->nilai, 0, "," , "."); ?></td>
													<?php if($grupz == 1) { ?>
													<td width="25%">
													<center>
													<?php if($row->denah != null){?>
														 <a href="<?php echo base_url('data_aset/denah/' . $row->iddaas . '_'.$this->uri->segment(3)); ?>" class="btn btn-info" title="Denah">
                                                            <i class="fa fa-image"></i> 
                                                        </a>
													<?php }else{  ?>
														 <a href="#" class="btn btn-primary" disabled title="Denah">
                                                            <i class="fa fa-image"></i>
                                                        </a>
													<?php } ?>
                                                        <a href="<?php echo base_url('data_aset/detil/' . $row->iddaas . '_'.$this->uri->segment(3)); ?>" class="btn btn-warning" title="Detail">
                                                            <i class="fa fa-newspaper-o"></i> 
                                                        </a>
														<a href="<?php echo base_url('data_aset/edit/' . $row->iddaas . '_'.$this->uri->segment(3)); ?>" class="btn btn-primary" title="Edit">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a href="<?php echo site_url('data_aset/hapus/' . $row->iddaas . '_'.$this->uri->segment(3)); ?>" data-toggle="tooltip">
                                                            <button class="btn btn-danger" data-toggle="confirmation" data-original-title="Are you sure ?" title="Hapus">
                                                                <i class="icon-trash"></i>
                                                            </button>
                                                        </a>
													
													</center>
                                                    </td>
													<?php } ?>
                                                </tr>
                                                <?php
                                                $no++;
                                            }
											
											
                                            ?>
                                        </tbody>
                                    </table>
									</font>
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
        <?php $this->load->view('v_footer') ?>
    </body>
    <!-- END BODY -->
</html>

<script>
/*
console.log('');
$.ajax({
	url : '<?php echo site_url(); ?>data_aset/bg',
	type : 'post',
	data : { id_lanud : '<?php echo $this->uri->segment(3); ?>' },
	success : function(data){
		json = JSON.parse(data);
		
		//console.log(json.img);
		if(json.img != 'empty'){
			var b = '<?php echo base_url(); ?>assets/admin/bg/'+json.img;
			$('.portlet-body').css({'background-image': 'url('+b+')',"background-size": "100% 100%"});
		}
	}
})
*/
</script>
<!--
<style>

table {
    opacity: 0.8;
}
</style>
-->