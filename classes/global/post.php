<?php

namespace PostQuery;

class PostQuery
{
    public $CollectedPost;

    public function getPost($PostType, $PostCount, $ACFField)
    {
        // post query arguments :

        $args = array(

          'post_type'      =>  $PostType,
          'status'         => 'published',
          'posts_per_page' => $PostCount,
      );

        $query = new \WP_Query($args);

      // index counter :

      $CurrentIndex = 0;

      // query the post :

      if ($query -> have_posts()) : while ($query -> have_posts()) : $query -> the_post();

      // featured img :

      $postAttachmentID = get_post_thumbnail_id(get_the_ID());
        $post_image = wp_get_attachment_image_src($postAttachmentID, 'full');
        $postImage = ($post_image) ? $post_image[0] : '';

      // collect post and store in associative array ie: array['post']['0']

      $this->CollectedPost[$PostType][$CurrentIndex++] = array(
        'Title' => get_the_title(),
        'Excerpt' => strip_tags(excerpt(50)),
        'Content' => get_the_content(),
        'URL' => get_permalink(get_the_ID()),
        'Image' => $postImage,
        'Author' => get_the_author(),
        'Date' => get_the_date('M. j, Y'),
        'Services' => ($PostType == 'service_article') ? array( // acf fields for publications post type :
          'Icon' => get_field('icon'),
          'Label' => get_field('label')
          ) : '',
        'Insights' => ($PostType == 'insight_article') ? array( // acf fields for insights post type :
          'Thumbnail' => get_field('page_banner'),
          ) : ''
      );

        endwhile;
        endif;
    }
}
