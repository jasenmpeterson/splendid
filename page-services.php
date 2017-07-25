<?php

include(locate_template('/templates/global/vars.php'));

/* Template Name: Services */

get_header();
include(locate_template('/templates/global/header.php'));

// smarty :

// featured image :

$smarty->assign('featuredImage', wp_get_attachment_url(get_post_thumbnail_id($pageID), 'thumbnail'));

// the content :

$smarty->assign('pageContent', wpautop(get_post_field('post_content', $pageID)));

// services :

$query = new WP_Query(array(
    'post_type' => 'dental_services',
    'post_status' => 'publish',
    'posts_per_page' => -1
));


while ($query->have_posts()) {
    $query->the_post();
    $services[get_the_ID()] = array(
      'serviceTitle' => str_replace(' ', '<br/>', get_the_title(get_the_ID())),
      'serviceListTitle' => get_the_title(get_the_ID()),
      'serviceID' => get_the_ID(),
      'serviceContent' => wpautop(get_the_content(get_the_ID()))
    );
}

$smarty->assign('services', $services);

wp_reset_query();

// if template exists :

if ($smarty->templateExists(THEME_DIR . '/smarty_templates/pages/services.tpl')) :

    // display template :

    $smarty->display(THEME_DIR . '/smarty_templates/pages/services.tpl');

endif;

get_footer();
include(locate_template('/templates/global/footer.php'));
