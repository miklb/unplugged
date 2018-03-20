<?php
/**
 *  Index template
 *
 * @package unplugged
 */

get_header(); ?>
	<section class="content" id="main">
		<?php
		if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) : the_post();
				if ( is_sticky() ) {
					get_template_part( 'template-parts/content', 'sticky' );
				} else {
					get_template_part( 'template-parts/content', get_post_format() );
				}
			endwhile;
		else :
				get_template_part( 'template-parts/content', 'none' );
		endif;
		?>
	</div><!-- end .main -->


<?php get_footer(); ?>