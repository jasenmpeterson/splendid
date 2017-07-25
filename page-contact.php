<?php

include(locate_template('/templates/global/vars.php'));

/* Template Name: Contact */

get_header();
include(locate_template('/templates/global/header.php'));

// smarty :

// featured image :

$smarty->assign('featuredImage', wp_get_attachment_url(get_post_thumbnail_id($pageID), 'thumbnail'));

// the content :

$smarty->assign('pageContent', wpautop(get_post_field('post_content', $pageID)));

// google map :

$googlemap = get_field('google_map', $pageID);

$smarty->assign('map', $googlemap);

// office hours :

$smarty->assign('office_hours', get_field('office_hours', $pageID));

// contact form :
$ContactForm = do_shortcode('[contact-form-7 id="122" title="Contact Page Form"]');

$smarty->assign('ContactForm', $ContactForm);

// if template exists :

if ($smarty->templateExists(THEME_DIR . '/smarty_templates/pages/contact.tpl')) :

    // display template :

    $smarty->display(THEME_DIR . '/smarty_templates/pages/contact.tpl');

endif;

get_footer();
include(locate_template('/templates/global/footer.php'));
