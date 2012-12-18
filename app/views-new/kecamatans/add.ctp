<div class="one_wrap fl_left">
	<div class="widget">
		<div class="widget_title"><span class="iconsweet"></span><h5>Tambah Kecamatan</h5></div>
		<div class="widget_body">
			<!--Form fields-->
			<?php echo $form->create('Kecamatan');?>
			<fieldset>
				<ul class="form_fields_container">
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
							<?php
							echo $form->submit('Oke',array('div'=>false,'label'=>false,'class'=>'button_big'));
							?>
							<a href="#" ONCLICK="history.go(-1)" class="button_big"><span class="iconsweet">w</span>Kembali</a>
						</div>
					</li>
				</ul>
			</fieldset>
			<?php echo $form->end();?>

		</div>
	</div>
</div>