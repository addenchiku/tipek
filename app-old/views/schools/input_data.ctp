<div class="one_wrap fl_left">
	<div class="widget">
		<div class="widget_title"><span class="iconsweet"></span><h5>Input Data</h5></div>
		<div class="widget_body">
			<!--Form fields-->
			<?php echo $form->create('Kecamatan');?>
			<fieldset>
				<ul class="form_fields_container">
					<li>
						<label>Pilih Kecamatan</label>
						<div class="form_input">
							<?php
					 		echo $form->select('kecamatan_id', $kecamatan, null, array('id' => 'kecamatandropdown'),array('empty'=>'Pilih Kecamatan'));
					 		$options = array('url' => 'get_kelurahan','update' => 'kelurahandropdown','loading'=>"Element.show('plsLoaderID')",'loaded'=>"Element.hide('plsLoaderID')");
					 		echo $ajax->observeField('kecamatandropdown',$options);?>
						</div>
					</li>
					<li id="plsLoaderID" style="display:none;">
						<img alt="" src="<?php echo $this->webroot;?>images/loaders/load9.gif" style="margin:5px 10px;">
						   Loading
					</li>
					<li>
						<label>Pilih Kecamatan</label>
						<div class="form_input">
							<select id="kelurahandropdown" name="data[School][kelurahan_id]" >

			 				</select>
						</div>
					</li>
					<li>
						<label>Pilih File</label>
						<div class="form_input">
							<?php
					 		echo $form->input('file', array('label'=>false, 'type'=>'file'));?>
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