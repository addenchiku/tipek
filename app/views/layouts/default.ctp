<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">

	<title><?php echo $title_for_layout; ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico">

	<!--Begin Stylesheet -->

	<link rel="stylesheet" href="./css/reset.css" />
	<?php echo $html->css('reset'); ?>
	<?php echo $html->css('main'); ?>
	<?php echo $html->css('typography'); ?>
	<?php echo $html->css('tipsy'); ?>
	<?php echo $html->css('/js/cl_editor/jquery.cleditor'); ?>
	<?php echo $html->css('/uploadify/uploadify'); ?>
	<?php echo $html->css('jquery.ui.all'); ?>
	<?php echo $html->css('fullcalendar'); ?>
	<?php echo $html->css('bootstrap'); ?>
	<?php echo $html->css('/js/fancybox/jquery.fancybox-1.3.4'); ?>
	<?php echo $html->css('highlight'); ?>
	<?php echo $html->css('dataTables'); ?>


<!--[if lt IE 9]>
    <?php echo $javascript->link('html5'); ?>
    <![endif]-->
    <!--Javascript-->


    <!-- begin javascript-->

    <?php

    echo $javascript->link('jquery.min');
    echo $javascript->link('highcharts');
    echo $javascript->link('exporting');
    echo $javascript->link('jquery.quicksand');
    echo $javascript->link('jquery.easing.1.3');

    echo $javascript->link('bootstrap-modal');

    echo $javascript->link('jquery.min.1.6.2');
    echo $javascript->link('jquery-ui.min');
    echo $javascript->link("jquery.ui.core.js");
    echo $javascript->link('jquery.ui.widget');
    echo $javascript->link('jquery.ui.mouse');
    echo $javascript->link('jquery.ui.slider');
    echo $javascript->link('jquery.ui.progressbar');
    echo $javascript->link('jquery.ui.datepicker');
    echo $javascript->link('jquery.ui.tabs');
    echo $javascript->link('fancybox/jquery.fancybox-1.3.4.pack');
    echo $javascript->link('fancybox/jquery.mousewheel-3.0.4.pack');
    echo $javascript->link('jquery.autogrowtextarea');
    echo $javascript->link('cl_editor/jquery.cleditor.min');
    echo $javascript->link('/uploadify/swfobject');
    echo $javascript->link('/uploadify/jquery.uploadify.v2.1.4.min');
    echo $javascript->link('fullcalendar');
    echo $javascript->link('highlight');
    echo $javascript->link('gcal');
    echo $javascript->link('form_elements');
    echo $javascript->link('jquery.tipsy');
    echo  $javascript->link('jquery.dataTables.min');
    echo  $javascript->link('jquery.tablesorter.min');
    echo $javascript->link('main');
    echo  $javascript->link(array('prototype','scriptaculous'));
    echo $scripts_for_layout;
    ?>


    <style>
    .floatingHeader {
    	position: fixed;
    	top: 0;
    	visibility: hidden;
    }
    </style>


    <script type="text/javascript">
    function UpdateTableHeaders() {
    	jQuery(".persist-area").each(function() {

    		var el             = jQuery(this),
    		offset         = el.offset(),
    		scrollTop      = jQuery(window).scrollTop(),
    		floatingHeader = jQuery(".floatingHeader", this)

    		if ((scrollTop > offset.top) && (scrollTop < offset.top + el.height())) {
    			floatingHeader.css({
    				"visibility": "visible"
    			});
    		} else {
    			floatingHeader.css({
    				"visibility": "hidden"
    			});
    		};
    	});
    }

   jQuery(function() {

   var clonedHeaderRow;

   jQuery(".persist-area").each(function() {
       clonedHeaderRow = jQuery(".persist-header", this);
       clonedHeaderRow
         .before(clonedHeaderRow.clone())
         .css("width", clonedHeaderRow.width())
         .addClass("floatingHeader");

   });

   jQuery(window)
    .scroll(UpdateTableHeaders)
    .trigger("scroll");

});

    </script>

    <script type="text/javascript">
    jQuery(document).ready(function(){

        //ACCORDION BUTTON ACTION
        //ACCORDION BUTTON ACTION (ON CLICK DO THE FOLLOWING)
        jQuery('thead.kepala').click(function() {

            //REMOVE THE ON CLASS FROM ALL BUTTONS
            jQuery('thead.kepala').removeClass('on');

            //NO MATTER WHAT WE CLOSE ALL OPEN SLIDES

            jQuery('tbody').slideUp('fast');
            //jQuery('tbody').hide();

            //IF THE NEXT SLIDE WASN'T OPEN THEN OPEN IT
            if(jQuery(this).next().is(':hidden') == true) {

                //ADD THE ON CLASS TO THE BUTTON
                jQuery(this).addClass('on');

                //OPEN THE SLIDE
                jQuery(this).next().slideDown('fast');
             }

         });


        //HIDE THE DIVS ON PAGE LOAD
        //$("div.accordionContent").hide();



        jQuery('.kepala2') .click(
            function() {
                jQuery(this) .next('.kepala2-isi') .toggle();
            }
        );


        initTip();

   function initTip()
    {
        jQuery('.tip_north').tipsy({gravity: 's'});
        jQuery('.tip_south').tipsy({gravity: 'n'});
        jQuery('.tip_east').tipsy({gravity: 'e'});
        jQuery('.tip_west').tipsy({gravity: 'w'});
    }



    });
    </script>
</head>

<body>
	<!--Header-->
	<header>
		<!--Logo-->
		<div id="logo"><a href="#"><img src="<?php echo $this->webroot;?>/images/logo.png" alt="" /></a></div>
		<dl class="user_info">

			<dd>
				<a class="welcome_user" href="#">Welcome, <strong>Administrator</strong></a>
				<a class="logout" href="./login.html"> Logout</a>
			</dd>
		</dl>
</header>
<!--Dreamworks Container-->
<div id="dreamworks_container">
	<!--Primary Navigation-->
	<nav id="primary_nav">
		<ul>
			<li class="nav_dashboard"><a href="<?php echo $this->webroot;?>kecamatans/home">Home</a></li>
			<li class="nav_graphs <?php if($mainNav == 'sekolah'){ ?> active <?php } ?>"><a href="<?php echo $this->webroot;?>schools/jenis/sd">Sekolah</a></li>
			<li class="nav_forms <?php if($mainNav == 'siswa'){ ?> active <?php } ?>"><a href="<?php echo $this->webroot;?>schools/siswa_kelas/sd">Siswa</a></li>
			<li class="nav_typography <?php if($mainNav == 'ptk'){ ?> active <?php } ?>"><a href="<?php echo $this->webroot;?>schools/ptk_status/sd">Pendidik</a></li>
			<li class="nav_pages1 <?php if($mainNav == 'kelulusan'){ ?> active <?php } ?>"><a href="<?php echo $this->webroot;?>schools/rekap_kelulusan">Kelulusan</a></li>
			<li class="nav_uielements<?php if($mainNav == 'prasarana'){ ?> active <?php } ?>"><a href="<?php echo $this->webroot;?>schools/prasarana_teori_kelas/sd">Prasarana</a></li>
			<li class="nav_pages<?php if($mainNav == 'sarana' || $mainNav == 'saranabuku' || $mainNav == 'sarana_alat' || $mainNav == 'saranatik'){ ?> active <?php } ?>"><a href="<?php echo $this->webroot;?>schools/sarana">Sarana</a></li>

			<li class="nav_pagesa <?php if($mainNav == 'biaya'){ ?> active <?php } ?>"><a href="<?php echo $this->webroot;?>schools/biaya_penerimaan/sd">Biaya</a></li>
		</ul>
	</nav>
	<!--Main Content-->
	<section id="main_content">
		<!--Secondary Navigation-->
		<nav id="secondary_nav">
			<?php
			if($secondarynav == 'config'){
				echo $this->element('nav_config');
			}elseif ($secondarynav == 'sekolah') {
                echo $this->element('nav_sekolah');
            }elseif ($secondarynav == 'siswa') {
                echo $this->element('nav_siswa');
            }elseif ($secondarynav == 'ptk') {
                echo $this->element('nav_ptk');
            }elseif ($secondarynav == 'biaya') {
                echo $this->element('nav_biaya');
            }elseif ($secondarynav == 'kelulusan') {
                echo $this->element('nav_kelulusan');
            }elseif ($secondarynav == 'prasarana') {
                echo $this->element('nav_prasarana');
            }elseif ($secondarynav == 'sarana') {
                echo $this->element('nav_sarana');
            }elseif ($secondarynav == 'saranabuku') {
                echo $this->element('nav_saranabuku');
            }elseif ($secondarynav == 'sarana_alat') {
                echo $this->element('nav_sarana_alat');
            }elseif ($secondarynav == 'saranatik') {
                echo $this->element('nav_saranatik');

             }elseif ($secondarynav == 'nav_import') {
                echo $this->element('nav_import');

            }
			?>
		</nav>
		<!--Content Wrap-->
		<div id="content_wrap">
			<?php $session->flash(); ?>
			<?php $session->flash('auth')?>
			<?php echo $content_for_layout;?>
		</div>
                        <div id="loading-block" style="display:none;"><p>Loading.....<br/><small>Silahkan tunggu</small></p></div>
	</section>
</div>

</body>
</html>
