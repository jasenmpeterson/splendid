<?php

$smarty = new Smarty_Base();

if (!is_home()) :

    // get the queried object and sanitize it :

    $current_page = sanitize_post($GLOBALS['wp_the_query']->get_queried_object());

    // get the page slug :

    $pageSlug = $current_page->post_name;

    $smarty->assign('pageSlug', $pageSlug);

    // get page ID :

    $pageID = $current_page->ID;

    $smarty->assign('pageID', $pageID);

endif;

// theme uri - functions.php :

$smarty->assign('themeURL', THEME_URI);

// home url :

$smarty->assign('homeURL', get_bloginfo('url'));

// site title :

$smarty->assign('siteTitle', get_bloginfo('name'));

// curr year :

$smarty->assign('currentYear', date('Y'));
