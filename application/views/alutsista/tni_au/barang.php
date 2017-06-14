<option value="" selected disabled>Pilih Barang</option>
<?php
foreach ($barang->result() as $barang_res) {
    ?>
    <option value="<?php echo $barang_res->id ?>"><?php echo $barang_res->barang?></option>
    <?php
}
?>
