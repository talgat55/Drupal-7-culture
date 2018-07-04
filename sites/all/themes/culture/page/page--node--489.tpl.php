<?php

/**
 *
 */
?>
<?php include('header.tpl.php'); ?>
<?php if ($breadcrumb): ?>
    <div class="container relative">
        <div class="top-block-content">
            <div id="breadcrumb" class="custom-top-padd-bred">

                <?php //print $breadcrumb; ?>
                <div class="breadcrumb"  >
                     <span class="inline odd first">
                        <a href="/">Главная</a>
                    </span>
                    <span class="delimiter">/</span>
                    <span class="inline even">
                        <a href="/turizm">Туризм</a>
                    </span>
                    <span class="delimiter">/</span>
                    <span class="inline odd last">Достопримечательности</span>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
    <h1 class=" title-section capitalize bottom-border-title margin-top-10 no-after">
        Достопримечательности
    </h1>
    <div id="main" class="turist-row clearfix">
        <div class="container relative clearfix">
            <!--<div id="stickyblock" class="aside turism">

                <a href="#" target="_blank" class="block-photo">
                    <img src="/<?php print path_to_theme(); ?>/images/elipse.png"
                         alt="Справочник">
                    <div class="block-aside-photo">
                        <img src="/<?php print path_to_theme(); ?>/images/spnk.png"
                             alt="Иконка">

                        <p>Справочник туриста</p>
                    </div>
                </a>


            </div> -->
            <div class="part-turism-page">
                <ul class="turizm-detail-part clearfix">

                    <li class="turizm-detail-item-part">
                        <a target="_blank" href="<?php echo path_to_theme(); ?>/images/KARTA_RUS_ANGL_v_PDF_33.pdf">
                            <img src="<?php echo path_to_theme(); ?>/images/omsk-min.jpg"/>
                            <div class="turism-bottom-block">
                                <h3>Достопримечательности Омска</h3>
                            </div>
                        </a>
                    </li>
                    <li class="turizm-detail-item-part">
                        <a target="_blank" href="<?php echo path_to_theme(); ?>/images/karta_nasha.pdf">
                            <img src="<?php echo path_to_theme(); ?>/images/obl-min.jpg"/>
                            <div class="turism-bottom-block">
                                <h3>Достопримечательности Омской
                                    области</h3>
                            </div>
                        </a>
                    </li>


                </ul>

                <a target="_blank" href="<?php echo path_to_theme(); ?>/images/Putevoditel_omsk_A6_SAJT.pdf"
                   class="download-putivoditel">
                    Скачать путеводитель по Омску
                </a>

            </div>


            <div class="banner turist-banner home-page clearfix padding-top-20 margin-bottom-100">
                <?php
                $file = file_load(theme_get_setting('turizm_image_banner'));
                $uri = $file->uri;
                $url = file_create_url($uri);
                ?>
                <img src="<?php echo $url; ?>"/>
                <div class="textblock-banner turism-page-banner   left-block">

                    <div class="textblock-banner-wallpaper">

                        <div class="title-field-banner">
                            <?php echo theme_get_setting('turizm_title_banner'); ?>
                        </div>

                        <div class="second-field-banner">
                            <div>
                                <a href="tel:<?php echo theme_get_setting('turizm_phone_one_banner'); ?>"><?php echo theme_get_setting('turizm_phone_one_banner'); ?></a>
                                <br>
                                <a href="tel:<?php echo theme_get_setting('turizm_phone_two_banner'); ?>"><?php echo theme_get_setting('turizm_phone_two_banner'); ?></a>
                            </div>
                            <div>
                                <?php echo theme_get_setting('turizm_address_banner'); ?>
                            </div>
                        </div>

                        <div class="turism-banner-delivery"></div>

                        <div>
                            <a href="<?php echo theme_get_setting('turizm_link_to_ws_banner'); ?>" target="_blank"
                               class="link-turism-banner">omsk-turinfo.com</a>

                            <a target="_blanks" href="<?php echo theme_get_setting('turizm_link_to_vk_banner'); ?>"><img
                                        class="img-soc-banner-turism"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAQCAYAAAAFzx/vAAAACXBIWXMAAAsTAAALEwEAmpwYAAABNmlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjarY6xSsNQFEDPi6LiUCsEcXB4kygotupgxqQtRRCs1SHJ1qShSmkSXl7VfoSjWwcXd7/AyVFwUPwC/0Bx6uAQIYODCJ7p3MPlcsGo2HWnYZRhEGvVbjrS9Xw5+8QMUwDQCbPUbrUOAOIkjvjB5ysC4HnTrjsN/sZ8mCoNTIDtbpSFICpA/0KnGsQYMIN+qkHcAaY6addAPAClXu4vQCnI/Q0oKdfzQXwAZs/1fDDmADPIfQUwdXSpAWpJOlJnvVMtq5ZlSbubBJE8HmU6GmRyPw4TlSaqo6MukP8HwGK+2G46cq1qWXvr/DOu58vc3o8QgFh6LFpBOFTn3yqMnd/n4sZ4GQ5vYXpStN0ruNmAheuirVahvAX34y/Axk/96FpPYgAAACBjSFJNAAB6JQAAgIMAAPn/AACA6AAAUggAARVYAAA6lwAAF2/XWh+QAAABs0lEQVR42qzUvWsUURTG4WdnAxFjMI0gKv4DWghmBQurGFSwsbEwIIgaP7JCVhuJgmUKiwmyTRSSRoJYaZFKREQbGQRhC9s0IihRjLAqfmAzi8PlzmyQvHCZe+595/zmzJw7tdGp6T0YRoJaPt5i1T8dwRyGMJKvraGDS1k7XRGo0WztL+SroY4vA3iNwcD/EdvxJ4+72IJdBc8wdmISMwFsAWdElGAxsr4N5wrxC+wTVz2AjZTB8CYJn66gW0G8incR39cgvqlcpxN8LqlyB85HoKG+F6rbimslsNmsnXaSPLhRYkqDeHMVEA9K8nSydjrT+4bwHrcjxqEAujviWcurm8DRyP4vjPWC2ujUdG8+iE8lVZzKr0uRvUU8xqOS6o5n7XS52KU9/cCFkpuWSmDyjiyD3SvCQiDcx7KN08/YOQx1Mmb8T11uNFtX+gG7GN/AKu80mq3rVUB4jqvrTNjFWTys8Mw2mq1m2KUxTWK+D3A+a6cX86PxBIcrvGNJn2R3cQAvKzwfepOsnY7jVYX36cA6XlmGQziBCezNfwh1fMOzwH8QCziGTXkD/s7Hyt8BAG8DY27BAgPDAAAAAElFTkSuQmCC"/></a>
                        </div>

                    </div>

                </div>
            </div>


        </div>
    </div>

<?php include('footer.tpl.php'); ?>