<?php
namespace AboutPage;

use PostQuery\PostQuery;

class AboutPage extends PostQuery
{
    public $PageBanner;
    public $AboutContent;

    public function displayPage()
    {
        if (have_rows('page_banner')) :

            while (have_rows('page_banner')) : the_row();

        $this->PageBanner = array(
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

        // About Content :

        $this->AboutContent = array(
          'SectionLabel' => get_field('section_label'),
          'FirstContentBlock' => get_field('first_content_block'),
          'FirstContentBlockImage' => get_field('first_contact_block_image'),
          'SecondContentBlock' => get_field('second_content_block'),
          'SecondContentBlockImage' => get_field('second_content_block_image'),
          'ThirdContentBlock' => get_field('third_content_block'),
          'ThirdContentBlockImage' => get_field('third_content_block_image'),
          'FourthContentBlock' => get_field('fourth_content_block'),
        );
    }
}
