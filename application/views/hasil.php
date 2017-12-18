<?php 
  foreach ($_mahasiswa as $key => $mahasiswa) {
?>
<div class="container" id="matakuliah">
  <div class="row well">
    <div class="col-md-3">
          <ul class="nav nav-pills nav-stacked well">
              <div class="form-group">
                            <select  id="semester" class="form-control" >
                                <?php $batas=1;
                                foreach ($_semester as $key => $semester) {?>
                                  <option value="<?php echo $semester['id_semester']?>" <?php if($param==$batas){echo "selected";}$batas++;?> ><?php echo $semester['semester'];?></option>  
                                  <?php
                                }
                                $batas=1;
                                ?>
                            </select>
                        </div>
                        <div class="form-group" id="">
                        <ul class="nav nav-pills nav-stacked ">
                        <?php foreach ($_mengambil as $key => $mengambil) {
                          foreach ($_matakuliah as $key => $matakuliah) {
                            if($mengambil['id_matkul']==$matakuliah['id_matkul']){
                           ?>
                             <li  ><a href="<?= base_url();?><?php echo $matakuliah['id_matkul']?>"><i class="fa "></i> <?php echo $matakuliah['nama_matkul'];?></a></li>
                           <?php
                            }
                          }
                        }?>
                        </ul>
                        </div>
              </ul>
        </div>
        <div class="col-md-9">
                <div class="panel2">
                    <img style="border:1px solid #dddddd; padding:3px; background:white; border : 1px solid #dddddd; background : #ddd;-moz-border-radius : 5px;"width="120px" height="150px" class="pic img-circle" src="https://media.unpad.ac.id/photo/mahasiswa/140810/2014/<?php echo $mahasiswa['npm'];?>.JPG" alt="...">
                    
                    <div class="name" style=""><small > <?php echo $mahasiswa['nama']?></small><h4>( <?php echo $mahasiswa['npm']?> )</h4></div>
                    <!--<a href="#" class="btn btn-xs btn-primary pull-right" style="margin:10px;"><span class="glyphicon glyphicon-picture"></span> Change cover</a>-->
                </div>          
        <br /><br />
        <br /><br />
            <ul class="nav nav-tabs" id="myTab">
              <li class=""><a href="#sent" data-toggle="tab"><i class="fa fa-reply-all"></i> Sent</a></li>
              <li class="active"> <a href="#assign" data-toggle="tab"><i class="fa fa-file-text-o"></i> Assignment</a></li>
              
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="assign">
              <?php 
              	foreach ($_mengerjakan_tugas as $key => $mengerjakan_tugas) {
              		foreach ($_tugas as $key => $tugas) {
              			if($mengerjakan_tugas['status']==0&&$mengerjakan_tugas['id_tugas']==$tugas['id_tugas']){?>

                <a type="button" data-toggle="collapse" data-target="#a<?php echo $tugas['id_tugas'];?>">
                    <div class="btn-toolbar well well-sm" role="toolbar"  style="margin:0px;">
                      <div class="btn-group col-md-3"><input type="checkbox"> <?php echo $tugas['nama_tugas'];?></div>
                      <div class="btn-group col-md-3"><b>Deadline</b> <div class="pull-right"><button class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-share-square-o"> more</i></button></div> </div>
                    </div>
                </a>
                <div id="a<?php echo $tugas['id_tugas'];?>" class="collapse out well"><span class="glyphicon glyphicon-time"></span> Time over :  <?php echo $tugas['deadline']?></div>
				<?php
						}
              		}
              	}
              ?>
              </div>
             <div class="tab-pane" id="sent">
             	<?php 
                $tiga=0;
              	foreach ($_mengerjakan_tugas as $key => $mengerjakan_tugas) {
              		foreach ($_tugas as $key => $tugas) {
              			if($mengerjakan_tugas['status']==1&&$mengerjakan_tugas['id_tugas']==$tugas['id_tugas']&&$tiga!=3){?>
                    <a type="button" data-toggle="collapse" data-target="">
                    <div class="btn-toolbar well well-sm" role="toolbar"  style="margin:0px;">
                      <div class="btn-group col-md-4"><input type="checkbox"> <?php echo $tugas['nama_tugas']?></div>
                      <div class="btn-group col-md-6"><b>Completed</b> <div class="pull-right"><i class="glyphicon glyphicon-time"> </i> <?php echo $mengerjakan_tugas['tanggal_kirim']?> </div> </div>
                    </div>
                </a>
                
                <?php $tiga++;
                	}
                }
            }
                ?>
              </div>       
            </div>
     </div>
  </div>
  <div class="container">
    <div class="page-header">
        <h2>Semester : <?php echo $param;?></h2>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel with-nav-tabs panel-default">
                <div class="panel-heading">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tugas" data-toggle="tab"><span class="glyphicon glyphicon-list-alt"></span> List Task</a></li>
                        <li><a href="#absen" data-toggle="tab"><span class="glyphicon glyphicon-ok-sign"></span> Attendance</a></li>
                        <li><a href="#nilai" data-toggle="tab"><span class="glyphicon glyphicon-stats"></span> Grade</a></li>
                        <li><a href="#jadwal" data-toggle="tab"><span class="glyphicon glyphicon-calendar"></span> Schedule </a></li>
                        <li><a href="#history" data-toggle="tab"> <span class="glyphicon glyphicon-repeat"></span> List & History Task</a></li>
                        <li><a href="#JQuery" data-toggle="tab"> <span class="glyphicon glyphicon-font"></span> Asistant</a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tugas">
                            <div class="container">
                                <div class="row">
                            <!-- Blog Entries Column -->
                                    <div class="col-md-7">
                                    <h1 class="page-header">
                                        <small></small>
                                    </h1>
                                <!-- First Blog Post -->
                                <?php foreach ($_tugas as $tugas ){
                                    if($param==$tugas['id_semester']){
                                    ?>
                                    <h2>
                                        <a style="text-decoration:none" href="<?= base_url()?>page/post/<?php echo $tugas['id_tugas'];?>"><?php  echo $tugas['nama_tugas'];?></a>
                                    </h2>
                                    <p >by <a href="index.php" style="text-decoration:none"><?php echo ""; ?></a></p>
                                    <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $tugas['tanggal_tugas']?></p>
                                    <p align="justify"><?php echo substr($tugas['teks_ket'],0,400),"[....]" ?></p>
                                    <a class="btn btn-primary" href="<?= base_url()?>page/post/<?php echo  $tugas['id_tugas'];?>">Read More<span class="glyphicon glyphicon-chevron-right"></span></a>
                                    <hr>
                                    <?php 
                                    }
                                  }?>
                                    
                                    </div>
                            <!-- Blog Sidebar Widgets Column -->
                                    <div class="col-md-3 col-md-offset-1">
                                    <div class="row"><br /><br /></div>
                                        <div class="well">
                                            <div class="input-group">
                                                <form action="<?php echo site_url('page');?>" method="POST">
                                                    <input type="text" name="pencarian" placeholder="Type for search "class="form-control">
                                                    <span class="input-group-btn form-group">
                                                        <button class="btn btn-default" type="submit" value="cari">
                                                            <span class="glyphicon glyphicon-search"></span>
                                                    </button>
                                                    </span>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="absen">
                            <div class="container">
                                <div class="col-lg-12" style="padding: 0px; margin: 0px;">
                                    <div class="row">
                                    <h2>Absensi </h2>
                                    <p>Laboratorium Teknik Informatika Department Ilmu Komputer Fakultas MIPA</p>
                                        <div class="col-lg-11 " style="padding: 0px; margin: 0px;">
                                            <div class="panel panel-default panel-table">
                                                <div class="panel-body">
                                                    <table class="table table-striped table-bordered table-list">
                                                        <thead>
                                                            <tr>
                                                                <th rowspan="2" class="hidden-xs" align="center">No</th>
                                                                <th rowspan="2" class="hidden-xs">Sandi Kode</th>
                                                                <th rowspan="2" class="hidden-xs">Mata Kuliah</th>
                                                                <th rowspan="2" class="hidden-xs">SKS</th>
                                                                <th colspan="16"class="hidden-xs" align="center">Pertemuan Ke</th>
                                                            </tr> 
                                                            <tr>
                                                                <th>1</th><th>2</th><th>3</th><th>4</th><th>5</th><th>6</th><th>7</th><th>8</th><th>9</th><th>10</th><th>11</th><th>12</th><th>13</th><th>14</th><th>15</th><th>16</th>
                                                            </tr> 
                                                        </thead>
                                                        <tbody>
                                                         <?php 
                                                         $no=1;
                                                         foreach ($_semesterf as $key => $semester) {
                                                         foreach ($_absen as $key => $absen) {
                                                                foreach ($_matakuliah as $key => $matakuliah) {
                                                                    if($absen['npm']==$_SESSION['npm']&&$absen['id_semester']==$semester['id_semester']&&$absen['id_matkul']==$matakuliah['id_matkul']){
                                                                        ?>
                                                            <tr>
                                                                <td align="center"><p></p><?php echo $no;$no++?></p></td>
                                                                <td class="hidden-xs"><?php echo $matakuliah['id_matkul']?></td>
                                                                <td><?php echo $matakuliah['nama_matkul']?></td>
                                                                <td><?php echo $matakuliah['jum_sks'];?></td>
                                                                <td><?php if($absen['pert1']==1) echo "Y";else echo "-";?></td>
                                                                <td><?php if($absen['pert2']==1) echo "Y";else echo "-";?></td>
                                                                <td><?php if($absen['pert3']==1) echo "Y";else echo "-";?></td>
                                                                <td><?php if($absen['pert4']==1) echo "Y";else echo "-";?></td>
                                                                <td><?php if($absen['pert5']==1) echo "Y";else echo "-";?></td>
                                                                <td><?php if($absen['pert6']==1) echo "Y";else echo "-";?></td>
                                                                <td><?php if($absen['pert7']==1) echo "Y";else echo "-";?></td>
                                                                <td><?php if($absen['pert8']==1) echo "Y";else echo "-";?></td>
                                                                <td><?php if($absen['pert9']==1) echo "Y";else echo "-";?></td>
                                                                <td><?php if($absen['pert10']==1) echo "Y";else echo "-";?></td>
                                                                <td><?php if($absen['pert11']==1) echo "Y";else echo "-";?></td>
                                                                <td><?php if($absen['pert12']==1) echo "Y";else echo "-";?></td>
                                                                <td><?php if($absen['pert13']==1) echo "Y";else echo "-";?></td>
                                                                <td><?php if($absen['pert14']==1) echo "Y";else echo "-";?></td>
                                                                <td><?php if($absen['pert15']==1) echo "Y";else echo "-";?></td>
                                                                <td><?php if($absen['pert16']==1) echo "Y";else echo "-";?></td>
                                                                
                                                            </tr>
                                                            <?php     }
                                                                    }
                                                                }
                                                            }?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="panel-footer">
                                                    <div class="row">
                                                        <div class="col col-xs-4">&copy Asistant Laboratorium </div>
                                                        <div class="col col-xs-8">
                                                            <ul class="pagination hidden-xs pull-right">
                                                                <li><a href="#">1</a></li>
                                                            </ul>
                                                            <ul class="pagination visible-xs pull-right">
                                                                <li><a href="#">«</a></li>
                                                                <li><a href="#">»</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nilai">
                            <div class="container">
                            <div class="col-lg-12" style="padding: 0px; margin: 0px;">
                                    <div class="row">
                                    <h2>Nilai </h2>
                                    <p></p>
                                        <div class="col-lg-11 " style="padding: 0px; margin: 0px;">
                                            <div class="panel panel-default panel-table">
                                                <div class="panel-body">
                                                    <table class="table table-striped table-bordered table-list">
                                                        <thead>
                                                            <tr>
                                                                <th rowspan="2" class="hidden-xs" align="center">No</th>
                                                                <th rowspan="2" class="hidden-xs">Sandi Kode</th>
                                                                <th rowspan="2" class="hidden-xs">Mata Kuliah</th>
                                                                <th rowspan="2" class="hidden-xs">SKS</th>
                                                                <th colspan="6"class="hidden-xs" align="center">Nilai</th>
                                                            </tr> 
                                                            <tr>
                                                                <th>Kuis </th>
                                                                <th>Tugas </th>
                                                                <th>UTS </th>
                                                                <th>UAS </th>
                                                                <th>Nilai Akhir</th>
                                                                <th>Mutu</th>
                                                            </tr> 
                                                        </thead>
                                                        <tbody>
                                                        <?php 
                                                        $no=1;
                                                          foreach ($_nilai as $key => $nilai) {
                                                            foreach ($_matakuliah as $key => $matakuliah) {
                                                              if($nilai['npm']==$mahasiswa['npm']&&$nilai['id_semester']==$param&&$matakuliah['id_matkul']==$nilai['id_matkul']){
                                                                ?>
                                                            <tr>
                                                                <td ><?php echo $no;$no++;?></td>
                                                                <td ><?php echo $matakuliah['id_matkul']?></td>
                                                                <td><?php echo $matakuliah['nama_matkul']?></td>
                                                                <td><?php echo $matakuliah['jum_sks']?></td>
                                                                <td><?php echo $nilai['nilai_kuis']?></td>
                                                                <td><?php echo $nilai['nilai_tugas']?></td>
                                                                <td><?php echo $nilai['nilai_uts']?></td>
                                                                <td><?php echo $nilai['nilai_uas']?></td>
                                                                <td><?php ?></td>
                                                                <td><?php ?></td>
                                                            </tr>
                                                            <?php 
                                                              }
                                                            }
                                                          }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="panel-footer">
                                                    <div class="row">
                                                        <div class="col col-xs-4">&copy Asistant Laboratorium </div>
                                                        <div class="col col-xs-8">
                                                            <ul class="pagination hidden-xs pull-right">
                                                                <li><a href="#">1</a></li>
                                                            </ul>
                                                            <ul class="pagination visible-xs pull-right">
                                                                <li><a href="#">«</a></li>
                                                                <li><a href="#">»</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="jadwal">
                        <div class="container">
                                <div class="col-lg-12" style="padding: 0px; margin: 0px;">
                                    <div class="row">
                                    <h2>Jadwal Praktikum </h2>
                                    <p>Laboratorium Teknik Informatika Department Ilmu Komputer Fakultas MIPA</p>
                                        <div class="col-lg-11 " style="padding: 0px; margin: 0px;">
                                            <div class="panel panel-default panel-table">
                                                <div class="panel-body">
                                                    <table class="table table-striped table-bordered table-list">
                                                        <thead>
                                                            <tr>
                                                                <th class="hidden-xs" align="center">No</th>
                                                                <th class="hidden-xs">Hari</th>
                                                                <th class="hidden-xs">Waktu</th>
                                                                <th class="hidden-xs">Mata Kuliah</th>
                                                                <th class="hidden-xs">Kode</th>
                                                                <th class="hidden-xs">SKS</th>
                                                                <th class="hidden-xs">Kelas</th>
                                                                <th class="hidden-xs">Ruang</th>
                                                            </tr> 
                                                        </thead>
                                                    <tbody>
                                                      <?php 
                                                      $no=1;
                                                      foreach ($_mengambil as $key => $mengambil) {
                                                          if($mengambil['npm']==$mahasiswa['npm']&&$mengambil['id_semester']==$param){
                                                            foreach ($_matakuliah as $key => $matakuliah) {
                                                              if($matakuliah['id_matkul']==$mengambil['id_matkul']){
                                                                foreach ($_menempati as $key => $menempati) {
                                                                  if($matakuliah['id_matkul']==$menempati['id_matkul']){
                                                                    foreach ($_ruangan as $key => $ruangan) {
                                                                      if($menempati['id_ruangan']==$ruangan['id_ruangan']&&$menempati['kelas']==$mahasiswa['kelas'])
                                                                      {
                                                                        ?>
                                                        <tr>
                                                            <td ><?php echo $no;$no++;?></td>
                                                            <td ><?php echo $menempati['hari']?></td>
                                                            <td><?php echo $menempati['waktu']?></td>
                                                            <td><?php echo $matakuliah['nama_matkul']?></td>
                                                            <td><?php echo $matakuliah['id_matkul']?></td>
                                                            <td><?php echo $matakuliah['jum_sks']?></td>
                                                            <td><?php echo $menempati['kelas']?></td>
                                                            <td><?php echo $ruangan['nama_ruangan']?></td>
                                                        </tr>
                                                        <?php
                                                                      }
                                                                    }
                                                                  }
                                                                }
                                                              }
                                                            }
                                                          }
                                                        }?>
                                                    </tbody>
                                                    </table>
                                                </div>
                                                <div class="panel-footer">
                                                    <div class="row">
                                                        <div class="col col-xs-4">&copy Asistant Laboratorium </div>
                                                        <div class="col col-xs-8">
                                                            <ul class="pagination hidden-xs pull-right">
                                                                <li><a href="#">1</a></li>
                                                            </ul>
                                                            <ul class="pagination visible-xs pull-right">
                                                                <li><a href="#">«</a></li>
                                                                <li><a href="#">»</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                        <div class="tab-pane fade" id="history">
                            <div class="container">
                                <div class="col-lg-12" style="padding: 0px; margin: 0px;">
                                    <div class="row">
                                    <h2>Assignment</h2>
                                    <p>Berikut adalah List tugas semester <?php echo $param;?> yang belum di kerjakan.</p>
                                        <div class="col-lg-11 " style="padding: 0px; margin: 0px;">
                                            <div class="panel panel-default panel-table">
                                                <div class="panel-body">
                                                    <table class="table table-striped table-bordered table-list">
                                                        <thead>
                                                            <tr>
                                                                <th class="hidden-xs" align="center">No</th>
                                                                <th class="hidden-xs">Nama Tugas</th>
                                                                <th class="hidden-xs">Status</th>
                                                                <th class="hidden-xs">Tanggal Tugas</th>
                                                                <th class="hidden-xs">Deadline</th>
                                                                <th class="hidden-xs">To Page</th>
                                                            </tr> 
                                                        </thead>
                                                    <tbody>
                                                    <?php 
                                                      foreach ($_mengerjakan_tugas as $key => $mengerjakan_tugas) {
                                                        if($mengerjakan_tugas['npm']==$mahasiswa['npm']&&$mengerjakan_tugas['id_semester']==$param){
                                                          foreach ($_tugas as $key => $tugas) {
                                                            if($tugas['id_tugas']==$mengerjakan_tugas['id_tugas']&&$mengerjakan_tugas['status']==0){
                                                              ?>
                                                        <tr>
                                                            <td><?php echo $no;$no++;?></td>
                                                            <td><?php echo $tugas['nama_tugas']?></td>
                                                            <td><?php echo "Not Sent ";?></td>
                                                            <td><?php echo $tugas['tanggal_tugas']?></td>
                                                            <td><?php echo $tugas['deadline']?></td>
                                                            <td><a href="<?= base_url()?>page/post/<?php echo  $tugas['id_tugas'];?>"class="btn btn-primary btn-xs" ><i class="fa fa-share-square-o"> complete now</i></a></td>
                                                        </tr>
                                                        <?php 
                                                            }
                                                          }
                                                        }
                                                      }
                                                    ?>
                                                    </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="col-lg-12" style="padding: 0px; margin: 0px;">
                                    <div class="row">
                                    <h2>Sent</h2>
                                    <p>Berikut adalah List tugas semester <?php echo $param;?> yang sudah di kerjakan.</p>
                                        <div class="col-lg-11 " style="padding: 0px; margin: 0px;">
                                            <div class="panel panel-default panel-table">
                                                <div class="panel-body">
                                                    <table class="table table-striped table-bordered table-list">
                                                        <thead>
                                                            <tr>
                                                                <th class="hidden-xs" align="center">No</th>
                                                                <th class="hidden-xs">Nama Tugas</th>
                                                                <th class="hidden-xs">Status</th>
                                                                <th class="hidden-xs">Tanggal Tugas</th>
                                                                <th class="hidden-xs">Deadline</th>
                                                                <th class="hidden-xs">Tanggal Kirim</th>
                                                            </tr> 
                                                        </thead>
                                                    <tbody>
                                                    <?php 
                                                      foreach ($_mengerjakan_tugas as $key => $mengerjakan_tugas) {
                                                        if($mengerjakan_tugas['npm']==$mahasiswa['npm']&&$mengerjakan_tugas['id_semester']==$param){
                                                          foreach ($_tugas as $key => $tugas) {
                                                            if($tugas['id_tugas']==$mengerjakan_tugas['id_tugas']&&$mengerjakan_tugas['status']==1){
                                                              ?>
                                                        <tr>
                                                            <td><?php echo $no;$no++;?></td>
                                                            <td><?php echo $tugas['nama_tugas']?></td>
                                                            <td><?php echo " Sent ";?></td>
                                                            <td><?php echo $tugas['tanggal_tugas']?></td>
                                                            <td><?php echo $tugas['deadline']?></td>
                                                            <td><?php echo $mengerjakan_tugas['tanggal_kirim']?></td>
                                                        </tr>
                                                        <?php 
                                                            }
                                                          }
                                                        }
                                                      }
                                                    ?>
                                                    </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="assistant">
                            <div class="row">
                                    <div class="col-lg-12">
                                        <h3 class="text-center">Profil Singkat Asistant Laboratorium</h3>
                                        <p class="text-center">Prodi Teknik Informatika Departmen Ilmu Komputer Fakultas Matematika dan Ilmu Pengetahuan Alam</p>
                                        <ul class="timeline">
                                        <?php 
                                        $no=1;
                                        foreach ($_mengambil as $key => $mengambil) {
                                            foreach ($_matakuliah as $key => $matakuliah) {
                                                if($mengambil['id_semester']==$param&&$mengambil['npm']==$mahasiswa['npm']&&$matakuliah['id_matkul']==$mengambil['id_matkul']){
                                                    foreach ($_assistant as $key => $assistant) {
                                                        foreach ($_mengajar as $key => $mengajar) {
                                                            if($assistant['id_assistant']==$mengajar['id_assistant']&&$matakuliah['id_matkul']==$mengajar['id_matkul']){
                                                                ?>
                                            <li class="<?php if($no%2!=0){echo "timeline";$no++;}else{echo "timeline-inverted";$no++;}?>">
                                                <div class="timeline-image">
                                                        <img class="img-circle img-responsive" src="<?= base_url() .'assets/images/assistant/'.$assistant['id_assistant']?>.jpg" alt="">
                                                </div>
                                                <div class="timeline-panel">
                                                    <div class="timeline-heading">
                                                        <h4 class="subheading"><?php echo $assistant['nama']?></h4>
                                                        <h5 class="subheading"><?php echo $assistant['email']?></h5>
                                                        <h5 class="subheading">+62<?php echo $assistant['noHp']?></h5>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p class="text-muted"></p>
                                                    </div>
                                                </div>
                                                <div class="<?php ?>"></div>
                                            </li>
                                                                                                            <?php 
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                        ?>
                                        </ul>
                                    </div>
                                </div>
                          
                        </div>
                        <div class="tab-pane fade" id="us">Lua</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
  }
?>

                        <script type="text/javascript">
                            $("#semester").change(function(){
                                    var semester = {semester:$("#semester").val()};
                                    $.ajax({
                                            type: "POST",
                                            url : "<?php echo site_url('page/get_matakuliah')?>",
                                            data: semester,
                                            success: function(msg){
                                                $('#matakuliah').html(msg);
                                            }
                                        });
                            });
                            </script>