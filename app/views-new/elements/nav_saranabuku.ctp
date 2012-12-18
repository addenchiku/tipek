<h2>Sarana Buku</h2>
<ul>
		<li class="nav_pages active">
        <li <?php if($thirdNav == 'saranabuku_siswa'){ ?>class="nav_pages active" <?php } ?>><a href="<?php echo $this->webroot;?>schools/saranabuku_siswa/sd">Teks Siswa</a></li>
        <li <?php if($thirdNav == 'saranabuku_guru'){ ?>class="nav_pages active" <?php } ?>><a href="<?php echo $this->webroot;?>schools/saranabuku_guru/sd">Teks Guru</a></li>
        <li <?php if($thirdNav == 'saranabuku_penunjang'){ ?>class="nav_pages active" <?php } ?>><a href="<?php echo $this->webroot;?>schools/saranabuku_penunjang/sd">Penunjang</a></li>
        <li <?php if($thirdNav == 'rekap_saranabuku'){ ?>class="nav_pages active" <?php } ?>><a href="<?php echo $this->webroot;?>schools/rekap_saranabuku">Rekap Buku</a></li>


    </ul>