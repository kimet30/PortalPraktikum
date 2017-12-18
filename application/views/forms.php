<div class="col-md-10 content">
     <div class="panel panel-primary">
        <div class="panel-heading">
            Add New 
        </div>
        <div class="panel-body">
            <div class="row">
            <!--<form role="form" method="post" action="<?= base_url()?>wp_admin/edit_tugas">-->
            <?php echo form_open_multipart('wp_admin/edit_tugas/'); ?>
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
                        Upload File 
                        </div>
                        <div class="panel-body">
                            <h4>Select files from your computer</h4>
                                <div class='form-group'>
                                    <input type='file' name='userfiles' id='js-upload-files' multiple size='20'>
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
                            <button type="submit" class="btn btn-danger">Publish</button>
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
                                <option value="post">Just Post</option>
                                <option value="" selected>--Choose Categories--</option>
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
                                <option value="" selected>--Choose Subject--</option>
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
                                <option value="" selected>--Choose Semester--</option>
                            </select>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-6 (nested) -->
                <!--</form>-->
                 <?php echo "</form>";?>
            </div>
            <!-- /.row (nested) -->
        </div>
        <!-- /.panel-body -->
    </div>
</div>
<!--end col md -10-->
</div>