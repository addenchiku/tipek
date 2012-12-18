<div class="kecamatans view">
<h2><?php  __('Kecamatan');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $kecamatan['Kecamatan']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nama'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $kecamatan['Kecamatan']['nama']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $kecamatan['Kecamatan']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $kecamatan['Kecamatan']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Kecamatan', true), array('action' => 'edit', $kecamatan['Kecamatan']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Kecamatan', true), array('action' => 'delete', $kecamatan['Kecamatan']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $kecamatan['Kecamatan']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Kecamatans', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Kecamatan', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
