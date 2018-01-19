<?php get_header(); ?>
		<div class="c-wrap">
			<div class="c-grid">
				<div class="p-contents">
					<div class="p-post">
					<?php
						if( have_posts() ) :
							while( have_posts() ) :
								the_post(); ?>
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
									<?php the_content(); ?>
									<?php $args = array (
										'before' => '<div class="page-split">',
										'after' => '</div>',
										'link_before' => '<span>',
										'link_after' => '</span>',
										);
										wp_link_pages( $args );
									?>
								</div>
								<div class="post__author">
									<p class="post__author__ttl"><?php echo esc_html_e( 'author', 'wpbeg' ); ?></p>
									<?php echo get_avatar( get_the_author_meta( 'ID' ), 60 ); ?>
									<div class="post__author__name"><?php the_author_posts_link(); ?></div>
									<p class="post__author__comment"><?php the_author_meta( 'description' ) ?></p>
								</div>
								<?php comments_template(); ?>
								<?php if( get_previous_post() || get_next_post() ) : ?>
									<ul class="p-pagenation">
										<?php if ( get_previous_post() ) : ?>
											<li class="prevpostslink"><?php previous_post_link( '%link', 'Prev' ); ?></li>
										<?php endif; ?>
										<?php if( get_next_post() ): ?>
											<li class="prevpostslink"><?php next_post_link( '%link', 'Next' ); ?></li>
										<?php endif; ?>
									</ul>
								<?php endif; ?>
							<?php endwhile;
						else :
							?><h2 class="post__ttl__error"><?php echo esc_html_e( 'no post data', 'wpbeg' ); ?></h2><?php
						endif; ?>
					</div>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
<?php get_footer(); ?>
