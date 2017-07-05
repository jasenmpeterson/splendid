<?php

namespace PostQuery;

class PostQuery
{
    private $postID;
    private $postCount;
    private $postType;

    public function __construct($postID, $postCount, $postType)
    {
        $this->postID = $postID;
        $this->postCount = $postCount;
        $this->postType = $postType;
    }

    public function getPost()
    {
        $args = array(

            'post_type'      => $this->postType,
            'posts_per_page' => $this->postContent,
            'status'         => 'published',
            'p'              => $this->postID,

        );

        $query = new \WP_Query($args);

        // store post IDs :

        if ($query->have_posts()) :

        $count = 0;

        while ($query->have_posts()) :

                $query->the_post();

        $postID = get_the_ID();
        $postType = get_post_type();

        $this->postArray[$count] = array(
                    'postID' => $postID,
                    'postType' => $postType
                );

        $count++;

        endwhile;

        endif;
    }
}
