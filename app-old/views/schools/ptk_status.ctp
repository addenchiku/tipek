<?php echo $this->element('nav_atas');?>
<?php if($kelas == 'sd'):?>
	<div class="msgbar msg_Info">
            <b>DAFTAR PTK SD/MI/SDLB BERDASARKAN STATUS KEPEGAWAIAN</b>
        </div>
            <table class="rekap persist-area">
                <thead>
                <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                    <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">KETERANGAN</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">PNS</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">PNSDIP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">PNSDEP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">GTY</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">PTY</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">GTTP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">GTTK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">GBP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">PTTK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GHS</td>
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
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >PNS</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >PNSDIP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >PNSDEP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >GTY</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >PTY</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >GTTP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >GTTK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >GPB</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >PTTK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >GHS</td>
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
            <b>DAFTAR PTK SMP/MTS/SMPLB BERDASARKAN STATUS KEPEGAWAIAN</b>
        </div>
            <table class="rekap persist-area">
                <thead>
                <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                    <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">KETERANGAN</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">PNS</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">PNSDIP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">PNSDEP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">GTY</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">PTY</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">GTTP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">GTTK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">GBP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">PTTK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GHS</td>
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
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >PNS</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >PNSDIP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >PNSDEP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >GTY</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >PTY</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >GTTP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >GTTK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >GPB</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >PTTK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >GHS</td>
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
            <b>DAFTAR PTK SMA/MA/SMALB BERDASARKAN STATUS KEPEGAWAIAN</b>
        </div>
            <table class="rekap persist-area">
                <thead>
                <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                    <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">KETERANGAN</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">PNS</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">PNSDIP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">PNSDEP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">GTY</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">PTY</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">GTTP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">GTTK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">GBP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">PTTK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GHS</td>
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
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >PNS</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >PNSDIP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >PNSDEP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >GTY</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >PTY</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >GTTP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >GTTK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >GPB</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >PTTK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >GHS</td>
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
            <b>DAFTAR PTK SMK/MAK BERDASARKAN STATUS KEPEGAWAIAN</b>
        </div>
            <table class="rekap persist-area">
                <thead>
                <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                    <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">KETERANGAN</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">PNS</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">PNSDIP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">PNSDEP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">GTY</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">PTY</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">GTTP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">GTTK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">GBP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">PTTK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">GHS</td>
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
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >PNS</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >PNSDIP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >PNSDEP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >GTY</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >PTY</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >GTTP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >GTTK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >GPB</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >PTTK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" >GHS</td>
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