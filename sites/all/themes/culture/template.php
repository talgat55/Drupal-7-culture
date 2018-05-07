<?php
function culture_preprocess_page(&$vars, $hook) {
    if (isset($vars['node']->type)) {
        $vars['theme_hook_suggestions'][] = 'page__' . $vars['node']->type;
    }
}


/*
 *  search form
 */

function culture_form_search_block_form_alter(&$form, &$form_state, $form_id) {
   // $form['search_block_form']['#title'] = t('Search'); // Change the text on the label element
   // $form['search_block_form']['#default_value'] = t('Search'); // Set a default value for the textfield

    $form['search_block_form']['#attributes']['placeholder'] = t('Поиск');
}


/**
 * Implements hook_page_alter().
 */
/*
function culture_page_alter(&$page) {
    if (isset($page['news_baner_main'])) {
        $GLOBALS['region_news_baner_main'] = $page['news_baner_main'];
    }
}

**/
