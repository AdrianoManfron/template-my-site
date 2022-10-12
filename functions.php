<?php

require get_template_directory() . '/inc/customizer.php';

function manfron_load_scripts(){
    // Add stylesheet in the site.
    wp_enqueue_style( 'manfron-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ), 'all' );
    // Add fonts in the site.
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;800&display=swap', array(), null );
    // Add scripts in the site.
    wp_enqueue_script( 'dropdown', get_template_directory_uri() . '/assets/js/dropdown.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'manfron_load_scripts' );

function manfron_config(){
    // Enable configuration for translation
    $textdomain = 'manfron';
    load_theme_textdomain( $textdomain, get_template_directory() . '/languages/' );

    // Register navigation menus uses wp_nav_menu in two places.
    register_nav_menus(
        array(
            'manfron_main_menu' =>  esc_html__( 'Main Menu', 'manfron' ),
            'manfron_footer_menu'   =>  esc_html__( 'Footer Menu', 'manfron' )
        )
    );

    // Image dimension for custom-header.
    $args = array(
        'height'    =>  225,
        'width'     =>  1920
    );
    // Register custom header.
    add_theme_support( 'custom-header', $args );
    // Register thumbnails images.
    add_theme_support( 'post-thumbnails' );
    // Register custom logo in the site.
    add_theme_support( 'custom-logo', array(
        'width'     =>  200,
        'height'    =>  110,
        'flex-height'   => true,
        'flex-width'    => true
    ) );
    // Register Feed Links in the site.
    add_theme_support( 'automatic-feed-links' );
    // Register HTML5 in the site.
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
    // Register title in the site.
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'manfron_config', 0 );

function manfron_sidebars(){
    // Register the sidebar on the site's blog
    register_sidebar(
        array(
            'name'  =>  esc_html__( 'Blog Sidebar', 'manfron' ),
            'id'    =>  'sidebar-blog',
            'description'   =>  esc_html__( 'This is the Blog Sidebar. You can add your widgets here.', 'manfron' ),
            'before_widget' =>  '<div class="widget-wrapper">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h4 class="widget-title">',
            'after_title'   =>  '</h4>'
        )
    );
    // Register the social links on the menu site
    register_sidebar(
        array(
            'name'  =>  esc_html__( 'Social Links Menu', 'manfron' ),
            'id'    =>  'social-menu',
            'description'   =>  esc_html__( 'This is the Social links on the menu. You can add your widgets here.', 'manfron' ),
            'before_widget' =>  '<div class="widget-wrapper">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h4 class="widget-title">',
            'after_title'   =>  '</h4>'
        )
    );
    // Register the aboutme on the site
    register_sidebar(
        array(
            'name'  =>  esc_html__( 'About Me', 'manfron' ),
            'id'    =>  'about-me',
            'description'   =>  esc_html__( 'Description About Me Area.', 'manfron' ),
            'before_widget' =>  '<div class="widget-wrapper">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h4 class="widget-title">',
            'after_title'   =>  '</h4>'
        )
    );register_sidebar(
        array(
            'name'  =>  esc_html__( 'About Me Right 1', 'manfron' ),
            'id'    =>  'about-1',
            'description'   =>  esc_html__( 'Description About Me Projects Area.', 'manfron' ),
            'before_widget' =>  '<div class="widget-wrapper">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h4 class="widget-title">',
            'after_title'   =>  '</h4>'
        )
    );register_sidebar(
        array(
            'name'  =>  esc_html__( 'About Me Right 2', 'manfron' ),
            'id'    =>  'about-2',
            'description'   =>  esc_html__( 'Description About Me Freelancer Area.', 'manfron' ),
            'before_widget' =>  '<div class="widget-wrapper">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h4 class="widget-title">',
            'after_title'   =>  '</h4>'
        )
    );

    // Register the services on the site
    register_sidebar(
        array(
            'name'  =>  esc_html__( 'Service 1', 'manfron' ),
            'id'    =>  'service-1',
            'description'   =>  esc_html__( 'First Service Area.', 'manfron' ),
            'before_widget' =>  '<div class="widget-wrapper">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h4 class="widget-title">',
            'after_title'   =>  '</h4>'
        )
    ); register_sidebar(
        array(
            'name'  =>  esc_html__( 'Service 2', 'manfron' ),
            'id'    =>  'service-2',
            'description'   =>  esc_html__( 'Second Service Area.', 'manfron' ),
            'before_widget' =>  '<div class="widget-wrapper">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h4 class="widget-title">',
            'after_title'   =>  '</h4>'
        )
    ); register_sidebar(
        array(
            'name'  =>  esc_html__( 'Service 3', 'manfron' ),
            'id'    =>  'service-3',
            'description'   =>  esc_html__( 'Third Service Area.', 'manfron' ),
            'before_widget' =>  '<div class="widget-wrapper">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h4 class="widget-title">',
            'after_title'   =>  '</h4>'
        )
    ); register_sidebar(
        array(
            'name'  =>  esc_html__( 'Service 4', 'manfron' ),
            'id'    =>  'service-4',
            'description'   =>  esc_html__( 'Fourth Service Area.', 'manfron' ),
            'before_widget' =>  '<div class="widget-wrapper">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h4 class="widget-title">',
            'after_title'   =>  '</h4>'
        )
    ); register_sidebar(
        array(
            'name'  =>  esc_html__( 'Service 5', 'manfron' ),
            'id'    =>  'service-5',
            'description'   =>  esc_html__( 'Fifth Service Area.', 'manfron' ),
            'before_widget' =>  '<div class="widget-wrapper">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h4 class="widget-title">',
            'after_title'   =>  '</h4>'
        )
    ); register_sidebar(
        array(
            'name'  =>  esc_html__( 'Service 6', 'manfron' ),
            'id'    =>  'service-6',
            'description'   =>  esc_html__( 'Sixth Service Area.', 'manfron' ),
            'before_widget' =>  '<div class="widget-wrapper">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h4 class="widget-title">',
            'after_title'   =>  '</h4>'
        )
    ); register_sidebar(
        array(
            'name'  =>  esc_html__( 'Service 7', 'manfron' ),
            'id'    =>  'service-7',
            'description'   =>  esc_html__( 'Seventh Service Area.', 'manfron' ),
            'before_widget' =>  '<div class="widget-wrapper">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h4 class="widget-title">',
            'after_title'   =>  '</h4>'
        )
    ); register_sidebar(
        array(
            'name'  =>  esc_html__( 'Service 8', 'manfron' ),
            'id'    =>  'service-8',
            'description'   =>  esc_html__( 'Eighth Service Area.', 'manfron' ),
            'before_widget' =>  '<div class="widget-wrapper">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h4 class="widget-title">',
            'after_title'   =>  '</h4>'
        )
    );
    // End of site service records

    // Register the projects on the site
    register_sidebar(
        array(
            'name'  =>  esc_html__( 'Project 1', 'manfron' ),
            'id'    =>  'project-1',
            'description'   =>  esc_html__( 'First Project Area. Maximum supported image size 300px.', 'manfron' ),
            'before_widget' =>  '<div class="widget-wrapper">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h4 class="widget-title">',
            'after_title'   =>  '</h4>'
        )
    ); register_sidebar(
        array(
            'name'  =>  esc_html__( 'Project 2', 'manfron' ),
            'id'    =>  'project-2',
            'description'   =>  esc_html__( 'Second Project Area. Maximum supported image size 300px.', 'manfron' ),
            'before_widget' =>  '<div class="widget-wrapper">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h4 class="widget-title">',
            'after_title'   =>  '</h4>'
        )
    ); register_sidebar(
        array(
            'name'  =>  esc_html__( 'Project 3', 'manfron' ),
            'id'    =>  'project-3',
            'description'   =>  esc_html__( 'Third Project Area. Maximum supported image size 300px.', 'manfron' ),
            'before_widget' =>  '<div class="widget-wrapper">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h4 class="widget-title">',
            'after_title'   =>  '</h4>'
        )
    ); register_sidebar(
        array(
            'name'  =>  esc_html__( 'Project 4', 'manfron' ),
            'id'    =>  'project-4',
            'description'   =>  esc_html__( 'Fourth Project Area. Maximum supported image size 300px.', 'manfron' ),
            'before_widget' =>  '<div class="widget-wrapper">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h4 class="widget-title">',
            'after_title'   =>  '</h4>'
        )
    );
    // End of site projects records

    // Register the skills on the site
    register_sidebar(
        array(
            'name'  =>  esc_html__( 'skill 1', 'manfron' ),
            'id'    =>  'skill-1',
            'description'   =>  esc_html__( 'First Skills Area. Maximum supported image size 64px.', 'manfron' ),
            'before_widget' =>  '<div class="widget-wrapper">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h4 class="widget-title">',
            'after_title'   =>  '</h4>'
        )
    ); register_sidebar(
        array(
            'name'  =>  esc_html__( 'skill 2', 'manfron' ),
            'id'    =>  'skill-2',
            'description'   =>  esc_html__( 'Second Skills Area. Maximum supported image size 64px.', 'manfron' ),
            'before_widget' =>  '<div class="widget-wrapper">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h4 class="widget-title">',
            'after_title'   =>  '</h4>'
        )
    ); register_sidebar(
        array(
            'name'  =>  esc_html__( 'skill 3', 'manfron' ),
            'id'    =>  'skill-3',
            'description'   =>  esc_html__( 'Third Skills Area. Maximum supported image size 64px.', 'manfron' ),
            'before_widget' =>  '<div class="widget-wrapper">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h4 class="widget-title">',
            'after_title'   =>  '</h4>'
        )
    ); register_sidebar(
        array(
            'name'  =>  esc_html__( 'skill 4', 'manfron' ),
            'id'    =>  'skill-4',
            'description'   =>  esc_html__( 'Fourth Skills Area. Maximum supported image size 64px.', 'manfron' ),
            'before_widget' =>  '<div class="widget-wrapper">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h4 class="widget-title">',
            'after_title'   =>  '</h4>'
        )
    ); register_sidebar(
        array(
            'name'  =>  esc_html__( 'skill 5', 'manfron' ),
            'id'    =>  'skill-5',
            'description'   =>  esc_html__( 'Fifth Skills Area. Maximum supported image size 64px.', 'manfron' ),
            'before_widget' =>  '<div class="widget-wrapper">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h4 class="widget-title">',
            'after_title'   =>  '</h4>'
        )
    ); register_sidebar(
        array(
            'name'  =>  esc_html__( 'skill 6', 'manfron' ),
            'id'    =>  'skill-6',
            'description'   =>  esc_html__( 'Sixth Skills Area. Maximum supported image size 64px.', 'manfron' ),
            'before_widget' =>  '<div class="widget-wrapper">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h4 class="widget-title">',
            'after_title'   =>  '</h4>'
        )
    ); register_sidebar(
        array(
            'name'  =>  esc_html__( 'skill 7', 'manfron' ),
            'id'    =>  'skill-7',
            'description'   =>  esc_html__( 'Seventh Skills Area. Maximum supported image size 64px.', 'manfron' ),
            'before_widget' =>  '<div class="widget-wrapper">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h4 class="widget-title">',
            'after_title'   =>  '</h4>'
        )
    );
    // End of site skills records

    // Register the contact on the site
    register_sidebar(
        array(
            'name'  =>  esc_html__( 'contact', 'manfron' ),
            'id'    =>  'contact',
            'description'   =>  esc_html__( 'Put a shortcode widget here and paste the code to show the contact form. Example: 7 Contact or WPForm.', 'manfron' ),
            'before_widget' =>  '<div class="widget-wrapper">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h4 class="widget-title">',
            'after_title'   =>  '</h4>'
        )
    );
    // Register the social links on the footer site
    register_sidebar(
        array(
            'name'  =>  esc_html__( 'Social Links Footer', 'manfron' ),
            'id'    =>  'social',
            'description'   =>  esc_html__( 'This is the Social links on the footer. You can add your widgets here.', 'manfron' ),
            'before_widget' =>  '<div class="widget-wrapper">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h4 class="widget-title">',
            'after_title'   =>  '</h4>'
        )
    );
}
add_action( 'widgets_init', 'manfron_sidebars' );

if( ! function_exists( 'wp_body_open' ) ){
    function wp_body_open(){
        do_action( 'wp_body_open' );
    }
} // Verification Wordpress