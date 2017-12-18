<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Admin</title>
    <!-- Bootstrap -->
    <link href="<?= base_url()?>assets/css/bootstrap.css" rel="stylesheet">
    <!--Dashboard-->
    <link href="<?= base_url()?>assets/css/dasboard.css" rel="stylesheet">
    <!-- footer -->
    <link href="<?= base_url()?>assets/css/footer.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span
                    class="icon-bar"></span><span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://www.jquery2dotnet.com">Portal Praktikum</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
           
            <ul class="nav navbar-nav navbar-right">
                <!--<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                    class="glyphicon glyphicon-comment"></span>Chats <span class="label label-primary">42</span>
                </a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><span class="label label-warning">7:00 AM</span>Hi :)</a></li>
                        <li><a href="#"><span class="label label-warning">8:00 AM</span>How are you?</a></li>
                        <li><a href="#"><span class="label label-warning">9:00 AM</span>What are you doing?</a></li>
                        <li class="divider"></li>
                        <li><a href="#" class="text-center">View All</a></li>
                    </ul>
                </li>-->
            
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                    class="glyphicon glyphicon-user"></span> <?php echo $this->session->userdata['nama_assistant']?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span>Profile</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-cog"></span>Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="<?= base_url() ?>/logout/admin"><span class="glyphicon glyphicon-off"></span>Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
    <div class="container-fluid main-container">
        <!--side bar Header-->
        <div class="col-md-2 sidebar">
            <div class="row">
    <div class="absolute-wrapper"> </div>
    <div class="side-menu">
        <nav class="navbar navbar-primary" role="navigation">
            <!-- Main Menu -->
            <div class="side-menu-container">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?= base_url() ?>wp_admin"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>

                    <!-- Dropdown-->
                    <li class="panel panel-default" id="dropdown">
                        <a data-toggle="collapse" href="#post">
                            <span class="glyphicon glyphicon-pushpin"></span> Post  <span class="caret"></span>
                        </a>

                        <!-- Dropdown level 1 -->
                        <div id="post" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="nav navbar-nav">
                                    <li><a href="<?= base_url() ?>wp_admin/all_post">All Post</a></li>
                                    <li><a href="<?= base_url() ?>wp_admin/add_new">Add New Post</a></li>
                                    <li><a href="#">Categories</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="panel panel-default" id="dropdown">
                        <a data-toggle="collapse" href="#subject">
                            <span class="glyphicon glyphicon-book"></span> Subject  <span class="caret"></span>
                        </a>

                        <!-- Dropdown level 1 -->
                        <div id="subject" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="nav navbar-nav">
                                <?php 
                            foreach ($_assistant as $key => $assistant) {
                                foreach ($_mengajar as $key => $mengajar) {
                                  if($assistant['id_assistant']==$mengajar['id_assistant']){
                                    foreach ($_matakuliah as $key => $matakuliah) {
                                        if($mengajar['id_matkul']==$matakuliah['id_matkul']){?>
                                    <li><a href="<?=base_url()?>wp_admin/mata_kuliah/<?php echo $matakuliah['id_matkul']?>"><?php echo $matakuliah['nama_matkul'];?></a></li>
                                    <?php 
                                        }
                                    }
                                  }
                                }      
                            }?>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <li><a href="#"><span class="glyphicon glyphicon-signal"></span> Link</a></li>

                </ul>
            </div>
        </nav>
    </div>
</div>          
</div>
<!--end sidebar Header-->
