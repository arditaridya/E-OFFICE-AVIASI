<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class='col-md-12 left-side'>

    <div class="artikel">			

        <div class='konten'>
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url() ?>">Halaman Utama</a> </li>
                <li class="active">Batas Wilayah Negara dan Kawasan Perbatasan</li>
                <!--<li class="active">coba</li>-->
            </ol>
            <div class="isi">
                <!--                <div class='col-md-12' id="header-page">
                                   <h1><span></span></h1>
                               </div>-->
                <img src="<?php echo base_url(); ?>an-theme/ando/Lokasi Prioritas (Lokpri) Batas Wilayah Negara dan Kawasan Perbatasan.png" width="100%" height="130">
                <br/>
                <br/>
                <?php if ($informasi['current_page'] == "detail_perbatasan") { ?>
                    
                    <div class="tab-content">
                      <!-- HENSHIN -->
					  
					  <section class="content">
		<div class="row">
		<!-- <div id="printbut" class="col-md-1">
		<a class="btn btn-app btn-xs">
                    <i onclick="print()" class="fa fa-print"></i> Print
        </a>
		</div> -->
		<!--
		<div width="100%">
			

			<a href="#kat1"><button class="btn btn-success btn-sm" type="button">Gambaran Umum</button></a>
			<a href="#kat2"><button class="btn btn-info btn-sm" type="button">Batas Wilayah Negara</button></a>
			<a href="#kat3"><button class="btn bg-orange btn-sm" type="button">Pertahanan, Keamanan dan Penegakan Hukum</button></a>
			<a href="#kat4"><button class="btn bg-navy btn-sm" type="button">Peningkatan Sarana Sosial</button></a>
			<a href="#kat5"><button class="btn btn-danger btn-sm" type="button">Bencana &amp; Penanganan Bencana</button></a>
			<a href="#kat6"><button class="btn bg-light-blue btn-sm" type="button">Indeks Pembangunan Desa 2014</button></a>
			
		</div>
		-->
		</div>

          <div class="row">
            <div class="col-md-3">

              <div style="background-color :#d33333; border-radius: 10px;">
				<div class="inner" >
				<br>
				<font color="white">
					<h3 style="font-size:30px; color : white;"><center><?php echo $darat['Kec'] ?></center></h3>
					<p><center>[ID] <?php echo $darat['ID_Perbatasan'] ?></center></p>
				</font>
				<br><br>
				</div>
			</div>
			<br>
			<div style="background-color :#296090; border-radius: 10px; font-color:white; padding-top: 2px;">
				<div class="inner">
				<font color="white"><center>
					<h3 style="font-size:20px; color : white;">&nbsp;&nbsp;&nbsp;
				<?php
				 foreach ($perbatasanumum as $row) {
				?>
				<?php echo $row->LuasWilayah; ?> 
				 <?php }
				 ?>
				 Km<sup>2</sup></h3>
					<p>Luas Wilayah</p>
				 </center></font>
				</div>
				
			</div>

			<div class="box box-info box-solid" style="margin-top:-10px;">
				<div class="box-header with-border">
					<h3 class="box-title"><!-- Luas Penggunaan Lahan --></h3>
						<div class="box-tools pull-right">
							<button class="btn btn-box-tool" data-widget="collapse">
							<i class="fa fa-minus"></i>
						</button>
						</div>
				</div>
				<div class="box-body" style="display: block;">
					<table class="table table-bordered">
						<tbody>
						<tr>
							<td colspan="2" align="center"><b>LUAS PENGGUNAAN LAHAN</b></td>
						</tr>
						<?php
				 foreach ($perbatasanumum as $row) {
				?>
				 
				 
						<tr>
							<td>Luas Pemukiman</td>
							<td>
							<?php echo $row->LuasPemukiman; ?> Ha</td>						</tr>
						<tr>
							<td>Luas Sawah</td>
							<td>
							<?php echo $row->LuasSawah; ?> Ha</td>						</tr>
						<tr>
							<td>Luas Ladang</td>
							<td>
							<?php echo $row->LuasLadang; ?> Ha</td>						</tr>
						<tr>
							<td>Luas Perkebunan</td>
							<td>
							<?php echo $row->LuasPerkebunan; ?> Ha</td>						</tr>
						<tr>
							<td>Waduk/Danau/Situ</td>
							<td>
							 <?php echo $row->WadukDanau; ?> Ha</td>						</tr>
						<tr>
							<td>Luas Lainnya</td>
							<td>
							<?php echo $row->LuasLainnya; ?> Ha</td>						</tr>
							
							<?php }
				 ?>
						</tbody>
					</table>
				</div>
			</div>

			<br>
			<div class="small-box bg-yellow" style="background-color :#F39C12; border-radius: 10px; font-color:white; padding-top: 2px;">
				<div class="inner">
				<center><font color="white">
				<p>Total Penduduk</p>
				<?php
				 foreach ($perbatasanumum as $row) {
				echo $row->TotalPenduduk; }
				 ?> Orang
				</center></font>
				</div>
				<div class="icon">
					<i class="ion ion-person-add"></i>
				</div><center>
					<a class="small-box-footer" href="#">
					&nbsp;Laki-laki: <b><?php
				 foreach ($perbatasanumum as $row) {
				echo $row->TotalLaki; }
				 ?> </b>
					Perempuan: <b><?php
				 foreach ($perbatasanumum as $row) {
				echo $row->TotalPerempuan; }
				 ?> </b>
					</a></center>
			</div>


			<div class="box box-warning box-solid" style="margin-top:-10px;">
				<div class="box-header with-border">
					<h3 class="box-title"><!-- Kondisi Demografi --></h3>
						<div class="box-tools pull-right">
							<button class="btn btn-box-tool" data-widget="collapse">
							<i class="fa fa-minus"></i>
						</button>
						</div>
				</div>
				<div class="box-body" style="display: block;">
					<table class="table table-bordered">
						<tbody>
						<tr>
							<td colspan="2" align="center"><b>KONDISI DEMOGRAFI</b></td>
						</tr>
						<?php
				 foreach ($perbatasanumum as $row) {
				?>
						<tr>
							<td>Jumlah Kelahiran</td>
							<td>
							<?php echo $row->JumlahKelahiran; ?> Jiwa</td>						</tr>
						<tr>
							<td>Jumlah Kematian</td>
							<td>
							<?php echo $row->JumlahKematian; ?> Jiwa</td>						</tr>
						<tr>
							<td>Jumlah RT<br>(Kepala Keluarga)</td>
							<td>
							<?php echo $row->JumlahRT; ?> Orang</td>						</tr>
						<tr>
							<td>Kepadatan Penduduk</td>
							<td>
							<?php echo $row->KepadatanPenduduk; ?> jiwa/km<sup>2</sup></td>						</tr>
						<tr>
							<td>Jumlah RT Miskin</td>
							<td>
							<?php echo $row->JumlahRTMiskin; ?> </td>						</tr>
						<tr>
							<td>Persentase Penduduk Miskin</td>
							<td>
							<?php echo $row->PresentasePenduduk; ?>%</td>						</tr>
				 <?php } ?>
						</tbody>
					</table>
				</div>
			</div>

              <!-- About Me Box -->
			  
		<!--
			  <div class="box box-success box-solid">
						<div class="box-header with-border">
							<h3 class="box-title">Titik Koordinat</h3>
								<div class="box-tools pull-right">
									<button class="btn btn-box-tool" data-widget="collapse">
									<i class="fa fa-minus"></i>
								</button>
								</div>
						</div>
						<div class="box-body" style="display: block;">
						<table class="table table-bordered">
							<tbody>
							<tr>
							<td align="center"><b>TITIK KOORDINAT</b></td>
						</tr>
						<?php
				 foreach ($perbatasanumum as $row) {
				?>
						<tr>
							<td><?php echo $row->KordinatX; ?></td>
						</tr>
						<tr>
							<td>
							<?php echo $row->KordinatY; ?></td>						</tr>
						<tr>
						
				 <?php  } ?>
							</tbody>
						</table>
						</div>
				</div> -->

            </div><!-- /.col -->



            <div class="callout lead col-md-9" id="kat1" style="background-color: #d33724 !important; border-radius: 20px;">
					<h4><b><font color="white">GAMBARAN UMUM LOKPRI</font></b></h4>
			</div>

			<div class="col-md-9">
              <div class="box col-md-12" style="background-color: white; border-radius: 20px; padding-top : 5px">
                <div class="box-body">
                  <?php
				 foreach ($perbatasanumum as $row) {
				?>
				<?php echo $row->Gambaran_umum; ?> 
				 <?php }
				 ?>
                </div>
              </div>
			  &nbsp;
			  
			  <div class="box box-danger box-solid">
					<div class="box-header with-border">
						<h3 class="box-title"><!-- Sarana/Prasarana Ekonomi --></h3>
							<div class="box-tools pull-right">
								<button class="btn btn-box-tool" data-widget="collapse">
								<i class="fa fa-minus"></i>
							</button>
							</div>
					</div>
					<div class="box-body" style="display: block;">
					
						<table class="table table-bordered">
							<tbody>
							<tr>
							<td colspan="4" align="center"><b>SARANA/PRASARANA EKONOMI</b></td>
						</tr>
							 <?php
				 foreach ($sarpras_ekonomi as $row) {
				?>
				<tr>
				<td><?php echo $row->Sarana; ?> <td>
				<td><?php echo $row->Jumlah; ?> Buah<td>
				</tr>
				 <?php }
				 ?>
							</tbody>
						</table>
						<br>
					</div>
				</div><!-- Box-Solid -->
            </div><!-- /.col -->
			<div class="col-md-6">
			
			
			</div>
			<div class="col-md-6">
				<div class="box box-primary box-solid">
					<div class="box-header with-border">
						<h3 class="box-title"><!-- Orbitrasi --></h3>
							<div class="box-tools pull-right">
								<button class="btn btn-box-tool" data-widget="collapse">
								<i class="fa fa-minus"></i>
							</button>
							</div>
					</div>
					<div class="box-body" style="display: block;">
						<table class="table table-bordered">
							<tbody>
							<tr>
							<td colspan="2" align="center"><b>ORBITRASI</b></td>
						</tr>
						<?php
				 foreach ($perbatasanorbitasi as $row) {
				?>
						
						
							<tr>
									<td><?php echo $row->Orbitasi; ?></td>
									<td>
									<?php echo $row->Jumlah; ?> Km</td>								</tr>
						
									
				 <?php } ?>
							</tbody>
						</table>
					</div>
				</div>



				<div class="box box-default box-solid">
					<div class="box-header with-border">
						<h3 class="box-title"><!-- Koperasi --></h3>
							<div class="box-tools pull-right">
								<button class="btn btn-box-tool" data-widget="collapse">
								<i class="fa fa-minus"></i>
							</button>
							</div>
					</div>
					<div class="box-body" style="display: block;">
						<table class="table table-bordered">
							<tbody>
							<tr>
							<td colspan="2" align="center"><b>KOPERASI</b></td>
						</tr>
						<?php
				 foreach ($perbatasankoperasi as $row) {
				?>
						
						
							<tr>
									<td><?php echo $row->Koperasi; ?></td>
									<td>
									<?php echo $row->Jumlah; ?> Buah</td>								</tr>
						
									
				 <?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			&nbsp;<br>
			<div class="col-md-3" style="background-color: #00A65A !important; border-radius: 20px; padding-top : 10px;">

					<div class="small-box bg-green">
						<div class="inner">
						<font color="white"><center><b>TITIK KOORDINAT</b></center>
						<?php
				 foreach ($perbatasanumum as $row) {
				?>
				<center><b>
						<?php echo $row->KordinatX; ?><br>
							<?php echo $row->KordinatY; ?>
				</b></center>		
				 <?php  } ?>
						</font>	
						</div>
						<br>
					</div>
			</div>

          </div><!-- /.row Gambaran Umum Lokpri-->


		  <!--<div class="callout bg-aqua-active color-palette lead" id="kat2"> 
				<h4><b>BATAS WILAYAH NEGARA </b><font style="font-size:10px;">  [<a href="#kat0">kembali ke atas</a>]</font></h4>
		  </div>-->
		  <!--<div class="row">
			    <div class="col-md-3">
				<div class="box box-info box-solid">
						<div class="box-header with-border">
							<h3 class="box-title">Batas Negara</h3>
								<div class="box-tools pull-right">
									<button class="btn btn-box-tool" data-widget="collapse">
									<i class="fa fa-minus"></i>
								</button>
								</div>
						</div>
						<table class="table table-bordered">
							<tbody>
							<tr>
							<td>
								Thailand, Malaysia, India, Sri Lanka, Myanmar</td>							</tr>
							</tbody>
						</table>
				</div>
			  </div>
			  <div class="col-md-3">
				  <div class="small-box bg-teal-active color-palette">
						<div class="inner">
							<h3>7<small style="color:#f6f6f6; font-size:15px;">  Pulau</small></h3><small style="color:#f6f6f6; font-size:15px;">
							<p> Jumlah Pulau-Pulau Kecil Terluar</p>
						</small></div><small style="color:#f6f6f6; font-size:15px;">
						<div class="icon">
							<i class="fa fa-check-square-o"></i>
						</div>
							<a class="small-box-footer" href="#">
							</a>
					</small></div><small style="color:#f6f6f6; font-size:15px;">
				</small></div><small style="color:#f6f6f6; font-size:15px;">
				<div class="col-md-6">
				<div class="box box-info box-solid" style="color:#262626;">
						<div class="box-header with-border">
							<h3 class="box-title">Nama Pulau-pulau Kecil Terluar</h3>
								<div class="box-tools pull-right">
									<button class="btn btn-box-tool" data-widget="collapse">
									<i class="fa fa-minus"></i>
								</button>
								</div>
						</div>
					<table class="table table-bordered">
							<tbody>
							<tr>
							<td>
								<p>
	Pulau Seilako, Pulau Rondo, Pulau Batulah Tengah, Pulau Batulah Selatan, Pulau Rondo Selatan, Pulau Rubiah dan Pulau Klah</p>
</td>							</tr>
							</tbody>
						</table>
				</div>
			  </div>

		  </small></div> --> <!-- /.Row Batas Wilayah Negara <small style="color:#f6f6f6; font-size:15px;">-->
		 <!-- <div class="callout bg-orange-active color-palette lead" id="kat3"> 
				<h4><b>PERTAHANAN, KEAMANAN DAN PENEGAKAN HUKUM </b><font style="font-size:10px;">  [<a href="#kat0">kembali ke atas</a>]</font></h4>
		  </div> -->
		  
		  <div class="row">
		  <div class="col-md-12">
		  <div class="box box-success box-solid">
				<div class="box-header with-border">
					<h3 class="box-title"><!-- Kelurahan/Desa --></h3>
						<div class="box-tools pull-right">
							<button class="btn btn-box-tool" data-widget="collapse">
							<i class="fa fa-minus"></i>
						</button>
						</div>
				</div>
					<div class="box-body" style="display: block;">
					<table class="table table-bordered">
						<tbody>
						<tr>
							<td colspan="2" align="center"><b>KELURAHAN/DESA</b></td>
						</tr>
						<?php
				 foreach ($perbatasankelurahandesa as $row) {
				?>
						<tr>
							<td><?php echo $row->Kelurahan; ?></td>
							<td>
							<?php echo $row->Status; ?></td>						</tr>
						<tr>
						
				 <?php } ?>
						</tbody>
					</table>
					</div>
			  </div>
		  
		  
		  </div>
			<div class="col-md-9">
			  <div class="box box-warning box-solid">
					<div class="box-header with-border">
						<h3 class="box-title"><!-- Kegiatan Illegal di Lintas Batas --></h3>
							<div class="box-tools pull-right">
								<button class="btn btn-box-tool" data-widget="collapse">
								<i class="fa fa-minus"></i>
							</button>
							</div>
					</div>
						<div class="box-body" style="display: block;">
						<table class="table table-bordered" style="color:#222222;">
							<tbody>
							<tr>
								<td colspan="6"><center><b>KEGIATAN ILLEGALITAS DI LINTAS BATAS</b></center></td>
							</tr>
							<tr>
								<th>Desa/Kelurahan</th><th>Illegal Fishing</th><th>Illegal Logging</th><th>Illegal Trafficking</th><th>Illegal Mining</th><th>Illegal Lainnya</th>
							</tr>
							<?php
				 foreach ($perbatasankegiatanilegal as $row) {
				?>
				<tr>
				<td><?php echo $row->Desa; ?></td>
				<td><?php echo $row->IlegalFIshing; ?></td>
				<td><?php echo $row->IlegalLogging; ?></td>
				<td><?php echo $row->IlegalTraficking; ?></td>
				<td><?php echo $row->IlegalMinning; ?></td>
				<td><?php echo $row->IlegalLainnya; ?></td>
				</tr>		
				 <?php } ?>
														
							</tbody>
						</table>
						</div>
			 </div>
			</div>
			<div class="col-md-3">
				  <div class="small-box bg-yellow disabled">
						<div class="inner">
							<h3><small style="color:#f6f6f6; font-size:15px;">  Buah</small></h3><small style="color:#f6f6f6; font-size:15px;">
							<p> Jumlah Pos PAMTAS</p>
						</small></div><small style="color:#f6f6f6; font-size:15px;">
						<div class="icon">
							<i class="fa fa-map-signs"></i>
						</div>
							<a class="small-box-footer" href="#">
							</a>
					</small></div><small style="color:#f6f6f6; font-size:15px;">
			</small></div><small style="color:#f6f6f6; font-size:15px;">
			<div class="col-md-3">
				  <div class="small-box bg-orange color-palette">
						<div class="inner">
							<h3><small style="color:#f6f6f6; font-size:15px;">  Buah</small></h3><small style="color:#f6f6f6; font-size:15px;">
							<p> Jumlah PLB</p>
						</small></div><small style="color:#f6f6f6; font-size:15px;">
						<div class="icon">
							<i class="fa fa-map-signs"></i>
						</div>
							<a class="small-box-footer" href="#">
							</a>
					</small></div><small style="color:#f6f6f6; font-size:15px;">
			</small></div><small style="color:#f6f6f6; font-size:15px;">
		  </small></small></div><!-- /.Row Pertahanan, Keamanan dan Penegakan Hukum --><small style="color:#f6f6f6; font-size:15px;"><small style="color:#f6f6f6; font-size:15px;">
		  <!-- <div class="callout bg-black-active color-palette lead" id="kat4"> Pertahanan, Keamanan dan Penegakan Hukum 
				<h4><b>PENINGKATAN SARANA SOSIAL DI KAWASAN PERBATASAN </b><font style="font-size:10px;">  [<a href="#kat0">kembali ke atas</a>]</font></h4>
		  </div> -->
		  <div class="row">
			<div class="col-md-2">
				  <div class="small-box">
						<div class="inner">
							<h4 style="color:#222222;"><b><br>Sarana <br> Pendidikan<br></b>&nbsp;</h4>
						</div>
					</div>
			</div>
			<div class="col-md-2">
				  <div class="small-box bg-maroon color-palette">
						<div class="inner">
							<h3>2<small style="color:#f6f6f6; font-size:15px;">  TK/RA/BA Negeri</small></h3><small style="color:#f6f6f6; font-size:15px;">
							<h3>7<small style="color:#f6f6f6; font-size:15px;">  TK/RA/BA Swasta</small></h3><small style="color:#f6f6f6; font-size:15px;">
						</small></small></div><small style="color:#f6f6f6; font-size:15px;"><small style="color:#f6f6f6; font-size:15px;">
						<div class="icon">
							<i class="fa fa-mortar-board"></i>
						</div>
					</small></small></div><small style="color:#f6f6f6; font-size:15px;"><small style="color:#f6f6f6; font-size:15px;">
			</small></small></div><small style="color:#f6f6f6; font-size:15px;"><small style="color:#f6f6f6; font-size:15px;">
			<div class="col-md-2">
				  <div class="small-box bg-red-active color-palette">
						<div class="inner">
							<h3>17<small style="color:#f6f6f6; font-size:15px;">  SD/MI Negeri</small></h3><small style="color:#f6f6f6; font-size:15px;">
							<h3>1<small style="color:#f6f6f6; font-size:15px;">  SD/MI Swasta</small></h3><small style="color:#f6f6f6; font-size:15px;">
						</small></small></div><small style="color:#f6f6f6; font-size:15px;"><small style="color:#f6f6f6; font-size:15px;">
						<div class="icon">
							<i class="fa fa-mortar-board"></i>
						</div>
					</small></small></div><small style="color:#f6f6f6; font-size:15px;"><small style="color:#f6f6f6; font-size:15px;">
			</small></small></div><small style="color:#f6f6f6; font-size:15px;"><small style="color:#f6f6f6; font-size:15px;">
			<div class="col-md-2">
				  <div class="small-box bg-navy color-palette">
						<div class="inner">
							<h3>5<small style="color:#f6f6f6; font-size:15px;">  SMP/MTs Negeri</small></h3><small style="color:#f6f6f6; font-size:15px;">
							<h3>0<small style="color:#f6f6f6; font-size:15px;">  SMP/MTs Swasta</small></h3><small style="color:#f6f6f6; font-size:15px;">
						</small></small></div><small style="color:#f6f6f6; font-size:15px;"><small style="color:#f6f6f6; font-size:15px;">
						<div class="icon">
							<i class="fa fa-mortar-board"></i>
						</div>
					</small></small></div><small style="color:#f6f6f6; font-size:15px;"><small style="color:#f6f6f6; font-size:15px;">
			</small></small></div><small style="color:#f6f6f6; font-size:15px;"><small style="color:#f6f6f6; font-size:15px;">
			<div class="col-md-2">
				  <div class="small-box bg-gray-active color-palette">
						<div class="inner">
							<h3>1<small style="color:#f6f6f6; font-size:15px;">  SMA/MA Negeri</small></h3><small style="color:#f6f6f6; font-size:15px;">
							<h3>0<small style="color:#f6f6f6; font-size:15px;">  SMA/MA Swasta</small></h3><small style="color:#f6f6f6; font-size:15px;">
						</small></small></div><small style="color:#f6f6f6; font-size:15px;"><small style="color:#f6f6f6; font-size:15px;">
						<div class="icon">
							<i class="fa fa-mortar-board"></i>
						</div>
					</small></small></div><small style="color:#f6f6f6; font-size:15px;"><small style="color:#f6f6f6; font-size:15px;">
			</small></small></div><small style="color:#f6f6f6; font-size:15px;"><small style="color:#f6f6f6; font-size:15px;">
			<div class="col-md-2">
				  <div class="small-box bg-purple-active color-palette">
						<div class="inner">
							<h3>0<small style="color:#f6f6f6; font-size:15px;">  SMK Negeri</small></h3><small style="color:#f6f6f6; font-size:15px;">
							<h3>0<small style="color:#f6f6f6; font-size:15px;">  SMK Swasta</small></h3><small style="color:#f6f6f6; font-size:15px;">
						</small></small></div><small style="color:#f6f6f6; font-size:15px;"><small style="color:#f6f6f6; font-size:15px;">
						<div class="icon">
							<i class="fa fa-mortar-board"></i>
						</div>
					</small></small></div><small style="color:#f6f6f6; font-size:15px;"><small style="color:#f6f6f6; font-size:15px;">
			</small></small></div><small style="color:#f6f6f6; font-size:15px;"><small style="color:#f6f6f6; font-size:15px;">

			<div class="col-md-6">
				  <div class="small-box bg-green-active color-palette">
						<div class="inner">
							<h4>Sarana &amp; Prasarana Tempat Ibadah</h4>
							<hr style="margin-bottom:-5px;">
						</div>
				  </div>

			<div class="col-md-4">
				  <div class="small-box bg-green color-palette">
						<div class="inner">
							<h3>16<small style="color:#f6f6f6; font-size:15px;"> Masjid</small></h3><small style="color:#f6f6f6; font-size:15px;">
							<h3>24<small style="color:#f6f6f6; font-size:15px;"> Surau</small></h3><small style="color:#f6f6f6; font-size:15px;">
						</small></small></div><small style="color:#f6f6f6; font-size:15px;"><small style="color:#f6f6f6; font-size:15px;">
					</small></small></div><small style="color:#f6f6f6; font-size:15px;"><small style="color:#f6f6f6; font-size:15px;">
			</small></small></div><small style="color:#f6f6f6; font-size:15px;"><small style="color:#f6f6f6; font-size:15px;">
			<div class="col-md-4">
				  <div class="small-box bg-green color-palette">
						<div class="inner">
							<h3>11<small style="color:#f6f6f6; font-size:15px;"> Gereja Kristen</small></h3><small style="color:#f6f6f6; font-size:15px;">
							<h3>2<small style="color:#f6f6f6; font-size:15px;"> Gereja Katolik</small></h3><small style="color:#f6f6f6; font-size:15px;">
						</small></small></div><small style="color:#f6f6f6; font-size:15px;"><small style="color:#f6f6f6; font-size:15px;">
					</small></small></div><small style="color:#f6f6f6; font-size:15px;"><small style="color:#f6f6f6; font-size:15px;">
			</small></small></div><small style="color:#f6f6f6; font-size:15px;"><small style="color:#f6f6f6; font-size:15px;">
			<div class="col-md-4">
				  <div class="small-box bg-green color-palette">
						<div class="inner">
							<h3>1<small style="color:#f6f6f6; font-size:15px;"> Vihara &nbsp;&nbsp;&nbsp;</small>
								0<small style="color:#f6f6f6; font-size:15px;"> Pura</small>

								</h3>
							<h3>0<small style="color:#f6f6f6; font-size:15px;"> Klenteng</small></h3><small style="color:#f6f6f6; font-size:15px;">
						</small></div><small style="color:#f6f6f6; font-size:15px;">
					</small></div><small style="color:#f6f6f6; font-size:15px;">
			</small></div><small style="color:#f6f6f6; font-size:15px;">
			</small></small></small></small></small></div><small style="color:#f6f6f6; font-size:15px;"><small style="color:#f6f6f6; font-size:15px;"><small style="color:#f6f6f6; font-size:15px;">
			<div class="col-md-6">
			<div class="small-box bg-light-blue-active color-palette">
						<div class="inner">
							<h4>Sarana &amp; Prasarana  Pelayanan Kesehatan</h4>
							<hr style="margin-bottom:-5px;">
						</div>
			</div>
			<div class="col-md-4">
				  <div class="small-box bg-light-blue disabled color-palette">
						<div class="inner">
							<h3>17<small style="color:#f6f6f6; font-size:15px;"> Rumah Sakit</small></h3><small style="color:#f6f6f6; font-size:15px;">
							<h3>2<small style="color:#f6f6f6; font-size:15px;"> <p>Puskesmas dgn</p><p> Rawat Inap</p></small></h3><small style="color:#f6f6f6; font-size:15px;">
						</small></small></div><small style="color:#f6f6f6; font-size:15px;"><small style="color:#f6f6f6; font-size:15px;">
						<div class="icon">
							<i class="fa fa-plus-square"></i>
						</div>
					</small></small></div><small style="color:#f6f6f6; font-size:15px;"><small style="color:#f6f6f6; font-size:15px;">
			</small></small></div><small style="color:#f6f6f6; font-size:15px;"><small style="color:#f6f6f6; font-size:15px;">
			<div class="col-md-4">
					<div class="small-box bg-light-blue disabled color-palette">
						<div class="inner">
							<h3>1<small style="color:#f6f6f6; font-size:15px;"> <p>Puskesmas Tanpa</p><p> Rawat Inap</p></small></h3><small style="color:#f6f6f6; font-size:15px;">
							<h3>0<small style="color:#f6f6f6; font-size:15px;"> Klinik</small></h3><small style="color:#f6f6f6; font-size:15px;">
						</small></small></div><small style="color:#f6f6f6; font-size:15px;"><small style="color:#f6f6f6; font-size:15px;">
						<div class="icon">
							<i class="fa fa-stethoscope"></i>
						</div>
					</small></small></div><small style="color:#f6f6f6; font-size:15px;"><small style="color:#f6f6f6; font-size:15px;">
			</small></small></div><small style="color:#f6f6f6; font-size:15px;"><small style="color:#f6f6f6; font-size:15px;">
			<div class="col-md-4">
					<div class="small-box bg-light-blue disabled color-palette">
						<div class="inner">
							<h3>5<small style="color:#f6f6f6; font-size:15px;"> Pustu</small></h3>
							<h3><small style="color:#f6f6f6; font-size:15px;"> Apotek</small></h3>
							<h3>21<small style="color:#f6f6f6; font-size:15px;"> Posyandu</small></h3><small style="color:#f6f6f6; font-size:15px;">
						</small></div><small style="color:#f6f6f6; font-size:15px;">
						<div class="icon">
							<i class="fa fa-medkit"></i>
						</div>
					</small></div><small style="color:#f6f6f6; font-size:15px;">
			</small></div><small style="color:#f6f6f6; font-size:15px;">
			</small></small></small></small></small></div><small style="color:#f6f6f6; font-size:15px;"><small style="color:#f6f6f6; font-size:15px;"><small style="color:#f6f6f6; font-size:15px;">
			<div class="col-md-12">
			  <div class="box box-primary box-solid">
					<div class="box-header with-border">
						<h3 class="box-title"><!-- Sarana &amp; Prasarana  Transportasi --></h3>
							<div class="box-tools pull-right">
								<button class="btn btn-box-tool" data-widget="collapse">
								<i class="fa fa-minus"></i>
							</button>
							</div>
					</div>
						<div class="box-body" style="display: block;">
						<table class="table table-bordered" style="color:#222222;">
							<tbody>
							<tr>
								<td colspan="5"><center><b>SARANA/PRASARANA TRANSPORTASI</b></center></td>
							</tr>
							<tr>
								<th>Desa/Kelurahan</th><th>Keberadaan Angkutan Umum </th><th>Lalu Lintas dari dan ke desa/ kelurahan melalui</th><th> Jenis Permukaan Jalan yang Terluas </th><th>Jalan dapat dilalui kendaraan bermotor roda 4 atau lebih</th>
							</tr>
														<?php
				 foreach ($perbatasansarprastransport as $row) {
				?>
				<tr>
				<td><?php echo $row->Desa; ?></td>
				<td><?php echo $row->AngkutanUmum; ?></td>
				<td><?php echo $row->LaluLintas; ?></td>
				<td><?php echo $row->JenisPermukaanJalan; ?></td>
				<td><?php echo $row->JalanDilalui; ?></td>
				</tr>		
				 <?php } ?>
							</tbody>
						</table>
						</div>
			 </div></div>


				<div class="col-md-3">
				  <div class="small-box bg-yellow disabled color-palette">
						<div class="inner">
							<h3>5528 </h3>
								<p> Jumlah Keluarga pengguna listrik PLN </p>
						</div>
						<div class="icon">
							<i class="fa fa-bolt"></i>
						</div>
						<a class="small-box-footer" href="#">
													<b>0</b>
									Jumlah Keluarga pengguna listrik non-PLN
									<br>
													<b>0</b>
									Jumlah Keluarga pengguna non Listrik
						</a>
					</div>
			</div>
			<div class="col-md-9">
			  <div class="box box-warning box-solid">
					<div class="box-header with-border">
						<h3 class="box-title"><!-- Sarana &amp; Prasarana  Listrik dan Penerangan --></h3>
							<div class="box-tools pull-right">
								<button class="btn btn-box-tool" data-widget="collapse">
								<i class="fa fa-minus"></i>
							</button>
							</div>
					</div>
						<div class="box-body" style="display: block;">
						<table class="table table-bordered" style="color:#222222;">
							<tbody>
							<tr>
								<td colspan="5"><center><b>SARANA/PRASARANA LISTRIK DAN PENERANGAN</b></center></td>
							</tr>
							<tr>
								<th>Desa/Kelurahan</th><th>Keberadaan penerangan di jalan utama desa/kelurahan ibukota kecamatan</th><th>Jenis penerangan</th>
							</tr>
							<?php
				 foreach ($perbatasansarpraslistrik as $row) {
				?>
				<tr>
				<td><?php echo $row->Desa; ?></td>
				<td><?php echo $row->KeberadaanPenerangan; ?></td>
				<td><?php echo $row->JenisPenerangan; ?></td>
				</tr>		
				 <?php } ?>
														
							</tbody>
						</table>
						</div>
			 </div></div>
				<div class="col-md-12">
				<div class="box box-info box-solid">
					<div class="box-header with-border">
						<h3 class="box-title"><!-- Sarana &amp; Prasarana  Air dan Sanitasi --></h3>
							<div class="box-tools pull-right">
								<button class="btn btn-box-tool" data-widget="collapse">
								<i class="fa fa-minus"></i>
							</button>
							</div>
					</div>
						<div class="box-body" style="display: block;">
						<table class="table table-bordered" style="color:#222222;">
							<tbody>
							<tr>
								<td colspan="8"><center><b>SARANA/PRASARANA AIR DAN SANITASI</b></center></td>
							</tr>
							<tr>
								<th>Desa/Kelurahan</th><th>Keberadaan Sungai</th><th> Sumber air untuk minum sebagian besar keluarga</th><th>Sumber air untuk mandi/cuci sebagian besar keluarga</th><th>Keberadaan Saluran Irigasi</th><th>Keberadaan danau/waduk/situ/bendungan</th><th>Tempat buang air besar sebagian keluarga </th><th>Tempat/saluran pembuangan limbah cair/air kotor sebagian besar keluarga </th>
							</tr>
														<?php
				 foreach ($perbatasansarprasair as $row) {
				?>
				<tr>
				<td><?php echo $row->Desa; ?></td>
				<td><?php echo $row->Sungai; ?></td>
				<td><?php echo $row->SumberAirMinum; ?></td>
				<td><?php echo $row->SumberAirMandi; ?></td>
				<td><?php echo $row->KeberadaanIrigasi; ?></td>
				<td><?php echo $row->KeberadaanDanau; ?></td>
				<td><?php echo $row->TempatBab; ?></td>
				<td><?php echo $row->TempatLimbahCair; ?></td>
				</tr>		
				 <?php } ?>
							</tbody>
						</table>
						</div>
					</div>
				</div>
				<div class="col-md-11">
			  <div class="box box-default box-solid">
					<div class="box-header with-border">
						<h3 class="box-title"><!-- Sarana &amp; Prasarana  Hiburan --></h3>
							<div class="box-tools pull-right">
								<button class="btn btn-box-tool" data-widget="collapse">
								<i class="fa fa-minus"></i>
							</button>
							</div>
					</div>
						<div class="box-body" style="display: block;">
						<table class="table table-bordered" style="color:#222222;">
							<tbody>
							<tr>
								<td colspan="5"><center><b>SARANA/PRASARANA HIBURAN</b></center></td>
							</tr>
							<tr>
								<th>Desa/Kelurahan</th><th>Keberadaan bioskop yang masih berfungsi </th><th>Jika tidak ada bioskop, perkiraan jarak terdekat ke bioskop </th><th> Keberadaan pub/diskotik/tempat karaoke yang masih berfungsi </th><th>Jika tidak ada pub/diskotik/tempat karaoke, perkiraan jarak ke pub/diskotik/tempat karaoke terdekat </th>
							</tr>
								<?php
				 foreach ($perbatasansarprashiburan as $row) {
				?>
				<tr>
				<td><?php echo $row->Desa; ?></td>
				<td><?php echo $row->KeberadaanBioskop; ?></td>
				<td><?php echo $row->JarakTerdekatBioskop; ?></td>
				<td><?php echo $row->KeberadaanPub; ?></td>
				<td><?php echo $row->JarakTerdekatPub; ?></td>
				
				</tr>		
				 <?php } ?>
														
							</tbody>
						</table>
						</div>
			 </div></div>

			<div class="col-md-11">
			  <div class="box box-success box-solid">
					<div class="box-header with-border">
						<h3 class="box-title"><!-- Sarana &amp; Prasarana  Komunikasi --></h3>
							<div class="box-tools pull-right">
								<button class="btn btn-box-tool" data-widget="collapse">
								<i class="fa fa-minus"></i>
							</button>
							</div>
					</div>
						<div class="box-body" style="display: block;">
						<table class="table table-bordered" style="color:#222222;">
							<tbody>
							<tr>
								<td colspan="11"><center><b>SARANA/PRASARANA KOMUNIKASI</b></center></td>
							</tr>
							<tr>
								<th>Desa/<br>Kelurahan</th><th>Keberadaan telepon umum/koin yang masih aktif</th><th>Keberadaan BTS</th><th>Keberadaan Wartel/<br>kiospon/<br>warpostel/<br>warparpostel</th><th>Keberadaan Warnet</th><th>Keberadaan kantor pos</th><th>Keberadaan pos keliling</th><th>TV Lokal dapat diterima</th><th>TV Swasta dapat diterima</th><th>TVRI dapat diterima</th><th>TV Luar Negeri dapat diterima</th>
							</tr>
							<?php
				 foreach ($perbatasansarpraskomunikasi as $row) {
				?>
				<tr>
				<td><?php echo $row->Desa; ?></td>
				<td><?php echo $row->TlpUmum; ?></td>
				<td><?php echo $row->BTS; ?></td>
				<td><?php echo $row->Wartel; ?></td>
				<td><?php echo $row->Warnet; ?></td>
				<td><?php echo $row->KantorPos; ?></td>
				<td><?php echo $row->PosKeliling; ?></td>
				<td><?php echo $row->TVLokal; ?></td>
				<td><?php echo $row->TVSwasta; ?></td>
				<td><?php echo $row->TVRI; ?></td>
				<td><?php echo $row->TVLuar; ?></td>
				
				</tr>		
				 <?php } ?>
														
							</tbody>
						</table>
						</div>
			 </div></div>
			<!-- <div class="col-md-1">
				  <div class="small-box bg-green-active color-palette">
						<div class="inner">
							<h3>74 </h3>
								<p> Jumlah pelanggan telepon kabel  </p>
						</div>
						<div class="icon">
							<i class="small fa fa-phone"></i>
						</div>
						<a class="small-box-footer" href="#">
						</a>
					</div>
			</div>-->
			</small></small></small></small></small></small></small></small></small></small></small></small></small></small></small></small></div><!-- /.Row Peningkatan Sarana Sosial di Kawasan Perbatasan --><small style="color:#f6f6f6; font-size:15px;"><small style="color:#f6f6f6; font-size:15px;"><small style="color:#f6f6f6; font-size:15px;">
			<!--<div class="callout bg-red color-palette lead" id="kat5"> BENCANA DAN PENANGANAN BENCANA
				<h4><b>BENCANA DAN PENANGANAN BENCANA </b><font style="font-size:10px;">  [<a href="#kat0">kembali ke atas</a>]</font></h4>
			</div>-->
		  <div class="row">
		 <!-- <div class="col-md-11">
				  <div class="small-box bg-red-active color-palette">
						<div class="inner">
							<p>Banyaknya kejadian</p><hr>
							<div class="col-md-1">
							<h3>4 </h3><small style="color:#f6f6f6; font-size:15px;"> Tanah Longsor</small>
								   <p><small style="color:#f6f6f6; font-size:12px;"><b>0</b><i> Korban Jiwa</i></small></p>
							</div>
							<div class="col-md-1">
							<h3>2 </h3><small style="color:#f6f6f6; font-size:15px;"> Banjir</small>
									<p><small style="color:#f6f6f6; font-size:12px;"><b>0</b><i> Korban Jiwa</i></small></p>
							</div>
							<div class="col-md-1">
							<h3>1 </h3><small style="color:#f6f6f6; font-size:15px;"> Banjir Bandang</small>
									<p><small style="color:#f6f6f6; font-size:12px;"><b>0</b><i> Korban Jiwa</i></small></p>
							</div>
							<div class="col-md-1">
							<h3>22 </h3><small style="color:#f6f6f6; font-size:15px;"> Gempa Bumi</small>
									<p><small style="color:#f6f6f6; font-size:12px;"><b>3</b><i> Korban Jiwa</i></small></p>
							</div>
							<div class="col-md-1">
							<h3>0 </h3><small style="color:#f6f6f6; font-size:15px;"> Tsunami</small>
									<p><small style="color:#f6f6f6; font-size:12px;"><b>0</b><i> Korban Jiwa</i></small></p>
							</div>
							<div class="col-md-1">
							<h3>0 </h3><small style="color:#f6f6f6; font-size:15px;"> Gelombang pasang Laut</small>
									<p><small style="color:#f6f6f6; font-size:12px;"><b>0</b><i> Korban Jiwa</i></small></p>
							</div>
							<div class="col-md-1">
							<h3>0 </h3><small style="color:#f6f6f6; font-size:15px;"> Angin Puyuh</small>
									<p><small style="color:#f6f6f6; font-size:12px;"><b>0</b><i> Korban Jiwa</i></small></p>
							</div>
							<div class="col-md-1">
							<h3>0 </h3><small style="color:#f6f6f6; font-size:15px;"> Gunung Meletus</small>
									<p><small style="color:#f6f6f6; font-size:12px;"><b>0</b><i> Korban Jiwa</i></small></p>
							</div>
							<div class="col-md-1">
							<h3>0 </h3><small style="color:#f6f6f6; font-size:15px;"> Kebakaran Hutan</small>
									<p><small style="color:#f6f6f6; font-size:12px;"><b>0</b><i> Korban Jiwa</i></small></p>
							</div>
							<div class="col-md-1">
							<h3>0 </h3><small style="color:#f6f6f6; font-size:15px;"> Kekeringan</small>
									<p><small style="color:#f6f6f6; font-size:12px;"><b>0</b><i> Korban Jiwa</i></small></p>
							</div>
						<br><br><br><br><br><br><br><br></div>
						<div class="icon">
							<i class="fa fa-warning"></i>
						</div>
						<a class="small-box-footer" href="#" style="text-align: left; padding-left:10px;">

						</a>
					</div>
				</div> -->
		  </div><!-- /.Row BENCANA DAN PENANGANAN BENCANA-->
		<!-- <div class="callout bg-light-blue color-palette lead" id="kat6"> BENCANA DAN PENANGANAN BENCANA 
				<h4><b>INDEKS PEMBANGUNAN DESA 2014 </b><font style="font-size:10px;">  [<a href="#kat0">kembali ke atas</a>]</font></h4>
		</div> -->
		
		
        </small></small></small></small></small></small></section>
					  
					  
					  <!-- HENSHIN -->

                    </div>
                    <p>&nbsp;</p>					
                   

                <?php } else { ?>
                    <table class="table table-bordered table-striped" id="perbatasan">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Provinsi</th>                    					
                                <th>Kota</th>                    					
                                <th>Kecamatan</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th>Provinsi</th>                    					
                                <th>Kota</th>                    					
                                <th>Kecamatan</th>
                            </tr>
                        </tfoot>
                    </table>
                <?php } ?>
            </div>

        </div>
    </div>

</div>