<?php

include(locate_template('/templates/global/vars.php'));

get_header();

// smarty :

// featured image :

$smarty->assign('featuredImage', wp_get_attachment_url(get_post_thumbnail_id($pageID), 'thumbnail'));

// services :

$query = new WP_Query(array(
    'post_type' => 'dentist',
    'post_status' => 'publish',
    'p' => $pageID
));


while ($query->have_posts()) {
    $query->the_post();
    $smarty->assign('pageContent', wpautop(get_the_content()));
    $smarty->assign('featuredImage', wp_get_attachment_url(get_post_thumbnail_id(), 'thumbnail'));
}


// if template exists :

if ($smarty->templateExists(THEME_DIR . '/smarty_templates/pages/single-doctor.tpl')) :

    // display template :

    $smarty->display(THEME_DIR . '/smarty_templates/pages/single-doctor.tpl');

endif;

get_footer();
