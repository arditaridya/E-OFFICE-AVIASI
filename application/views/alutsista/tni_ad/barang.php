<select class="form-control" name='barang' id='barang'>
	<option>- Pilih -</option>
	<?php foreach($barang as $row){ ?>
		<option value="<?php echo $row->id; ?>"><?php echo $row->barang; ?></option>
	<?php } ?>
</select>