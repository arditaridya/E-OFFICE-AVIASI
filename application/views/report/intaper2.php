
                                <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet box blue">
                                <div style="border : 1px solid #ccccff; margin-left:auto; margin-right:auto; margin-top:auto; margin-bottom:auto;">
                                  
                                    
                                </div>
                                <div class="portlet-body form">     
									<!--<div align="center"><b>REKAPITULASI INVENTARIS TANAH TNI AU</b></div>-->
                                   <br>
								   <div class="row">
                                            <div class="col-lg-12" style="width : 97%; height: 700px !important;
    overflow: scroll; margin-left:15px">
								   <b>MARKAS BESAR ANGKATAN UDARA<br>
									DINAS FASILITAS DAN KONTRUKSI <br><br><br></b>
									<center>
									<b><?php echo $judulw; ?></b>
									</center>
									<br>
									<font size="0.5px">
                                    <table class="table table-striped table-bordered table-hover table-responsive">
                                        <thead>
                                            <tr>
                                                <th width="5%" rowspan="2"><center>No</center></th>
												
												<th colspan="2"><center>NO REGISTRASI</center></th>
												<th rowspan="2"><center>LOKASI<br>TANAH</center></th>
												<th colspan="3"><center>LUAS</center></th>
												<th rowspan="2"><center>NILAI (Rp)</center></th>
												<!--<th rowspan="2"><center>PERUNTUKAN</center></th>-->
												<th rowspan="2"><center>PERUNTUKAN</center></th>
                                            </tr>
											<tr>
                                                <th><center>SIMAK</center></th>
												<th><center>IKN</center></th>
												
												<th><center>SERTIFIKAT</center></th>
												<th><center>BLM SERTIFIKAT</center></th>
												<th><center>TOTAL</center></th>
												
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
												
												
												
											
                                                
												
<?php												

												
												$zukzuk2 = 1;
											
                                                
												
												
															$queryaset = $this->db->query("
																								SELECT * 
																								FROM 
																									data_aset
																								WHERE
																									
																									lanud='$halolanud'
																								
																								")->result();
												$noj = 1;
												$sa1 = 0;
												$sa2 = 0;
												$sa3 = 0;
												foreach ($queryaset as $rzw) {
													$zekzek = $rzw->id;
													?>
													<tr>
												
                                                    <td width="6%" align="center"><?php echo $noj; ?></td>
                                                    <td width="14%"><?php echo $rzw->simak; ?></td>
													<td width="14%"><?php echo $rzw->ikn; ?></td>
													<td width="15%"><?php echo $rzw->lokasi; ?></td>
													
													<td width="8%" align="right">
													<?php
														$query6 = $this->db->query("
																								SELECT SUM(cast(a.luas as bigint)) as eumo 
																								FROM 
																									detil_dataaset a,data_aset b
																								WHERE
																									a.dataaset=b.id and
																									a.jenis='1' and
																									b.id='$zekzek'
																								
																								")->result();
																								
																					foreach ($query6 as $rqk)
																							{
																							$eumo = $rqk->eumo;
																							
																							}
																							echo $eumo;
													?>
													
													</td>
													<td width="8%" align="right">
														<?php
														$query6 = $this->db->query("
																								SELECT SUM(cast(a.luas as bigint)) as eumo 
																								FROM 
																									detil_dataaset a,data_aset b
																								WHERE
																									a.dataaset=b.id and
																									a.jenis='2' and
																									b.id='$zekzek'
																								
																								")->result();
																								
																					foreach ($query6 as $ruk)
																							{
																							$pumo = $ruk->eumo;
																							
																							}
																							echo $pumo;
													?>
													</td>
													<td width="8%" align="right"><?php echo number_format($rzw->luas, 0, "," , "."); ?></td>
													<td width="12%" align="right"><?php echo number_format($rzw->nilai, 0, "," , "."); ?></td>
													<!--<td width="15%"><?php // echo $rzw->peruntukan; ?></td>-->
													<td width="15%"><?php echo $rzw->peruntukan; ?></td>
													
                                                </tr>
															
													<?php
												$sa1 = $sa1 + $eumo;
												$sa2 = $sa2 + $pumo;
												$sa3 = $sa3 + $rzw->luas;
												$noj++;
												}
												?>
												<tr>
													<td></td>
													<td colspan="3"><center>Jumlah</center></td>
													
													<td align="right"><?php echo $sa1; ?></td>
													<td align="right"><?php echo $sa2; ?></td>
													<td align="right"><?php echo $sa3; ?></td>
													<td></td>
													<td></td>
													
												</tr>
																							
													<?php					
															
												
												
												//$qw1 = count($jumda);
												
												?>
												
                                        </tbody>
                                    </table>
									</font>
									<br><br>
									<div style=" float:right; text-align: center; width: 250px">
<div align="center">
<?php echo $ttcw; ?><br>
<?php echo $jabatanw; ?>
<br><br><br><br>
<?php echo $penaw; ?> <br>
<?php echo $nrpw; ?>
</div>
</div>
<br><br><br>
 </div>
</div>  

</div>
</div>  </div>
</div>      