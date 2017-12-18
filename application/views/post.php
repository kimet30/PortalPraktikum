<?php

foreach ($_mengerjakan_tugas as $key => $mengerjakan_tugas) {
if ((isset($message)) && ($message != '')&&$mengerjakan_tugas['status']==0):

 
?>
<div class="modal" id="alert-dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Message Report </h4>
            </div>
            <div class="modal-body">
                <?php echo $message; ?>
            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" type="button" class="btn btn-primary">OK</button>
            </div>
        </div>
    </div>
</div>
<script>
$(function() {
    $('#alert-dialog').modal('show').on('hidden.bs.modal', function () {
        
    });
});
</script>
<?php  
endif;
    }
 ?>

<div class="container">
    <div class="row">
      
    </div>
</div>
    <!-- Page Content -->
    <div class="container" >
        <div class="row">
            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Blog Post -->

                <!-- Title -->
            <?php foreach ($_post as $tugas ):
                foreach ($_assistant as $key => $assistant) {
                    if($assistant['id_assistant']==$tugas['id_assistant']){


                ?>
                <h2><?php echo $tugas['nama_tugas'];?></h2>
                <p class="lead">
                    <p>by <a href=""><?php echo $assistant['nama']?> </a></p>
                    <p><span class="glyphicon glyphicon-time"></span> Posted on : <?php echo $tugas['tanggal_tugas']?> </p>
                </p>
                <hr>
                
                <p align="justify"><?php echo $tugas['teks_ket']?></p>
                <hr>
            <?php 
            }
                }
            endforeach?>

<?php echo"<div class='media'>";
        echo "<div class='panel panel-default'>";
            foreach ($_mahasiswa as $key => $mahasiswa) {
                $this->db->where('npm',$mahasiswa['npm']);
                $query=$this->db->get('_mengerjakan_tugas');
                foreach ($query->result_array() as $key => $mengerjakan) {
                    foreach ($_post as $key => $tugas) {
                        if($mengerjakan['id_tugas']==$tugas['id_tugas']){
                            if($tugas['kategori']!='post'){
                            echo "<div class='panel-heading'><strong>Submission Status</strong></div>";
                                echo "<div class='panel-body'>";
                                echo "<table class='table table-striped table-bordered table-list'>";
                                echo "<thead>";
                                echo "<tr>";
                                    echo "<th class='hidden-xs'>"; echo "File source "; echo "</th>";
                                    if($tugas['file']!=NULL||$tugas['file']!=''){
                                    echo "<td class='hidden-xs'>"; echo "<a href='".base_url()."page/download/".$mengerjakan['id_tugas']."'>";
                                        if($tugas['file_ext']==".pdf"){
                                            echo "<i class='fa fa-file-pdf-o' aria-hidden='true'></i>";
                                            echo " ".$tugas['file']; echo "</a>";echo "</td>";
                                        }
                                        else if($mengerjakan['file_ext']==".zip"){
                                            echo "<i class='fa fa-file-zip-o' aria-hidden='true'></i>";
                                            echo " ".$tugas['file']; echo "</a>";echo "</td>";
                                        }
                                        else if($mengerjakan['file_ext']==".word"){
                                            echo "<i class='fa fa-file-word-o' aria-hidden='true'></i>";
                                            echo " ".$tugas['file']; echo "</a>";echo "</td>";
                                        }
                                        else if($mengerjakan['file_ext']==".pptx"){
                                            echo "<i class='fa fa-file-powerpoint-o' aria-hidden='true'></i>";
                                            echo " ".$tugas['file']; echo "</a>";echo "</td>";
                                        }
                                    }
                                    else{
                                        echo "<td class='hidden-xs'>"; echo "No File"; echo "</td>";
                                    }
                                
                                echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";

                                echo "<tr>";
                                echo "<th align='center'><p> Submission status</p></th>";
                                echo "<td class='hidden-xs'>";
                                    echo "Submitted for grading";
                                    echo "</td'>";
                                echo "</tr>";
                                
                                echo "<tr>";
                                echo "<th align='center'><p> Due date</p></th>";
                                echo "<td class='hidden-xs'>";
                                    echo date("F, d Y, h:i A", strtotime($tugas['deadline']));
                                    echo "</td'>";
                                echo "</tr>";
                                echo "<tr>";
                                    echo "<th class='hidden-xs'>"; echo "Last modified"; echo "</th>";
                                    echo "<td class='hidden-xs'>";
                                    echo date("F, d Y, h:i A", strtotime($mengerjakan['tanggal_kirim']));
                                    echo "</td'>";
                                echo "</tr>";
                                
                                echo "<tr>";
                                    echo "<th class='hidden-xs'>"; echo "File submissions "; echo "</th>";
                                    if($mengerjakan['status']==1){
                                    echo "<td class='hidden-xs'>"; echo "<a href='".base_url()."page/download/".$mengerjakan['id_tugas']."'>";
                                        if($mengerjakan['file_ext']==".pdf"){
                                            echo "<i class='fa fa-file-pdf-o' aria-hidden='true'></i>";
                                            echo " ".$mengerjakan['file']; echo "</a>";echo "</td>";
                                        }
                                        else if($mengerjakan['file_ext']==".zip"){
                                            echo "<i class='fa fa-file-zip-o' aria-hidden='true'></i>";
                                            echo " ".$mengerjakan['file']; echo "</a>";echo "</td>";
                                        }
                                        else if($mengerjakan['file_ext']==".word"){
                                            echo "<i class='fa fa-file-word-o' aria-hidden='true'></i>";
                                            echo " ".$mengerjakan['file']; echo "</a>";echo "</td>";
                                        }
                                        else if($mengerjakan['file_ext']==".pptx"){
                                            echo "<i class='fa fa-file-powerpoint-o' aria-hidden='true'></i>";
                                            echo " ".$mengerjakan['file']; echo "</a>";echo "</td>";
                                        }
                                    }
                                    else{
                                        echo "<td class='hidden-xs'>"; echo "No File"; echo "</td>";
                                    }
                                
                                echo "</tr>";
                                
                                echo "</tbody>";
                                echo "</table>";
                                echo "</div>";
                                }
                            if($mengerjakan['status']==0&&$tugas['kategori']!="post"){
                                echo "<div class='panel-heading'><strong>Upload File</strong> <small></small></div>";
                                echo "<div class='panel-body'>";
                                    echo "<h4>Select files from your computer</h4>";
                                    echo form_open_multipart('upload/do_upload/'.$mengerjakan['id_tugas']);
                                    echo "<div class='form-inline'>";
                                        echo "<div class='form-group'>";
                                            echo "<input type='file' name='userfiles' id='js-upload-files' multiple size='20'>";
                                        echo "</div>";
                                        echo "<button type='submit' value='upload'class='btn btn-sm btn-primary' id='js-upload-submit'>Upload file</button>";
                                    echo "</div>";
                                    echo "</form>";
                                echo "</div>";
                            }
                            if ($tugas['kategori']=='post'){
                                echo "<div class='panel-heading'><strong>Information</strong></div>";
                                echo "<div class='panel-body'>";
                                echo "<table class='table table-striped table-bordered table-list'>";
                                echo "<thead>";
                                echo "<tr>";
                                echo "<th class='hidden-xs' align='center'>File Source </th>";
                                echo "<td class='hidden-xs'>File Source </td>";
                                echo "</tr> ";
                                echo "</thead>";
                                echo "<tbody>";

                                echo "<tr>";
                                    echo "<th class='hidden-xs'>"; echo "Date Upload"; echo "</th>";
                                    echo "<td class='hidden-xs'>";
                                    echo date("F, d Y, h:i A", strtotime($tugas['tanggal_tugas']));
                                    echo "</td'>";
                                echo "</tbody>";
                                echo "</table>";
                                echo "</div>";
                            }
                        }
                    }
                }
            }
echo "</div>";
echo "</div>";
?>
    <div class="well">
        <h4>Leave a Comment:</h4>
            <form role="form">
                <div class="form-group">
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>

                <hr>


            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">


                <!-- Blog Categories Well -->


                <!-- Side Widget Well -->
                

            </div>

        </div>
        <!-- /.row -->

        <hr>
</div>

        <!--
                <!-- Comment 
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        <!-- Nested Comment 
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="http://placehold.it/64x64" alt="">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Nested Start Bootstrap
                                    <small>August 25, 2014 at 9:30 PM</small>
                                </h4>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div>
                        <!-- End Nested Comment 
                    </div>
                </div>-->

