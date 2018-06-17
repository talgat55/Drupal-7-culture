<?php

/**
 *
 */
?>


    <div id="main" class="archelogy-row clearfix">
        <div class="container relative clearfix">
            <ul class="archelogy-page  clearfix">
                <?php  foreach ($view->style_plugin->rendered_fields as $view_field): ?>

                <li class="archelogy-item">
                    <a href="<?= $view_field['path'] ?>">
                        <div class="archelogy-item-block" style="background: url(<?= $view_field["field_image_archelogy"] ?>);">

                            <h3><?= $view_field["title"] ?></h3>
                        </div>
                    </a>
                </li>
                <?php  endforeach; ?>
            </ul>
            <h2 class="title-section bottom-border-title">Все о археологии</h2>
                <?php print views_embed_view('archelogy_news', 'block'); ?>
        </div>
    </div>
