<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!--BEGIN "/layout/head-common.txt" -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="/layout/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/layout/layout-v10.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ= sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ sha512-jGsMH83oKe9asCpkOVkBnUrDDTp8wl+adkB2D+//JtlxO4SrLoJdhbOysIFQJloQFD+C4Fl1rMsQZF76JjV0eQ==" crossorigin="anonymous"></script>
		<script src="/layout/bootstrap.min.js"></script>
	<!--END   "/layout/head-common.txt" -->

	<?php the_title('<title>', ' - Shore Leave 42</title>') ?>

	<!-- BEGIN "/layout/metaheaders.htm" -->
	<meta property="og:image" content="https://www.shore-leave.com/assets/shore-leave.jpg" />

	<!-- Identification -->
	<link rel="publisher" type="text/html" href="https://plus.google.com/108580693077595385368?rel=publisher"/> 
	<link rel="me" type="text/html" href="https://plus.google.com/108580693077595385368?rel=me"/> 
	<link rel="me" type="text/html" href="https://twitter.com/ShoreLeaveCon"/> 
	<link rel="me" type="text/html" href="https://facebook.com/ShoreLeaveCon"/> 
	<!-- END   "/layout/metaheaders.htm" -->

	<?php
		echo page_meta_description();
		echo page_twitter_description();
		echo page_og_description();
	?>

	<link rel="canonical" href="<?php echo get_permalink() ?>" />

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<!-- BEGIN "/layout/header.htm" -->
		<nav role="navigation" class="navbar navbar-default visible-xs navbar-fixed-top">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="/" class="navbar-brand"><img src="/layout/header-banner.png" alt="Shore Leave"></a>
			</div>
			<!-- Collection of nav links and other content for toggling -->
			<div id="navbarCollapse" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="/">Home</a></li>
					<!-- <li><a href="/programming/schedule.htm">Schedule</a></li> -->
					<li><a href="/info/news/">News</a></li>
					<li><a href="/info/faq/">FAQ</a></li>
					<li><a href="/registration/">Registration</a></li>
					<li><a href="/guests/">Guests</a></li>
					<!-- <li><a href="/emporium/">Emporium</a></li> -->
					<li><a href="/vendors/">Vendors</a></li>
					<!-- <li><a href="/programming/">Programming</a></li> -->
					<!-- <li><a href="/masquerade/">Masquerade</a></li> -->
					<li><a href="/info/">Information</a></li>
					<!-- <li><a href="/charity/">Charities</a></li> -->
					<li><a href="/location/">Location</a></li>
					<li><a href="/contacts/">Contacts</a></li>
					<li><a href="http://www.statclub.org/" target="_blank">STAT Club</a></li>
					<li><a href="/archive/">Photos</a></li>
					<li><a href="/flier.pdf">Flier</a></li>
					<li class="amazon"><a target="_blank" rel="noopener" href="https://www.amazon.com/exec/obidos/redirect-home/shoreleaveconven"><img src="/layout/amazon-badge.png" alt="amazon.com" /></a></li>
				</ul>
			</div>
		</nav>

		<div id="header" style="vertical-align: middle;" class="hidden-xs">
			<!--div class="header_logo"></div-->
			<!--div class="header_banner"--><p>Shore Leave, A fan run Science Fiction Convention</p><!--/div-->
		</div>

		<div style="height:55px;" class="visible-xs"></div>
		<div class="container-fluid">
	<!-- END   "/layout/header.htm" -->

	<!-- BEGIN "/layout/navbar.php" -->
	<div id="navbar" class="hidden-xs col-sm-2">
		<p><a href="/">Home</a></p>
		<p><a href="/info/news/">News</a></p>
		<p><a href="/info/faq/">FAQ</a></p>
		<p><a href="/registration/">Registration</a></p>
		<p><a href="/guests/">Guests</a></p>
		<p><a href="/vendors/">Vendors</a></p>
		<p><a href="/info/">Information</a></p>
		<p><a href="/location/">Location</a></p>

		<p><a href="/contacts/">Contacts</a></p>
		<p><a href="http://www.statclub.org/" rel="noopener" target="_blank">STAT Club</a></p>
		<p><a href="/archive/">Photos</a></p>
		<p><a href="/flier.pdf">Flier</a></p>

		<p class="amazon"><a target="_blank" rel="noopener" href="https://www.amazon.com/exec/obidos/redirect-home/shoreleaveconven"><img src="/layout/amazon-badge.png" alt="amazon.com" /></a></p>

		<p><a target="_blank" rel="noopener" href="https://twitter.com/shoreleavecon"><img src="/layout/twitter-logo.png" alt="Follow us on Twitter." /></a>
			<a target="_blank" rel="noopener" href="https://www.facebook.com/shoreleavecon"><img src="/layout/facebook-logo.png" alt="Like us on Facebook." /></a>
			<a target="_blank" rel="noopener" href="https://www.instagram.com/shoreleavecon/"><img src="/layout/instagram-logo.png" alt="Follow us on Instagram." /></a>
		</p>
	</div>
	<!-- END   "/layout/navbar.php" -->


	<div id="contents" class="container-fluid col-sm-10">

		<!-- tab bar goes here somehow. -->
		<?php get_section_menubar() ?>
