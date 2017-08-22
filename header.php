<!doctype html>
<html class="no-js" lang="">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="description" content="Keywords">
    <meta name="author" content="Name">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <link rel="shortcut icon" href="<?php echo THEME_URI; ?>/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo THEME_URI; ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo THEME_URI; ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo THEME_URI; ?>/favicon-16x16.png">
    <link rel="manifest" href="<?php echo THEME_URI; ?>/manifest.json">
    <link rel="mask-icon" href="<?php echo THEME_URI; ?>/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <title>
        <?php wp_title(); ?>
    </title>

    <?php wp_head(); ?>

</head>

<body
<?php

  (!is_front_page()) ? body_class('FlexContainer interiorPage')  : body_class('homepage FlexContainer');

?>
>
<?php
  include(locate_template('/templates/global/vars.php'));
 ?>

<section class="wavyline">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 238.4 38.14">
        <path d="M25.79,34.12a.9.9,0,0,1,.56.19A61.14,61.14,0,0,0,53.12,46.81c13.91,2.54,23.48-1.26,33.62-5.3,8.17-3.25,16.62-6.61,27.77-6.79h.93c14.83,0,23.25,5.82,33,12.55,7.43,5.14,15.85,11,28.54,14.65C201.4,69,230,64.58,262,48.7a.89.89,0,0,1,1.21.41.9.9,0,0,1-.41,1.21c-32.39,16.1-61.45,20.58-86.36,13.34-13-3.77-21.52-9.68-29.06-14.9-9.47-6.55-17.67-12.23-32-12.23h-.88c-10.81.18-19.11,3.47-27.13,6.66-10.4,4.13-20.21,8-34.61,5.4A62.93,62.93,0,0,1,25.23,35.73a.91.91,0,0,1,.56-1.62Z" transform="translate(-24.89 -28.87)"/>
        <path d="M229.33,46.92l-3.27-.2-3.27-.2,1.81-2.73L226.4,41,227.87,44l1.46,2.93m3,2-2.86-5.74-2.86-5.74-3.54,5.35-3.54,5.35,6.4.39,6.4.39Z" transform="translate(-24.89 -28.87)" />
        <path d="M204.22,49.36a3.4,3.4,0,1,1,3.4-3.4,3.4,3.4,0,0,1-3.4,3.4m0,1.81A5.21,5.21,0,1,0,199,46a5.21,5.21,0,0,0,5.21,5.21Z" transform="translate(-24.89 -28.87)"/>
        <path d="M214.06,32.27a.79.79,0,1,1,.79-.79.79.79,0,0,1-.79.79m0,1.81a2.6,2.6,0,1,0-2.6-2.6,2.6,2.6,0,0,0,2.6,2.6Z" transform="translate(-24.89 -28.87)"/>
    </svg>
</section>

<section class="specialoffers">
    <p><?php echo $contactPhone; ?></p>
    <h4 class="label">Special Offers</h4>
</section>

<?php
   // include(locate_template('splashpage.php'));

    // smarty :

    // if template exists :

    if ($smarty->templateExists(THEME_DIR . '/smarty_templates/global/specialoffers.tpl')) :

        // display template :

        $smarty->display(THEME_DIR . '/smarty_templates/global/specialoffers.tpl');

    endif;
?>

<?php

include(locate_template('/templates/global/navigation.php'));

// smarty :

// if template exists :

if ($smarty->templateExists(THEME_DIR . '/smarty_templates/global/header.tpl')) :

    // display template :

    $smarty->display(THEME_DIR . '/smarty_templates/global/header.tpl');

endif;
