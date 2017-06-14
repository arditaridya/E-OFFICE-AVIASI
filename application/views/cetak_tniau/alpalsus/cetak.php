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
<p><b>TENTARA NASIONAL INDONESIA<br>MARKAS BESAR ANGKATAN UDARA</b></p>
</htmlpageheader>
<sethtmlpageheader name="head1" value="on" show-this-page="1">
	<table style="text-align: left; width: 100%;" border="0" cellpadding="0" cellspacing="0" >
	  <thead>
		<tr>
			 
			 <td style="vertical-align: top; text-align: center;"><b>REKAPITULASI DATA PERSEDIAAN ALPALSUS</b></td>
	 
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
				<td rowspan="2" align="center"><strong>NO</strong></td>
				<td rowspan="2" align="center"><strong>JENIS SENJATA</strong></td>
				<td rowspan="2" align="center"><strong>KESATUAN</strong></td>
				<td rowspan="2" align="center"><strong>FUNGSI</strong></td>
				<td rowspan="2" align="center"><strong>BARANG</strong></td>
				<td colspan="2" align="center"><strong>KONDISI</strong></td>
				<td rowspan="2" align="center"><strong>KETERANGAN</strong></td>
			</tr>
			<tr>
				<td align="center"><strong>PRIMARY</strong></td>
				<td align="center"><strong>SECONDARY</strong></td>
			</tr>
	';
			  $no = 1;
			  foreach ($alpalsus_au as $row){
				
	$html.='
			  <tr>
				<td>'.$no.'</td>
				<td>'.$row->jenis.'</td>
				<td>'.$row->kesatuan.'</td>
				<td>'.$row->fungsi.'</td>
				<td>'.$row->barang.'</td>
				<td align="center">'.$row->kondisi_primary.'</td>
				<td align="center">'.$row->kondisi_secondary.'</td>
				<td>'.$row->ket.'</td>
			  </tr>
			  
	';
			  $no ++;

		}
		$html.='</table>';	 
	
	// $html.='	
			// <tr>
				// <td colspan="5" align="center"><b>TOTAL</b></td>
				// <td align="right"><b>'.$b.'</b></td>
				// <td align="right"><b>'.$rr.'</b></td>
				// <td align="right"><b>'.$rb.'</b></td>
				// <td align="right"><b>'.$jml.'</b></td>
			// </tr>	
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