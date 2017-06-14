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
<p><b>TENTARA NASIONAL INDONESIA<br><u>MARKAS BESAR ANGKATAN UDARA</u></b></p>
</htmlpageheader>
<sethtmlpageheader name="head1" value="on" show-this-page="1">
<table style="text-align: left; width: 100%;" border="0" cellpadding="0" cellspacing="0" >
  <thead>
	<tr>
         
         <td style="vertical-align: top; text-align: center;"><b>LAPORAN BULANAN KEKUATAN MATERIEL ANGKATAN UDARA<br>KOMODITI : PESAWAT</b></td>
 
     </tr>
    
  </thead>
</table>
<br>
<table border="1" cellspacing="0" cellpadding="0" width="100%" id="tab1" repeat_header="1">
				<tr>
				<td align="center" rowspan="2" width="5%"><b>NOMOR URUT</b></td>
				<td align="center" rowspan="2" width="15%"><b>TIPE</b></td>
				<td align="center" colspan="2" width="10%"><b>SASBINPUAN</b></td>
				<td align="center" rowspan="2" width="5%"><b>SIAP</b><br></td>
				<td align="center" colspan="4" width="20%"><b>TIDAK SIAP</b></td>
				<td align="center" rowspan="2" width="35%"><b>KETERANGAN</b><br><br></td>
				</tr>
				<tr>
				<td align="center" width="5%"><b>KUAT</b></td>
				<td align="center" width="5%"><b>SAS</b></td>
			
				<td align="center" width="5%"><b>HAR RINGAN</b></td>
				<td align="center" width="5%"><b>HAR SEDANG</b></td>
				<td align="center" width="5%"><b>HAR BERAT</b></td>
				<td align="center" width="5%"><b>AWP</b></td>
				
				</tr>
				<tr>
				<td align="center" width="5%">1</td>
				<td align="center" width="15%">2</td>
				<td align="center" width="5%">3</td>
				<td align="center" width="5%">4</td>
				<td align="center" width="5%">5</td>
				<td align="center" width="5%">6</td>
				<td align="center" width="5%">7</td>
				<td align="center" width="5%">8</td>
				<td align="center" width="5%">9</td>
				<td align="center" width="45%">10</td>
				</tr>
		</table>

';
foreach ($model2 as $key => $values) { 

$html .= '
		
<table border="1" cellspacing="0" cellpadding="0" width="100%" id="tab1" repeat_header="1">				
				';
				$semua = 0;
				foreach ($model as $key => $value) { 
				if ($values->jenis==$value->jenis){
				$i = 1;
				$allkuat=$value->kuat + $semua;
				$allsas=$value->sas + $semua;
				$allsiap=$value->siap + $semua;
				$allharringan=$value->har_ringan + $semua;
				$allharsedang=$value->har_sedang + $semua;
				$allharberat=$value->har_berat + $semua;
				$allawp=$value->awp + $semua;
				$kesiapankekuatan= $allsiap / $allkuat * 100;
				$kesiapansasaran= $allsiap / $allsas * 100;				
				
					$html .= '
					
				<tr>
						<td align="center"><font size="6"></td>
						<td align="left" width="15%">'.$value->jenis.'</td>
						<td align="center"></td>
						<td align="center"></td>
						<td align="center"></td>
						<td align="center"></td>
						<td align="center"></td>
						<td align="center"></td>
						<td align="center"></td>
						<td align="center"></td>
						
				</tr>
					
				<tr>

						<td align="center" width="5%">'.$i.'<font size="6"></td>
						<td align="center" width="15%">'.$value->barang.'</td>
						<td align="center" width="5%">'.$value->kuat.'</td>
						<td align="center" width="5%">'.$value->sas.'</td>
						<td align="center" width="5%">'.$value->siap.'</td>
						<td align="center" width="5%">'.$value->har_ringan.'</td>
						<td align="center" width="5%">'.$value->har_sedang.'</td>
						<td align="center" width="5%">'.$value->har_berat.'</td>
						<td align="center" width="5%">'.$value->awp.'</td>
						<td align="center" width="45%">'.$value->ket.'</td>
						
						
				</tr>
				<tr>
						<td align="Left" colspan="2">Jumlah</td>
						<td align="center">'.$allkuat.'</td>
						<td align="center">'.$allsas.'</td>
						<td align="center">'.$allsiap.'</td>
						<td align="center">'.$allharringan.'</td>
						<td align="center">'.$allharsedang.'</td>
						<td align="center">'.$allharberat.'</td>
						<td align="center">'.$allawp.'</td>
						<td align="center">	Kesiapan dari kekuatan : '.round($kesiapankekuatan,2).'%
										<br>
											Kesiapan dari sasaran : '.round($kesiapansasaran, 2).' %
						</td>
				</tr>
				
						';
						$i++;
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
