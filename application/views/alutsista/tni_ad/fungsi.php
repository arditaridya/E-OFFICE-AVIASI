<select class="form-control" name='fungsi' id='fungsi' onchange='getCoba2()'>
	<option>- Pilih -</option>
	<?php foreach($fungsi as $row){ ?>
		<option value="<?php echo $row->id; ?>"><?php echo $row->fungsi; ?></option>
	<?php } ?>
</select>