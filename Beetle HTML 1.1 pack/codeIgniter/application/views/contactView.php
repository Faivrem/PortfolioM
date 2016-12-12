<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="The Page Description">
		<style type="text/css">@-ms-viewport{width: device-width;}</style>
		<title>Contact| Maxime Faivre  </title>
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
			<div id="intro-wrap" class="">
				<div id="intro" class="preload darken more-button">					
					<div class="map" data-maplat="45.445530" data-maplon="-75.717087" data-mapzoom="7" data-color="aqua" data-height="300" data-img="img/marker.png" data-info="Je vis actuellement à Gatineau, Québec"></div>							
				</div><!-- intro -->
			</div><!-- intro-wrap -->

			<div id="main">

				<section class="row section">
					<div class="row-content buffer even clear-after">
						<div class="section-title"><h3>Me contacter?</h3></div>	
						<p>Je me ferai un plaisir de répondre à vos questions! <i class="fa fa-smile-o" aria-hidden="true"></i></p>
						<div class="column nine">
							<form id="contact-form" class="contact-section" method="post" action="">
								<span class="pre-input"><i class="icon icon-user"></i></span>
								<input class="name plain buffer" type="text" name="name" placeholder="Nom complet">
								<span class="pre-input"><i class="icon icon-email"></i></span>
								<input class="email plain buffer" type="email" name="email" placeholder="Adresse mail">
								<textarea class="plain buffer" name="message" placeholder="Votre message"></textarea>
								<input id="send" class="transparent button grey" type="button" value="Envoyez un message">
							</form>	
							<div id="success"></div>
						</div>
						<div class="column three last">
							<div class="widget">
								<h4>Ma localisation</h4>
								<p>
									Rue Scott<br>
									J8Y4G8 Gatineau(QC)<br>
									Canada
								</p>
							</div>
							<div class="widget">
								<h4>Vous pouvez aussi me contacter via : </h4>
								<ul class="inline meta-social">
									<li><a href="https://twitter.com/maximef2" class="twitter-share border-box" target="_blank"><i class="fa fa-twitter fa-lg"></i></a></li>
									<li><a href="https://www.facebook.com/maxime.fa2" class="facebook-share border-box" target="_blank"><i class="fa fa-facebook fa-lg"></i></a></li>
									<li><a href="https://www.linkedin.com/in/maxime-faivre-340a75105?trk=nav_responsive_tab_profile" target="_blank"class="linkedin-share border-box"><i class="fa fa-linkedin fa-lg"></i></a></li>
									<li><a href="https://www.instagram.com/maximef2/" target="_blank"class="instagram-share border-box"><i class="fa fa-instagram fa-lg"></i></a></li>
								</ul>
							</div>								
						</div>
					</div>
				</section>
				<section class="row section">
					<div class="row-content buffer even clear-after">
						<div class="section-title"><h3>Besoin d'une réponse rapide?</h3></div>
						<div class="centertxt">
						<a class="button red transparent" href="mailto:max.faivre6@free.fr">Envoyez un mail</a>
						</div>

					</div>
				</section>

			</div><!-- id-main -->
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
		<script>
		$(document).ready(function(){
			$('#send').click(function(){
				$(this).val('Sending ...');
				$('#success p').remove();
				$.post('contact/contact.php', $('#contact-form').serialize(), function(response) {
					$('#success').html(response);
					//$('#success').hide('slow');
					$('#send').val('Send a Message');
				});
				return false;
			});
		});
		</script>		

	</body>

</html>
