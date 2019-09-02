<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <a href="<?php echo esc_url(get_permalink('')); ?>">
        <h2><?php the_title(); ?><span class="date-time"><?php echo get_the_date("Y-m-d"); ?> <?php the_time("h:m");?></span></h2>
    </a>
</article>