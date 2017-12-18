<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Portal Praktikum</title>
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
    <link href="<?= base_url()?>assets/css/admin.css" rel="stylesheet">
    <link href="<?= base_url()?>assets/css/footer.css" rel="stylesheet">

    <script src="<?= base_url()?>assets/js/dropdown.js"></script>

    <script src="<?= base_url()?>/assets/js/slide.js"></script>
    <script src="<?= base_url()?>/assets/js/admin.js"></script>
</head>

<body>

    <!-- Navigation -->
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
           <ul class="nav navbar-nav navbar-right pull-left">
      <li><a href="<?= base_url()?>page" class="dropdown-toggle"  > <span class="glyphicon glyphicon-home"></span> Beranda </a></li>
             <li><a href="<?= base_url()?>page/pengajar" class="dropdown-toggle"  > <span class="glyphicon glyphicon-user"></span> Asisten </a></li>
           <li><a href="<?= base_url()?>page/laboran" class="dropdown-toggle"  > <span class="glyphicon glyphicon-file"></span> Laboratorium </a></li>
          <li><a href="<?= base_url()?>page/about" class="dropdown-toggle"  > <span class="glyphicon glyphicon-ok"></span> Tentang Kami</a></li>
              <li><a href="<?= base_url()?>page/us" class="dropdown-toggle"  > <span class="glyphicon glyphicon-envelope"></span> Kontak Kami</a></li>  
           </ul>
             
         </div>
             

         </td>
       </tr>
     </table>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right pull-right">
       <li class="dropdown" >
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" ><span class="glyphicon glyphicon-user"></span> Masuk <span class="caret"></span></a>
          <ul id="login-dp" class="dropdown-menu">
           <div class="row">
              <div class="col-md-12">
                 <form class="form" role="form" method="post" action="<?= base_url()?>Login" accept-charset="UTF-8" id="login-nav">
                    <div class="form-group">
                       <label class="sr-only" for="exampleInputEmail2">NPM</label>
                       <input type="text" name="npm" class="form-control" id="exampleInputEmail2" placeholder="Masukkan NPM" required>
                    </div>
                    <div class="form-group">
                       <label class="sr-only" for="exampleInputPassword2">Kata Sandi</label>
                       <input type="password" name="password" class="form-control" id="exampleInputPassword2" placeholder="Kata sandi" required>
                                             <div class="help-block text-right"><a href="<?= base_url()?>/page/us">Lupa Kata Sandi ?</a></div>
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
                Pengguna baru?<a href="<?php base_url()?>page/us"><b>Kontak kami</b></a>
              </div>
            </div>
           </ul>
        </li>
        <li></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="<?= base_url()?>assets/images/a.jpg">
                <div class="carousel-caption">
                    <h3>
                        Headline</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem
                        ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                </div>
            </div>
            <!-- End Item -->
            <div class="item">
                <img src="<?= base_url()?>assets/images/b.jpg">
                <div class="carousel-caption">
                    <h3>
                        Headline</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem
                        ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                </div>
            </div>
            <!-- End Item -->
            <div class="item">
                   <img src="<?= base_url()?>assets/images/c.jpg">
                <div class="carousel-caption">
                    <h3>
                        Headline</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem
                        ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                </div>
            </div>
            <!-- End Item -->
            <div class="item">
                <img src="<?= base_url()?>assets/images/d.jpg">
                <div class="carousel-caption">
                    <h3>
                        Headline</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem
                        ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                </div>
            </div>
            <!-- End Item -->
        </div>
    </div>
    <!-- End Carousel -->
</div>
<br /><br /><br />