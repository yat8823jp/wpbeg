<div class="p-comment">
	<?php if( have_comments() ): ?>
		<h2 id="comments" class="p-comment__ttl"><?php esc_html_e( 'Comment', 'wpbeg' ); ?></h2>
		<ul class="p-comment__list">
			<?php wp_list_comments( 'avatar_size=60' ); ?>
		</ul>
		<div class="comment-page-link">
			<?php paginate_comments_links(); ?>
		</div>
	<?php endif; ?>
	<?php
		$args = array(
			'title_reply' => esc_html__( 'Leave a Reply', 'wpbeg' ),
			'label_submit' => esc_html__( 'POST COMMENT', 'wpbeg' ),
		);
		comment_form( $args );
	?>
</div>
