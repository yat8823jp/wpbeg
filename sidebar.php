<div class="p-sidebar">
	<?php if ( is_active_sidebar( 'category_widget' ) ) { dynamic_sidebar( 'category_widget' ); } ?>
	<?php if ( is_active_sidebar( 'tag_widget' ) ) { dynamic_sidebar( 'tag_widget' ); } ?>
	<?php if ( is_active_sidebar( 'archive_widget' ) ) { dynamic_sidebar( 'archive_widget' ); } ?>
	<?php if ( is_active_sidebar( 'freedom_widget' ) ) { dynamic_sidebar( 'freedom_widget' ); } ?>
	<div>
		<h2>Feed配信</h2>
		<a href="<?php bloginfo('rss_url'); ?>">Feedを登録する</a>
	</div>
</div>
