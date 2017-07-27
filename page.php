<?php

include(locate_template('/templates/global/vars.php'));

get_header();

// smarty :

// featured image :

$smarty->assign('featuredImage', wp_get_attachment_url(get_post_thumbnail_id($pageID), 'thumbnail'));

// the content :

$smarty->assign('pageContent', wpautop(get_post_field('post_content', $pageID)));


// if template exists :

if ($smarty->templateExists(THEME_DIR . '/smarty_templates/pages/page.tpl')) :

    // display template :

    $smarty->display(THEME_DIR . '/smarty_templates/pages/page.tpl');

endif;

get_footer();
