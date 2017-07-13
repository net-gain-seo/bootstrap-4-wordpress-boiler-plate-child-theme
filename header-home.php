<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<?php wp_head(); ?>

	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/src/css/main.css" />

</head>
<body <?php body_class(); ?>>

<!-- header -->
<header class="header image-header" role="banner">

	<section class="menu container-fluid">
		<div class="container">
			<div class="d-flex justify-content-between">
				<div>
					<a href="<?php bloginfo('url'); ?>">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/NG_Logo_White.png" />
					</a>
				</div>


				<nav class="navbar navbar-toggleable-md navbar-light" role="navigation">
					<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div id="mainMenu" class="collapse navbar-collapse">
						<?php 
						wp_nav_menu( 
							array(
								'theme_location'    => 'main',
								'container'         => 'false',
								'menu_class'        => 'navbar-nav mr-auto',
								'walker'			=> new bootstrap_Walker(false)
							)
						);
						?>
					</div>
			    </nav>
			</div>
		</div>
	</section>

	<section class="container jumbotron">
		<div class="d-flex justify-content-center text-center">
			<p class="display-4 ">The right bean and brewing technique</p>
		</div>
		<div class="d-flex justify-content-center text-center">
			<p class="lead">Give us a call at: 555-555-5555</p>
		</div>
		<div class="d-flex justify-content-center text-center">
			<a href="#" class="btn btn-primary btn-lg">Get A Quote</a>
		</div>
		
	</section>
</header>
<!-- /header -->
