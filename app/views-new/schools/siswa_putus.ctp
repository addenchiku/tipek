<?php echo $this->element('nav_atas');?>
<?php if($kelas == 'sd'):?>
    <div class="msgbar msg_Info">
        <b>DAFTAR SISWA SD/MI/SDLB MENGULANG, MUTASI DAN PUTUS</b>
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
                <td style="background-color:#999999; color:#fff;font-size:12px;">JUMLAH</td>
            </tr>
            <tr class="textLeft contentIsi">
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">MENGULANG</td>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">MUTASI</td>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">PUTUS SEKOLAH</td>
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
               <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">KELAS1</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">KELAS2</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">KELAS3</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">KELAS4</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">KELAS5</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">KELAS6</td>
           </tr>
           <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
               <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mengulang">U</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mutasi">M</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Putus Sekolah">P</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mengulang">U</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mutasi">M</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Putus Sekolah">P</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mengulang">U</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mutasi">M</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Putus Sekolah">P</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mengulang">U</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mutasi">M</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Putus Sekolah">P</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mengulang">U</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mutasi">M</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Putus Sekolah">P</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mengulang">U</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mutasi">M</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Putus Sekolah">P</td>
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
            <td><?php echo $record['School']['total_siswa_laki_mengulang_kelas1'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_mutasi_kelas1'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_putus_kelas1'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_mengulang_kelas2'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_mutasi_kelas2'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_putus_kelas2'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_mengulang_kelas3'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_mutasi_kelas3'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_putus_kelas3'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_mengulang_kelas4'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_mutasi_kelas4'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_putus_kelas4'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_mengulang_kelas5'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_mutasi_kelas5'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_putus_kelas5'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_mengulang_kelas6'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_mutasi_kelas6'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_putus_kelas6'];?></td>
        </tr>
        <?php endforeach;
         else:?>
            <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Data tidak diketemukan</td></tr>
        <?php endif;?>

</table>
<?php elseif ($kelas == "smp"):?>
    <div class="msgbar msg_Info">
        <b>DAFTAR SISWA SMP/MTS/SMPLB MENGULANG, MUTASI DAN PUTUS</b>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">MENGULANG</td>
                <td >&nbsp;</td>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">MUTASI</td>
                <td >&nbsp;</td>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">PUTUS SEKOLAH</td>
                <td >&nbsp;</td>
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
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">KELAS1</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">KELAS2</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">KELAS3</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">JUMLAH</td>
            </tr>
            <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mengulang">U</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mutasi">M</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Putus Sekolah">P</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mengulang">U</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mutasi">M</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Putus Sekolah">P</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mengulang">U</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mutasi">M</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Putus Sekolah">P</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mengulang">U</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mutasi">M</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Putus Sekolah">P</td>
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
            <td><?php echo $record['School']['total_siswa_laki_mengulang_kelas6'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_mutasi_kelas6'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_putus_kelas6'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_mengulang_kelas7'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_mutasi_kelas7'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_putus_kelas7'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_mengulang_kelas8'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_mutasi_kelas8'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_putus_kelas8'];?></td>
            <td><?php echo $record['School']['total_siswa_mengulang'];?></td>
            <td><?php echo $record['School']['total_siswa_mutasi'];?></td>
            <td><?php echo $record['School']['total_siswa_putus'];?></td>
        </tr>
        <?php endforeach;
         else:?>
            <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Data tidak diketemukan</td></tr>
        <?php endif;?>
    </table>

<?php elseif ($kelas == "sma"):?>
    <div class="msgbar msg_Info">
        <b>DAFTAR SISWA SMA/MA/SMALB MENGULANG, MUTASI DAN PUTUS</b>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">MENGULANG</td>
                <td >&nbsp;</td>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">MUTASI</td>
                <td >&nbsp;</td>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">PUTUS SEKOLAH</td>
                <td >&nbsp;</td>
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
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">KELAS1</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">KELAS2</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">KELAS3</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">JUMLAH</td>
            </tr>
            <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mengulang">U</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mutasi">M</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Putus Sekolah">P</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mengulang">U</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mutasi">M</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Putus Sekolah">P</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mengulang">U</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mutasi">M</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Putus Sekolah">P</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mengulang">U</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mutasi">M</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Putus Sekolah">P</td>
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
            <td><?php echo $record['School']['total_siswa_laki_mengulang_kelas10'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_mutasi_kelas10'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_putus_kelas10'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_mengulang_kelas11'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_mutasi_kelas11'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_putus_kelas11'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_mengulang_kelas12'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_mutasi_kelas12'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_putus_kelas12'];?></td>
            <td><?php echo $record['School']['total_siswa_mengulang'];?></td>
            <td><?php echo $record['School']['total_siswa_mutasi'];?></td>
            <td><?php echo $record['School']['total_siswa_putus'];?></td>
        </tr>
        <?php endforeach;
         else:?>
            <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Data tidak diketemukan</td></tr>
        <?php endif;?>
    </table>

<?php elseif ($kelas == "smk"):?>
    <div class="msgbar msg_Info">
        <b>DAFTAR SISWA SMK/MK MENGULANG, MUTASI DAN PUTUS</b>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">MENGULANG</td>
                <td >&nbsp;</td>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">MUTASI</td>
                <td >&nbsp;</td>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">PUTUS SEKOLAH</td>
                <td >&nbsp;</td>
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
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">KELAS1</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">KELAS2</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">KELAS3</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">JUMLAH</td>
            </tr>
            <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mengulang">U</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mutasi">M</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Putus Sekolah">P</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mengulang">U</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mutasi">M</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Putus Sekolah">P</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mengulang">U</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mutasi">M</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Putus Sekolah">P</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mengulang">U</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mutasi">M</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Putus Sekolah">P</td>
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
            <td><?php echo $record['School']['total_siswa_laki_mengulang_kelas10'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_mutasi_kelas10'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_putus_kelas10'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_mengulang_kelas11'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_mutasi_kelas11'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_putus_kelas11'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_mengulang_kelas12'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_mutasi_kelas12'];?></td>
            <td><?php echo $record['School']['total_siswa_laki_putus_kelas12'];?></td>
            <td><?php echo $record['School']['total_siswa_mengulang'];?></td>
            <td><?php echo $record['School']['total_siswa_mutasi'];?></td>
            <td><?php echo $record['School']['total_siswa_putus'];?></td>
        </tr>
        <?php endforeach;
         else:?>
            <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Data tidak diketemukan</td></tr>
        <?php endif;?>
    </table>
    <?php endif;?>