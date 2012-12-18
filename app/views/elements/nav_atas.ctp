<div id="activity_stats">
 <div id="quick_actions">
     <?php if($kelas == "paud"):?>
     <a style="margin:5px;" class="redishBtn button_small" href="<?php echo $this->webroot;?>schools/<?php echo $url_controler;?>/sd">PAUD/TK</a>
     <?php else:?>
     <a style="margin:5px;" class="greenishBtn button_small" href="<?php echo $this->webroot;?>schools/<?php echo $url_controler;?>/sd">PAUD/TK</a>
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
        <a id="filterbtn" style="margin:5px;" class="bluishBtn button_small" href="#">Filter</a>
        <a style="margin:5px;" class="bluishBtn button_small" href="#">Cetak</a>
        <a style="margin:5px;" class="bluishBtn button_small" href="#">Excel</a>
        <a style="margin:5px;" class="bluishBtn button_small" href="#">Cari</a>
    </div>
</div>
</div>

<div id="filterSekolah" style="display:none;">
            <?php
                    echo $ajax->form(array('type' => 'post',
                    'options' => array(
                    'update'=>'content_data',
                    'style' =>'',
                    'url' => array(
                    'controller' => 'schools',
                    'action' => $url_controler.'_ajax'
                    ),
                    'loading'=>"Element.show('loading-block')",

                    'loaded'=>"Element.hide('loading-block')"
                    )
                    ));

                    ?>
                    <table>
                    <tr>
                    <td style="background-color:transparent;">
                        Filter data :
                    </td>
                    <td style="background-color:transparent;">
                    <?php echo $form->select('MasterSekolah.kecamatan_id',$kecamatanList,null,array('id' => 'kecamatanSelect'),array('empty'=>'-----Pilih Kecamatan----'));  ?>&nbsp;
                    </td>
                    <td>
                        <div id="plsLoaderID" style="display:none;">
                            <?php echo $html->image("load10.gif");  ?>
                        </div>
                    </td>
                    <td style="background-color:transparent;">
                    <?php echo $form->select('MasterSekolah.kelurahan_id',$kelurahanList,null,array('id' => 'kelurahanSelect'),array('empty'=>'-----Pilih Kelurahan----'));  ?>&nbsp;

                    <?php
                    //hidden kelas value
                    echo $form->hidden('MasterSekolah.kelas',array('value' => $kelas));?>
                    </td>
                    <td style="background-color:transparent;">
                        <?php echo $form->submit('Proses',array('div'=>false,'label'=>false,'class'=>'bluishBtn button_small '));?>
                    </td>
                    </tr>
                    </table>

                    <?php echo $form->end();
                    echo $ajax->observeField('kecamatanSelect', array(
                        'url' => array(
                            'controller' => 'kecamatans','action' => 'findKelurahan'
                        ),
                        'update' => 'kelurahanSelect',
                        'loading'=>"Element.show('plsLoaderID')",
                        'loaded'=>"Element.hide('plsLoaderID')"
                        )
                    );
                    ?>
    </div>