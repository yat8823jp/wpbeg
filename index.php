<?php get_header(); ?>
<div class="c-wrap">
	<div class="c-grid">
		<div class="p-contents">
			<?php
				if( have_posts() ) :
					while( have_posts() ) :
						the_post();
						?>
						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<h2 class="post__ttl"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<ul class="post__meta">
								<li class="post__meta__item">
									<date class="post__meta__date"><?php the_date(); ?></date>
								</li>
								<li class="post__meta__item"><i class="fa fa-folder" aria-hidden="true"><?php the_category( ', ' ); ?></i></li>
								<li class="post__meta__item"><i class="fa fa-tag" aria-hidden="true"><?php the_tags( '' ); ?></i></li>
							</ul>
							<?php the_post_thumbnail(); ?>
							<?php the_content( esc_html( 'read more', 'wpbeg' ) ); ?>
						</div>
					<?php endwhile;
				else :
					?><h2 class="post__ttl__error"><?php esc_html_e( 'no post data', 'wpbeg' ); ?></h2><?php
				endif;
			?>
		</div>
		<?php if ( $wp_query -> max_num_pages > 1 ) : ?>
			<ul class="p-pagenation">
				<li class="prevpostslink"><?php next_posts_link( 'Prev' ); ?></li>
				<li class="prevpostslink"><?php previous_posts_link( 'Next' ); ?></li>
			</ul>
		<?php endif; ?>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>
