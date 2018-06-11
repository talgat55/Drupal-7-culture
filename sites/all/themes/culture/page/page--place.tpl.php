<?php

/**
 *
 */
?>


<?php include('header.tpl.php'); ?>
<?php if ($breadcrumb): ?>
    <div class="container relative">
        <div class="top-block-content">
            <div id="breadcrumb">

                <?php print $breadcrumb; ?>

            </div>
        </div>
    </div>
<?php endif; ?>
    <h1 class="display-none-overflow title-section bottom-border-title margin-top-10 margin-bottom-60 no-after">
        Места
    </h1>
    <div id="main" class="place-row clearfix">
        <div class="container clearfix">
            <div class="col-md-4">
                <?php
                $redy_empty_photo = image_style_url("cat_img_place",'public://nofoto.png');

                $myvoc = taxonomy_vocabulary_machine_name_load('place');
                $tree = taxonomy_get_tree($myvoc->vid);
               /* echo '<pre>';
                print_r($tree);
                echo '</pre>';*/
                echo '<ul class="cat-place-aside">';
                foreach ($tree as $key =>  $value){
                    $terms = taxonomy_get_term_by_name($value->name);

                    foreach ($terms as $term){

                        $my_image_url = file_create_url($term->field_image_tax_place['und'][0]['uri']);
                        $my_image_url_hover = file_create_url($term->field_image_tax_hover_place['und'][0]['uri']);

                        $my_image_url_hover_redy = $my_image_url_hover ? $my_image_url_hover : $my_image_url;
                        $tid = $term->tid;



                        $my_image_url_hover_redy2 =  $my_image_url_hover_redy ?   $my_image_url_hover_redy : $redy_empty_photo;
                        if($my_image_url){
                            $my_image_url_redy = $my_image_url;
                        }else{
                            $my_image_url_redy = $redy_empty_photo;
                        }

                    }
                    if($key=='0'){
                        $class = 'class="current"';
                    }else{
                        $class = '';
                    }


                    echo '<li><a  '.$class.' href="#" data-id="'.$tid.'"> ';
                    echo '<h3>'.$value->name.'</h3>';
                    echo '<div class="img-cat-place-aside-block">';


                    echo '<img class="img-std-place"  src="'.$my_image_url_redy.'" />';
                    echo '<img class="img-std-place-hover"  src="'.$my_image_url_hover_redy2.'" />';
                    echo '</div>';
                    echo '</a></li>';

                }
                echo '</ul>';

                ?>
            </div>
            <div class="col-md-8">
                <div class="row">

                    <?php print render($page['content']); ?>

                </div>
            </div>
        </div>
    </div>

<?php include('footer.tpl.php'); ?>