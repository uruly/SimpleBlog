<?php if(have_posts()):while(have_posts()):the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <!-- 画像 -->
        <?php if (has_post_thumbnail()): //アイキャッチがある時?> 
            <div class="post-icatch">
                <?php the_post_thumbnail('post-thumbnail'); ?>
            </div>
        <?php endif; ?>

        <!-- タイトル -->
        <h1><?php the_title(); ?><span class="date-time"><?php the_date("Y-m-d"); ?> <?php the_time("h:m");?></span></h1>

        <!-- 内容 -->
		<div class="content-wrap">
        	<?php the_content(); ?>
		</div>

    </article>
<?php endwhile;endif; ?>