<?php
/**
 * Created by PhpStorm.
 * User: talga
 * Date: 26.04.2018
 * Time: 11:42
 */
?>
<div class="container">
    <div id="gallery-list" class="gallery-lists clearfix">
        <?php
        $arr = $view->style_plugin->rendered_fields;
        $count = count($arr);

        foreach ($arr as  $i =>   $view_field):


            $arrayImages = explode(',', $view_field['field_images']);
        


            $count_items = count($arrayImages);

            $uniq = uniqid();
            echo '<div  id="gallery-'.$i.'"   class=" gallery-item gallery-col-md-'.$count.'">';
            foreach ($arrayImages as $key => $value) {

                if ($key == 0) {

                    echo '
                        <a  class="a-img-gallery gallery"   href="'.$view_field['path'].'"     style="background: url(' . $value . ') no-repeat;">
                           
                        </a>
                        ';

                }


            }
            echo '<a  href="'.$view_field['path'].'" class="bottom-gallery-block">
                    <div class="title-gallery">'.$view_field['title'].'</div>
                    <div class="counter-gallery-items">'.$count_items.'</div>
                    ';
            echo '</a><div class="overlay-gallery"></div></div>';
            //var_dump($view_field);

        endforeach; ?>


    </div>

</div>
