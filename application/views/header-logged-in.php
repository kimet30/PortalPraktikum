<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Beranda</title>
    <link href="<?= base_url()?>assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?= base_url()?>assets/css/bootstrap.css" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/themes/base/jquery-ui.css" type="text/css" media="all" />
        <link rel="stylesheet" href="http://static.jquery.com/ui/css/demo-docs-theme/ui.theme.css" type="text/   css" media="all" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" type="text/javascript"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Custom CSS -->
    <link href="<?= base_url()?>assets/css/blog-home.css" rel="stylesheet">
    <!-- Navbar bootstrap change-->
    <link href="<?= base_url()?>assets/css/nav-change.css" rel="stylesheet">
    <!-- Edit Modal Login -->
    <link href="<?= base_url()?>assets/css/modal-login.css" rel="stylesheet">
    <!-- Header login css -->
    <link href="<?= base_url()?>assets/css/header-login.css" rel="stylesheet">
    <!--slide css-->
    <link href="<?= base_url()?>assets/css/slide.css" rel="stylesheet">
        <!-- Header login css -->
    <link href="<?= base_url()?>assets/css/upload.css" rel="stylesheet">
    <!-- Header login css -->
    <link href="<?= base_url()?>assets/css/matakuliah.css" rel="stylesheet">

    <link href="<?= base_url()?>assets/css/profil_aslab.css" rel="stylesheet">

    <link href="<?= base_url()?>assets/css/error.css" rel="stylesheet">
    <!-- Header login css -->
    <link href="<?= base_url()?>assets/css/footer.css" rel="stylesheet">
<!-- Header Font Awasome css -->
    <link href="<?= base_url()?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="<?= base_url()?>Assets/js/matkul2.js"></script>
    <script src="<?= base_url()?>Assets/js/error.js"></script>
    <script >
      function  myFunction(){
          alert("Page is loaded");
      }
    </script>
</head>
<body >
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <table>
       <tr>
         <td>
            <div class="col-md-2"></div>
         </td>
         <td>

         </td>
       </tr>
     </table>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right pull-left">
      <li><a href="<?= base_url()?>page" class="dropdown-toggle"  > <span class="glyphicon glyphicon-home"></span> Beranda </a></li>
             <li><a href="<?= base_url()?>page/pengajar" class="dropdown-toggle"  > <span class="glyphicon glyphicon-user"></span> Asisten </a></li>
           <li><a href="<?= base_url()?>page/laboran" class="dropdown-toggle"  > <span class="glyphicon glyphicon-file"></span> Laboratorium </a></li>
          <li><a href="<?= base_url()?>page/about" class="dropdown-toggle"  > <span class="glyphicon glyphicon-ok"></span> Tentang Kami</a></li>
           </ul>
           <ul class="nav navbar-nav navbar-right pull-right">   
      <li><a href="<?= base_url()?>page/us" class="dropdown-toggle"  > <span class="glyphicon glyphicon-envelope"></span> Kontak Kami</a></li>
       <li class="dropdown" >
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" ><span class="glyphicon glyphicon-user"></span> Profil<span class="caret"></span></a>
	          <ul id="login-dp" class="dropdown-menu">
	          <li><a href="#"><span class="glyphicon glyphicon-user"></span> Profil</a></li>
	          <li><a href="<?php base_url()?>Edit_profil"><span class="glyphicon glyphicon-wrench"></span>Pengaturan</a></li>
	          <li class="divider"></li>
	          <li><a href="<?php base_url()?>logout"><span class="glyphicon glyphicon-off"></span> Keluar</a></li>
           </ul>
        </li>
            </ul>
            
    </div>
  </div>
</nav>
<br /><br />
