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
?>

<?php


$field_image = field_get_items('node', $node, 'field_image_turizm');
$body = field_get_items('node', $node, 'body');
$title = field_get_items('node', $node, 'title');
$field_part = field_get_items('node', $node, 'field_part_turizm');
$my_image_url = file_create_url($field_image[0]['uri']);

$field_link = field_get_items('node', $node, 'field_link_turizm');
$field_link_title = field_get_items('node', $node, 'field_title_link_turizm');
$field_link_path = field_get_items('node', $node, 'field_path_link_turizm');
$field_part = field_get_items('node', $node, 'field_part_turizm');
?>
<div id="main" class="clearfix">

    <div class="container-article turizm-node relative clearfix">
        <div class="col-md-4">
            <?php
            $query = new EntityFieldQuery();
            $query->entityCondition('entity_type', 'node')
                ->entityCondition('bundle', 'turizm')
                ->propertyCondition('status', NODE_PUBLISHED)
                ->propertyOrderBy('title', 'ASC')
                ->fieldCondition('field_part_turizm', 'value', $field_part[0]['value'], '=');
            $query->range(0, 150);
            $result = $query->execute();
            if (isset($result['node'])) {
                $news_items_nids = array_keys($result['node']);
                $news_items = entity_load('node', $news_items_nids);
            }
            function cmp($a, $b)
            {
                return strcmp($a->title, $b->title);
            }

            usort($news_items, "cmp");

            if ($field_part[0]['value'] == 'omsk') {
                echo '<ul class="cat-place-aside turizm-single">';
                foreach ($news_items as $value) {
                    $tid = $value->vid;
                    $path = 'node/' . $value->nid;
                    //$path =  $node->nid ;
                    $alias = drupal_get_path_alias($path);
                    if ($node->vid == $tid) {
                        $currentclass = 'class="current"';
                    } else {
                        $currentclass = '';
                    }
                    echo '<li ' . $tid . '><a href="/' . $alias . '"   ' . $currentclass . ' > ';
                    echo '<h3>' . $value->title . '</h3>';
                    echo '</a></li>';
                }
                echo '</ul>';
            } else {
                $name = 'turizm';
                $myvoc = taxonomy_vocabulary_machine_name_load($name);
                $tree = taxonomy_get_tree($myvoc->vid);


                echo '<ul class="cat-place-aside turizm-single">';


                foreach ($tree as $value) {
                    $tid = $value->tid;
                    echo '<li>';
                    echo '<h3>' . $value->name . '</h3>';
                    echo '<ul class="cats-sorts">';
                    foreach ($news_items as $value2) {
                        if ($tid == $value2->field_cat_turizm['und']['0']['tid']) {


                            $tid2 = $value2->vid;
                            $path = 'node/' . $value2->nid;
                            //$path =  $node->nid ;
                            $alias = drupal_get_path_alias($path);
                            if ($node->vid == $tid2) {
                                $currentclass = 'class="current"';
                            } else {
                                $currentclass = '';
                            }
                            echo '<li ' . $tid2 . '><a href="/' . $alias . '"   ' . $currentclass . ' > ';
                            echo '<h3>' . $value2->title . '</h3>';
                            echo '</a></li>';
                        }
                    }
                    echo '</ul>';


                    echo '</li>';

                }


                echo '</ul>';
            }
            ?>
        </div>
        <div class="col-md-8 turizm home-page single clearfix">
            <div id="stickyblock" class="aside sticky-block-turizm">
                <?php

                if ($field_link[0]['value']) {


                    ?>
                    <a href="<?php echo $field_link_path[0]['value']; ?>" target="_blank" class="block-photo">
                        <img src="/<?php print path_to_theme(); ?>/images/elipse.png"
                             alt="Фоторепортаж">
                        <div class="block-aside-photo">
                            <img src="/<?php print path_to_theme(); ?>/images/photo-camera.png"
                                 alt="Иконка">

                            <p><?php echo $field_link_title[0]['value']; ?></p>
                        </div>
                    </a>
                    <?php
                }


                ?>


            </div>


            <div class="node-place-img">
                <img src="<?php echo $my_image_url; ?>" alt="<?php echo $node->title ?>"/>
                <h1><?php echo $node->title ?></h1>
            </div>


            <div class="content-place">
                <?php print($body[0]["value"]); ?>


            </div>

        </div>


    </div>
    <div class="article-slider-row">
        <div class="article-slider">
            <?php
            $field_gallery = field_get_items('node', $node, 'field_gallery_turizm');

            foreach ($field_gallery as $field) {

                $my_image_url = file_create_url($field['uri']);
                print('<div><img src="' . $my_image_url . '" alt="' . $field['alt'] . '" /> </div>');

            }

            ?>
        </div>
        <?php
        if ($field_gallery) {
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
