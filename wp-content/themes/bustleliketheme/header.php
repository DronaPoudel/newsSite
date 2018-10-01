<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bustleliketheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bustleliketheme' ); ?></a>

	<header id="masthead" class="site-header">

		<div class="header-social-links container">
		
			<!-- <div class="justify-content-md-centerr"> -->
				<div class="row">
					<div class="col-md-4 ">
						
					</div>
					 <div class="brand-image mx-auto">
			 			<a href="#"><img class="brand-logo mx-auto" src="<?php echo get_template_directory_uri(); ?>/images/brand.png"/></a>
					</div>
					<div class="col-md-4">
						<p class="text-right social-links">
							<a href="#"><i class="fab fa-facebook-f"></i></a>
							<a href="#"><i class="fab fa-twitter"></i></a>
							<a href="#"><i class="fab fa-pinterest"></i></a>
							<a href="#"><i class="fab fa-instagram"></i></a>
							<a href="#"><i class="fab fa-youtube"></i></a>
							<a href="#"><i class="fas fa-podcast"></i></a>
							<i>
							|
							</i>
							<a href="#"><i class="fas fa-search fa-2x pl-2"></i></a>
							<i class="fas fa-globe fa-2x"></i>
						</p>
					</div>
				</div>
				<!-- <button type="button" class="btn btn-danger">Primary</button> -->
			<!-- </div> -->
		
		</div>
		
			

		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$bustleliketheme_description = get_bloginfo( 'description', 'display' );
			if ( $bustleliketheme_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $bustleliketheme_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
 
	

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'bustleliketheme' ); ?></button>

			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>





		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
