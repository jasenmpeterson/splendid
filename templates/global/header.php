<?php

include(locate_template('/templates/global/vars.php'));
include(locate_template('/templates/global/navigation.php'));

// smarty :

// logo :

$smarty->assign('SiteLogo', get_field('logo_svg_code', 'option'));

// if template exists :

if ($smarty->templateExists(THEME_DIR . '/smarty_templates/global/header.tpl')) :

    // display template :

    $smarty->display(THEME_DIR . '/smarty_templates/global/header.tpl');

endif;
