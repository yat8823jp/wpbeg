<div class="p-comment">
	<?php if( have_comments() ): ?>
		<h2 id="comments" class="p-comment__ttl">Comment</h2>
		<ul class="p-comment__list">
			<?php wp_list_comments( 'avatar_size=60' ); ?>
		</ul>
		<div class="comment-page-link">
			<?php paginate_comments_links(); ?>
		</div>
	<?php endif; ?>
	<?php
		$args = array(
			'title_reply' => 'Leave a Reply',
			'label_submit' => ' POST COMMENT',
		);
		comment_form( $args );
	?>
</div>
