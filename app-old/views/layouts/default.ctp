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

    ?>




<?php echo  $javascript->link(array('prototype','scriptaculous')); ?>

    <?php echo $scripts_for_layout; ?>
    <style>
    .floatingHeader {
    	position: fixed;
    	top: 0;
    	visibility: hidden;
    }
    </style>


    <script>
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

    // DOM Ready
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

        jQuery('thead.kepala') .click(
            function() {
                jQuery(this) .next('tbody') .toggle();
            }
        )

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
			<li class="nav_dashboard"><a href="<?php echo $this->webroot;?>schools/home">Home</a></li>
			<li class="nav_graphs <?php if($mainNav == 'sekolah'){ ?> active <?php } ?>"><a href="<?php echo $this->webroot;?>schools/jenis">Sekolah</a></li>
			<li class="nav_forms <?php if($mainNav == 'siswa'){ ?> active <?php } ?>"><a href="<?php echo $this->webroot;?>schools/siswa_kelas/sd">Siswa</a></li>
			<li class="nav_typography <?php if($mainNav == 'ptk'){ ?> active <?php } ?>"><a href="<?php echo $this->webroot;?>schools/ptk_status/sd">Pendidik</a></li>
			<li class="nav_typography <?php if($mainNav == 'kelulusan'){ ?> active <?php } ?>"><a href="<?php echo $this->webroot;?>schools/rekap_kelulusan">Kelulusan</a></li>
			<li class="nav_uielements"><a href="./ui_elements.html">Prasarana</a></li>
			<li class="nav_pages"><a href="./pages.html">Sarana</a></li>
			<li class="nav_typography <?php if($mainNav == 'biaya'){ ?> active <?php } ?>"><a href="<?php echo $this->webroot;?>schools/biaya_penerimaan/sd">Biaya</a></li>
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
            }
			?>
		</nav>
		<!--Content Wrap-->
		<div id="content_wrap">
			<?php $session->flash(); ?>
			<?php $session->flash('auth')?>
			<?php echo $content_for_layout;?>
		</div>
	</section>
</div>

</body>
</html>
