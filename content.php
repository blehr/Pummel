<?php
/**
 * @package Pummel
 */
?>

<?php if ( has_post_thumbnail() ) : ?>
	<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', true ); ?>
<?php endif; ?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>  >

	<div class="blog-index-article" data-thumbnail-src="<?php echo $src['0'] ?>">

		<header class="entry-header">
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

			<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<?php bpl_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

	</div>


</article><!-- #post-## -->

<div class="entry-footer">
	<?php bpl_entry_footer(); ?>
</div><!-- .entry-footer -->


<hr>
