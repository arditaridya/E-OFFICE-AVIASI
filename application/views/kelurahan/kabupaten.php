

<select class="form-control" name='kabupaten' id='kabupaten' onchange='getKec()'>
	<option  value='' selected>Pilih Kabupaten</option>
	<?php foreach($kabupaten as $row){ ?>
		<option value="<?php echo $row->id; ?>"><?php echo $row->nama_kabupaten; ?></option>
	<?php } ?>
</select>