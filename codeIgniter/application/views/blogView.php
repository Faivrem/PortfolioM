<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="The Page Description">
		<style type="text/css">@-ms-viewport{width: device-width;}</style>
		<title>Blog | Maxime Faivre  </title>
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



<?php include('menu.php');?>



		<main role="main">
			<div id="intro-wrap" data-height="27.778">
				<div id="intro" class="preload darken">
					<div class="intro-item" style="background-image: url(http://wallpapercave.com/wp/MFwJJsF.jpg);">
						<div class="caption">
							<h2>Des histoires à raconter</h2>
							<p><div class="quote">"Vous devenez ce à ce quoi vous pensez le plus souvent"</div>
								<h5>Earl Nightingale</h5></p>
						</div><!-- caption -->
						<div class="photocaption">
							<h4>Des articles  par moi, parfois pour vous et parfois pour moi,peut être au moins une par mois.</h4>
						</div><!-- photocaption -->
					</div><!-- intro -->
				</div><!-- intro -->
			</div><!-- intro-wrap -->

			<div id="main" class="row">
				<div class="row-content buffer clear-after">
				<div class="grid-items preload">

					<?php foreach ($liste_article as $article ) { ?>
						<article class="item column three">
							<?php echo lien_article($article->idArticle)?>
								<figure><img src="<?php echo img_url($article->img)?>" alt=""><span class="blog-overlay"><i class="icon icon-doc"></i></span></figure>
								<div class="blog-excerpt">
									<div class="blog-excerpt-inner">
										<h5 class="meta-post"><?php echo $article->titre?></h5>
										<h2><?php echo $article->summary ?></h2>
									</div><!-- blog-excerpt -->
								</div><!-- blog-excerpt-inner -->
							</a>
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
