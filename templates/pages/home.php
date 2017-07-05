<?php
include(locate_template('/templates/global/vars.php'));

// home :

use HomePage\HomePage;

$homePage = new HomePage(6, 1, 'page');
$homePage->displayPage();

// page portal :

use PagePortal\PagePortal;

$pagePortal = new PagePortal();
$pagePortal->displayPagePortal(array(30,32,34)); // page IDs

// smarty :

// page banner :

$smarty->assign('PageBanner', $homePage->PageBanner);

// page portal(s) :

$smarty->assign('PagePortals', $pagePortal->PagePortals);

// if template exists :

if ($smarty->templateExists(THEME_DIR . '/smarty_templates/pages/home.tpl')) :

    // display template :

    $smarty->display(THEME_DIR . '/smarty_templates/pages/home.tpl');

endif;
