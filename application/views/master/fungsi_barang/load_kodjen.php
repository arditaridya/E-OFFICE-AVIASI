<?php
foreach ($kode_jenis as $jenis_res) {
    ?>
    <input value="<?php echo $jenis_res->kode ?>" type="text" id="kode2" onkeyup="myFunction('kode2');" class="form-control" name="KODE"/>
    <?php
}
?>

<script>

	function myFunction(id)
		{
			var str = document.getElementById(id).value;
			var res = str.toUpperCase();
			document.getElementById(id).value=res;
		}

</script>