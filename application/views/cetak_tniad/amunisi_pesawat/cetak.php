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
			 
			 <td style="vertical-align: top; text-align: center;"><b>REKAPITULASI DATA PERSEDIAAN AMUNISI PESAWAT</b></td>
	 
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
				<td rowspan="2"><b>JENIS BARANG</b></td>
				<td rowspan="2"><b>FUNGSI BARANG</b></td>
				<td rowspan="2"><b>RANPUR</b></td>
				<td rowspan="2"><b>KESATUAN</b></td>
				<td align="center" colspan="4"><b>KONDISI</b></td>
				<td rowspan="2"><b>KETERANGAN</b></td>
			</tr>
			<tr>
				<td><b>BAIK</b></td>
				<td><b>RUSAK RINGAN</b></td>
				<td><b>RUSAK BERAT</b></td>
				<td><b>JUMLAH</b></td>
			</tr>
	';
			  $no=1;
			  $b = 0;
			  $rr = 0;
			  $rb = 0;
			  $jml = 0;
			  foreach ($data_amunisi_pesawat_ad as $row){
				$b = $b + $row->b;
				$rr = $rr + $row->rr;
				$rb = $rb + $row->rb;
				$jml = $jml + $row->jml;
	$html.='
			  <tr>
				<td>'.$no.'</td>
				<td>'.$row->jenis.'</td>
				<td>'.$row->fungsi.'</td>
				<td>'.$row->barang.'</td>
				<td>'.$row->kesatuan.'</td>
				<td align="right">'.$row->b.'</td>
				<td align="right">'.$row->rr.'</td>
				<td align="right">'.$row->rb.'</td>
				<td align="right">'.$row->jml.'</td>
				<td>'.$row->ket.'</td>
			
			  </tr>
	';
				$no ++;
			  }
			  
	$html.='	
			<tr>
				<td colspan="5" align="center"><b>TOTAL</b></td>
				<td align="right"><b>'.$b.'</b></td>
				<td align="right"><b>'.$rr.'</b></td>
				<td align="right"><b>'.$rb.'</b></td>
				<td align="right"><b>'.$jml.'</b></td>
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