<?php echo $this->element('nav_atas');?>
<!--Quick Actions-->
<div id="content_data">
<?php if($kelas == 'sd'):?>
<div class="msgbar msg_Info">
    <b>DAFTAR SEKOLAH BERDASARKAN STATUS</b>
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
            <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Tenaga Pengajar">TPK</td>
        </tr>
    </thead>
    <tr class="textLeft contentIsi">
        <td style="background-color:#c4dc7e; border:1px solid #999999;" colspan="8">DAFTAR SD/SDLB Negeri</td>
    </tr>
    <?php
        if(!empty($regularNegeri)):
        $no = 0;
        foreach ($regularNegeri as $record):
        $no++;
        ?>
         <tr class="textLeft contentIsi">
            <td><?php echo $no;?></td>
            <td><?php echo $record['MasterSekolah']['nama'];?></td>
            <td><?php echo $record['School']['nama_kepsek'];?></td>
            <td><?php echo $record['School']['total_ruang_kelas'];?></td>
            <td><?php echo $record['School']['total_rombel'];?></td>
            <td><?php echo $record['School']['total_siswa'];?></td>
            <td><?php echo $record['School']['total_ptk'];?></td>
            <td><?php echo $record['School']['total_ptk'];?></td>
        </tr>
    <?php endforeach;
     else:?>
        <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Tidak ditemukan data</td></tr>
    <?php endif;?>
    <tr class="textLeft contentIsi">
        <td style="background-color:#c4dc7e; border:1px solid #999999;" colspan="8">DAFTAR SD/SDLB Swasta</td>
    </tr>
    <?php
        if(!empty($regularSwasta)):
        $no = 0;
        foreach ($regularSwasta as $record):
        $no++;
        ?>
         <tr class="textLeft contentIsi">
            <td><?php echo $no;?></td>
            <td><?php echo $record['MasterSekolah']['nama'];?></td>
            <td><?php echo $record['School']['nama_kepsek'];?></td>
            <td><?php echo $record['School']['total_ruang_kelas'];?></td>
            <td><?php echo $record['School']['total_rombel'];?></td>
            <td><?php echo $record['School']['total_siswa'];?></td>
            <td><?php echo $record['School']['total_ptk'];?></td>
            <td><?php echo $record['School']['total_ptk'];?></td>
        </tr>
    <?php
        endforeach;
        else:
    ?>
        <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Tidak ditemukan data</td></tr>
    <?php endif;?>
    <tr class="textLeft contentIsi">
        <td style="background-color:#c4dc7e; border:1px solid #999999;" colspan="8">DAFTAR Madrasah Ibtidaiyah Negeri</td>
    </tr>

    <?php
        if(!empty($madrasahNegeri)):
        $no = 0;
        foreach ($madrasahNegeri as $record):
        $no++;
        ?>
         <tr class="textLeft contentIsi">
            <td><?php echo $no;?></td>
            <td><?php echo $record['MasterSekolah']['nama'];?></td>
            <td><?php echo $record['School']['nama_kepsek'];?></td>
            <td><?php echo $record['School']['total_ruang_kelas'];?></td>
            <td><?php echo $record['School']['total_rombel'];?></td>
            <td><?php echo $record['School']['total_siswa'];?></td>
            <td><?php echo $record['School']['total_ptk'];?></td>
            <td><?php echo $record['School']['total_ptk'];?></td>
        </tr>
    <?php endforeach;
     else:?>
        <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Tidak ditemukan data</td></tr>
    <?php endif;?>

    <tr class="textLeft contentIsi">
        <td style="background-color:#c4dc7e; border:1px solid #999999;" colspan="8">DAFTAR Madrasah Ibtidaiyah Swasta</td>
    </tr>
    <?php
        if(!empty($madrasahSwasta)):
        $no = 0;
        foreach ($madrasahSwasta as $record):
        $no++;
        ?>
         <tr class="textLeft contentIsi">
            <td><?php echo $no;?></td>
            <td><?php echo $record['MasterSekolah']['nama'];?></td>
            <td><?php echo $record['School']['nama_kepsek'];?></td>
            <td><?php echo $record['School']['total_ruang_kelas'];?></td>
            <td><?php echo $record['School']['total_rombel'];?></td>
            <td><?php echo $record['School']['total_siswa'];?></td>
            <td><?php echo $record['School']['total_ptk'];?></td>
            <td><?php echo $record['School']['total_ptk'];?></td>
        </tr>
    <?php endforeach;
     else:?>
        <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Tidak ditemukan data</td></tr>
    <?php endif;?>

</table>

<?php elseif($kelas == 'smp'):?>
<div class="msgbar msg_Info">
    <b>DAFTAR SEKOLAH BERDASARKAN STATUS</b>
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
            <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Tenaga Pengajar">TPK</td>
        </tr>
    </thead>
    <tr class="textLeft contentIsi">
        <td style="background-color:#c4dc7e; border:1px solid #999999;" colspan="8">DAFTAR SMP/SMPLB Negeri</td>
    </tr>
    <?php
        if(!empty($regularNegeri)):
        $no = 0;
        foreach ($regularNegeri as $record):
        $no++;
        ?>
         <tr class="textLeft contentIsi">
            <td><?php echo $no;?></td>
            <td><?php echo $record['MasterSekolah']['nama'];?></td>
            <td><?php echo $record['School']['nama_kepsek'];?></td>
            <td><?php echo $record['School']['total_ruang_kelas'];?></td>
            <td><?php echo $record['School']['total_rombel'];?></td>
            <td><?php echo $record['School']['total_siswa'];?></td>
            <td><?php echo $record['School']['total_ptk'];?></td>
            <td><?php echo $record['School']['total_ptk'];?></td>
        </tr>
    <?php endforeach;
     else:?>
        <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Tidak ditemukan data</td></tr>
    <?php endif;?>
    <tr class="textLeft contentIsi">
        <td style="background-color:#c4dc7e; border:1px solid #999999;" colspan="8">DAFTAR SMP/SMPLB Swasta</td>
    </tr>
    <?php
        if(!empty($regularSwasta)):
        $no = 0;
        foreach ($regularSwasta as $record):
        $no++;
        ?>
         <tr class="textLeft contentIsi">
            <td><?php echo $no;?></td>
            <td><?php echo $record['MasterSekolah']['nama'];?></td>
            <td><?php echo $record['School']['nama_kepsek'];?></td>
            <td><?php echo $record['School']['total_ruang_kelas'];?></td>
            <td><?php echo $record['School']['total_rombel'];?></td>
            <td><?php echo $record['School']['total_siswa'];?></td>
            <td><?php echo $record['School']['total_ptk'];?></td>
            <td><?php echo $record['School']['total_ptk'];?></td>
        </tr>
    <?php endforeach;
     else:?>
        <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Tidak ditemukan data</td></tr>
    <?php endif;?>
    <tr class="textLeft contentIsi">
        <td style="background-color:#c4dc7e; border:1px solid #999999;" colspan="8">DAFTAR Madrasah Tsanawiyah Negeri</td>
    </tr>

    <?php
        if(!empty($madrasahNegeri)):
        $no = 0;
        foreach ($madrasahNegeri as $record):
        $no++;
        ?>
         <tr class="textLeft contentIsi">
            <td><?php echo $no;?></td>
            <td><?php echo $record['MasterSekolah']['nama'];?></td>
            <td><?php echo $record['School']['nama_kepsek'];?></td>
            <td><?php echo $record['School']['total_ruang_kelas'];?></td>
            <td><?php echo $record['School']['total_rombel'];?></td>
            <td><?php echo $record['School']['total_siswa'];?></td>
            <td><?php echo $record['School']['total_ptk'];?></td>
            <td><?php echo $record['School']['total_ptk'];?></td>
        </tr>
    <?php endforeach;
     else:?>
        <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Tidak ditemukan data</td></tr>
    <?php endif;?>
    <tr class="textLeft contentIsi">
        <td style="background-color:#c4dc7e; border:1px solid #999999;" colspan="8">DAFTAR Madrasah Tsanawiyah Swasta</td>
    </tr>

    <?php
        if(!empty($madrasahSwasta)):
        $no = 0;
        foreach ($madrasahSwasta as $record):
        $no++;
        ?>
         <tr class="textLeft contentIsi">
            <td><?php echo $no;?></td>
            <td><?php echo $record['MasterSekolah']['nama'];?></td>
            <td><?php echo $record['School']['nama_kepsek'];?></td>
            <td><?php echo $record['School']['total_ruang_kelas'];?></td>
            <td><?php echo $record['School']['total_rombel'];?></td>
            <td><?php echo $record['School']['total_siswa'];?></td>
            <td><?php echo $record['School']['total_ptk'];?></td>
            <td><?php echo $record['School']['total_ptk'];?></td>
        </tr>
    <?php endforeach;
     else:?>
        <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Tidak ditemukan data</td></tr>
    <?php endif;?>
</table>


<?php elseif($kelas == 'sma'):?>
<div class="msgbar msg_Info">
    <b>DAFTAR SEKOLAH BERDASARKAN STATUS</b>
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
            <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Tenaga Pengajar">TPK</td>
        </tr>
    </thead>
    <tr class="textLeft contentIsi">
        <td style="background-color:#c4dc7e; border:1px solid #999999;" colspan="8">DAFTAR SMA/SMALB Negeri</td>
    </tr>
    <?php
        if(!empty($regularNegeri)):
        $no = 0;
        foreach ($regularNegeri as $record):
        $no++;
        ?>
         <tr class="textLeft contentIsi">
            <td><?php echo $no;?></td>
            <td><?php echo $record['MasterSekolah']['nama'];?></td>
            <td><?php echo $record['School']['nama_kepsek'];?></td>
            <td><?php echo $record['School']['total_ruang_kelas'];?></td>
            <td><?php echo $record['School']['total_rombel'];?></td>
            <td><?php echo $record['School']['total_siswa'];?></td>
            <td><?php echo $record['School']['total_ptk'];?></td>
            <td><?php echo $record['School']['total_ptk'];?></td>
        </tr>
    <?php endforeach;
     else:?>
        <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Tidak ditemukan data</td></tr>
    <?php endif;?>
    <tr class="textLeft contentIsi">
        <td style="background-color:#c4dc7e; border:1px solid #999999;" colspan="8">DAFTAR SMA/SMALB Swasta</td>
    </tr>
    <?php
        if(!empty($regularSwasta)):
        $no = 0;
        foreach ($regularSwasta as $record):
        $no++;
        ?>
         <tr class="textLeft contentIsi">
            <td><?php echo $no;?></td>
            <td><?php echo $record['MasterSekolah']['nama'];?></td>
            <td><?php echo $record['School']['nama_kepsek'];?></td>
            <td><?php echo $record['School']['total_ruang_kelas'];?></td>
            <td><?php echo $record['School']['total_rombel'];?></td>
            <td><?php echo $record['School']['total_siswa'];?></td>
            <td><?php echo $record['School']['total_ptk'];?></td>
            <td><?php echo $record['School']['total_ptk'];?></td>
        </tr>
    <?php endforeach;
     else:?>
        <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Tidak ditemukan data</td></tr>
    <?php endif;?>
    <tr class="textLeft contentIsi">
        <td style="background-color:#c4dc7e; border:1px solid #999999;" colspan="8">DAFTAR Madrasah Aliyah Negeri</td>
    </tr>

    <?php
        if(!empty($madrasahNegeri)):
        $no = 0;
        foreach ($madrasahNegeri as $record):
        $no++;
        ?>
         <tr class="textLeft contentIsi">
            <td><?php echo $no;?></td>
            <td><?php echo $record['MasterSekolah']['nama'];?></td>
            <td><?php echo $record['School']['nama_kepsek'];?></td>
            <td><?php echo $record['School']['total_ruang_kelas'];?></td>
            <td><?php echo $record['School']['total_rombel'];?></td>
            <td><?php echo $record['School']['total_siswa'];?></td>
            <td><?php echo $record['School']['total_ptk'];?></td>
            <td><?php echo $record['School']['total_ptk'];?></td>
        </tr>
    <?php endforeach;
     else:?>
        <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Tidak ditemukan data</td></tr>
    <?php endif;?>

    <tr class="textLeft contentIsi">
        <td style="background-color:#c4dc7e; border:1px solid #999999;" colspan="8">DAFTAR Madrasah Aliyah Swasta</td>
    </tr>

    <?php
        if(!empty($madrasahSwasta)):
        $no = 0;
        foreach ($madrasahSwasta as $record):
        $no++;
        ?>
         <tr class="textLeft contentIsi">
            <td><?php echo $no;?></td>
            <td><?php echo $record['MasterSekolah']['nama'];?></td>
            <td><?php echo $record['School']['nama_kepsek'];?></td>
            <td><?php echo $record['School']['total_ruang_kelas'];?></td>
            <td><?php echo $record['School']['total_rombel'];?></td>
            <td><?php echo $record['School']['total_siswa'];?></td>
            <td><?php echo $record['School']['total_ptk'];?></td>
            <td><?php echo $record['School']['total_ptk'];?></td>
        </tr>
    <?php endforeach;
     else:?>
        <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Tidak ditemukan data</td></tr>
    <?php endif;?>

</table>


<?php elseif($kelas == 'smk'):?>
<div class="msgbar msg_Info">
    <b>DAFTAR SEKOLAH BERDASARKAN STATUS</b>
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
            <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Tenaga Pengajar">TPK</td>
        </tr>
    </thead>
    <tr class="textLeft contentIsi">
        <td style="background-color:#c4dc7e; border:1px solid #999999;" colspan="8">DAFTAR SMK/SMKLB Negeri</td>
    </tr>
    <?php
        if(!empty($regularNegeri)):
        $no = 0;
        foreach ($regularNegeri as $record):
        $no++;
        ?>
         <tr class="textLeft contentIsi">
            <td><?php echo $no;?></td>
            <td><?php echo $record['MasterSekolah']['nama'];?></td>
            <td><?php echo $record['School']['nama_kepsek'];?></td>
            <td><?php echo $record['School']['total_ruang_kelas'];?></td>
            <td><?php echo $record['School']['total_rombel'];?></td>
            <td><?php echo $record['School']['total_siswa'];?></td>
            <td><?php echo $record['School']['total_ptk'];?></td>
            <td><?php echo $record['School']['total_ptk'];?></td>
        </tr>
    <?php endforeach;
     else:?>
        <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Tidak ditemukan data</td></tr>
    <?php endif;?>
    <tr class="textLeft contentIsi">
        <td style="background-color:#c4dc7e; border:1px solid #999999;" colspan="8">DAFTAR SMK/SMKLB Swasta</td>
    </tr>

    <?php
        if(!empty($regularSwasta)):
        $no = 0;
        foreach ($regularSwasta as $record):
        $no++;
        ?>
         <tr class="textLeft contentIsi">
            <td><?php echo $no;?></td>
            <td><?php echo $record['MasterSekolah']['nama'];?></td>
            <td><?php echo $record['School']['nama_kepsek'];?></td>
            <td><?php echo $record['School']['total_ruang_kelas'];?></td>
            <td><?php echo $record['School']['total_rombel'];?></td>
            <td><?php echo $record['School']['total_siswa'];?></td>
            <td><?php echo $record['School']['total_ptk'];?></td>
            <td><?php echo $record['School']['total_ptk'];?></td>
        </tr>
    <?php endforeach;
     else:?>
        <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Tidak ditemukan data</td></tr>
    <?php endif;?>

    <tr class="textLeft contentIsi">
        <td style="background-color:#c4dc7e; border:1px solid #999999;" colspan="8">DAFTAR Madrasah Aliyah Kejuruan Negeri</td>
    </tr>

    <?php
        if(!empty($madrasahNegeri)):
        $no = 0;
        foreach ($madrasahNegeri as $record):
        $no++;
        ?>
         <tr class="textLeft contentIsi">
            <td><?php echo $no;?></td>
            <td><?php echo $record['MasterSekolah']['nama'];?></td>
            <td><?php echo $record['School']['nama_kepsek'];?></td>
            <td><?php echo $record['School']['total_ruang_kelas'];?></td>
            <td><?php echo $record['School']['total_rombel'];?></td>
            <td><?php echo $record['School']['total_siswa'];?></td>
            <td><?php echo $record['School']['total_ptk'];?></td>
            <td><?php echo $record['School']['total_ptk'];?></td>
        </tr>
    <?php endforeach;
     else:?>
        <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Tidak ditemukan data</td></tr>
    <?php endif;?>

    <tr class="textLeft contentIsi">
        <td style="background-color:#c4dc7e; border:1px solid #999999;" colspan="8">DAFTAR Madrasah Aliyah Kejuruan Swasta</td>
    </tr>

    <?php
        if(!empty($madrasahSwasta)):
        $no = 0;
        foreach ($madrasahSwasta as $record):
        $no++;
        ?>
         <tr class="textLeft contentIsi">
            <td><?php echo $no;?></td>
            <td><?php echo $record['MasterSekolah']['nama'];?></td>
            <td><?php echo $record['School']['nama_kepsek'];?></td>
            <td><?php echo $record['School']['total_ruang_kelas'];?></td>
            <td><?php echo $record['School']['total_rombel'];?></td>
            <td><?php echo $record['School']['total_siswa'];?></td>
            <td><?php echo $record['School']['total_ptk'];?></td>
            <td><?php echo $record['School']['total_ptk'];?></td>
        </tr>
    <?php endforeach;
     else:?>
        <tr class="textLeft contentIsi nodataavailable"><td colspan="50">Tidak ditemukan data</td></tr>
    <?php endif;?>

</table>

<?php endif;?>
</div>