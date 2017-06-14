<option value="" selected disabled>Pilih Komoditi</option>
<?php 
	foreach ($kelompok_barang->result() as $value) {
		?>
			<option value="<?php echo $value->kode; ?>"><?php echo $value->nama; ?></option>
		<?php
	}
?>