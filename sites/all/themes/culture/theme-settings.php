<?php
function culture_form_system_theme_settings_alter(&$form, &$form_state)
{
    $form['theme_settings']['turizm_image_banner'] = array(
        '#type' => 'managed_file',
        '#title' => t('Изображение для баннера стрниц туризма'),
        '#upload_location' => 'public://images/',
        '#default_value' => theme_get_setting('turizm_image_banner'),
    );
    $form['theme_settings']['turizm_title_banner'] = array(
        '#type' => 'textfield',
        '#title' => t('Заголовок для баннера стрниц туризма'),
        '#default_value' => theme_get_setting('turizm_title_banner'),
    );

    $form['theme_settings']['turizm_phone_one_banner'] = array(
        '#type' => 'textfield',
        '#title' => t('Первый номер телефона для баннера стрниц туризма'),
        '#default_value' => theme_get_setting('turizm_phone_one_banner'),
    );
    $form['theme_settings']['turizm_phone_two_banner'] = array(
        '#type' => 'textfield',
        '#title' => t('Второй номер телефона для баннера стрниц туризма'),
        '#default_value' => theme_get_setting('turizm_phone_two_banner'),
    );
    $form['theme_settings']['turizm_address_banner'] = array(
        '#type' => 'textfield',
        '#title' => t('Адрес для баннера стрниц туризма'),
        '#default_value' => theme_get_setting('turizm_address_banner'),
    );
    $form['theme_settings']['turizm_link_to_vk_banner'] = array(
        '#type' => 'textfield',
        '#title' => t('Ссылка на ВК для баннера стрниц туризма'),
        '#default_value' => theme_get_setting('turizm_link_to_vk_banner'),
    );
    $form['theme_settings']['turizm_link_to_ws_banner'] = array(
        '#type' => 'textfield',
        '#title' => t('Ссылка на Веб сайт для баннера стрниц туризма'),
        '#default_value' => theme_get_setting('turizm_link_to_ws_banner'),
    );
    $form['theme_settings']['turizm_image_omsk_obl'] = array(
        '#type' => 'managed_file',
        '#upload_location' => 'public://images/',
        '#title' => t('Изображение для блока туров по омской области  стрницы туризма'),
        '#default_value' => theme_get_setting('turizm_image_omsk_obl'),
    );
    $form['theme_settings']['turizm_image_omsk'] = array(
        '#type' => 'managed_file',
        '#upload_location' => 'public://images/',
        '#title' => t('Изображение для блока эксурсий  омску  стрницы туризма'),
        '#default_value' => theme_get_setting('turizm_image_omsk'),
    );
    $form['theme_settings']['turizm_image_adavance'] = array(
        '#type' => 'managed_file',
        '#upload_location' => 'public://images/',
        '#title' => t('Изображение для блока достопримечательностей  стрницы туризма'),
        '#default_value' => theme_get_setting('turizm_image_adavance'),
    );


}