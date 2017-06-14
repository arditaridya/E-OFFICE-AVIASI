
																<select class="form-control" name='lanud[]' id='lanud[]'>
																	<option value='0' selected>Pilih Lanud</option>
																	<?php foreach($lanud as $row){ ?>
																	<option value="<?php echo $row->id; ?>"><?php echo $row->lanud; ?></option>
																	<?php } ?>
																</select>
														