<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	if ( has_post_thumbnail() ) {
	?>
		<figure class="led-image image">
			<?php
		the_post_thumbnail( 'latest-article-home' );
	?>
		</figure>
		<?php } ?>
		<header class="entry-header">
			<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title p-name title is-2">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title p-name title is-2"><a class="u-url" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
		?>
				<div class="entry-meta">
					<?php unplugged_posted_on(); ?>
				</div>
				<!-- .entry-meta -->
				<?php
		endif;
		?>
		</header>
		<!-- .entry-header -->
		<div class="content content-wrapper">
			<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'independence' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

		?>

		</div>
		<!-- .content-wrapper -->

		<footer class="entry-footer">
			<?php unplugged_entry_footer(); ?>
		</footer>
		<!-- .entry-footer -->
</article>
<!-- #post-## -->