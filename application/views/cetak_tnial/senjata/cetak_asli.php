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
<p><b>TENTARA NASIONAL INDONESIA<br>MARKAS BESAR ANGKATAN LAUT</b></p>
</htmlpageheader>
<sethtmlpageheader name="head1" value="on" show-this-page="1">
<table style="text-align: left; width: 100%;" border="0" cellpadding="0" cellspacing="0" >
  <thead>
	<tr>
         
         <td style="vertical-align: top; text-align: center;"><b>LAPORAN BULANAN KEKUATAN MATERIEL ANGKATAN LAUT<br>KOMODITI : SENJATA</b></td>
 
     </tr>
    
  </thead>
</table>

';
foreach ($zorg as $key => $values) { 


$w = 1;
foreach ($henshin as $raw => $war) { 
	$html .='fg';
	if($values->idsenja==$war->idsenja2){
		if($w==1){
$html .='
<p>KESATUAN : <b>'.$values->kesatuan.'</b></p>

';
}
$html .= '
<p>KELOMPOK : <b>'.$war->jenis.'</b></p>
<br>
<table border="1" cellspacing="0" cellpadding="0" width="100%" id="tab1" repeat_header="1">
				<tr>
				<td align="center" rowspan="2"><b>NOMOR URUT</b></td>
				<td align="center" rowspan="2"><b>SEBUTAN SENJATA</b></td>
				<td align="center" colspan="2"><b>PEMAKAIAN</b></td>
				<td align="center" rowspan="2"><b>JUMLAH DI SATKAI</b><br>(3+4)</td>
				<td align="center" colspan="2"><b>PERSEDIAAN</b></td>
				<td align="center" rowspan="2"><b>JUMLAH DI ARSENAL</b><br>(6+7)<br></td>
				<td align="center" colspan="2"><b>TOTAL PEMAKAIAN DAN PERSEDIAAN</b></td>
				<td align="center" rowspan="2"><b>JUMLAH DI SATKAI & ARSENAL</b><br>(9+10)</td>
				</tr>
				<tr>
				<td align="center"><b>SIAP PAKAI</b></td>
				<td align="center"><b>TIDAK SIAP PAKAI</b></td>
			
				<td align="center"><b>SIAP PAKAI</b></td>
				<td align="center"><b>TIDAK SIAP PAKAI</b></td>
				
				<td align="center"><b>SIAP PAKAI</b><br> (3+6)</td>
				<td align="center"><b>TIDAK SIAP PAKAI</b><br> (4+7)</td>
				
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
				</tr>
				
				
				
						';
						//$i++;
						
				$html .= '
				
				
				
				
				
				
				
				
</table>

	';
						}



					} $w++;}
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
