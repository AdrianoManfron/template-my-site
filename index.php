<?php get_header(); ?>
    <div class="header-image">
        <?php get_template_part( 'parts/content', 'header-image' ); ?>
    </div>
       <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <h1><?php esc_html_e( 'Blog', 'manfron' ); ?></h1>
                    <div class="container">
                        <div class="blog-items">
                            <?php
                                if( have_posts() ):
                                    while( have_posts() ) : the_post();
                                    get_template_part( 'parts/content' );
                                    endwhile;
                                    the_posts_pagination(); // #Pagination Posts
                                else:
                                    get_template_part( 'parts/content', 'not-posts' );
                            endif; ?>
                        </div>
                        <?php get_sidebar(); ?><!-- #Add Sidebar in the site -->
                    </div>
                </main>
            </div>
        </div>
<?php get_footer(); ?>