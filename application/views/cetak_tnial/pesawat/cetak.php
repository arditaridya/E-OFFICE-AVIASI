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
			 
			 <td style="vertical-align: top; text-align: center;"><b>REKAPITULASI DATA PERSEDIAAN PESAWAT</b></td>
	 
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
				<td rowspan="2"><strong>NO</strong></td>
				<td rowspan="2"><strong>JENIS PESAWAT</strong></td>
				<td rowspan="2"><strong>FUNGSI PESAWA</strong>T</td>
				<td rowspan="2"><strong>PESAWAT</strong></td>
				<td rowspan="2"><strong>KESATUAN</strong></td>
				<td rowspan="2"><strong>LOKASI</strong></td>
				<td align="center" colspan="4"><strong>OPERASIONAL</strong></td>
				<td align="center" colspan="5"><strong>NON OPERASIONAL</strong></td>
			</tr>
			<tr>
				<td><strong>SIAP</strong></td>
				<td><strong>TIDAK SIAP</strong></td>
				<td><strong>JUMLAH</strong></td>
				<td><strong>KES %</strong></td>
				<td><strong>GROUND</strong></td>
				<td><strong>KONSERVAS</strong>I</td>
				<td><strong>RUSAK BERAT</strong></td>
				<td><strong>TOTAL LOST</strong></td>
				<td><strong>JUMLAH</strong></td>
			</tr>
	';
			  $no=1;
			  $s = 0;
			  $ts = 0;
			  $grd = 0;
			  $kons = 0;
			  $rb = 0;
			  $tl = 0;
			  foreach ($pesawat_al as $row){
				$jml_op  = $row->s + $row->ts;
				$jml_nop = $row->grd + $row->kons + $row->rb + $row->tl;
				$kes_op = ($row->s / $jml_op) *100;
				
				$s = $s + $row->s;
				$ts = $ts + $row->ts;
				$jop = $s + $ts;
				
				$grd = $grd + $row->grd;
				$kons = $kons + $row->kons;
				$rb = $rb + $row->rb;
				$tl = $tl + $row->tl;
				$jnop = $grd + $kons + $rb + $tl;
				
	$html.='
			  <tr>
				<td>'.$no.'</td>
				<td>'.$row->jenis.'</td>
				<td>'.$row->fungsi.'</td>
				<td>'.$row->barang.'</td>
				<td>'.$row->kesatuan.'</td>
				<td>'.$row->lokasi.'</td>
				<td align="right">'.$row->s.'</td>
				<td align="right">'.$row->ts.'</td>
				<td align="right">'.$jml_op.'</td>
				<td align="right">'.round($kes_op, 2).'</td>
				<td align="right">'.$row->grd.'</td>
				<td align="right">'.$row->kons.'</td>
				<td align="right">'.$row->rb.'</td>
				<td align="right">'.$row->tl.'</td>
				<td align="right">'.$jml_nop.'</td>
			
			  </tr>
			  
	';
			  $no ++;
       	
		}
			  
	$html.='	
			<tr>
				<td colspan="6" align="center"><b>TOTAL</b></td>
				<td align="right"><b>'.$s.'</b></td>
				<td align="right"><b>'.$ts.'</b></td>
				<td align="right"><b>'.$jop.'</b></td>
				<td align="center"><b>-</b></td>
				<td align="right"><b>'.$grd.'</b></td>
				<td align="right"><b>'.$kons.'</b></td>
				<td align="right"><b>'.$rb.'</b></td>
				<td align="right"><b>'.$tl.'</b></td>
				<td align="right"><b>'.$jnop.'</b></td>
				<td></td>
			</tr>	
		</table>
	';
	
	// $html.='
	
	// </table>
	
	// ';
	

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