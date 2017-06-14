<option value="" selected disabled>Pilih Jenis</option>
<?php
foreach ($jenis->result() as $jenis_res) {
    ?>
    <option value="<?php echo $jenis_res->id ?>"><?php echo $jenis_res->jenis ?></option>
    <?php
}
?>