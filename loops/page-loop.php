<section class="PageWrap">
    <?php

    if (!is_home()) :

        // get the queried object and sanitize it :

        $current_page = sanitize_post($GLOBALS['wp_the_query']->get_queried_object());

        // get the page slug :

        $pageSlug = $current_page->post_name;

        // get page ID :

        $pageID = $current_page->ID;

        if ('' != locate_template('/templates/pages/'.$pageSlug.'.php')) {

            include(locate_template('/templates/pages/'.$pageSlug.'.php'));

        } elseif ('' != locate_template('/templates/pages/interior.php')) {

            include(locate_template('/templates/pages/interior.php'));

        };

    else :

        include(locate_template('/templates/pages/home.php'));

    endif;
    ?>
</section>