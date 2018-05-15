<?php
/**
 *
 */
?>
</div>
<footer id="footer-wrapper">
    <div class="section container clearfix">
        <div class="col-md-6">
            <?php if ($logo): ?>
                <a href="<?php print $front_page; ?>" title="<?php print t('Домашняя страница'); ?>"
                   id="logo">
                    <img src="<?php print $logo; ?>" alt="<?php print t('Логотип'); ?>"/>
                </a>
            <?php endif; ?>
            <ul class="link-to-social">
                <li>
                    <a href="#" target="_blank" class="link-to-social-item">
                        <img src="/<?php print path_to_theme(); ?>/images/facebook.png"
                             alt="ссылка на страницу в facebook">
                    </a>

                </li>
                <li>
                    <a href="#" target="_blank" class="link-to-social-item">
                        <img src="/<?php print path_to_theme(); ?>/images/vk.png"
                             alt="ссылка на страницу вк">
                    </a>

                </li>
                <li>
                    <a href="#" target="_blank" class="link-to-social-item">
                        <img src="/<?php print path_to_theme(); ?>/images/telegram.png"
                             alt="ссылка на страницу телегамм">
                    </a>

                </li>
                <li>
                    <a href="#" target="_blank" class="link-to-social-item">
                        <img src="/<?php print path_to_theme(); ?>/images/instagram.png"
                             alt="ссылка на страницу instagram">
                    </a>

                </li>


            </ul>
            <div class="alternative-version-view">
                <img src="/<?php print path_to_theme(); ?>/images/eye.png"
                     alt="eye">
                <span>ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ</span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="main-footer-menu">
                <?php
                $menu_main = menu_navigation_links('menu-footer');
                print theme('links__name_of_your_menu', array(
                    'links' => $menu_main,
                    'attributes' => array(
                        'class' => array('links', 'inline', 'clearfix', 'main-menu'),
                    ),
                ));

                ?>
            </div>
            <div class="footer-bottom">
                <p class="footer-oth"><a target="_blank" title="Перейти на сайт разработчика"
                                         href="http://asmart-group.ru/">Сайт создан в IT-Company
                        <span>ASMART</span></a></p>
            </div>

        </div>


    </div>
</footer>

</div>
</div> <!-- /#page, /#page-wrapper -->
