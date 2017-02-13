<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Gringging</title>
	
	<!-- css assets -->
	<?php $this->load->view('css_v'); ?>

</head>
<body>

	<div>
		<?php $this->load->view('aside_v'); ?>
		<div class="right_side">
			<nav class="navbar navbar-default navbar-fixed-top top_nav">
			  	<?php $this->load->view('header_v'); ?>
			</nav>
			<div class="content">
				<ol class="breadcrumb">
				  <li><a href="<?php echo base_url(); ?>">Home</a></li>
				  <li class="active">Code Tester</li>
				</ol>
				<div class="alert alert-warning" role="alert">Coming Soon!!!</div>
			</div>
			<footer>
				<?php $this->load->view('footer_v'); ?>
			</footer>
		</div>
	</div>

	<!-- js assets -->
	<?php $this->load->view('js_v'); ?>

</body>
</html>