<select class="form-control" name="kesatuan_ad">
    <option value="">Pilih Barang</option>
    <?php
        foreach ($barang as $value) {
            ?>
            <option value="<?php echo $value->id; ?>"><?php echo $value->barang; ?></option>
            <?php
        }
    ?>
</select>