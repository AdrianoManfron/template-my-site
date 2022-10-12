<div class="background">
    <section id="projects" class="projects">
        <h2><?php esc_html_e( 'projects', 'manfron' ); ?><span>( )</span></h2>
        <div class="container">
            <div class="projects-itens">
                <?php
                    if( is_active_sidebar( 'project-1' ) ){
                        dynamic_sidebar( 'project-1' );
                    }
                ?>
            </div>
            <div class="projects-itens">
                <?php
                    if( is_active_sidebar( 'project-2' ) ){
                        dynamic_sidebar( 'project-2' );
                    }
                ?>
            </div>
            <div class="projects-itens">
                <?php
                    if( is_active_sidebar( 'project-3' ) ){
                        dynamic_sidebar( 'project-3' );
                    }
                ?>
            </div>
            <div class="projects-itens">
                <?php
                    if( is_active_sidebar( 'project-4' ) ){
                        dynamic_sidebar( 'project-4' );
                    }
                ?>
            </div>
        </div>
    </section><!-- #Projects the site -->
</div><!-- #End Background Custom the site -->