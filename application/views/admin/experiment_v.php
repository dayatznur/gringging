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
		<div class="row">
			<div class="col-md-2">
				
				<?php $this->load->view('admin/menu_v'); ?>

			</div>
			<div class="col-md-10">
				<div class="page-header">
				  <h1>Experiment</h1>
				</div>
				<ol class="breadcrumb">
				  <li><a href="<?php echo base_url(); ?>admin_dashboard">Dashboard</a></li>
				  <li class="active">Experiment</li>
				</ol>
				<div class="panel panel-primary panel_table">
				  <div class="panel-heading">
				  	<div class="btn-group" role="group" aria-label="...">
					  <button type="button" class="btn btn-primary"><a href="<?php echo base_url(); ?>admin_experiment/create">Create</a></button>
					</div>
				  </div>
				  <div class="panel-body">
					<table class="table table-striped">
					    <thead>
					      <tr>
					        <th>No</th>
					        <th>Title</th>
					        <th>Created</th>
					        <th>
					        	
					        </th>
					      </tr>
					    </thead>
					    <tbody>
					      <tr>
					        <td>1</td>
					        <td>Membuat bakso dengan resep dokter</td>
					        <td>20 Januari 2017</td>
					        <td>
					        	<div class="btn-group" role="group" aria-label="...">
								  <button type="button" class="btn btn-primary"><a href="#">Update</a></button>
								  <button type="button" class="btn btn-primary"><a href="#">Delete</a></button>
								</div>
					        </td>
					      </tr>
					      <tr>
					        <td>2</td>
					        <td>Javascript organized concept by ady osmany</td>
					        <td>20 Januari 2017</td>
					        <td>
					        	<div class="btn-group" role="group" aria-label="...">
								  <button type="button" class="btn btn-primary"><a href="#">Update</a></button>
								  <button type="button" class="btn btn-primary"><a href="#">Delete</a></button>
								</div>
					        </td>
					      </tr>
					      <tr>
					        <td>3</td>
					        <td>Membuat bakso dengan resep dokter</td>
					        <td>20 Januari 2017</td>
					        <td>
					        	<div class="btn-group" role="group" aria-label="...">
								  <button type="button" class="btn btn-primary"><a href="#">Update</a></button>
								  <button type="button" class="btn btn-primary"><a href="#">Delete</a></button>
								</div>
					        </td>
					      </tr>
					    </tbody>
					</table>
				  </div>
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