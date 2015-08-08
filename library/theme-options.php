<?php

/* ------------------------------------------------------------------------- *
 *  This file contains the options for the theme.
/* ------------------------------------------------------------------------- */

// Integrating Kirki with our theme
include_once( get_template_directory() . '/kirki/kirki.php' );

// Adding the configuration
Kirki::add_config( 'mc', array(
    'capability'    => 'edit_theme_options',
    'option_type'   => 'option',
    'option_name'   => 'mc',
) );

// Adding the Product Slider panel
Kirki::add_panel( 'product_slider', array(
    'priority'    => 10,
    'title'       => __( 'Product Slider', 'magnificient' ),
    'description' => __( 'A slider to show the products', 'magnificient' ),
) );

// Adding the Product Slider for Homepage section
Kirki::add_section( 'product_slider_for_homepage', array(
    'title'          => __( 'Product Slider for Homepage', 'magnificient' ),
    'description'    => __( 'This slider will be shown on the front page of your website', 'magnificient' ),
    'panel'          => 'product_slider', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

// Adding the Product Slider image 1 field
Kirki::add_field( 'mc', array(
    'type'        => 'image',
    'settings'     => 'product_slider_image_1',
    'label'       => __( 'Product Slider image 1', 'magnificient' ),
    'description' => __( 'This image will be the first image for the Product Slider.', 'magnificient' ),
    'section'     => 'product_slider_for_homepage',
    'default'     => '',
    'priority'    => 10,
) );

// Adding the Product Slider image 2 field
Kirki::add_field( 'mc', array(
    'type'        => 'image',
    'settings'     => 'product_slider_image_2',
    'label'       => __( 'Product Slider image 2', 'magnificient' ),
    'description' => __( 'This image will be the second image for the Product Slider.', 'magnificient' ),
    'section'     => 'product_slider_for_homepage',
    'default'     => '',
    'priority'    => 10,
) );

// Adding the Product Slider image 3 field
Kirki::add_field( 'mc', array(
    'type'        => 'image',
    'settings'     => 'product_slider_image_3',
    'label'       => __( 'Product Slider image 3', 'magnificient' ),
    'description' => __( 'This image will be the third image for the Product Slider.', 'magnificient' ),
    'section'     => 'product_slider_for_homepage',
    'default'     => '',
    'priority'    => 10,
) );

// Adding the Product Slider image 4 field
Kirki::add_field( 'mc', array(
    'type'        => 'image',
    'settings'     => 'product_slider_image_4',
    'label'       => __( 'Product Slider image 4', 'magnificient' ),
    'description' => __( 'This image will be the fourth image for the Product Slider.', 'magnificient' ),
    'section'     => 'product_slider_for_homepage',
    'default'     => '',
    'priority'    => 10,
) );

// Adding the Product Slider image 5 field
Kirki::add_field( 'mc', array(
    'type'        => 'image',
    'settings'     => 'product_slider_image_5',
    'label'       => __( 'Product Slider image 5', 'magnificient' ),
    'description' => __( 'This image will be the fifth image for the Product Slider.', 'magnificient' ),
    'section'     => 'product_slider_for_homepage',
    'default'     => '',
    'priority'    => 10,
) );










?>