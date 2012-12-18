<?php echo $this->element('nav_atas');?>
<?php if($kelas == 'sd'):?>
	<div class="msgbar msg_Info">
		<b>DAFTAR PTK SD/MI/SDLB BERDASARKAN BIDANG STUDI</b>
	</div>
	<table class="rekap persist-area">
		<thead>
			<tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
				<td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">KETERANGAN</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;">GPAI</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;">GPKK</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;">GPAL</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;">GSBU</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;">GPJO</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;">GTIK</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;">GPSD</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;">GPLB</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GPBP</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GKSD</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GKLB</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">JUMLAH</td>
			</tr>
			<tr class="textLeft contentIsi">
				<td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">SERTIFIKASI</td>
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
				<td >&nbsp;</td>
				<td >&nbsp;</td>
			</tr>
			<tr class="textLeft contentIsi">
				<td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">BELUM SERTIFIKASI</td>
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
				<td >&nbsp;</td>
				<td >&nbsp;</td>
			</tr>
		</thead>
	</table>
	<table class="rekap persist-area">
		<thead class="kepalatable persist-header">
			<tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
				<td style="background-color:#999999; color:#fff;font-size:12px;" rowspan="2">NO</td>
				<td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">NAMA SEKOLAH</td>
				<td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">NAMA KEPSEK</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">LISENSI KEPSEK</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" >GPAI</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" >GPKK</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" >GPAL</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" >GSBU</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" >GPJO</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" >GTIK</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" >GPSD</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" >GPLB</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" >GPBP</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" >GKSD</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" >GKLB</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" >JUMLAH</td>
			</tr>			
		</thead>			
		<tr class="textLeft contentIsi">
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>				
	</table>

<?php elseif ($kelas == "smp"):?>
	<div class="msgbar msg_Info">
		<b>DAFTAR PTK SMP/MTS/SMPLB BERDASARKAN BIDANG STUDI</b>
	</div>
	<table class="rekap persist-area">
		<thead>
			<tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
				<td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">KETERANGAN</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GPAG</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GPKN</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GBIN</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GTIK</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GKET</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GIPA</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GIPS</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GSBU</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GPJO</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GP/BP</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GPGS</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">JUMLAH</td>
			</tr>
			<tr class="textLeft contentIsi">
				<td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">SERTIFIKASI</td>
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
				<td >&nbsp;</td>
				<td >&nbsp;</td>
			</tr>
			<tr class="textLeft contentIsi">
				<td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">BELUM SERTIFIKASI</td>
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
				<td >&nbsp;</td>
				<td >&nbsp;</td>
			</tr>
		</thead>
	</table>
	<table class="rekap persist-area">
		<thead class="kepalatable persist-header">
			<tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
				<td style="background-color:#999999; color:#fff;font-size:12px;" rowspan="2">NO</td>
				<td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">NAMA SEKOLAH</td>
				<td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">NAMA KEPSEK</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">LISENSI KEPSEK</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" >GPAG</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" >GPKN</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" >GBIN</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" >GTIK</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" >GKET</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" >GIPA</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" >GIPS</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" >GSBU</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" >GPJO</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" >GP/BP</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" >GPGS</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" >JUMLAH</td>
			</tr>			
		</thead>			
		<tr class="textLeft contentIsi">
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>				
	</table>

<?php elseif ($kelas == "sma"):?>
	<div class="msgbar msg_Info">
		<b>DAFTAR PTK SMA/MA/SMALB BERDASARKAN BIDANG STUDI</b>
	</div>
	<table class="rekap persist-area">
		<thead>
			<tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
				<td rowspan="2" class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">KETERANGAN</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GP AG</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GP KN</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GM MT</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GB IN</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GT IK</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GK ET</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GF IS</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GB IO</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GK IM</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GS BU</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GP JO</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GS EJ</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GS OS</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GE KO</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GG EO</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GA NT</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GB IG</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GB AR</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GB JE</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GB PR</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GP/ BP</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GP GS</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">JM LH</td>					
			</tr>
		</thead>
		<tr class="textLeft contentIsi">
			<td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">SERTIFIKASI</td>
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
			<td >&nbsp;</td>
			<td >&nbsp;</td>
			<td >&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">BELUM SERTIFIKASI</td>
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
			<td >&nbsp;</td>
			<td >&nbsp;</td>
			<td >&nbsp;</td>
		</tr>
	</table>
	<table class="rekap persist-area">
		<thead class="kepalatable persist-header">
			<tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
				<td style="background-color:#999999; color:#fff;font-size:12px;" rowspan="2">NO</td>
				<td rowspan="2" class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">NAMA SEKOLAH</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GP AG</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GP KN</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GM MT</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GB IN</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GT IK</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GK ET</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GF IS</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GB IO</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GK IM</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GS BU</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GP JO</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GS EJ</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GS OS</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GE KO</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GG EO</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GA NT</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GB IG</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GB AR</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GB JE</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GB PR</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GP/ BP</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GP GS</td>
				<td rowspan="2" style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">JM LH</td>					
			</tr>			
		</thead>			
		<tr class="textLeft contentIsi">
			<td>&nbsp;</td>
			<td>&nbsp;</td>
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
			<td >&nbsp;</td>
			<td >&nbsp;</td>
			<td >&nbsp;</td>
		</tr>				
	</table>

<?php elseif ($kelas == "smk"):?>
	<div class="msgbar msg_Info">
		<b>DAFTAR PTK SMK/MK/SMKLB BERDASARKAN BIDANG STUDI</b>
	</div>
	<table class="rekap persist-area">
		<thead class="kepalatable persist-header">
			<tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
				<td style="background-color:#999999; color:#fff;font-size:12px;" >NO</td>
				<td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">GURU BIDANG STUDI</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Sertifikasi">ST</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Non Sertifikasi">NS</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Jumlah">JH</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" >NO</td>
				<td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">GURU BIDANG STUDI</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Sertifikasi">ST</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Non Sertifikasi">NS</td>
				<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Jumlah">JH</td>					
			</tr>			
		</thead>			
		<tr class="textLeft contentIsi">
			<td>1</td>
			<td>PKN</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>71</td>
			<td>KIMIA INDUSTRI</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>				
		<tr class="textLeft contentIsi">
			<td>2</td>
			<td>PENDIDIKAN AGAMA</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>72</td>
			<td>NAUTIKA KAPAL PENANGKAP IKAN</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>3</td>
			<td>BAHASA DAN SASTRA INDONESIA</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>73</td>
			<td>TEKNIK KAPAL PENANGKAP IKAN</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>4</td>
			<td>BAHASA INGGRIS</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>74</td>
			<td>NAUTIKA KAPAL NIAGA</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>5</td>
			<td>SEJARAH NASIONAL DAN UMUM</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>75</td>
			<td>TEKNIK KAPAL NIAGA</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>6</td>
			<td>PENDIDIKAN JASMANI</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>76</td>
			<td>TEKNIK & MANAJEMEN PRODUKSI</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>7</td>
			<td>MATEMATIKA</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>77</td>
			<td>TEKNIK & MANAJEMEN PERGUDANGAN</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>8</td>
			<td>IPA</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>78</td>
			<td>TEKNIK & MANAJEMEN TRANSPORTASI</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>9</td>
			<td>FISIKA</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>79</td>
			<td>TEKNIK PRODUKSI PERMINYAKAN</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>10</td>
			<td>BIOLOGI</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>80</td>
			<td>TEKNIK PEMBORAN MINYAK</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>11</td>
			<td>KIMIA</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>81</td>
			<td>TEKNIK PENGOLAHAN MIGAS & PETRO KIMIA</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>				
		<tr class="textLeft contentIsi">
			<td>12</td>
			<td>IPS</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>82</td>
			<td>TEKNIK AUDIO VIDEO</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>13</td>
			<td>EKONOMI</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>83</td>
			<td>TEKNIK ELEKTRONIKA INDUSTRI</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>14</td>
			<td>SOSIOLOGI</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>84</td>
			<td>TEKNIK MEKATRONIKA</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>15</td>
			<td> GEOGRAFI</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>85</td>
			<td>TEKNIK TRANSIMIS TELEKOMUNIKASI</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>16</td>
			<td>SEJARAH BUDAYA</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>86</td>
			<td>TEKNIK SUITSING</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>17</td>
			<td>TATA NEGARA </td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>87</td>
			<td>TEKNIK JARINGAN AKSES</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>18</td>
			<td>ANTROPOLOGI</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>88</td>
			<td>REKAYASA PERANGKAT LUNAK</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>19</td>
			<td>BAHASA ASING LAIN</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>89</td>
			<td>TEKNIK KOMPUTER & JARINGAN</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>20</td>
			<td>BIMBINGAN DAN PENYULUHAN</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>90</td>
			<td>MULTIMEDIA</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>21</td>
			<td>TEKNIK KONSTRUKSI BAJA</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>91</td>
			<td>ANIMASI</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>				
		<tr class="textLeft contentIsi">
			<td>22</td>
			<td>TEKNIK KONSTRUKSI KAYU</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>92</td>
			<td>TEKNIK PENYIARAN PROG TV</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>23</td>
			<td>TEKNIK KONSTRUKSI BATU DAN BETON</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>93</td>
			<td>TEKNIK PENYIARAN PROG RADIO</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>24</td>
			<td>TEKNIK GAMBAR BANGUNAN</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>94</td>
			<td>KEPERAWATAN</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>25</td>
			<td>TEKNIK FURNITUR </td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>95</td>
			<td>KEPERAWATAN GIGI</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>26</td>
			<td>TEKNIK PLAMBING DAN SANITASI</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>96</td>
			<td>ANALIS KESEHATAN</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>27</td>
			<td>TEKNIK SURVEY DAN PEMETAAN</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>97</td>
			<td>FARMASI</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>28</td>
			<td>TEKNIK TENAGA PEMBANGKIT LISTRIK</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>98</td>
			<td>FARMASI INDUSTRI</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>29</td>
			<td>TEKNIK DISTRIBUSI LISTRIK</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>99</td>
			<td>PERAWATAN SOSIAL</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>30</td>
			<td>TEKNIK TRANSMISI LISTRIK</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>100</td>
			<td>SENI LUKIS</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>31</td>
			<td>TEKNIK INSTALASI LISTRIK</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>101</td>
			<td>SENI PATUNG</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>				
		<tr class="textLeft contentIsi">
			<td>32</td>
			<td>TEKNIK OTOMASI INDUSTRI</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>102</td>
			<td>DESAIN KOMUNIKASI VISUAL</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>33</td>
			<td>TEKNIK PENDINGIN DAN TATA UDARA</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>103</td>
			<td>DESAIN PRODUKSI INTERIOR&LANDSC	</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>34</td>
			<td>TEKNIK PERMESINAN</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>104</td>
			<td>DESAIN & PRODUKSI KRIA TEKSTIL</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>35</td>
			<td>TEKNIK PENGELASAN</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>105</td>
			<td>DESAIN & PRODUKSI KRIA KULIT</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>36</td>
			<td>TEKNIK FABRIKASI LOGAM</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>106</td>
			<td>DESAIN & PRODUKSI KRIA KERAMIK</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>37</td>
			<td>TEKNIK GAMBAR LOGAM </td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>107</td>
			<td>DESAIN & PRODUKSI KRIA LOGAM</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>38</td>
			<td>TEKNIK PEMELIHARAAN MESIN </td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>108</td>
			<td>DESAIN & PRODUKSI KRIA KAYU</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>39</td>
			<td>TEKNIK KENDERAAN RINGAN </td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>109</td>
			<td>SENI MUSIK KLASIK</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>40</td>
			<td>TEKNIK SEPEDA MOTOR</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>110</td>
			<td>SENI MUSIK NON KLASIK</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>41</td>
			<td>TEKNIK PERBAIKAN BODI OTOMOTIF</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>111</td>
			<td>SENI TARI</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>				
		<tr class="textLeft contentIsi">
			<td>42</td>
			<td>TEKNIK ALAT BERAT</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>112</td>
			<td>SENI KERAWITAN</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>43</td>
			<td>TEKNIK OTOTRONIK</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>113</td>
			<td>SENI PEDALANGAN</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>44</td>
			<td>AIR FRAME DAN POWER PLANT</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>114</td>
			<td>SENI TEATER</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>45</td>
			<td>PEMESINAN PESAWAT UDARA</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>115</td>
			<td>USAHA PERJALANAN WISATA</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>46</td>
			<td>KONSTRUKSI BADAN PESAWAT</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>116</td>
			<td>AKOMODASI PERHOTELAN</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>47</td>
			<td>KELISTRIKAN PESAWAT UDARA</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>117</td>
			<td>JASA BOGA</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>48</td>
			<td>ELEKTRONIKA PESAWAT UDARA</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>118</td>
			<td>PATISERI</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>49</td>
			<td>PEMELI & PER INSTRUMEN ELEK PESAWAT</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>119</td>
			<td>KECANTIKAN KULIT</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>50</td>
			<td>TEKNIK KONSTRUKSI KAPAL BAJA</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>120</td>
			<td>KECANTIKAN RAMBUT</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>51</td>
			<td>TEKNIK KONSTRUKSI KAPAL KAYU</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>121</td>
			<td>BUSANA BUTIK</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>				
		<tr class="textLeft contentIsi">
			<td>52</td>
			<td>TEKNIK KONSTRUKSI KAPAL FIBERGLASS</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>122</td>
			<td>AGRIBISNIS PANGAN DAN HORTI</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>53</td>
			<td>TEKNIK INSTALASI MESIN KAPAL</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>123</td>
			<td>AGRI BISNIS PERKEBUNAN</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>54</td>
			<td>TEKNIK PENGELASAN KAPAL</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>124</td>
			<td>AGRIBISNIS PEMBIBITAN, KULTUR JAR</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>55</td>
			<td>TEKNIK KELISTRIKAN KAPAL</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>125</td>
			<td>AGRIBISNIS TERNAK RUMINANSIA</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>56</td>
			<td>TEKNIK GAMBAR RANCANG KAPAL</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>126</td>
			<td>AGRIBISNIS TERNAK UNGGAS</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>57</td>
			<td>TEKNIK INTERIOR KAPAL</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>127</td>
			<td>AGRIBISNIS ANEKA TERNAK</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>58</td>
			<td>TEKNIK PEMINTALAN SERAT BUATAN</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>128</td>
			<td>PERAWATAN KESEHATAN TERNAK</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>59</td>
			<td>TEKNIK PEMBUATAN BENANG</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>129</td>
			<td>AGRIBISNIS PERIKANAN</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>60</td>
			<td>TEKNIK PEMBUATAN KAIN</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>130</td>
			<td>AGRIBISNIS RUMPUT LAUT</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>61</td>
			<td>TEKNIK PENYEMPURNAAN TEKSTIL</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>131</td>
			<td>MEKANISASI PERTANIAN</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>				
		<tr class="textLeft contentIsi">
			<td>62</td>
			<td>GARMEN</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>132</td>
			<td>TEKNO PENGOLAH HASIL PERTANIANAN</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>63</td>
			<td>PERSIAPAN GRAFIKA</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>133</td>
			<td>PENGAWASAN MUTU</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>64</td>
			<td>PRODUKSI GRAFIKA</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>134</td>
			<td>PENYULUHAN PERTANIAN</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>65</td>
			<td>GEOLOGI PERTAMBANGAN</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>135</td>
			<td>KEHUTANAN</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>66</td>
			<td>TEKNIK INSTRUMENTASI GELAS</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>136</td>
			<td>ADMIN PERKANTORAN</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>67</td>
			<td>TEKNIK INSTRUMENTASI LOGAM</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>137</td>
			<td>AKUNTANSI</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>68</td>
			<td>KONTROLL PROSES</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>138</td>
			<td>PERBANKAN</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>69</td>
			<td>KONTROLL MEKANIK</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>139</td>
			<td>PEMASARAN</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="textLeft contentIsi">
			<td>70</td>
			<td>KIMIA ANALISIS</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>140</td>
			<td>LAINNYA</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
	</table>

	<?php endif;?>