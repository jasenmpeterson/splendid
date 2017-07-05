<?php

include(locate_template('/templates/global/vars.php'));
include(locate_template('/templates/global/navigation.php'));


// smarty :

// logo :

$smarty->assign('FooterLogo', get_field('footer_logo', 'option'));

// social media :

$smarty->assign('Twitter', get_field('twitter', 'option'));
$smarty->assign('LinkedIn', get_field('linkedin', 'option'));
$smarty->assign('Facebook', get_field('Facebook', 'option'));

// if template exists :

if ($smarty->templateExists(THEME_DIR . '/smarty_templates/global/footer.tpl')) :

    // display template :

    $smarty->display(THEME_DIR . '/smarty_templates/global/footer.tpl');

endif;
