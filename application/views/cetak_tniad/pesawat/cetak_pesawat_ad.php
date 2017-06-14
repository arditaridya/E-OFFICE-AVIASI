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

</htmlpageheader>
<sethtmlpageheader name="head1" value="on" show-this-page="1">
';
$html .= '
TENTARA NASIONAL INDONESIA<br>
<u>MARKAS BESAR ANGKATAN DARAT</u><p>
<table border="1" cellspacing="0" cellpadding="1" width="100%" id="tab1" repeat_header="1">
				<tr>
				<td align="center" rowspan="2" width="3%">NO</td>
				<td align="center" rowspan="2" width="7%">GOLONGAN</td>
				<td align="center" rowspan="2" width="16%">JENIS, NEG. ASAL & TH. BUAT</td>
				<td align="center" rowspan="2" width="12%">KESATUAN PEMAKAI</td>
				<td align="center" rowspan="2" width="10%">LOKASI</td>
				<td align="center" rowspan="2" width="8%">JUMLAH SELURUHNYA</td>
				<td align="center" colspan="4">OPERASIONAL</td>
				<td align="center" colspan="4">NON OPERASIONAL</td>
				<td align="center" rowspan="2" width="20%">KETERANGAN</td>
				</tr>
				<tr>
				<td align="center">JML</td>
				<td align="center">S</td>
				<td align="center">TS</td>
				<td align="center">KS %</td>
				<td align="center">JML</td>
				<td align="center">KONS</td>
				<td align="center">RB</td>
				<td align="center">TL</td>
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
				</tr>';
				$alpha = "a,b,c,d,e,f,g,h,i,j,k,l,m";
				$x_alpha = explode(",",$alpha);
				$num_alpha = 0;
				$num_alpha_true = 0;
				foreach($jenis as $jenis_hasil){
				$num_jenis = 1;
				$jml_all = 0;
				$jml_op = 0;
				$jml_s = 0;
				$jml_ts = 0;
				$jml_nop = 0;
				$jml_kons = 0;
				$jml_rb = 0;
				$jml_tl = 0;
				foreach($fungsi as $fungsi_hasil){
				foreach($kesatuan as $kesatuan_hasil){
				foreach($barang as $barang_hasil){
				foreach($datane as $datane_hasil){
				if($datane_hasil->jenis_barang==$jenis_hasil->id and $datane_hasil->fungsi==$fungsi_hasil->id and $datane_hasil->kesatuan==$kesatuan_hasil->id and $datane_hasil->barang==$barang_hasil->id){
					if($num_jenis==1){
					$html.='
					<tr>
						<td></td>';
						if($num_alpha==0){
						$html.='
						<td><strong>PESAWAT TERBANG</strong></td>';
						}else{
						$html.='
						<td></td>';
						}
						//if($num_jenis==0){
						$html.='
						<td><strong>'.$x_alpha[$num_alpha_true].'.'.$jenis_hasil->jenis.' ('.$fungsi_hasil->fungsi.')</strong></td>
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
					</tr>';
					$num_alpha_true++;
					}
					$html.='
					<tr>
						<td></td>
						<td></td>
						<td>'.$barang_hasil->barang.'</td>';
						/*}else{
						$html.='
						<td></td>';
						}*/
						$jml = $datane_hasil->jml_op + $datane_hasil->jml_non_op;
						$html.='
						<td>'.$kesatuan_hasil->kesatuan.'</td>
						<td>'.$datane_hasil->lokasi.'</td>
						<td align="right">'.$jml.'</td>
						<td align="right">'.$datane_hasil->jml_op.'</td>';
						$jml_all = $jml_all + $jml;
						$jml_op = $jml_op + $datane_hasil->jml_op;
						if($datane_hasil->kondisi_op=='s'){
						$jml_s = $jml_s + $datane_hasil->jml_op;
						$html.='
						<td align="right">'.$datane_hasil->jml_op.'</td>';
						}else{
						$jml_s = $jml_s + 0;
						$html.='
						<td align="right">0</td>';
						}
						if($datane_hasil->kondisi_op=='ts'){
						$jml_ts = $jml_ts + $datane_hasil->jml_op;
						$html.='
						<td align="right">'.$datane_hasil->jml_op.'</td>';
						}else{
						$jml_ts = $jml_ts + 0;
						$html.='
						<td align="right">0</td>';
						}
						if($datane_hasil->kondisi_op=='s'){
						$html.='
						<td align="right">100</td>';
						}else{
						$html.='
						<td align="right">0</td>';
						}
						$html.='
						<td align="right">'.$datane_hasil->jml_non_op.'</td>';
						$jml_nop = $jml_nop + $datane_hasil->jml_non_op;
						if($datane_hasil->kondisi_non_op=='kons'){
						$jml_kons = $jml_kons + $datane_hasil->jml_non_op;
						$html.='
						<td align="right">'.$datane_hasil->jml_non_op.'</td>';
						}else{
						$jml_kons = $jml_kons + 0;
						$html.='
						<td align="right">0</td>';
						}
						if($datane_hasil->kondisi_non_op=='rb'){
						$jml_rb = $jml_rb + $datane_hasil->jml_non_op;
						$html.='
						<td align="right">'.$datane_hasil->jml_non_op.'</td>';
						}else{
						$jml_rb = $jml_rb + 0;
						$html.='
						<td align="right">0</td>';
						}
						if($datane_hasil->kondisi_non_op=='tl'){
						$jml_tl = $jml_tl + $datane_hasil->jml_non_op;
						$html.='
						<td align="right">'.$datane_hasil->jml_non_op.'</td>';
						}else{
						$jml_tl = $jml_tl + 0;
						$html.='
						<td align="right">0</td>';
						}
						$html.='
						<td>'.$datane_hasil->ket.'</td>
					</tr>
					';
					$jml_ks = ceil(($jml_s/$jml_op)*100);
					foreach($grup as $grup_hasil){
						if($grup_hasil->jenis_barang==$datane_hasil->jenis_barang){
							
						//}
					//}
					if($grup_hasil->jumlah_digrup==$num_jenis){
					//if(count($datane)==$num_jenis){
					//if(1==1){
					$html.='
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td><strong>JUMLAH</strong></td>
						<td align="right"><strong>'.$jml_all.'</strong></td>
						<td align="right"><strong>'.$jml_op.'</strong></td>
						<td align="right"><strong>'.$jml_s.'</strong></td>
						<td align="right"><strong>'.$jml_ts.'</strong></td>
						<td align="right"><strong>'.$jml_ks.'</strong></td>
						<td align="right"><strong>'.$jml_nop.'</strong></td>
						<td align="right"><strong>'.$jml_kons.'</strong></td>
						<td align="right"><strong>'.$jml_rb.'</strong></td>
						<td align="right"><strong>'.$jml_tl.'</strong></td>
						<td></td>
					</tr>
					';
					}
					}} // tambahan
					$num_alpha++;
					$num_jenis++;
				}}}}}}
$html.='
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
