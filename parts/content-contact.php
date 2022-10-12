<section id="contact" class="contact">
    <h2><?php esc_html_e( 'contact', 'manfron' ); ?><span>( )</span></h2>
    <div class="container">
        <?php
            if( is_active_sidebar( 'contact' ) ){
                dynamic_sidebar( 'contact' );
            }
        ?>
    </div>
</section><!-- #Contact the site -->