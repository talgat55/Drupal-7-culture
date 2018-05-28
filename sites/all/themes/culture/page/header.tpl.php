 
<div id="page-wrapper" class="clearfix">
    <div id="page">
        <header id="header">
            <div class="header">
                <div class="container clearfix">
                    <div class="top-header">
                        <?php if ($logo): ?>
                            <a href="<?php print $front_page; ?>" title="<?php print t('Домашняя страница'); ?>"
                               id="logo">
                                <img src="/<?php print path_to_theme(); ?>/images/logo.png"/>
                            </a>
                        <?php endif; ?>
                        <div class="center-top-header">
                            <?php print render($page['header']); ?>
                        </div>
                        <div class="right-top-header">
                            <div class="alternative-version-view">
                                <img src="/<?php print path_to_theme(); ?>/images/eye.png"
                                     alt="eye">
                                <span>ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ</span>
                            </div>
                            <ul class="link-to-social">
                                <li>
                                    <a href="https://www.facebook.com/mincult.omsk/" target="_blank" class="link-to-social-item">
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
                                    <a href="https://www.instagram.com/minculto/" target="_blank" class="link-to-social-item">
                                        <img src="/<?php print path_to_theme(); ?>/images/instagram.png"
                                             alt="ссылка на страницу instagram">
                                    </a>

                                </li>


                            </ul>
                            <div class="top-header-menu">
                                <?php
                                $menu_contact = menu_navigation_links('menu-contact');
                                print theme('links__name_of_your_menu', array(
                                    'links' => $menu_contact,
                                    'attributes' => array(
                                        'class' => array('links', 'inline', 'clearfix', 'menu-contact'),
                                    ),
                                ));

                                ?>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
            <div class="bottom-header  <?php if(!$is_front){  echo 'border-header-bottom';  } ?>">
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

