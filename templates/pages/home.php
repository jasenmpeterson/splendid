<?php
include(locate_template('/templates/global/vars.php'));

// page portal :

use PagePortal\PagePortal;

$pagePortal = new PagePortal();
$pagePortal->displayPagePortal(array(8,12,10)); // page IDs

// smarty :

// page portal(s) :

$smarty->assign('PagePortal', $pagePortal->PagePortals);

// if template exists :

if ($smarty->templateExists(THEME_DIR . '/smarty_templates/pages/home.tpl')) :

    // display template :

    $smarty->display(THEME_DIR . '/smarty_templates/pages/home.tpl');

endif;
