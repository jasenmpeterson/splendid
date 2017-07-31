<?php

include(locate_template('/templates/global/vars.php'));

/* Template Name: Doctor */

get_header();

// smarty :

// featured image :

$smarty->assign('featuredImage', wp_get_attachment_url(get_post_thumbnail_id($pageID), 'thumbnail'));

// the content :

$smarty->assign('pageContent', wpautop(get_post_field('post_content', $pageID)));

// dentist :

$dentists = get_field('dentist', $pageID);

$i = 0;

$dentistContent = null;

foreach ($dentists as $dentist):

  $dentistContent[$i++] = array(
                'dentistImage' => wp_get_attachment_url(get_post_thumbnail_id($dentist['name']->ID), 'thumbnail'),
                'dentistContent' => truncate(wpautop(get_post_field('post_content', $dentist['name']->ID)), 200),
                'dentistTitle' => get_the_title($dentist['name']->ID),
                'ID' => $dentist['name']->ID
            );
endforeach;

$smarty->assign('dentists', $dentistContent);


// if template exists :

if ($smarty->templateExists(THEME_DIR . '/smarty_templates/pages/doctor.tpl')) :

    // display template :

    $smarty->display(THEME_DIR . '/smarty_templates/pages/doctor.tpl');

endif;

get_footer();
