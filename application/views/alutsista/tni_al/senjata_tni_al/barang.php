

<select class="form-control" name='barang' id='barang'>
	<option  value='' selected>Select Alutsista</option>
	<?php foreach($barang as $row){ ?>
		<option value="<?php echo $row->id; ?>"><?php echo $row->barang; ?></option>
	<?php } ?>
</select>
<script>
	$(document).ready(function(){
		$('#kapal').combobox();
	});
</script>