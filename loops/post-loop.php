<section class="PageWrap">
    <?php

    // get the queried object and sanitize it :

    $current_page = sanitize_post($GLOBALS['wp_the_query']->get_queried_object());

    // get the page slug :

    $postType = $current_page->post_type;

    // get page ID :

    $pageID = $current_page->ID;

    if ('' != locate_template('/templates/post/'.$postType.'.php')) {
        include(locate_template('/templates/post/'.$postType.'.php'));
    }
    ?>
</section>
