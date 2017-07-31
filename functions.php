<?php

if (! defined('WPINC')) {
    die;
}

defined('THEME_DIR') or define('THEME_DIR', get_template_directory());
defined('THEME_URI') or define('THEME_URI', get_template_directory_uri());
defined('THEME_ROOT') or define('THEME_ROOT', get_home_url());

// classes :

locate_template('classes/global/post.php', true);
locate_template('classes/global/retrieve-post.php', true);
locate_template('classes/global/navigation.php', true);
locate_template('classes/global/header.php', true);
locate_template('classes/global/footer.php', true);
locate_template('classes/global/pagePortal.php', true);
locate_template('classes/pages/home.php', true);
locate_template('classes/pages/about.php', true);
locate_template('classes/pages/clients.php', true);
locate_template('classes/pages/services.php', true);
locate_template('classes/post/services.php', true);
locate_template('classes/pages/insights.php', true);
locate_template('classes/post/insights.php', true);
locate_template('classes/pages/industry.php', true);


// smarty template engine :

require(THEME_DIR . '/smarty/libs/Smarty.class.php');

class Smarty_Base extends Smarty
{
    public function __construct()
    {
        parent::__construct();


        $this->setTemplateDir(THEME_DIR . '/smarty_templates');
        $this->setCompileDir(THEME_DIR . '/smarty_templates_c');
        $this->setCacheDir(THEME_DIR . '/smarty/libs/cache');
        $this->setConfigDir(THEME_DIR . '/ssmarty/libs/configs');
    }
}

// make sure wp_title, wp_head, and wp_footer are sent to all smarty templates :

class Smarty_Wordpress extends Smarty_Base
{
    public function __construct()
    {
        parent::__construct();

        $wptitle = wp_title(' | ', false, 'right');
        if ($wptitle) {
            $this->assign('page_title', sprintf("%s %s", $wptitle, get_bloginfo('name')));
        } else {
            $this->assign('page_title', sprintf("%s", get_bloginfo('name')));
        }

        $this->assign('resource', get_stylesheet_directory_uri() . '/resource');

        /* get wp_head */
        ob_start();
        wp_head();
        $this->assign('wp_head', ob_get_contents());
        ob_end_clean();

        /* get wp_footer */
        ob_start();
        wp_footer();
        $this->assign('wp_footer', ob_get_contents());
        ob_end_clean();
    }
}

// theme assets :

function theme_assets()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script('gmaps-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyA3Ibb_wNxXG5xwHIWvti3Ni_qYybQMNac', array(), null, true);
    wp_register_script('javascript', THEME_URI . '/build/global-min.js', array(), null, true);
    wp_enqueue_style('css', THEME_URI . '/build/global.css', array(), null);
    wp_enqueue_style('typography', 'https://fonts.googleapis.com/css?family=Prompt:400,500,700', array(), null);

    $ajaxurl = admin_url('admin-ajax.php');

    $pageParams = array(
      'siteURL' => THEME_URI,
      'root'    => get_home_url(),
      'ajaxurl'  => $ajaxurl,
      'themeDirectory' => get_stylesheet_directory_uri(),
      'javascriptDirectory' => get_stylesheet_directory_uri() . '/assets/javascript'
    );

    wp_localize_script('javascript', 'pageParams', $pageParams);

    wp_enqueue_script('javascript');
}

add_action('wp_enqueue_scripts', 'theme_assets');

// add additional body classes :

function add_slug_body_class($classes)
{
    global $post;
    if (isset($post)) {
        $classes[] = $post->post_type . '-' . $post->post_name;

        foreach (get_the_category() as $category) {
            $cat_name = $category->cat_name;

            $cat_name = str_replace(' ', '-', strtolower($cat_name));

            $classes[] = $cat_name . ' ';
        }
    }

    return $classes;
}

add_filter('body_class', 'add_slug_body_class');

// featured image support :

add_theme_support('post-thumbnails');

// svg support :

function add_svg_to_upload_mimes($upload_mimes)
{
    $upload_mimes['svg']  = 'image/svg+xml';
    $upload_mimes['svgz'] = 'image/svg+xml';

    return $upload_mimes;
}

add_filter('upload_mimes', 'add_svg_to_upload_mimes', 10, 1);

// ACF - google API key :

function my_acf_init()
{
    acf_update_setting('google_api_key', 'AIzaSyA3Ibb_wNxXG5xwHIWvti3Ni_qYybQMNac');
}

add_action('acf/init', 'my_acf_init');

// ACF - options pages :

if (function_exists('acf_add_options_page')):

acf_add_options_page(array(
    'page_title' => 'Theme Settings',
    'menu_title' => 'Theme Settings',
    'menu_slug'  => 'theme-general-settings',
    'capability' => 'edit_posts',
    'redirect'   => false
));

acf_add_options_sub_page(array(
    'page_title'  => 'Theme Header Settings',
    'menu_title'  => 'Header',
    'parent_slug' => 'theme-general-settings',
));

acf_add_options_sub_page(array(
    'page_title'  => 'Theme Foooter Settings',
    'menu_title'  => 'Footer',
    'parent_slug' => 'theme-general-settings',
));

acf_add_options_sub_page(array(
    'page_title'  => 'Theme Misc Settings',
    'menu_title'  => 'Misc',
    'parent_slug' => 'theme-general-settings',
));


endif;

// remove content editor from pages :

// add_action('admin_init', 'hide_editor');
//
// function hide_editor()
// {
//     remove_post_type_support('page', 'editor');
//     remove_post_type_support('service_article', 'editor');
// }

// allow for Draft Pages to be set as parent pages -
// in the evnet I want to organize the pages on a menu but do not want to display a parent page on the front end
add_filter('page_attributes_dropdown_pages_args', 'my_attributes_dropdown_pages_args', 1, 1);

function my_attributes_dropdown_pages_args($dropdown_args)
{
    $dropdown_args['post_status'] = array( 'publish', 'draft' );

    return $dropdown_args;
}

// iframe filter :

function filter_ptags_on_images($content)
{
    $content = preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
    return preg_replace('/<p>\s*(<iframe .*>*.<\/iframe>)\s*<\/p>/iU', '\1', $content);
}

// IFRAME WRAPPER

function iframe_wrapper($content)
{

    // match any iframes
    $pattern = '~<iframe.*</iframe>|<embed.*</embed>~';

    preg_match_all($pattern, $content, $matches);


    foreach ($matches[0] as $match) {
        // wrap matched iframe with div

        $wrappedframe = '<section class="responsive-video-container">' . $match . '</section>';

        //replace original iframe with new in content
        $content = str_replace($match, $wrappedframe, $content);
    }


    return $content;
}

// blacklist wordpress nav class names - https://wpscholar.com/blog/remove-extraneous-wordpress-nav-menu-class-names/ :

add_filter('nav_menu_css_class', function (array $classes, $item, $args, $depth) {
    $disallowed_class_names = array(
        "menu-item-object-{$item->object}",
        "menu-item-type-{$item->type}",
        "menu-item-{$item->ID}",
        "current-{$item->object}-parent",
        "current-{$item->type}-parent",
        "current-{$item->object}-ancestor",
        "current-{$item->type}-ancestor",
        'page_item',
        'page_item_has_children',
        "page-item-{$item->object_id}",
        'current_page_item',
        'current_page_parent',
        'current_page_ancestor',
    );
    foreach ($classes as $class) {
        if (in_array($class, $disallowed_class_names)) {
            $key = array_search($class, $classes);
            if (false !== $key) {
                unset($classes[ $key ]);
            }
        }
    }

    return $classes;
}, 10, 4);

// allow all tiny mce html tags :

function override_mce_options($initArray)
{
    $opts = '*[*]';
    $initArray['valid_elements'] = $opts;
    $initArray['extended_valid_elements'] = $opts;
    return $initArray;
}
add_filter('tiny_mce_before_init', 'override_mce_options');

// register menus :

register_nav_menus(array(

    'primary_menu'   => __('Primary Menu'),
    'secondary_menu' => __('Secondary Menu'),
    'mobile_menu' => __('Mobile Menu'),
    'footer_menu'    => __('Footer Menu'),

));

// custom text length :

function truncate($text, $length)
{
    $length = abs((int)$length);
    if (strlen($text) > $length) {
        $text = preg_replace("/^(.{1,$length})(\s.*|$)/s", '\\1...', $text);
    }
    return($text);
}

/*

	Plugin name: WPCF7 FLoating Labels
	Author: Richard Keller
	URI: http://richardkeller.net
	Description: Adds floating lables to all text inputs

*/
function append_style_and_js( ){

    ?>
    <script type="text/javascript">
      jQuery(document).ready(function(){

        jQuery(document).on('focus', 'input[type=text], input[type=email], textarea', function(e){
          var ph = jQuery(this).attr('placeholder');
          if( ph ){
            jQuery(this).attr('ph', jQuery(this).attr('placeholder') );
            jQuery(this).attr('placeholder', '');
            jQuery(this).animate({'padding-top':'20px', 'position' : 'relative'}, 100);
            jQuery(this).parent().append('<div class="floating-label">' + ph + '</div>');
            jQuery(this).parent().find('.floating-label').fadeIn();
          }
        });
      });
    </script>
    <?php

}

add_action('wp_footer', 'append_style_and_js');