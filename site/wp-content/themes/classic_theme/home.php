<?php
/*
Template Name: Home
*/
get_header(); ?>


    <!--Шапка сайта-->
    <header>

        <div class="container">

            <div class="columns">
                <div class="column">

                </div>
                <div class="column is-two-thirds">
                    <div class="columns header_logo">
                        <div class="column">
                            <figure class="header_logo_img image">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/file/img/logo.png">
                            </figure>
                        </div>

                        <div class="column">
                            <div class="columns">
                                <div class="column is-three-quarters has-text-centered header_logo_request">
                                    <span class="icon header_request_icon">
                                      <i class="fa fa-phone" aria-hidden="true"></i>
                                    </span>
                                    <div class="block header_request_contact">
                                        <a class="button is-white contact_phone" href="tel:+7 (3812) 59 80 55">+7 (3812) 59 80
                                            55</a>
                                        <a class="button is-link contact_modal modal-button" data-target="modal-ter"><span>заказать</span>&nbsp;<span>звонок</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h1 class="title has-text-centered header_tytle">Мука, &nbsp;сахар, &nbsp;масло <span class="header_tytle_span">оптом</span></h1>

            <div class="columns">
                <div class="column is-two-thirds header_form form">
                    <div class="form_block">
                        <div class="box-1">
                            <div class="line-1"></div>
                        </div>

                        <div class="box-2">
                            <div class="line-2"></div>
                        </div>
                        <h2 class="title has-text-centered form_title">опт от <span>500</span> килограмм</h2>

                        <?php echo do_shortcode( '[contact-form-7 id="70" title="Без названия"]' ); ?>

                    </div>
                </div>
            </div>

            <div class="columns header_advantages">
                <div class="column">
                    <div class="header__advantages_num">
                        <figure>
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/file/img/one.png" alt="">
                        </figure>
                    </div>
                    <p class="has-text-centered header_advantages_text">Высокое качество</p>
                    <div class="bg-num-0"></div>
                </div>
                <div class="column">

                    <div class="header__advantages_num">
                        <figure>
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/file/img/two.png" alt="">
                        </figure>
                    </div>
                    <p class="has-text-centered header_advantages_text">Оперативная доставка </p>
                    <div class="bg-num-1"></div>
                </div>
                <div class="column">
                    <div class="header__advantages_num">
                        <figure>
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/file/img/three.png" alt="">
                        </figure>
                    </div>
                    <p class="has-text-centered header_advantages_text">Низкие цены</p>
                    <div class="bg-num-2"></div>
                </div>
            </div>

        </div>


    </header>

    <!--главный блок-->
    <main>
        <div class="container">



<?php
$a = 0;
$args = array( 'posts_per_page' => -1 , 'order' => 'ASC');
$query = new WP_Query( $args );
while ( $query->have_posts() ) {
    $query->the_post();?>

                <?php
                if($a == 4){
                   echo <<<HTML
                   <div class="main_content top-last">
                   <div class="bg-top-0"></div>
HTML;
                }else{
                    echo <<<HTML
                    <div class="main_content">
HTML;
                }

                ?>
                <div class="main_content_image">
                    <figure>

                        <img data-img="<?php urlThumbnail(); ?>" class="lazy" alt="Мука">

                        <figcaption><?php the_title(); ?></figcaption>
                    </figure>
                    <div class="square"></div>
                </div>
                <div class="main_content_describe">

                    <div class="content_describe_box">
                        <?php the_content(); ?>
                    </div>
                </div>

                <div class="content_describe_btn">
                    <span class="describe_btn_text">Оставить заявку</span><span class="describe_btn_symbol">+</span>
                </div>


                <div class="main_content_form">
                    <?php echo do_shortcode( '[contact-form-7 id="72" title="форма заявки"]' ); ?>
                </div>
                <div class="bg-<?php echo $a++?>">
                </div>
            </div>

    <?php
}
wp_reset_postdata();?>

        </div>
    </main>




    <!--секция -->
    <section class="slaider">
        <div class="container">

            <h2 class="title has-text-centered slaider_tytle">Сертификаты продукции</h2>

            <div id="slaider">
                <?php echo do_shortcode( '[meta_gallery_carousel id="108" design="design-1" slide_to_show="5" slide_to_scroll="1" autoplay="false" arrows="true" dots="false" show_title="false" show_caption="true"] ' ); ?>
            </div>

        </div>
        <div class="slaider_table_box">
            <figure class="image">
                <img data-img="<?php echo get_stylesheet_directory_uri() ?>/file/img/table.png" class="lazy" alt="Image">
            </figure>
        </div>
    </section style="height: 86px;width: 206px;">

    <!--секция -->
    <section class="partners">
        <div class="container">
            <h2 class="title has-text-centered partners_tytle">Партнеры</h2>

            <div id="partners">
                <?php echo do_shortcode( '[meta_gallery_carousel id="109" design="design-2" slide_to_show="4" slide_to_scroll="0" autoplay="false" arrows="false" dots="false" show_title="false" show_caption="false"] ' ); ?>
            </div>

            <script>
                (function () {
                    setTimeout(function () {
                        var partnersSrc = document.querySelectorAll('#partners img');
                        var partnersSlide = document.querySelectorAll('#partners .msacwl-carousel-slide.slick-slide'),
                            rezSlide = partnersSlide.length;
                        for(i = 0; i < rezSlide; i++) {
                            partnersSlide[i].innerHTML ="<img src='" + partnersSrc[i].getAttribute('src') + "' class='attachment-large size-large' alt>";
                        }
                    },300);
                })();
            </script>

        </div>
    </section>


    <!--секция -->
    <section class="form_bottom">
        <div class="container">

            <h2 class="title has-text-centered form_bottom_tytle">
                Заказывайте <br>  в <span>БОЛЬШИХ</span> объемах
            </h2>

            <div class="columns">
                <div class="column is-two-thirds header_form form">
                    <div class="form_block">
                        <div class="box-1">
                            <div class="line-1"></div>
                        </div>

                        <div class="box-2">
                            <div class="line-2"></div>
                        </div>
                        <h2 class="title has-text-centered form_title">опт от <span>500</span> килограмм</h2>

                        <?php echo do_shortcode( '[contact-form-7 id="70" title="Без названия"]' ); ?>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--подвал -->
    <footer>
        <div class="container">
            <div class="content has-text-centered">
                <p>
                    <strong class="has-text-centered">Контакты</strong>
                </p>
                <ul>
                    <li>
                        <span class="icon">
                          <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </span>
                        <br>
                        Омск, <br>
                        Семиреченская, 92
                    </li>

                    <li>
                        <span class="icon">
                         <i class="fa fa-mobile" aria-hidden="true"></i>
                        </span>

                        <br>
                        тел. +7-951-401-88-88<br>
                        тел. +7 (3812) 59-80-55<br>
                        тел. +7-913-150-11-11
                    </li>

                    <li>
                        <span class="icon">
                          <i class="fa fa-bars" aria-hidden="true"></i>
                        </span>

                        <br>
                        Пн-Cб. <strong>с 9:00 - 19:00</strong><br>
                        Воскресенье- <strong>выходной</strong>
                    </li>

                </ul>
            </div>
        </div>

        <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2292.284674989497!2d73.29991351590306!3d54.933023680342046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43ab03bbca6892c1%3A0x4d4999f1ef26961c!2z0KHQtdC80LjRgNC10YfQtdC90YHQutCw0Y8g0YPQuy4sIDkyLCDQntC80YHQuiwg0J7QvNGB0LrQsNGPINC-0LHQuy4sINCg0L7RgdGB0LjRjywgNjQ0MDE2!5e0!3m2!1sru!2sua!4v1499663971275" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

    </footer>


<?php get_footer();
