<div class="kelurahans view">
<h2><?php  __('Kelurahan');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $kelurahan['Kelurahan']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nama'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $kelurahan['Kelurahan']['nama']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Kecamatan Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $kelurahan['Kelurahan']['kecamatan_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $kelurahan['Kelurahan']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $kelurahan['Kelurahan']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Kelurahan', true), array('action' => 'edit', $kelurahan['Kelurahan']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Kelurahan', true), array('action' => 'delete', $kelurahan['Kelurahan']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $kelurahan['Kelurahan']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Kelurahans', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Kelurahan', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
