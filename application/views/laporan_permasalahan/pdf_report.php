<?php
$x = explode("_",$this->uri->segment(3));

$label = "";
// 20160606 if(!empty($this->uri->segment(3)) and $this->uri->segment(3) != "0-0"){
if($x[0] != "0-0"){
	// 20160606 $x_tgl = explode("-",$this->uri->segment(3));
	$x_tgl = explode("-",$x[0]);
	$bulan_default = $x_tgl[0];
	$tahun_default = $x_tgl[1];
	
	if($bulan_default == "1"){
		$bulan_label = "Januari";
	}else if($bulan_default == "2"){
		$bulan_label = "Februari";
	}else if($bulan_default == "3"){
		$bulan_label = "Maret";
	}else if($bulan_default == "4"){
		$bulan_label = "April";
	}else if($bulan_default == "5"){
		$bulan_label = "Mei";
	}else if($bulan_default == "6"){
		$bulan_label = "Juni";
	}else if($bulan_default == "7"){
		$bulan_label = "Juli";
	}else if($bulan_default == "8"){
		$bulan_label = "Agustus";
	}else if($bulan_default == "9"){
		$bulan_label = "September";
	}else if($bulan_default == "10"){
		$bulan_label = "Oktober";
	}else if($bulan_default == "11"){
		$bulan_label = "November";
	}else if($bulan_default == "12"){
		$bulan_label = "Desember";
	}
	
	$label = "SAMPAI DENGAN ".strtoupper($bulan_label)." ".$tahun_default;
}
?>

<h4>
    MARKAS BESAR ANGKATAN UDARA
    <br>
    <u>DINAS FASILITAS DAN KONSTRUKSI</u>
    <p>
    
    DATA BARANG MILIK NEGARA TANAH DAN BANGUNAN BERMASALAH
    <br>
    DI LINGKUNGAN TNI AU <?php echo $label; ?>
</h4>

									<table border="1" cellspacing="0" cellpadding="5">
                                        <thead>
                                            <tr>
                                                <th rowspan="3">No</th>
												<th rowspan="3">Kementerian Negara / Lembaga</th>
												<th rowspan="3">Nama Satker</th>
                                                <!-- 20160606
                                                <th colspan="2">Alamat Aset</th>
                                                -->
                                                <th rowspan="3">Alamat Aset</th>
                                                <th colspan="4">Jenis Aset</th>
                                                <th rowspan="3">Nilai Aset</th>
												<th rowspan="3">Permasalahan</th>
                                                <th rowspan="3">Hasil Klarifikasi / Progres</th>
                                                <th rowspan="3">Tindak Lanjut Penyelesaian</th>
                                            </tr>
                                            <tr>
                                            	<!-- 20160606
                                                <th rowspan="2">Provinsi</th>
                                                <th rowspan="2">Alamat</th>
                                                -->
                                                <th colspan="2">Tanah</th>
                                                <th colspan="2">Bangunan</th>
                                            </tr>
                                            <tr>
                                            	<th>Luas (M2)</th>
                                                <th>Nilai (Rp)</th>
                                                <th>Luas (M2)</th>
                                                <th>Nilai (Rp)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<tr>
                                            	<td align="center">1</td>
                                                <td align="center">2</td>
                                                <td align="center">3</td>
                                                <td align="center">4</td>
                                                <td align="center">5</td>
                                                <td align="center">6</td>
                                                <td align="center">7</td>
                                                <td align="center">8</td>
                                                <td align="center">9</td>
                                                <td align="center">10</td>
                                                <td align="center">11</td>
                                                <td align="center">12</td>
                                                <!-- 20160606
                                                <td align="center">13</td>
                                                -->
                                            </tr>
                                            <?php
                                            $no = 1;
                                           $jml_sewa = 0;
										   foreach ($data as $row) {
                                                ?>
                                                <tr class="odd gradeX" >
                                                    <td align="center"><?php echo $no; ?></td>
                                                    <td><?php echo $row->kotama; ?></td>
                                                    <td><?php echo $row->lanud; ?></td>
                                                    <!-- 20160606
                                                    <td></td>
                                                    -->
                                                    <td><?php echo $row->lokasi; ?></td>
                                                    <?php /* 20160606 ?>
                                                    <td align="right"><?php echo number_format($row->luas,0,",","."); ?></td>
                                                    <td align="right"><?php echo number_format($row->nilai,0,",","."); ?></td>
                                                    <?php */ ?>
                                                    <td align="right"><?php echo ($row->bmn == "1")?number_format($row->tanah,0,",","."):"-"; ?></td>
                                                    <td align="right"><?php echo ($row->bmn == "1")?number_format($row->sewa,0,",","."):"-"; ?></td>
                                                    <td align="right"><?php echo ($row->bmn == "2")?number_format($row->bangunan,0,",","."):"-"; ?></td>
                                                    <td align="right"><?php echo ($row->bmn == "2")?number_format($row->sewa,0,",","."):"-"; ?></td>
                                                    <td align="right"><?php echo number_format($row->nilai,0,",","."); ?></td>
                                                    <td><?php echo $row->permasalahan; ?></td>
                                                    <td><?php echo $row->hasil_klarifikasi; ?></td>
                                                    <td><?php echo $row->tindak_lanjut; ?></td>

                                                </tr>
                                                <?php
                                                $no++;
												$jml_sewa = $jml_sewa + $row->sewa;
                                            }
											
											if(empty($data)){
                                            ?>
                                            <tr>
                                            	<!-- 20160606
                                                <td colspan="13" style="color:#666"><em><strong>Data Tidak Ada</strong></em></td>
                                                -->
                                                <td colspan="12" style="color:#666"><em><strong>Data Tidak Ada</strong></em></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>