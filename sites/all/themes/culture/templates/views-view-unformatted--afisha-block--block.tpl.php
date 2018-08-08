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
            $arr = [
                'января',
                'февраля',
                'марта',
                'апреля',
                'мая',
                'июня',
                'июля',
                'августа',
                'сентября',
                'октября',
                'ноября',
                'декабря'
            ];
            $output = [];
            foreach ($view->style_plugin->rendered_fields as $view_field): ?>
                <?php // krumo($view_field);exit;

                $my_image_url =$view_field['field_image_afisha'];

                $alias = $view_field['path'];
                //  $real_path =drupal_get_path_alias($alias);
               // $month = date('m', $view_field['field_date_afisha']) - 1;
                //  <div class="afisha-item-date">'.$datefieldinvert[1].' '.$datefieldinvert[0].'</div>
                $dateprevious = new DateTime('yesterday 23:59');
                $dateprevious->modify('+3 hours');
                $redyprevious = $dateprevious->format('U');

                $arr_date = explode(",", $view_field['field_date_afisha']);
                if (count($arr_date) >= 2) {
                    foreach ($arr_date as $val) {

                        if ($redyprevious < $val ) {
                            $redydate = $val;
                            // $day = date('d', $val['value']);
                            $date = $redydate;
                            array_push(
                                $output,
                                array(
                                    'date' => $date,
                                    'src' => $my_image_url,
                                    'title' => $view_field['title'],
                                    'path' => $alias
                                )
                            );
                            break;
                        }

                    }
                }else{
                    $date = $view_field['field_date_afisha'];
                      if ($redyprevious < $date ) {
                          array_push(
                              $output,
                              array(
                                  'date' => $date,
                                  'src' => $my_image_url,
                                  'title' => $view_field['title'],
                                  'path' => $alias
                              )
                          );
                      }
                }






            endforeach;



            function cmp($a, $b)
            {
                return strcmp($a["date"], $b["date"]);
            }

            usort($output, "cmp");


            foreach ($output as $field) {

                if($field['date'] == ''){
                    $month = date('m', $field['date']['0']['value']) - 1;
                    $day = date('d', $field['date']['0']['value']);
                }else{
                    $month = date('m', $field['date']) - 1;
                    $day = date('d', $field['date']);
                }
 /// <img data-lazy="' . $field['src'] . '" alt="' . $field['title'] . '" />
                echo '
                   <div class="item-afisha">
                        <div class="afisha-item-date">'.$day.' '.$arr[$month].'</div>
                        <img data-lazy="' . $field['src'] . '" alt="" />
                        <div class="title-afisha"><a href="'.$field['path'].'">' . $field['title'] . '</a></div>
                    </div>
                        ';
            }



            ?>


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
