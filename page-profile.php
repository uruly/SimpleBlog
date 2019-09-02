<?php get_header(); ?>

<div class="flex-wrap">
    <!-- サイドバー -->
    <?php get_template_part('sidebar'); ?>

    <div class="main-wrap">
        <div class="profile-wrap">
            <?php get_template_part('content','page'); ?>
        </div><!-- end single-wrap -->
    </div><!-- end .main-wrap -->

</div><!-- end .flex-wrap -->

<?php get_footer(); ?>