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
			<div class="bg_intro">
				<img src="<?php echo base_url(); ?>assets/img/bg_intro.jpg">
				<h1>let's take a break, drinking coffee</h1>
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