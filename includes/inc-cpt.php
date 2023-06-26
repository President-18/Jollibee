<?php
function jollibee_custom_post(){
    $foods_label = array(
        'name'          => __('Foods', 'textdomain'),
        'singular_name' => __('Foods', 'textdomain'),
        'add_new'       => __('Add Foods', 'textdomain'),
        'edit_item'     => __('Edit Foods', 'textdomain'),
        'add_new_item'  => __('Add New Foods', 'textdomain'),
        'all_items'     => __('Foods', 'textdomain'),
    );
    $foods_args = array(
        'labels' => $foods_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'supports' => array('title')
    );

    register_post_type('foods', $foods_args);


}


add_action ('init', 'jollibee_custom_post');