<?php
foreach ($kode_fungsi as $fungsi_res) {
    ?>
    <input value="<?php echo $fungsi_res->kode ?>" type="text" id="kode2" onkeyup="myFunction('kode2');" class="form-control" name="KODE"/>
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