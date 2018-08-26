<?php
/**
 * Created by PhpStorm.
 * User: talga
 * Date: 26.04.2018
 * Time: 11:42
 */
?>
<div class="banner turist-banner home-page clearfix padding-top-20">
    <?php

    foreach ($view->style_plugin->rendered_fields as $view_field) {

        $img = $view_field['field_images_sbt'];
        $title = $view_field['title'];
        $first_phone = $view_field['field_first_number_phone'];
        $second_phone = $view_field['field_second_number_phone_sbt'];
        $adress = $view_field['field_adress_sbt'];
        $link_web = $view_field['field_link_to_web_sbt'];
        $link_vk = $view_field['field_link_tovk_sbt'];

        ?>

        <img src="<?=$img;?>"/>
        <?php
    }
    ?>

    <div class="textblock-banner turism-page-banner   left-block">

        <div class="textblock-banner-wallpaper">

            <div class="title-field-banner">
                <?=$title; ?>
            </div>

            <div class="second-field-banner">
                <div>
                    <a href="tel:<?php echo $first_phone; ?>"><?php echo $first_phone; ?></a>
                    <br>
                    <a href="tel:<?php echo $second_phone; ?>"><?php echo $second_phone; ?></a>
                </div>
                <div>
                    <?php echo $adress; ?>
                </div>
            </div>

            <div class="turism-banner-delivery"></div>

            <div>
                <a href="<?php echo $link_web; ?>" target="_blank"
                   class="link-turism-banner">omsk-turinfo.com</a>

                <a target="_blanks" href="<?php echo $link_vk; ?>"><img
                            class="img-soc-banner-turism"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAQCAYAAAAFzx/vAAAACXBIWXMAAAsTAAALEwEAmpwYAAABNmlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjarY6xSsNQFEDPi6LiUCsEcXB4kygotupgxqQtRRCs1SHJ1qShSmkSXl7VfoSjWwcXd7/AyVFwUPwC/0Bx6uAQIYODCJ7p3MPlcsGo2HWnYZRhEGvVbjrS9Xw5+8QMUwDQCbPUbrUOAOIkjvjB5ysC4HnTrjsN/sZ8mCoNTIDtbpSFICpA/0KnGsQYMIN+qkHcAaY6addAPAClXu4vQCnI/Q0oKdfzQXwAZs/1fDDmADPIfQUwdXSpAWpJOlJnvVMtq5ZlSbubBJE8HmU6GmRyPw4TlSaqo6MukP8HwGK+2G46cq1qWXvr/DOu58vc3o8QgFh6LFpBOFTn3yqMnd/n4sZ4GQ5vYXpStN0ruNmAheuirVahvAX34y/Axk/96FpPYgAAACBjSFJNAAB6JQAAgIMAAPn/AACA6AAAUggAARVYAAA6lwAAF2/XWh+QAAABs0lEQVR42qzUvWsUURTG4WdnAxFjMI0gKv4DWghmBQurGFSwsbEwIIgaP7JCVhuJgmUKiwmyTRSSRoJYaZFKREQbGQRhC9s0IihRjLAqfmAzi8PlzmyQvHCZe+595/zmzJw7tdGp6T0YRoJaPt5i1T8dwRyGMJKvraGDS1k7XRGo0WztL+SroY4vA3iNwcD/EdvxJ4+72IJdBc8wdmISMwFsAWdElGAxsr4N5wrxC+wTVz2AjZTB8CYJn66gW0G8incR39cgvqlcpxN8LqlyB85HoKG+F6rbimslsNmsnXaSPLhRYkqDeHMVEA9K8nSydjrT+4bwHrcjxqEAujviWcurm8DRyP4vjPWC2ujUdG8+iE8lVZzKr0uRvUU8xqOS6o5n7XS52KU9/cCFkpuWSmDyjiyD3SvCQiDcx7KN08/YOQx1Mmb8T11uNFtX+gG7GN/AKu80mq3rVUB4jqvrTNjFWTys8Mw2mq1m2KUxTWK+D3A+a6cX86PxBIcrvGNJn2R3cQAvKzwfepOsnY7jVYX36cA6XlmGQziBCezNfwh1fMOzwH8QCziGTXkD/s7Hyt8BAG8DY27BAgPDAAAAAElFTkSuQmCC"/></a>
            </div>

        </div>

    </div>
</div>