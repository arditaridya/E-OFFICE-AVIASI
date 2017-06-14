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
<table border="1" cellspacing="0" cellpadding="0" width="100%" id="tab1" repeat_header="1">
				<tr>
				<td align="center" rowspan="2"><b>NOMOR URUT</b></td>
				<td align="center" rowspan="2"><b>SEBUTAN SENJATA</b></td>
				<td align="center" colspan="2"><b>PEMAKAIAN</b></td>
				<td align="center" colspan="1"><b>JUMLAH DI SATKAI</b></td>
				<td align="center" colspan="2"><b>PERSEDIAAN</b></td>
				<td align="center" colspan="1"><b>JUMLAH DI ARSENAL</b></td>
				<td align="center" colspan="2"><b>TOTAL PEMAKAIAN DAN PERSEDIAAN</b></td>
				<td align="center" colspan="1"><b>JUMLAH DI SATKAI & ARSENAL</b></td>
				</tr>
				<tr>
				<td align="center"><b>SIAP PAKAI</b></td>
				<td align="center"><b>TIDAK SIAP PAKAI</b></td>
				<td align="center">(3+4)</td>
				<td align="center"><b>SIAP PAKAI</b></td>
				<td align="center"><b>TIDAK SIAP PAKAI</b></td>
				<td align="center">(6+7)</td>
				<td align="center"><b>SIAP PAKAI (3+6)</b></td>
				<td align="center"><b>TIDAK SIAP PAKAI (4+7)</b></td>
				<td align="center">(9+10)</td>
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
				</tr>
				
</table>

<br>
<br>
<br>
';

//echo $html;die();

require 'assets/mpdf60/mpdf.php';
$mypdf = new mPDF('', 'Legal', 0, '', 12.7, 12.7, 46, 0, 12.7, 12.7,'L');
$mypdf->AddPage('L');
$mypdf->SetDisplayMode('fullpage');
$mypdf->debug=true;
// $mypdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date(DATE_RFC822));
$mypdf->WriteHTML($html);
$mypdf->Output();
