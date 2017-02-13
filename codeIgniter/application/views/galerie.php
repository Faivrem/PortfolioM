<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="The Page Description">
		<style type="text/css">@-ms-viewport{width: device-width;}</style>
		<title>Galerie | Maxime Faivre</title>
		<link rel="stylesheet" href="<?php echo css_url('layers.min');?>"
			media="screen">
		<link rel="stylesheet" href="<?php echo css_url('style');?>"
			media="screen">
		<link rel="stylesheet" href="<?php echo css_url('font-awesome.min');?>"
			media="screen">
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
		<link rel="icon" href="img/briefcase.png">
		<link rel="apple-touch-icon"
			href="<?php echo img_url('briefcase.png');?>">
		<link rel="apple-touch-icon" sizes="76x76"
			href="<?php echo img_url('briefcase.png');?>">
		<link rel="apple-touch-icon" sizes="120x120"
			href="<?php echo img_url('briefcase.png');?>">
		<link rel="apple-touch-icon" sizes="152x152"
			href="<?php echo img_url('briefcase.png');?>">

	<body class="portfolio">
		<?php include('menu.php');?>


		<main role="main">
			<div id="intro-wrap" data-height="16.667">
				<div id="intro" class="preload darken">
					<div class="intro-item" style="background-image: url(https://www.papygeek.com/wp-content/uploads/2012/02/Objectif-Flickr.jpg);">
						<div class="caption">
							<h2>Ma galerie</h2>
						</div><!-- caption -->
					</div>
				</div><!-- intro -->
			</div><!-- intro-wrap -->

			<div id="main" class="row">
				<div class="row-content buffer clear-after">
					<ul class="inline cats filter-options">
						<li data-group="nature">Nature</li>
						<li data-group="sun">Sun</li>
						<li data-group="water">Water</li>
						<li data-group="wind">Wind</li>
						<li data-group="people">People</li>
						<li data-group="city">City</li>
					</ul>
					<div class="grid-items portfolio-section preload lightbox">

						<?php foreach ($liste as $img ) { ?>

						<article class="item column <?php
						if($img->ahead==true){
							echo "six";
						}
						else {
							echo "three";
						}
						?>" data-groups='["<?php echo $img->categorie1;?>", "<?php echo $img->categorie2;?>"]'>
							<figure><img src="<?php echo img_galerie($img->titre)?>" alt=""></figure>
							<a class="overlay" href="<?php echo img_galerie($img->titre)?>">
								<div class="overlay-content">
									<div class="post-type"><i class="icon icon-search"></i></div>
									<h2><?php echo $img->nom;?></h2>
									<p><?php echo $img->description;?></p>
								</div><!-- overlay-content -->
							</a><!-- overlay -->
						</article>

						<?php }?>



						<div class="shuffle-sizer three"></div>
					</div><!-- grid-items -->




					<div id="pagination">
						<ul class="clear-after reset plain">
							<li id="older" class="pagination-nav"><a href="#" class="button transparent aqua"><i class="fa fa-chevron-left"></i><span class="label">Older</span></a></li>
							<li id="newer" class="pagination-nav"><a href="#" class="button transparent aqua"><span class="label">Newer</span><i class="fa fa-chevron-right"></i></a></li>
						</ul>
					</div>
				</div><!-- row-content -->
			</div><!-- row -->
		</main><!-- main -->

		<footer role="contentinfo">
			<div class="row">
				<div class="row-content buffer clear-after">
					<section id="top-footer">
						<div class="widget column three"><!-- la class="widget" è forse generata utomaticamente da wp -->
							<h4>Menu</h4>
							<ul class="plain">
								<li><a href="home-01.html">Home</a></li>
								<li><a href="works-3-columns.html">Portfolio</a></li>
								<li><a href="blog-4-columns-masonry.html">Blog</a></li>
								<li><a href="resume.html">Resume</a></li>
								<li><a href="file:///Users/pasqualevitiello/My%20Folder/Job/Envato/PR%20Themeforest/Flattie/Markup/Beetle/contact.html">Contact</a></li>
							</ul>
						</div>
						<div class="widget column three">
							<h4>Archives</h4>
							<ul class="plain">
								<li><a href="#">March 2014</a></li>
								<li><a href="#">April 2014</a></li>
								<li><a href="#">May 2014</a></li>
								<li><a href="#">June 2014</a></li>
								<li><a href="#">July 2014</a></li>
							</ul>
						</div>
						<div class="widget column three">
							<h4>Widget</h4>
							<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
						</div>
						<div class="widget meta-social column three">
							<h4>Follow Us</h4>
							<ul class="inline">
								<li><a href="#" class="twitter-share border-box"><i class="fa fa-twitter fa-lg"></i></a></li>
								<li><a href="#" class="facebook-share border-box"><i class="fa fa-facebook fa-lg"></i></a></li>
								<li><a href="#" class="pinterest-share border-box"><i class="fa fa-pinterest fa-lg"></i></a></li>
							</ul>
						</div>
					</section><!-- top-footer -->
					<section id="bottom-footer">
						<p class="keep-left">&copy; 2014 <a href="http://mokaine.com/" alt="Mokaine Lab">Mokaine</a>. All Rights Reserved.</p>
						<p class="keep-right">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
					</section><!-- bottom-footer -->
				</div><!-- row-content -->
			</div><!-- row -->
		</footer>

		<script src="https://code.jquery.com/jquery.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<script src="<?php echo js_url('plugins');?>"></script>
		<script src="<?php echo js_url('beetle');?>"></script>

	</body>

</html>
