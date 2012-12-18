<div class="masterSekolahs form">
<?php echo $form->create('MasterSekolah');?>
	<fieldset>
 		<legend><?php __('Edit MasterSekolah');?></legend>
	<?php
		echo $form->input('id');
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
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('MasterSekolah.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('MasterSekolah.id'))); ?></li>
		<li><?php echo $html->link(__('List MasterSekolahs', true), array('action' => 'index'));?></li>
	</ul>
</div>
