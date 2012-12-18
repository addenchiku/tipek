<div class="masterSekolahs index">
<h2><?php __('MasterSekolahs');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('nama');?></th>
	<th><?php echo $paginator->sort('alamat');?></th>
	<th><?php echo $paginator->sort('kelurahan_id');?></th>
	<th><?php echo $paginator->sort('jenjang_pendidikan');?></th>
	<th><?php echo $paginator->sort('nama_kepsek');?></th>
	<th><?php echo $paginator->sort('jenis');?></th>
	<th><?php echo $paginator->sort('status');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($masterSekolahs as $masterSekolah):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $masterSekolah['MasterSekolah']['id']; ?>
		</td>
		<td>
			<?php echo $masterSekolah['MasterSekolah']['nama']; ?>
		</td>
		<td>
			<?php echo $masterSekolah['MasterSekolah']['alamat']; ?>
		</td>
		<td>
			<?php echo $masterSekolah['MasterSekolah']['kelurahan_id']; ?>
		</td>
		<td>
			<?php echo $masterSekolah['MasterSekolah']['jenjang_pendidikan']; ?>
		</td>
		<td>
			<?php echo $masterSekolah['MasterSekolah']['nama_kepsek']; ?>
		</td>
		<td>
			<?php echo $masterSekolah['MasterSekolah']['jenis']; ?>
		</td>
		<td>
			<?php echo $masterSekolah['MasterSekolah']['status']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $masterSekolah['MasterSekolah']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $masterSekolah['MasterSekolah']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $masterSekolah['MasterSekolah']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $masterSekolah['MasterSekolah']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New MasterSekolah', true), array('action' => 'add')); ?></li>
	</ul>
</div>
