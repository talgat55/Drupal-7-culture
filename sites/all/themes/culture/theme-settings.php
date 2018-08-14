<?php
function save_image_form_submit(&$form, &$form_state, $form_id){
    $image_custom_index = $form_state['values']['turizm_image_banner'];
    if (!$image_custom_index) {
        $file = file_load($image_custom_index);
        if ($file->status == 0) {
            $file->status = FILE_STATUS_PERMANENT;
            file_save($file);
        }
    }

}
if (isset($form['submit'])) {
    $form['submit']['#submit'][] ='save_image_form_submit';
}
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
    /* $image_custom_index1 = theme_get_setting('turizm_image_omsk_obl');
     if (!$image_custom_index1) {
         $fid1 = theme_get_setting('turizm_image_omsk_obl');
         $file1 = file_load($fid1);
         if ($file1->status == 0) {
             $file1->status = FILE_STATUS_PERMANENT;
             file_save($file1);
             drupal_set_message('Картинка успешно сохранена. 2', 'status');
         }
     }*/
    $form['theme_settings']['turizm_image_omsk'] = array(
        '#type' => 'managed_file',
        '#upload_location' => 'public://images/',
        '#title' => t('Изображение для блока эксурсий  омску  стрницы туризма'),
        '#default_value' => theme_get_setting('turizm_image_omsk'),
    );
    /* $image_custom_index2 = theme_get_setting('turizm_image_omsk');
     if (!$image_custom_index2) {
         $fid2 = theme_get_setting('turizm_image_omsk');
         $file2 = file_load($fid2);
         if ($file2->status == 0) {
             $file2->status = FILE_STATUS_PERMANENT;
             file_save($file2);
             drupal_set_message('Картинка успешно сохранена. 3', 'status');
         }
     }*/
    $form['theme_settings']['turizm_image_adavance'] = array(
        '#type' => 'managed_file',
        '#upload_location' => 'public://images/',
        '#title' => t('Изображение для блока достопримечательностей  стрницы туризма'),
        '#default_value' => theme_get_setting('turizm_image_adavance'),
    );
    /* $image_custom_index3 = theme_get_setting('turizm_image_adavance');
     if (!$image_custom_index3) {
         $fid3 = theme_get_setting('turizm_image_adavance');
         $file3 = file_load($fid3);
         if ($file3->status == 0) {
             $file3->status = FILE_STATUS_PERMANENT;
             file_save($file3);
             drupal_set_message('Картинка успешно сохранена. 4', 'status');
         }
     }*/
    $form['theme_settings']['header_block_about'] = array(
        '#type' => 'textarea',
        '#title' => t('Контент блока  О нас '),
        '#default_value' => theme_get_setting('header_block_about'),
    );

    $form['theme_settings']['header_block_contact_content'] = array(
        '#type' => 'textarea',
        '#title' => t(' Блок контакты "Контент" '),
        '#default_value' => theme_get_setting('header_block_contact_content'),
    );

    $form['theme_settings']['header_block_contact_adress'] = array(
        '#type' => 'textfield',
        '#title' => t(' Блок контакты "Адрес" '),
        '#default_value' => theme_get_setting('header_block_contact_adress'),
    );

    $form['theme_settings']['header_block_contact_email'] = array(
        '#type' => 'textfield',
        '#title' => t(' Блок контакты "Email" '),
        '#default_value' => theme_get_setting('header_block_contact_email'),
    );

}