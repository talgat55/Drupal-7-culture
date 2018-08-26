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
                    <span class="inline odd last">Экскурсии по Омску</span>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
    <h1 class=" title-section capitalize bottom-border-title margin-top-10  no-after">
        Экскурсии по Омску
    </h1>
    <div id="main" class="turist-row clearfix">
        <div class="container relative clearfix">


            <?php print views_embed_view('settings_ban_turizm', 'block'); ?>

            <?php  print views_embed_view('turizm_excursii_omsk', 'block'); ?>








        </div>
    </div>

<?php include('footer.tpl.php'); ?>