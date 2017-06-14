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
         
         <td style="vertical-align: top; text-align: center;"><h3><b>LAPORAN BULANAN KEKUATAN MATERIEL ANGKATAN DARAT<br>KOMODITI : KAPAL</b></h3></td>
 
     </tr>
    
  </thead>
</table>
<br><br>

<br>
<table border="1" cellspacing="1" cellpadding="0" width="100%" id="tab1" repeat_header="1">

				<tr>
					<th align="center" rowspan="2" width="3%"><b>No.</b></th>
					<th align="center" rowspan="2" width="8%"><b>JENIS</b></th>
					<th align="center" rowspan="2" width="10%"><b>FUNGSI</b></th>
					<th align="center" rowspan="2" width="15%"><b>NAMA BARANG</b></th>
					<th align="center" rowspan="2" width="10%"><b>KESATUAN</b></th>
					<th align="center" rowspan="2" width="10%"><b>LOKASI</b></th>
					<th align="center" colspan="4" width="15%"><b>OPERASIONAL</b></th>
					<th align="center" colspan="4" width="15%"><b>NON OPERASIONAL</b></th>
					<th align="center" rowspan="2" width="10%"><b>JUMLAH TOTAL</b></th>
				</tr>

				<tr>
				<th align="center"><b>S</b></th>
				<th align="center"><b>TS</b></th>
				<th align="center"><b>JML</b></th>
				<th align="center"><b>KS %</b></th>
			
				<th align="center"><b>KONS</b></th>
				<th align="center"><b>RB</b></th>
				<th align="center"><b>TL</b></th>
				<th align="center"><b>JML</b></th>
				</tr>

				<tr bgcolor="#FF9900">
				<td align="center">-</td>
				<td align="center">-</td>
				<td align="center">-</td>
				<td align="center">-</td>
				<td align="center">-</td>
				<td align="center">-</td>
				<td align="center">-</td>
				<td align="center">-</td>
				<td align="center">-</td>
				<td align="center">-</td>
				<td align="center">-</td>
				<td align="center">-</td>
				<td align="center">-</td>
				<td align="center">-</td>
				<td align="center">-</td>
				</tr>
';

				$i = 1;
foreach ($jenis as $key => $jn) {
$html .= '
				<tr>
				<td></td>
				<td align"center">'.$jn->jenis.'</td>
				<td colspan="13"></td>
				</tr>

				';

foreach ($fungsi as $key => $values) {
	if ($jn->id_jenis==$values->id_jenis) {
$html .= '
				<tr>
				<td></td>
				<td></td>
				<td align="center">'.$values->fungsi.'</td>
				<td colspan="12"></td>
				</tr>
				
				';
				foreach ($model as $key => $value) { 
				if ($values->fungsi==$value->fungsi && $jn->jenis==$value->jenis){
				$jml_ops = $value->s_ops + $value->ts_ops;
				$ks = $value->s_ops / $jml_ops * 100;
				$jml_noops = $value->kons_noops + $value->rb_noops + $value->tl_noops;
				$jml_total = $jml_ops + $jml_noops;
				
					$html .= '
				
				<tr>
				<td align="center">'.$i.'</td>
				<td align="center"></td>
				<td align="center"></td>
				<td align="center">'.$value->barang.'</td>
				<td align="center">'.$value->kesatuan.'</td>
				<td align="center">'.$value->lokasi.'</td>
				<td align="right">'.$value->s_ops.'</td>
				<td align="right">'.$value->ts_ops.'</td>
				<td align="right">'.$jml_ops.'</td>
				<td align="right">'.$ks.' %</td>
				<td align="right">'.$value->kons_noops.'</td>
				<td align="right">'.$value->rb_noops.'</td>
				<td align="right">'.$value->tl_noops.'</td>
				<td align="right">'.$jml_noops.'</td>
				<td align="right">'.$jml_total.'</td>
				</tr>
						';
						$i++;
						}}}}}
				$html .= '
				
</table>
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

?>
