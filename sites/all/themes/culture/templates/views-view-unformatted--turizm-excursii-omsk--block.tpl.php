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


                    <?php
                        if($view_field["field_image_turizm"]){
                        $redyimgh =  $view_field["field_image_turizm"];
                        }else{

                        $redyimgh =  path_to_theme().'/images/turizm_omsk_no_image.jpg';
                        }

                        ?>
                    <li>
                        <a href="<?= $view_field['path'] ?>">
                            <div class="turism-item">
                                <img src=" <?= $redyimgh ?>"/>
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
