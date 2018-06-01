<?php

add_theme_support( 'post-thumbnails' ); // для всех типов постов

function true_include_myscript() {
    wp_enqueue_script( 'lazy-js', get_stylesheet_directory_uri() . '/file/js/jquery/lazy.js', '', '3.0', true );
    wp_enqueue_script( 'form-js', get_stylesheet_directory_uri() . '/file/js/jquery/form.js', '', '0.1', true );
    wp_enqueue_script( 'clipboard-js', get_stylesheet_directory_uri() . '/file/js/library/bulma-0.4.3/lib/clipboard.min.js', '', '1.5.9', true );
    wp_enqueue_script( 'main-js', get_stylesheet_directory_uri() . '/file/js/library/bulma-0.4.3/lib/main.js', '', '0.1', true );
}

add_action( 'wp_enqueue_scripts', 'true_include_myscript' );




remove_filter( 'the_content', 'wpautop' ); // Отключаем автоформатирование в полном посте
remove_filter( 'the_excerpt', 'wpautop' ); // Отключаем автоформатирование в кратком(анонсе) посте
remove_filter('comment_text', 'wpautop'); // Отключаем автоформатирование в комментариях

function urlThumbnail(){
    $thumb_id = get_post_thumbnail_id();
    $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
    echo $thumb_url[0];
}