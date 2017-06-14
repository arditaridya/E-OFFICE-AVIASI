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
				<td rowspan="2"><b>NO</b></td>
				<td rowspan="2"><b>JENIS BARANG</b></td>
				<td rowspan="2"><b>FUNGSI BARANG</b></td>
				<td rowspan="2"><b>RANPUR</b></td>
				<td rowspan="2"><b>KESATUAN</b></td>
				<td rowspan="2"><b>LOKASI</b></td>
				<td colspan="3" align="center"><b>OPERASIONAL</b></td>
				<td colspan="4" align="center"><b>NON OPERASIOANAL</b></td>
				<td rowspan="2"><b>KETERANGAN</b></td>
			 </tr>
			 <tr>
				<td><b>SIAP</b></td>
				<td><b>TIDAK SIAP</b></td>
				<td><b>JUMLAH</b></td>
				<td><b>KONSERVASI</b></td>
				<td><b>RUSAK BERAT</b></td>
				<td><b>TOTAL LOST</b></td>
				<td><b>JUMLAH</b></td>
			  </tr>
	';
			  $no=1;
			  $s = 0;
			  $ts = 0;
			  $kons = 0;
			  $rb = 0;
			  $tl = 0;
			  foreach ($data_ranpur_ad as $row){
				$jml_op  = $row->s_op + $row->ts_op;
				$jml_nop = $row->kons_nop + $row->rb_nop + $row->tl_nop;
				$s = $s + $row->s_op;
				$ts = $ts + $row->ts_op;
				$jop = $s + $ts;
				
				$kons = $kons + $row->kons_nop;
				$rb = $rb + $row->rb_nop;
				$tl = $tl + $row->tl_nop;
				$jnop = $kons + $rb +$tl;
				
	$html.='
			  <tr>
				<td>'.$no.'</td>
				<td>'.$row->jenis.'</td>
				<td>'.$row->fungsi.'</td>
				<td>'.$row->barang.'</td>
				<td>'.$row->kesatuan.'</td>
				<td>'.$row->lokasi.'</td>
				<td align="right">'.$row->s_op.'</td>
				<td align="right">'.$row->ts_op.'</td>
				<td align="right">'.$jml_op.'</td>
				<td align="right">'.$row->kons_nop.'</td>
				<td align="right">'.$row->rb_nop.'</td>
				<td align="right">'.$row->tl_nop.'</td>
				<td align="right">'.$jml_nop.'</td>
				<td>'.$row->ket.'</td>
			
			  </tr>
	';
			  $no ++;

       
       //$Total = array_sum($row->s_op[]);
       	
		}
			  
	$html.='	
			<tr>
				<td colspan="6" align="center"><b>TOTAL</b></td>
				<td align="right"><b>'.$s.'</b></td>
				<td align="right"><b>'.$ts.'</b></td>
				<td align="right"><b>'.$jop.'</b></td>
				<td align="right"><b>'.$kons.'</b></td>
				<td align="right"><b>'.$rb.'</b></td>
				<td align="right"><b>'.$tl.'</b></td>
				<td align="right"><b>'.$jnop.'</b></td>
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