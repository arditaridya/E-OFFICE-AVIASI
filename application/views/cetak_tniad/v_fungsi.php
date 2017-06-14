<select class="form-control" id="fungsi" name="fungsi" onchange="tmplbarang()">
    <option value="">Pilih Fungsi</option>
    <?php
        foreach ($fungsi as $value) {
            ?>
            <option value="<?php echo $value->id; ?>"><?php echo $value->fungsi; ?><?php echo $value->fungsi; ?></option>
            <?php
        }
    ?>
</select>