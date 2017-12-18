<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Masuk</title>
    <link href="<?= base_url()?>assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?= base_url()?>assets/css/bootstrap.css" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= base_url()?>assets/css/blog-home.css" rel="stylesheet">
    <!-- Navbar bootstrap change-->
    <link href="<?= base_url()?>assets/css/nav-change.css" rel="stylesheet">
    <!-- Edit Modal Login -->
    <link href="<?= base_url()?>assets/css/modal-login.css" rel="stylesheet">

    <link href="<?= base_url()?>assets/css/slide.css" rel="stylesheet">

    <link href="<?= base_url()?>assets/css/login_page.css" rel="stylesheet">

    <link href="<?= base_url()?>assets/css/contact_us.css" rel="stylesheet">

    <link href="<?= base_url()?>assets/css/footer.css" rel="stylesheet">

    <script src="<?= base_url()?>assets/js/dropdown.js"></script>

    <script src="<?= base_url()?>/assets/js/slide.js"></script>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
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
         <div class="col-offset-2">
           <a style="color:white; background-color:#F57F17; font-size:14pt;" class="navbar-brand" href="<?= base_url()?>page"> <span class="glyphicon glyphicon-home"></span> Portal Praktikum</a>
         </div>

         </td>
       </tr>
     </table>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right pull-right">
       <li class="dropdown" >
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" ><span class="glyphicon glyphicon-log-in"></span> Masuk <span class="caret"></span></a>
          <ul id="login-dp" class="dropdown-menu">
           <div class="row">
              <div class="col-md-12">
               <div>
                 <p>Masuk disini </p>
               </div> 
                 <form class="form" role="form" method="post" action="<?= base_url()?>Login" accept-charset="UTF-8" id="login-nav">
                    <div class="form-group">
                       <label class="sr-only" for="exampleInputEmail2">NPM</label>
                       <input type="text" name="npm" class="form-control" id="exampleInputEmail2" placeholder="Masukkan NPM " required>
                    </div>
                    <div class="form-group">
                       <label class="sr-only" for="exampleInputPassword2">Kata Sandi</label>
                       <input type="password" name="password" class="form-control" id="exampleInputPassword2" placeholder="Masukkan kata sandi" required>
                                             <div class="help-block text-right"><a href="">Lupa Kata Sandi?</a></div>
                    </div>
                    <div class="form-group">
                       <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                    </div>
                    <div class="checkbox">
                       <label>
                       <input type="checkbox">Biarkan tetap masuk
                       </label>
                    </div>
                 </form>
              </div>
              <div class="bottom text-center">
                New here ? <a href="<?php base_url()?>page/us"><b>Kontak Kami</b></a>
              </div>
            </div>
           </ul>
        </li>
        <li><a href="<?= base_url()?>page/us" class="dropdown-toggle"  > <span class="glyphicon glyphicon-envelope"></span>Kontak Kami</a></li>
      </ul>
    </div>
  </div>
</nav>
