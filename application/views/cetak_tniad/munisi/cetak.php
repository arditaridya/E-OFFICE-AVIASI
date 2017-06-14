<?php
$html = '
<style>
body{
	font-size: 12px;
	/*font-family:courier;*/
	font-family:  "Times New Roman", Courier, Arial, Georgia, Serif;
}
#tab1 {
	border-left: solid 1px black;
	border-top: solid 1px black;
	border-spacing:0;
	border-collapse: collapse; 
}
#tab1 td {
	border-right: solid 1px black;
	border-bottom: solid 1px black;
}
</style>
</head>
<body>
<htmlpageheader name="head1">
<p><b>TENTARA NASIONAL INDONESIA<br>MARKAS BESAR ANGKATAN DARAT</b></p>
</htmlpageheader>
<sethtmlpageheader name="head1" value="on" show-this-page="1">
<table style="text-align: left; width: 100%;" border="0" cellpadding="0" cellspacing="0" >
  <thead>
	<tr>
         
         <td style="vertical-align: top; text-align: center;"><b>REKAPITULASI DATA PERSEDIAAN MUNISI PUSAT, DAERAH DAN SATUAN</b></td>
 
     </tr>
    
  </thead>
</table>

';
foreach ($kesatuan as $sham => $tact) { 


$html .= '
<br>
<p>KESATUAN : '.$tact->kesatuan.'</p>


<table border="1" cellspacing="0" cellpadding="0" width="100%" id="tab1" repeat_header="1">
				<tr>
				<td align="center" rowspan="2"><b>NO</b></td>
				<td align="center" rowspan="2" width="20%"><b>JENIS MUNISI</b></td>
				<td align="center" rowspan="2" width="15%"><b>JENIS SENJATA</b></td>
				<td align="center" rowspan="2" width="6,5%"><b>JUMLAH<br>PUCUK</b></td>
				<td align="center" rowspan="2" width="6,5%"><b>BP/<br>PUCUK</b></td>
				<td align="center" rowspan="2" width="6,5%"><b>1XBP/<br>BUTIR</b></td>
				<td align="center" rowspan="2" width="6,5%"><b>3XBP/<br>BUTIR</b></td>
				<td align="center" rowspan="2" width="6,5%"><b>6XBP/<br>BUTIR</b></td>
				<td align="center" colspan="3" width="13%"><b>PERSEDIAAN/BUTIR</b></td>
				<td align="center" rowspan="2" ><b>JUMLAH</b></td>
				<td align="center" rowspan="2"><b>SELISIH JMLH MKK</b></td>
				<td align="center" rowspan="2"><b>KETERANGAN</b></td>
				
				</tr>
				<tr>
				<td align="center"><b>SATUAN</b></td>
				<td align="center"><b>DAERAH</b></td>
				<td align="center"><b>PUSAT</b></td>
				
			
				
				
				</tr>
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
				<td align="center">13</td>
				<td align="center">14</td>
				
				</tr>
				
				
				';
				$i = 1;
				foreach ($model as $key => $value) { 
				if ($tact->kesatuan==$value->kesatuan){
				
			
				
					$html .= '
					
					<tr>
			
					<td></td>
					<td>'.$value->jenis.'</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					


					</tr>


					<tr>
			
					<td>'.$i.'</td>
					<td>'.$value->barang.'</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					</tr>
					';
					$satubp = 0;
					$tigabp = 0;
					$enambp = 0;
					$jp = 0;
					$allsabp = 0;
					$alljml = 0;
					$selis = 0;
					foreach ($detail as $rom => $goshi) { 
						$satubp = $goshi->jml_barang * $goshi->bp_barang;
						$tigabp = $satubp * 3 ;
						$enambp = $satubp * 6 ;
						$jp = $goshi->persediaan_pusat + $goshi->persediaan_satuan + $goshi->persediaan_daerah;
						$allsabp = $satubp + $allsabp ;
						$alljml = $goshi->jml_barang + $alljml ;
						$selis = $jp - $enambp;
						if ($value->idamunisi==$goshi->id_dump_amunisi_ad){

					$html .= '
					<tr>
					<td></td>
					<td></td>
					<td>'.$goshi->barang.'</td>
					<td align="center">'.$goshi->jml_barang.'</td>
					<td align="center">'.$goshi->bp_barang.'</td>
					<td align="center">'.$satubp.'</td>
					<td align="center">'.$tigabp.'</td>
					<td align="center">'.$enambp.'</td>
					<td align="center">'.$goshi->persediaan_satuan.'</td>
					<td align="center">'.$goshi->persediaan_daerah.'</td>
					<td align="center">'.$goshi->persediaan_pusat.'</td>
					<td align="center">'.$jp.'</td>
					<td align="center">'.$selis.'</td>
					<td>'.$goshi->keter.'</td>
					


					</tr>





						';
					}
						$i++;
						}

				}}	
				$html .= '
				
				
				
				
				
				
				
				
</table>

	';
}
						
				$html .= '

<br>
<br>
<br>
';

//echo $html;die();

require 'assets/MPDF60/mpdf.php';
$mypdf = new mPDF('', 'Legal', 0, '', 12.7, 12.7, 46, 0, 12.7, 12.7,'L');
$mypdf->AddPage('L');
$mypdf->SetDisplayMode('fullpage');
$mypdf->debug=true;
// $mypdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date(DATE_RFC822));
$mypdf->WriteHTML($html);
$mypdf->Output();
