<section id="skills" class="skills">
    <h2><?php esc_html_e( 'skills', 'manfron' ); ?><span>( )</span></h2>
    <div class="container">
        <?php
            if( is_active_sidebar( 'skill-1' ) ){
                dynamic_sidebar( 'skill-1' );
            }
        ?>
        <?php
            if( is_active_sidebar( 'skill-2' ) ){
                dynamic_sidebar( 'skill-2' );
            }
        ?>
        <?php
            if( is_active_sidebar( 'skill-3' ) ){
                dynamic_sidebar( 'skill-3' );
            }
        ?>
        <?php
            if( is_active_sidebar( 'skill-4' ) ){
                dynamic_sidebar( 'skill-4' );
            }
        ?>
        <?php
            if( is_active_sidebar( 'skill-5' ) ){
                dynamic_sidebar( 'skill-5' );
            }
        ?>
        <?php
            if( is_active_sidebar( 'skill-6' ) ){
                dynamic_sidebar( 'skill-6' );
            }
        ?>
        <?php
            if( is_active_sidebar( 'skill-7' ) ){
                dynamic_sidebar( 'skill-7' );
            }
        ?>
    </div>
</section><!-- #Skills the site -->