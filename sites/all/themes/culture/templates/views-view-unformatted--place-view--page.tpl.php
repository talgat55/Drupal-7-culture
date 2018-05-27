<?php
/**
 * Created by PhpStorm.
 * User: talga
 * Date: 26.04.2018
 * Time: 11:42
 */
?>
<div class="place-holder">

        <div class="special-row margin-10">
            <ul class="place home-page clearfix">
                <?php
                $i = 0;
                foreach ($view->style_plugin->rendered_fields as $view_field): ?>
                    <?php // krumo($view_field);exit;





                    echo '
                <li>
                    <a href="'.$view_field['path'].'">
                    <div class="place-item">
                   
                       <img src="' . $view_field["field_image_place"] . '" />
                        <h3>' . $view_field["title"] . '</h3>
                    
                    </div>
                    </a>
                </li>
                ';


                    $i++;
                endforeach; ?>


            </ul>


        </div>
</div>
