<?php

include(locate_template('/templates/global/vars.php'));

/* Template Name: Home */

get_header();

// site intro :
$smarty->assign('siteIntro', get_field('site_intro', $pageID));

// page portal :

use PagePortal\PagePortal;

$pagePortal = new PagePortal();
$pagePortal->displayPagePortal(array(102,10,12,18)); // page IDs

// smarty :

// page portal(s) :

$smarty->assign('PagePortal', $pagePortal->PagePortals);

// if template exists :

if ($smarty->templateExists(THEME_DIR . '/smarty_templates/pages/home.tpl')) :

    // display template :

    $smarty->display(THEME_DIR . '/smarty_templates/pages/home.tpl');

endif;

get_footer();
