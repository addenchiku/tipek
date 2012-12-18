<div class="kelurahans form">
<?php echo $form->create('Kelurahan');?>
	<fieldset>
 		<legend><?php __('Add Kelurahan');?></legend>
	<?php
		echo $form->input('nama');
		echo $form->input('kecamatan_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Kelurahans', true), array('action' => 'index'));?></li>
	</ul>
</div>
