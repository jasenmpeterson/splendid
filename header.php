<!doctype html>
<html class="no-js" lang="">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="description" content="Keywords">
    <meta name="author" content="Name">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <link rel="shortcut icon" href="<?php echo THEME_URI; ?>/apple-touch-icon.png" />
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <title>
        <?php wp_title(); ?>
    </title>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
