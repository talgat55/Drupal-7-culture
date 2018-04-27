<?php
/**
 * Created by PhpStorm.
 * User: talga
 * Date: 26.04.2018
 * Time: 11:42
 */
?>
<div class="sldier-main-holder">
    <div class="main-slider">
        <?php

        foreach ($view->style_plugin->rendered_fields as $view_field):
            $datefield = explode(',', $view_field['field_date_main']);
            $datefieldinvert = explode(' ', trim($datefield[1]));
            echo '<div>';
            echo '<div class="image-block-slider" style="background: url(' . $view_field['field_image_main'] . ');">';
            echo '    <div class="text-block-slider">
                            <div class="container clearfix">';
            echo '
                                    <div class="col-md-6">
                                        <div class="slider-main-title">
                                        ' . $view_field['title'] . '
                                        </div>
                                        <div class="slider-main-text">
                                        ' . $view_field['field_description_main'] . '
                                        </div> 
                                          <a href="' . $view_field['field_link_main'] . '" class="slider-main-link link-button">
                                            Узнать подробнее
                                          </a>
                                        
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="text-block-slider--right-block">  
                                            <div class="block-text-main-slider">                
                                            <div class="date-main-slier"> 
                                            ' . $datefieldinvert[1] . '
                                            <span>' . $datefieldinvert[0] . '</span>
                                            </div>
                                            <div class="place-main-slier">' . $view_field['field_place_main'] . '</div>
                                            </div>  
                                        </div>                  
                                    
                                    </div>

                                ';

            echo '    </div>
                        </div>';

            echo '</div>';


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
        <div class="container relative clearfix">
            <a href="#" class="slider-arrow-left">
                <img src="/<?php print path_to_theme(); ?>/images/slider-arr-mirror.png" alt="arrow  slider"/>
            </a>

            <a href="#" class="slider-arrow-right">
                <img src="/<?php print path_to_theme(); ?>/images/slider-arr.png" alt="arrow slider"/>
            </a>
        </div>
    </div>
</div>
