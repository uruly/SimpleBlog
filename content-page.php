<?php if(have_posts()):while(have_posts()):the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <!-- 画像 -->
        <?php if (has_post_thumbnail()): //アイキャッチがある時?> 
            <div class="flex-profile-image">
                <div class="post-icatch">
                    <?php the_post_thumbnail('post-thumbnail'); ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="flex-content">
            <!-- 記事タイトル -->
            <h1><?php the_title(); ?></h1>
            
            <!-- 内容 -->
            <div class="article-content"><?php the_content() ;?></div>
        </div><!-- end .flex-content -->
    </article>

<?php endwhile;endif; ?>