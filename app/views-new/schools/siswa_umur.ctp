<?php echo $this->element('nav_atas');?>
<?php if($kelas == 'sd'):?>
    <div class="msgbar msg_Info">
        <b>DAFTAR SISWA SD/MI/SDLB BERDASARKAN UMUR</b>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;" class="tip_south" title="Kelompok Umur 7 th">KELUM <= 7TH</td>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">KELUM 8 TH</td>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">KELUM 9 TH</td>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">KELUM 10 TH</td>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">KELUM 11 TH</td>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">KELUM => 12 TH</td>
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
             <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELUM <= 7</td>
             <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELUM 8 TH</td>
             <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELUM 9</td>
             <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELUM 10</td>
             <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELUM 11</td>
             <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELUM => 12</td>
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
            <td><?php echo $record['School']['total_siswa_laki_kelompok1'];?></td>
            <td><?php echo $record['School']['total_siswa_perempuan_kelompok1'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_kelompok2'];?></td>
            <td><?php echo $record['School']['total_siswa_perempuan_kelompok2'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_kelompok3'];?></td>
            <td><?php echo $record['School']['total_siswa_perempuan_kelompok3'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_kelompok4'];?></td>
            <td><?php echo $record['School']['total_siswa_perempuan_kelompok4'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_kelompok5'];?></td>
            <td><?php echo $record['School']['total_siswa_perempuan_kelompok5'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_kelompok6'];?></td>
            <td><?php echo $record['School']['total_siswa_perempuan_kelompok6'];?></td>

            <td><?php echo $record['School']['total_siswa_laki'];?></td>
            <td><?php echo $record['School']['total_siswa_perempuan'];?></td>
            <td><?php echo $record['School']['total_siswa'];?></td>
        </tr>
        <?php endforeach;
         else:?>
            <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Data tidak ditemukan</td></tr>
        <?php endif;?>

</table>
<?php elseif ($kelas == "smp"):?>
    <div class="msgbar msg_Info">
        <b>DAFTAR SISWA SMP/MTS/SMPLB BERDASARKAN UMUR</b>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;" class="tip_south" title="Kelompok Umur dibawah atau sama dengan 12 th">KELUM <= 12TH</td>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">KELUM 13 TH</td>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">KELUM 14 TH</td>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">KELUM > 14 TH</td>
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
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELUM <= 12</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELUM 13</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELUM 14</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELUM > 14</td>
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
            <td><?php echo $record['School']['total_siswa_laki_kelompok7'];?></td>
            <td><?php echo $record['School']['total_siswa_perempuan_kelompok7'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_kelompok8'];?></td>
            <td><?php echo $record['School']['total_siswa_perempuan_kelompok8'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_kelompok9'];?></td>
            <td><?php echo $record['School']['total_siswa_perempuan_kelompok9'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_kelompok10'];?></td>
            <td><?php echo $record['School']['total_siswa_perempuan_kelompok10'];?></td>
            <td><?php echo $record['School']['total_siswa_laki'];?></td>
            <td><?php echo $record['School']['total_siswa_perempuan'];?></td>
            <td><?php echo $record['School']['total_siswa'];?></td>
        </tr>
        <?php endforeach;
         else:?>
            <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Data tidak ditemukan</td></tr>
        <?php endif;?>

    </table>
<?php elseif ($kelas == "sma"):?>
    <div class="msgbar msg_Info">
        <b>DAFTAR SISWA SMA/MA/SMALB BERDASARKAN UMUR</b>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;" class="tip_south" title="Kelompok Umur dibawah atau sama dengan 14 th">KELUM <= 14TH</td>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">KELUM 15 TH</td>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">KELUM 16 TH</td>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">KELUM > 17 TH</td>
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
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELUM <= 14</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELUM 15</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELUM 16</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELUM > 17</td>
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
            <td><?php echo $record['School']['total_siswa_laki_kelompok11'];?></td>
            <td><?php echo $record['School']['total_siswa_perempuan_kelompok11'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_kelompok12'];?></td>
            <td><?php echo $record['School']['total_siswa_perempuan_kelompok12'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_kelompok13'];?></td>
            <td><?php echo $record['School']['total_siswa_perempuan_kelompok13'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_kelompok14'];?></td>
            <td><?php echo $record['School']['total_siswa_perempuan_kelompok14'];?></td>
            <td><?php echo $record['School']['total_siswa_laki'];?></td>
            <td><?php echo $record['School']['total_siswa_perempuan'];?></td>
            <td><?php echo $record['School']['total_siswa'];?></td>
        </tr>
        <?php endforeach;
         else:?>
            <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Data tidak ditemukan</td></tr>
        <?php endif;?>

    </table>
<?php elseif ($kelas == "smk"):?>
    <div class="msgbar msg_Info">
        <b>DAFTAR SISWA SMK/MK BERDASARKAN UMUR</b>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;" class="tip_south" title="Kelompok Umur dibawah atau sama dengan 14 th">KELUM <= 14TH</td>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">KELUM 15 TH</td>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">KELUM 16 TH</td>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">KELUM > 17 TH</td>
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
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELUM <= 14</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELUM 15</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELUM 16</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELUM > 17</td>
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
            <td><?php echo $record['School']['total_siswa_laki_kelompok11'];?></td>
            <td><?php echo $record['School']['total_siswa_perempuan_kelompok11'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_kelompok12'];?></td>
            <td><?php echo $record['School']['total_siswa_perempuan_kelompok12'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_kelompok13'];?></td>
            <td><?php echo $record['School']['total_siswa_perempuan_kelompok13'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_kelompok14'];?></td>
            <td><?php echo $record['School']['total_siswa_perempuan_kelompok14'];?></td>
            <td><?php echo $record['School']['total_siswa_laki'];?></td>
            <td><?php echo $record['School']['total_siswa_perempuan'];?></td>
            <td><?php echo $record['School']['total_siswa'];?></td>
        </tr>
        <?php endforeach;
         else:?>
            <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Data tidak ditemukan</td></tr>
        <?php endif;?>

    </table>
<?php endif;?>