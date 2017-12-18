<form class="form-horizontal" method="POST" action="<?= base_url() ?>/edit_profil/edit_profil_user">
<fieldset>
<!-- Form Name -->
<legend>Edit Profil</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Name">Npm</label>  
  <div class="col-md-3">
  <input id="Name" name="Name" type="text" placeholder="<?php echo $_SESSION['npm'];?>" class="form-control input-md" disabled>
    
  </div>
</div>
<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>
  <div class="col-md-3">
    <input id="password" name="password" type="password" placeholder="Change Password" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="emailaddr">Email</label>  
  <div class="col-md-3">
  <input id="emailaddr" name="email" type="text" placeholder="Email" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="hostkey">No Handphone</label>  
  <div class="col-md-1">
  <input  type="text" placeholder="+62" class="form-control input-md" disabled="true">
    
  </div>
  <div class="col-md-2">
  <input id="handphone" name="noHp" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="hostkey">Alamat </label>  
  <div class="col-md-3">
  <textarea id="alamat" name="alamat" type="text" placeholder="" class="form-control input-md" required=""></textarea>
  </div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>
<div class="container">
	<div class="row">
	</div>
</div>