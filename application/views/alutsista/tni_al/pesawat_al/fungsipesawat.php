

<select class="form-control" name='fungsi' id='fungsi' onchange='getCoba2()'>
	<option  value='' selected>Select Fungsi</option>
	<?php foreach($fungsi as $row){ ?>
		<option value="<?php echo $row->id; ?>"><?php echo $row->fungsi; ?></option>
	<?php } ?>
</select>
<script>
	$(document).ready(function(){
		$('#kapal').combobox();
	});
</script>