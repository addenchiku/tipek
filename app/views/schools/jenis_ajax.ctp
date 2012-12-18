<!--Quick Actions-->
<?php if($kelas == 'sd'):?>
    <div class="msgbar msg_Info">
        <b>DAFTAR SEKOLAH BERDASARKAN JENIS</b>
    </div>
    <table class="rekap persist-area">
        <thead class="kepalatable persist-header">
            <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                <td style="background-color:#999999; color:#fff;font-size:12px;">NO</td>
                <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">NAMA SEKOLAH</td>
                <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">NAMA KEPSEK</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">RKELAS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">ROMBEL</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">SISWA</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">GURU</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">TPK</td>
            </tr>
        </thead>
        <tr class="textLeft contentIsi">
            <td style="background-color:#c4dc7e; border:1px solid #999999;" colspan="8">DAFTAR SEKOLAH DASAR</td>
        </tr>

        <?php
        if(!empty($regular)):
            $no = 0;
        foreach ($regular as $sd):
            $no++;
        ?>
        <tr class="textLeft contentIsi">
            <td><?php echo $no;?></td>
            <td><?php echo $sd['MasterSekolah']['nama'];?></td>
            <td><?php echo $sd['School']['nama_kepsek'];?></td>
            <td><?php echo $sd['School']['total_ruang_kelas'];?></td>
            <td><?php echo $sd['School']['total_rombel'];?></td>
            <td><?php echo $sd['School']['total_siswa'];?></td>
            <td><?php echo $sd['School']['total_ptk'];?></td>
            <td><?php echo $sd['School']['total_ptk'];?></td>
        </tr>
        <?php endforeach;
        else:?>
        <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Tidak ditemukan data</td></tr>
    <?php endif;?>



    <tr class="textLeft contentIsi">
        <td style="background-color:#c4dc7e" colspan="8">DAFTAR MADRASAH IBTIDAIYAH</td>
    </tr>

    <?php
    if(!empty($madrasah)):
        $no = 0;
    foreach ($madrasah as $sd):
        $no++;
    ?>
    <tr class="textLeft contentIsi">
        <td><?php echo $no;?></td>
        <td><?php echo $sd['MasterSekolah']['nama'];?></td>
        <td><?php echo $sd['School']['nama_kepsek'];?></td>
        <td><?php echo $sd['School']['total_ruang_kelas'];?></td>
        <td><?php echo $sd['School']['total_rombel'];?></td>
        <td><?php echo $sd['School']['total_siswa'];?></td>
        <td><?php echo $sd['School']['total_ptk'];?></td>
        <td><?php echo $sd['School']['total_ptk'];?></td>
    </tr>
    <?php endforeach;
    else:?>
    <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Tidak ditemukan data</td></tr>
<?php endif;?>

<tr class="textLeft contentIsi">
    <td style="background-color:#c4dc7e" colspan="8">DAFTAR SD LB</td>
</tr>

<?php
if(!empty($slb)):
    $no = 0;
foreach ($slb as $sd):
    $no++;
?>
<tr class="textLeft contentIsi">
    <td><?php echo $no;?></td>
    <td><?php echo $sd['MasterSekolah']['nama'];?></td>
    <td><?php echo $sd['School']['nama_kepsek'];?></td>
    <td><?php echo $sd['School']['total_ruang_kelas'];?></td>
    <td><?php echo $sd['School']['total_rombel'];?></td>
    <td><?php echo $sd['School']['total_siswa'];?></td>
    <td><?php echo $sd['School']['total_ptk'];?></td>
    <td><?php echo $sd['School']['total_ptk'];?></td>
</tr>
<?php endforeach;
else:?>
<tr class="textLeft contentIsi nodataavailable"><td colspan="50">Tidak ditemukan data</td></tr>
<?php endif;?>


</table>


<?php elseif($kelas == 'smp'):?>
    <div class="msgbar msg_Info">
        <b>DAFTAR SEKOLAH BERDASARKAN JENIS</b>
    </div>

    <table class="rekap persist-area">
        <thead class="kepalatable persist-header">
            <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                <td style="background-color:#999999; color:#fff;font-size:12px;">NO</td>
                <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">NAMA SEKOLAH</td>
                <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">NAMA KEPSEK</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">RKELAS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">ROMBEL</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">SISWA</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">GURU</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">TPK</td>
            </tr>
        </thead>
        <tr class="textLeft contentIsi">
            <td style="background-color:#c4dc7e; border:1px solid #999999;" colspan="8">DAFTAR SEKOLAH MENENGAH PERTAMA</td>
        </tr>

        <?php
        if(!empty($regular)):
            $no = 0;
        foreach ($regular as $smp):
            $no++;
        ?>
        <tr class="textLeft contentIsi">
            <td><?php echo $no;?></td>
            <td><?php echo $smp['MasterSekolah']['nama'];?></td>
            <td><?php echo $smp['School']['nama_kepsek'];?></td>
            <td><?php echo $smp['School']['total_ruang_kelas'];?></td>
            <td><?php echo $smp['School']['total_rombel'];?></td>
            <td><?php echo $smp['School']['total_siswa'];?></td>
            <td><?php echo $smp['School']['total_ptk'];?></td>
            <td><?php echo $smp['School']['total_ptk'];?></td>
        </tr>
        <?php endforeach;
        else:?>
        <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Tidak ditemukan data</td></tr>
    <?php endif;?>

    <tr class="textLeft contentIsi">
        <td style="background-color:#c4dc7e" colspan="8">DAFTAR MADRASAH TSANAWIYAH</td>
    </tr>
    <?php
    if(!empty($madrasah)):
        $no = 0;
    foreach ($madrasah as $smp):
        $no++;
    ?>
    <tr class="textLeft contentIsi">
        <td><?php echo $no;?></td>
        <td><?php echo $smp['MasterSekolah']['nama'];?></td>
        <td><?php echo $smp['School']['nama_kepsek'];?></td>
        <td><?php echo $smp['School']['total_ruang_kelas'];?></td>
        <td><?php echo $smp['School']['total_rombel'];?></td>
        <td><?php echo $smp['School']['total_siswa'];?></td>
        <td><?php echo $smp['School']['total_ptk'];?></td>
        <td><?php echo $smp['School']['total_ptk'];?></td>
    </tr>
    <?php endforeach;
    else:?>
    <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Tidak ditemukan data</td></tr>
<?php endif;?>

<tr class="textLeft contentIsi">
    <td style="background-color:#c4dc7e" colspan="8">DAFTAR SMP LB</td>
</tr>
<?php
if(!empty($slb)):
    $no = 0;
foreach ($slb as $smp):
    $no++;
?>
<tr class="textLeft contentIsi">
    <td><?php echo $no;?></td>
    <td><?php echo $smp['MasterSekolah']['nama'];?></td>
    <td><?php echo $smp['School']['nama_kepsek'];?></td>
    <td><?php echo $smp['School']['total_ruang_kelas'];?></td>
    <td><?php echo $smp['School']['total_rombel'];?></td>
    <td><?php echo $smp['School']['total_siswa'];?></td>
    <td><?php echo $smp['School']['total_ptk'];?></td>
    <td><?php echo $smp['School']['total_ptk'];?></td>
</tr>
<?php endforeach;
else:?>
<tr class="textLeft contentIsi nodataavailable"><td colspan="50">Tidak ditemukan data</td></tr>
<?php endif;?>

</table>

<?php elseif($kelas == 'sma'):?>
    <div class="msgbar msg_Info">
        <b>DAFTAR SEKOLAH BERDASARKAN JENIS</b>
    </div>

    <table class="rekap persist-area">
        <thead class="kepalatable persist-header">
            <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                <td style="background-color:#999999; color:#fff;font-size:12px;">NO</td>
                <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">NAMA SEKOLAH</td>
                <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">NAMA KEPSEK</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">RKELAS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">ROMBEL</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">SISWA</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">GURU</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">TPK</td>
            </tr>
        </thead>
        <tr class="textLeft contentIsi">
            <td style="background-color:#c4dc7e; border:1px solid #999999;" colspan="8">DAFTAR SEKOLAH MENENGAH ATAS</td>
        </tr>
        <?php
        if(!empty($regular)):
            $no = 0;
        foreach ($regular as $sd):
            $no++;
        ?>
        <tr class="textLeft contentIsi">
            <td><?php echo $no;?></td>
            <td><?php echo $sd['MasterSekolah']['nama'];?></td>
            <td><?php echo $sd['School']['nama_kepsek'];?></td>
            <td><?php echo $sd['School']['total_ruang_kelas'];?></td>
            <td><?php echo $sd['School']['total_rombel'];?></td>
            <td><?php echo $sd['School']['total_siswa'];?></td>
            <td><?php echo $sd['School']['total_ptk'];?></td>
            <td><?php echo $sd['School']['total_ptk'];?></td>
        </tr>
        <?php endforeach;
        else:?>
        <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Tidak ditemukan data</td></tr>
    <?php endif;?>

        <tr class="textLeft contentIsi">
            <td style="background-color:#c4dc7e" colspan="8">DAFTAR MADRASAH ALIYAH</td>
        </tr>

        <?php
        if(!empty($regular)):
            $no = 0;
        foreach ($regular as $sd):
            $no++;
        ?>
        <tr class="textLeft contentIsi">
            <td><?php echo $no;?></td>
            <td><?php echo $sd['MasterSekolah']['nama'];?></td>
            <td><?php echo $sd['School']['nama_kepsek'];?></td>
            <td><?php echo $sd['School']['total_ruang_kelas'];?></td>
            <td><?php echo $sd['School']['total_rombel'];?></td>
            <td><?php echo $sd['School']['total_siswa'];?></td>
            <td><?php echo $sd['School']['total_ptk'];?></td>
            <td><?php echo $sd['School']['total_ptk'];?></td>
        </tr>
        <?php endforeach;
        else:?>
        <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Tidak ditemukan data</td></tr>
    <?php endif;?>

        <tr class="textLeft contentIsi">
            <td style="background-color:#c4dc7e" colspan="8">DAFTAR SMA LB</td>
        </tr>

        <?php
        if(!empty($regular)):
            $no = 0;
        foreach ($regular as $sd):
            $no++;
        ?>
        <tr class="textLeft contentIsi">
            <td><?php echo $no;?></td>
            <td><?php echo $sd['MasterSekolah']['nama'];?></td>
            <td><?php echo $sd['School']['nama_kepsek'];?></td>
            <td><?php echo $sd['School']['total_ruang_kelas'];?></td>
            <td><?php echo $sd['School']['total_rombel'];?></td>
            <td><?php echo $sd['School']['total_siswa'];?></td>
            <td><?php echo $sd['School']['total_ptk'];?></td>
            <td><?php echo $sd['School']['total_ptk'];?></td>
        </tr>
        <?php endforeach;
        else:?>
        <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Tidak ditemukan data</td></tr>
    <?php endif;?>


    </table>

<?php elseif($kelas == 'smk'):?>
    <div class="msgbar msg_Info">
        <b>DAFTAR SEKOLAH BERDASARKAN JENIS</b>
    </div>

    <table class="rekap persist-area">
        <thead class="kepalatable persist-header">
            <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                <td style="background-color:#999999; color:#fff;font-size:12px;">NO</td>
                <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">NAMA SEKOLAH</td>
                <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">NAMA KEPSEK</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">RKELAS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">ROMBEL</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">SISWA</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">GURU</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">TPK</td>
            </tr>
        </thead>
        <tr class="textLeft contentIsi">
            <td style="background-color:#c4dc7e; border:1px solid #999999;" colspan="8">DAFTAR SEKOLAH MENENGAH KEJURUAN</td>
        </tr>

        <?php
        if(!empty($regular)):
            $no = 0;
        foreach ($regular as $sd):
            $no++;
        ?>
        <tr class="textLeft contentIsi">
            <td><?php echo $no;?></td>
            <td><?php echo $sd['MasterSekolah']['nama'];?></td>
            <td><?php echo $sd['School']['nama_kepsek'];?></td>
            <td><?php echo $sd['School']['total_ruang_kelas'];?></td>
            <td><?php echo $sd['School']['total_rombel'];?></td>
            <td><?php echo $sd['School']['total_siswa'];?></td>
            <td><?php echo $sd['School']['total_ptk'];?></td>
            <td><?php echo $sd['School']['total_ptk'];?></td>
        </tr>
        <?php endforeach;
        else:?>
        <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Tidak ditemukan data</td></tr>
    <?php endif;?>

        <tr class="textLeft contentIsi">
            <td style="background-color:#c4dc7e" colspan="8">DAFTAR MADRASAH ALIYAH KEJUARUAN</td>
        </tr>

        <?php
        if(!empty($madrasah)):
            $no = 0;
        foreach ($madrasah as $sd):
            $no++;
        ?>
        <tr class="textLeft contentIsi">
            <td><?php echo $no;?></td>
            <td><?php echo $sd['MasterSekolah']['nama'];?></td>
            <td><?php echo $sd['School']['nama_kepsek'];?></td>
            <td><?php echo $sd['School']['total_ruang_kelas'];?></td>
            <td><?php echo $sd['School']['total_rombel'];?></td>
            <td><?php echo $sd['School']['total_siswa'];?></td>
            <td><?php echo $sd['School']['total_ptk'];?></td>
            <td><?php echo $sd['School']['total_ptk'];?></td>
        </tr>
        <?php endforeach;
        else:?>
        <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Tidak ditemukan data</td></tr>

    <?php endif;?>

        <tr class="textLeft contentIsi">
            <td style="background-color:#c4dc7e" colspan="8">DAFTAR SMK LB</td>
        </tr>
        <?php
        if(!empty($slb)):
            $no = 0;
        foreach ($slb as $sd):
            $no++;
        ?>
        <tr class="textLeft contentIsi">
            <td><?php echo $no;?></td>
            <td><?php echo $sd['MasterSekolah']['nama'];?></td>
            <td><?php echo $sd['School']['nama_kepsek'];?></td>
            <td><?php echo $sd['School']['total_ruang_kelas'];?></td>
            <td><?php echo $sd['School']['total_rombel'];?></td>
            <td><?php echo $sd['School']['total_siswa'];?></td>
            <td><?php echo $sd['School']['total_ptk'];?></td>
            <td><?php echo $sd['School']['total_ptk'];?></td>
        </tr>
        <?php endforeach;
        else:?>
        <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Tidak ditemukan data</td></tr>
    <?php endif;?>


    </table>
    <?php endif;?>