<?php echo $this->element('nav_atas');?>
<?php if($kelas == 'sd'):?>
    <div class="msgbar msg_Info">
        <b>DAFTAR SISWA SD/MI/SDLB BERDASARKAN EKONOMI</b>
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
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">JUMLAH</td>
            </tr>
            <tr class="textLeft contentIsi">
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;" class="tip_south" title="Kelompok Ekonomi < 1 Juta">KELEKO < 1 JT</td>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">KELEKO 1 JT</td>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">KELEKO => 2 JT</td>
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
             <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELEKO < 1 JT</td>
             <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELEKO 1 JT</td>
             <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELEKO => 2 JT</td>
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
            <td><?php echo $record['School']['total_siswa_laki_kelompok_pendapatan1'];?></td>
            <td><?php echo $record['School']['total_siswa_perempuan_kelompok_pendapatan1'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_kelompok_pendapatan2'];?></td>
            <td><?php echo $record['School']['total_siswa_perempuan_kelompok_pendapatan2'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_kelompok_pendapatan3'];?></td>
            <td><?php echo $record['School']['total_siswa_perempuan_kelompok_pendapatan3'];?></td>
            <td><?php echo $record['School']['total_siswa_laki'];?></td>
            <td><?php echo $record['School']['total_siswa_perempuan'];?></td>
            <td><?php echo $record['School']['total_siswa'];?></td>
        </tr>
        <?php endforeach;
         else:?>
            <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Data tidak diketemukan</td></tr>
        <?php endif;?>

</table>
<?php elseif ($kelas == "smp"):?>
    <div class="msgbar msg_Info">
        <b>DAFTAR SISWA SMP/MTS/SMPLB BERDASARKAN EKONOMI</b>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;" class="tip_south" title="Kelompok Ekonomi < 1 Juta">KELEKO < 1 JT</td>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">KELEKO 1 JT</td>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">KELEKO => 2 JT</td>
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
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELEKO < 1 JT</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELEKO 1 JT</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELEKO => 2 JT</td>
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
                <td><?php echo $record['School']['total_siswa_laki_kelompok_pendapatan1'];?></td>
                <td><?php echo $record['School']['total_siswa_perempuan_kelompok_pendapatan1'];?></td>
                <td><?php echo $record['School']['total_siswa_laki_kelompok_pendapatan2'];?></td>
                <td><?php echo $record['School']['total_siswa_perempuan_kelompok_pendapatan2'];?></td>
                <td><?php echo $record['School']['total_siswa_laki_kelompok_pendapatan3'];?></td>
                <td><?php echo $record['School']['total_siswa_perempuan_kelompok_pendapatan3'];?></td>
                <td><?php echo $record['School']['total_siswa_laki'];?></td>
                <td><?php echo $record['School']['total_siswa_perempuan'];?></td>
                <td><?php echo $record['School']['total_siswa'];?></td>
            </tr>
            <?php endforeach;
             else:?>
                <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Data tidak diketemukan</td></tr>
            <?php endif;?>

    </table>
<?php elseif ($kelas == "sma"):?>
    <div class="msgbar msg_Info">
        <b>DAFTAR SISWA SMA/MA/SMALB BERDASARKAN EKONOMI</b>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;" class="tip_south" title="Kelompok Ekonomi < 1 Juta">KELEKO < 1 JT</td>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">KELEKO 1 JT</td>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">KELEKO => 2 JT</td>
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
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELEKO < 1 JT</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELEKO 1 JT</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELEKO => 2 JT</td>
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
            <td><?php echo $record['School']['total_siswa_laki_kelompok_pendapatan1'];?></td>
            <td><?php echo $record['School']['total_siswa_perempuan_kelompok_pendapatan1'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_kelompok_pendapatan2'];?></td>
            <td><?php echo $record['School']['total_siswa_perempuan_kelompok_pendapatan2'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_kelompok_pendapatan3'];?></td>
            <td><?php echo $record['School']['total_siswa_perempuan_kelompok_pendapatan3'];?></td>
            <td><?php echo $record['School']['total_siswa_laki'];?></td>
            <td><?php echo $record['School']['total_siswa_perempuan'];?></td>
            <td><?php echo $record['School']['total_siswa'];?></td>
        </tr>
        <?php endforeach;
         else:?>
            <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Data tidak diketemukan</td></tr>
        <?php endif;?>
    </table>
<?php elseif ($kelas == "smk"):?>
    <div class="msgbar msg_Info">
        <b>DAFTAR SISWA SMK/MK BERDASARKAN EKONOMI</b>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;" class="tip_south" title="Kelompok Ekonomi < 1 Juta">KELEKO < 1 JT</td>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">KELEKO 1 JT</td>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">KELEKO => 2 JT</td>
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
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELEKO < 1 JT</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELEKO 1 JT</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELEKO => 2 JT</td>
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
            <td><?php echo $record['School']['total_siswa_laki_kelompok_pendapatan1'];?></td>
            <td><?php echo $record['School']['total_siswa_perempuan_kelompok_pendapatan1'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_kelompok_pendapatan2'];?></td>
            <td><?php echo $record['School']['total_siswa_perempuan_kelompok_pendapatan2'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_kelompok_pendapatan3'];?></td>
            <td><?php echo $record['School']['total_siswa_perempuan_kelompok_pendapatan3'];?></td>
            <td><?php echo $record['School']['total_siswa_laki'];?></td>
            <td><?php echo $record['School']['total_siswa_perempuan'];?></td>
            <td><?php echo $record['School']['total_siswa'];?></td>
        </tr>
        <?php endforeach;
         else:?>
            <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Data tidak diketemukan</td></tr>
        <?php endif;?>
    </table>
    <?php endif;?>