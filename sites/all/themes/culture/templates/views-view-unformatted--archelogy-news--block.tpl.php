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

                    <li>
                        <a href="<?= $view_field['path'] ?>">
                            <div class="news-item">
                                <div class="date-news"><?= $datefieldinvert[1] ?> <?= $datefieldinvert[0] ?> </div>
                                <img src=" <?= $view_field["field_image"] ?>" alt="<?= $view_field["title"] ?>"/>
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
