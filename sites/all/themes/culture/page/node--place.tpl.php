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


$field_image_place = field_get_items('node', $node, 'field_image_place');
$body = field_get_items('node', $node, 'body');
$title = field_get_items('node', $node, 'title');
$field_link_place = field_get_items('node', $node, 'field_link_place');
$field_phone_place = field_get_items('node', $node, 'field_phone_place');
$field_adress_place = field_get_items('node', $node, 'field_adress_place');
$field_cat_place = field_get_items('node', $node, 'field_cat_place');
$my_image_url_place = file_create_url($field_image_place[0]['uri']);

?>
<div id="main" class="clearfix">

    <div class="container-article news relative clearfix">
        <div class="col-md-4">
            <?php
            $myvoc = taxonomy_vocabulary_machine_name_load('place');
            $tree = taxonomy_get_tree($myvoc->vid);
            echo '<ul class="cat-place-aside">';
            foreach ($tree as $value){
                $terms = taxonomy_get_term_by_name($value->name);

                foreach ($terms as $term){

                    $my_image_url = file_create_url($term->field_image_tax_place['und'][0]['uri']);
                    $my_image_url_hover = file_create_url($term->field_image_tax_hover_place['und'][0]['uri']);

                    $my_image_url_hover_redy = $my_image_url_hover ? $my_image_url_hover : $my_image_url;
                    $tid = $term->tid;
                }

                if($field_cat_place[0]['tid'] == $tid){
                    $currentclass= 'class="current"';
                }else{
                    $currentclass= '';
                }
                echo '<li><a href="#"   '.$currentclass.' data-id="'.$tid.'"> ';
                echo '<h3>'.$value->name.'</h3>';
                echo '<div class="img-cat-place-aside-block">';
                echo '<img class="img-std-place"  src="'.$my_image_url.'" />';
                echo '<img class="img-std-place-hover"  src="'.$my_image_url_hover_redy.'" />';
                echo '</div>';
                echo '</a></li>';

            }
            echo '</ul>';

            ?>
        </div>
        <div class="col-md-8">
        <div class="node-place-img">
                <img src="<?php echo $my_image_url_place; ?>" />
                <h1><?php  echo  $node ->title ?></h1>
        </div>

            <div class="block-place-info">
                <div class="place-node-adress">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAABNmlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjarY6xSsNQFEDPi6LiUCsEcXB4kygotupgxqQtRRCs1SHJ1qShSmkSXl7VfoSjWwcXd7/AyVFwUPwC/0Bx6uAQIYODCJ7p3MPlcsGo2HWnYZRhEGvVbjrS9Xw5+8QMUwDQCbPUbrUOAOIkjvjB5ysC4HnTrjsN/sZ8mCoNTIDtbpSFICpA/0KnGsQYMIN+qkHcAaY6addAPAClXu4vQCnI/Q0oKdfzQXwAZs/1fDDmADPIfQUwdXSpAWpJOlJnvVMtq5ZlSbubBJE8HmU6GmRyPw4TlSaqo6MukP8HwGK+2G46cq1qWXvr/DOu58vc3o8QgFh6LFpBOFTn3yqMnd/n4sZ4GQ5vYXpStN0ruNmAheuirVahvAX34y/Axk/96FpPYgAAACBjSFJNAAB6JQAAgIMAAPn/AACA6AAAUggAARVYAAA6lwAAF2/XWh+QAAABRUlEQVR42ozSPUtcQRgF4EddUYQ0tsFtbGyE/IEpw3TKBlHwD4Rga20lgmiRxtbGwkoLq2yb7WwsLNYPRBgh+QEikZhl08zC7OWu+sKFM+/HmfeeM2P9fl8ZzU67ga9Yxzx6uMURDlOIQwNjJUGz0/6AE3xWH2dYSyE+DxLjlYaDV4ZhCbu1GzQ77U+4KGp32McLNrGQ8z0sphC70CgGYoH7WE8hnmfyn7jEFCbQQrf6Cx8L3MPN4JBCvMVjUZ+r06Bb4Aa+FOKuYLao39dpMIcrzOTaP5xm3MJkxi9Zg+uhDVKID/he2WI1f5OlU4PhOht3kF6x8QFbZWKIIIX4lC0bFZspxMeRL7EQ7UfFVjhLIS5Xe8dH3LSBv8X5D77VNdYSpBDvsFekdlOIv95NkGM7C/q7+v7f1KDQooXpFOLxqJ7/AwDdR2dBBuQ/1QAAAABJRU5ErkJggg==" />
                    <p><?php  echo $field_adress_place[0]['value']; ?></p>
                </div>
                <div class="place-node-phone">
                    <a href="tel:<?php  echo $field_phone_place[0]['value'];  ?>">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAABNmlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjarY6xSsNQFEDPi6LiUCsEcXB4kygotupgxqQtRRCs1SHJ1qShSmkSXl7VfoSjWwcXd7/AyVFwUPwC/0Bx6uAQIYODCJ7p3MPlcsGo2HWnYZRhEGvVbjrS9Xw5+8QMUwDQCbPUbrUOAOIkjvjB5ysC4HnTrjsN/sZ8mCoNTIDtbpSFICpA/0KnGsQYMIN+qkHcAaY6addAPAClXu4vQCnI/Q0oKdfzQXwAZs/1fDDmADPIfQUwdXSpAWpJOlJnvVMtq5ZlSbubBJE8HmU6GmRyPw4TlSaqo6MukP8HwGK+2G46cq1qWXvr/DOu58vc3o8QgFh6LFpBOFTn3yqMnd/n4sZ4GQ5vYXpStN0ruNmAheuirVahvAX34y/Axk/96FpPYgAAACBjSFJNAAB6JQAAgIMAAPn/AACA6AAAUggAARVYAAA6lwAAF2/XWh+QAAABKElEQVR42pTTsSv1URzH8df9oRhQFFHyB9gelGRhMEgxmLgKWaUMz7MwmW0WJdu1UMQdmJThKfUwe/4DpqdIlPRYvrdOt3vrd7/LOefTOe/O+Xy+pzBwewUt2MMo5vEsZ2UxLmMDYyijtxHAAm5wHtpIQAbzAg6wjyWcJZCVPIBm/McMSijiBG0BzQV4QneYV8IaXvGW9wm3yXoOP/IergAO8ZVoQxqoDA84SrQdTDbaB7/wN+btOMV4jf0d2EZ/NeBfxPgS6y5cYqrqcBm7uKg0W5ZsuMciPhLIBX5GQq2JucMB6yvEX0hrNuLsqNLP45alAMKfrMY7y5jGY5Ve6ZOlpO1/Z3XMvcNEjYjnw+AtrGOzqXO1WC+h9zDyGp/hQQE9Ef0xfA8A5MA7g0RtjZoAAAAASUVORK5CYII=" />
                    <p><?php  echo $field_phone_place[0]['value'];  ?></p>
                    </a>
                </div>

                <?php

                $parseurl = parse_url($field_link_place[0]['value']);

                ?>

                <div class="place-node-site">
                    <a target="_blank"  href="<?php echo $field_link_place[0]['value']; ?>">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAABNmlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjarY6xSsNQFEDPi6LiUCsEcXB4kygotupgxqQtRRCs1SHJ1qShSmkSXl7VfoSjWwcXd7/AyVFwUPwC/0Bx6uAQIYODCJ7p3MPlcsGo2HWnYZRhEGvVbjrS9Xw5+8QMUwDQCbPUbrUOAOIkjvjB5ysC4HnTrjsN/sZ8mCoNTIDtbpSFICpA/0KnGsQYMIN+qkHcAaY6addAPAClXu4vQCnI/Q0oKdfzQXwAZs/1fDDmADPIfQUwdXSpAWpJOlJnvVMtq5ZlSbubBJE8HmU6GmRyPw4TlSaqo6MukP8HwGK+2G46cq1qWXvr/DOu58vc3o8QgFh6LFpBOFTn3yqMnd/n4sZ4GQ5vYXpStN0ruNmAheuirVahvAX34y/Axk/96FpPYgAAACBjSFJNAAB6JQAAgIMAAPn/AACA6AAAUggAARVYAAA6lwAAF2/XWh+QAAAA5UlEQVR42sTTvUpDQRAF4O/qgnZaKAbFH7ATrWy0ywvYK1YpfAgfQcEHEFtr+4CdnVgp2IkWVikMgiJocG0mEkIC95rCAwvLzNmzc3Zmi5yzUTBmRKSlqyZM4RjtiuenU2zm8ILDigJHXQsfeP+Dg07CMmZxg3VkPJUVTLjAJG6xgBpOcVJW4AzncXOBedRLdwFvsbp4RafKHPTPwniFR/xMA4IZX2hgA62wNtPHK7A5TOAbB9jGY5BXBnBbwwQmsItVbEX8Ds+RS70Ce9jBPRaj1EusRTf2o4ImriP38Ovj33/jzwBPvy+M8HVk+AAAAABJRU5ErkJggg==" />
                    <p>
                        <?php
                       // echo $parseurl['host'];
                      //  echo $parseurl['path'];
                        if(strpos($field_link_place[0]['value'], 'http') !== false) {   // check url
                            echo $field_link_place[0]['value'];
                        }else{

                            echo $field_link_place[0]['value'];

                        }


                        ?>
                    </p>
                    </a>
                </div>


            </div>

            <div class="content-place">
                 <?php print($body[0]["value"]); ?>

                <p style="font-style: italic"><?php print($field_author[0][value]); ?></p>
                <div class="main-article-menu">
                    <?php

                    echo '<ul class="news-tags">';
                    foreach ($field_tags as $value) {

                        print '<li><a href="#">' . $value['taxonomy_term']->name . '</a></li>';

                    }
                    echo '</ul>';
                    ?>
                </div>
            </div>

        </div>


    </div>



</div>
