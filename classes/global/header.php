<?php

namespace Header;

class Header
{
    public $SiteLogo;
    public $Twitter;
    public $LinkedIn;
    
    public function displayHeader()
    {
        $this->SiteLogo = get_field('logo_code', 'option');
        $this->Twitter = get_field('twitter', 'option');
        $this->LinkedIn = get_field('linkedin', 'option');
    }
}
