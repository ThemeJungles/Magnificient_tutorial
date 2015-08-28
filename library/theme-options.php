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

// Adding the Product Description panel
Kirki::add_panel( 'product_description', array(
    'priority'    => 10,
    'title'       => __( 'Product Description', 'magnificient' ),
    'description' => __( 'Panels to show description of the products', 'magnificient' ),
) );

// Adding the Product Details panel
Kirki::add_panel( 'product_details', array(
    'priority'    => 10,
    'title'       => __( 'Product Details', 'magnificient' ),
    'description' => __( 'Panels to show details of the products', 'magnificient' ),
) );

// Adding the Team Showcase panel
Kirki::add_panel( 'team_showcase', array(
    'priority'    => 10,
    'title'       => __( 'Team Showcase', 'magnificient' ),
    'description' => __( 'A section to show your team', 'magnificient' ),
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

// Adding the Product Images for Homepage section
Kirki::add_section( 'product_images_for_homepage', array(
    'title'          => __( 'Product Images for Homepage', 'magnificient' ),
    'description'    => __( 'These images will be shown on the product description panels on the  front page of your website', 'magnificient' ),
    'panel'          => 'product_description', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

// Adding the Product Description for Homepage section
Kirki::add_section( 'product_description_for_homepage', array(
    'title'          => __( 'Product Description for Homepage', 'magnificient' ),
    'description'    => __( 'These panels will be shown on the front page of your website', 'magnificient' ),
    'panel'          => 'product_description', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

// Adding the Product Details for Homepage section
Kirki::add_section( 'product_details_for_homepage', array(
    'title'          => __( 'Product Details for Homepage', 'magnificient' ),
    'description'    => __( 'This will show the details on the front page of your website', 'magnificient' ),
    'panel'          => 'product_details', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

// Adding the Team Showcase for Homepage section
Kirki::add_section( 'team_showcase_for_homepage', array(
    'title'          => __( 'Team Showcase for Homepage', 'magnificient' ),
    'description'    => __( 'This will show the team members on the front page of your website', 'magnificient' ),
    'panel'          => 'team_showcase', // Not typically needed.
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

// Adding the Product Slider caption 1 field
Kirki::add_field( 'mc', array(
    'type'        => 'text',
    'settings'     => 'product_slider_caption_1',
    'label'       => __( 'Product Slider caption 1', 'magnificient' ),
    'description' => __( 'This caption will be the description for the first slide.', 'magnificient' ),
    'section'     => 'product_slider_for_homepage',
    'default'     => __( 'This is some default text', 'magnificient' ),
    'priority'    => 10,
) );

// Adding the Product Slider caption 2 field
Kirki::add_field( 'mc', array(
    'type'        => 'text',
    'settings'     => 'product_slider_caption_2',
    'label'       => __( 'Product Slider caption 2', 'magnificient' ),
    'description' => __( 'This caption will be the description for the second slide.', 'magnificient' ),
    'section'     => 'product_slider_for_homepage',
    'default'     => __( 'This is some default text', 'magnificient' ),
    'priority'    => 10,
) );

// Adding the Product Slider caption 3 field
Kirki::add_field( 'mc', array(
    'type'        => 'text',
    'settings'     => 'product_slider_caption_3',
    'label'       => __( 'Product Slider caption 3', 'magnificient' ),
    'description' => __( 'This caption will be the description for the third slide.', 'magnificient' ),
    'section'     => 'product_slider_for_homepage',
    'default'     => __( 'This is some default text', 'magnificient' ),
    'priority'    => 10,
) );

// Adding the Product Slider caption 4 field
Kirki::add_field( 'mc', array(
    'type'        => 'text',
    'settings'     => 'product_slider_caption_4',
    'label'       => __( 'Product Slider caption 4', 'magnificient' ),
    'description' => __( 'This caption will be the description for the fourth slide.', 'magnificient' ),
    'section'     => 'product_slider_for_homepage',
    'default'     => __( 'This is some default text', 'magnificient' ),
    'priority'    => 10,
) );

// Adding the Product Slider caption 5 field
Kirki::add_field( 'mc', array(
    'type'        => 'text',
    'settings'     => 'product_slider_caption_5',
    'label'       => __( 'Product Slider caption 5', 'magnificient' ),
    'description' => __( 'This caption will be the description for the fifth slide.', 'magnificient' ),
    'section'     => 'product_slider_for_homepage',
    'default'     => __( 'This is some default text', 'magnificient' ),
    'priority'    => 10,
) );

// Adding the Product Description Image 1 field
Kirki::add_field( 'mc', array(
    'type'        => 'image',
    'settings'     => 'product_description_image_1',
    'label'       => __( 'Product Description image 1', 'magnificient' ),
    'description' => __( 'This image will be the first image for the Product Description.', 'magnificient' ),
    'section'     => 'product_images_for_homepage',
    'default'     => '',
    'priority'    => 10,
) );

// Adding the Product Description Image 2 field
Kirki::add_field( 'mc', array(
    'type'        => 'image',
    'settings'     => 'product_description_image_2',
    'label'       => __( 'Product Description image 2', 'magnificient' ),
    'description' => __( 'This image will be the second image for the Product Description.', 'magnificient' ),
    'section'     => 'product_images_for_homepage',
    'default'     => '',
    'priority'    => 10,
) );

// Adding the Product Description Image 3 field
Kirki::add_field( 'mc', array(
    'type'        => 'image',
    'settings'     => 'product_description_image_3',
    'label'       => __( 'Product Description image 3', 'magnificient' ),
    'description' => __( 'This image will be the third image for the Product Description.', 'magnificient' ),
    'section'     => 'product_images_for_homepage',
    'default'     => '',
    'priority'    => 10,
) );

// Adding the Product Description Textarea 1 field
Kirki::add_field( 'mc', array(
    'type'        => 'textarea',
    'settings'     => 'product_description_textarea_1',
    'label'       => __( 'Product Description textarea 1', 'magnificient' ),
    'description' => __( 'This description will be the description for the first product.', 'magnificient' ),
    'section'     => 'product_description_for_homepage',
    'default'     => __( 'This is some default text', 'magnificient' ),
    'priority'    => 10,
) );

// Adding the Product Description Textarea 2 field
Kirki::add_field( 'mc', array(
    'type'        => 'textarea',
    'settings'     => 'product_description_textarea_2',
    'label'       => __( 'Product Description textarea 2', 'magnificient' ),
    'description' => __( 'This description will be the description for the second product.', 'magnificient' ),
    'section'     => 'product_description_for_homepage',
    'default'     => __( 'This is some default text', 'magnificient' ),
    'priority'    => 10,
) );

// Adding the Product Description Textarea 3 field
Kirki::add_field( 'mc', array(
    'type'        => 'textarea',
    'settings'     => 'product_description_textarea_3',
    'label'       => __( 'Product Description textarea 3', 'magnificient' ),
    'description' => __( 'This description will be the description for the third product.', 'magnificient' ),
    'section'     => 'product_description_for_homepage',
    'default'     => __( 'This is some default text', 'magnificient' ),
    'priority'    => 10,
) );

// Adding the Product Details image 1 field
Kirki::add_field( 'mc', array(
    'type'        => 'image',
    'settings'     => 'product_details_image_1',
    'label'       => __( 'Product Details image 1', 'magnificient' ),
    'description' => __( 'This image will be the first image for the Product Details.', 'magnificient' ),
    'section'     => 'product_details_for_homepage',
    'default'     => '',
    'priority'    => 10,
) );

// Adding the Product Details image 2 field
Kirki::add_field( 'mc', array(
    'type'        => 'image',
    'settings'     => 'product_details_image_2',
    'label'       => __( 'Product Details image 2', 'magnificient' ),
    'description' => __( 'This image will be the second image for the Product Details.', 'magnificient' ),
    'section'     => 'product_details_for_homepage',
    'default'     => '',
    'priority'    => 10,
) );

// Adding the Product Details textarea 1 field
Kirki::add_field( 'mc', array(
    'type'        => 'textarea',
    'settings'     => 'product_details_textarea_1',
    'label'       => __( 'Product Details textarea 1', 'magnificient' ),
    'description' => __( 'This description will be the details for the first product.', 'magnificient' ),
    'section'     => 'product_details_for_homepage',
    'default'     => __( 'This is some default text', 'magnificient' ),
    'priority'    => 10,
) );

// Adding the Product Details textarea 2 field
Kirki::add_field( 'mc', array(
    'type'        => 'textarea',
    'settings'     => 'product_details_textarea_2',
    'label'       => __( 'Product Details textarea 2', 'magnificient' ),
    'description' => __( 'This description will be the details for the second product.', 'magnificient' ),
    'section'     => 'product_details_for_homepage',
    'default'     => __( 'This is some default text', 'magnificient' ),
    'priority'    => 10,
) );

// Adding the Team Showcase image 1 field
Kirki::add_field( 'mc', array(
    'type'        => 'image',
    'settings'     => 'team_showcase_image_1',
    'label'       => __( 'Team Showcase image 1', 'magnificient' ),
    'description' => __( 'This image will be the first image for the Team Showcase.', 'magnificient' ),
    'section'     => 'team_showcase_for_homepage',
    'default'     => '',
    'priority'    => 10,
) );

// Adding the Team Showcase image 2 field
Kirki::add_field( 'mc', array(
    'type'        => 'image',
    'settings'     => 'team_showcase_image_2',
    'label'       => __( 'Team Showcase image 2', 'magnificient' ),
    'description' => __( 'This image will be the second image for the Team Showcase.', 'magnificient' ),
    'section'     => 'team_showcase_for_homepage',
    'default'     => '',
    'priority'    => 10,
) );

// Adding the Team Showcase image 3 field
Kirki::add_field( 'mc', array(
    'type'        => 'image',
    'settings'     => 'team_showcase_image_3',
    'label'       => __( 'Team Showcase image 3', 'magnificient' ),
    'description' => __( 'This image will be the third image for the Team Showcase.', 'magnificient' ),
    'section'     => 'team_showcase_for_homepage',
    'default'     => '',
    'priority'    => 10,
) );

// Adding the Team Showcase text 1 field
Kirki::add_field( 'mc', array(
    'type'        => 'text',
    'settings'     => 'team_showcase_text_1',
    'label'       => __( 'Team Member 1', 'magnificient' ),
    'description' => __( 'Name of the first member.', 'magnificient' ),
    'section'     => 'team_showcase_for_homepage',
    'default'     => __( 'John Doe', 'magnificient' ),
    'priority'    => 10,
) );

// Adding the Team Showcase text 2 field
Kirki::add_field( 'mc', array(
    'type'        => 'text',
    'settings'     => 'team_showcase_text_2',
    'label'       => __( 'Team Member 2', 'magnificient' ),
    'description' => __( 'Name of the second member.', 'magnificient' ),
    'section'     => 'team_showcase_for_homepage',
    'default'     => __( 'John Doe', 'magnificient' ),
    'priority'    => 10,
) );

// Adding the Team Showcase text 3 field
Kirki::add_field( 'mc', array(
    'type'        => 'text',
    'settings'     => 'team_showcase_text_3',
    'label'       => __( 'Team Member 3', 'magnificient' ),
    'description' => __( 'Name of the third member.', 'magnificient' ),
    'section'     => 'team_showcase_for_homepage',
    'default'     => __( 'John Doe', 'magnificient' ),
    'priority'    => 10,
) );


?>