<body>

    <img src="<<?php echo base_url() ?>assets/global/img/pic_logo.png" width="500" height="120"/>
    <h2>Daftar Inventarisasi Tahun 2016 </h2>

            <table border="1" cellspacing="0" cellpadding="2" width="100%" >
                <thead>

                <tr>
                    <th rowspan="2">No</th>
                    <th rowspan="2">Jenis Material</th>
                    <th rowspan="2">Jenis Barang</th>
                    <th rowspan="2">Nama Barang</th>
                    <th rowspan="2">Jumlah</th>
                    <th colspan="2">Kondisi Baik</th>
                    <th colspan="3">Kondisi Rusak</th>

                </tr>
                <tr>
                    <th>100 %</th>
                    <th>50 %</th>
                    <th>Rusak Ringan</th>
                    <th>Rusak Sedang</th>
                    <th>Rusak Berat</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $no = 1;
                foreach ($inventory as $dt) {
                    ?>
                    <tr>
                        <td><center><?php echo $no; ?></center></td>
                        <td><center><?php echo $dt->nama_jenismaterial; ?></center></td>
                        <td><center><?php echo $dt->nama_jenisbarang; ?></center></td>
                        <td><center><?php echo $dt->nama_barang; ?></center></td>
                        <td><center><?php echo $dt->jumlah; ?></center></td>
                        <td><center><?php echo $dt->kondisibaik; ?></center></td>
                        <td><center><?php echo $dt->kondisibaiks; ?></center></td>
                        <td><center><?php echo $dt->kondisiburukringan; ?></center></td>
                        <td><center><?php echo $dt->kondisiburuksedang; ?></center></td>
                        <td><center><?php echo $dt->kondisiburukberat; ?></center></td>
                    </tr>

                <?php
                    $no++;
                } ?>

                </tbody>
            </table>
</body>