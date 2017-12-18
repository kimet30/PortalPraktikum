<div class = "container">
	<div class="wrapper">
		<form action="<?= base_url()?>wp_admin/login" method="post" name="Login_Form" class="form-signin">       
		    <h3 class="form-signin-heading">Wp Admin</h3>
			  <hr class="colorgraph"><br>
			  
			  <input type="text" class="form-control" name="id_assistant" placeholder="Type your id here " required="" autofocus="" />
			  <input type="password" class="form-control" name="password" placeholder="Password" required=""/>     		  
			  <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>
		</form>			
	</div>
</div>
<br /><br /><br />
<hr>