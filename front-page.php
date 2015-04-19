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
	</div><!--close row-->
</div><!--.container from header-->
	<div class="container  frontpage-container">
		<div class="row frontpage-row">
			<div id="primary" class="content-area col-xs-12">
				<main id="main" class="site-main" role="main">
					
		
					<?php while ( have_posts() ) : the_post(); ?>
		
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<header class="entry-header">
								<?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?>
							</header><!-- .entry-header -->
						
							<div class="entry-content">
								<?php the_content(); ?>
								<?php
									wp_link_pages( array(
										'before' => '<div class="page-links">' . __( 'Pages:', 'bpl' ),
										'after'  => '</div>',
									) );
								?>
							</div><!-- .entry-content -->
		
							<footer class="entry-footer">
								<?php edit_post_link( __( '<span style="margin-left: 5px;" class="glyphicon glyphicon-edit"></span>Edit', 'bpl' ), '<span class="edit-link">', '</span>' ); ?>
							</footer><!-- .entry-footer -->
						</article><!-- #post-## -->
					
						
		
			
					<?php endwhile; // end of the loop. ?>
				</main><!-- #main -->
			</div><!-- #primary -->		
		</div>
	</div>
			<div  class="frontpage-middle-widgets" >
				<div class="container frontpage-middle">
					
					<h2 class="text-center frontpage-middle-header"><?php echo get_theme_mod('bpl_frontpage_middle_header', 'There Be Widgets Below!'); ?></h2>
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
