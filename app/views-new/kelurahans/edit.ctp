<div class="kelurahans form">
<?php echo $form->create('Kelurahan');?>
	<fieldset>
 		<legend><?php __('Edit Kelurahan');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('nama');
		echo $form->input('kecamatan_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Kelurahan.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Kelurahan.id'))); ?></li>
		<li><?php echo $html->link(__('List Kelurahans', true), array('action' => 'index'));?></li>
	</ul>
</div>
