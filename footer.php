
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l;
        b[l] || (b[l] =
            function() {
                (b[l].q = b[l].q || []).push(arguments)
            });
        b[l].l = +new Date;
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = 'https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-XXXXX-X', 'auto');
    ga('send', 'pageview');
</script>

<script src="<?php echo THEME_URI ?>/build/require-min.js"></script>

<?php

include(locate_template('/templates/global/vars.php'));

// smarty :

// logo :

$smarty->assign('FooterLogo', get_field('footer_logo', 'option'));

// social media :

$smarty->assign('Twitter', get_field('twitter', 'option'));
$smarty->assign('LinkedIn', get_field('linkedin', 'option'));
$smarty->assign('Facebook', get_field('Facebook', 'option'));

// if template exists :

if ($smarty->templateExists(THEME_DIR . '/smarty_templates/global/footer.tpl')) :

    // display template :

    $smarty->display(THEME_DIR . '/smarty_templates/global/footer.tpl');

endif;


wp_footer();
?>
</body>

</html>
