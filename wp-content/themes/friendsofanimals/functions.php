<?php

function register_resource() {
    register_nav_menu('main-menu', 'Main Menu');

    //--- Register Section ---//
    $args = array(
        'public'    => true,
        'label'     => 'Sections',
    );
    register_post_type( 'section', $args );
    
    //--- Register Testimonials ---//
    $args = array(
        'public'    => true,
        'label'     => 'Testimonials',
    );
    register_post_type( 'testimonials', $args );
    
    //--- Register Categories ---//
    $args = array(
        'public'    => true,
        'label'     => 'Categories',
    );
    register_post_type( 'categories', $args );

    //--- Custom Section Taxonomy ---//
    $args = array(
        'label'        => 'Type',
        'public'       => true,
        'hierarchical' => true,
        'show_in_nav_menus' => true,
    );
    register_taxonomy( 'type', 'section', $args );

}
add_action( 'init', 'register_resource' );

function add_class_to_li( $classes, $item, $args ) {
 
    $classes[] = 'menu-link';
    return $classes;
}
add_filter( 'nav_menu_css_class' , 'add_class_to_li' , 10, 4 );

//** *Enable upload for webp image files.*/
function webp_upload_mimes($existing_mimes) {
    $existing_mimes['webp'] = 'image/webp';
    return $existing_mimes;
}
add_filter('mime_types', 'webp_upload_mimes');

//** * Enable preview / thumbnail for webp image files.*/
function webp_is_displayable($result, $path) {
    if ($result === false) {
        $displayable_image_types = array( IMAGETYPE_WEBP );
        $info = @getimagesize( $path );

        if (empty($info)) {
            $result = false;
        } elseif (!in_array($info[2], $displayable_image_types)) {
            $result = false;
        } else {
            $result = true;
        }
    }

    return $result;
}
add_filter('file_is_displayable_image', 'webp_is_displayable', 10, 2);


?>