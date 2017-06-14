<?php
$html = '

';

$html .= '
<htmlpageheader name="head1">
<b>
MARKAS BESAR ANGKATAN UDARA<br>
DINAS FASILITAS DAN KONTRUKSI
</b>
</htmlpageheader>
<sethtmlpageheader name="head1" value="on" show-this-page="1">
<br><br><br>
<div align="center" style="font-size: 18px;"><b>'.$judul.'</b></div>
<br><br><br>
<table border="1" cellspacing="0" cellpadding="0" width="100%" id="tab1" repeat_header="1">
	<thead>
		<tr align = "center">
			<th>NO</th>
			<th align="center">SIMAK</th>
			<th align="center">BMN Yang Dikerjasamakan</th>
			<th align="center">Alamat</th>
			<th align="center">Luas Bangunan</th>
			<th align="center">Luas Tanah</th>
			<th align="center">Nilai Sewa</th>
			
		</tr>
		
	</thead>
	<tbody>';
	$i = 1;
	foreach ($jojo as $key => $value) {
		$zakzak = $value->id;
		$html .= '

			<tr align = "center">
				<td width="4%"><center>'.$i.'.</center></td>
				<td width="15%"><center>'.$value->simak.'</center></td>
				<td width="15%"><center>'.$value->simak.'</center></td>
				<td width="15%"><center>'.$value->lokasi.'</center></td>
				<td width="15%"><center>'.$value->bangunan.'</center></td>
				<td width="15%"><center>'.$value->tanah.'</center></td>
				<td width="15%"><center>'.number_format($value->sewa,0,",",".").'</center></td>
			</tr>
				
		';
		$i++;
	}

$html .= '
		</tbody>
</table>


<br><br><br><br>
<div style=" float:right; text-align: center; font-family: impact; width: 300px">
<div align="center">
'.$ttc.'
<br><br><br><br>
'.$pena.'
</div>
</div>
';


//echo $html;die();
/*
require 'assets/MPDF60/mpdf.php';
$mypdf = new mPDF('', 'Legal', 0, '', 12.7, 12.7, 46, 0, 12.7, 12.7,'L');
$mypdf->AddPage('L');
$mypdf->SetDisplayMode('fullpage');
$mypdf->debug=true;
// $mypdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date(DATE_RFC822));
$mypdf->WriteHTML($html);
$mypdf->Output();
*/
// Panggil mPdf
include("assets/MPDF60/mpdf.php");
//mpdf/mpdf.php berarti file mpdf.php dipanggil dari dalam folder mpdf/

// A4 maksudnya ukuran kertas
//$mpdf = new mPDF('utf-8', 'A4', 0, '', 10, 10, 5, 1, 1, 1, '');
$mpdf = new mPDF('c', 'A4-L'); 
$mpdf->SetFooter($footera);
$mpdf->WriteHTML($html);
//$html adalah komponen HTML yang akan dijadikan PDF
$mpdf->Output();
// Gampangkan? cuma gitu aja dah bisa jadi PDF, silakan download file latihannya biar mudeng..
