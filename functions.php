<?php

register_nav_menus( array(
    'primary' => __( 'Top primary menu', 'shows' ),
    'secondary' => __( 'Secondary menu', 'shows' ),
    ) );

add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-logo' );
add_theme_support( 'widgets' );

function register_footer1_widget_area() {
    register_sidebar(
        array(
            'id' => 'footer-widget-area-1',
            'name' => esc_html__( 'Footer First Part', 'theme-domain' ),
            'description' => esc_html__( 'Your footer content', 'theme-domain' ),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => ''
        )
    );
}
add_action( 'widgets_init', 'register_footer1_widget_area' );

/* custome post type */

add_action('init','register_shows_post_type',0);
function register_shows_post_type(){
    $slider_labels=array(
        'name'=>__('Slider','shows'),
        'singular_name'=>__('Slider','shows'),
        'add_new'=>__('Add New Slider','shows'),
        'add_new_item'=>__('Add New Slider','shows'),
        'edit_item'=>__('Edit Slider','shows'),
        'new_item'=>__('New Slider','shows'),
        'view_item'=>__('View Slider','shows'),
        'search_item'=>__('Search Slider','shows'),
        'not_found'=>__('No Slider Found','shows'),
        'not_found_in_trash'=>__('No Slider Found in Trash','shows'),
        'parent_item_colon'=>__('Parent Slide:','shows'),
        'menu_name'=>__('Slides','shows'),
    );

    $slider_args=[
        'labels'=>$slider_labels,
        'description'=>__('Add your home page slides', 'shows'),
        'supports'=>array('title','thumbnail'),
        'public'=>true,
        'show_ui'=>true,
        'show_ui_menu'=>true,
        'menu_icon'=>get_stylesheet_directory_uri().'/images/slider.png',
        'show_in_nav_menu'=>true,
        'publicly_queryable'=>true,
        'exclude_from_search'=>true,
        'has_archive'=>false,
        'query_var'=>true,
        'can_export'=>true,
        'rewrite'=>true,
        'capability_type'=>'post'
    ];

    register_post_type('slider',$slider_args);
}
/* custome post type for next to slider */

add_action('init','register_feature1_post_type',0);
function register_feature1_post_type(){
    $feature1_labels=array(
        'name'=>__('Feature 1','shows'),
        'singular_name'=>__('Feature 1','shows'),
        'add_new'=>__('Add New Feature 1','shows'),
        'add_new_item'=>__('Add New Feature 1','shows'),
        'edit_item'=>__('Edit Feature 1','shows'),
        'new_item'=>__('New Feature 1','shows'),
        'view_item'=>__('View Feature 1','shows'),
        'search_item'=>__('Search Feature 1','shows'),
        'not_found'=>__('No Feature 1 Found','shows'),
        'not_found_in_trash'=>__('No Feature 1 Found in Trash','shows'),
        'parent_item_colon'=>__('Parent Feature 1:','shows'),
        'menu_name'=>__('Feature 1','shows'),
    );

    $feature1_args=[
        'labels'=>$feature1_labels,
        'description'=>__('Add your home page slides', 'shows'),
        'supports'=>array('title','thumbnail','editor'),
        'public'=>true,
        'show_ui'=>true,
        'show_ui_menu'=>true,
        'menu_icon'=>get_stylesheet_directory_uri().'/images/slider.png',
        'show_in_nav_menu'=>true,
        'publicly_queryable'=>true,
        'exclude_from_search'=>true,
        'has_archive'=>false,
        'query_var'=>true,
        'can_export'=>true,
        'rewrite'=>true,
        'capability_type'=>'post'
    ];

    register_post_type('feature_1',$feature1_args);
}