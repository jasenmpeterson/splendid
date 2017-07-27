<?php

include(locate_template('/templates/global/vars.php'));

/* Template Name: Appointments */

get_header();


// smarty :

// if template exists :

if ($smarty->templateExists(THEME_DIR . '/smarty_templates/pages/appointments.tpl')) :

    // display template :

    $smarty->display(THEME_DIR . '/smarty_templates/pages/appointments.tpl');

endif;

get_footer();
