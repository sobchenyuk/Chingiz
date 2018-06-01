<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <title><?php bloginfo('name'); wp_title(); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /><!-- leave this for stats -->



    <?php wp_head(); ?>


    <!--Стили-->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/file/js/library/bulma-0.4.3/css/bulma-docs.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/file/css/master.css">

    <!--<script src="https://unpkg.com/vue@2.3.4"></script>-->

    <!--Ускоряем загрузку сайта-->
    <script>
        (function() {
            (function() {
                var arr, head, i, link, rez;
                head = document.querySelector('head');
                arr = [
                    '<?php echo get_stylesheet_directory_uri() ?>/file/fonts/font-awesome/css/font-awesome.min.css?ver=4.7.0',
                    '<?php echo get_stylesheet_directory_uri() ?>/file/css/async.css'];
                i = void 0;
                rez = arr.length;
                i = 0;
                while (i < rez) {
                    link = document.createElement('link');
                    link.setAttribute('rel', 'stylesheet');
                    link.setAttribute('href', arr[i]);
                    head.appendChild(link);
                    i++;
                }
            })();

        }).call(this);

    </script>


    <!--скрипт для старых браузеров IE-->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


</head>


<div id="wrap">