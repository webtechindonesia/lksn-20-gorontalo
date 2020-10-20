
<div class="entry-summary">
<?php if ( has_post_thumbnail() ) : ?>

<!-- </div> -->
<?php endif; ?>
<?php echo get_the_excerpt(); ?>
<?php if ( is_search() ) { ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
<?php } ?>
</div>