<form role="search" method="get" class="p-search-form" id="searchform" action="<?php echo home_url( '/' ); ?>">
  <label class="screen-reader-text" for="search"><?php esc_html_e( 'search', 'wpbeg' ); ?></label>
  <input class="p-search-form__keyword" name="s" type="text" placeholder="<?php esc_html_e( 'keyword', 'wpbeg' ); ?>" value="<?php the_search_query(); ?>">
  <input class="p-search-form__submit" id="searchsubmit" type="submit" value="<?php esc_html_e( 'search', 'wpbeg' ); ?>">
</form>
