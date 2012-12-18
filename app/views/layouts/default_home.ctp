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
    echo $javascript->link('jquery.tipsy');
    echo $javascript->link('cl_editor/jquery.cleditor.min');
    echo $javascript->link('/uploadify/swfobject');
    echo $javascript->link('/uploadify/jquery.uploadify.v2.1.4.min');
    echo $javascript->link('jquery.autogrowtextarea');
    echo $javascript->link('form_elements');
    echo $javascript->link("jquery.ui.core.js");
    echo $javascript->link('jquery.ui.widget');
    echo $javascript->link('jquery.ui.mouse');
    echo $javascript->link('jquery.ui.slider');
    echo $javascript->link('jquery.ui.progressbar');
    echo $javascript->link('jquery.ui.datepicker');
    echo $javascript->link('jquery.ui.tabs');
    echo $javascript->link('fullcalendar');
    echo $javascript->link('gcal');
    echo $javascript->link('bootstrap-modal');
    echo $javascript->link('fancybox/jquery.fancybox-1.3.4.pack');
    echo $javascript->link('fancybox/jquery.mousewheel-3.0.4.pack');
    echo $javascript->link('highlight');
    echo $javascript->link('main');
    echo $javascript->link('jquery.min.1.6.2');
    echo $javascript->link('jquery-ui.min');

    ?>




    <!--<?php echo  $javascript->link(array('prototype','scriptaculous')); ?>-->

    <?php echo $scripts_for_layout; ?>
    <style>
    .floatingHeader {
      position: fixed;
      top: 0;
      visibility: hidden;
    }
    </style>


    <script type="text/javascript" language="javascript">

    $(document).ready(function() {
      $(".tombol").mouseenter(function () {
        $(this).effect("bounce", { direction: 'up', distance: 5, times: 3 });
      });
      $(".tombol").mouseleave(function () {
      });
    });
    </script>
    <script type="text/javascript" language="javascript">

    $(document).ready(function() {
      $(".tumbul").mouseenter(function () {
        $(this).effect("bounce", { direction: 'left', distance: 5, times: 3 });
      });
      $(".tumbul").mouseleave(function () {
      });
    });
    </script>
  </head>

  <body id="login_container">

    <!--Dreamworks Container-->
    <div id="home">
      <?php echo $content_for_layout;?>
    </div>

  </body>
  </html>
