<?php
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=laporan_permasalahan.doc");
?>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">
        <style>
		
		@page Section1 {size:595.45pt 841.7pt; margin:1.0in 1.25in 1.0in 1.25in;mso-header-margin:.5in;mso-footer-margin:.5in;mso-paper-source:0;}
div.Section1 {page:Section1;}
@page Section2 {size:841.7pt 595.45pt;mso-page-orientation:landscape;margin:1.25in 1.0in 1.25in 1.0in;mso-header-margin:.5in;mso-footer-margin:.5in;mso-paper-source:0;}
div.Section2 {page:Section2;}

            h2{
                text-align: center
            }
            .mytable{
                border:1px solid black; 
                border-collapse: collapse;
                width: 100%;
            }
            .mytable tr th, .mytable tr td{
                border:1px solid black; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
	<div class="Section2">
      <b>MARKAS BESAR ANGKATAN UDARA<br>
	  DINAS FASILITAS DAN KONTRUKSI</b>

	  <br><br><br>
	  <center><b><?php echo $judulnya; ?></b></center>
		<br><br>
        <h2></h2>
        <table class="mytable">
            <tr>
                <th>No</th>
				<th>SIMAK</th>
                <th>Permasalahan</th>
				<th>Hasil Kalrifikasi</th>
				<th>Tindak Lanjut</th>
            </tr>
            <?php
             $no = 1;
             foreach ($datanya as $row) {
                ?>
                <tr>
					<td width="5%"><?php echo $no; ?></td>
                    <td><?php echo $row->simak; ?></td>
                    <td><?php echo $row->permasalahan; ?></td>
					<td><?php echo $row->hasil_klarifikasi; ?></td>
					<td><?php echo $row->tindak_lanjut; ?></td>
                </tr>
                <?php
				$no++;
            }
            ?>
        </table>
    </div>
	</body>
	
</html>