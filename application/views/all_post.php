<div class="col-md-10 content">
     <div class="panel panel-primary">
        <div class="panel-heading">
            All Post
        </div>
        <div class="panel-body">
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<div class="container">
    <div class="row">
        <div class="col-md-10">
        <h4>All Post you have made</h4>
        <div class="table-responsive">
              <table id="mytable" class="table table-bordred table-striped">
                    <thead>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Teks </th>
                        <th>Category</th>
                        <th>Link URL</th>
                        <th>Subject</th>  
                        <th colspan="2">Action</th>
                   </thead>
    <tbody>
    <?php 
            foreach ($_tugas as $key => $tugas) {
                if($tugas['id_assistant']==$this->session->userdata['id_assistant']){
                    ?>
    <tr>
        <td><?php echo $tugas['id_tugas']?></td>
        <td><?php echo $tugas['nama_tugas']?></td>
        <td><?php echo substr($tugas['teks_ket'],0,40)?></td>
        <td><?php echo $tugas['kategori']?></td>
        <td><?php echo $tugas['url']?></td>
        <td><?php echo $tugas['kategori']?></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
    </tr>
    <?php
                }
            }
        ?>
    
     
   
    
   
    
    </tbody>
        
</table>

<div class="clearfix"></div>
<ul class="pagination pull-right">
  <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
  <li class="active"><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
</ul>
                
            </div>
            
        </div>
    </div>
</div>
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
            </div>
            <div class="modal-body">
                <div class="row">
            <form role="form" method="post" action="<?= base_url()?>wp_admin/edit_tugas">
                <div class="col-lg-8">
                        <div class="form-group">
                            <label>Add New Post</label>
                            <input name="nama_tugas"class="form-control" placeholder="Enter title here" >
                        </div>
                        <div class="form-group">
                            <label>Information Text</label>
                            <textarea name="teks_ket" class="form-control" rows="15"></textarea>
                        </div>
                </div>
                <!-- /.col-lg-6 (nested) -->
                <div class="col-lg-4">
                    <div class="panel panel-primary">
                        <div class="panel panel-heading">
                        Add Link File Download
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label>URL</label>
                                <input name="url"class="form-control" placeholder="Enter URL Here">
                                <br />
                                <label>Link Text</label>
                                <input name="nama_url" class="form-control" placeholder="Enter link title here">
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel panel-heading">
                            Publish
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Author</label>
                                <input name="author" type="text"class="form-control" value="<?php echo $this->session->userdata['nama_assistant']?>"placeholder="<?php echo $this->session->userdata['nama_assistant']?>" disabled="true">
                                <br />
                                <label>Deadline</label>
                                <input name="deadline" type="datetime-local"class="form-control" >
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel panel-heading">
                          Categories
                        </div>
                        <div class="panel-body">
                             <div class="form-group">
                             <label>Category</label>
                            <select name="kategori"class="form-control" required>
                                <option value="Tugas">Assignment</option>
                                <option value="Laprak">practical reports</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                        <label>Mata Kuliah</label>
                            <select name="id_matkul"class="form-control" required>
                            <?php 
                                foreach ($_mengajar as $key => $mengajar) {
                                    if($mengajar['id_assistant']==$this->session->userdata['id_assistant']){
                                        foreach ($_matakuliah as $key => $matakuliah) {
                                            if($matakuliah['id_matkul']==$mengajar['id_matkul']){
                                        ?>
                                <option value="<?php echo $matakuliah['id_matkul']?>"><?php echo $matakuliah['nama_matkul'] ?></option>
                                <?php
                                            }
                                        }
                                    }    
                                }
                            ?>
                            </select>
                        </div>
                        <div class="form-group">
                        <label>Semester</label>
                            <select name="id_semester"class="form-control" required>
                            <?php foreach ($_mengajar as $key => $mengajar) {
                                if($mengajar['id_assistant']==$this->session->userdata['id_assistant']){
                                    echo $mengajar['id_assistant'];?>
                                <option value="<?php echo $mengajar['id_semester']?>"><?php echo "Semester ".$mengajar['id_semester']?></option>
                                <?php 
                                }
                            }?>
                            </select>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-6 (nested) -->
                </form>
            </div>
      </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 25%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>   
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
            <!-- /.row (nested) -->
        </div>
        <!-- /.panel-body -->
    </div>
</div>
<!--end col md -10-->
</div>