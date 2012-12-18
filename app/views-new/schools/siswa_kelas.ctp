<?php echo $this->element('nav_atas');?>
<?php if($kelas == 'sd'):?>
    <!--Quick Actions-->
    <div class="msgbar msg_Info">
        <b>DAFTAR SISWA SD/MI/SDLB BERDASARKAN KELAS</b>
    </div>
    <table class="rekap persist-area">
        <thead>
            <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">KETERANGAN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;"class="tip_south" title="Sekolah Dasar Negeri">SDN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;"class="tip_south" title="Sekolah Dasar Swasta">SDS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;"class="tip_south" title="Sekolah Luar Biasa Negeri">SLBN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;"class="tip_south" title="Sekolah Luar Biasa Swasta">SLBS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;"class="tip_south" title="Madrasah Ibtidaiyah Negeri">MIN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;"class="tip_south" title="Madrasah Ibtidaiyah Swasta">MIS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">SEKOLAH</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Madrasah">MADRAS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">JUMLAH</td>
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
             <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELAS1</td>
             <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELAS2</td>
             <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELAS3</td>
             <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELAS4</td>
             <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELAS5</td>
             <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELAS6</td>
             <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3" >JUMLAH</td>
         </tr>
         <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
             <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">L</td>
             <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">P</td>
             <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">L</td>
             <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">P</td>
            <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">L</td>
             <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">P</td>
             <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">L</td>
             <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">P</td>
             <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">L</td>
             <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">P</td>
            <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">L</td>
             <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">P</td>
             <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">L</td>
             <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">P</td>
             <td style="background-color:#999999; color:#fff;font-size:12px;">L+P</td>
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
        <td><?php echo $record['School']['total_siswa_laki_kelas1'];?></td>
        <td><?php echo $record['School']['total_siswa_perempuan_kelas1'];?></td>
        <td><?php echo $record['School']['total_siswa_laki_kelas2'];?></td>
        <td><?php echo $record['School']['total_siswa_perempuan_kelas2'];?></td>
        <td><?php echo $record['School']['total_siswa_laki_kelas3'];?></td>
        <td><?php echo $record['School']['total_siswa_perempuan_kelas3'];?></td>
        <td><?php echo $record['School']['total_siswa_laki_kelas4'];?></td>
        <td><?php echo $record['School']['total_siswa_perempuan_kelas4'];?></td>
        <td><?php echo $record['School']['total_siswa_laki_kelas5'];?></td>
        <td><?php echo $record['School']['total_siswa_perempuan_kelas5'];?></td>
        <td><?php echo $record['School']['total_siswa_laki_kelas6'];?></td>
        <td><?php echo $record['School']['total_siswa_perempuan_kelas6'];?></td>
        <td><?php echo $record['School']['total_siswa_laki'];?></td>
        <td><?php echo $record['School']['total_siswa_perempuan'];?></td>
        <td><?php echo $record['School']['total_siswa'];?></td>
    </tr>
    <?php endforeach;
     else:?>
        <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Tidak ditemukan data</td></tr>
    <?php endif;?>

</table>

<?php elseif($kelas == 'smp'):?>

    <div class="msgbar msg_Info">
        <b>DAFTAR SISWA SMP/MTS/SMPLB BERDASARKAN KELAS</b>
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
                <td style="background-color:#999999; color:#fff;font-size:12px;">JUMLAH</td>
            </tr>
            <tr class="textLeft contentIsi">
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">LAKI-LAKI</td>
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
            <tr class="textLeft contentIsi">
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">PEREMPUAN</td>
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
            <tr class="textLeft contentIsi">
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">JUMLAH</td>
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
        </thead>
    </table>
    <table class="rekap persist-area">
        <thead class="kepalatable persist-header">
            <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                <td style="background-color:#999999; color:#fff;font-size:12px;" rowspan="2">NO</td>
                <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;" rowspan="2">NAMA SEKOLAH</td>
                <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;" rowspan="2">NAMA KEPSEK</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELAS1</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELAS2</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELAS3</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3" >JUMLAH</td>
            </tr>
            <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">L</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">P</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">L</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">P</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">L</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">P</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">L</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">P</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">L+P</td>
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
        <td><?php echo $record['School']['total_siswa_laki_kelas7'];?></td>
        <td><?php echo $record['School']['total_siswa_perempuan_kelas7'];?></td>
        <td><?php echo $record['School']['total_siswa_laki_kelas8'];?></td>
        <td><?php echo $record['School']['total_siswa_perempuan_kelas8'];?></td>
        <td><?php echo $record['School']['total_siswa_laki_kelas9'];?></td>
        <td><?php echo $record['School']['total_siswa_perempuan_kelas9'];?></td>
        <td><?php echo $record['School']['total_siswa_laki'];?></td>
        <td><?php echo $record['School']['total_siswa_perempuan'];?></td>
        <td><?php echo $record['School']['total_siswa'];?></td>
    </tr>
    <?php endforeach;
     else:?>
        <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Tidak ditemukan data</td></tr>
    <?php endif;?>

    </table>
<?php elseif ($kelas == "sma"):?>
    <div class="msgbar msg_Info">
        <b>DAFTAR SISWA SMA/MA/SMALB BERDASARKAN KELAS</b>
    </div>
    <table class="rekap persist-area">
        <thead>
            <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">KETERANGAN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Sekolah Menengan Atas Negeri/Luar Biasa">SMA/SMALBN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Sekolah Menengan Atas Swasta/Luar Biasa">SMA/SMALBS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Madrasah Aliyah Negeri">MAN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Madrasah Aliyah Swasta">MAS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kelas 1">KLS1</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kelas 2 IPA">2IPA</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kelas 2 IPS">2IPS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kelas 2 Bahasa">2BHS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kelas 2 Agama">2AGM</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kelas 3 IPA">3IPA</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kelas 3 IPS">3IPS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kelas 3 Bahasa">3BHS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kelas 3 Agama">3AGM</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Jumlah">JUMLAH</td>
            </tr>
            <tr class="textLeft contentIsi">
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">LAKI-LAKI</td>
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
            <tr class="textLeft contentIsi">
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">PEREMPUAN</td>
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
            <tr class="textLeft contentIsi">
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">JUMLAH</td>
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
        </thead>
    </table>
    <table class="rekap persist-area">
        <thead class="kepalatable persist-header">
            <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                <td style="background-color:#999999; color:#fff;font-size:12px;" rowspan="2">NO</td>
                <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;" rowspan="2">NAMA SEKOLAH</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" rowspan="2">KELAS1</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="5">KELAS2</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="5">KELAS3</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3" >JUMLAH</td>
            </tr>
            <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Ilmu Pengetahuan Alam">IPA</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Ilmu Pengetahuan Sosial">IPS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Bahasa">BHS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Agama">AGM</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Jumlah">JLH</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Ilmu Pengetahuan Alam">IPA</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Ilmu Pengetahuan Sosial">IPS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Bahasa">BHS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Agama">AGM</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Jumlah">JLH</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-Laki">L</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">P</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">L+P</td>
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

        <td><?php echo $record['School']['total_siswa_kelas10'];?></td>
        <td><?php echo $record['School']['total_siswa_kelas11_ipa'];?></td>
        <td><?php echo $record['School']['total_siswa_kelas11_ips'];?></td>
        <td><?php echo $record['School']['total_siswa_kelas11_bahasa'];?></td>
        <td><?php echo $record['School']['total_siswa_kelas11_agama'];?></td>
        <td><?php echo $record['School']['total_siswa_kelas11'];?></td>
        <td><?php echo $record['School']['total_siswa_kelas12_ipa'];?></td>
        <td><?php echo $record['School']['total_siswa_kelas12_ips'];?></td>
        <td><?php echo $record['School']['total_siswa_kelas12_bahasa'];?></td>
        <td><?php echo $record['School']['total_siswa_kelas12_agama'];?></td>
        <td><?php echo $record['School']['total_siswa_kelas12'];?></td>
        <td><?php echo $record['School']['total_siswa_laki'];?></td>
        <td><?php echo $record['School']['total_siswa_perempuan'];?></td>
        <td><?php echo $record['School']['total_siswa'];?></td>
    </tr>
    <?php endforeach;
     else:?>
        <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Tidak ditemukan data</td></tr>
    <?php endif;?>
    </table>

<?php elseif ($kelas == "smk"):?>
    <div class="msgbar msg_Info">
            <b>DAFTAR SISWA SMK/MK BERDASARKAN KELAS</b>
        </div>
            <table class="rekap persist-area">
                <thead>
                <tr class="textLeft contentIsi">
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Teknik Bangunan">J1</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Teknik Ketenaga Listrikan">J4</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Teknik Otomotif">J7</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Teknologi Tektil">J10</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Instrumentasi Industri">J13</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Teknik Industri">J16</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Teknik Telekomunikasi">J19</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kesehatan">J22</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Agribisnis Produk Ternak">J25</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Agrbisnis Hasil Pertanian">J28</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perkantoran">J31</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Multimedia">J34</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Desain Dan Produksi Kria">J37</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Tata Boga">J40</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kelas3">KL3</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Swasta">SW</td>
                    <td>&nbsp;</td>
                </tr>
                <tr class="textLeft contentIsi">
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Tenknik Plumbing Dan Sanitasi">J2</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Teknik Pendinginan Dan Tata Ruang">J5</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Teknologi Pesawat Udara">J8</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Teknik Grafika">J11</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Tekinik Kimia">J14</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Teknik Perminyakan">J17</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Teknik komputer Dan Informatika">J20</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perawatan Sosial">J23</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Agribisnis Produksi Dan Sumber Daya Perairan">J26</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Penyuluhan Pertanian">J29</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Akutansi">J32</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Tata Busana">J35</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Seni Pertunjukan">J38</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kelas1">KL1</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-Laki">LK</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Negeri">NG</td>
                    <td>&nbsp;</td>
                </tr>
                <tr class="textLeft contentIsi">
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Teknik Survey Dan Pemetaan">J3</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Teknik Mesin">J6</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Teknik Perkapalan">J9</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Geologi Pertambangan">J12</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Pelayaran">J15</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Teknik Elektronika">J18</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Teknik Broadcasting">J21</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Agribisnis Produksi Tanaman">J24</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mekanisasi Perrtanian">J27</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kehutanan">J30</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perhotelan">J33</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Seni Rupa">J36</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Pariwisata">J39</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Kelas2">KL2</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">PR</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Jumlah">JLH</td>
                    <td>&nbsp;</td>
                </tr>
                </thead>
            </table>
            <table class="rekap persist-area">
                <thead class="kepalatable persist-header">
                <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                    <td style="background-color:#999999; color:#fff;font-size:12px;" rowspan="2">NO</td>
                    <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;" rowspan="2">NAMA SEKOLAH</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="4" >JLH SISWA</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="6">KELAS1</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="6">KELAS2</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="6">KELAS3</td>
                </tr>
                <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="KL1">KL1</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="KL2">KL2</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">KL3</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">JLH</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">K1</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">K2</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">K3</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">K4</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">K5</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">JLH</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">K1</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">K2</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">K3</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">K4</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">K5</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">JLH</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">K1</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">K2</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">K3</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">K4</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">K5</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;">JLH</td>
                </tr>
                </thead>
                <tr class="textLeft contentIsi">
                    <td style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;" colspan="24">TEKNIK BANGUNAN, PLUMBING DAN SANITASI, SURVEY DAN PEMETAAN, KETENAGALISTRIKAN, PENDINGIN DAN TATA RUANG</td>
                </tr>
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
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
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
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
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
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr class="textLeft contentIsi">
                    <td style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;" colspan="24">TEKNIK MESIN, OTOMOTIF, PESAWAT UDARA, PERKAPALAN, TEKNOLOGI TEKSTIL</td>
                </tr>
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
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
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
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
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
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr class="textLeft contentIsi">
                    <td style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;" colspan="24">TEKNIK GRAFIKA, GEOLOGI PEERTAMBANGAN, INSTRUMENTASI INDUSTRI, KIMIA, PELAYARAN</td>
                </tr>
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
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
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
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
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
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr class="textLeft contentIsi">
                    <td style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;" colspan="24">TEKNIK INDUSTRI, PERMINYAKAN, ELEKTRONIKA, TELEKOMUNIKASI, KOMPUTER DAN INFORMATIKA</td>
                </tr>
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
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
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
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
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
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr class="textLeft contentIsi">
                    <td style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;" colspan="24">TEKNIK BROADCASTING, KESEHATAN, PERAWATAN SOSIAL, AGRIBISNIS PRODUKSI TANAMAN, AGRIBISNIS PRODUKSI TERNAK</td>
                </tr>
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
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
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
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
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
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr class="textLeft contentIsi">
                    <td style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;" colspan="24">AGRIBISNIS SD PERAIRAN, MEKANISASI PERTANIAN, AGRIBISNIS HASIL PERTANIAN, PENYULUHAN PERTANIAN, KEHUTANAN</td>
                </tr>
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
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
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
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
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
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>

                <tr class="textLeft contentIsi">
                    <td style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;" colspan="24">PERKANTORAN, AKUNTANSI, PERHOTELAN, MULTIMEDIA, TATABUSANA</td>
                </tr>
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
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
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
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
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
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>

                <tr class="textLeft contentIsi">
                    <td style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;" colspan="24">SENI RUPA, DESAIN DAN PRODUKSI KRIA, SENI PERTUNJUKAN, PARIWISATA, TATABOGA</td>
                </tr>
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
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
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
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
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
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            </table>


<?php endif;?>