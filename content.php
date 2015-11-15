<?php
/**
 * @package Pummel
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php bpl_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		
		<?php if ( has_post_thumbnail() ) : ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<?php the_post_thumbnail('thumbnail', array('class' => 'list-thumbnail')); ?>
			</a>
		<?php endif; ?>
		
		<?php if( get_theme_mod( 'bpl_post_length') === "excerpt" ): ?>
		
			<?php
				/* translators: %s: Name of current post */
				the_excerpt( sprintf(
					__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'pummel' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );
			?>
		
		<?php endif; ?>
		
		<?php if( get_theme_mod( 'bpl_post_length') === "full" ) {
		
			if ( is_category() || is_archive() ) {
				
					the_excerpt( sprintf(
						__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'pummel' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );
				
			} else {
			
				the_content( sprintf(
					__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'pummel' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );
			}
		
		} ?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'pummel' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php bpl_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
<hr>