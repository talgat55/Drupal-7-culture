<?php
/**
 * Created by PhpStorm.
 * User: talga
 * Date: 26.04.2018
 * Time: 11:42
 */
?>
<div class="item-list">
    <div class="main-slider">
        <?php

        foreach($view->style_plugin->rendered_fields as $view_field): ?>
        <?php // krumo($view_field);exit;?>

            <?php
        echo '<div>';
                echo '<div class="image-block-slider">';

                echo $view_field['field_image_main'];

                echo '</div>';
                echo '    <div class="text-block-slider">
                            <div class="container">';
                                echo '
                                    <div class="col-md-6">
                                        <div class="slider-main-title">
                                        '.$view_field['title'].'
                                        </div>
                                        <div class="slider-main-text">
                                        '.$view_field['field_description_main'].'
                                        </div>
                                        <div class="slider-main-text">
                                        '.$view_field['field_description_main'].'
                                        </div>
                                          <div class="slider-main-link">
                                        '.$view_field['field_link_main'].'
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="text-block-slider--right-block">                    
                                            <div class="date-main-slier">'.$view_field['field_date_main'].'</div>
                                            <div class="place-main-slier">'.$view_field['field_place_main'].'</div>
                                        </div>                  
                                    
                                    </div>

                                ';

                echo '    </div>
                        </div>';

        echo '</div>';

          //  print_r($view_field);
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
    <div class="slider-nav">
        <a href="#" class="slider-arrow-left"><span class="icon-left-open"></span></a>

        <a href="#" class="slider-arrow-right"><span class="icon-right-open"></span></a>
    </div>
</div>
