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
		<div class="overlay"></div>
		<div class="right_side">
			<nav class="navbar navbar-default navbar-fixed-top top_nav">
			  	<?php $this->load->view('header_v'); ?>
			</nav>
			<div class="content">
				<ol class="breadcrumb">
				  <li><a href="<?php echo base_url(); ?>">Home</a></li>
				  <li><a href="<?php echo base_url(); ?>blog">Blog</a></li>
				  <li class="active">Membuat bakso dengan resep dokter</li>
				</ol>
				<div class="row">
					<div class="col-md-8 col-sm-8">
						<article class="main_article">
							<div class="page-header">
							  <h1>Membuat bakso dengan resep dokter</h1>
							  <p>20 Januari 2017 by Hidayat nur</p>
							</div>
							<div class="article_content">
								<img src="<?php echo base_url(); ?>assets/img/hidayat.jpg">
								<p>
									The pagination component should be wrapped in a element to identify it as a navigation section to screen readers and other assistive technologies. In addition, as a page is likely to have more than one such navigation section already (such as the primary navigation in the header, or a sidebar navigation), it is advisable to provide a descriptive aria-label for the which reflects its purpose. For example, if the pagination component is used to navigate between a set of search results, an appropriate label could be aria-label="Search results pages".<br><br>
									The pagination component should be wrapped in a element to identify it as a navigation section to screen readers and other assistive technologies. In addition, as a page is likely to have more than one such navigation section already (such as the primary navigation in the header, or a sidebar navigation), it is advisable to provide a descriptive aria-label for the which reflects its purpose. For example, if the pagination component is used to navigate between a set of search results, an appropriate label could be aria-label="Search results pages".
								</p>
							</div>
							<div class="jumbotron jumbotron_label">
							  	<h1>Label</h1>
							  	<a class="btn" href="#">#Javascrip</a>
							    <a class="btn" href="#">#HTML</a>
							    <a class="btn" href="#">#Bakso</a>
							    <a class="btn" href="#">#Pecel</a>
							    <a class="btn" href="#">#Pring</a>
							    <a class="btn" href="#">#Spring</a>
							    <a class="btn" href="#">#Jongos</a>
							    <a class="btn" href="#">#Devil</a>
							    <a class="btn" href="#">#Javascrip</a>
							    <a class="btn" href="#">#HTML</a>
							    <a class="btn" href="#">#Bakso</a>
							    <a class="btn" href="#">#Pecel</a>
							    <a class="btn" href="#">#Pring</a>
							    <a class="btn" href="#">#Spring</a>
							    <a class="btn" href="#">#Jongos</a>
							    <a class="btn" href="#">#Devil</a>
							</div>
						</article>
						<div class="comments">
							<div id="disqus_thread"></div>
							<script>

							/**
							*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
							*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
							/*
							var disqus_config = function () {
							this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
							this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
							};
							*/
							(function() { // DON'T EDIT BELOW THIS LINE
							var d = document, s = d.createElement('script');
							s.src = '//gringging-com.disqus.com/embed.js';
							s.setAttribute('data-timestamp', +new Date());
							(d.head || d.body).appendChild(s);
							})();
							</script>
							<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="list-group panel_archive">
						  <a href="#" class="list-group-item disabled">
						    2016
						  </a>
						  <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
						  <a href="#" class="list-group-item">Morbi leo risus</a>
						  <a href="#" class="list-group-item">Porta ac consectetur ac</a>
						  <a href="#" class="list-group-item">Vestibulum at eros</a>
						  <a href="#" class="list-group-item disabled">
						    2017
						  </a>
						  <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
						  <a href="#" class="list-group-item">Morbi leo risus</a>
						  <a href="#" class="list-group-item">Porta ac consectetur ac</a>
						  <a href="#" class="list-group-item">Vestibulum at eros</a>
						</div>
					</div>
				</div>
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