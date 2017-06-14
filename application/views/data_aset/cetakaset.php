<?php
$html = '

';

$html .= '
<sethtmlpageheader name="head1" value="on" show-this-page="1">
<b>
MARKAS BESAR ANGKATAN UDARA<br>
<u>DINAS FASILITAS DAN KONTRUKSI &nbsp;</u>
</b><br><br>
</sethtmlpageheader>
<sethtmlpageheader name="head1" value="on" show-this-page="1">


<div align="center" style="font-size: 18px;"><b>'.$judul.'</b></div>
<br><br>
<table border="1" cellspacing="0" cellpadding="0" width="100%" id="tab1" repeat_header="1">
	<thead>
		<tr align = "center">
			<th rowspan="2">NO</th>
			<th align="center" colspan="2">NO REGISTRASI</th>
			<th align="center" rowspan="2">LUAS TANAH</th>
			<th align="center" colspan="2">SUDAH SERTIFIKAT</th>
			<th align="center" colspan="2">BELUM SERTIFIKAT</th>
			<th align="center" rowspan="2">NILAI (Rp)</th>
			<th align="center" rowspan="2">KETERANGAN</th>
		</tr>
		<tr align = "center">
			<th>SIMAK</th>
			<th>IKN</th>
			<th>BDG</th>
			<th>LUAS (m&sup2;)</th>
			<th>BDG</th>
			<th>LUAS (m&sup2;)</th>
		</tr>
	</thead>
	<tbody>';
	$i = 1;
	//var_dump($jojo);die();
	foreach ($jojo as $key => $value) {
		$zakzak = $value->id;
		$html .= '

			<tr align = "center">
				<td><center>'.$i.'.</center></td>
				<td width="12%" height="35px"><center>'.$value->simak.'</center></td>
				<td width="12%"><center>'.$value->ikn.'</center></td>
				<td align="right" width="12%">
				';
				/*echo "
																								SELECT SUM(cast(a.luas as bigint)) as sumo 
																								FROM 
																									detil_dataaset a,data_aset b
																								WHERE
																									a.dataaset=b.id and
																									b.id='$zakzak'
																								
																								";die();
																								*/
																								
																								
				$query2 = $this->db->query("
																								SELECT SUM(cast(a.luas as bigint)) as sumo 
																								FROM 
																									detil_dataaset a,data_aset b
																								WHERE
																									a.dataaset=b.id and
																									b.id='$zakzak'
																								
																								")->result();
																								
																					foreach ($query2 as $ruk)
																							{
																							$sumo = $ruk->sumo;
																							
																							}	
				$html .= '
				'.number_format($sumo, 0, "," , ".").'&nbsp;</td>
				<td align="right" width="12%">
				';
				$query3 = $this->db->query("
																								SELECT COUNT(a.jenis) as jumo 
																								FROM 
																									detil_dataaset a,data_aset b
																								WHERE
																									a.dataaset=b.id and
																									a.jenis='1' and
																									b.id='$zakzak'
																								
																								")->result();
																								
																					foreach ($query3 as $ruk)
																							{
																							$jumo = $ruk->jumo;
																							
																							}	
				
				$html .= '
				'.number_format($jumo, 0, "," , ".").'&nbsp;</td>
				<td align="right" width="12%">
				';
				$query5 = $this->db->query("
																								SELECT SUM(cast(a.luas as bigint)) as wumo 
																								FROM 
																									detil_dataaset a,data_aset b
																								WHERE
																									a.dataaset=b.id and
																									a.jenis='1' and
																									b.id='$zakzak'
																								
																								")->result();
																								
																					foreach ($query5 as $ruk)
																							{
																							$wumo = $ruk->wumo;
																							
																							}	
																							
				
				$html .= '
				'.number_format($wumo, 0, "," , ".").'&nbsp;</td>
				<td align="right" width="12%">
				';
				$query4 = $this->db->query("
																								SELECT COUNT(a.jenis) as qumo 
																								FROM 
																									detil_dataaset a,data_aset b
																								WHERE
																									a.dataaset=b.id and
																									a.jenis='2' and
																									b.id='$zakzak'
																								
																								")->result();
																								
																					foreach ($query4 as $ruk)
																							{
																							$qumo = $ruk->qumo;
																							
																							}
				
				$html .='
				'.number_format($qumo, 0, "," , ".").'&nbsp;</td>
				<td align="right" width="12%">
				';
				$query6 = $this->db->query("
																								SELECT SUM(cast(a.luas as bigint)) as eumo 
																								FROM 
																									detil_dataaset a,data_aset b
																								WHERE
																									a.dataaset=b.id and
																									a.jenis='2' and
																									b.id='$zakzak'
																								
																								")->result();
																								
																					foreach ($query6 as $ruk)
																							{
																							$eumo = $ruk->eumo;
																							
																							}	
				
				
				$html .='
				'.number_format($eumo, 0, "," , ".").'&nbsp;</td>
				<td align="right" width="12%">'.number_format($value->nilai, 0, "," , ".").'&nbsp;</td>
				<td width="12%">
				';
				/*
				if ($wumo == null || $sumo == null){
																$porsen = 0;
															
															}else{
															$porsen = ($wumo / $sumo) * 100;
															}
				*/
				$html .='
				'.$value->keterangan.'</td>
				
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
'.$ttc.' <br>
'.$jabatan.'
<br><br><br><br>
'.$pena.' <br>
'.$nrp.'
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
