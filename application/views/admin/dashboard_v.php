<?php
$sessUsername = $this->session->userdata('username');
$sessPassword = $this->session->userdata('password');

if(isset($sessUsername) && isset($sessPassword)){
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Gringging</title>

	<?php $this->load->view('admin/css'); ?>

</head>
<body>

	<?php $this->load->view('admin/header_v'); ?>

	<div class="container">
		<?php
		if(!empty($this->session->flashdata('success'))){ ?>
		
			<div class="alert alert-success alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  
			  		<?php echo $this->session->flashdata('success') ?>
			  	
			</div> <?php

		}
		?>
		<div class="row">
			<div class="col-md-2">
				
				<?php $this->load->view('admin/menu_v'); ?>

			</div>
			<div class="col-md-10">
				<div class="page-header">
				  <h1>Dashboard</h1>
				</div>
				<div class="jumbotron">
				  <h1>Hello, world!</h1>
				  <p>...</p>
				</div>
			</div>
		</div>
	</div>

	<?php $this->load->view('admin/js'); ?>

</body>
</html>

<?php
}else{
	
	$this->session->set_flashdata('error', 'You must login first!');
	redirect('backendpanel');

}
?>