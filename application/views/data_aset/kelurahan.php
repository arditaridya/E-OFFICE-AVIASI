

<select class="form-control" name='kelurahan' id='kelurahan'>
	<option  value='0' selected>--- Pilih Kelurahan ---</option>
	<?php foreach($kelurahan as $row){ ?>
		<option value="<?php echo $row->id; ?>"><?php echo $row->nama_kelurahan; ?></option>
	<?php } ?>
</select>