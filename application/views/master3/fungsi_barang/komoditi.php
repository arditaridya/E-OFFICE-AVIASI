<option value="" selected disabled>Pilih Komoditi</option>
<?php
foreach ($komoditi->result() as $komoditi_res) {
    ?>
    <option value="<?php echo $komoditi_res->kode ?>"><?php echo $komoditi_res->nama ?></option>
    <?php
}
?>
