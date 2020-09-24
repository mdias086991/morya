<?php 
    function custom_post_type() {
        register_post_type('moryanos_moryanas', array(
            'labels' => array(
                'name' => 'Moryanos e Moryanas',
                'singular_name' => 'Moryanos e Moryanas',
                
            ),
            'public' => true,
            'has_archive' => true,
            'manu_icon' => 'dashicons-ellipsis',
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes', 'comments', 'custom-fields'),
            'taxonomies'          => array( 'category' ),
        ));
    };
    add_action('init', 'custom_post_type');

    
function getProfiles() {
    return get_posts([
      'post_type' => 'moryanos_moryanas',
      'numberposts' => -1,
      'post_status' => 'publish'
    ]);
  }

?>