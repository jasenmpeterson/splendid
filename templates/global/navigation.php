<?php

include(locate_template('/templates/global/vars.php'));

use Navigation\Navigation;

$nav = new Navigation();

// smarty :

// register Navigation(); :

$smarty->registerObject('nav', $nav);
