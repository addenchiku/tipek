<?php if($kelas =='sd'):?>
<h2>PTK SD/MI/SDLB</h2>
<?php elseif($kelas =='smp'):?>
<h2>PTK SMP/MTS/SMPLB</h2>
<?php elseif($kelas =='sma'):?>
<h2>PTK SMA/MA/SMALB</h2>
<?php elseif($kelas =='smk'):?>
<h2>PTK SMK/MK</h2>
<?php elseif('rekap_siswa'):?>
<h2>PTK REKAPITULASI</h2>
<?php endif;?>

<ul>
    <li <?php if($thirdNav == 'ptk_status'){ ?>class="nav_pages active" <?php } ?>><a href="<?php echo $this->webroot;?>schools/ptk_status/sd">Berdasarkan Status Kepegawaian</a></li>
    <li <?php if($thirdNav == 'ptk_jabatan'){ ?>class="nav_pages active" <?php } ?>><a href="<?php echo $this->webroot;?>schools/ptk_jabatan/sd">Berdasarkan Jabatan</a></li>
    <li <?php if($thirdNav == 'ptk_didik'){ ?>class="nav_pages active" <?php } ?>><a href="<?php echo $this->webroot;?>schools/ptk_didik/sd">Berdasarkan Pendidikan</a></li>
    <li <?php if($thirdNav == 'ptk_studi'){ ?>class="nav_pages active" <?php } ?>><a href="<?php echo $this->webroot;?>schools/ptk_studi/sd">Berdasarkan Bidang Studi</a></li>
    <li <?php if($thirdNav == 'rekap_ptk'){ ?>class="nav_pages active" <?php } ?>><a href="<?php echo $this->webroot;?>schools/rekap_ptk">REKAPITULASI</a></li>   
</ul>