<?php
/**
 * If Front page is not set to static, display home page template
 *
 */
?>

<?php if ( 'posts' == get_option( 'show_on_front' ) ) : ?>
<?php include( get_home_template() ); ?>
<?Php else: ?> 


<?php
/**
 * The template for displaying Static Front Page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Pummel
 */

get_header(); ?>


<?php if( get_theme_mod( 'bpl_frontpage_top_image') != "" ): ?>
	<div id="frontpage-img"></div>
<?php endif; ?>

<div id="frontpage-bkg">
	<div class="container  frontpage-container">
		<div class="row frontpage-row">
			<div id="primary" class="content-area col-xs-12">
				<main id="main" class="site-main" role="main">
					
		
					<?php while ( have_posts() ) : the_post(); ?>
					
					
		
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<header class="entry-header">
								
							</header><!-- .entry-header -->
						
							<div class="entry-content">
								<?php the_content(); ?>
								<?php
									wp_link_pages( array(
										'before' => '<div class="page-links">' . __( 'Pages:', 'pummel' ),
										'after'  => '</div>',
									) );
								?>
							</div><!-- .entry-content -->
		
							<footer class="entry-footer">
								<?php edit_post_link(  '<span  class="glyphicon glyphicon-edit"></span>' . __( 'Edit', 'pummel' ), '<span class="edit-link">', '</span>' ); ?>
							</footer><!-- .entry-footer -->
						</article><!-- #post-## -->
					
						
		
			
					<?php endwhile; // end of the loop. ?>
				</main><!-- #main -->
			</div><!-- #primary -->		
		</div>
	</div>
</div>

			<div  class="frontpage-middle-widgets" >
				<div class="container frontpage-middle">
					
					<h2 class="text-center frontpage-middle-header"><?php echo sanitize_text_field(get_theme_mod('bpl_frontpage_middle_header', __('There Be Widgets Below!', 'pummel'))); ?></h2>
				    <div class="row">
				        <div class="col-sm-4">
					     
					         <?php if ( dynamic_sidebar('front-top-middle-left')); ?>
					     
				        </div>
				        <div class="col-sm-4">
					            
					          <?php if ( dynamic_sidebar('front-top-middle-center')); ?>
					          
				        </div>
				        <div class="col-sm-4">
					          
					          <?php if ( dynamic_sidebar('front-top-middle-right')); ?>
					          
				        </div>
				    </div>
				    
				    <div class="row">
				        <div class="col-sm-4">
					     
					         <?php if ( dynamic_sidebar('front-bottom-middle-left')); ?>
					     
				        </div>
				        <div class="col-sm-4">
					            
					          <?php if ( dynamic_sidebar('front-bottom-middle-center')); ?>
					          
				        </div>
				        <div class="col-sm-4">
					          
					          <?php if ( dynamic_sidebar('front-bottom-middle-right')); ?>
					          
				        </div>
				    </div>
				    
				</div>
			</div>
			
			<div class="frontpage-third-widgets" >
				<div class="container frontpage-third">
				
				    <div class="row">
				        <div class="col-sm-6">
					     
					         <?php if ( dynamic_sidebar('front-third-left')); ?>
					     
				        </div>
				        
				        <div class="col-sm-6">
					            
					          <?php if ( dynamic_sidebar('front-third-right')); ?>
					          
				        </div>
				    </div>
			    </div>
			    
			</div>	

<?php get_footer(); ?>
<?php endif; ?> 
