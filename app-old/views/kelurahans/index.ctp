<div class="kelurahans index">
<h2><?php __('Kelurahans');?></h2>
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
	<th><?php echo $paginator->sort('kecamatan_id');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($kelurahans as $kelurahan):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $kelurahan['Kelurahan']['id']; ?>
		</td>
		<td>
			<?php echo $kelurahan['Kelurahan']['nama']; ?>
		</td>
		<td>
			<?php echo $kelurahan['Kelurahan']['kecamatan_id']; ?>
		</td>
		<td>
			<?php echo $kelurahan['Kelurahan']['created']; ?>
		</td>
		<td>
			<?php echo $kelurahan['Kelurahan']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $kelurahan['Kelurahan']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $kelurahan['Kelurahan']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $kelurahan['Kelurahan']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $kelurahan['Kelurahan']['id'])); ?>
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
		<li><?php echo $html->link(__('New Kelurahan', true), array('action' => 'add')); ?></li>
	</ul>
</div>
