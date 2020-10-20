<?php get_header(); ?>
<aside id="sidebar">
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
<?php get_footer(); ?>