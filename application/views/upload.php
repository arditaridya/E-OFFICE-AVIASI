<form action="<?php echo site_url('main_menu/proses_upload') ?>" class="horizontal-form" role="form" method="post" enctype='multipart/form-data'>
    <div class="form-group"></div>
                                                <div class="row">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Image/Foto</label>
                                                        <div class="col-md-7">
                                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                                <div class="col-md-6">
                                                                    <div>
                                                                        <span class="btn btn-file btn-primary"><span class="fileupload-new">Pilih Gambar</span><span class="fileupload-exists">Rubah</span><input type="file" name="UPLOAD_DOK"/></span>
                                                                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Hapus</a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5">       
                                                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="<?php echo base_url(); ?>assets/admin/layout/img/demoUpload.jpg" alt="" /></div>
                                                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
    <input type="submit" name="simpan" class="btn blue" value="&#xf00c; Simpan">

</form>