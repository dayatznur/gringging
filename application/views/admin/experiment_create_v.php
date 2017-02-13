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
				  <li><a href="<?php echo base_url(); ?>admin_experiment">Experiment</a></li>
				  <li class="active">Create</li>
				</ol>
				<div class="panel panel-primary panel_form">
				  <div class="panel-body">
					<form>
					  <div class="form-group">
					    <label for="title">Title</label>
					    <input type="text" class="form-control" id="title" name="title">
					  </div>
					  <div class="form-group">
					    <label for="desciption">Description</label>
					    <textarea class="form-control" id="desciption" name="desciption"></textarea>
					  </div>
					  <div class="form-group">
					    <label for="label">Label</label>
					    <textarea class="form-control" id="label" name="label"></textarea>
					  </div>
					  <button type="submit" class="btn btn-default">Save</button>
					</form>
				  </div>
				</div>
			</div>
		</div>
	</div>

	<?php $this->load->view('admin/js'); ?>

	<script>
	tinymce.init({
		  selector:'#desciption',
		  menubar: false,
		  // ===========================================
		  // INCLUDE THE PLUGIN
		  // ===========================================
			
		  plugins: [
		    "advlist autolink lists link image charmap print preview anchor",
		    "searchreplace visualblocks code fullscreen",
		    "insertdatetime media table contextmenu paste jbimages"
		  ],
			
		  // ===========================================
		  // PUT PLUGIN'S BUTTON on the toolbar
		  // ===========================================
			
		  toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
			
		  // ===========================================
		  // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
		  // ===========================================
			
		  relative_urls: false
		// plugins: "image",
		// menubar: "insert",
		// toolbar: "image",
		// image_list: [
		//   {title: 'My image 1', value: 'http://www.tinymce.com/my1.gif'},
		//   {title: 'My image 2', value: 'http://www.moxiecode.com/my2.gif'}
		// ]
	});
	</script>

</body>
</html>

<?php
}else{
	
	$this->session->set_flashdata('error', 'You must login first!');
	redirect('backendpanel');

}
?>