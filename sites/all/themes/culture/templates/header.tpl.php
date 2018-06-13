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
<div id="page-wrapper" class="clearfix">
    <div id="page">
        <header id="header">
            <div class="header">
                <div class="container clearfix">
                    <div class="top-header">

                        <a href="<?php print $front_page; ?>" title="<?php print t('Домашняя страница'); ?>"
                           id="logo">
                            <img src="/<?php print path_to_theme(); ?>/images/logo.png"/>
                        </a>

                        <div class="center-top-header">
                            <?php print render($page['header']); ?>
                        </div>
                        <div class="right-top-header">
                            <div class="alternative-version-view">
                                <img src="/<?php print path_to_theme(); ?>/images/eye.png"
                                     alt="eye">
                                <span><a href="#" class="bvi-panel-open-menu">ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ</a></span>
                            </div>
                            <ul class="link-to-social">
                                <li>
                                    <a href="https://www.facebook.com/mincult.omsk/" target="_blank"
                                       class="link-to-social-item">
                                        <img src="/<?php print path_to_theme(); ?>/images/facebook.png"
                                             alt="ссылка на страницу в facebook">
                                    </a>

                                </li>
                                <li>
                                    <a href="https://vk.com/sibmincult" target="_blank" class="link-to-social-item">
                                        <img src="/<?php print path_to_theme(); ?>/images/vk.png"
                                             alt="ссылка на страницу вк">
                                    </a>

                                </li>
                                <li>
                                    <a href="https://t.me/prospekt_kulturi" target="_blank" class="link-to-social-item">
                                        <img src="/<?php print path_to_theme(); ?>/images/telegram.png"
                                             alt="ссылка на страницу телегамм"/>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/minculto/" target="_blank"
                                       class="link-to-social-item">
                                        <img src="/<?php print path_to_theme(); ?>/images/instagram.png"
                                             alt="ссылка на страницу instagram">
                                    </a>

                                </li>


                            </ul>
                            <div class="top-header-menu">
                                <ul class="links inline clearfix menu-contact">
                                    <li class="menu-383 first last"><a href="#" title="Контакты">Контакты</a>
                                    </li>
                                </ul>
                                <div class="block-contact-popup">
                                    <a href="#" class="close"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQBAMAAADt3eJSAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAJ1BMVEUAAAASpp0Sp54Vqp8Spp0WppsSpp0XoqISpp4Spp0Mqp4Spp0AAACkeZqtAAAAC3RSTlMAuMcY1hfVFtTTFdAuOsAAAAABYktHRACIBR1IAAAACXBIWXMAAA3XAAAN1wFCKJt4AAAAB3RJTUUH4gYMAwQcIOV9IwAAAFNJREFUCNdjEDJgAAJmRQZtVxAjZBODyZYABgZWb2cgTmdgKAPxwnYUsHenAqXZu2et3FEAUli5c/Z0EM3ANXvnAlQGTAquGKYdbiDcCrilMGcAAMhoH1nVL9LXAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDE4LTA2LTEyVDAzOjA0OjI4KzAyOjAwMQLR2QAAACV0RVh0ZGF0ZTptb2RpZnkAMjAxOC0wNi0xMlQwMzowNDoyOCswMjowMEBfaWUAAAAZdEVYdFNvZnR3YXJlAHd3dy5pbmtzY2FwZS5vcmeb7jwaAAAAAElFTkSuQmCC"></a>

                                    <div class="c-content">
                                        <div class="separator"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAqFBMVEUAAAAA//8Rpp4Spp0Spp0Spp0Tpp0RpJ4AqqoRpp0TpZ4AmZkSp50TpZ0OqpwSpp0Spp0Tp5wSppwSpp0Spp0XoqIRpZ0Sp54RpZ8SpZ0SpZ0VqpURqpkSpp0Tpp4Tpp0Rpp4Spp0Spp0Spp0Spp0Tpp0Spp0TppwSp50SpKQSpp0as5kTpZ4Rpp4Sp54TqJsSpp0Spp0WppsTpp0Spp0Up50Spp0AAADwO7XlAAAANnRSTlMAAVzB7NmVTAa+pQWZehL85HyB6PYWW1RKY4AMD/17bXY56/u3zuCJfw7nCk+/qin68ReHc04gR+9iAAAAAWJLR0QAiAUdSAAAAAlwSFlzAAAN1wAADdcBQiibeAAAAAd0SU1FB+IGDAIdKwKaGwMAAACNSURBVBjTVY5XFoJAEAQbFRMGTIBZUdeAOfT9j+a4QbF/Zqr2ve0BJF6hWPLLFbhUa9SpB1Y0aNM03GqTYafbI/sDLSJ5i4FExlCLkWxjYDIlZ1rEIubAQsbSlKTkar0RVp75detadrZ2fzCsMndZZMTxeypOHz7/GJcrebvnBB7kM8/IlB/8CbwSu7wB5BkUxSLfA0EAAAAldEVYdGRhdGU6Y3JlYXRlADIwMTgtMDYtMTJUMDI6Mjk6NDMrMDI6MDCFbmdQAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDE4LTA2LTEyVDAyOjI5OjQzKzAyOjAw9DPf7AAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAAASUVORK5CYII="></div>
                                        <div class="text">г. Омск, ул. Гагарина, 22</div>
                                        <div class="separator"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAkFBMVEUAAAASp50Spp0UnZ0Tpp0Sp50SpZ0Spp0NppkSpp0Spp0Spp0Rpp4Sp54Spp0Tpp8Up50Spp0AqqoTpZsUpZ0Spp0SpJ4RpZ0Spp0SpZ0TpZ4Spp0Spp0RppsVqpUSpp0Spp0Rpp0Rqpkas5kSpp0Spp0A//8Rp58SpZ4TppwTpZ4Spp0SpZ0Spp4Spp0AAAATMTJYAAAALnRSTlMAgtkNh3998hT0jOy/rekoTskDUkHvKpTitk/TvS4MwfySDwqr0gE9i1Cl5vV+ckCBrQAAAAFiS0dEAIgFHUgAAAAJcEhZcwAADdcAAA3XAUIom3gAAAAHdElNRQfiBgwCISmfZwPQAAAAeklEQVQY003NWRKCQAwE0IAoigiyuOECiKKg9v2PRwZqys5fXnU6IuK4M+HxgDnvCwD+kmClgIBgbSAk2OgexQRbhYRLU1clY8kVdnuWg8qRJT2ZTCHx+XKd5JaY12UEVPV9lOYBO88p0zoWPFv0Gs/w/le3Xf/5/kQGPhYPTxZUtNkAAAAldEVYdGRhdGU6Y3JlYXRlADIwMTgtMDYtMTJUMDI6MzM6NDErMDI6MDDEXTlwAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDE4LTA2LTEyVDAyOjMzOjQxKzAyOjAwtQCBzAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAAASUVORK5CYII="/></div>
                                        <div class="text">
                                            Пресс-служба: <a href="tel:89069198264">8 (906) 919-82-64</a> Светлана Саликова<br>
                                            Редактор сайта: <a href="tel:89620334319">8 (962)033-43-19</a> – Ирина Чернышева
                                        </div>
                                        <div class="separator"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAbFBMVEUAAAARpp0SpZ0Spp0RppwSpp0Spp0RpZ4TpZwSpZ4RpJoSpp0Sp54Op54Spp0Spp0RpJkSpp0Spp0UppoSpJgSpp0Qo58Spp0Spp0TqJoSpZwQp50Spp0Spp0Sp50RpJwQp5wSpZwSpp0AAABdCFuGAAAAInRSTlMAPLa4TY/8aWyLTPOqN+XFLdDgPyrIQOLnNahO8vSCal2OzqhckwAAAAFiS0dEAIgFHUgAAAAJcEhZcwAADdcAAA3XAUIom3gAAAAHdElNRQfiBgwCIwoPNhAgAAAAc0lEQVQY04WOSxJAMBQEnyD+QoT4k7n/IVGplFRZ6F33Zobol4CFHiygKIZHHBFPUu6UpwknIMsL60WeAXdAWdWP11UJGyCaFmgbARdkpxhTnXShH/Q4TaMeehvmZQW2DViX+Qn78c4eO+g0/jFzfq//cgHZYxFD1pTpyQAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAxOC0wNi0xMlQwMjozNToxMCswMjowMCfUTOcAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMTgtMDYtMTJUMDI6MzU6MTArMDI6MDBWifRbAAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="/></div>
                                        <div class="text"><a href="mailto:kultura.omsk@yandex.ru">kultura.omsk@yandex.ru</a> </div>

                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
            <div class="bottom-header  <?php if (!$is_front) {
                echo 'border-header-bottom';
            } ?>">
                <div class="container clearfix">
                    <div class="main-header-menu">
                        <?php
                        $menu_main = menu_navigation_links('main-menu');
                        print theme('links__name_of_your_menu', array(
                            'links' => $menu_main,
                            'attributes' => array(
                                'class' => array('links', 'inline', 'clearfix', 'main-menu'),
                            ),
                        ));

                        ?>
                    </div>
                </div>
            </div>

        </header>

        <div id="main-wrapper" class="clearfix">

