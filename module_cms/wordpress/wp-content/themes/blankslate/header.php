<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>'?v=5.5.1" type="text/css" media="all" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<nav id="menu" class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</div>

</nav>
<div id="wrapper" class="hfeed">
<div class="container">
<header id="header">
<div id="branding">
<div id="site-title">
<?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
<?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?>
</div>
<div id="site-description"><?php bloginfo( 'description' ); ?></div>
</div>

</header>