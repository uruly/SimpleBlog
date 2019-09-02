<?php get_header(); ?>
<div class="flex-wrap">
    <!-- サイドバー -->
    <?php get_template_part('sidebar'); ?>

    <div class="main-wrap">
        <!-- 作品一覧 -->
        <?php get_template_part('front-blog'); ?>
    </div><!-- end .main-wrap -->

</div><!-- end .flex-wrap -->
<?php get_footer(); ?>