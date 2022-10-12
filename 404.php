<?php get_header(); ?>
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">
                <div class="error-404">
                    <header>
                        <h1><?php esc_html_e( 'Page not found!', 'manfron' ); ?></h1>
                        <p><?php esc_html_e( 'Unfortunately, the page you tried to readh does not exist on this site.', 'manfron'); ?></p>
                    </header><!-- #Error 404  -->
                    <div class="error">
                        <?php the_widget( 'WP_Widget_Recent_Posts', array(
                            'title' =>  esc_html__( 'Latest Posts', 'manfron' ),
                            'number'    =>  5
                        ) ); ?><!-- #Latest Posts -->
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<?php get_footer(); ?>