<?php echo $this->element('nav_atas');?>
<?php if($kelas == 'sd'):?>
	<div class="msgbar msg_Info">
            <b>DAFTAR SISWA SD/MI/SDLB BERPRESTASI</b>
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
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">SEKOLAH</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">MADRAS</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">JUMLAH</td>
                </tr>
                <tr class="textLeft contentIsi">
                    <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">SAINS</td>
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
                    <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">KESENIAN</td>
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
                    <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">OLAHRAGA</td>
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
                    <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">SEKOLAH</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">KECAMATAN</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">KABUPATEN</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">PROVINSI</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">NASIONAL</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">INTERNASIONAL</td>
                </tr>
				<tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
					<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Sains">S</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kesenian">K</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Olahraga">O</td>
					<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Sains">S</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kesenian">K</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Olahraga">O</td>
					<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Sains">S</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kesenian">K</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Olahraga">O</td>
					<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Sains">S</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kesenian">K</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Olahraga">O</td>
					<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Sains">S</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kesenian">K</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Olahraga">O</td>
					<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Sains">S</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kesenian">K</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Olahraga">O</td>
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
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            </table>
            <?php elseif ($kelas == "smp"):?>
            <div class="msgbar msg_Info">
            <b>DAFTAR SISWA SMP/MTS/SMPLB BERPRESTASI</b>
        </div>
            <table class="rekap persist-area">
                <thead>
                <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                    <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">KETERANGAN</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Negeri">NEGERI</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Swasta">SWASTA</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Sekolah">SEK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Madrasah">MAD</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kelas 1">KL1</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kelas 2">KL2</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kelas 3">KL3</td>					
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">L</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">P</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Tingkat Sekolah">TKS</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Tingkat Kecamatan">TKC</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Tingkat Kabupaten">TKK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Tingkat Provinsi">TKP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Tingkat Nasional">TKN</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Tingkat Internasional">TKI</td>					
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Jumlah">JUMLAH</td>
                </tr>
                <tr class="textLeft contentIsi">
                    <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">SAINS</td>
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
                    <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">KESENIAN</td>
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
                    <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">OLAHRAGA</td>
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
                </tr>
				</thead>
			</table>
			<table class="rekap persist-area">
                <thead class="kepalatable persist-header">
				<tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
					<td style="background-color:#999999; color:#fff;font-size:12px;" rowspan="2">NO</td>
                    <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;" rowspan="2">NAMA SEKOLAH</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">SEKOLAH</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">KECAMATAN</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">KABUPATEN</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">PROVINSI</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">NASIONAL</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">INTERNASIONAL</td>
                </tr>
				<tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
					<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Sains">S</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kesenian">K</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Olahraga">O</td>
					<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Sains">S</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kesenian">K</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Olahraga">O</td>
					<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Sains">S</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kesenian">K</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Olahraga">O</td>
					<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Sains">S</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kesenian">K</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Olahraga">O</td>
					<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Sains">S</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kesenian">K</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Olahraga">O</td>
					<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Sains">S</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kesenian">K</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Olahraga">O</td>
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
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            </table>

            <?php elseif ($kelas == "sma"):?>
            <div class="msgbar msg_Info">
            <b>DAFTAR SISWA SMA/MA/SMALB BERPRESTASI</b>
        </div>
            <table class="rekap persist-area">
                <thead>
                <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                    <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">KETERANGAN</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Negeri">NEGERI</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Swasta">SWASTA</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Sekolah">SEK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Madrasah">MAD</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kelas 1">KL1</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kelas 2">KL2</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kelas 3">KL3</td>					
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">L</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">P</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Tingkat Sekolah">TKS</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Tingkat Kecamatan">TKC</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Tingkat Kabupaten">TKK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Tingkat Provinsi">TKP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Tingkat Nasional">TKN</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Tingkat Internasional">TKI</td>					
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Jumlah">JUMLAH</td>
                </tr>
                <tr class="textLeft contentIsi">
                    <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">SAINS</td>
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
                    <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">KESENIAN</td>
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
                    <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">OLAHRAGA</td>
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
                </tr>
				</thead>
			</table>
			<table class="rekap persist-area">
                <thead class="kepalatable persist-header">
				<tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
					<td style="background-color:#999999; color:#fff;font-size:12px;" rowspan="2">NO</td>
                    <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;" rowspan="2">NAMA SEKOLAH</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">SEKOLAH</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">KECAMATAN</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">KABUPATEN</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">PROVINSI</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">NASIONAL</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">INTERNASIONAL</td>
                </tr>
				<tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
					<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Sains">S</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kesenian">K</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Olahraga">O</td>
					<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Sains">S</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kesenian">K</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Olahraga">O</td>
					<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Sains">S</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kesenian">K</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Olahraga">O</td>
					<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Sains">S</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kesenian">K</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Olahraga">O</td>
					<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Sains">S</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kesenian">K</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Olahraga">O</td>
					<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Sains">S</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kesenian">K</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Olahraga">O</td>
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
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            </table>

            <?php elseif ($kelas == "smk"):?>
            <div class="msgbar msg_Info">
            <b>DAFTAR SISWA SMK/MK BERPRESTASI</b>
        </div>
            <table class="rekap persist-area">
                <thead>
                <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                    <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">KETERANGAN</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Negeri">NEGERI</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Swasta">SWASTA</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Sekolah">SEK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Madrasah">MAD</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kelas 1">KL1</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kelas 2">KL2</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kelas 3">KL3</td>					
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">L</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">P</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Tingkat Sekolah">TKS</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Tingkat Kecamatan">TKC</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Tingkat Kabupaten">TKK</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Tingkat Provinsi">TKP</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Tingkat Nasional">TKN</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Tingkat Internasional">TKI</td>					
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Jumlah">JUMLAH</td>
                </tr>
                <tr class="textLeft contentIsi">
                    <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">SAINS</td>
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
                    <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">KESENIAN</td>
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
                    <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">OLAHRAGA</td>
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
                </tr>
				</thead>
			</table>
			<table class="rekap persist-area">
                <thead class="kepalatable persist-header">
				<tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
					<td style="background-color:#999999; color:#fff;font-size:12px;" rowspan="2">NO</td>
                    <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;" rowspan="2">NAMA SEKOLAH</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">SEKOLAH</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">KECAMATAN</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">KABUPATEN</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">PROVINSI</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">NASIONAL</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">INTERNASIONAL</td>
                </tr>
				<tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
					<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Sains">S</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kesenian">K</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Olahraga">O</td>
					<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Sains">S</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kesenian">K</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Olahraga">O</td>
					<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Sains">S</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kesenian">K</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Olahraga">O</td>
					<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Sains">S</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kesenian">K</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Olahraga">O</td>
					<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Sains">S</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kesenian">K</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Olahraga">O</td>
					<td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Sains">S</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kesenian">K</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Olahraga">O</td>
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
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            </table>
            <?php endif;?>