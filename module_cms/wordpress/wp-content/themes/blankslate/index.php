<?php get_header(); ?>
<aside id="sidebar_alert" class="my-3 bg-success bordered text-white">
    <?php if ( is_active_sidebar( 'alert-widget-area' ) ) : ?>
    <div id="head" class="widget-area">
    <ul class="xoxo">
    <?php dynamic_sidebar( 'alert-widget-area' ); ?>
    </ul>
    </div>
    <?php endif; ?>
    </aside>

<div class="row">
    <div class="col-8">
    <aside id="sidebar_head_left" class="my-3">
    <?php if ( is_active_sidebar( 'head-left-widget-area' ) ) : ?>
    <div id="head" class="widget-area">
    <ul class="xoxo">
    <?php dynamic_sidebar( 'head-left-widget-area' ); ?>
    </ul>
    </div>
    <?php endif; ?>
    </aside>
    </div>
    <div class="col-4">      
    <aside id="sidebar_head_right" class="my-3">
    <?php if ( is_active_sidebar( 'head-right-widget-area' ) ) : ?>
    <div id="head" class="widget-area">
    <ul class="xoxo">
    <?php dynamic_sidebar( 'head-right-widget-area' ); ?>
    </ul>
    </div>
    <?php endif; ?>
    </aside>
    </div>
</div>



<aside id="sidebar_top">
<?php if ( is_active_sidebar( 'top-widget-area' ) ) : ?>
<div id="top" class="widget-area">
<ul class="xoxo">
<?php dynamic_sidebar( 'top-widget-area' ); ?>
</ul>
</div>
<?php endif; ?>
</aside>
<div class="row mt-5">
<div class="col-8">
<main id="content">
    <h3>Berita Acara</h3>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php comments_template(); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</main>
</div>
<div class="col-4">
<?php get_sidebar(); ?>
</div>
</div>
<aside id="sidebar_bottom">
<?php if ( is_active_sidebar( 'bottom-widget-area' ) ) : ?>
<div id="bottom" class="widget-area">
<ul class="xoxo">
<?php dynamic_sidebar( 'bottom-widget-area' ); ?>
</ul>
</div>
<?php endif; ?>
</aside>
<?php get_footer(); ?>