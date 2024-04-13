<?php
function PREFIX_remove_scripts() {
    wp_dequeue_style( 'twenty-twenty-one-style' );
    wp_deregister_style( 'twenty-twenty-one-style' );
}
add_action( 'wp_enqueue_scripts', 'PREFIX_remove_scripts', 20 );

function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Theme Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}

function acf_field_attachment_image($imageID, $size = 'full'){
    $imageTag =  wp_get_attachment_image($imageID,$size);
    $imageTag = preg_replace('/(<[^>]+) style=".*?"/i', '$1', $imageTag );
    $imageTag = preg_replace('/(<[^>]+) width=".*?"/i', '$1', $imageTag );
    $imageTag = preg_replace('/(<[^>]+) height=".*?"/i', '$1', $imageTag );
    return $imageTag; 
}

function get_page_id_by_template( $template ) {
    $args = [
        'post_type'  => 'page',
        'fields'     => 'ids',
        'nopaging'   => true,
        'meta_key'   => '_wp_page_template',
        'meta_value' => 'templates/'.$template,
        'suppress_filters' => 0
    ];  
    $pages = get_pages( $args );
    if(!empty($pages)){
        return $pages[0]->ID;
    }
    return '';
}

// Remove wordpress version
remove_action('wp_head', 'wp_generator');

?>