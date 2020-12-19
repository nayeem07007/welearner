<?php
/**
 * Template part for displaying Home page page content in page.php
 *
 * @package welearner
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
        <?php get_template_part( 'template-parts/sections/content', 'topic' ); ?>
        <?php get_template_part( 'template-parts/sections/tranding', 'course' ); ?>
        <?php get_template_part( 'template-parts/sections/toprated', 'course' ); ?>
        <?php get_template_part( 'template-parts/sections/content', 'counter' ); ?>
        <?php get_template_part( 'template-parts/sections/content', 'testimonial' ); ?>
        <?php get_template_part( 'template-parts/sections/content', 'client' ); ?>
        <?php get_template_part( 'template-parts/sections/content', 'creator' ); ?>
        <?php get_template_part( 'template-parts/sections/content', 'blog' ); ?>
        <?php get_template_part( 'template-parts/sections/content', 'calltoaction' ); ?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'welearner' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
