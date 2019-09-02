<div class="blog-wrap">
    <?php
    if(have_posts()):
        while ( have_posts() ) : the_post();?>
        <?php get_template_part('content','front'); ?>
            
        <?php endwhile;?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>

</div><!-- end blog-wrap -->