<html lang="en" class="no-js">
<body>
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            List Data
        </div>
        <div class="tools">
            <a href="javascript:;" class="collapse">
            </a>
        </div>
    </div>
    <div class="portlet-body" style="background-color:#99ccff;">
        <div class="table-toolbar">
            <div class="row">
                <div class="col-md-6">
                    <div class="btn-group">
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-striped table-bordered table-hover table-responsive" id="example">
            <thead>
            <tr bgcolor="#ccccff">
                <th>
                    <center>No</center>
                </th>
                <th>
                    <center>Jenis Material</center>
                </th>
                <th>
                    <center>Jenis Barang</center>
                </th>
                <th>
                    <center>Nama Barang</center>
                </th>
                <th>
                    <center>Jumlah</center>
                </th>
                <th>
                    <center>Kondisi 100%</center>
                </th>
                <th>
                    <center>Kondisi 50%</center>
                </th>
                <th>
                    <center>
                    Kondisi<br>
                    Rusak Ringan
                    </center>
                </th>
                <th>
                    <center>
                    Kondisi<br>
                    Rusak Sedang
                    </center>
                </th>
                <th>
                    <center>
                    Kondisi<br>
                    Rusak Berat
                    </center>
                </th>
            </tr>
            </thead>
            <tbody>
            <?php
            $no = 1;
            foreach ($inventory as $row) {
                ?>
                <tr class="odd gradeX" bgcolor="#ccccff">
                    <td><center><?php echo $no; ?></center></td>
                    <td><center><?php echo $row->nama_jenismaterial; ?></center></td>
                    <td><center><?php echo $row->nama_jenisbarang;?></center></td>
                    <td><center><?php echo $row->nama_barang;?></center></td>
                    <td><center><?php echo $row->jumlah;?></center></td>
                    <td>
                        <center>
                            <a href="<?php echo base_url('laporan/getDetailKondisiBaik/' . $row->nama_barang . ''); ?>"><button type="button" class="btn btn-primary">
                                <?php echo $row->kondisibaik;?>
                            </button>
                            </a>
                        </center>
                    </td>
                    <td>
                        <center>
                            <a href="<?php echo base_url('laporan/getDetailKondisiBaiks/' . $row->nama_barang . ''); ?>">
                                <button type="button" class="btn btn-primary">
                                    <?php echo $row->kondisibaiks;?>
                            </button>
                            </a>
                        </center>
                    </td>
                    <td>
                        <center>
                            <a href="<?php echo base_url('laporan/getDetailKondisiBurukRingan/' . $row->nama_barang . ''); ?>">
                                <button type="button" class="btn btn-primary">
                                    <?php echo $row->kondisiburukringan;?>
                                </button>
                            </a>
                        </center>
                    </td>
                    <td>
                        <center>
                            <a href="<?php echo base_url('laporan/getDetailKondisiBurukSedang/' . $row->nama_barang . ''); ?>">
                                <button type="button" class="btn btn-primary" >
                                    <?php echo $row->kondisiburuksedang;?>
                                </button>
                            </a>
                        </center>
                    </td>
                    <td>
                        <center>
                            <a href="<?php echo base_url('laporan/getDetailKondisiBurukBerat/' . $row->nama_barang . ''); ?>">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalRusakBerat">
                                    <?php echo $row->kondisiburukberat;?>
                                </button>
                            </a>
                        </center>
                    </td>
                </tr>
                <?php
                $no++;
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>

