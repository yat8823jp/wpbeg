<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<?php wp_body_open(); ?>
		<header class="header">
			<h1 class="header__ttl"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?><span class="header__ttl__sub">static</span></a></h1>
			<p class="header__descrition"><?php bloginfo( 'description' ); ?></p>
			<?php get_search_form(); ?>
			<?php wp_nav_menu( array( 'theme_location' => 'global_nav' ) ); ?>
		</header>
