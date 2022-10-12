<section id="services" class="services">
    <h2><?php esc_html_e( 'Services', 'manfron' ); ?><span>( )</span></h2>
    <div class="container">
        <div class="services-item">
            <?php
                if( is_active_sidebar( 'service-1' ) ){
                    dynamic_sidebar( 'service-1' );
                }
            ?>
        </div>
        <div class="services-item">
            <?php
                if( is_active_sidebar( 'service-2' ) ){
                    dynamic_sidebar( 'service-2' );
                }
            ?>
        </div>
        <div class="services-item">
            <?php
                if( is_active_sidebar( 'service-3' ) ){
                    dynamic_sidebar( 'service-3' );
                }
            ?>
        </div>
        <div class="services-item">
            <?php
                if( is_active_sidebar( 'service-4' ) ){
                    dynamic_sidebar( 'service-4' );
                }
            ?>
        </div>
        <div class="services-item">
            <?php
                if( is_active_sidebar( 'service-5' ) ){
                    dynamic_sidebar( 'service-5' );
                }
            ?>
        </div>
        <div class="services-item">
            <?php
                if( is_active_sidebar( 'service-6' ) ){
                    dynamic_sidebar( 'service-6' );
                }
            ?>
        </div>
        <div class="services-item">
            <?php
                if( is_active_sidebar( 'service-7' ) ){
                    dynamic_sidebar( 'service-7' );
                }
            ?>
        </div>
        <div class="services-item">
            <?php
                if( is_active_sidebar( 'service-8' ) ){
                    dynamic_sidebar( 'service-8' );
                }
            ?>
        </div>
    </div>
</section><!-- #Services the site -->