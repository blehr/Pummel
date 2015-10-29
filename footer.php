<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Pummel
 */
?>

	<?php if ( 'posts' == get_option( 'show_on_front' ) || ! is_front_page() ) : ?>
			</div><!--row-->
		</div><!--.container from header-->
	<?php endif; ?>
	
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container-fluid">
			
			<div class="row">
		        <div class="col-sm-4">
			     
			         <?php if ( dynamic_sidebar('footer-left')); ?>
			     
		        </div>
		        <div class="col-sm-4">
			            
			          <?php if ( dynamic_sidebar('footer-center')); ?>
			          
		        </div>
		        <div class="col-sm-4">
			          
			          <?php if ( dynamic_sidebar('footer-right')); ?>
			          
		        </div>
		    </div>
		    
		    <div class="row social-footer">
		    	 <?php if (get_theme_mod('bpl_display_social_footer') == 1 ) : ?>
		    	 
		            <div class="social-footer-div">
		            	
			            <?php if ( get_theme_mod('google_plus') ) : ?>
				            <a class="social-footer-link" href="<?php echo esc_url(get_theme_mod('google_plus'));  ?>">
				                <i class="fa fa-google-plus"></i>
				            </a>
			            <?php endif; ?>
			            
			            <?php if ( get_theme_mod('facebook') ) : ?>
			            <a class="social-footer-link" href="<?php echo esc_url(get_theme_mod('facebook'));  ?>">
			                <i class="fa fa-facebook"></i>
			            </a>
			            <?php endif; ?>
			            
			            <?php if ( get_theme_mod('twitter') ) : ?>
				            <a class="social-footer-link" href="<?php echo esc_url(get_theme_mod('twitter')); ?>">
				                <i class="fa fa-twitter"></i>
				            </a>
			            <?php endif; ?>
			            
			            <?php if ( get_theme_mod('github') ) : ?>
				            <a class="social-footer-link" href="<?php echo esc_url(get_theme_mod('github')); ?>">
				                <i class="fa fa-github"></i>
				            </a>
			            <?php endif; ?>
			            
			            <?php if ( get_theme_mod('linkedin') ) : ?>
				            <a class="social-footer-link" href="<?php echo esc_url(get_theme_mod('linkedin')); ?>">
				                <i class="fa fa-linkedin"></i>
				            </a>
			            <?php endif; ?>
			            
			            <?php if ( get_theme_mod('instagram') ) : ?>
				            <a class="social-footer-link" href="<?php echo esc_url(get_theme_mod('instagram')); ?>">
				                <i class="fa fa-instagram"></i>
				            </a>
			            <?php endif; ?>
			            
			            <?php if ( get_theme_mod('pinterest') ) : ?>
				            <a class="social-footer-link" href="<?php echo esc_url(get_theme_mod('pinterest')); ?>">
				                <i class="fa fa-pinterest-p"></i>
				            </a>
			            <?php endif; ?>
			            
			          </div>  
			          
		            <?php endif; ?>
		    </div>
			
			
			
			
			<div class="site-info">
				<p><span class="fa fa-copyright"></span> <?php echo date('Y'); ?> <?php echo sanitize_text_field(get_theme_mod('bpl_copyright')); ?></p>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'pummel' ) ); ?>" ><?php printf( __( 'Proudly powered by %s', 'pummel' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( __( 'Theme: %1$s by %2$s', 'pummel' ), 'Pummel', '<a href="http://brandonlehr.com" rel="designer">Brandon Lehr</a>' ); ?>
			</div><!-- .site-info -->
		</div><!--.container-->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
