<?php

include(locate_template('/templates/global/vars.php'));

/* Template Name: About */

get_header();


// smarty :

// featured image :

$smarty->assign('featuredImage', wp_get_attachment_url(get_post_thumbnail_id($pageID), 'thumbnail'));

// the content :

$smarty->assign('pageContent', wpautop(get_post_field('post_content', $pageID)));
$smarty->assign('content', get_field('content', $pageID));

// google map :

$googlemap = get_field('google_map', $pageID);

// faq :

$faq = get_field('faq', $pageID);

$smarty->assign('faq', $faq);

foreach ($googlemap as $map):

  $smarty->assign('mapBackground', $map['background_image']);
  $smarty->assign('content', $map['content']);
  $smarty->assign('steps', $map['steps']);
  $smarty->assign('map', $map['map']);

endforeach;



// if template exists :

if ($smarty->templateExists(THEME_DIR . '/smarty_templates/pages/about.tpl')) :

    // display template :

    $smarty->display(THEME_DIR . '/smarty_templates/pages/about.tpl');

endif;

get_footer();
