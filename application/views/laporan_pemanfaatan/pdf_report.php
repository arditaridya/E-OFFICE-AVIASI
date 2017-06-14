<h4>
    MARKAS BESAR ANGKATAN UDARA
    <br>
    <u>DINAS FASILITAS DAN KONSTRUKSI</u>
    <p>
    
    DAFTAR BARANG MILIK NEGARA (BMN) LANUD <?php echo strtoupper($nama_lanud); ?>
    <br>
    YANG DIKERJASAMAKAN LANUD DENGAN PIHAK KEDUA DAN TELAH MENDAPAT PERSETUJUAN MENKEU RI C.Q DJKN/KPKNL
</h4>

<table border="1" cellspacing="0" cellpadding="5">
	<thead>
    	<tr>
        	<th rowspan="2">No</th>
			<th rowspan="2">BMN Yang Dikerjasamakan</th>
			<th rowspan="2">Alamat</th>
            <th colspan="2">Luas Bangunan / Tanah (M<sup>2</sup>)</th>
            <th rowspan="2">Nilai Sewa</th>
            <th rowspan="2">Rekomendasi Menkeu / KPKNL</th>
			<th rowspan="2">No Perjanjian</th>
            <th rowspan="2">Peruntukan</th>
            <th rowspan="2">Pihak Ke III / Penyewa</th>
            <th rowspan="2">Pola Kerjasama</th>
        </tr>
        <tr>
            <th>Bangunan</th>
            <th>Tanah</th>
        </tr>
    </thead>
    <tbody>
    	<tr>
        	<td align="center">1</td>
            <td align="center">2</td>
            <td align="center">3</td>
            <td colspan="2" align="center">4</td>
            <td align="center">5</td>
            <td align="center">6</td>
            <td align="center">7</td>
            <td align="center">8</td>
            <td align="center">9</td>
            <td align="center">10</td>
        </tr>
        <?php
        $no = 1;
        $jml_sewa = 0;
		foreach($data as $row){
        ?>
        <tr class="odd gradeX" >
        	<td align="center"><?php echo $no; ?></td>
            <td><?php echo ($row->bmn == "1")?"Tanah":"Tanah dan Bangunan"; ?></td>
            <td><?php echo $row->lokasi; ?></td>
            <td align="center"><?php echo $row->bangunan; ?></td>
            <td align="center"><?php echo $row->tanah; ?></td>
            <td align="right"><?php echo number_format($row->sewa,2,",","."); ?></td>
            <td><?php echo $row->menkeu; ?></td>
            <td><?php echo $row->perjanjian; ?></td>
            <td><?php echo $row->peruntukan; ?></td>
            <td><?php echo $row->penyewa; ?></td>
            <td><?php echo $row->pola_kerjasama." - ".$row->masa_kerjasama; ?></td>
        </tr>
        <?php
        $no++;
		$jml_sewa = $jml_sewa + $row->sewa;
        }
		
		if(!empty($data)){
        ?>
        <tr>
        	<td></td>
            <td></td>
            <td></td>
            <td colspan="2"></td>
            <td align="right"><strong><?php echo number_format($jml_sewa,2,",","."); ?></strong></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <?php }else{ ?>
        <tr>
        	<td colspan="11" style="color:#666"><em><strong>Data Tidak Ada</strong></em></td>
        </tr>
        <?php } ?>
    </tbody>
</table>