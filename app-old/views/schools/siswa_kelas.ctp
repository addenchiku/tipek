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
                <td style="background-color:#999999; color:#fff;font-size:12px;">SDN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">SDS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">SLBN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">SLBS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">MIN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">MIS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">SEKOLAH</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">MADRAS</td>
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
             <td style="background-color:#999999; color:#fff;font-size:12px;">L</td>
             <td style="background-color:#999999; color:#fff;font-size:12px;">P</td>
             <td style="background-color:#999999; color:#fff;font-size:12px;">L</td>
             <td style="background-color:#999999; color:#fff;font-size:12px;">P</td>
             <td style="background-color:#999999; color:#fff;font-size:12px;">L</td>
             <td style="background-color:#999999; color:#fff;font-size:12px;">P</td>
             <td style="background-color:#999999; color:#fff;font-size:12px;">L</td>
             <td style="background-color:#999999; color:#fff;font-size:12px;">P</td>
             <td style="background-color:#999999; color:#fff;font-size:12px;">L</td>
             <td style="background-color:#999999; color:#fff;font-size:12px;">P</td>
             <td style="background-color:#999999; color:#fff;font-size:12px;">L</td>
             <td style="background-color:#999999; color:#fff;font-size:12px;">P</td>
             <td style="background-color:#999999; color:#fff;font-size:12px;">L+P</td>
         </tr>
     </thead>
     <?php
    $no = 0;
    foreach ($records as $sd):
    $no++;
    ?>
     <tr class="textLeft contentIsi">
        <td><?php echo $no;?></td>
        <td><?php echo $sd['School']['nama'];?></td>
        <td><?php echo $sd['School']['total_siswa_laki_kelas1'];?></td>
        <td><?php echo $sd['School']['total_siswa_perempuan_kelas1'];?></td>
        <td><?php echo $sd['School']['total_siswa_laki_kelas2'];?></td>
        <td><?php echo $sd['School']['total_siswa_perempuan_kelas2'];?></td>
        <td><?php echo $sd['School']['total_siswa_laki_kelas3'];?></td>
        <td><?php echo $sd['School']['total_siswa_perempuan_kelas3'];?></td>
        <td><?php echo $sd['School']['total_siswa_laki_kelas4'];?></td>
        <td><?php echo $sd['School']['total_siswa_perempuan_kelas4'];?></td>
        <td><?php echo $sd['School']['total_siswa_laki_kelas5'];?></td>
        <td><?php echo $sd['School']['total_siswa_perempuan_kelas5'];?></td>
        <td><?php echo $sd['School']['total_siswa_laki_kelas6'];?></td>
        <td><?php echo $sd['School']['total_siswa_perempuan_kelas6'];?></td>
        <td><?php echo $sd['School']['total_siswa_laki'];?></td>
        <td><?php echo $sd['School']['total_siswa_perempuan'];?></td>
        <td><?php echo $sd['School']['total_siswa'];?></td>
    </tr>
    <?php endforeach;?>


</table>

<?php elseif($kelas == 'smp'):?>

    <div class="msgbar msg_Info">
        <b>DAFTAR SISWA SMP/MTS/SMPLB BERDASARKAN KELAS</b>
    </div>
    <table class="rekap persist-area">
        <thead>
            <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">KETERANGAN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">SMPN/LB</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">SMPS/LB</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">MTSN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">MTSS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">KLS1</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">KLS2</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">KLS3</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">LAKI</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">PERM</td>
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
                <td style="background-color:#999999; color:#fff;font-size:12px;">L</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">P</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">L</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">P</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">L</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">P</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">L+P</td>
            </tr>
        </thead>
        <?php
        $no = 0;
        foreach ($records as $smp):
        $no++;
        ?>
         <tr class="textLeft contentIsi">
            <td><?php echo $no;?></td>
            <td><?php echo $smp['School']['nama'];?></td>
            <td><?php echo $smp['School']['nama_kepsek'];?></td>
            <td><?php echo $smp['School']['total_siswa_laki_kelas1'];?></td>
            <td><?php echo $smp['School']['total_siswa_perempuan_kelas1'];?></td>
            <td><?php echo $smp['School']['total_siswa_laki_kelas2'];?></td>
            <td><?php echo $smp['School']['total_siswa_perempuan_kelas2'];?></td>
            <td><?php echo $smp['School']['total_siswa_laki_kelas3'];?></td>
            <td><?php echo $smp['School']['total_siswa_perempuan_kelas3'];?></td>
            <td><?php echo $smp['School']['total_siswa_laki'];?></td>
            <td><?php echo $smp['School']['total_siswa_perempuan'];?></td>
            <td><?php echo $smp['School']['total_siswa'];?></td>
        </tr>
        <?php endforeach;?>

    </table>
<?php elseif ($kelas == "sma"):?>
    <div class="msgbar msg_Info">
        <b>DAFTAR SISWA SMA/MA/SMALB BERDASARKAN KELAS</b>
    </div>
    <table class="rekap persist-area">
        <thead>
            <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">KETERANGAN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="SMA Negeri">SMA/SMALBN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="SMA Swasta">SMA/SMALBS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Madrasah Aliyah Negeri">MAN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Madrasah Aliyah Negeri Swasta">MAS</td>
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
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">IPA</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">IPS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">BHS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">AGM</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">JLH</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">IPA</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">IPS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">BHS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">AGM</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">JLH</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">L</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">P</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">L+P</td>
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
<?php elseif ($kelas == "smk"):?>
    <div class="msgbar msg_Info">
            <b>DAFTAR SISWA SMK/MK BERDASARKAN KELAS</b>
        </div>
            <table class="rekap persist-area">
                <thead>
                <tr class="textLeft contentIsi">
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="K1">K1</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="K4">K4</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="K7">K7</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="K10">K10</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="K13">K13</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="K16">K16</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="K19">K19</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="K22">K22</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="K25">K25</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="K28">K28</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="K31">K31</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="K34">K34</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="K37">K37</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="KL1">KL1</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="LK">LK</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="SW">SW</td>
                    <td>&nbsp;</td>
                </tr>
                <tr class="textLeft contentIsi">
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="K1">K2</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="K4">K5</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="K7">K8</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="K10">K11</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="K13">K14</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="K16">K17</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="K19">K20</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="K22">K23</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="K25">K26</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="K28">K29</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="K31">K32</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="K34">K35</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="K37">K38</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="KL2">KL2</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="PR">PR</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="NG">NG</td>
                    <td>&nbsp;</td>
                </tr>
                <tr class="textLeft contentIsi">
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="K1">K3</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="K4">K6</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="K7">K9</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="K10">K12</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="K13">K15</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="K16">K18</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="K19">K21</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="K22">K24</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="K25">K27</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="K28">K30</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="K31">K33</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="K34">K36</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="K37">JLH</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="KL1">KL3</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="LK">JLH</td>
                    <td>&nbsp;</td>
                    <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="SW">JLH</td>
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