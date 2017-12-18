<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/themes/base/jquery-ui.css" type="text/css" media="all" />
        <link rel="stylesheet" href="http://static.jquery.com/ui/css/demo-docs-theme/ui.theme.css" type="text/   css" media="all" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" type="text/javascript"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js" type="text/javascript"></script>
<body>
<!-- page content -->
<div class="container">
</div>
    <div id="propinsi" style="width:250px;float:left;">
    Propinsi : <br/>
    <?php
        //echo form_dropdown("semester",$semester,"","id='semester'");
    ?>
    <div >
    	<select id="semester" >
    	<?php foreach ($_semester as $key => $value) {?>
    		<option value="<?php echo $value['id_semester']?>"><?php echo $value['semester']?></option>
    		<?php
    	}?>
		</select>
    </div>
    <div id="kota">
    	<?php 
    		foreach ($_matakuliah as $key => $value) {
    			echo $value['nama_matkul'];
    			echo "<br />";
    		}
    	?>
    </div>
    </div>
    <script type="text/javascript">
        $("#semester").change(function(){
                var semester = {semester:$("#semester").val()};
                $.ajax({
                        type: "POST",
                        url : "<?php echo site_url('test/get_matakuliah')?>",
                        data: semester,
                        success: function(msg){
                            $('#kota').html(msg);
                        }
                    });
        });
       </script>
</body>
</html>