<?php
/**
 * Created by PhpStorm.
 * User: talga
 * Date: 26.04.2018
 * Time: 11:42
 */
?>
<div class="afisha-carousel-holder">
    <div class="container relative">
        <div class="special-row margin-10">
        <div class="afisha-carousel home-page">
            <?php

            foreach ($view->style_plugin->rendered_fields as $view_field): ?>
                <?php // krumo($view_field);exit;
                print_r($view_field['field_date_afisha']);
            $datefield = explode(',', $view_field['field_date_afisha']);
            $datefieldinvert =   explode(' ',trim($datefield[1]));

                echo '
                    <div class="item-afisha">
                        <div class="afisha-item-date">'.$datefieldinvert[1].' '.$datefieldinvert[0].'</div>
                        ' . $view_field['field_image_afisha'] . '
                        <div class="title-afisha">'.$view_field['title'].'</div>
                    </div>
            ';
                //var_dump($view_field);
                /*  $params = array(
                      'style_name' => 'original',
                      'path' => $view_field['field_main_img'],
                      'alt' => '',
                      'title' => '',
                      'attributes' => array('class' => array('image')),
                      'getsize' => FALSE,
                  );
                  */
            endforeach; ?>


        </div>
        </div>
        <div class="slider-nav afisha">
            <a href="#" class="slider-arrow-left">
                <img src="/<?php print path_to_theme(); ?>/images/afisha-arr-mirror.png" alt="arrow afisha carousel" />
            </a>

            <a href="#" class="slider-arrow-right">
                <img src="/<?php print path_to_theme(); ?>/images/afisha-arr.png" alt="arrow afisha carousel" />
            </a>
        </div>
        <div class="col-md-12">
            <a href="/afisha" class="link-to-mateerial">Вся афиша</a>
        </div>


    </div>
</div>
