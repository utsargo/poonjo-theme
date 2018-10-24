<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<div class="col-md-6 article-wrapper">
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div class="post-container">
		<div class="titleandimage">
	<div class="post-thumb">
		<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
	</div>
	<header class="entry-header">
		
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
		'</a></h2>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>

			<div class="entry-meta">
				<?php understrap_posted_on(); ?>
			</div><!-- .entry-meta -->

		<?php endif; ?>

	</header><!-- .entry-header -->

		</div>
<div class="overlay">
	<div class="text">
		
	
	<div class="entry-content">

		<div class="post-excerpt">
			<?php
			the_excerpt();
			?>
		</div>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->
		</div>
		</div>
	</div>
</article><!-- #post-## -->
</div>