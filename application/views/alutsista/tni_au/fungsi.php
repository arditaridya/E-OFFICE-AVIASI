<option value="" selected disabled>Pilih Fungsi</option>
<?php
foreach ($fungsi->result() as $fungsi_res) {
    ?>
    <option value="<?php echo $fungsi_res->id ?>"><?php echo $fungsi_res->fungsi?></option>
    <?php
}
?>
