<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body class="background-site" <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>


	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-12">
				<header id="masthead" class="site-header" role="banner">
            <?php // substitute the class "container-fluid" below if you want a wider content area ?>
					<div class="container pb-0">
						<div class="row">
							<nav class="site-navigation">
                  <?php // substitute the class "container-fluid" below if you want a wider content area ?>
								<div class="container pb-0">
									<div class="row">
										<div class="site-navigation-inner col-sm-12">
											<div class="navbar navbar-default d-flex align-items-center">
												<div class="navbar-header">
													<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
														<span class="sr-only"><?php _e('Toggle navigation','_tk') ?> </span>
														<span class="icon-bar"></span>
														<span class="icon-bar"></span>
														<span class="icon-bar"></span>
													</button>
												</div>
												<a class="navbar-brand" href="<?php echo get_site_url(); ?>" >
													<img src="<?php header_image(); ?>"  alt="logo" class="logo-header img-fluid" width="127px">
												</a>
												<!-- The WordPress Menu goes here -->
                          <?php wp_nav_menu(
                              array(
                                  'theme_location' 	=> 'header_nav',
                                  'depth'             => 2,
                                  'container'         => 'nav',
                                  'container_id'      => 'navbar-collapse',
                                  'container_class'   => 'collapse navbar-collapse',
                                  'menu_class' 		=> 'nav navbar-nav',
                                  'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
                                  'menu_id'			=> 'main-menu',
                                  'walker' 			=> new wp_bootstrap_navwalker()
                              )
                          ); ?>
											</div><!-- .navbar -->
										</div>
									</div>
								</div><!-- .container -->
							</nav><!-- .site-navigation -->
						</div>
					</div><!-- .container -->
				</header><!-- #masthead -->
			</div>
		</div>
	</div>
	<div class="site-header-banner-wrap">
		<img src="<?php echo get_theme_mod('header_banner_settings'); ?>" alt="header-banner" class="img-fluid site-header-banner">
		<h2 class="title-header"><?php the_title(); ?></h2>
	</div>




<div class="main-content">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container">
		<div class="row">


