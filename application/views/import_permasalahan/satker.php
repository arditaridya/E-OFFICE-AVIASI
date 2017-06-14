

<select class="form-control" name='satker' id='satker'>
	<option  value='' selected>Pilih Satker</option>
	<?php foreach($satker as $row){ ?>
		<option value="<?php echo $row->id; ?>"><?php echo $row->lanud; ?></option>
	<?php } ?>
</select>