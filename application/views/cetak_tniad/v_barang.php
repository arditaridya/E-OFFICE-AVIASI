<select class="form-control" id="barang" name="barang">
    <option value="">Pilih Barang</option>
    <?php
    	foreach ($barang as $key) {
            ?>
            <option value="<?php echo $key->id; ?>"><?php echo $key->barang; ?></option>
            <?php
        }
    ?>
</select>