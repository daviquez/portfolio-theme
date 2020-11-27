<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<?php wp_head(); ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="David Viquez. Web Developer portfolio">
    <meta name="theme-color" content="#232323">
	<title><?php bloginfo('name'); ?><?php if(wp_title('', false)) { echo ' | '; } ?><?php wp_title(''); ?></title>
	<link rel="shortcut icon" type="image/jpg" href="<?= ROOT ?>/assets/img/favicon.png"/>
</head>
<body <?php body_class('container-fluid px-0'); ?>>

	<header class="row w-100">
		<div class="col-12 d-flex justify-content-between align-items-center px-md-5 pt-md-4">
			<!-- LOGO -->
			<div class="logo">
					<a href="<?php echo esc_url(home_url('/'))?>"><img src="<?= ROOT ?>/assets/svg/logo.svg" alt="David Viquez Logo" width="40"></a>
			</div>

			<!-- Hamburger -->
			<div class="navbar navbar-dark">
				<input type="checkbox"  data-active="false" id="h-menu">
				<label class="dark" for="h-menu" id="burger">
					<span></span>
				</label>
			</div>
		</div>
	</header>

	<section id="menu" class="menu">
		<div class="container">
			<div class="content">
				<nav class="main-menu">
					<?php wp_nav_menu(array(
						'menu' => 'top_menu'
					)) ?>
				</nav>
			</div>
		</div>
	</section>

	<main class="row pb-md-0">