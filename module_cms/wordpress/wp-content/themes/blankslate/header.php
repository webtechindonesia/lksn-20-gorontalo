<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>'?ver=5.5.1:17" type="text/css" media="all" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<nav id="menu" class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container">
<div class="container navbar-nav mr-auto d-flex">
        <div class="p-2 flex-grow-1">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"  title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><h2 class="mb-2"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h2></a>
            <div id="site-description "><?php bloginfo( 'description' ); ?></div>
        </div>
        <div class="p-2">
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
        </div>
        
    </div>
</div>

</nav>
<div id="wrapper mt-3" class="hfeed">
<div class="container mt-3">
