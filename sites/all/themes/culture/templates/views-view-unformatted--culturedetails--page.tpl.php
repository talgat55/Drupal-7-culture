<?php
/**
 * Created by PhpStorm.
 * User: talga
 * Date: 26.04.2018
 * Time: 11:42
 */
?>
<div class="culture-detail-holder">
    <div class="container relative">
        <?php
        $name = 'culture_details';


        $myvoc = taxonomy_vocabulary_machine_name_load($name);
        $tree = taxonomy_get_tree($myvoc->vid);
        //var_dump($tree);
        echo '<ul class="list-terms-culture-details clearfix">';
        echo '<li class="current" data-filter>Все материалы</li>';

        foreach ($tree as $term) {
            $terms = taxonomy_get_term_by_name($term->name);
            foreach ($terms as $value) {
                $value = $value->field_alias;

            }
            echo '<li data-filter=".' . $value[und][0]['value'] . '"><span class="separator-culture-detail"></span> ' . $term->name . ' </li>';
        }
        echo '</ul>';

        ?>

        <div class="row culture-detail-rows">
            <ul class="culture-detail-row  clearfix">

                <?php

                foreach ($view->style_plugin->rendered_fields as $view_field):

                    $datefield = explode(',', $view_field['field_date_culture']);
                    $datefieldinvert = explode(' ', trim($datefield[1]));

                    $terms = taxonomy_get_term_by_name($view_field['field_categories']);
                    foreach ($terms as $value) {
                        $value = $value->field_alias;

                    }




                    echo '

                <li class="culture-detail-item ' . $value[und][0]['value'] . '">
                    <a href="#">
                    <div class="culture-top-block clearfix">
                        <div class="culture-date">' . $datefieldinvert[1] . ' ' . $datefieldinvert[0] . '</div> 
                    </div> 
                    <div class="culture-row-image">   
                        <img src="' . $view_field['field_image_culture'] . '" alt="' . $view_field['title'] . '" />
                    </div>
                            <div class="culture-bottom-block">
                                <h3>' . $view_field['title'] . '</h3>
                                <div>' . $view_field['body'] . '</div>
                            </div>
                   </a>         
                </li>
                
                ';

                endforeach;

               // print views_embed_view('banner-news', 'block');
                ?>


            </ul>
        </div>


        <div class="col-md-12">
            <a href="#" class="link-to-mateerial">Все материалы</a>
        </div>


    </div>
</div>
