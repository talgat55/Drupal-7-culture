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
            <div class="special-row">
                <ul class="turism-row home-page  turism-omsk clearfix">

                    <?php $i = 0;
                    foreach ($view->style_plugin->rendered_fields as $view_field): ?>




                    <li>
                        <a href="<?= $view_field['path'] ?>">
                            <div class="turism-item">
                                <img src=" <?= $view_field["field_image_turizm"] ?>"/>
                                <h3><?= $view_field["title"] ?></h3>

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
