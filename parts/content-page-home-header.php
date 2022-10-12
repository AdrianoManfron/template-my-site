<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <div id="page" class="site">
        <header>
            <div class="background-top-bar-mobile">
            <section class="top-bar">
                <div class="container">
                    <?php get_template_part( 'parts/content', 'logo' ); ?>
                    <div class="menu-area">
                        <nav class="main-menu">
                            <?php get_template_part( 'parts/content', 'header-menu' ); ?>
                        </nav><!-- #Nav Menu Area -->
                    </div>
                </div>
            </section><!-- #Top Bar -->
            </div><!-- #End Background Custom the site -->
        </header><!-- #Site Header -->