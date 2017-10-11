<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="format-detection" content="telephone=no">
		<meta name="description" content="WordPress theme development static data for beginners">
		<meta name="keywords" content="WordPress, Theme, development">
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/common/ico/favicon.ico">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header class="header">
			<h1 class="header__ttl"><a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
			<p class="header__descrition"><?php bloginfo( 'description' ); ?></p>
			<?php get_search_form(); ?>
			<?php wp_nav_menu(); ?>
		</header>
