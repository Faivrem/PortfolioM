<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="The Page Description">
		<style type="text/css">@-ms-viewport{width: device-width;}</style>
		<title>Etudiant en D.U.T Informatique| Maxime Faivre  </title>
		<link rel="stylesheet" href="<?php echo css_url('layers.min');?>"  media="screen">
		<link rel="stylesheet" href="<?php echo css_url('style');?>" media="screen">
		<link rel="stylesheet" href="<?php echo css_url('font-awesome.min');?>" media="screen">
		
   
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
		<link rel="icon" href="img/briefcase.png">
		<link rel="apple-touch-icon" href="<?php echo img_url('briefcase.png');?>">
		<link rel="apple-touch-icon" sizes="76x76"  href="<?php echo img_url('briefcase.png');?>">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo img_url('briefcase.png');?>">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo img_url('briefcase.png');?>">	
	</head>

	<body class="blog masonry-style">

		<header role="banner" class="transparent light">
			<div class="row">
				<div class="nav-inner row-content buffer-left buffer-right even clear-after">
					<div id="brand">
						<h1 class="reset"><!--<img src="img/logo.png" alt="logo">--><a href="<?php echo base_url()?>">Portfolio</a></h1>
					</div><!-- brand -->
					<a id="menu-toggle" href="#"><i class="fa fa-bars fa-lg"></i></a>
					<nav>
						<ul class="reset" role="navigation">
							<li class="menu-item">
								<a href="<?php echo base_url()?>">Accueil</a>
							</li>
							<li class="menu-item">
								<a href="<?php echo base_url()?>blog">Blog</a>
								<!--<ul class="sub-menu">
									<li><a href="blog-4-columns-masonry.html">Four Columns Grid</a></li>
									<li><a href="blog-list-sidebar.html">List Style with Sidebar</a></li>
									<li><a href="single-blog-post.html">Single Post</a></li>
									<li><a href="single-blog-post-sidebar.html">Single Post with Sidebar</a></li>
								</ul>-->
							</li>
							<li class="menu-item"><a href="<?php echo doc_url('CV_faivre_m.pdf');?>" target="_blank">CV</a></li>
							<li class="menu-item"><a href="https://monexperiencequebecblog.wordpress.com/" target="_blank">Mon expérience Québec</a></li>
							<li class="menu-item">
								<a href="<?php echo base_url()?>monexperiencequebec/partir_au_quebec">Expérience Québec</a>
								<ul class="sub-menu">
									<li><a href="<?php echo base_url()?>monexperiencequebec/partir_au_quebec">Partir au Québec</a></li>
									<li><a href="Cours_uqo.html">Les cours à l'UQO</a></li>
									<li><a href="<?php echo base_url()?>monexperiencequebec/blog">Blog Québec</a></li>
									<li><a href="no-results.html">Search Page - No Results</a></li>
									<li><a href="page-not-found.html">404 - Page Not Found</a></li>
									<li>
										<a href="#">Sub Menu</a>
										<ul class="sub-menu">
											<li><a href="#">Sub Sub Menu 01</a></li>
											<li><a href="#">Sub Sub Menu 02</a></li>
											<li><a href="#">Sub Sub Menu 03</a></li>
										</ul>										
									</li>
								</ul>								
							</li>
							<li class="menu-item"><a href="<?php echo base_url()?>contact">Contact</a></li>
						</ul>
					</nav>
				</div><!-- row-content -->	
			</div><!-- row -->	
		</header>






		<main role="main">
			<div id="intro-wrap" data-height="27.778">
				<div id="intro" class="preload darken">
					<div class="intro-item" style="background-image: url('<?php echo img_url('Qblog/coucher.jpg');?>');">
						<div class="caption">
							<h2>Des expériences à vivre</h2>
							<p><div class="quote">"On voyage pour changer, non pas de lieu, mais d'idées"</div>
								<h5>Québec 2016/2017</h5></p>
						</div><!-- caption -->	
						<div class="photocaption">
							<h4>Des articles retraçant mon périple au Canada</h4>
						</div><!-- photocaption -->								
					</div><!-- intro -->
				</div><!-- intro -->				
			</div><!-- intro-wrap -->

			<div id="main" class="row">
				<div class="row-content buffer clear-after">
				<div class="grid-items preload">

		<article class="item column six">
							<a href="arrive.html">
								<figure><?php echo img('Qblog/arrive/1.png');?><span class="blog-overlay"><i class="icon icon-doc"></i></span></figure>
								<div class="blog-excerpt">
									<div class="blog-excerpt-inner">
										<h5 class="meta-post">Commencement</h5>
										<h2>L'arrivé</h2>	
									</div><!-- blog-excerpt-inner -->		
								</div><!-- blog-excerpt -->								
							</a>
						</article>				
						<article class="item column six">
							<a href="tbtp.html">
								<figure> <?php echo img('Qblog/tbtp.png');?><span class="blog-overlay"><i class="icon icon-doc"></i></span></figure>
								<div class="blog-excerpt">
									<div class="blog-excerpt-inner">
										<h5 class="meta-post">Départ</h5>
										<h2>Tout beau, tout propre</h2>
									</div><!-- blog-excerpt -->
								</div><!-- blog-excerpt-inner -->	
							</a>
						</article>	

						<article class="item column three">
							<a href="#">
								<figure><img src="http://placehold.it/800x600/ddd/fff&text=Beetle%20image" alt=""><span class="blog-overlay"><i class="icon icon-doc"></i></span></figure>
								<div class="blog-excerpt">
									<div class="blog-excerpt-inner">
										<h5 class="meta-post">Relax, Hobbies</h5>
										<h2>How I spend my time</h2>
										<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									</div><!-- blog-excerpt-inner -->		
								</div><!-- blog-excerpt -->								
							</a>
						</article>											
						<article class="item column three">
							<a href="#">
								<figure><img src="http://placehold.it/800x600/ddd/fff&text=Beetle%20image" alt=""><span class="blog-overlay"><i class="icon icon-doc"></i></span></figure>
								<div class="blog-excerpt">
									<div class="blog-excerpt-inner">
										<h5 class="meta-post">Holidays</h5>
										<h2>Snow &amp; silence</h2>
										<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									</div><!-- blog-excerpt -->	
								</div><!-- blog-excerpt-inner -->
							</a>
						</article>	
						<article class="item column six">
							<a href="#">
								<figure><img src="http://placehold.it/800x600/ddd/fff&text=Beetle%20image" alt=""><span class="blog-overlay"><i class="icon icon-doc"></i></span></figure>
								<div class="blog-excerpt">
									<div class="blog-excerpt-inner">
										<h5 class="meta-post">Photography, Instagram</h5>
										<h2>We are all made of stars</h2>
									</div><!-- blog-excerpt -->	
								</div><!-- blog-excerpt-inner -->							
							</a>


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
								<li><a href="index.html">Accueil</a></li>
								<li><a href="https://monexperiencequebecblog.wordpress.com/" target="_blank">Québec Blog</a></li>
								<li><a href="doc/CV_faivre_m.pdf" target="_blank">CV</a></li>
								<li><a href="contact.html">Contact</a></li>
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
							<h4>Je suis aussi sur les réseaux sociaux :</h4>
							<ul class="inline meta-social">
									<li><a href="https://twitter.com/maximef2" class="twitter-share border-box" target="_blank"><i class="fa fa-twitter fa-lg"></i></a></li>
									<li><a href="https://www.facebook.com/maxime.fa2" class="facebook-share border-box" target="_blank"><i class="fa fa-facebook fa-lg"></i></a></li>
									<li><a href="https://www.linkedin.com/in/maxime-faivre-340a75105?trk=nav_responsive_tab_profile" target="_blank"class="linkedin-share border-box"><i class="fa fa-linkedin fa-lg"></i></a></li>
									<li><a href="https://www.instagram.com/maximef2/" target="_blank"class="instagram-share border-box"><i class="fa fa-instagram fa-lg"></i></a></li>
								</ul>
						</div>														
					</section><!-- top-footer -->		
				</div><!-- row-content -->	
			</div><!-- row -->	
		</footer>

		<script src="https://code.jquery.com/jquery.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>		
		<script src="<?php echo js_url('plugins');?>"></script>
		<script src="<?php echo js_url('beetle');?>"></script>

	</body>

</html>
