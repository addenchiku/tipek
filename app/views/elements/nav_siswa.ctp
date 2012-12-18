<?php if($kelas =='sd'):?>
<h2>Siswa SD/MI/SDLB</h2>
<?php elseif($kelas =='smp'):?>
<h2>Siswa SMP/MTS/SMPLB</h2>
<?php elseif($kelas =='sma'):?>
<h2>Siswa SMA/MA/SMALB</h2>
<?php elseif($kelas =='smk'):?>
<h2>Siswa SMK/MK</h2>
<?php elseif('rekap_siswa'):?>
<h2>Siswa REKAPITULASI</h2>
<?php endif;?>

<ul>
	<li <?php if($thirdNav == 'siswa_kelas'){ ?>class="nav_pages active" <?php } ?>><a href="<?php echo $this->webroot;?>schools/siswa_kelas/sd">Berdasarkan Kelas</a></li>
    <li <?php if($thirdNav == 'siswa_agama'){ ?>class="nav_pages active" <?php } ?>><a href="<?php echo $this->webroot;?>schools/siswa_agama/sd">Berdasarkan Agama</a></li>
    <li <?php if($thirdNav == 'siswa_umur'){ ?>class="nav_pages active" <?php } ?>><a href="<?php echo $this->webroot;?>schools/siswa_umur/sd">Berdasarkan Umur</a></li>
    <li <?php if($thirdNav == 'siswa_ekonomi'){ ?>class="nav_pages active" <?php } ?>><a href="<?php echo $this->webroot;?>schools/siswa_ekonomi/sd">Berdasarkan Ekonomi</a></li>
    <li <?php if($thirdNav == 'siswa_khusus'){ ?>class="nav_pages active" <?php } ?>><a href="<?php echo $this->webroot;?>schools/siswa_khusus/sd">Berkebutuhan Khusus</a></li>
    <li <?php if($thirdNav == 'siswa_putus'){ ?>class="nav_pages active" <?php } ?>><a href="<?php echo $this->webroot;?>schools/siswa_putus/sd">Mengulang, Mutasi, Putus</a></li>		
    <li <?php if($thirdNav == 'siswa_prestasi'){ ?>class="nav_pages active" <?php } ?>><a href="<?php echo $this->webroot;?>schools/siswa_prestasi/sd">Catatan Prestasi</a></li>
    <li <?php if($thirdNav == 'siswa_beasiswa'){ ?>class="nav_pages active" <?php } ?>><a href="<?php echo $this->webroot;?>schools/siswa_beasiswa/sd">Penerima Beasiswa</a></li>
	<li <?php if($thirdNav == 'rekap_siswa'){ ?>class="nav_pages active" <?php } ?>><a href="<?php echo $this->webroot;?>schools/rekap_siswa">REKAPITULASI</a></li>	
</ul>