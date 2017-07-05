<?php
namespace HomePage;

use PostQuery\PostQuery;

class HomePage extends PostQuery
{
    public $PageBanner;
    
    public function displayPage()
    {

        if( have_rows('page_banner') ) :
            
            while ( have_rows('page_banner') ) : the_row();

                $this->PageBanner = array (
                    'BannerImage' => get_sub_field('image'),
                    'BannerTitle' => get_sub_field('title'),
                    'BannerContent' => get_sub_field('content'),
                    'BannerSubContent' => get_sub_field('sub_content'),
                    'BannerSubContentIcon' => get_sub_field('sub_content_icon'),
                    'BannerLink' => get_sub_field('page_link'),
                    'BannerIcon' => get_sub_field('icon'),
                );

            endwhile;
            
        endif;  
    }
}
