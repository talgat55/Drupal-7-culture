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
                        $dateprevious = new DateTime('yesterday 23:59');
                        $dateprevious->modify('+3 hours');

                        $redyprevious = $dateprevious->format('U');

                        $datenext = new DateTime('tomorrow  00:00');
                        $datenext->modify('+3 hours');

                        $redynext = $datenext->format('U');


                        $arrayscat = '';
                        $i = 0;
                        $count = 0;
                        $query = new EntityFieldQuery();
                        $query->entityCondition('entity_type', 'node')
                            ->entityCondition('bundle', 'afisha')
                            ->propertyCondition('status', NODE_PUBLISHED);
                                 $query->fieldCondition('field_date_afisha', 'value', $redyprevious, '>=');

                                $query->fieldCondition('field_date_afisha', 'value', $redynext, '<=');





                        $query->range(0, 150);
                        $result = $query->execute();
                        if (isset($result['node'])) {
                            $news_items_nids = array_keys($result['node']);
                            $news_items = entity_load('node', $news_items_nids);
                        }
                        /// for duration
                        $query2 = new EntityFieldQuery();
                        $query2->entityCondition('entity_type', 'node')
                            ->entityCondition('bundle', 'afisha')
                            ->propertyCondition('status', NODE_PUBLISHED);


                            $query2->fieldCondition('field_field_duration_date_afisha', 'value', $redyprevious, '<=');

                            $query2->fieldCondition('field_field_duration_date_afisha', 'value', $redynext, '>=');






                        $query2->range(0, 150);
                        $result2 = $query2->execute();
                        if (isset($result2['node'])) {
                            $news_items_nids2 = array_keys($result2['node']);
                            $news_items2 = entity_load('node', $news_items_nids2);
                        }



                        summaryRow($news_items,$redyprevious,$redynext);
                        summaryRow($news_items2,$redyprevious,$redynext);




                        function summaryRow($page_callback_result, $apidate, $apidate2)
                        {
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

                            $output = "";

                            foreach ($page_callback_result as $node) {
                                $my_image_url ='';

                                // $my_image_url = file_create_url($node->field_image_afisha['und'][0]['uri']);
                               // $my_image_url = image_style_url("afisha", $node->field_image_afisha['und'][0]['uri']);


                                $month = date('m', $node->field_date_afisha['und'][0]['value']) - 1;
                                $path = 'node/' . $node->nid;
                                //$path =  $node->nid ;
                                $alias = drupal_get_path_alias($path);

                                $term = taxonomy_term_load($node->field_cat_afisha['und'][0]['tid']);
                                $terms = taxonomy_get_term_by_name($term->name);
                                foreach ($terms as $value) {
                                    $value = $value->field_alias_afisha;


                                }
                              //  $day = gmdate("d", $apidate);
                                $day = gmdate("d");
                                $day2 = (int)gmdate("d", $apidate2) - 1;
                                $monthsearch = (int)gmdate("m", $apidate) - 1;
                                $monthsearch2 = (int)gmdate("m", $apidate2) - 1;


                                $count = count($node->field_date_afisha['und']);
                                if ($count > 1) {  /// if many dates

                                    $redydate = $day . ' ' . $arr[$monthsearch];

                                } else {

                                    $redydate = date('d', $node->field_date_afisha['und'][0]['value']) . ' ' . $arr[$month];

                                }

                                if ($node->field_field_duration_date_afisha['und'][0]['value']) {
                                    $output .= '   
                                                 <li class="culture-detail-item  ' . $value['und'][0]['value'] . '">
                                                     <a href="' . $alias . '">
                                                     
                                                        <div class="culture-top-block clearfix">
                                                            <span>' . $term->name . '</span>
                                                        </div> 
                                                              <div class="afisha-row-image">   
                                                                  <div class="afisha-date">' . $day . ' ' . $arr[$monthsearch] . '</div> 
                                                                  <img src="' . image_style_url("afisha", $node->field_image_afisha['und'][0]['uri']) . '" alt="' . $node->title . '" />
                                                                      <div class="afisha-bottom-block-row">
                                                                      <div class="afisha-bottom-block">
                                                                          <h3>' . $node->title . '</h3> 
                                                                                </div>
                                                                      </div>
                                                              </div>
                                    
                                                     </a>         
                                                 </li>';
                                } else {
                                    foreach ($node->field_date_afisha['und'] as $date) {     // for array dates

                                        $dayvalue = (int)gmdate("d", $date['value']);

                                        $monthvalue = (int)gmdate("m", $date['value']) - 1;

                                        // var_dump($node->field_field_duration_date_afisha['und']);
//
                                        if ($day == $dayvalue && $monthsearch == $monthvalue) {   // check if entry date

                                            $accept = true;

                                        } else if ($day2 == $dayvalue && $monthsearch2 == $monthvalue) {
                                            $accept = true;
                                        } else {
                                            $accept = false;
                                        }


                                        if ($accept) {

                                            //  if($day ==  $dayvalue   ){

                                            $output .= '   
                                             <li class="culture-detail-item  ' . $value['und'][0]['value'] . '">
                                                 <a href="' . $alias . '">
                                                 
                                                    <div class="culture-top-block clearfix">
                                                        <span>' . $term->name . '</span>
                                                    </div> 
                                                          <div class="afisha-row-image">   
                                                              <div class="afisha-date">' . $redydate . '</div> 
                                                              <img src="' . image_style_url("afisha", $node->field_image_afisha['und'][0]['uri']) . '" alt="' . $node->title . '" />
                                                                  <div class="afisha-bottom-block-row">
                                                                  <div class="afisha-bottom-block">
                                                                      <h3>' . $node->title . '</h3> 
                                                                            </div>
                                                                  </div>
                                                          </div>
                                
                                                 </a>         
                                             </li>';
                                        }


                                    }
                                }

                            }

                            print $output;


                        }


                        if ($count == 0) {
                            echo '<div class="not-found">Мероприятий на сегодня нет</div>';
                        }
                        // print views_embed_view('banner-news', 'block');
                        ?>


                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="date"></div>
                <div id="eventCalendar"></div>
            </div>
        </div>


    </div>
</div>
