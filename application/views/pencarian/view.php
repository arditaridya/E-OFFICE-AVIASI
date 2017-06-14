<!DOCTYPE html>
<html lang="en" class="no-js">
    <?php $this->load->view('v_header') ?>
    <body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo page-container-bg-solid">
	<link href="<?php echo base_url(); ?>assets/halo/jquery-ui.css" rel="stylesheet" type="text/css"/>
	<script src="<?php echo base_url(); ?>assets/halo/jquery.min.js" type="text/javascript"></script>
	
		
<script type="text/javascript">
         $(document).ready(function () {
        $(function () {
            $( "#SIMAK" ).autocomplete({
                source: function(request, response) {
                    $.ajax({ 
                        url: "<?php echo site_url('permasalahan/lookup'); ?>",
                        data: { bahasa: $("#SIMAK").val()},
                        dataType: "json",
                        type: "POST",
                        success: function(data){
                            response(data);
                        }    
                    });
                },
            });
        });
    });
</script>	

<style>
button.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 50%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

button.accordion.active, button.accordion:hover {
    background-color: #ddd;
}

div.panel {
    padding: 0 18px;
    display: none;
    background-color: white;
}

div.panel.show {
    display: block !important;
}
</style>		
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
			<?php //echo site_url()."assets/halo/jquery.min.js";die(); ?>
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>
                                <a href="<?php echo site_url('main_menu/admin') ?>">Menu Utama</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
							 
							<li>
                                <a href="<?php echo site_url('pencarian') ?>"><b>Pencarian</b></a>
                                
                                <i class="fa fa-angle-right"></i>
                            </li>
							 
                            
                            
                        </ul>
                        <div class="page-toolbar">
                            <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm btn-default" data-container="body" data-placement="bottom" data-original-title="Kalender">
                                <i class="icon-calendar"></i>&nbsp; 
                                <span class="thin uppercase visible-lg-inline-block">&nbsp;</span>&nbsp; 
                                <i class="fa fa-angle-down"></i>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE HEADER-->
                    <h3 class="page-title"><?php //echo $judul; ?></h3>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet box blue">
                                <div class="portlet-title">
                                    <div class="caption">
                                        Form Pencarian Data Aset Tanah
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse">
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <!-- BEGIN FORM-->

                                    <form action="<?php echo base_url('pencarian'); ?>" class="horizontal-form" method="post" enctype="multipart/form-data">
                                       

                                       <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Kotama</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <select class="form-control" name='kotama' id='kotama'>
																<option value='0' selected>- Pilih Kotama -</option>
																<?php foreach($kotama as $row){ ?>
																<option value="<?php echo $row->id; ?>" <?php echo ($vi6 == $row->id)?"selected":""; ?>><?php echo $row->kotama; ?></option>
																<?php } ?>
															</select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">SIMAK</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control" name="SIMAK" id="SIMAK" value="<?php echo $vi1; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<hr>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3"><b>Lokasi</b></label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Provinsi</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <select class="form-control" name='provinsi' id='provinsi' onchange='getKab()'>
																<option value='0' selected>- Pilih Provinsi -</option>
																<?php foreach($provinsi as $row){ ?>
																<option value="<?php echo $row->id; ?>" <?php echo ($vi4 == $row->id)?"selected":""; ?>><?php echo $row->nama_provinsi; ?></option>
																<?php } ?>
															</select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Kabupaten</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
														<div id="statediv">
                                                            <select class="form-control" name='kabupaten' id='kabupaten'>
																<option  value='0' selected>- Pilih Kabupaten -</option>
																<?php foreach($kabupaten as $row){ ?>
																	<option value="<?php echo $row->id; ?>" <?php echo ($vi5 == $row->id)?"selected":""; ?>><?php echo $row->nama_kabupaten; ?></option>
																<?php } ?>
															</select>
														</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<hr>
										<div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Tahun Perolehan</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control" name="tahun_perolehan" id="tahun_perolehan" value="<?php echo $vi3; ?>" maxlength="4">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										 <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Status Tanah</label>
                                                    <div class="form-group">
                                                        <div class="col-md-5">
                                                            <select class="form-control" name='status_tanah' id='status_tanah'>
																<option value='' selected>- Pilih Status Tanah -</option>
																<?php foreach($status_tanah as $row){ ?>
																<option value="<?php echo $row->id; ?>" <?php echo ($vi2 == $row->id)?"selected":""; ?>><?php echo $row->status_tanah; ?></option>
																<?php } ?>
															</select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										
										

                                        <br/>
                                         <div class="form-actions left">
                                            <button type="submit" name="SIMPAN" class="btn green"><i class="fa fa-search"></i> Cari</button>
                                            <!--<button type="button" class="btn yellow" onclick=self.history.back()><i class="fa fa-undo"></i> Batal</button>-->
									<br>
									
								   </form>
                                    <!-- END FORM-->
				
                                </div>
								
                            </div>
							
							
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                </div>
				<div>
				
  
  <ul class="nav nav-tabs">
    <li class="active" <?php if($vi6 == 0 || $vi6 == 1) {?>style="display: block;" <?php } else { ?> style="display: none;" <?php } ?>><a data-toggle="tab" href="#home">DENMA (<font color="red"><?php echo $jumdenma; ?></font>)</a></li>
    <li <?php if($vi6 == 2){ ?> class="active" <?php } ?> <?php if($vi6 == 0 || $vi6 == 2) {?>style="display: block;" <?php } else { ?> style="display: none;" <?php } ?>><a data-toggle="tab" href="#menu1">SESKOAU (<font color="red"><?php echo $jumseskoau; ?></font>)</a></li>
    <li <?php if($vi6 == 3){ ?> class="active" <?php } ?> <?php if($vi6 == 0 || $vi6 == 3) {?>style="display: block;" <?php } else { ?> style="display: none;" <?php } ?>><a data-toggle="tab" href="#menu2">AAU (<font color="red"><?php echo $jumaau; ?></font>)</a></li>
    <li <?php if($vi6 == 4){ ?> class="active" <?php } ?> <?php if($vi6 == 0 || $vi6 == 4) {?>style="display: block;" <?php } else { ?> style="display: none;" <?php } ?> ><a data-toggle="tab" href="#menu3">KODIKAU (<font color="red"><?php echo $jumkodikau; ?></font>)</a></li>
	<li <?php if($vi6 == 5){ ?> class="active" <?php } ?> <?php if($vi6 == 0 || $vi6 == 5) {?>style="display: block;" <?php } else { ?> style="display: none;" <?php } ?>><a data-toggle="tab" href="#menu4">KOOPSAU I (<font color="red"><?php echo $jumkoopsa; ?></font>)</a></li>
	<li <?php if($vi6 == 6){ ?> class="active" <?php } ?> <?php if($vi6 == 0 || $vi6 == 6) {?>style="display: block;" <?php } else { ?> style="display: none;" <?php } ?>><a data-toggle="tab" href="#menu5">KOOPSAU II (<font color="red"><?php echo $jumkoopda; ?></font>)</a></li>
  </ul>

  <div class="tab-content">
	<?php if($vi6 == 0 || $vi6 == 1) {?>
	<div id="home" <?php if($vi6 == 1 || $vi6 == 0){ ?> class="tab-pane fade in active" <?php } else { ?> class="tab-pane fade" <?php } ?>>
     
      <div class="portlet-body">
				<br>
				<!-- DENMA -->
									<table class="table table-striped table-bordered table-hover table-responsive"  id="sample_3">
                                        <thead>
                                            <tr>
                                                <th width="5%">No</th>
                                               <th>SIMAK</th>
												<th>Lokasi</th>
												<th>Luas</th>
												<th>Dasar Perolehan</th>
												<th>Nilai</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                           foreach ($datadenma as $row) {
                                                ?>
                                                <tr class="odd gradeX" >
                                                    <td width="5%"><?php echo $no; ?></td>
                                                    <td><?php echo $row->simak; ?></td>
													<td><?php echo $row->lokasi; ?></td>
													<td><?php echo $row->luas; ?></td>
													
													<td><?php echo $row->daper; ?></td>
													<td><?php echo number_format($row->nilai, 0, "," , "."); ?></td>
													
                                                </tr>
                                                <?php
                                                $no++;
                                            }
											
											
                                            ?>
                                        </tbody>
                                    </table>
									<br><br><br>
									 
								</div>
    </div>
	
	<?php } ?>
	
	<?php if($vi6 == 0 || $vi6 == 2) {?>
    <div id="menu1" <?php if($vi6 == 2){ ?> class="tab-pane fade in active" <?php } else { ?> class="tab-pane fade" <?php } ?>>
    <div class="portlet-body">
				<br>
				<!-- SESKOAU -->
									<table class="table table-striped table-bordered table-hover table-responsive"  id="sample_31">
                                        <thead>
                                            <tr>
                                                <th width="5%">No</th>
                                               <th>SIMAK</th>
												<th>Lokasi</th>
												<th>Luas</th>
												<th>Dasar Perolehan</th>
												<th>Nilai</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                           foreach ($dataseskoau as $row) {
                                                ?>
                                                <tr class="odd gradeX" >
                                                    <td width="5%"><?php echo $no; ?></td>
                                                    <td><?php echo $row->simak; ?></td>
													<td><?php echo $row->lokasi; ?></td>
													<td><?php echo $row->luas; ?></td>
													
													<td><?php echo $row->daper; ?></td>
													<td><?php echo number_format($row->nilai, 0, "," , "."); ?></td>
													
                                                </tr>
                                                <?php
                                                $no++;
                                            }
											
											
                                            ?>
                                        </tbody>
                                    </table>
									<br><br><br>
								</div>
    </div>
	<?php } ?>
	<?php if($vi6 == 0 || $vi6 == 3) {?>
    <div id="menu2" <?php if($vi6 == 3){ ?> class="tab-pane fade in active" <?php } else { ?> class="tab-pane fade" <?php } ?>>
      <div class="portlet-body">
				<br>
				<!-- SESKOAU -->
									<table class="table table-striped table-bordered table-hover table-responsive"  id="sample_32">
                                        <thead>
                                            <tr>
                                                <th width="5%">No</th>
                                               <th>SIMAK</th>
												<th>Lokasi</th>
												<th>Luas</th>
												<th>Dasar Perolehan</th>
												<th>Nilai</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                           foreach ($dataaau as $row) {
                                                ?>
                                                <tr class="odd gradeX" >
                                                    <td width="5%"><?php echo $no; ?></td>
                                                    <td><?php echo $row->simak; ?></td>
													<td><?php echo $row->lokasi; ?></td>
													<td><?php echo $row->luas; ?></td>
													
													<td><?php echo $row->daper; ?></td>
													<td><?php echo number_format($row->nilai, 0, "," , "."); ?></td>
													
                                                </tr>
                                                <?php
                                                $no++;
                                            }
											
											
                                            ?>
                                        </tbody>
                                    </table>
									<br><br><br>
								</div>
    </div>
	<?php } ?>
	<?php if($vi6 == 0 || $vi6 == 4) {?>
    <div id="menu3" <?php if($vi6 == 4){ ?> class="tab-pane fade in active" <?php } else { ?> class="tab-pane fade" <?php } ?>>
      <div class="portlet-body">
				<br>
				<!-- SESKOAU -->
									<table class="table table-striped table-bordered table-hover table-responsive"  id="sample_33">
                                        <thead>
                                            <tr>
                                                <th width="5%">No</th>
                                               <th>SIMAK</th>
												<th>Lokasi</th>
												<th>Luas</th>
												<th>Dasar Perolehan</th>
												<th>Nilai</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                           foreach ($datakodikau as $row) {
                                                ?>
                                                <tr class="odd gradeX" >
                                                    <td width="5%"><?php echo $no; ?></td>
                                                    <td><?php echo $row->simak; ?></td>
													<td><?php echo $row->lokasi; ?></td>
													<td><?php echo $row->luas; ?></td>
													
													<td><?php echo $row->daper; ?></td>
													<td><?php echo number_format($row->nilai, 0, "," , "."); ?></td>
													
                                                </tr>
                                                <?php
                                                $no++;
                                            }
											
											
                                            ?>
                                        </tbody>
                                    </table>
									<br><br><br>
								</div>
    </div>
	<?php } ?>
	<?php if($vi6 == 0 || $vi6 == 5) {?>
	<div id="menu4" <?php if($vi6 == 5){ ?> class="tab-pane fade in active" <?php } else { ?> class="tab-pane fade" <?php } ?>>
      <div class="portlet-body">
				<br>
				<!-- SESKOAU -->
									<table class="table table-striped table-bordered table-hover table-responsive"  id="sample_34">
                                        <thead>
                                            <tr>
                                                <th width="5%">No</th>
                                               <th>SIMAK</th>
												<th>Lokasi</th>
												<th>Luas</th>
												<th>Dasar Perolehan</th>
												<th>Nilai</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                           foreach ($datakoopsa as $row) {
                                                ?>
                                                <tr class="odd gradeX" >
                                                    <td width="5%"><?php echo $no; ?></td>
                                                    <td><?php echo $row->simak; ?></td>
													<td><?php echo $row->lokasi; ?></td>
													<td><?php echo $row->luas; ?></td>
													
													<td><?php echo $row->daper; ?></td>
													<td><?php echo number_format($row->nilai, 0, "," , "."); ?></td>
													
                                                </tr>
                                                <?php
                                                $no++;
                                            }
											
											
                                            ?>
                                        </tbody>
                                    </table>
									<br><br><br>
								</div>
    </div>
	<?php } ?>
	<?php if($vi6 == 0 || $vi6 == 6) {?>
	<div id="menu5" <?php if($vi6 == 6){ ?> class="tab-pane fade in active" <?php } else { ?> class="tab-pane fade" <?php } ?>>
      <div class="portlet-body">
				<br>
				<!-- SESKOAU -->
									<table class="table table-striped table-bordered table-hover table-responsive"  id="sample_35">
                                        <thead>
                                            <tr>
                                                <th width="5%">No</th>
                                               <th>SIMAK</th>
												<th>Lokasi</th>
												<th>Luas</th>
												<th>Dasar Perolehan</th>
												<th>Nilai</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                           foreach ($datakoopda as $row) {
                                                ?>
                                                <tr class="odd gradeX" >
                                                    <td width="5%"><?php echo $no; ?></td>
                                                    <td><?php echo $row->simak; ?></td>
													<td><?php echo $row->lokasi; ?></td>
													<td><?php echo $row->luas; ?></td>
													
													<td><?php echo $row->daper; ?></td>
													<td><?php echo number_format($row->nilai, 0, "," , "."); ?></td>
													
                                                </tr>
                                                <?php
                                                $no++;
                                            }
											
											
                                            ?>
                                        </tbody>
                                    </table>
									<br><br><br>
								</div>
    </div>
	<?php } ?>
  </div>
</div>
				

	<br><br>			
            </div>
            <!-- END CONTENT -->
			
        </div>
        <!-- END CONTAINER -->
        <?php $this->load->view('v_footer') ?>
    </body>
    <!-- END BODY -->
</html>
<script type="text/javascript">

function getXMLHTTP(){
	var xmlhttp=false;  
	try{
		xmlhttp=new XMLHttpRequest();
	}
	catch(e){
		try{
			xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
		}
		catch(e){
			try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
			}
			catch(e1){
				xmlhttp = false;
			}
		}
	}
	return xmlhttp;
}

	function getKab() {
	
		var strURL = "<?php echo base_url();?>pencarian/getkabupaten";
		var provinsi = document.getElementById('provinsi').value;
		//alert(lemari);
		

		var req = getXMLHTTP();
		if (req) {
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					if (req.status == 200) {
						document.getElementById('statediv').innerHTML=req.responseText;            
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}       
			}     
			//req.open("GET", strURL+ "?perusahaan=" + perusahaan, true);
			req.open("GET", strURL + "/" + provinsi, true);
			req.send(null);
		}


	}
	


</script>
