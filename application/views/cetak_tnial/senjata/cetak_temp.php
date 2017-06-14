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
			 
			 <td style="vertical-align: top; text-align: center;"><b>REKAPITULASI DATA PERSEDIAAN SENJATA</b></td>
	 
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
				<td rowspan="2"><b>NO</b></td>
				<td rowspan="2"><b>JENIS SENJATA</b></td>
				<td rowspan="2"><b>FUNGSI SENJATA</b></td>
				<td rowspan="2"><b>SENJATA</b></td>
				<td rowspan="2"><b>KESATUAN</b></td>
				<td align="center" colspan="3"><b>PERSEDIAAN</b></td>
				<td align="center" colspan="3"><b>PEMAKAIAN</b></td>
			</tr>
			<tr>
				<td><b>SIAP</b></td>
				<td><b>TIDAK SIAP</b></td>
				<td><b>JUMLAH</b></td>
				<td><b>SIAP</b></td>
				<td><b>TIDAK SIAP</b></td>
				<td><b>JUMLAH</b></td>
			</tr>
	';
			  $no=1;
			  $dia_sp = 0;
			  $dia_tsp = 0;
			  $kai_sp = 0;
			  $kai_tsp = 0;
			  foreach ($model as $row){
				$jml_dia  = $row->persediaan_sp + $row->persediaan_tsp;
				$jml_kai = $row->pemakaian_sp + $row->pemakaian_tsp;
				
				$dia_sp = $dia_sp + $row->persediaan_sp;
				$dia_tsp = $dia_tsp + $row->persediaan_tsp;
				$j_dia = $dia_sp + $dia_tsp;
				
				$kai_sp = $kai_sp + $row->pemakaian_sp;
				$kai_tsp = $kai_tsp + $row->pemakaian_tsp;
				$j_kai = $kai_sp + $kai_tsp;
				
	$html.='
			  <tr>
				<td>'.$no.'</td>
				<td>'.$row->jenis.'</td>
				<td>'.$row->fungsi.'</td>
				<td>'.$row->barang.'</td>
				<td>'.$row->kesatuan.'</td>
				<td align="right">'.$row->persediaan_sp.'</td>
				<td align="right">'.$row->persediaan_tsp.'</td>
				<td align="right">'.$jml_dia.'</td>
				<td align="right">'.$row->pemakaian_sp.'</td>
				<td align="right">'.$row->pemakaian_tsp.'</td>
				<td align="right">'.$jml_kai.'</td>
			
			  </tr>
	';
			  $no ++;

		}
			  
	$html.='	
			<tr>
				<td colspan="5" align="center"><b>TOTAL</b></td>
				<td align="right"><b>'.$dia_sp.'</b></td>
				<td align="right"><b>'.$dia_tsp.'</b></td>
				<td align="right"><b>'.$j_dia.'</b></td>
				<td align="right"><b>'.$kai_sp.'</b></td>
				<td align="right"><b>'.$kai_tsp.'</b></td>
				<td align="right"><b>'.$j_kai.'</b></td>
				<td></td>
			</tr>	
		</table>
	';
	

//echo $html;

require 'assets/MPDF60/mpdf.php';
$mypdf = new mPDF('', 'Legal', 0, '', 12.7, 12.7, 46, 0, 12.7, 12.7,'L');
$mypdf->AddPage('L');
$mypdf->SetDisplayMode('fullpage');
$mypdf->debug=true;
// $mypdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date(DATE_RFC822));
$mypdf->WriteHTML($html);
$mypdf->Output();


 ?>