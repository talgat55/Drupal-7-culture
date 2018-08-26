<?php

/**
 *
 */
?>
<?php include('header.tpl.php'); ?>
<?php if ($breadcrumb): ?>
    <div class="container relative">
        <div class="top-block-content">
            <!--<div id="breadcrumb">

                <?php //print $breadcrumb; ?>

            </div>-->
            <div id="breadcrumb" class="custom-top-padd-bred">
                <div class="breadcrumb ">
                    <span class="inline odd first">
                        <a href="/">Главная</a>
                    </span>
                    <span class="delimiter">/</span>
                    <span class="inline even last">Туризм</span>
                </div>
            </div>
        </div>

    </div>
<?php endif; ?>
    <h1 class=" title-section bottom-border-title no-after margin-top-10">
        Туризм
    </h1>
    <div id="main" class="turist-row clearfix">
        <div class="container relative clearfix">




            <?php print views_embed_view('settings_ban_turizm', 'block'); ?>

            <div class="cat-turism-page">
                <ul class="turizm-detail home-page clearfix">
                    <?php
                    $file_omsk_obl = file_load(theme_get_setting('turizm_image_omsk_obl'));
                    $uri_omsk_obl = $file_omsk_obl->uri;
                    $url_omsk_obl = file_create_url($uri_omsk_obl);

                    $file_omsk = file_load(theme_get_setting('turizm_image_omsk'));
                    $uri_omsk = $file_omsk->uri;
                    $url_omsk = file_create_url($uri_omsk);

                    $file_adavance = file_load(theme_get_setting('turizm_image_adavance'));
                    $uri_adavance = $file_adavance->uri;
                    $url_adavance = file_create_url($uri_adavance);


                   /* ?>
                    <li class="turizm-detail-item"
                        style="background: url(<?php echo $url_omsk_obl; ?>) center bottom;">

                   <?php */?>
                    <li class="turizm-detail-item"
                        style="background: url(<?php echo path_to_theme(); ?>/images/1t-min.jpg) center bottom;">

                        <a href="/turizm-turi-omskaya-oblast">

                            <div class="culture-bottom-block">
                                <h3>Туры по Омской области</h3>
                                <div class="overlay-turizm-detail"></div>
                            </div>
                        </a>
                    </li>
                    <?php /*
                    <li class="turizm-detail-item"
                        style="background: url(<?php echo $url_omsk; ?>) center bottom;">
                         <?php */ ?>
                    <li class="turizm-detail-item"
                        style="background: url(<?php echo path_to_theme(); ?>/images/2t-min.jpg) center bottom;">
                        <a href="/turizm-eksursii-omsk">

                            <div class="culture-bottom-block">
                                <h3>Экскурсии по Омску</h3>
                                <div class="overlay-turizm-detail"></div>
                            </div>
                        </a>
                    </li>
                    <?php /*
                    <li class="turizm-detail-item"
                        style="background: url(<?php echo $url_adavance; ?>) center bottom;">
                        <?php
                        */  ?>
                    <li class="turizm-detail-item"
                        style="background: url(<?php echo path_to_theme(); ?>/images/3t-min.jpg) center bottom;">
                        <a href="/turizm-dostoprimechatelnosti">

                            <div class="culture-bottom-block">
                                <h3>Достопримечательности города</h3>
                                <div class="overlay-turizm-detail"></div>
                            </div>
                        </a>
                    </li>


                </ul>

            </div>

            <h2 class="title-section bottom-border-title">Все о туризме в Омской области</h2>
            <?php print views_embed_view('turizm_news', 'block'); ?>

        </div>
    </div>

<?php include('footer.tpl.php'); ?>