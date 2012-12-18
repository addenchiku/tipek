<?php echo $this->element('nav_atas');?>
<?php if($kelas == 'sd'):?>
	<div class="msgbar msg_Info">
		<b>DAFTAR SISWA SD/MI/SDLB PENERIMA BEASISWA</b>
	</div>
	<table class="rekap persist-area">
		<thead>
			<tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
				<td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">KETERANGAN</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Sekolah Dasar Negri">SDN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Sekolah Dasar Swasta">SDS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="SDLB Negeri">SLBN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="SDLB Swasta">SLBS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Madrasah Ibtidaiyah Negeri">MIN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Madrasah Ibtidaiyah Swasta">MIS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">SEKOLAH</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Madrasah">MADRAS</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">JUMLAH</td>
			</tr>
			<tr class="textLeft contentIsi">
				<td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">BEASISWA PRESTASI</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
			</tr>
			<tr class="textLeft contentIsi">
				<td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">BEASISWA MISKIN</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
			</tr>
			<tr class="textLeft contentIsi">
				<td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">BEASISWA LAINNYA</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
			</tr>
			<tr class="textLeft contentIsi">
				<td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">JUMLAH</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
			</tr>
		</thead>
	</table>
	<table class="rekap persist-area">
		<thead class="kepalatable persist-header">
			<tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
				<td style="background-color:#999999; color:#fff;font-size:12px;" rowspan="2">NO</td>
				<td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;" rowspan="2">NAMA SEKOLAH</td>
				<td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;" rowspan="2">NAMA KEPSEK</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">BS PRESTASI</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">BS MISKIN</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">BS LAINNYA</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">JUMLAH</td>
			</tr>
			<tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">L</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">P</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Jumlah">JLH</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">L</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">P</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Jumlah">JLH</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">L</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">P</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Jumlah">JLH</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">L</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">P</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Jumlah">JLH</td>
			</tr>
		</thead>
		<?php
	         if(!empty($records)):
	        $no = 0;
	        foreach ($records as $record):
	        $no++;
	        ?>
		<tr class="textLeft contentIsi">
                    <td><?php echo $no;?></td>
                    <td><?php echo $record['MasterSekolah']['nama'];?></td>
                    <td><?php echo $record['School']['nama_kepsek'];?></td>
                    <td><?php echo $record['School']['total_siswa_laki_beasiswa_prestasi'];?></td>
                    <td><?php echo $record['School']['total_siswa_perempuan_beasiswa_prestasi'];?></td>
                    <td><?php echo $record['School']['total_siswa_beasiswa_prestasi'];?></td>
                    <td><?php echo $record['School']['total_siswa_laki_beasiswa_miskin'];?></td>
                    <td><?php echo $record['School']['total_siswa_perempuan_beasiswa_miskin'];?></td>
                    <td><?php echo $record['School']['total_siswa_beasiswa_miskin'];?></td>
                    <td><?php echo $record['School']['total_siswa_laki_beasiswa_lain'];?></td>
                    <td><?php echo $record['School']['total_siswa_perempuan_beasiswa_lain'];?></td>
                    <td><?php echo $record['School']['total_siswa_beasiswa_lain'];?></td>

                    <td><?php echo $record['School']['total_siswa_laki_beasiswa'];?></td>
                    <td><?php echo $record['School']['total_siswa_perempuan_beasiswa'];?></td>
                    <td><?php echo $record['School']['total_siswa_beasiswa'];?></td>
                </tr>
                <?php endforeach;
                 else:?>
                    <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Data tidak ditemukan</td></tr>
                <?php endif;?>
	</table>
<?php elseif ($kelas == "smp"):?>
	<div class="msgbar msg_Info">
		<b>DAFTAR SISWA SMP/MTS/SMPLB PENERIMA BEASISWA</b>
	</div>
	<table class="rekap persist-area">
		<thead>
			<tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
				<td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">KETERANGAN</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" original-title="Sekolah Menengah Pertama Negeri/Luar Biasa">SMPN/LB</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Sekolah Menengah Pertama Swasta/Luar Biasa">SMPS/LB</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Madrasah Tsanawiyah Negeri">MTSN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Madrasah Tsanawiyah Swasta">MTSS</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;">KLS1</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;">KLS2</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;">KLS3</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">LAKI</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">PERM</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Jumlah">JUMLAH</td>
			</tr>
			<tr class="textLeft contentIsi">
				<td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">BEASISWA PRESTASI</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
			</tr>
			<tr class="textLeft contentIsi">
				<td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">BEASISWA MISKIN</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
			</tr>
			<tr class="textLeft contentIsi">
				<td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">BEASISWA LAINNYA</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
			</tr>
			<tr class="textLeft contentIsi">
				<td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">JUMLAH</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
			</tr>
		</thead>
	</table>
	<table class="rekap persist-area">
		<thead class="kepalatable persist-header">
			<tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
				<td style="background-color:#999999; color:#fff;font-size:12px;" rowspan="2">NO</td>
				<td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;" rowspan="2">NAMA SEKOLAH</td>
				<td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;" rowspan="2">NAMA KEPSEK</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">BS PRESTASI</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">BS MISKIN</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">BS LAINNYA</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">JUMLAH</td>
			</tr>
			<tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">L</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">P</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Jumlah">JLH</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">L</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">P</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Jumlah">JLH</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">L</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">P</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Jumlah">JLH</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">L</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">P</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Jumlah">JLH</td>
			</tr>
		</thead>
		<?php
	         if(!empty($records)):
	        $no = 0;
	        foreach ($records as $record):
	        $no++;
	        ?>
		<tr class="textLeft contentIsi">
                    <td><?php echo $no;?></td>
                    <td><?php echo $record['MasterSekolah']['nama'];?></td>
                    <td><?php echo $record['School']['nama_kepsek'];?></td>
                    <td><?php echo $record['School']['total_siswa_laki_beasiswa_prestasi'];?></td>
                    <td><?php echo $record['School']['total_siswa_perempuan_beasiswa_prestasi'];?></td>
                    <td><?php echo $record['School']['total_siswa_beasiswa_prestasi'];?></td>
                    <td><?php echo $record['School']['total_siswa_laki_beasiswa_miskin'];?></td>
                    <td><?php echo $record['School']['total_siswa_perempuan_beasiswa_miskin'];?></td>
                    <td><?php echo $record['School']['total_siswa_beasiswa_miskin'];?></td>
                    <td><?php echo $record['School']['total_siswa_laki_beasiswa_lain'];?></td>
                    <td><?php echo $record['School']['total_siswa_perempuan_beasiswa_lain'];?></td>
                    <td><?php echo $record['School']['total_siswa_beasiswa_lain'];?></td>

                    <td><?php echo $record['School']['total_siswa_laki_beasiswa'];?></td>
                    <td><?php echo $record['School']['total_siswa_perempuan_beasiswa'];?></td>
                    <td><?php echo $record['School']['total_siswa_beasiswa'];?></td>
                </tr>
                <?php endforeach;
                 else:?>
                  <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Data tidak ditemukan</td></tr>
        		<?php endif;?>
	</table>

<?php elseif ($kelas == "sma"):?>
	<div class="msgbar msg_Info">
		<b>DAFTAR SISWA SMA/MA/SMALB PENERIMA BEASISWA</b>
	</div>
	<table class="rekap persist-area">
		<thead>
			<tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
				<td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">KETERANGAN</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" original-title="Sekolah Menengah Atas Negeri/Luar Biasa">SMAN/LB</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Sekolah Menengah Atas Swasta/Luar Biasa">SMAS/LB</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Madrasah Aliyah Negeri">MAN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Madrasah Aliyah Swasta">MAS</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;">KLS1</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;">KLS2</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;">KLS3</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">LAKI</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">PERM</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Jumlah">JUMLAH</td>
			</tr>
			<tr class="textLeft contentIsi">
				<td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">BEASISWA PRESTASI</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
			</tr>
			<tr class="textLeft contentIsi">
				<td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">BEASISWA MISKIN</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
			</tr>
			<tr class="textLeft contentIsi">
				<td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">BEASISWA LAINNYA</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
			</tr>
			<tr class="textLeft contentIsi">
				<td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">JUMLAH</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
			</tr>
		</thead>
	</table>
	<table class="rekap persist-area">
		<thead class="kepalatable persist-header">
			<tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
				<td style="background-color:#999999; color:#fff;font-size:12px;" rowspan="2">NO</td>
				<td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;" rowspan="2">NAMA SEKOLAH</td>
				<td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;" rowspan="2">NAMA KEPSEK</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">BS PRESTASI</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">BS MISKIN</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">BS LAINNYA</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">JUMLAH</td>
			</tr>
			<tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">L</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">P</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Jumlah">JLH</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">L</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">P</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Jumlah">JLH</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">L</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">P</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Jumlah">JLH</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">L</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">P</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Jumlah">JLH</td>
			</tr>
		</thead>
		<?php
	         if(!empty($records)):
	        $no = 0;
	        foreach ($records as $record):
	        $no++;
	        ?>
		<tr class="textLeft contentIsi">
                    <td><?php echo $no;?></td>
                    <td><?php echo $record['MasterSekolah']['nama'];?></td>
                    <td><?php echo $record['School']['nama_kepsek'];?></td>
                    <td><?php echo $record['School']['total_siswa_laki_beasiswa_prestasi'];?></td>
                    <td><?php echo $record['School']['total_siswa_perempuan_beasiswa_prestasi'];?></td>
                    <td><?php echo $record['School']['total_siswa_beasiswa_prestasi'];?></td>
                    <td><?php echo $record['School']['total_siswa_laki_beasiswa_miskin'];?></td>
                    <td><?php echo $record['School']['total_siswa_perempuan_beasiswa_miskin'];?></td>
                    <td><?php echo $record['School']['total_siswa_beasiswa_miskin'];?></td>
                    <td><?php echo $record['School']['total_siswa_laki_beasiswa_lain'];?></td>
                    <td><?php echo $record['School']['total_siswa_perempuan_beasiswa_lain'];?></td>
                    <td><?php echo $record['School']['total_siswa_beasiswa_lain'];?></td>

                    <td><?php echo $record['School']['total_siswa_laki_beasiswa'];?></td>
                    <td><?php echo $record['School']['total_siswa_perempuan_beasiswa'];?></td>
                    <td><?php echo $record['School']['total_siswa_beasiswa'];?></td>
                </tr>
                <?php endforeach;
                 else:?>
                  <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Data tidak ditemukan</td></tr>
        		<?php endif;?>
	</table>

<?php elseif ($kelas == "smk"):?>
	<div class="msgbar msg_Info">
		<b>DAFTAR SISWA SMK/MK PENERIMA BEASISWA</b>
	</div>
	<table class="rekap persist-area">
		<thead>
			<tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
				<td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">KETERANGAN</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Sekolah Menengah Kejuruan Negeri">SMKN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;"class="tip_south" title="Sekolah Menengah Kejuruan Swasta">SMKS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;"class="tip_south" title="Madrasah Aliyah Kejuruan Negeri">MAKN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;"class="tip_south" title="Madrasah Aliyah Kejuruan Swasta">MAKS</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;">KLS1</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;">KLS2</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;">KLS3</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">LAKI</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">PERM</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Jumlah">JUMLAH</td>
			</tr>
			<tr class="textLeft contentIsi">
				<td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">BEASISWA PRESTASI</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
			</tr>
			<tr class="textLeft contentIsi">
				<td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">BEASISWA MISKIN</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
			</tr>
			<tr class="textLeft contentIsi">
				<td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">BEASISWA LAINNYA</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
			</tr>
			<tr class="textLeft contentIsi">
				<td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">JUMLAH</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
				<td >&nbsp;</td>
			</tr>
		</thead>
	</table>
	<table class="rekap persist-area">
		<thead class="kepalatable persist-header">
			<tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
				<td style="background-color:#999999; color:#fff;font-size:12px;" rowspan="2">NO</td>
				<td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;" rowspan="2">NAMA SEKOLAH</td>
				<td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;" rowspan="2">NAMA KEPSEK</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">BS PRESTASI</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">BS MISKIN</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">BS LAINNYA</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">JUMLAH</td>
			</tr>
			<tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">L</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">P</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Jumlah">JLH</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">L</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">P</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Jumlah">JLH</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">L</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">P</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Jumlah">JLH</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">L</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">P</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Jumlah">JLH</td>
			</tr>
		</thead>
		<?php
	         if(!empty($records)):
	        $no = 0;
	        foreach ($records as $record):
	        $no++;
	        ?>
		<tr class="textLeft contentIsi">
                    <td><?php echo $no;?></td>
                    <td><?php echo $record['MasterSekolah']['nama'];?></td>
                    <td><?php echo $record['School']['nama_kepsek'];?></td>
                    <td><?php echo $record['School']['total_siswa_laki_beasiswa_prestasi'];?></td>
                    <td><?php echo $record['School']['total_siswa_perempuan_beasiswa_prestasi'];?></td>
                    <td><?php echo $record['School']['total_siswa_beasiswa_prestasi'];?></td>
                    <td><?php echo $record['School']['total_siswa_laki_beasiswa_miskin'];?></td>
                    <td><?php echo $record['School']['total_siswa_perempuan_beasiswa_miskin'];?></td>
                    <td><?php echo $record['School']['total_siswa_beasiswa_miskin'];?></td>
                    <td><?php echo $record['School']['total_siswa_laki_beasiswa_lain'];?></td>
                    <td><?php echo $record['School']['total_siswa_perempuan_beasiswa_lain'];?></td>
                    <td><?php echo $record['School']['total_siswa_beasiswa_lain'];?></td>

                    <td><?php echo $record['School']['total_siswa_laki_beasiswa'];?></td>
                    <td><?php echo $record['School']['total_siswa_perempuan_beasiswa'];?></td>
                    <td><?php echo $record['School']['total_siswa_beasiswa'];?></td>
                </tr>
                <?php endforeach;
                 else:?>
                  <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Data tidak ditemukan</td></tr>
        		<?php endif;?>
</table>
	</table>

	<?php endif;?>