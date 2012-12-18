<div id="activity_stats">
	<h2>Kecamatan</h2>
        	<!--<div id="quick_actions">
		<a style="margin:5px;" class="greenishBtn button_small" href="#">PAUD/TK/RA</a>
		<a style="margin:5px;" class="greenishBtn button_small" href="#">SD/MI/LB</a>
		<a style="margin:5px;" class="greenishBtn button_small" href="#">SMP/MTS/LB</a>
		<a style="margin:5px;" class="greenishBtn button_small" href="#">SMA/MA/LB</a>
		<a style="margin:5px;" class="greenishBtn button_small" href="#">SMK/BK</a>
		<a style="margin:5px;" class="greenishBtn button_small" href="#">SEMUA</a>
		<div style="float:right; position:relative;">
			<a style="margin:5px;" class="bluishBtn button_small" href="#">Edit</a>
			<a style="margin:5px;" class="bluishBtn button_small" href="#">Cetak</a>
			<a style="margin:5px;" class="bluishBtn button_small" href="#">Excel</a>
			<a style="margin:5px;" class="bluishBtn button_small" href="#">Cari</a>
		</div>
	</div>-->
</div>
<div class="one_wrap fl_left">
<div class="widget">
	<div class="widget_title">
		<span class="iconsweet">{</span><h5>Daftar Kecamatan</h5>
	</div>
	<div class="widget_body">
		<div class="content_pad">
		<table class="data display datatable " id="example">
			<thead>
				<tr>
					<th><?php echo 'NAMA';?></th>
					<th><?php echo 'EDIT / HAPUS'; ?></th>
				</tr>
			</thead>
			<tbody>
				<?php
				$i = 0;
				foreach ($kecamatans as $kecamatan):
					$class = null;
				if ($i++ % 2 == 0) {
					$class = ' class="altrow"';
				}
				?>
				<tr<?php echo $class;?>>
					<td>
						<?php echo $kecamatan['Kecamatan']['nama']; ?>
					</td>
					<td class="actions">
						<span class="data_actions iconsweet">

							<?php echo $html->link(__('C', true), array('action' => 'edit', $kecamatan['Kecamatan']['id']),array('class'=>'tip_north','original-title'=>'Ubah')); ?>
							<?php echo $html->link(__('X', true), array('action' => 'delete', $kecamatan['Kecamatan']['id']), array('class'=>'tip_north','original-title'=>'Hapus'), sprintf(__('Are you sure you want to delete # %s?', true), $kecamatan['Kecamatan']['nama'])); ?>

						</span>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>

		</table>
		</div>
	</div>
</div>
</div>