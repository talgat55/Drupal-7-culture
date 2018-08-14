<?php
/**
 * Created by PhpStorm.
 * User: talga
 * Date: 26.04.2018
 * Time: 11:42
 */
?>
<div class="news-holder">
    <div class="container relative">
    <div class="special-row margin-10">
        <ul class="news home-page clearfix">
            <?php

            foreach ($view->style_plugin->rendered_fields as $view_field): ?>
                <?php // krumo($view_field);exit;



            $datefield = explode(',', $view_field['created']);
            $datefieldinvert =   explode(' ',trim($datefield[1]));

            echo '
                <li class="item-news-page">
                    <a href="'.$view_field['path'].'" >
                    <div  class="news-item">
                        <div class="date-news">'.$datefieldinvert[1].' '.$datefieldinvert[0].'</div>
                        <img data-src="'.$view_field["field_image"].'"  />
                        <h3  >'.$view_field["title"].'</h3>
                        <div class="news-text-block">
                            '.$view_field["field_anons"].'
                        </div>
                    </div>
                    </a>
                </li>
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


        </ul>


        <div class="col-md-12 news-block">
            <a href="/news" class="link-to-mateerial">Больше новостей</a>
        </div>


    </div>
    </div>
</div>
