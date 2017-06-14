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
<p><u><b>TENTARA NASIONAL INDONESIA<br>MARKAS BESAR ANGKATAN LAUT</b></u></p>
</htmlpageheader>
<sethtmlpageheader name="head1" value="on" show-this-page="1">
<table style="text-align: left; width: 100%;" border="0" cellpadding="0" cellspacing="0" >
  <thead>
	<tr>
         
         <td style="vertical-align: top; text-align: center;"><b>LAPORAN BULANAN MATERIEL; ANGKATAN LAUT<br>KOMODITI AMUNISI KALIBER BESAR</b></td>
 
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
				<td align="center" rowspan="3"><b>NO</b></td>
				<td align="center" rowspan="3" width="20%"><b>JENIS AMUNISI</b></td>
				<td align="center" rowspan="3"><b>JUMLAH<br>RIL<br>SENJATA</b></td>
				<td align="center" rowspan="3"><b>BP/<br>SENJATA</b></td>
				<td align="center" rowspan="3"><b>1BP</b></td>
				<td align="center" colspan="9"><b>JUMLAH RIIL</b></td>
				<td align="center" colspan="4"><b>KEBUTUHAN IDEAL</b></td>
				<td align="center" rowspan="3"><b>KEBUTUHAN</b></td>
				
				
				
				</tr>
				<tr>
				<td align="center" colspan="3"><b>ARSENAL</b></td>
				<td align="center" colspan="3"><b>SATKAI</b></td>
				<td align="center" colspan="3"><b>ARSENAL + SATKAI</b></td>
				<td align="center" rowspan="2">LAT/DIK</td>
				<td align="center" rowspan="2">2BP</td>
				<td align="center" rowspan="2">1BP</td>
				<td align="center" rowspan="2">JML IDEAL</td>
			
				</tr>

				<tr>
				<td>JML</td>
				<td>SIAP</td>
				<td>TDK<br>SIAP</td>
				<td>JML</td>
				<td>SIAP</td>
				<td>TDK<br>SIAP</td>
				<td>JML</td>
				<td>SIAP</td>
				<td>TDK<br>SIAP</td>

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
				<td align="center">16</td>
				<td align="center">17</td>
				<td align="center">18</td>
				<td align="center">19</td>
				
				</tr>
			
				
				
				';
				$i = 1;
				foreach ($model as $key => $value) { 
				if ($tact->kesatuan==$value->kesatuan){
				
			
				
					$html .= '
					
					<tr>
			
					<td>'.$i.'</td>
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
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					
					


					</tr>



					';
					$hibp=0;
					$juar=0;
					$juas=0;
					$rider=0;
					$drive=0;
					$hakuba=0;
					$sebp=0;
					$dubp=0;
					$jubp=0;
					$kebu=0;
					foreach ($detail as $rom => $goshi) { 
						
						if ($value->idamunisi==$goshi->id_dump_amunisi_al){
						$hibp = $goshi->jml_barang * $goshi->bp_barang ;
						$juar = $goshi->arsenal_siap + $goshi->arsenal_tdk_siap ;
						$juas = $goshi->satkai_siap + $goshi->satkai_tdk_siap ;
						$rider= $goshi->arsenal_siap + $goshi->satkai_siap ;
						$drive= $goshi->arsenal_tdk_siap + $goshi->satkai_tdk_siap ;
						$hakuba = $rider + $drive;
						$sebp = 1/2 * $hibp;
						$dubp = $hibp * 2 ;
						$jubp = $hibp + $sebp + $dubp ;
						$kebu = $jubp - $rider;

					$html .= '
					<tr>
				
					<td></td>
					<td>'.$goshi->barang.'</td>
					<td>'.$goshi->jml_barang.'</td>
					<td>'.$goshi->bp_barang.'</td>
					<td>'.$hibp.'</td>
					<td>'.$juar.'</td>
					<td>'.$goshi->arsenal_siap.'</td>
					<td>'.$goshi->arsenal_tdk_siap.'</td>
					<td>'.$juas.'</td>
					<td>'.$goshi->satkai_siap.'</td>
					<td>'.$goshi->satkai_tdk_siap.'</td>
					<td>'.$hakuba.'</td>
					<td>'.$rider.'</td>
					<td>'.$drive.'</td>
					<td>'.$sebp.'</td>
					<td>'.$dubp.'</td>
					<td>'.$hibp.'</td>
					<td>'.$jubp.'</td>
					<td>'.$kebu.'</td>


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
