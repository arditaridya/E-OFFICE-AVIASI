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
         
         <td style="vertical-align: top; text-align: center;"><b>LAPORAN KAPAL TNI AL</b></td>
 
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
				<td align="center" rowspan="2"><b>JENIS</b></td>
				<td align="center" rowspan="2"><b>KLAS</b></td>
				<td align="center" rowspan="2"><b>NAMA KRI</td>
				<td align="center" rowspan="2"><b>SINGKATAN</b></td>
				<td align="center" rowspan="2"><b>NO.LAMB</b></td>
				<td align="center" rowspan="2"><b>SATUAN</b></td>
				<td align="center" colspan="2"><b>POSISI</b></td>
				<td align="center" colspan="2"><b>TINGKAT<br>KESIAPAN</b></td>
				<td align="center" colspan="3"><b>KONDISI</b></td>
				<td align="center" rowspan="2"><b>KETERANGAN</b></td>
				
				</tr>
				<tr>
				<td align="center"><b>PKL</b></td>
				<td align="center"><b>LUAR<br>PKL</b></td>
				<td align="center"><b>S</b></td>
				<td align="center"><b>TS/ST</b></td>
				<td align="center">B</td>
				<td align="center">RR</td>
				<td align="center">RB</td>

				
			
				
				
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
				<td align="center">15</td>
				
				</tr>
				
				
									';
					
					foreach ($detail as $rom => $goshi) { 
					
						if ($tact->idkapal==$goshi->id_dump_kapal_al ){

					$html .= '
					<tr>
					<td></td>
					<td>'.$goshi->jenis.'</td>
					<td>'.$goshi->klas.'</td>
					<td>'.$goshi->nama_kapal.'</td>
					<td>'.$goshi->singkatan.'</td>
					<td>'.$goshi->no_lamb.'</td>
					<td>'.$goshi->satuan.'</td>
					<td></td>
					<td></td>
				
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td>'.$goshi->keterangan.'</td>
					


					</tr>





						';
					
						
						

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
