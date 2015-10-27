<?php
/**
 * @package Pummel
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php bpl_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->
	
	<?php if( get_the_post_thumbnail() ) : ?>
    <div class="featured-img-container">
      <?php the_post_thumbnail('large'); ?>
    </div>
    <?php endif; ?>
    
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
		<?php bpl_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
