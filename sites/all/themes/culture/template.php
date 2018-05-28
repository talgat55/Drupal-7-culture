<?php

/*
 *  search form
 */

function culture_form_search_block_form_alter(&$form, &$form_state, $form_id) {
   // $form['search_block_form']['#title'] = t('Search'); // Change the text on the label element
   // $form['search_block_form']['#default_value'] = t('Search'); // Set a default value for the textfield

    $form['search_block_form']['#attributes']['placeholder'] = t('Поиск');
}

function culture_preprocess_html(&$vars) {
    // Ally.js for accessibility
    drupal_add_js('https://yastatic.net/share2/share.js', array('type' => 'external', 'scope' => 'footer'));
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
function pn_node($node, $mode = 'n') {
    if (!function_exists('prev_next_nid')) {
        return NULL;
    }

    switch($mode) {
        case 'p':
            $n_nid = prev_next_nid($node->nid, 'prev');
            $node2 = node_load($n_nid);
            $link_text = '<img style="margin-right: 15px; position: relative; top: 3px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQBAMAAADt3eJSAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAKlBMVEUAAAAgICAdIB0AAAAeIB0eIBwAAAAcHBweIB0eHxweIBweIB4eIB0AAACjigrKAAAADHRSTlMACHEDuM4CEqqikGfxMGkjAAAAAWJLR0QAiAUdSAAAAAlwSFlzAAAN1wAADdcBQiibeAAAAAd0SU1FB+IFHAskJx3AzFIAAAAuSURBVAjXY2DAAoQMIDSjawKEIRIOEyhAFWDombUKBFYjGHApuGJkoQQ0K9ABAEyFDy9raWQNAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDE4LTA1LTI4VDExOjM2OjM5KzAyOjAwP+Rf8wAAACV0RVh0ZGF0ZTptb2RpZnkAMjAxOC0wNS0yOFQxMTozNjozOSswMjowME65508AAAAZdEVYdFNvZnR3YXJlAHd3dy5pbmtzY2FwZS5vcmeb7jwaAAAAAElFTkSuQmCC">'. $node2->title;
            break;

        case 'n':
            $n_nid = prev_next_nid($node->nid, 'next');
            $node2 = node_load($n_nid);
           // $link_text = 'next';
            $link_text = $node2->title . '<img style="margin-left: 15px; position: relative; top: 3px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQBAMAAADt3eJSAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAKlBMVEUAAAAAAAAdIB0gICAAAAAeIBweIB0cHBweIB4eIBweHxweIB0eIB0AAAD5i+6FAAAADHRSTlMAA3EIAs64EmeQoqoHTmefAAAAAWJLR0QAiAUdSAAAAAlwSFlzAAAN1wAADdcBQiibeAAAAAd0SU1FB+IFHAskGzKvsNUAAAAuSURBVAjXY2DAChiVoQyWMAMoqzQZymBHFuqcCQKzTiMYqKrhimECcAPhVqAAAFmaD6166eZ+AAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDE4LTA1LTI4VDExOjM2OjI3KzAyOjAwo3EkMAAAACV0RVh0ZGF0ZTptb2RpZnkAMjAxOC0wNS0yOFQxMTozNjoyNyswMjowMNIsnIwAAAAZdEVYdFNvZnR3YXJlAHd3dy5pbmtzY2FwZS5vcmeb7jwaAAAAAElFTkSuQmCC">';
            break;

        default:
            return NULL;
    }
    if ($n_nid) {
        $n_node = node_load($n_nid);

        $options = array(
            'attributes' => array('class' => 'thumbnail'),
            'html'  => TRUE,
        );
        switch($n_node->type) {
            // For image nodes only
            case 'article':
                // This is an image node, get the thumbnail
                $html = l($link_text, "node/$n_nid", array('html' => TRUE));
                return $html;

            // For video nodes only
            case 'video':
                foreach ($n_node->files as $fid => $file) {
                    $html  = '<img src="' . base_path() . $file->filepath;
                    $html .= '" alt="' . $n_node->title;
                    $html .= '" title="' . $n_node->title;
                    $html .= '" class="image image-thumbnail" />';
                    $img_html = l($html, "node/$n_nid", $options);
                    $text_html = l($link_text, "node/$n_nid", array('html' => TRUE));
                    return $img_html . $text_html;
                }
            default:
                // Add other node types here if you want.
        }
    }
}