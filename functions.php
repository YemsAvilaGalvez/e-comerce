<?php
//registrando menú
function register_my_menus()
{
    register_nav_menus(
        //creando menú
        array(
            'menu_principal' => __('Menu Principal')
        )
    );
}
add_action('init', 'register_my_menus');

//agregamos estilos a la etiqueta <a></a>
add_filter('nav_menu_link_attributes', 'clases_menu', 10, 3);

function clases_menu($atts, $item, $args)
{
    $class = 'nav-link';
    $atts['class'] = $class;
    return $atts;
}

// imagen
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
    //set_post_thumbnail_size( 150, 150, true ); // default Featured Image dimensions (cropped)

    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size('category-thumb', 300, 9999); // 300 pixels wide (and unlimited height)
}

//logotipo
function themename_custom_logo_setup()
{
    $defaults = array(
        'height'               => 200,
        'width'                => 200,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array('site-title', 'site-description'),
        'unlink-homepage-logo' => true,
    );
    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'themename_custom_logo_setup');
