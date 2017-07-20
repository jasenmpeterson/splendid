<?php

include(locate_template('/templates/global/navigation.php'));

// smarty :

// if template exists :

if ($smarty->templateExists(THEME_DIR . '/smarty_templates/global/header.tpl')) :

    // display template :

    $smarty->display(THEME_DIR . '/smarty_templates/global/header.tpl');

endif;
