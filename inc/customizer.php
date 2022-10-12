<?php

function manfron_customizer( $wp_customize ){
    // 1 Hero
    $wp_customize->add_section(
        'sec_hero',
        array(
            'title' => __( 'Hero Section', 'manfron' )
        )
    );

    // First Subtitle
    $wp_customize->add_setting(
        'set_hero_first_subtitle',
        array(
            'type' => 'theme_mod',
            'default' => __( 'Please, add some first subtitle', 'manfron' ),
            'sanitize_callback' => 'sanitize_textarea_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_first_subtitle',
        array(
            'label' => __( 'Hero First Subtitle', 'manfron' ),
            'description' => __( 'Please, type your first subtitle here', 'manfron' ),
            'section' => 'sec_hero',
            'type' => 'textarea'
        )
    );

    // Title
    $wp_customize->add_setting(
        'set_hero_title',
        array(
            'type' => 'theme_mod',
            'default' => __( 'Please, add some title', 'manfron' ),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_title',
        array(
            'label' => __( 'Hero Title', 'manfron' ),
            'description' => __( 'Please, type your title here', 'manfron' ),
            'section' => 'sec_hero',
            'type' => 'text'
        )
    );

    // Subtitle
    $wp_customize->add_setting(
        'set_hero_subtitle',
        array(
            'type' => 'theme_mod',
            'default' => __( 'Please, add some subtitle', 'manfron' ),
            'sanitize_callback' => 'sanitize_textarea_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_subtitle',
        array(
            'label' => __( 'Hero Subtitle', 'manfron' ),
            'description' => __( 'Please, type your subtitle here', 'manfron' ),
            'section' => 'sec_hero',
            'type' => 'textarea'
        )
    );

    // Button Text
    $wp_customize->add_setting(
        'set_hero_button_text',
        array(
            'type' => 'theme_mod',
            'default' => __( 'Learn More', 'manfron' ),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_button_text',
        array(
            'label' => __( 'Hero button text', 'manfron' ),
            'description' => __( 'Please, type your hero button text here', 'manfron' ),
            'section' => 'sec_hero',
            'type' => 'text'
        )
    );

    // Button Link
    $wp_customize->add_setting(
        'set_hero_button_link',
        array(
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_hero_button_link',
        array(
            'label' => __( 'Hero button link', 'manfron' ),
            'description' => __( 'Please, type your hero button link here', 'manfron' ),
            'section' => 'sec_hero',
            'type' => 'url'
        )
    );

    // Hero Height
    $wp_customize->add_setting(
        'set_hero_height',
        array(
            'type' => 'theme_mod',
            'default' => 800,
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_hero_height',
        array(
            'label' => __( 'Hero height', 'manfron' ),
            'description' => __( 'Please, type your hero height here', 'manfron' ),
            'section' => 'sec_hero',
            'type' => 'number'
        )
    );

    // Hero Background
    $wp_customize->add_setting(
        'set_hero_background',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize,
        'set_hero_background',
        array(
            'label' => __( 'Hero Image', 'manfron' ),
            'section' => 'sec_hero',
            'mime_type' => 'image'
        )
    ));

    // 3. Blog
	$wp_customize->add_section( 
        'sec_blog', 
        array(
		    'title' => __( 'Blog Section', 'manfron' )
	) );
    
            // Posts per page
            $wp_customize->add_setting( 
                'set_per_page', 
                array(
                    'type' => 'theme_mod',
                    'sanitize_callback' => 'absint'
            ) );

            $wp_customize->add_control( 
                'set_per_page', 
                array(
                    'label' => __( 'Posts per page', 'manfron' ),
                    'description' => __( 'How many items to display in the post list?', 'manfron' ),			
                    'section' => 'sec_blog',
                    'type' => 'number'
            ) );

            // Post categories to include
            $wp_customize->add_setting( 
                'set_category_include', 
                array(
                    'type' => 'theme_mod',
                    'sanitize_callback' => 'sanitize_text_field'
            ) );

            $wp_customize->add_control( 
                'set_category_include', 
                array(
                    'label' => __( 'Post categories to include', 'manfron' ),
                    'description' => __( 'Comma separated values or single category ID', 'manfron' ),
                    'section' => 'sec_blog',
                    'type' => 'text'
            ) );
}
add_action( 'customize_register', 'manfron_customizer' );