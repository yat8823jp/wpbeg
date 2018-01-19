<?php get_header(); ?>
		<div class="c-wrap">
			<div class="c-grid">
				<div class="p-contents">
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h2 class="post__ttl__error"><?php esc_html_e( 'Page not found.', 'wpbeg' ); ?></h2>
						<p><?php esc_html_e( 'Sorry, but the page you requested cannot be found.', 'wpbeg' ); ?></p>
					</div>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
<?php get_footer(); ?>
