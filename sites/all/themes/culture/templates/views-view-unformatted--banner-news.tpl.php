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
        <div class="banner home-page clearfix padding-top-20">
            <?php
            foreach ($view->style_plugin->rendered_fields as $view_field): ?>
                <?php // krumo($view_field);exit;

                $datefield = explode(',', $view_field['field_date_start']);
                $datefield_start = explode(' ', trim($datefield[1]));
                $datefield2 = explode(',', $view_field['field_date_end']);
                $datefield_end = explode(' ', trim($datefield2[1]));
                if ($view_field['field_position_banner'] == 'Лево') {
                    $class = ' left-block';
                } elseif ($view_field['field_position_banner'] == 'Право') {
                    $class = ' right-block';
                } else {
                    $class = 'none';
                }

                if (strripos($view_field['field_displays_banner'], 'На странице новостей') > -1) {


                    echo $view_field['field_image_banner'];
                    echo '
                <div class="textblock-banner  ' . $class . '"> 
                <div class="textblock-banner-wallpaper"> 
                <div class="date-field-banner">' . $datefield_start[1] . ' ' . $datefield_start[0] . ' - ' . $datefield_end[1] . ' ' . $datefield_end[0] . '</div>
                <div class="kind-field-banner">
                    ' . $view_field['field_kind_event'] . '
                </div>
                <div class="title-field-banner">
                    ' . $view_field['title'] . '
                </div> 
                <a href="' . $view_field['field_link_banner'] . '" class="link-button">Узнать подробности</a>
                 
                ';


                    echo '
                </div>
                </div>
                ';
                }

            endforeach; ?>


        </div>


    </div>
</div>
