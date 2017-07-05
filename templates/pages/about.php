<?php
include(locate_template('/templates/global/vars.php'));

// home :

use AboutPage\AboutPage;

$aboutPage = new AboutPage(28, 1, 'page');
$aboutPage->displayPage();

// smarty :

// page banner :

$smarty->assign('PageBanner', $aboutPage->PageBanner);

// about content :

$smarty->assign('AboutContent', $aboutPage->AboutContent);

// if template exists :

if ($smarty->templateExists(THEME_DIR . '/smarty_templates/pages/about.tpl')) :

    // display template :

    $smarty->display(THEME_DIR . '/smarty_templates/pages/about.tpl');

endif;
