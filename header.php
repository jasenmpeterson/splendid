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

<body <?php body_class('FlexContainer'); ?>>

<?php
  include(locate_template('/templates/global/vars.php'));
 ?>

<section class="wavyline">
  <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" viewBox="0 0 423 77">
  <path d="M1.6 1.8s51.7 59.9 105.6 25.8C162-7 206.4 11.3 222.5 23.5 256 48.7 266.7 74 325.6 74s87.3-23.7 94.4-36.1" class="st2"/>
  <ellipse cx="310.3" cy="42" class="st2" rx="9.5" ry="12"/>
  <ellipse cx="330" cy="15" class="st3" rx="3" ry="3.8"/>
  <path d="M337.8 45.4l13.8-17.1 6.9 20.4z" class="st3"/>
</svg>
</section>

<section class="specialoffers">
 <p><?php echo $contactPhone; ?></p>
 <h4 class="label">Special Offers</h4>
</section>

<!-- <section class="lines">
  <svg xmlns="http://www.w3.org/2000/svg" id="Group_1" data-name="Group 1" viewBox="-63.5 202.5 2067 106">
    <path id="Line_1" d="M-63.5 210.5h2067" data-name="Line 1" class="cls-1"/>
    <path id="Line_2" d="M-63.5 240.5h2067" data-name="Line 2" class="cls-1"/>
    <path id="Line_3" d="M-63.5 270.5h2067" data-name="Line 3" class="cls-1"/>
    <path id="Line_4" d="M-63.5 300.5h2067" data-name="Line 4" class="cls-1"/>
  </svg>
</section> -->
