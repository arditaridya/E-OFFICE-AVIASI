

<select class="form-control" name='barang' id='barang'>
	<option  value='' selected>Select Alutsista</option>
	<?php foreach($barang as $row){ ?>
		<option value="<?php echo $row->kode; ?>"><?php echo $row->uraian; ?></option>
	<?php } ?>
</select>
<script>
	$(document).ready(function(){
		$('#kapal').combobox();
	});
</script>