<div class="entry-summary">
<?php if ( has_post_thumbnail() ) : ?>
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
<!-- <div class="small_thumb"> -->
    <?php the_post_thumbnail('small_thumb'); ?>
</a>
<!-- </div> -->
<?php endif; ?>
<?php echo get_the_excerpt(); ?>
<?php if ( is_search() ) { ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
<?php } ?>
</div>