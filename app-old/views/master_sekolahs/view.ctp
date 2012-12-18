<div class="masterSekolahs view">
<h2><?php  __('MasterSekolah');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $masterSekolah['MasterSekolah']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nama'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $masterSekolah['MasterSekolah']['nama']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Alamat'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $masterSekolah['MasterSekolah']['alamat']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Kelurahan Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $masterSekolah['MasterSekolah']['kelurahan_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Jenjang Pendidikan'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $masterSekolah['MasterSekolah']['jenjang_pendidikan']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nama Kepsek'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $masterSekolah['MasterSekolah']['nama_kepsek']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Jenis'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $masterSekolah['MasterSekolah']['jenis']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $masterSekolah['MasterSekolah']['status']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit MasterSekolah', true), array('action' => 'edit', $masterSekolah['MasterSekolah']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete MasterSekolah', true), array('action' => 'delete', $masterSekolah['MasterSekolah']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $masterSekolah['MasterSekolah']['id'])); ?> </li>
		<li><?php echo $html->link(__('List MasterSekolahs', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New MasterSekolah', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
