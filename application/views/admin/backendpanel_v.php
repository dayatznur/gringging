<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Gringging</title>

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link href="<?php echo base_url(); ?>assets/css/master_admin/stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />

</head>
<body>
	
	<div class="panel_login">
		<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">Gringging Access</h3>
		  </div>
		  <div class="panel-body">
		  	<?php
		  	if(!empty($this->session->flashdata('error'))){ ?>
		  		
		  		<div class="alert alert-danger" role="alert"><?php echo $this->session->flashdata('error') ?></div> <?php
		  	
		  	}
		  	?>
		  	<form action="<?php echo base_url(); ?>admin_proccess" method="post">
			  <div class="form-group">
			    <label for="username">Username:</label>
			    <input type="text" class="form-control" id="username" name="username">
			  </div>
			  <div class="form-group">
			    <label for="pwd">Password:</label>
			    <input type="password" class="form-control" id="pwd" name="password">
			  </div>
			  <button type="submit" class="btn btn-default">Login</button>
			</form>
		  </div>
		</div>
	</div>

	<script src="<?php echo base_url(); ?>assets/js/jquery-3.1.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	

</body>
</html>