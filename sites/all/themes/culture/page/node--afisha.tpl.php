<?php

/**
 * @file
 * Bartik's theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template normally located in the
 * modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $hide_site_name: TRUE if the site name has been toggled off on the theme
 *   settings page. If hidden, the "element-invisible" class is added to make
 *   the site name visually hidden, but still accessible.
 * - $hide_site_slogan: TRUE if the site slogan has been toggled off on the
 *   theme settings page. If hidden, the "element-invisible" class is added to
 *   make the site slogan visually hidden, but still accessible.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['featured']: Items for the featured region.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['triptych_first']: Items for the first triptych.
 * - $page['triptych_middle']: Items for the middle triptych.
 * - $page['triptych_last']: Items for the last triptych.
 * - $page['footer_firstcolumn']: Items for the first footer column.
 * - $page['footer_secondcolumn']: Items for the second footer column.
 * - $page['footer_thirdcolumn']: Items for the third footer column.
 * - $page['footer_fourthcolumn']: Items for the fourth footer column.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see bartik_process_page()
 * @see html.tpl.php
 */
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

?>


<div id="main" class="clearfix">

    <div class="container-article news relative clearfix">


        <h1 class="title-section bottom-border-title title-afisha-node   no-after"> <?php print $title; ?></h1>
        <!--<div class="date-article-afisha">

        </div>-->
        <div class="share-block">
            <?php


            $uri = $_SERVER['HTTP_HOST'] . '/' . request_uri();

            ?>
            <p>Поделиться</p>
            <div class="ya-share2" data-services="telegram,vkontakte,facebook" data-title='<?php print $node->title; ?>'
                 data-url="http://<?php echo $uri; ?>"></div>
        </div>
        <?php


        $field_detail_image = field_get_items('node', $node, 'field_image_detail_afisha');
        $field_detail_image = file_create_url($field_detail_image[0]['uri']);


        $field_description = field_get_items('node', $node, 'field_body');

        $field_place = field_get_items('node', $node, 'field_place_afisha');
        $field_age = field_get_items('node', $node, 'field_age');
        $field_price = field_get_items('node', $node, 'field_price');
        $field_date = field_get_items('node', $node, 'field_date_afisha');
        $field_link_to_place = field_get_items('node', $node, 'field_link_to_place');
        $field_duration = field_get_items('node', $node, 'field_duration_afisha');
        $field_duration_date = field_get_items('node', $node, 'field_field_duration_date_afisha');


        ?>
        <div class="content-article  ">
            <div class=" clearfix">
                <div class="col-md-7">
                    <img src="<?php echo $field_detail_image; ?>" alt='<?php print $title; ?>'/>


                </div>
                <div class="col-md-5">
                    <div class="aside">
                        <div class="aside-afisha-detail">
                            <div class="first-block-af">
                                <p><?php print $title; ?></p>

                                <p><?php if ($field_place[0][value] == 'none') {
                                        print '-';
                                    } else {
                                        print '<a class="afisha-link-to-place" href="' . $field_link_to_place[0][value] . '">';
                                        print $field_place[0][value];
                                        print '</a>';
                                    } ?></p>
                            </div>
                            <ul class="main-block-af">
                                <?php
                                if ($field_age[0]['value']) {
                                    ?>
                                    <li>
                                        <span>Ограничение по возрасту:</span>
                                        <span><?php echo $field_age[0]['value']; ?></span>
                                    </li>
                                    <?php
                                }
                                if ($field_price[0]['value']) {
                                    ?>
                                    <li>
                                        <span>Цены на билеты:</span>
                                        <span><?php echo $field_price[0]['value']; ?></span>
                                    </li>
                                    <?php
                                }
                                ?>
                                <li>
                                    <span>Начало:</span>
                                    <span><?php
                                        if ($field_duration_date[0]['value']) {
                                            foreach ($field_duration_date as $key => $fieldvaluedateducration) {
                                                if ($key == 0) {


                                                    $monthdurationdate = (int)format_date($fieldvaluedateducration['value'], 'custom', 'm') - 1;
                                                    print(format_date($fieldvaluedateducration['value'], 'custom', 'd'));
                                                    print ' ' . $arr[$monthdurationdate] . ' ';

                                                }
                                            }

                                        } else {
                                            foreach ($field_date as $key => $fieldvalue) {
                                                if ($key != 0) {
                                                    print "<br> ";
                                                }
                                                $month = format_date($fieldvalue['value'], 'custom', 'm') - 1;
                                                print(format_date($fieldvalue['value'], 'custom', 'd'));
                                                print ' ' . $arr[$month];
                                                print " в ";
                                                print(format_date($fieldvalue['value'], 'custom', 'G:i'));

                                            }
                                        }
                                        ?></span>
                                </li>
                                <?php

                                if ($field_duration[0]['value'] || $field_duration_date[0]['value']) {
                                    ?>
                                    <li>
                                        <span>Продолжительность:</span>
                                        <span>

                                            <?php

                                            if ($field_duration_date[0]['value']) {
                                                foreach ($field_duration_date as $key => $fieldvaluedateducration) {
                                                    if ($key == 0) {
                                                        print "c ";
                                                    } else {
                                                        print '<br> по ';
                                                    }

                                                    $monthdurationdate = (int)format_date($fieldvaluedateducration['value'], 'custom', 'm') - 1;
                                                    print(format_date($fieldvaluedateducration['value'], 'custom', 'd'));
                                                    print ' ' . $arr[$monthdurationdate] . ' ';


                                                }

                                            } else {
                                                echo $field_duration[0]['value'];
                                            }


                                            ?>

                                        </span>
                                    </li>
                                    <?php
                                }

                                ?>


                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="full-content-afisha">
                <?php print($field_description[0]["value"]); ?>
            </div>


        </div>
        <?php
        $dateprevious = new DateTime('yesterday 23:59');
        $dateprevious->modify('+3 hours');

        $redyprevious = $dateprevious->format('U');
        $mounth = $dateprevious->format('U');
        // place
        $tid = $field_place[0][value];
        $query = new EntityFieldQuery();
        $query->entityCondition('entity_type', 'node')
            ->entityCondition('bundle', 'afisha')
            ->propertyCondition('status', NODE_PUBLISHED)
            ->fieldCondition('field_place_afisha', 'value', $tid, '=');
        $query->fieldCondition('field_date_afisha', 'value', $redyprevious, '>=')
            ->fieldOrderBy('field_date_afisha', 'value', 'ASC')
            ->range(0, 10);
        // Run the query as user 1.
        //   ->addMetaData('account', user_load(1));

        $result = $query->execute();
        if (isset($result['node'])) {
            $news_items_nids = array_keys($result['node']);
            $news_items = entity_load('node', $news_items_nids);

            if (count($news_items) > 1) {

                echo '
 
                    <h3 class="recent-heading-afisha">
                        Ближайшие события учреждения
                    </h3>
                ';

            }
        }
        ?>

    </div>

    <div class="article-slider-row">
        <div class="article-slider">
            <?php


            /*  echo '<pre>';
              print_r($news_items);
              echo '</pre>';*/
            if (count($news_items) > 0) {
                $nid = $node->nid;
                $output = [];
                $date = '';
                foreach ($news_items as $field) {
                    if ($nid != $field->nid) {
                        //$my_image_url = file_create_url($field->field_image_afisha['und'][0]['uri']);
                        $my_image_url = image_style_url("afisha_related", $field->field_image_afisha['und'][0]['uri']);
                        $path = 'node/' . $field->nid;
                        //  $path = $field->nid;
                        $alias = drupal_get_path_alias($path);
                        //  $real_path =drupal_get_path_alias($alias);
                        $month = date('m', $field->field_date_afisha['und'][0]['value']) - 1;
                        //  <div class="afisha-item-date">'.$datefieldinvert[1].' '.$datefieldinvert[0].'</div>
                        $dateprevious = new DateTime('yesterday 23:59');
                        $dateprevious->modify('+3 hours');
                        $redyprevious = $dateprevious->format('U');

                        if (count($field->field_date_afisha['und']) >= 2) {
                            foreach ($field->field_date_afisha['und'] as $val) {

                                if ($redyprevious < $val['value']  ) {
                                    $redydate = $val['value'];
                                   // $day = date('d', $val['value']);
                                    $date = $redydate;
                                    break;
                                }

                            }
                        }else{
                            $date = $field->field_date_afisha['und']['0']['value'];
                        }
                        array_push(
                            $output,
                            array(
                                'date' => $date,
                                'src' => $my_image_url,
                                'title' => $field->title,
                                'path' => $alias
                            )
                        );


                    }
                }
                function cmp($a, $b)
                {
                    return strcmp($a["date"], $b["date"]);
                }

                usort($output, "cmp");
/*
                echo '<pre>';
                print_r($output);
                echo '</pre>';*/
                foreach ($output as $field) {

                    if($field['date'] == ''){
                        $month = date('m', $field['date']['0']['value']) - 1;
                        $day = date('d', $field['date']['0']['value']);
                    }else{
                        $month = date('m', $field['date']) - 1;
                        $day = date('d', $field['date']);
                    }

                    echo '
                            <div class="item-afisha">
                                <div class="afisha-item-date ">' . $day . ' ' . $arr[$month] . '</div>
                                     <img src="' . $field['src'] . '" alt="' . $field['title'] . '" />
                                <div class="title-afisha"><div><h3>' . $field['title'] . '</h3> <a class="link-c-a" href="/' . $field['path'] . '">Подробнее</a> </div></div>
                            </div>
                        ';
                }


            }

            ?>
        </div>
        <?php
        if (count($news_items) > 5) {
            ?>
            <a href="#" class="slider-arrow-left">
                <img src="/<?php print path_to_theme(); ?>/images/afisha-arr-mirror.png" alt="Предыдущий"/>
            </a>

            <a href="#" class="slider-arrow-right">
                <img src="/<?php print path_to_theme(); ?>/images/afisha-arr.png" alt="Следующий"/>
            </a>
            <?php
        }


        ?>

    </div>

</div>
