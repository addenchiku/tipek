<?php if($kelas =='sd'):?>
<h2>BIAYA SD/MI/SDLB</h2>
<?php elseif($kelas =='smp'):?>
<h2>BIAYA SMP/MTS/SMPLB</h2>
<?php elseif($kelas =='sma'):?>
<h2>BIAYA SMA/MA/SMALB</h2>
<?php elseif($kelas =='smk'):?>
<h2>BIAYA SMK/MK</h2>
<?php elseif('rekap_siswa'):?>
<h2>BIAYA REKAPITULASI</h2>
<?php endif;?>

<ul>
    <li <?php if($thirdNav == 'biaya_penerimaan'){ ?>class="nav_pages active" <?php } ?>><a href="<?php echo $this->webroot;?>schools/biaya_penerimaan/sd">RKAS BAGIAN PENERIMAAN</a></li>
    <li <?php if($thirdNav == 'biaya_pengeluaran'){ ?>class="nav_pages active" <?php } ?>><a href="<?php echo $this->webroot;?>schools/biaya_pengeluaran/sd">RKAS BAGIAN PENGELUARAN</a></li>
    <li <?php if($thirdNav == 'biaya_tw1'){ ?>class="nav_pages active" <?php } ?>><a href="<?php echo $this->webroot;?>schools/biaya_tw1/sd">REALISASI PENGGUNAAN TW-I</a></li>
    <li <?php if($thirdNav == 'biaya_tw2'){ ?>class="nav_pages active" <?php } ?>><a href="<?php echo $this->webroot;?>schools/biaya_tw2/sd">REALISASI PENGGUNAAN TW-II</a></li>
    <li <?php if($thirdNav == 'biaya_tw3'){ ?>class="nav_pages active" <?php } ?>><a href="<?php echo $this->webroot;?>schools/biaya_tw3/sd">REALISASI PENGGUNAAN TW-III</a></li>
    <li <?php if($thirdNav == 'biaya_tw4'){ ?>class="nav_pages active" <?php } ?>><a href="<?php echo $this->webroot;?>schools/biaya_tw4/sd">REALISASI PENGGUNAAN TW-IV</a></li>
    <li <?php if($thirdNav == 'rekap_biaya'){ ?>class="nav_pages active" <?php } ?>><a href="<?php echo $this->webroot;?>schools/rekap_biaya">REKAP</a></li>       
</ul>