<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Pummel
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon.ico">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'bpl' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		
		
		<?php //begin for custom header image  ?>
		<?php if ( get_header_image() ) : ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
		</a>
		<?php endif; // End header image check. ?>
		
		
		<nav class="navbar navbar-default" role="navigation">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="container">
		        <div class="navbar-header">
		            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
		                <span class="sr-only">Toggle navigation</span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		
		           
		            <?php if (get_theme_mod('bpl_display_social_header') == 1 ) : ?>
		            
			            <?php if ( get_theme_mod('google_plus') ) : ?>
				            <a class="navbar-brand" href="<?php echo get_theme_mod('google_plus');  ?>">
				                <i class="fa fa-google-plus"></i>
				            </a>
			            <?php endif; ?>
			            
			            <?php if ( get_theme_mod('facebook') ) : ?>
			            <a class="navbar-brand" href="<?php echo get_theme_mod('facebook');  ?>">
			                <i class="fa fa-facebook"></i>
			            </a>
			            <?php endif; ?>
			            
			            <?php if ( get_theme_mod('twitter') ) : ?>
				            <a class="navbar-brand" href="<?php echo get_theme_mod('twitter'); ?>">
				                <i class="fa fa-twitter"></i>
				            </a>
			            <?php endif; ?>
			            
			            <?php if ( get_theme_mod('github') ) : ?>
				            <a class="navbar-brand" href="<?php echo get_theme_mod('github'); ?>">
				                <i class="fa fa-github"></i>
				            </a>
			            <?php endif; ?>
			            
			            <?php if ( get_theme_mod('linkedin') ) : ?>
				            <a class="navbar-brand" href="<?php echo get_theme_mod('linkedin'); ?>">
				                <i class="fa fa-linkedin"></i>
				            </a>
			            <?php endif; ?>
			            
			            <?php if ( get_theme_mod('instagram') ) : ?>
				            <a class="navbar-brand" href="<?php echo get_theme_mod('instagram'); ?>">
				                <i class="fa fa-instagram"></i>
				            </a>
			            <?php endif; ?>
			            
			            <?php if ( get_theme_mod('pinterest') ) : ?>
				            <a class="navbar-brand" href="<?php echo get_theme_mod('pinterest'); ?>">
				                <i class="fa fa-pinterest-p"></i>
				            </a>
			            <?php endif; ?>
			            
		            <?php endif; ?>
		            
		            
		            
		            
		            
		        </div>
		
		        <?php
		            wp_nav_menu( array(
		                'menu'              => 'primary',
		                'theme_location'    => 'primary',
		                'depth'             => 2,
		                'container'         => 'div',
		                'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
		                'menu_class'        => 'nav navbar-nav navbar-right',
		                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		                'walker'            => new wp_bootstrap_navwalker())
		            );
		        ?>
		    </div>
		</nav>
		

		<div class="container">
			<div class="site-branding <?php if (get_theme_mod('bpl_title_center') == 1 ){echo 'text-center';}; ?>">
				<h1 class="site-title"><a  href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</div><!-- .site-branding -->
		</div>

	
	</header><!-- #masthead -->
	
	

	<div id="content" class="site-content">
		<div class="container content-container">
			<div class="row">
				<div class="col-xs-12">
					<?php if(function_exists('mine_breadcrumbs')) mine_breadcrumbs(); ?>
				</div>
			</div>
			<div class="row">
			
		
