<?php echo $this->element('nav_atas');?>
<?php if($kelas == 'sd'):?>
	<div class="msgbar msg_Info">
            <b>DAFTAR PTK SD/MI/SDLB BERDASARKAN STATUS KEPEGAWAIAN</b>
        </div>
            <table class="rekap persist-area">
                <thead>
                <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                    <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">KETERANGAN</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Pegawai Negeri Sipil">PNS</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="PNS Diperbantukan">PNSDIP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="PNS Departemen Agama">PNSDEP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Guru Tetap Yayasan">GTY</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Pegawai Tetap Yayasan">PTY</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Guru Tidak Tetap Provinsi">GTTP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Guru Tidak Tetap Kabupaten">GTTK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Guru Bantu Provinsi">GBP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Pegawai Tidak Tetap Kabupaten">PTTK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Guru Honorer Sekolah">GHS</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Jlh">JUMLAH</td>
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
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Pegawai Negeri Sipil">PNS</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="PNS Diperbantukan">PNSDIP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="PNS Departemen Agama">PNSDEP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Guru Tetap Yayasan">GTY</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Pegawai Tetap Yayasan">PTY</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Guru Tidak Tetap Provinsi">GTTP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Guru Tidak Tetap Kabupaten">GTTK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Guru Bantu Provinsi">GBP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Pegawai Tidak Tetap Kabupaten">PTTK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Guru Honorer Sekolah">GHS</td>
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
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Pegawai Negeri Sipil">PNS</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="PNS Diperbantukan">PNSDIP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="PNS Departemen Agama">PNSDEP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Guru Tetap Yayasan">GTY</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Pegawai Tetap Yayasan">PTY</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Guru Tidak Tetap Provinsi">GTTP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Guru Tidak Tetap Kabupaten">GTTK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Guru Bantu Provinsi">GBP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Pegawai Tidak Tetap Kabupaten">PTTK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Guru Honorer Sekolah">GHS</td>
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
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Pegawai Negeri Sipil">PNS</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="PNS Diperbantukan">PNSDIP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="PNS Departemen Agama">PNSDEP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Guru Tetap Yayasan">GTY</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Pegawai Tetap Yayasan">PTY</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Guru Tidak Tetap Provinsi">GTTP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Guru Tidak Tetap Kabupaten">GTTK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Guru Bantu Provinsi">GBP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Pegawai Tidak Tetap Kabupaten">PTTK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Guru Honorer Sekolah">GHS</td>
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
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Pegawai Negeri Sipil">PNS</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="PNS Diperbantukan">PNSDIP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="PNS Departemen Agama">PNSDEP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Guru Tetap Yayasan">GTY</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Pegawai Tetap Yayasan">PTY</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Guru Tidak Tetap Provinsi">GTTP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Guru Tidak Tetap Kabupaten">GTTK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Guru Bantu Provinsi">GBP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Pegawai Tidak Tetap Kabupaten">PTTK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Guru Honorer Sekolah">GHS</td>
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
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Pegawai Negeri Sipil">PNS</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="PNS Diperbantukan">PNSDIP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="PNS Departemen Agama">PNSDEP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Guru Tetap Yayasan">GTY</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Pegawai Tetap Yayasan">PTY</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Guru Tidak Tetap Provinsi">GTTP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Guru Tidak Tetap Kabupaten">GTTK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Guru Bantu Provinsi">GBP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Pegawai Tidak Tetap Kabupaten">PTTK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Guru Honorer Sekolah">GHS</td>
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
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Pegawai Negeri Sipil">PNS</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="PNS Diperbantukan">PNSDIP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="PNS Departemen Agama">PNSDEP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Guru Tetap Yayasan">GTY</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Pegawai Tetap Yayasan">PTY</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Guru Tidak Tetap Provinsi">GTTP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Guru Tidak Tetap Kabupaten">GTTK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Guru Bantu Provinsi">GBP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Pegawai Tidak Tetap Kabupaten">PTTK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Guru Honorer Sekolah">GHS</td>
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
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Pegawai Negeri Sipil">PNS</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="PNS Diperbantukan">PNSDIP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="PNS Departemen Agama">PNSDEP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Guru Tetap Yayasan">GTY</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Pegawai Tetap Yayasan">PTY</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Guru Tidak Tetap Provinsi">GTTP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Guru Tidak Tetap Kabupaten">GTTK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Guru Bantu Provinsi">GBP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Pegawai Tidak Tetap Kabupaten">PTTK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Guru Honorer Sekolah">GHS</td>
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