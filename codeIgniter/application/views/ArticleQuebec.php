<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="The Page Description">
<style type="text/css">
</style>
<title><?php echo $article->titre;?> | Maxime Faivre</title>
<link rel="stylesheet" href="<?php echo css_url('layers.min');?>"
	media="screen">
<link rel="stylesheet" href="<?php echo css_url('style');?>"
	media="screen">
<link rel="stylesheet" href="<?php echo css_url('font-awesome.min');?>"
	media="screen">



<link
	href='http://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400italic,700italic,400,700'
	rel='stylesheet' type='text/css'>
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
</head>

<body class="single single-post">
		<?php include('menu.php');?>

		<main role="main">
	<div id="intro-wrap">
		<div id="intro" class="preload darken" data-autoplay="5000"
			data-navigation="true" data-pagination="true" data-transition="fade">
			<div class="intro-item"
				style="background-image: url(<?echo img_url($article->img) ?>);">
				<div class="photocaption">

					<h4>
						<i font-style="italic"><?php echo $article->quote;?></i>
					</h4>
				</div>
				<!-- photocaption -->
			</div>
		</div>
		<!-- intro -->
	</div>
	<!-- intro-wrap -->

	<div id="main" class="row">
		<div class="row-content buffer-left buffer-right buffer-bottom">
			<div id="post-nav">
				<ul class="clear-after reset plain">
					<li id="prev-items" class="post-nav">
						<a href="
						<?php if($article->idArticle>1){
						echo base_url().'blog/view/'.($article->idArticle-1);
						}?>
						"><i
							class="fa fa-chevron-left"></i><span class="label">Prev</span></a></li>
					<li id="all-items" class="post-nav"><a href="<?php echo base_url().'monexperiencequebec/blog'?>"><i
							class="icon icon-images"></i></a></li>
					<li id="next-items" class="post-nav"><a href="
					<?php if($article->idArticle!=$nbre_article){
					echo base_url().'blog/view/'.($article->idArticle+1);
					}?>
					"><span
							class="label">Next</span><i class="fa fa-chevron-right"></i></a></li>
				</ul>
			</div>

			<div class="post-area clear-after">
				<article role="main">
					<h5 class="meta-post">
						<a href="#">First</a>, <a href="#">Step</a> -
						<time datetime="<?php echo $article->date ?>"><?php echo $article->date ?></time>
					</h5>
					<h1><?php echo $article->titre ?></h1>
					<?php echo $article->contenu;?>
				</article>
			</div>

			<div class="meta-social">
				<ul class="inline center">
					<li><a href="
						http://twitter.com/home?status=Votre%20Tweet%20ici:%20
						<?php echo base_url().'blog/view'.$article->idArticle?>" target="_blank" class="twitter-share border-box"><i
							class="fa fa-twitter fa-lg"></i></a></li>
					<li>
						<a href="http://www.facebook.com/sharer.php?u=
						<?php echo base_url().'blog/view'.$article->idArticle?>
						" class="facebook-share border-box" target="_blank"><i
							class="fa fa-facebook fa-lg"></i>
						</a></li>
				</ul>
			</div>

			<div class="related clear-after">
				<h4>Article aléatoires :</h4>
				<div class="item">
					<figure>
						<img src="http://placehold.it/600x600/ddd/fff&text=Beetle%20image"
							alt="">
					</figure>
					<a class="overlay" href="#">
						<div class="overlay-content">
							<div class="post-type">
								<i class="icon icon-search"></i>
							</div>
							<h2>Spicemode</h2>
							<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt
								ut labore et dolore magna aliqua.</p>
						</div> <!-- overlay-content -->
					</a>
					<!-- overlay -->
				</div>
				<div class="item">
					<figure>
						<img src="http://placehold.it/600x600/ddd/fff&text=Beetle%20image"
							alt="">
					</figure>
					<a class="overlay" href="#">
						<div class="overlay-content">
							<div class="post-type">
								<i class="icon icon-search"></i>
							</div>
							<h2>In the end</h2>
							<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt
								ut labore et dolore magna aliqua.</p>
						</div> <!-- overlay-content -->
					</a>
					<!-- overlay -->
				</div>
				<div class="item last">
					<figure>
						<img src="http://placehold.it/600x600/ddd/fff&text=Beetle%20image"
							alt="">
					</figure>
					<a class="overlay" href="#">
						<div class="overlay-content">
							<div class="post-type">
								<i class="icon icon-search"></i>
							</div>
							<h2>Moove</h2>
							<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt
								ut labore et dolore magna aliqua.</p>
						</div> <!-- overlay-content -->
					</a>
					<!-- overlay -->
				</div>
			</div>

			<div class="comment-section">
				<h3 id="comments"><?php echo $nbre_com;?></h3>
				<ul class="comment-list plain">
					<?php

					foreach ( $list_com as $com ) {
						?><li class="comment">
						<div class="single-comment">
							<div class="comment-author">
								<img src="<?php echo img_url('avatar.png')?>" class="avatar"
									alt=""> <cite><a href="#"><?php echo $com->pseudo;?></a></cite>
								<span class="says">a dit :</span>
							</div>
							<!-- comment-author -->
							<div class="comment-meta">
								<time datetime="2013-03-23 19:58"><?php echo $com->date;?></time>
								<a href="#post-comment" class="reply">Reply</a>
							</div>
							<!-- comment-meta -->
							<p><?php echo $com->txt?></p>
						</div> <!-- single-comment -->
					</li>
					<?php }?>
				</ul>
			</div>

			<div id="post-comment" class="clear-after">
				<h3 id="reply-title">Leave a Reply</h3>
				<p class="comment-note">Your email address will not be published.</p>
				<?php echo form_open(base_url()."/monexperiencequebec/blog/".$article->idArticle,true)?>
					<span class="pre-input"></span> <input name="nom"
						class="name plain buffer" type="text" placeholder="Nom">
					<textarea class="plain buffer"
						placeholder="Votre commentaire" name="txt"></textarea>
					<input class="plain button red" type="submit"
						value="Submit Comment">
				<?php echo form_close()?>

			</div>
		<!-- post-comment -->

	</div>
	<!-- row-content -->
	</div>
	<!-- row --> </main>
	<!-- main -->

	<footer role="contentinfo">
		<div class="row">
			<div class="row-content buffer clear-after">
				<section id="top-footer">
					<div class="widget column three">
						<!-- la class="widget" è forse generata utomaticamente da wp -->
						<h4>Menu</h4>
						<ul class="plain">
							<li><a href="home-01.html">Home</a></li>
							<li><a href="works-3-columns.html">Portfolio</a></li>
							<li><a href="blog-4-columns-masonry.html">Blog</a></li>
							<li><a href="resume.html">Resume</a></li>
							<li><a
								href="file:///Users/pasqualevitiello/My%20Folder/Job/Envato/PR%20Themeforest/Flattie/Markup/Beetle/contact.html">Contact</a></li>
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
						<p>Lorem Ipsum has been the industry's standard dummy text ever
							since the 1500s.</p>
					</div>
					<div class="widget meta-social column three">
						<h4>Follow Us</h4>
						<ul class="inline">
							<li><a href="#" class="twitter-share border-box"><i
									class="fa fa-twitter fa-lg"></i></a></li>
							<li><a href="#" class="facebook-share border-box"><i
									class="fa fa-facebook fa-lg"></i></a></li>
							<li><a href="#" class="pinterest-share border-box"><i
									class="fa fa-pinterest fa-lg"></i></a></li>
						</ul>
					</div>
				</section>
				<!-- top-footer -->
				<section id="bottom-footer">
					<p class="keep-left">
						&copy; 2014 <a href="http://mokaine.com/" alt="Mokaine Lab">Mokaine</a>.
						All Rights Reserved.
					</p>
					<p class="keep-right">Lorem ipsum dolor sit amet, consectetur
						adipisicing elit, sed do eiusmod.</p>
				</section>
				<!-- bottom-footer -->
			</div>
			<!-- row-content -->
		</div>
		<!-- row -->
	</footer>

	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script src="<?php echo js_url('plugins');?>"></script>
	<script src="<?php echo js_url('beetle');?>"></script>

</body>

</html>
