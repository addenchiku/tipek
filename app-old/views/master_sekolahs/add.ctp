<div class="masterSekolahs form">
<?php echo $form->create('MasterSekolah');?>
	<fieldset>
 		<legend><?php __('Add MasterSekolah');?></legend>
	<?php
		echo $form->input('nama');
		echo $form->input('alamat');
		echo $form->input('kelurahan_id');
		echo $form->input('jenjang_pendidikan');
		echo $form->input('nama_kepsek');
		echo $form->input('jenis');
		echo $form->input('status');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List MasterSekolahs', true), array('action' => 'index'));?></li>
	</ul>
</div>
