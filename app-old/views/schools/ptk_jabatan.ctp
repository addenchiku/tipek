<?php echo $this->element('nav_atas');?>
<?php if($kelas == 'sd'):?>
	<div class="msgbar msg_Info">
            <b>DAFTAR PTK SD/MI/SDLB BERDASARKAN JABATAN</b>
        </div>
            <table class="rekap persist-area">
                <thead>
                <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                    <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">KETERANGAN</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">GURU</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">KSK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">KPS</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">TTP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">KTA</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">TA</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">KLB</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">TLB</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">LAB</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">PGS</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">JUMLAH</td>
                </tr>
                <tr class="textLeft contentIsi">
                    <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">LAKI-LAKI</td>
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
                    <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">PEREMPUAN</td>
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
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >GURU</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >KSK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >KPS</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >TTP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >KTA</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >TA</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >KLB</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >TLB</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >LAB</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >PGS</td>
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
                </tr>				
            </table>
            <?php elseif ($kelas == "smp"):?>
            <div class="msgbar msg_Info">
            <b>DAFTAR PTK SMP/MTS/SMPLB BERDASARKAN JABATAN</b>
        </div>
            <table class="rekap persist-area">
                <thead>
                <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                    <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">KETERANGAN</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">GURU</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">KSK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">KPS</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">TTP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">KTA</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">TA</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">KLB</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">TLB</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">LAB</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">PGS</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">JUMLAH</td>
                </tr>
                <tr class="textLeft contentIsi">
                    <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">LAKI-LAKI</td>
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
                    <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">PEREMPUAN</td>
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
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >GURU</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >KSK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >KPS</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >TTP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >KTA</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >TA</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >KLB</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >TLB</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >LAB</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >PGS</td>
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
                </tr>				
            </table>

            <?php elseif ($kelas == "sma"):?>
            <div class="msgbar msg_Info">
            <b>DAFTAR PTK SMA/MA/SMALB BERDASARKAN JABATAN</b>
        </div>
            <table class="rekap persist-area">
                <thead>
                <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                    <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">KETERANGAN</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">GURU</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">KSK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">KPS</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">TTP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">KTA</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">TA</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">KLB</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">TLB</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">LAB</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">PGS</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">JUMLAH</td>
                </tr>
                <tr class="textLeft contentIsi">
                    <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">LAKI-LAKI</td>
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
                    <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">PEREMPUAN</td>
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
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >GURU</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >KSK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >KPS</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >TTP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >KTA</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >TA</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >KLB</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >TLB</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >LAB</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >PGS</td>
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
                </tr>				
            </table>

            <?php elseif ($kelas == "smk"):?>
            <div class="msgbar msg_Info">
            <b>DAFTAR PTK SMK/MK BERDASARKAN JABATAN</b>
        </div>
            <table class="rekap persist-area">
                <thead>
                <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                    <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">KETERANGAN</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">GURU</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">KSK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">KPS</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">TTP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">KTA</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">TA</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">KLB</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">TLB</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">LAB</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">PGS</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">JUMLAH</td>
                </tr>
                <tr class="textLeft contentIsi">
                    <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">LAKI-LAKI</td>
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
                    <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">PEREMPUAN</td>
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
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >GURU</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >KSK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >KPS</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >TTP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >KTA</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >TA</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >KLB</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >TLB</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >LAB</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >PGS</td>
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
                </tr>				
            </table>

            <?php endif;?>