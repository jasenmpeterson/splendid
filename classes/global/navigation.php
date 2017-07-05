<?php

namespace Navigation;

class Navigation
{
    public function displayPrimaryMenu()
    {
        wp_nav_menu(array(

            'theme_location' => 'primary_menu',
            'container' => false,
            'menu_id' => 'desktop',
            'menu_class' => 'desktop'

        ));

        return;
    }

    public function displaySecondaryMenu()
    {
        wp_nav_menu(array(

            'theme_location' => 'secondary_menu',
            'container' => false

        ));

        return;
    }

    public function displayMobileMenu()
    {
        wp_nav_menu(array(

            'theme_location' => 'mobile_menu',
            'container' => false,
            'menu_id' => 'mobile',
            'menu_class' => 'mobile'

        ));

        return;
    }

    public function displayFooterMenu()
    {
        wp_nav_menu(array(

            'theme_location' => 'footer_menu',
            'container' => false

        ));

        return;
    }
}
