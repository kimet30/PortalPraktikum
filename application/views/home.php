<div class="container"> 
    <div class="row">  </div>
</div>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    
                    <small></small>
                </h1>
                <!-- First Blog Post -->
                <?php foreach ($_tugas as $tugas ){
                	foreach ($_assistant as $key => $assistant) {
                	if($tugas['id_assistant']==$assistant['id_assistant']){
                ?>
                <h2>
                    <a style="text-decoration:none" href="<?= base_url()?>page/post/<?php echo $tugas['id_tugas'];?>"><?php  echo$tugas['nama_tugas'];?></a>
                </h2>
                <p >
                    by <a style="text-decoration:none"><?php echo $assistant['nama']; ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $tugas['tanggal_tugas']?></p>
                <p align="justify"><?php echo substr($tugas['teks_ket'],0,400),"[....]" ?></p>
                <a class="btn btn-primary" href="<?= base_url()?>page/post/<?php echo  $tugas['id_tugas'];?>">to page<span class="glyphicon glyphicon-chevron-right"></span></a>
                <hr>
                <?php 
                	}
            	}
              }?>

				<!--<ul class="pagination" style="float:right;"> <?php //echo $_pagination; ?></ul>-->
				<ul class="pager" style="float:left;"> </ul>
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                
                <div class="well">
                    <h4>Cari disini</h4>
                    <div class="input-group">
                        <form action="<?php echo site_url('page');?>" method="POST">
                            <input type="text" name="pencarian"  class="form-control">
                            <span class="input-group-btn" class="glyphicon glyphicon-search">
                                <button class="btn btn-default" type="submit" value="cari">
                                    <span class="glyphicon glyphicon-search"></span>
                            </button>
                            </span>
                        </form>
                    </div>
                        <!-- /.input-group -->
                </div>

               

                <!-- Side Widget Well -->
               
                
                  <div class="well">
                    
                  <h4> Waktu </h4>
                  <div id="clockDisplay" class="clockStyle">

</div>
<script type="text/javascript" language="javascript">
function renderTime(){
 var currentTime = new Date();
 var h = currentTime.getHours();
 var m = currentTime.getMinutes();
 var s = currentTime.getSeconds();
 if (h == 0){
  h = 24;
   }
   if (h < 10){
    h = "0" + h;
    }
       if (m < 10){
    m = "0" + m;
    }
    if (s < 10){
    s = "0" + s;
    }
 var myClock = document.getElementById('clockDisplay');
 myClock.textContent = h + ":" + m + ":" + s + "";    
 setTimeout ('renderTime()',1000);
 }
 renderTime();
</script>
                 
                    </div>
                    
                    
                </div>
                        
                    </div>
                    
                    
                </div>

            </div>

        </div>
        </div>
        <!-- /.row -->

        <hr>