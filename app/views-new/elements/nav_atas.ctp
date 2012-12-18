<div id="activity_stats">       
 <div id="quick_actions">
     <?php if($kelas == "paud"):?>
     <a style="margin:5px;" class="redishBtn button_small" href="<?php echo $this->webroot;?>schools/<?php echo $url_controler;?>/sd">PAUD/TK/RA</a>
     <?php else:?>
     <a style="margin:5px;" class="greenishBtn button_small" href="<?php echo $this->webroot;?>schools/<?php echo $url_controler;?>/sd">PAUD/TK/RA</a>
     <?php endif;?>

     <?php if($kelas == "sd"):?>
     <a style="margin:5px;" class="redishBtn button_small" href="<?php echo $this->webroot;?>schools/<?php echo $url_controler;?>/sd">SD/MI/LB</a>
     <?php else:?>
     <a style="margin:5px;" class="greenishBtn button_small" href="<?php echo $this->webroot;?>schools/<?php echo $url_controler;?>/sd">SD/MI/LB</a>
     <?php endif;?>


     <?php if($kelas == "smp"):?>
     <a style="margin:5px;" class="redishBtn button_small" href="<?php echo $this->webroot;?>schools/<?php echo $url_controler;?>/smp">SMP/MTS/LB</a>
     <?php else:?>
     <a style="margin:5px;" class="greenishBtn button_small" href="<?php echo $this->webroot;?>schools/<?php echo $url_controler;?>/smp">SMP/MTS/LB</a>
     <?php endif;?>

     <?php if($kelas == "sma"):?>
     <a style="margin:5px;" class="redishBtn button_small" href="<?php echo $this->webroot;?>schools/<?php echo $url_controler;?>/sma">SMA/MA/LB</a>
     <?php else:?>
     <a style="margin:5px;" class="greenishBtn button_small" href="<?php echo $this->webroot;?>schools/<?php echo $url_controler;?>/sma">SMA/MA/LB</a>
     <?php endif;?>

     <?php if($kelas == "smk"):?>
     <a style="margin:5px;" class="redishBtn button_small" href="<?php echo $this->webroot;?>schools/<?php echo $url_controler;?>/smk">SMK/MK</a>
     <?php else:?>
     <a style="margin:5px;" class="greenishBtn button_small" href="<?php echo $this->webroot;?>schools/<?php echo $url_controler;?>/smk">SMK/MK</a>
     <?php endif;?>

     <?php if($kelas == null):?>
     <a style="margin:5px;" class="redishBtn button_small" href="<?php echo $this->webroot;?>schools/<?php echo $url_rekap;?>">SEMUA</a>
     <?php else:?>
     <a style="margin:5px;" class="greenishBtn button_small" href="<?php echo $this->webroot;?>schools/<?php echo $url_rekap;?>">SEMUA</a>
     <?php endif;?>

     <div style="float:right; position:relative;">
        <a style="margin:5px;" class="bluishBtn button_small" href="#">Edit</a>
        <a style="margin:5px;" class="bluishBtn button_small" href="#">Cetak</a>
        <a style="margin:5px;" class="bluishBtn button_small" href="#">Excel</a>
        <a style="margin:5px;" class="bluishBtn button_small" href="#">Cari</a>
    </div>
</div>
</div> 