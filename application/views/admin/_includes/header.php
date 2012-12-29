<!DOCTYPE HTML>
<html lang="es-ES">
<head>
  <meta charset="utf-8">
  <title>Gestor de Contenidos - Dashboard V5</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="Controlizer V4 Cake - Gestor de Contenidos de IT7" />
  <meta name="robots" content="noindex" />
  <meta name="MSSmartTagsPreventParsing" content="true" />
  <meta http-equiv="pragma" content="no-cache" />
  <meta http-equiv="imagetoolbar" content="no" />
  <meta http-equiv="X-UA-Compatible" content="IE=8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="IT7">
  <?php if( !empty($meta)) echo $meta; ?>
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/admin/favicon.png" />
  <link rel="made" href="http://www.it7.info/" title="Instituto Canario de Telecomunicaciones (IT7)" />
  <link rel="copyright" href="http://www.it7.info/copyright.php" title="Copyright" />
  <!-- ESTILO PARA QUE EL NAV FIJO NO SOLAPE EL BODY-->
  <style type="text/css">
    body {
      position: relative;
      padding-top: 40px;
      padding-top: 50px;
    }
  </style>
  <!-- Bootstrap CSS Toolkit styles -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/admin/bootstrap/bootstrap.css'); ?>">
  <!-- Bootstrap styles for responsive website layout, supporting different screen sizes -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/admin/bootstrap/bootstrap-responsive.css'); ?>">
  <!-- CSS DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/admin/bootstrap/DT_bootstrap.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/admin/bootstrap/no-more-tables.css'); ?>">

  <!-- Calendar -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/admin/fullcalendar/fullcalendar.css'); ?>">
  <!-- CSS datapicker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/admin/datapicker.css'); ?>" type="text/css"/>

  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <!-- Bootstrap CSS fixes for IE6 -->
  <!--[if lt IE 7]><link rel="stylesheet" href="http://blueimp.github.com/cdn/css/bootstrap-ie6.min.css"><![endif]-->

  <!-- Sticky notifications -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/admin/gritter/jquery.gritter.css'); ?>">
  <!-- Fin Sticky notifications -->

  <!-- JavaScript general -->
  <script type="text/javascript" src="<?php echo base_url('assets/js/admin/procesar.js'); ?>"></script>

  <!-- JavaScript jQuery -->
  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-ui.js'); ?>"></script>

  <!-- Jquery Datapicker -->
  <script type="text/javascript" src="<?php echo base_url('assets/js/admin/custom_datepicker.js'); ?>"></script>

  <!-- jQuery fullCalendar -->
  <script type="text/javascript" src="<?php echo base_url('assets/js/admin/calendar/fullcalendar.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/admin/calendar/init_calendar.js'); ?>"></script>
  <!-- Fin jQuery fullCalendar -->

  <!-- Bootstrap -->
  <script type="text/javascript" src="<?php echo base_url('assets/js/admin/bootstrap/bootstrap.js'); ?>"></script>
  <!-- Alerts -->
  <script type="text/javascript" src="<?php echo base_url('assets/js/admin/bootstrap/bootstrap-alert.js'); ?>"></script>
  <!-- Transitions -->
  <script type="text/javascript" src="<?php echo base_url('assets/js/admin/bootstrap/bootstrap-transition.js'); ?>"></script>
  <!-- Acordeon -->
  <script type="text/javascript" src="<?php echo base_url('assets/js/admin/bootstrap/bootstrap-collapse.js'); ?>"></script>
  <!-- JavaScript DataTables -->
  <script type="text/javascript" src="<?php echo base_url('assets/js/admin/jquery.dataTables.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/admin/DT_bootstrap.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/admin/DT_init.js'); ?>"></script>

  <!-- jQuery Validations -->
  <script type="text/javascript" src="<?php echo base_url('assets/js/admin/jquery.validate.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/admin/jquery.validate.formtarea.js'); ?>"></script>
  <!-- Tiny -->
  <script type="text/javascript" src="<?php echo base_url('assets/js/admin/tiny_mce/tiny_mce.js'); ?>"></script>
  <!-- Fin DataTable -->

  <!-- Sticky notifications -->
  <script type="text/javascript" src="<?php echo base_url('assets/js/admin/gritter/jquery.gritter.min.js'); ?>"></script>
  <!-- Fin Sticky notifications -->

  <!-- Script base de pruebas -->
  <script language="javascript" type="text/javascript">

    $(document).ready(function(){
      $(".alert").alert();
    });

    base_url='http://localhost/www.vacaciones.com/index.php/';

    tinyMCE.init({
            // General options
            mode : "textareas",
            theme : "advanced",
            plugins : "autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

            // Theme options
            theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,fontselect,fontsizeselect,|,bullist,numlist,|,outdent,indent,|,link,unlink,anchor,image,cleanup,code,|,insertdate,inserttime,preview,|,forecolor,backcolor,table",
            theme_advanced_toolbar_location : "top",
            theme_advanced_toolbar_align : "center",
            theme_advanced_resizing : true,

            // Skin options
            skin : "o2k7",
            skin_variant : "black",

            // update validation status on change
            onchange_callback: function(editor) {
              tinyMCE.triggerSave();
              $("#" + editor.id).valid();
            }
    });


</script>

  </head>
<body>
  <!-- Nav -->
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container-fluid">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
          <a class="brand" href="#">Gestor de contenidos IT7</a>
          <p class="navbar-text pull-right">
            <i class="icon-user icon-white"></i> You are logged in as
            <a href="#"><?php echo ' ' . $this->session->userdata('username'); ?></a><a href="<?php echo base_url('admin/logout'); ?> ">(Cerrar sesión)</a>
          </p>
      </div><!--/.nav-collapse -->
    </div>
  </div>
  <!-- End Nav -->