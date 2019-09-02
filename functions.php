<?php
//アイキャッチ画像を追加
add_theme_support('post-thumbnails');

//スタイルシートを追加
function my_stylesheet(){
    $date = date('YmdGis');
    $date = '?date=' . $date;
    wp_enqueue_style('normalize',get_template_directory_uri().'/normalize.css',array());
    wp_enqueue_style('style'.$date,get_stylesheet_uri(), array('normalize'));
}
add_action('wp_enqueue_scripts','my_stylesheet');

//抜粋の長さ
function new_excerpt_length($length) {
    return 50;
}  
add_filter('excerpt_length', 'new_excerpt_length');

//抜粋の後
function new_excerpt_more($more) {
   return '...';
} 
add_filter('excerpt_more', 'new_excerpt_more');

// iframeを囲む
function add_iframe_div($content) {
    $content = str_replace('<iframe', '<div class="movie"><iframe', $content);
    $content = str_replace('</iframe>', '</iframe></div>', $content);

    return $content;
}
add_filter('the_content','add_iframe_div');
add_post_type_support( 'page', 'excerpt' );

//タイトル
function my_wp_title($title,$sep){
    global $paged,$page;
    if (is_feed()){
        return $title;
    }
    $title .= get_bloginfo('name');
    $site_description = get_bloginfo('description','display');
    if($site_description && (is_home() || is_front_page())) {
        $title = "$title $sep $site_description";
    }
    return $title;
}
add_filter('wp_title','my_wp_title',10,2);