<div class="col-md-10 content">
     <div class="panel panel-primary">
        <div class="panel-heading">
            Add New 
        </div>
        <div class="panel-body">
            <!-- /.row (nested) -->
            <div class="container" id="absen">
                            <div class="container">
                                <div class="col-lg-10" style="padding: 0px; margin: 0px;">
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
                                                                <th rowspan="2" class="hidden-xs">NPM</th>
                                                                <th rowspan="2" class="hidden-xs">Nama </th>
                                                                <th colspan="16"class="hidden-xs" align="center">Pertemuan Ke</th>
                                                            </tr> 
                                                            <tr>
                                                                <th>1</th><th>2</th><th>3</th><th>4</th><th>5</th><th>6</th><th>7</th><th>8</th><th>9</th><th>10</th><th>11</th><th>12</th><th>13</th><th>14</th><th>15</th><th>16</th>
                                                            </tr> 
                                                        </thead>
                                                        <tbody>
                                                        <?php 
                                                            foreach ($_mahasiswa as $key => $mahasiswa) {
                                                                foreach ($_mengambil as $key => $mengambil) {
                                                                    if($mengambil['npm']==$mahasiswa['npm']){
                                                                        foreach ($_absen as $key => $absen) {
                                                                            if($absen['npm']==$mengambil['npm']&&$absen['id_matkul']==$mengambil['id_matkul']){                                                                        
                                                                ?>
                                                            <tr>
                                                                <td align="center"><?php echo "1";?></td>
                                                                <td align="center"><?php echo $mahasiswa['npm']?></td>
                                                                <td align="center"><?php echo $mahasiswa['nama']?></td>
                                                                <td align="center"><?php if ($absen['pert1']==1) echo "<span class='glyphicon glyphicon-ok'>"; else echo "<span class='glyphicon glyphicon-remove'>"?></span></td>
                                                                <td align="center"><?php if ($absen['pert2']==1) echo "<span class='glyphicon glyphicon-ok'>"; else echo "<span class='glyphicon glyphicon-remove'>"?></td>
                                                                <td align="center"><?php if ($absen['pert3']==1) echo "<span class='glyphicon glyphicon-ok'>"; else echo "<span class='glyphicon glyphicon-remove'>"?></td>
                                                                <td align="center"><?php if ($absen['pert4']==1) echo "<span class='glyphicon glyphicon-ok'>"; else echo "<span class='glyphicon glyphicon-remove'>"?></td>
                                                                <td align="center"><?php if ($absen['pert5']==1) echo "<span class='glyphicon glyphicon-ok'>"; else echo "<span class='glyphicon glyphicon-remove'>"?></td>
                                                                <td align="center"><?php if ($absen['pert6']==1) echo "<span class='glyphicon glyphicon-ok'>"; else echo "<span class='glyphicon glyphicon-remove'>"?></td>
                                                                <td align="center"><?php if ($absen['pert7']==1) echo "<span class='glyphicon glyphicon-ok'>"; else echo "<span class='glyphicon glyphicon-remove'>"?></td>
                                                                <td align="center"><?php if ($absen['pert8']==1) echo "<span class='glyphicon glyphicon-ok'>"; else echo "<span class='glyphicon glyphicon-remove'>"?></td>
                                                                <td align="center"><?php if ($absen['pert9']==1) echo "<span class='glyphicon glyphicon-ok'>"; else echo "<span class='glyphicon glyphicon-remove'>"?></td>
                                                                <td align="center"><?php if ($absen['pert10']==1) echo "<span class='glyphicon glyphicon-ok'>"; else echo "<span class='glyphicon glyphicon-remove'>"?></td>
                                                                <td align="center"><?php if ($absen['pert11']==1) echo "<span class='glyphicon glyphicon-ok'>"; else echo "<span class='glyphicon glyphicon-remove'>"?></td>
                                                                <td align="center"><?php if ($absen['pert12']==1) echo "<span class='glyphicon glyphicon-ok'>"; else echo "<span class='glyphicon glyphicon-remove'>"?></td>
                                                                <td align="center"><?php if ($absen['pert13']==1) echo "<span class='glyphicon glyphicon-ok'>"; else echo "<span class='glyphicon glyphicon-remove'>"?></td>
                                                                <td align="center"><?php if ($absen['pert14']==1) echo "<span class='glyphicon glyphicon-ok'>"; else echo "<span class='glyphicon glyphicon-remove'>"?></td>
                                                                <td align="center"><?php if ($absen['pert15']==1) echo "<span class='glyphicon glyphicon-ok'>"; else echo "<span class='glyphicon glyphicon-remove'>"?></td>
                                                                <td align="center"><?php if ($absen['pert16']==1) echo "<span class='glyphicon glyphicon-ok'>"; else echo "<span class='glyphicon glyphicon-remove'>"?></td>
                                                            </tr>
                                                            <?php
                                                                            }
                                                                        }
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
        </div>
        <!-- /.panel-body -->
    </div>
</div>
<!--end col md -10-->
</div>