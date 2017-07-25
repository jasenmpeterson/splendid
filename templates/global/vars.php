<?php

$smarty = new Smarty_Base();

// get the queried object and sanitize it :

$current_page = sanitize_post($GLOBALS['wp_the_query']->get_queried_object());

// get the page slug :

$pageSlug = $current_page->post_name;

$smarty->assign('pageSlug', $pageSlug);

// get page ID :

$pageID = $current_page->ID;

$smarty->assign('pageID', $pageID);

// theme uri - functions.php :

$smarty->assign('themeURL', THEME_URI);

// home url :

$smarty->assign('homeURL', get_bloginfo('url'));

// site title :

$smarty->assign('siteTitle', get_bloginfo('name'));

// page title :

$smarty->assign('pageTitle', get_the_title($pageID));

// logo :

$smarty->assign('SiteLogo', get_field('logo_svg_code', 'option'));

// address :

$smarty->assign('address', get_field('address', 'option'));

// phone :

$smarty->assign('officePhone', get_field('office_phone', 'option'));
$contactPhone = get_field('office_phone', 'option');

// curr year :

$smarty->assign('currentYear', date('Y'));
