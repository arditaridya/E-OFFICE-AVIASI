<?php
foreach($sen->result() as $ad) {
			$a_kai_b[$ad->id_kes.'-'.$ad->id_jenis.'-'.$ad->id_fungsi.'-'.$ad->id_barang]=$ad->b_kia;
			$a_kai_rr[$ad->id_kes.'-'.$ad->id_jenis.'-'.$ad->id_fungsi.'-'.$ad->id_barang]=$ad->rr_kia;
			$a_kai_rb[$ad->id_kes.'-'.$ad->id_jenis.'-'.$ad->id_fungsi.'-'.$ad->id_barang]=$ad->rb_kia;
			$a_dia_b[$ad->id_kes.'-'.$ad->id_jenis.'-'.$ad->id_fungsi.'-'.$ad->id_barang]=$ad->b_dia;
			$a_dia_rr[$ad->id_kes.'-'.$ad->id_jenis.'-'.$ad->id_fungsi.'-'.$ad->id_barang]=$ad->rr_dia;
			$a_dia_rb[$ad->id_kes.'-'.$ad->id_jenis.'-'.$ad->id_fungsi.'-'.$ad->id_barang]=$ad->rb_dia;
		}

//print_r($a_kai_b);
$html = '
<style>
body{
	font-size: 12px;
	font-family:courier;
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
         
         <td style="vertical-align: top; text-align: center;"><b>LAPORAN BULANAN KEKUATAN MATERIEL ANGKATAN DARAT<br>KOMODITI : SENJATA</b></td>
 
     </tr>
    
  </thead>
</table>
<br>
<br>
';

$html .= '
	<table border="1" cellspacing="0" cellpadding="0" width="100%" id="tab1" repeat_header="1">
		<tr>
			<th align="center" rowspan="3">No</th>
			<th align="center" rowspan="3">JENIS, FUNGSI &amp; BARANG</th>
			<th align="center" rowspan="3">KONDISI</th>
			<th align="center" colspan="80">KESATUAN</th>
		</tr>
		<tr>
		';
			$kess = $this->db->query("SELECT *
				FROM kesatuan
				WHERE idinduk = 2
			");
			$id_kess=array();
			foreach ($kess->result_array() as $kes) {
				$id_kess[]=$kes['id'];
		$html .='
			<td align="center" colspan="2">'.$kes['kesatuan'].'</td>
			';
			} 
		$jml_kesatuan=$kess->num_rows();
		$html .='
		</tr>
		<tr>
		';
			foreach ($kess->result_array() as $kes) {
		$html .='
			<td align="center">KAI</td>
			<td align="center">DIA</td>
			';
			}
		$html .='
		</tr>
		<tr bgcolor="#FF9900">
			<td align="center">-</td>
			<td align="center">-</td>
			<td align="center">-</td>
		';
			foreach ($kesatuan as $key => $kes) {
		$html .='
			<td align="center"></td>
			<td align="center"></td>
			';
			}
		$html .='
		</tr>

			';
			foreach ($j as $key => $k) {
			$id_jeniss=$k->id_jenis;
			$html .='
			<tr>
				<td align="center"></td>
				<td align="center">'.$k->jenis.'</td>
				<td align="center"></td>
			</tr>
				';
				
				$fungsi=mysql_query("SELECT * FROM aloptik_ad a, fungsi_barang b where a.id_jenis=$id_jeniss AND a.id_fungsi=b.id group by id_fungsi");
				while($f=mysql_fetch_array($fungsi)) {
				$id_fun=$f['id_fungsi'];
				$html .='
				<tr>
					<td align="center"></td>
					<td align="center">'.$f['fungsi'].'</td>
					<td align="center"></td>
				</tr>
					';
					$brg=mysql_query("SELECT * FROM aloptik_ad a, barang b where a.id_fungsi=$id_fun AND a.id_barang=b.id group by id_barang ");
					while($g=mysql_fetch_array($brg)) {
					$html .='
					<tr>
						<td align="center"></td>
						<td align="center">'.$g['barang'].'</td>
						<td align="center">B</td>';
						for($i=0; $i < $jml_kesatuan; $i++){
							if(isset($a_dia_b[$id_kess[$i].'-'.$id_jeniss.'-'.$id_fun.'-'.$g['id_barang']])){
								$a_dia_bb=$a_dia_b[$id_kess[$i].'-'.$id_jeniss.'-'.$id_fun.'-'.$g['id_barang']];
							}else{
								$a_dia_bb=0;
							}
							if(isset($a_kai_b[$id_kess[$i].'-'.$id_jeniss.'-'.$id_fun.'-'.$g['id_barang']])){
								$a_kai_bb=$a_kai_b[$id_kess[$i].'-'.$id_jeniss.'-'.$id_fun.'-'.$g['id_barang']];
							}else{
								$a_kai_bb=0;
							}
							$html .='
								<td align="center">'.$a_kai_bb.'</td>
								<td align="center">'.$a_dia_bb.'</td>';
						
						}
					$html .='
					</tr>
					<tr>
						<td align="center"></td>
						<td align="center"></td>
						<td align="center">RR</td>';
						for($i=0; $i < $jml_kesatuan; $i++){
							if(isset($a_dia_rr[$id_kess[$i].'-'.$id_jeniss.'-'.$id_fun.'-'.$g['id_barang']])){
								$a_dia_rrr=$a_dia_rr[$id_kess[$i].'-'.$id_jeniss.'-'.$id_fun.'-'.$g['id_barang']];
							}else{
								$a_dia_rrr=0;
							}
							if(isset($a_kai_rr[$id_kess[$i].'-'.$id_jeniss.'-'.$id_fun.'-'.$g['id_barang']])){
								$a_kai_rrr=$a_kai_rr[$id_kess[$i].'-'.$id_jeniss.'-'.$id_fun.'-'.$g['id_barang']];
							}else{
								$a_kai_rrr=0;
							}
							$html .='
								<td align="center">'.$a_kai_rrr.'</td>
								<td align="center">'.$a_dia_rrr.'</td>';
						
						}
					$html .='
					</tr>
					<tr>
						<td align="center"></td>
						<td align="center"></td>
						<td align="center">RB</td>';
						for($i=0; $i < $jml_kesatuan; $i++){
							if(isset($a_dia_rb[$id_kess[$i].'-'.$id_jeniss.'-'.$id_fun.'-'.$g['id_barang']])){
								$a_dia_rbb=$a_dia_rb[$id_kess[$i].'-'.$id_jeniss.'-'.$id_fun.'-'.$g['id_barang']];
							}else{
								$a_dia_rbb=0;
							}
							if(isset($a_kai_rb[$id_kess[$i].'-'.$id_jeniss.'-'.$id_fun.'-'.$g['id_barang']])){
								$a_kai_rbb=$a_kai_rb[$id_kess[$i].'-'.$id_jeniss.'-'.$id_fun.'-'.$g['id_barang']];
							}else{
								$a_kai_rbb=0;
							}
							$html .='
								<td align="center">'.$a_kai_rbb.'</td>
								<td align="center">'.$a_dia_rbb.'</td>';
						
						}
					$html .='
					</tr>
					<tr>
						<td align="center"></td>
						<td align="center"></td>
						<td align="center">JML</td>
					</tr>
						';
					}


				}
			}

		$html .='
	</table>

';
$html .= '

<br>
<br>
<br>
';


require 'assets/MPDF60/mpdf.php';
$mypdf = new mPDF('', 'Legal', 0, '', 12.7, 12.7, 46, 0, 12.7, 12.7,'L');
$mypdf->AddPage('L');
$mypdf->SetDisplayMode('fullpage');
$mypdf->debug=true;
// $mypdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date(DATE_RFC822));
$mypdf->WriteHTML($html);
$mypdf->Output();

?>
