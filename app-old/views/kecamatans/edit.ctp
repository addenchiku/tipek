<div class="one_wrap fl_left">
	<div class="widget">
		<div class="widget_title"><span class="iconsweet">C</span><h5>Edit Kecamatan</h5></div>
		<div class="widget_body">
			<!--Form fields-->
			<?php echo $form->create('Kecamatan');?>
			<fieldset>
				<ul class="form_fields_container">
					<?php echo $form->input('id');?>
					<li>
						<label>Nama</label>
						<div class="form_input">
							<?php
							echo $form->input('nama',array('div'=>false,'label'=>false));
							?>
						</div>
					</li>
					<li>

						<div class="button_list">
							<button type="submit" class="button_small bluishBtn" name="Submit">
								<span class="iconsweet">=</span> Simpan
							</button>


							<a href="#" ONCLICK="history.go(-1)" class="button_small whitishBtn"><span class="iconsweet"><</span>Kembali</a>
						</div>
					</li>
				</ul>
			</fieldset>
			<?php echo $form->end();?>

		</div>
	</div>
</div>