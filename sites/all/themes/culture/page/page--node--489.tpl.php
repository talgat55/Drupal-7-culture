<?php

/**
 *
 */
?>
<?php include('header.tpl.php'); ?>
<?php if ($breadcrumb): ?>
    <div class="container relative">
        <div class="top-block-content">
            <div id="breadcrumb" class="custom-top-padd-bred">

                <?php //print $breadcrumb; ?>
                <div class="breadcrumb"  >
                     <span class="inline odd first">
                        <a href="/">Главная</a>
                    </span>
                    <span class="delimiter">/</span>
                    <span class="inline even">
                        <a href="/turizm">Туризм</a>
                    </span>
                    <span class="delimiter">/</span>
                    <span class="inline odd last">Достопримечательности</span>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
    <h1 class=" title-section capitalize bottom-border-title margin-top-10 no-after">
        Достопримечательности
    </h1>
    <div id="main" class="turist-row clearfix">
        <div class="container relative clearfix">

            <div class="part-turism-page">
                <ul class="turizm-detail-part clearfix">

                    <li class="turizm-detail-item-part">
                        <a target="_blank" href="<?php echo path_to_theme(); ?>/images/KARTA_RUS_ANGL_v_PDF_33.pdf">
                            <img src="<?php echo path_to_theme(); ?>/images/omsk-min.jpg"/>
                            <div class="turism-bottom-block">
                                <h3>Достопримечательности Омска</h3>
                            </div>
                        </a>
                    </li>
                    <li class="turizm-detail-item-part">
                        <a target="_blank" href="<?php echo path_to_theme(); ?>/images/karta_nasha.pdf">
                            <img src="<?php echo path_to_theme(); ?>/images/obl-min.jpg"/>
                            <div class="turism-bottom-block">
                                <h3>Достопримечательности Омской
                                    области</h3>
                            </div>
                        </a>
                    </li>


                </ul>

                <a target="_blank" href="<?php echo path_to_theme(); ?>/images/Putevoditel_omsk_A6_SAJT.pdf"
                   class="download-putivoditel">
                    Скачать путеводитель по Омску
                </a>

            </div>


            <?php print views_embed_view('settings_ban_turizm', 'block'); ?>


        </div>
    </div>

<?php include('footer.tpl.php'); ?>