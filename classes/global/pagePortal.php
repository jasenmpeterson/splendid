<?php

namespace PagePortal;

class PagePortal
{
    public $PagePortals;

    public function displayPagePortal($pageIDs)
    {
        $args = array(

            'post_type' => 'page',
            'post__in' => $pageIDs,
            'orderby' => 'post__in'

        );

        $query = new \WP_Query($args);

        if ($query->have_posts()) :

            $count = 0;

            while ($query->have_posts()) :
        
                $query->the_post();

                $postID = get_the_ID();

                // flexible content :

                $pagePortal = get_field('page_portal',$postID);

                if($pagePortal) {
                 
                    $this->PagePortals[$count] = array (
                         $pagePortal
                    );

                    $count++;                   
                
                }

            endwhile;

        endif;        
    }
}