

<select class="form-control" name='id_jenisbarang' id='id_jenisbarang'>
	<option  value="0" selected>-- Pilih Jenis Barang --</option>
	<?php foreach($barang as $row){ ?>
		<option value="<?php echo $row->id_jenisbarang; ?>"><?php echo $row->nama_jenisbarang; ?></option>
	<?php } ?>
</select>