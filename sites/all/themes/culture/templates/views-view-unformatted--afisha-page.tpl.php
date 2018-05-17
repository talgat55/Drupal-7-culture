<?php
/**
 * Created by PhpStorm.
 * User: talga
 * Date: 26.04.2018
 * Time: 11:42
 */

?>
<div class="afisha-row-holder">
    <div class="container relative afisha-rows ">


        <div class="correct-afisha-row clearfix">
        <div class="col-md-8">
            <div class="row">
                <ul class="afisha-row-list clearfix">

                    <?php

                    //  var_dump($view->style_plugin->rendered_fields);
                    $arrayscat = '';
                    $i = 0;
                    foreach ($view->style_plugin->rendered_fields as $view_field):


                        $datefield = explode(',', $view_field['field_date_afisha']);
                        $datefieldinvert = explode(' ', trim($datefield[1]));

                        $terms = taxonomy_get_term_by_name($view_field['field_cat_afisha']);
                        foreach ($terms as $value) {
                            $value = $value->field_alias_afisha;


                        }
                        $arrayscat .= ' ' . $view_field['field_cat_afisha'];
                        $check = substr_count($arrayscat, $view_field['field_cat_afisha']);

                        if ($check <= 2) {
                            $i++;
                            if ($i <= 12) {

                                echo '

                                <li class="culture-detail-item ' . $value[und][0]['value'] . '">
                                    <a href="' . $view_field['path'] . '">
                                    <div class="culture-top-block clearfix">
                                        
                                        <span>' . $view_field['field_cat_afisha'] . '</span>
                                    </div> 
                                    <div class="afisha-row-image">   
                                        <div class="afisha-date">' . $datefieldinvert[1] . ' ' . $datefieldinvert[0] . '</div> 
                                        <img src="' . $view_field['field_image_afisha'] . '" alt="' . $view_field['title'] . '" />
                                            <div class="afisha-bottom-block-row">
                                            <div class="afisha-bottom-block">
                                                <h3>' . $view_field['title'] . '</h3> 
                                            </div>
                                            </div>
                                    </div>

                                   </a>         
                                </li>
                                
                                ';

                            }
                        }

                    endforeach;

                    // print views_embed_view('banner-news', 'block');
                    ?>


                </ul>
            </div>
        </div>
        <div class="col-md-4">
            <div class="date"></div>
            <div id="eventCalendar"> </div>
        </div>
        </div>


    </div>
</div>
