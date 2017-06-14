<option value="" selected disabled>Pilih Jenis</option>
<?php
foreach ($jenis->result() as $jenis_res) {
    ?>
    <option value="<?php echo $jenis_res->kode ?>"><?php echo $jenis_res->nama ?></option>
    <?php
}
?>