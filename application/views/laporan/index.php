<!DOCTYPE html>
<html lang="en" class="no-js">
<?php $this->load->view('v_header') ?>
<body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo page-container-bg-solid">
<?php $this->load->view('v_horizontal_menu') ?>
<div class="clearfix">
</div>

<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <?php $this->load->view('v_sidebar') ?>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="<?php echo site_url('laporan'); ?>">Cari Laporan</a>
                    </li>

                </ul>
                <div class="page-toolbar">
                    <div id="dashboard-report-range" class="pull-right tooltips btn btn-fit-height grey-salt" data-container="body" data-placement="bottom" data-original-title="Kalender">
                        <i class="icon-calendar"></i>&nbsp;
                        <span class="thin uppercase visible-lg-inline-block">&nbsp;</span>&nbsp;
                        <i class="fa fa-angle-down"></i>
                    </div>
                </div>
            </div>
            <h3 class="page-title">

            </h3>
            <form action="<?php echo base_url('laporan/cetakpdf'); ?>" method="post">
            <div class="form-body">
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-4">Jenis Material</label>
                                    <div class="col-lg-6">
                                        <select class="form-control" name='id_jenismaterial' id='id_jenismaterial' onchange='getMat()' required>
                                            <option value="0">-- Pilih Jenis Material --</option>
                                            <?php foreach($material as $row){ ?>
                                                <option value="<?php echo $row->id_jenismaterial; ?>"><?php echo $row->nama_jenismaterial; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-4">Jenis Barang</label>
                                    <div class="col-lg-6">
                                        <div id="statediv">
                                            <select class="form-control" name='id_jenisbarang' id='id_jenisbarang' required>
                                                <option value="0" selected>-- Pilih Jenis Barang --</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-4">Nama Barang</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="nama_barang" id="nama_barang"><br>
                                        <button type="button" onclick="getRecord()" id="TAMPIL" name="TAMPIL" class="btn green" ><i class="fa fa-check"></i> Cari</button>

                                        <button type="submit" id="sample_editable_1_new" class="btn btn-danger">
                                            Cetak <span class="glyphicon glyphicon-print"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
            </form>
            <div id="state">

            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
<!--        </div>-->
<!--    </div>-->
<!--    <!-- END CONTENT -->-->
<!--</div>-->
<!-- END CONTAINER -->
<?php $this->load->view('v_footer') ?>
</body>
<!-- END BODY -->
</html>
<script type="text/javascript">

    function getXMLHTTP(){
        var xmlhttp=false;
        try{
            xmlhttp=new XMLHttpRequest();
        }
        catch(e){
            try{
                xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
            }
            catch(e){
                try{
                    xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
                }
                catch(e1){
                    xmlhttp = false;
                }
            }
        }
        return xmlhttp;
    }

    function getRecord() {

        if(document.getElementById('id_jenismaterial').value != 0 && document.getElementById('id_jenisbarang').value == 0 && document.getElementById('nama_barang').value == 0)
        {

            var strURL = "<?php echo base_url();?>laporan/getRecordMaterial";
            var id_jenismaterial = document.getElementById('id_jenismaterial').value;
            // alert(id_jenismaterial);

            var req = getXMLHTTP();
            if (req) {
                req.onreadystatechange = function() {
                    if (req.readyState == 4) {
                        if (req.status == 200) {
                            document.getElementById('state').innerHTML=req.responseText;
                        } else {
                            alert("There was a problem while using XMLHTTP:\n" + req.statusText);
                        }
                    }
                }
                //req.open("GET", strURL+ "?perusahaan=" + perusahaan, true);
                req.open("GET", strURL + "/" + id_jenismaterial, true);
//
                req.send(null);
            }
        }
        else if (document.getElementById('id_jenismaterial').value != 0 && document.getElementById('id_jenisbarang').value != 0 && document.getElementById('nama_barang').value == 0)
        {

            var strURL = "<?php echo base_url();?>laporan/getRecordJenisBarang";
            var id_jenisbarang = document.getElementById('id_jenisbarang').value;
            // alert(id_jenismaterial);

            var req = getXMLHTTP();
            if (req) {
                req.onreadystatechange = function() {
                    if (req.readyState == 4) {
                        if (req.status == 200) {
                            document.getElementById('state').innerHTML=req.responseText;
                        } else {
                            alert("There was a problem while using XMLHTTP:\n" + req.statusText);
                        }
                    }
                }
                //req.open("GET", strURL+ "?perusahaan=" + perusahaan, true);
                req.open("GET", strURL + "/" + id_jenisbarang, true);
                req.send(null);
            }
        }
        else if(document.getElementById('id_jenismaterial').value == 0 && document.getElementById('id_jenisbarang').value == 0 && document.getElementById('nama_barang').value != 0)
        {

            var strURL = "<?php echo base_url();?>laporan/getRecordNamaBarang";
            var nama_barang = document.getElementById('nama_barang').value;

            // alert(id_jenismaterial);

            var req = getXMLHTTP();
            if (req) {
                req.onreadystatechange = function() {
                    if (req.readyState == 4) {
                        if (req.status == 200) {
                            document.getElementById('state').innerHTML=req.responseText;
                        } else {
                            alert("There was a problem while using XMLHTTP:\n" + req.statusText);
                        }
                    }
                }
                //req.open("GET", strURL+ "?perusahaan=" + perusahaan, true);
                req.open("GET", strURL + "/" + nama_barang, true);
                //alert(strURL + "/" + replaced);
                req.send(null);
            }
        }
        else if(document.getElementById('id_jenismaterial').value != 0 && document.getElementById('id_jenisbarang').value == 0 && document.getElementById('nama_barang').value != 0){

            var strURL = "<?php echo base_url();?>laporan/getRecordMaterialNamaBarang";
            var id_jenismaterial = document.getElementById('id_jenismaterial').value;
            var nama_barang = document.getElementById('nama_barang').value;

            // alert(id_jenismaterial);

            var req = getXMLHTTP();
            if (req) {
                req.onreadystatechange = function() {
                    if (req.readyState == 4) {
                        if (req.status == 200) {
                            document.getElementById('state').innerHTML=req.responseText;
                        } else {
                            alert("There was a problem while using XMLHTTP:\n" + req.statusText);
                        }
                    }
                }
                //req.open("GET", strURL+ "?perusahaan=" + perusahaan, true);
                req.open("GET", strURL + "/" + id_jenismaterial + "/" + nama_barang, true);
                //alert(strURL + "/" + replaced);
                req.send(null);
            }
        }
        else if(document.getElementById('id_jenismaterial').value != 0 && document.getElementById('id_jenisbarang').value != 0 && document.getElementById('nama_barang').value != 0){

            var strURL = "<?php echo base_url();?>laporan/getRecordMaterialNamaBarangJenis";
            var id_jenismaterial = document.getElementById('id_jenismaterial').value;
            var id_jenisbarang = document.getElementById('id_jenisbarang').value;
            var nama_barang = document.getElementById('nama_barang').value;

            // alert(id_jenismaterial);

            var req = getXMLHTTP();
            if (req) {
                req.onreadystatechange = function() {
                    if (req.readyState == 4) {
                        if (req.status == 200) {
                            document.getElementById('state').innerHTML=req.responseText;
                        } else {
                            alert("There was a problem while using XMLHTTP:\n" + req.statusText);
                        }
                    }
                }
                //req.open("GET", strURL+ "?perusahaan=" + perusahaan, true);
                req.open("GET", strURL + "/" + id_jenismaterial + "/" + id_jenisbarang + "/" + nama_barang, true);
                //alert(strURL + "/" + replaced);
                req.send(null);
            }
        }
        else{

            var strURL = "<?php echo base_url();?>laporan/getRecordSemua";
            // alert(id_jenismaterial);
            var req = getXMLHTTP();
            if (req) {
                req.onreadystatechange = function() {
                    if (req.readyState == 4) {
                        if (req.status == 200) {
                            document.getElementById('state').innerHTML=req.responseText;
                        } else {
                            alert("There was a problem while using XMLHTTP:\n" + req.statusText);
                        }
                    }
                }
                //req.open("GET", strURL+ "?perusahaan=" + perusahaan, true);
                req.open("GET", strURL, true);
                //alert(strURL + "/" + replaced);
                req.send(null);
            }
        }

    }

    function getMat() {

        var strURL = "<?php echo base_url();?>laporan/getbarang";
        var id_jenismaterial = document.getElementById('id_jenismaterial').value;
        // alert(id_jenismaterial);

        var req = getXMLHTTP();
        if (req) {
            req.onreadystatechange = function() {
                if (req.readyState == 4) {
                    if (req.status == 200) {
                        document.getElementById('statediv').innerHTML=req.responseText;
                    } else {
                        alert("There was a problem while using XMLHTTP:\n" + req.statusText);
                    }
                }
            }
            //req.open("GET", strURL+ "?perusahaan=" + perusahaan, true);
            req.open("GET", strURL + "/" + id_jenismaterial, true);
            req.send(null);
        }
    }

</script>
<!--<script type="text/javascript">-->
<!--    $("button[name=TAMPIL").click(function () {-->
<!---->
<!--        if ($("select[name=id_jenismaterial]").val() != 0 &&-->
<!--            $("select[name=id_jenisbarang]").val() == 0  &&-->
<!--            $("#nama_barang").text() == "")  {-->
<!--                $("div#material").css('display', 'block');-->
<!--                $("div#material_jenisbarang").css('display', 'none');-->
<!--                $("div#material_namabarang").css('display', 'none');-->
<!--                $("div#nama_barang").css('display', 'none');-->
<!--                $("div#material_jenisbarang_namabarang").css('display', 'none');-->
<!---->
<!--        }-->
<!--    });-->
<!--</script>-->
