<?php

include(locate_template('/templates/global/vars.php'));

/* Template Name: Home */

get_header();
include(locate_template('/templates/global/header.php'));

// page portal :

use PagePortal\PagePortal;

$pagePortal = new PagePortal();
$pagePortal->displayPagePortal(array(8,10,12,16)); // page IDs

// smarty :

// page portal(s) :

$smarty->assign('PagePortal', $pagePortal->PagePortals);

// if template exists :

if ($smarty->templateExists(THEME_DIR . '/smarty_templates/pages/home.tpl')) :

    // display template :

    $smarty->display(THEME_DIR . '/smarty_templates/pages/home.tpl');

endif;

get_footer();
include(locate_template('/templates/global/footer.php'));
