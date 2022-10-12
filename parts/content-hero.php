<?php
    $hero_first_subtitle = get_theme_mod( 'set_hero_first_subtitle', __( 'Please, type some first subtitle', 'manfron' ) );
    $hero_title = get_theme_mod( 'set_hero_title', __( 'Please, type some title', 'manfron' ) );
    $hero_subtitle = get_theme_mod( 'set_hero_subtitle', __( 'Please, type some subtitle', 'manfron' ) );
    $hero_button_text = get_theme_mod( 'set_hero_button_text', __( 'Learn More', 'manfron' ) );
    $hero_button_link = get_theme_mod( 'set_hero_button_link', '#' );
    $hero_height = get_theme_mod( 'set_hero_height', 800 );
    $hero_background = wp_get_attachment_url( get_theme_mod( 'set_hero_background' ) );
?>
<section id="hero" class="hero">
    <div class="hero" style="background-image: url('<?php echo esc_url( $hero_background ); ?>');">
        <div class="overlay" style="min-height: <?php echo esc_attr( $hero_height ); ?>px">
            <div class="container">
                <div class="hero-items">
                    <p><?php echo nl2br( esc_html( $hero_first_subtitle ) ); ?></p>
                    <h1><?php echo esc_html( $hero_title ); ?></h1>
                    <h4><?php echo nl2br( esc_html( $hero_subtitle ) ); ?></h4>
                    <div class="button">
                            <a href="<?php echo esc_url( $hero_button_link ); ?>"><?php echo esc_html( $hero_button_text ); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- #Hero the site -->