<?php
function culture_form_system_theme_settings_alter(&$form, &$form_state) {
    $form['theme_settings']['turizm_image_banner'] = array(
        '#type' => 'file',
        '#title' => t('Изображение для баннера стрниц туризма'),
        '#default_value' => theme_get_setting('turizm_image_banner'),
    );
}