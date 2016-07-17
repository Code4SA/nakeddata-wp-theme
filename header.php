<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<a href="<?= esc_url( home_url( '/' ) ) ?>"><img id="logo" src="<?= get_template_directory_uri() ?>/images/logo.png" alt="NakedData"></a>
		</div>
		<div id="navbar" class="navbar">
			<div class="container border-top">
				<ul class="nav navbar-nav hidden-xs">
					<li><a href="/category/dont-miss">#Don't Miss</a></li>
					<li><a href="/category/nerds">#Nerds</a></li>
					<li><a href="/category/stack">#Stack</a></li>
					<li><a href="/category/community">#Community</a></li>
					<li><a href="/category/finally">#Finally</a></li>
				</ul>
			</div>
		</div>
	</header><!-- .site-header -->
	<div class="container">
		<div class="row">
			<div id="content" class="site-content col-sm-12">
