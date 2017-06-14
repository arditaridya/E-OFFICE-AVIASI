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
			 
			 <td style="vertical-align: top; text-align: center;"><b>REKAPITULASI DATA PERSEDIAAN RANPUR</b></td>
	 
		 </tr>
		
	  </thead>
	</table>
	<br/>
	<br/>
	<br/>
	<br/>
';
	
	$html.='
	
		<table border="1" cellspacing="0" cellpadding="0" width="100%" id="tab1" repeat_header="1">
			<tr>
				<td rowspan="4"><strong>NO</strong></td>
				<td rowspan="4"><strong>JENIS BARANG</strong></td>
				<td rowspan="4"><strong>FUNGSI BARANG</strong></td>
				<td rowspan="4"><strong>BARANG</strong></td>
				<td rowspan="4"><strong>LOKASI</strong></td>
				<td colspan="8" align="center"><strong>OPERASIONAL</strong></td>
				<td colspan="7" align="center"><strong>NON OPERASIOANAL</strong></td>
				<td rowspan="4"><strong>KETERANGAN</strong></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><strong>KESATUAN</strong></td>
				<td colspan="3" align="center"><strong>KONDISI</strong></td>
				<td rowspan="3"><strong>JUMLAH</strong></td>
				<td rowspan="3"><strong>KESIAPAN %</strong></td>
				<td colspan="2" align="center"><strong>SAT. PEMELIHARAAN</strong></td>
				<td colspan="4" align="center"><strong>KONDISI</strong></td>
				<td rowspan="3"><strong>JUMLAH</strong></td>
			</tr>
			<tr>
				<td rowspan="2"><strong>PEMAKAI</strong></td>
				<td colspan="2"><strong>PEMELIHARAAN</strong></td>
				<td><strong>SIAP</strong></td>
				<td colspan="2"><strong>TIDAK SIAP</strong></td>
				<td rowspan="2"><strong>TK. I/II</strong></td>
				<td rowspan="2"><strong>TK. III/IV</strong></td>
				<td rowspan="2"><strong>KONS</strong></td>
				<td rowspan="2"><strong>RB</strong></td>
				<td rowspan="2"><strong>TL</strong></td>
				<td rowspan="2"><strong>REHAB</strong></td>
			</tr>
			<tr>
				<td><strong>TK. I/II</strong></td>
				<td><strong>TK. III/IV</strong></td>
				<td align="center"><strong>B</strong></td>
				<td align="center"><strong>RR</strong></td>
				<td align="center"><strong>RB</strong></td>
			</tr>
	';
			  $no = 1;
			  $b = 0;
			  $rr = 0;
			  $rb = 0;
			  $kons = 0;
			  $rbe = 0;
			  $tl = 0;
			  $reran = 0;
			  foreach ($data_ranpur_al as $row){
				$jml_op = $row->b + $row->rr + $row->rb;
				$kes = ($row->b / $jml_op) * 100;
				$jml_nop = $row->kons + $row->rbe + $row->tl + $row->reran;
				
				$b = $b + $row->b;
				$rr = $rr + $row->rr;
				$rb = $rb + $row->rb;
				$jop  = $b + $rr + $rb;
				
				$kons = $kons + $row->kons;
				$rbe = $rbe + $row->rbe;
				$tl = $tl + $row->tl;
				$reran = $reran + $row->reran;
				$jnop  = $kons + $rbe + $tl + $reran;
				
				if($row->sat_hara_tki_ii_op != NULL){
					$sat_hara_1op = $row->sat_hara_tki_ii_op;
				} else {
					$sat_hara_1op = '-';
				}
				
				if($row->sat_hara_tkiii_iv_op != NULL){
					$sat_hara_2op = $row->sat_hara_tkiii_iv_op;
				} else {
					$sat_hara_2op = '-';
				}
				
				if($row->sat_hara_tki_ii_nop != NULL){
					$sat_hara_1nop = $row->sat_hara_tki_ii_nop;
				} else {
					$sat_hara_1nop = '-';
				}
				
				if($row->sat_hara_tkiii_iv_nop != NULL){
					$sat_hara_2nop = $row->sat_hara_tkiii_iv_nop;
				} else {
					$sat_hara_2nop = '-';
				}
				
	$html.='
			  <tr>
				<td>'.$no.'</td>
				<td>'.$row->jenis.'</td>
				<td>'.$row->fungsi.'</td>
				<td>'.$row->barang.'</td>
				<td>'.$row->lokasi.'</td>
				<td>'.$row->kesatuan.'</td>
				<td align="center">'.$sat_hara_1op.'</td>
				<td align="center">'.$sat_hara_2op.'</td>
				<td align="right">'.$row->b.'</td>
				<td align="right">'.$row->rr.'</td>
				<td align="right">'.$row->rb.'</td>
				<td align="right">'.$jml_op.'</td>
				<td align="center">'.round($kes, 2).'</td>
				<td align="center">'.$sat_hara_1nop.'</td>
				<td align="center">'.$sat_hara_2nop.'</td>
				<td align="right">'.$row->kons.'</td>
				<td align="right">'.$row->rbe.'</td>
				<td align="right">'.$row->tl.'</td>
				<td align="right">'.$row->reran.'</td>
				<td align="right">'.$jml_nop.'</td>
				<td>'.$row->ket.'</td>
			
			  </tr>
	';
			  $no ++;

		}
			  
	$html.='	
			<tr>
				<td colspan="8" align="center"><b>TOTAL</b></td>
				<td align="right"><b>'.$b.'</b></td>
				<td align="right"><b>'.$rr.'</b></td>
				<td align="right"><b>'.$rb.'</b></td>
				<td align="right"><b>'.$jop.'</b></td>
				<td align="center"><b>-</b></td>
				<td align="center"><b>-</b></td>
				<td align="center"><b>-</b></td>
				<td align="right"><b>'.$kons.'</b></td>
				<td align="right"><b>'.$rbe.'</b></td>
				<td align="right"><b>'.$tl.'</b></td>
				<td align="right"><b>'.$reran.'</b></td>
				<td align="right"><b>'.$jnop.'</b></td>
				<td></td>
			</tr>	
		</table>
	';
	

// echo $html;
// die();

require 'assets/MPDF60/mpdf.php';
$mypdf = new mPDF('', 'Legal', 0, '', 12.7, 12.7, 46, 0, 12.7, 12.7,'L');
$mypdf->AddPage('L');
$mypdf->SetDisplayMode('fullpage');
$mypdf->debug=true;
// $mypdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date(DATE_RFC822));
$mypdf->WriteHTML($html);
$mypdf->Output();


 ?>