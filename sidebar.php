<div class="p-sidebar">
	<?php
		if ( is_active_sidebar( 'category_widget' ) ) :
			dynamic_sidebar( 'category_widget' );
		else:
	?>
	<div class="widget">
		<h2>No Widget</h2>
		<p>ウィジットは設定されていません。</p>
	</div>
	<?php endif; ?>
	<?php
		if ( is_active_sidebar( 'tag_widget' ) ) :
			dynamic_sidebar( 'tag_widget' );
		else:
	?>
	<div class="widget">
		<h2>No Widget</h2>
		<p>ウィジットは設定されていません。</p>
	</div>
	<?php endif; ?>
	<?php
		if ( is_active_sidebar( 'archive_widget' ) ) :
			dynamic_sidebar( 'archive_widget' );
		else:
	?>
	<div class="widget">
		<h2>No Widget</h2>
		<p>ウィジットは設定されていません。</p>
	</div>
	<?php endif; ?>
</div>
