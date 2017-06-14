<head>
    <?php $this->load->view('v_header') ?>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</head>
<body class="page-404-full-page">
    <div class="row">
        <div class="col-md-12 page-404">
            <div class="number">
                404
            </div>
            <div class="details">
                <h3>Ups, Halaman tidak tersedia.</h3>
                <p>
                    Maaf halaman yang Anda tuju tidak ada, silahkan kembali ke <a href="javascript:window.history.back()">halaman utama</a><br/>
                </p>

                <div>
                    <a onclick="goBack()" class="btn btn-large btn-primary" type="button">
                        <span><i class="fa fa-chevron-left"></i></span>
                        &nbsp;
                        Kembali						
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>