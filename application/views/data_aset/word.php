<?php
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=laporan_dataaset.doc");
?>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">
        <style>
		
		@page Section1 {size:595.45pt 841.7pt; margin:1.0in 1.25in 1.0in 1.25in;mso-header-margin:.5in;mso-footer-margin:.5in;mso-paper-source:0;}
div.Section1 {page:Section1;}
@page Section2 {size:841.7pt 595.45pt;mso-page-orientation:landscape;margin:1.25in 1.0in 1.25in 1.0in;mso-header-margin:.5in;mso-footer-margin:.5in;mso-paper-source:0;}
div.Section2 {page:Section2;}

            h2{
                text-align: center
            }
            .mytable{
                border:1px solid black; 
                border-collapse: collapse;
                width: 100%;
            }
            .mytable tr th, .mytable tr td{
                border:1px solid black; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
	<div class="Section2">
      <b>MARKAS BESAR ANGKATAN UDARA<br>
	  DINAS FASILITAS DAN KONTRUKSI</b>

	  <br><br><br>
	  <center><b><?php echo $judulnya; ?></b></center>
		<br><br>
        <h2></h2>
        <table class="mytable">
          
		
	
                                        <thead>
                                            <tr>
                                                <th width="5%" rowspan="2">No</th>
                                               <th colspan="2">NO REGISTRASI</th>
												<th rowspan="2">LUAS TANAH</th>
												<th colspan="2">SUDAH SERTIFIKAT</th>
												<th colspan="2">BELUM SERTIFIKAT</th>
												<th rowspan="2">NILAI</th>
												<th rowspan="2">KETERANGAN</th>
                                            </tr>
											<tr>
												<th>SIMAK</th>
												<th>IKN</th>
												<th>BDG</th>
												<th>LUAS</th>
												<th>BDG</th>
												<th>LUAS</th>
												
											</tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                           foreach ($datanya as $row) {
											   $zoey = $row->id;
                                                ?>
                                                <tr class="odd gradeX" >
                                                    <td width="5%"><?php echo $no; ?></td>
                                                    <td><?php echo $row->simak; ?></td>
													<td><?php echo $row->simak; ?></td>
													<td align="right"><?php echo $row->luas; ?></td>
													<td align="right">
													<?php
														$zazap = $this->db->query("
																								SELECT COUNT(a.id) as qumo 
																								FROM 
																									detil_dataaset a,data_aset b
																								WHERE
																									a.dataaset=b.id and
																									a.jenis='1' and
																									b.id='$zoey'
																								
																								")->result();
																								
																					foreach ($zazap as $rtk)
																							{
																							$qumo = $rtk->qumo;
																							
																							}
																							echo $qumo;
													?>
													</td>
													<td align="right">
													<?php
														$query6 = $this->db->query("
																								SELECT SUM(cast(a.luas as bigint)) as eumo 
																								FROM 
																									detil_dataaset a,data_aset b
																								WHERE
																									a.dataaset=b.id and
																									a.jenis='1' and
																									b.id='$zoey'
																								
																								")->result();
																								
																					foreach ($query6 as $ruk)
																							{
																							$pumo = $ruk->eumo;
																							
																							}
																							echo $pumo;
													?>
													
													</td>
													<td align="right">
													<?php
														$xepo = $this->db->query("
																								SELECT COUNT(a.id) as numo 
																								FROM 
																									detil_dataaset a,data_aset b
																								WHERE
																									a.dataaset=b.id and
																									a.jenis='2' and
																									b.id='$zoey'
																								
																								")->result();
																								
																					foreach ($xepo as $rfk)
																							{
																							$numo = $rfk->numo;
																							
																							}
																							echo $numo;
													?>
													</td>
													<td align="right">
													<?php
														$rouz = $this->db->query("
																								SELECT SUM(cast(a.luas as bigint)) as zumo 
																								FROM 
																									detil_dataaset a,data_aset b
																								WHERE
																									a.dataaset=b.id and
																									a.jenis='2' and
																									b.id='$zoey'
																								
																								")->result();
																								
																					foreach ($rouz as $rlk)
																							{
																							$zumo = $rlk->zumo;
																							
																							}
																							echo $zumo;
													?>
													
													</td>
													<td align="right"><?php echo number_format($row->nilai, 0, "," , "."); ?></td>
													<td><?php echo $row->keterangan; ?></td>
                                                </tr>
                                                <?php
                                                $no++;
                                            }
											
											
                                            ?>
                                        </tbody>
                                    </table>
    </div>
	</body>
	
</html>