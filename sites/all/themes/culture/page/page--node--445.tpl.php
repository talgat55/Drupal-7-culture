<?php

/**
 *
 */
?>
<?php include('header.tpl.php'); ?>
<?php if ($breadcrumb): ?>
    <div class="container relative">
        <div class="top-block-content">
            <div id="breadcrumb">

                <?php print $breadcrumb; ?>

            </div>
        </div>
    </div>
<?php endif; ?>
    <h1 class=" title-section bottom-border-title no-after">
        Туры по Омской области
    </h1>
    <div id="main" class="turist-row clearfix">
        <div class="container relative clearfix">
            <?php  print views_embed_view('turism_oblast', 'block'); ?>

            <div class="banner turist-banner home-page clearfix padding-top-20 margin-bottom-60">
                <img src="<?php echo path_to_theme(); ?>/images/bg-turist-min.jpg"/>
                <div class="textblock-banner turism-page-banner   left-block">

                    <div class="textblock-banner-wallpaper">

                        <div class="title-field-banner">
                            Туристский-информационный центр
                        </div>

                        <div class="second-field-banner">
                            <div>
                                <a href="tel:73812909889">+7 (3812) 90-98-89</a> <br>
                                <a href="tel:79131499889">+7 913 149-98-89</a>
                            </div>
                            <div>
                                г. Омск, Музейная, 3
                            </div>
                        </div>

                        <div class="turism-banner-delivery"></div>

                        <div>
                            <a href="omsk-turinfo.com" target="_blank" class="link-turism-banner">omsk-turinfo.com</a>

                            <img class="img-soc-banner-turism"
                                 src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAQCAYAAAAFzx/vAAAACXBIWXMAAAsTAAALEwEAmpwYAAABNmlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjarY6xSsNQFEDPi6LiUCsEcXB4kygotupgxqQtRRCs1SHJ1qShSmkSXl7VfoSjWwcXd7/AyVFwUPwC/0Bx6uAQIYODCJ7p3MPlcsGo2HWnYZRhEGvVbjrS9Xw5+8QMUwDQCbPUbrUOAOIkjvjB5ysC4HnTrjsN/sZ8mCoNTIDtbpSFICpA/0KnGsQYMIN+qkHcAaY6addAPAClXu4vQCnI/Q0oKdfzQXwAZs/1fDDmADPIfQUwdXSpAWpJOlJnvVMtq5ZlSbubBJE8HmU6GmRyPw4TlSaqo6MukP8HwGK+2G46cq1qWXvr/DOu58vc3o8QgFh6LFpBOFTn3yqMnd/n4sZ4GQ5vYXpStN0ruNmAheuirVahvAX34y/Axk/96FpPYgAAACBjSFJNAAB6JQAAgIMAAPn/AACA6AAAUggAARVYAAA6lwAAF2/XWh+QAAABs0lEQVR42qzUvWsUURTG4WdnAxFjMI0gKv4DWghmBQurGFSwsbEwIIgaP7JCVhuJgmUKiwmyTRSSRoJYaZFKREQbGQRhC9s0IihRjLAqfmAzi8PlzmyQvHCZe+595/zmzJw7tdGp6T0YRoJaPt5i1T8dwRyGMJKvraGDS1k7XRGo0WztL+SroY4vA3iNwcD/EdvxJ4+72IJdBc8wdmISMwFsAWdElGAxsr4N5wrxC+wTVz2AjZTB8CYJn66gW0G8incR39cgvqlcpxN8LqlyB85HoKG+F6rbimslsNmsnXaSPLhRYkqDeHMVEA9K8nSydjrT+4bwHrcjxqEAujviWcurm8DRyP4vjPWC2ujUdG8+iE8lVZzKr0uRvUU8xqOS6o5n7XS52KU9/cCFkpuWSmDyjiyD3SvCQiDcx7KN08/YOQx1Mmb8T11uNFtX+gG7GN/AKu80mq3rVUB4jqvrTNjFWTys8Mw2mq1m2KUxTWK+D3A+a6cX86PxBIcrvGNJn2R3cQAvKzwfepOsnY7jVYX36cA6XlmGQziBCezNfwh1fMOzwH8QCziGTXkD/s7Hyt8BAG8DY27BAgPDAAAAAElFTkSuQmCC"/>
                        </div>

                    </div>

                </div>
            </div>










        </div>
    </div>

<?php include('footer.tpl.php'); ?>