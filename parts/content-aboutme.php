<section id="aboutme" class="aboutme">
    <h2><?php esc_html_e( 'about_me', 'manfron' ); ?><span>( )</span></h2>
        <div class="container">
            <div class="about-item">
                <?php
                    if( is_active_sidebar( 'about-me' ) ){
                        dynamic_sidebar( 'about-me' );
                    }
                ?>
            </div>
            <div class="about-itens">
                <div class="about1">
                    <?php
                        if( is_active_sidebar( 'about-1' ) ){
                            dynamic_sidebar( 'about-1' );
                        }
                    ?>
                </div>
                <div class="about2">
                    <?php
                        if( is_active_sidebar( 'about-2' ) ){
                            dynamic_sidebar( 'about-2' );
                        }
                    ?>
                </div>                     
            </div>
        </div>
</section><!-- #Aboutme the site -->