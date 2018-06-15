<?php
/**
 * Created by PhpStorm.
 * User: talga
 * Date: 26.04.2018
 * Time: 11:42
 */
?>
<div class="view-content turism-news-content ">
    <div class="news-holder">
        <div class="container relative">
            <div class="special-row margin-10">
                <ul class="news home-page  turism-news clearfix">

                    <?php $i = 0;
                    foreach ($view->style_plugin->rendered_fields as $view_field): ?>

                    <?php $datefield = explode(',', $view_field['created']); ?>
                    <?php $datefieldinvert = explode(' ', trim($datefield[1])); ?>
                    <?php if ($i == 4  && $view->query->pager->current_page == 0) { ?>
                    </ul>
                    <div class="banner turist-banner home-page clearfix padding-top-20">
                        <img src="<?php echo path_to_theme(); ?>/images/bg-turist-min.jpg"/>
                        <div class="textblock-banner turism-page-banner   left-block">

                            <div class="textblock-banner-wallpaper">

                                <div class="title-field-banner  download-file">
                                    Скачать путеводитель по Омску
                                </div>

                                <a target="_blank" href="<?php echo path_to_theme(); ?>/images/Putevoditel_omsk_A6_SAJT.pdf" class="link-tofile-bannner">Скачать</a>


                            </div>

                        </div>
                    </div>

                    <ul class="news home-page clearfix margin-botom-news-custom">
                    <?php } ?>
                    <li>
                        <a href="<?= $view_field['path'] ?>">
                            <div class="news-item">
                                <div class="date-news"><?= $datefieldinvert[1] ?> <?= $datefieldinvert[0] ?> </div>
                                <img src=" <?= $view_field["field_image"] ?>"/>
                                <h3><?= $view_field["title"] ?></h3>
                                <div class="news-text-block">
                                    <?= $view_field["field_anons"] ?>
                                </div>
                            </div>
                        </a>
                    </li>
                    <?php $i++;
                    endforeach; ?>


                </ul>

            </div>
        </div>
    </div>
</div>
