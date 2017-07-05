<?php
namespace Footer;

class Footer
{
    public $FooterData;

    public function displayFooter()
    {
        $this->FooterData = array
        (
            'MonThruFriday' => get_field('m-f_business_hours', 'option'),
            'Saturday' => get_field('sat_business_hours', 'option'),
            'Sunday' => get_field('sun_business_hours', 'option'),
            'BusinessPhone' => get_field('business_phone', 'option'),
            'Address' => get_field('address', 'option'),
            'AppointmentURL' => get_field('appointment_url', 'option'),
        );
    }
}
